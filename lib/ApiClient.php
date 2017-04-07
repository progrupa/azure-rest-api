<?php

namespace Progrupa\Azure;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class ApiClient extends AbstractApiClient
{
    /** @var  ClientInterface */
    private $http;
    /** @var  string */
    private $azureAccount;
    /** @var  string */
    private $azureKey;

    /**
     * ApiClient constructor.
     * @param ClientInterface $http
     * @param string $azureAccount
     * @param string $azureKey
     */
    public function __construct(Configuration $configuration, ClientInterface $http, $azureAccount, $azureKey)
    {
        parent::__construct($configuration);
        $this->http = $http;
        $this->azureAccount = $azureAccount;
        $this->azureKey = $azureKey;
    }

    public function callApi($resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null)
    {
        $request = new Request($method, $resourcePath, $headerParams);

        $options = ['query' => $queryParams];
        // form data
        if ($postData) {
            if ($this->hasHeader($request, 'Content-Type', 'application/x-www-form-urlencoded')) {
                $queryParams = array_merge($queryParams, $postData);
            } elseif ((is_object($postData) or is_array($postData))) {
                if ($this->hasHeader($request, 'Content-Type', 'multipart/form-data')) {
                    $options['form_params'] = $this->convertToMultipart($postData);
                } else {// json model
                    $postData = json_encode(\Progrupa\Azure\ObjectSerializer::sanitizeForSerialization($postData));
                    $options['body'] = $postData;
                }
            }
        }

        $request = $this->addAuthorization($queryParams, $request);

        try {
            $response = $this->http->send($request, $options);

            $http_header = $response->getHeaders();
            $http_status_code = $response->getStatusCode();
            $http_body = $response->getBody()->getContents();

            if ($responseType === '\SplFileObject' || $responseType === 'string') {
                return [$http_body, $http_status_code, $http_header];
            }

            $data = json_decode($http_body);
            if (json_last_error() > 0) { // if response is a string
                $data = $http_body;
            }
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
            $http_header = $response->getHeaders();
            $http_status_code = $response->getStatusCode();
            $http_body = $response->getBody()->getContents();

            if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
                $data = json_decode($http_body);
                if (json_last_error() > 0) { // if response is a string
                    $data = $http_body;
                }

                throw new ApiException(
                    "[".$http_status_code."] Error connecting to the API ({$request->getUri()})",
                    $http_status_code,
                    $http_header,
                    $data
                );
            } else {
                throw $exception;
            }
        }

        return [$data, $http_status_code, $http_header];
    }

    /**
     * @param $queryParams
     * @param $request
     * @return Request
     */
    protected function addAuthorization($queryParams, Request $request)
    {
        /** @var Request $request */
        $request = $request->withAddedHeader('ocp-date', gmdate('D, d M Y H:i:s T'));

        $canonicalizedHeaders = $this->prepareCanonicalizedHeaders($request);
        $canonicalizedResource = $this->prepareCanonicalizedResource($request, $queryParams);

        $signature = sprintf(
            "%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s\n%s",
            strtoupper($request->getMethod()),
            implode(',', $request->getHeader('Content-Encoding')),
            implode(',', $request->getHeader('Content-Language')),
            implode(',', $request->getHeader('Content-Length')),
            implode(',', $request->getHeader('Content-MD5')),
            implode(',', $request->getHeader('Content-Type')),
            implode(',', $request->getHeader('Date')),
            implode(',', $request->getHeader('If-Modified-Since')),
            implode(',', $request->getHeader('If-Match')),
            implode(',', $request->getHeader('If-None-Match')),
            implode(',', $request->getHeader('If-Unmodified-Since')),
            implode(',', $request->getHeader('Range')),
            trim($canonicalizedHeaders),
            trim($canonicalizedResource)
        );

        $hmac = hash_hmac('sha256', $signature, base64_decode($this->azureKey), true);
        /** @var Request $request */
        $request = $request->withAddedHeader(
            'Authorization',
            sprintf("SharedKey %s:%s", $this->azureAccount, base64_encode($hmac))
        );

        return $request;
    }

    /**
     * @param Request $request
     * @return array|string
     */
    protected function prepareCanonicalizedHeaders(Request $request)
    {
        $canonicalizedHeaders = '';
        $headers = $request->getHeaders();
        $preppedHeaders = [];
        foreach ($headers as $header => $value) {
            $preppedHeaders[strtolower($header)] = $value;
        }
        ksort($preppedHeaders);

        foreach ($preppedHeaders as $header => $value) {
            if (0 === strpos($header, 'ocp-')) {
                $canonicalizedHeaders .= sprintf("%s:%s\n", trim($header), trim(implode(',', $value)));
            }
        }

        return trim($canonicalizedHeaders);
    }

    protected function prepareCanonicalizedResource(Request $request, array $parameters = [])
    {
        $uri = $request->getUri();

        $path = ltrim($uri->getPath(), '/');

        $preppedParameters = '';
        if (count($parameters)) {
            foreach ($parameters as $name => $value) {
                $queryParameters[strtolower($name)] = trim(urldecode(is_array($value) ? implode(',', $value): $value));
            }
            ksort($queryParameters);

            foreach ($queryParameters as $header => $value) {
                $preppedParameters .= sprintf("%s:%s\n", $header, is_array($value) ? implode(',', $value) : $value);
            }
        }

        return sprintf(
            "/%s/%s\n%s",
            strtolower($this->azureAccount),
            $path,
            trim($preppedParameters)
        );
    }

    private function convertToMultipart($data)
    {
        $out = [];
        foreach ($data as $k => $v) {
            $out[] = [
                'name'     => $k,
                'contents' => $v
            ];
        }
        return $out;
    }

    /**
     * @param $request
     * @return bool
     */
    protected function hasHeader(Request $request, $header, $value)
    {
        return $request->hasHeader($header) and false !== array_search($value, $request->getHeader($header), true);
    }
}
