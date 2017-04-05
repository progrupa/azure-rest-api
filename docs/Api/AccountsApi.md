# Progrupa\Azure\AccountsApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountListNodeAgentSkus**](AccountsApi.md#accountListNodeAgentSkus) | **GET** /nodeagentskus | Lists all node agent SKUs supported by the Azure Batch service.


# **accountListNodeAgentSkus**
> \Progrupa\Azure\Model\AccountListNodeAgentSkusResult accountListNodeAgentSkus($api_version, $filter, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all node agent SKUs supported by the Azure Batch service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\AccountsApi();
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 results will be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->accountListNodeAgentSkus($api_version, $filter, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountListNodeAgentSkus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 results will be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\AccountListNodeAgentSkusResult**](../Model/AccountListNodeAgentSkusResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

