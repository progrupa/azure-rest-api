<?php

namespace Progrupa\Azure;


interface ApiClientInterface
{

    /**
     * Make the HTTP call (Sync)
     *
     * @param string $resourcePath path to method endpoint
     * @param string $method       method to call
     * @param array  $queryParams  parameters to be place in query URL
     * @param array  $postData     parameters to be placed in POST body
     * @param array  $headerParams parameters to be place in request header
     * @param string $responseType expected response type of the endpoint
     * @param string $endpointPath path to method endpoint before expanding parameters
     *
     * @throws \Progrupa\Azure\ApiException on a non 2xx response
     * @return mixed
     */
    public function callApi(
        $resourcePath,
        $method,
        $queryParams,
        $postData,
        $headerParams,
        $responseType = null,
        $endpointPath = null
    );

    /**
     * Get the serializer
     *
     * @return ObjectSerializer
     */
    public function getSerializer();

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    public function selectHeaderAccept($accept);

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $content_type Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    public function selectHeaderContentType($content_type);

    /**
     * Get the config
     *
     * @return Configuration
     */
    public function getConfig();

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier);
}
