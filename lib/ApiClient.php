<?php

namespace Progrupa\Azure;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use Progrupa\Azure\Authentication\AuthenticationPluginInterface;
use Progrupa\Azure\Authentication\SharedKeyPlugin;
use Psr\Http\Message\RequestInterface;

class ApiClient extends AbstractApiClient
{
    /** @var  ClientInterface */
    private $http;

    /**
     * ApiClient constructor.
     * @param ClientInterface $http
     * @param string $azureAccount
     * @param string $azureKey
     */
    public function __construct(Configuration $configuration, ClientInterface $http, AuthenticationPluginInterface $authenticationPlugin)
    {
        parent::__construct($configuration);
        $this->http = $http;
        $authenticationPlugin->attach($this->http);
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
