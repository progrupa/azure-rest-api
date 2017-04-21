<?php

namespace Progrupa\Azure\Authentication;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class SharedKeyPlugin implements AuthenticationPluginInterface
{
    /** @var  string */
    private $azureAccount;
    /** @var  string */
    private $azureKey;

    /**
     * SharedKeyPlugin constructor.
     * @param string $azureAccount
     * @param string $azureKey
     */
    public function __construct($azureAccount, $azureKey)
    {
        $this->azureAccount = $azureAccount;
        $this->azureKey = $azureKey;
    }

    public function attach(ClientInterface $client)
    {
        $stack = $client->getConfig('handler');
        $stack->after('prepare_body', Middleware::mapRequest([$this, 'addAuthorization']), 'add_authorization');
    }

    /**
     * @param $queryParams
     * @param $request
     * @return RequestInterface
     */
    public function addAuthorization(RequestInterface $request)
    {
        /** @var RequestInterface $request */
        $request = $request->withAddedHeader('ocp-date', gmdate('D, d M Y H:i:s T'));

        $canonicalizedHeaders = $this->prepareCanonicalizedHeaders($request);
        $canonicalizedResource = $this->prepareCanonicalizedResource($request);

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
        /** @var RequestInterface $request */
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
    protected function prepareCanonicalizedHeaders(RequestInterface $request)
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

    protected function prepareCanonicalizedResource(RequestInterface $request)
    {
        $uri = $request->getUri();

        $path = ltrim($uri->getPath(), '/');

        if ($uri->getQuery()) {
            $parametersRaw = explode("&", urldecode($uri->getQuery()));
            $parameters = [];

            foreach ($parametersRaw as $value) {
                $v = explode('=', $value);
                $parameters[$v[0]] = count($v) > 1 ? $v[1] : '1';
            }
        } else {
            $parameters = [];
        }

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
}
