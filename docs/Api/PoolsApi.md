# Progrupa\Azure\PoolsApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolAdd**](PoolsApi.md#poolAdd) | **POST** /pools | Adds a pool to the specified account.
[**poolDelete**](PoolsApi.md#poolDelete) | **DELETE** /pools/{poolId} | Deletes a pool from the specified account.
[**poolDisableAutoScale**](PoolsApi.md#poolDisableAutoScale) | **POST** /pools/{poolId}/disableautoscale | Disables automatic scaling for a pool.
[**poolEnableAutoScale**](PoolsApi.md#poolEnableAutoScale) | **POST** /pools/{poolId}/enableautoscale | Enables automatic scaling for a pool.
[**poolEvaluateAutoScale**](PoolsApi.md#poolEvaluateAutoScale) | **POST** /pools/{poolId}/evaluateautoscale | Gets the result of evaluating an automatic scaling formula on the pool.
[**poolExists**](PoolsApi.md#poolExists) | **HEAD** /pools/{poolId} | 
[**poolGet**](PoolsApi.md#poolGet) | **GET** /pools/{poolId} | 
[**poolGetAllPoolsLifetimeStatistics**](PoolsApi.md#poolGetAllPoolsLifetimeStatistics) | **GET** /lifetimepoolstats | Gets lifetime summary statistics for all of the pools in the specified account.
[**poolList**](PoolsApi.md#poolList) | **GET** /pools | Lists all of the pools in the specified account.
[**poolListPoolUsageMetrics**](PoolsApi.md#poolListPoolUsageMetrics) | **GET** /poolusagemetrics | Lists the usage metrics, aggregated by pool across individual time intervals, for the specified account.
[**poolPatch**](PoolsApi.md#poolPatch) | **PATCH** /pools/{poolId} | Updates the properties of the specified pool.
[**poolResize**](PoolsApi.md#poolResize) | **POST** /pools/{poolId}/resize | Changes the number of compute nodes that are assigned to a pool.
[**poolStopResize**](PoolsApi.md#poolStopResize) | **POST** /pools/{poolId}/stopresize | Stops an ongoing resize operation on the pool.
[**poolUpdateProperties**](PoolsApi.md#poolUpdateProperties) | **POST** /pools/{poolId}/updateproperties | Updates the properties of the specified pool.
[**poolUpgradeOS**](PoolsApi.md#poolUpgradeOS) | **POST** /pools/{poolId}/upgradeos | Upgrades the operating system of the specified pool.


# **poolAdd**
> poolAdd($pool, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a pool to the specified account.

When naming pools, avoid including sensitive information such as user names or secret project names. This information may appear in telemetry logs accessible to Microsoft Support engineers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool = new \Progrupa\Azure\Model\PoolAddParameter(); // \Progrupa\Azure\Model\PoolAddParameter | The pool to be added.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->poolAdd($pool, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool** | [**\Progrupa\Azure\Model\PoolAddParameter**](../Model/\Progrupa\Azure\Model\PoolAddParameter.md)| The pool to be added. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolDelete**
> poolDelete($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Deletes a pool from the specified account.

When you request that a pool be deleted, the following actions occur: the pool state is set to deleting; any ongoing resize operation on the pool are stopped; the Batch service starts resizing the pool to zero nodes; any tasks running on existing nodes are terminated and requeued (as if a resize pool operation had been requested with the default requeue option); finally, the pool is removed from the system. Because running tasks are requeued, the user can rerun these tasks by updating their job to target a different pool. The tasks can then run on the new pool. If you want to override the requeue behavior, then you should call resize pool explicitly to shrink the pool to zero size before deleting the pool. If you call an Update, Patch or Delete API on a pool in the deleting state, it will fail with HTTP status code 409 with error code PoolBeingDeleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to delete.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolDelete($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to delete. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolDisableAutoScale**
> poolDisableAutoScale($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Disables automatic scaling for a pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool on which to disable automatic scaling.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->poolDisableAutoScale($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolDisableAutoScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool on which to disable automatic scaling. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolEnableAutoScale**
> poolEnableAutoScale($pool_id, $pool_enable_auto_scale_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Enables automatic scaling for a pool.

You cannot enable automatic scaling on a pool if a resize operation is in progress on the pool. If automatic scaling of the pool is currently disabled, you must specify a valid autoscale formula as part of the request. If automatic scaling of the pool is already enabled, you may specify a new autoscale formula and/or a new evaluation interval. You cannot call this API for the same pool more than once every 30 seconds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool on which to enable automatic scaling.
$pool_enable_auto_scale_parameter = new \Progrupa\Azure\Model\PoolEnableAutoScaleParameter(); // \Progrupa\Azure\Model\PoolEnableAutoScaleParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolEnableAutoScale($pool_id, $pool_enable_auto_scale_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolEnableAutoScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool on which to enable automatic scaling. |
 **pool_enable_auto_scale_parameter** | [**\Progrupa\Azure\Model\PoolEnableAutoScaleParameter**](../Model/\Progrupa\Azure\Model\PoolEnableAutoScaleParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolEvaluateAutoScale**
> \Progrupa\Azure\Model\AutoScaleRun poolEvaluateAutoScale($pool_id, $pool_evaluate_auto_scale_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets the result of evaluating an automatic scaling formula on the pool.

This API is primarily for validating an autoscale formula, as it simply returns the result without applying the formula to the pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool on which to evaluate the automatic scaling formula.
$pool_evaluate_auto_scale_parameter = new \Progrupa\Azure\Model\PoolEvaluateAutoScaleParameter(); // \Progrupa\Azure\Model\PoolEvaluateAutoScaleParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->poolEvaluateAutoScale($pool_id, $pool_evaluate_auto_scale_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolEvaluateAutoScale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool on which to evaluate the automatic scaling formula. |
 **pool_evaluate_auto_scale_parameter** | [**\Progrupa\Azure\Model\PoolEvaluateAutoScaleParameter**](../Model/\Progrupa\Azure\Model\PoolEvaluateAutoScaleParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\AutoScaleRun**](../Model/AutoScaleRun.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolExists**
> poolExists($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)



Gets basic properties of a pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to get.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolExists($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to get. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolGet**
> \Progrupa\Azure\Model\CloudPool poolGet($pool_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)



Gets information about the specified pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to get.
$api_version = "api_version_example"; // string | Client API Version.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $result = $api_instance->poolGet($pool_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to get. |
 **api_version** | **string**| Client API Version. |
 **select** | **string**| An OData $select clause. | [optional]
 **expand** | **string**| An OData $expand clause. | [optional]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudPool**](../Model/CloudPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolGetAllPoolsLifetimeStatistics**
> \Progrupa\Azure\Model\PoolStatistics poolGetAllPoolsLifetimeStatistics($api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets lifetime summary statistics for all of the pools in the specified account.

Statistics are aggregated across all pools that have ever existed in the account, from account creation to the last update time of the statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->poolGetAllPoolsLifetimeStatistics($api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolGetAllPoolsLifetimeStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\PoolStatistics**](../Model/PoolStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolList**
> \Progrupa\Azure\Model\CloudPoolListResult poolList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the pools in the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 pools can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->poolList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **select** | **string**| An OData $select clause. | [optional]
 **expand** | **string**| An OData $expand clause. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 pools can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudPoolListResult**](../Model/CloudPoolListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolListPoolUsageMetrics**
> \Progrupa\Azure\Model\PoolListPoolUsageMetricsResult poolListPoolUsageMetrics($api_version, $starttime, $endtime, $filter, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists the usage metrics, aggregated by pool across individual time intervals, for the specified account.

If you do not specify a $filter clause including a poolId, the response includes all pools that existed in the account in the time range of the returned aggregation intervals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$api_version = "api_version_example"; // string | Client API Version.
$starttime = new \DateTime(); // \DateTime | The earliest time from which to include metrics. This must be at least two and a half hours before the current time. If not specified this defaults to the start time of the last aggregation interval currently available.
$endtime = new \DateTime(); // \DateTime | The latest time from which to include metrics. This must be at least two hours before the current time. If not specified this defaults to the end time of the last aggregation interval currently available.
$filter = "filter_example"; // string | An OData $filter clause. If this is not specified the response includes all pools that existed in the account in the time range of the returned aggregation intervals.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 results will be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->poolListPoolUsageMetrics($api_version, $starttime, $endtime, $filter, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolListPoolUsageMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_version** | **string**| Client API Version. |
 **starttime** | **\DateTime**| The earliest time from which to include metrics. This must be at least two and a half hours before the current time. If not specified this defaults to the start time of the last aggregation interval currently available. | [optional]
 **endtime** | **\DateTime**| The latest time from which to include metrics. This must be at least two hours before the current time. If not specified this defaults to the end time of the last aggregation interval currently available. | [optional]
 **filter** | **string**| An OData $filter clause. If this is not specified the response includes all pools that existed in the account in the time range of the returned aggregation intervals. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 results will be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\PoolListPoolUsageMetricsResult**](../Model/PoolListPoolUsageMetricsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolPatch**
> poolPatch($pool_id, $pool_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Updates the properties of the specified pool.

This only replaces the pool properties specified in the request. For example, if the pool has a start task associated with it, and a request does not specify a start task element, then the pool keeps the existing start task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to update.
$pool_patch_parameter = new \Progrupa\Azure\Model\PoolPatchParameter(); // \Progrupa\Azure\Model\PoolPatchParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolPatch($pool_id, $pool_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to update. |
 **pool_patch_parameter** | [**\Progrupa\Azure\Model\PoolPatchParameter**](../Model/\Progrupa\Azure\Model\PoolPatchParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolResize**
> poolResize($pool_id, $pool_resize_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Changes the number of compute nodes that are assigned to a pool.

You can only resize a pool when its allocation state is steady. If the pool is already resizing, the request fails with status code 409. When you resize a pool, the pool's allocation state changes from steady to resizing. You cannot resize pools which are configured for automatic scaling. If you try to do this, the Batch service returns an error 409. If you resize a pool downwards, the Batch service chooses which nodes to remove. To remove specific nodes, use the pool remove nodes API instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to resize.
$pool_resize_parameter = new \Progrupa\Azure\Model\PoolResizeParameter(); // \Progrupa\Azure\Model\PoolResizeParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolResize($pool_id, $pool_resize_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolResize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to resize. |
 **pool_resize_parameter** | [**\Progrupa\Azure\Model\PoolResizeParameter**](../Model/\Progrupa\Azure\Model\PoolResizeParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolStopResize**
> poolStopResize($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Stops an ongoing resize operation on the pool.

This does not restore the pool to its previous state before the resize operation: it only stops any further changes being made, and the pool maintains its current state. A resize operation need not be an explicit resize pool request; this API can also be used to halt the initial sizing of the pool when it is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool whose resizing you want to stop.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolStopResize($pool_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolStopResize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool whose resizing you want to stop. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolUpdateProperties**
> poolUpdateProperties($pool_id, $pool_update_properties_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Updates the properties of the specified pool.

This fully replaces all the updateable properties of the pool. For example, if the pool has a start task associated with it and if start task is not specified with this request, then the Batch service will remove the existing start task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to update.
$pool_update_properties_parameter = new \Progrupa\Azure\Model\PoolUpdatePropertiesParameter(); // \Progrupa\Azure\Model\PoolUpdatePropertiesParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->poolUpdateProperties($pool_id, $pool_update_properties_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolUpdateProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to update. |
 **pool_update_properties_parameter** | [**\Progrupa\Azure\Model\PoolUpdatePropertiesParameter**](../Model/\Progrupa\Azure\Model\PoolUpdatePropertiesParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolUpgradeOS**
> poolUpgradeOS($pool_id, $pool_upgrade_os_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Upgrades the operating system of the specified pool.

During an upgrade, the Batch service upgrades each compute node in the pool. When a compute node is chosen for upgrade, any tasks running on that node are removed from the node and returned to the queue to be rerun later (or on a different compute node). The node will be unavailable until the upgrade is complete. This operation results in temporarily reduced pool capacity as nodes are taken out of service to be upgraded. Although the Batch service tries to avoid upgrading all compute nodes at the same time, it does not guarantee to do this (particularly on small pools); therefore, the pool may be temporarily unavailable to run tasks. When this operation runs, the pool state changes to upgrading. When all compute nodes have finished upgrading, the pool state returns to active.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\PoolsApi();
$pool_id = "pool_id_example"; // string | The ID of the pool to upgrade.
$pool_upgrade_os_parameter = new \Progrupa\Azure\Model\PoolUpgradeOSParameter(); // \Progrupa\Azure\Model\PoolUpgradeOSParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->poolUpgradeOS($pool_id, $pool_upgrade_os_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolUpgradeOS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool to upgrade. |
 **pool_upgrade_os_parameter** | [**\Progrupa\Azure\Model\PoolUpgradeOSParameter**](../Model/\Progrupa\Azure\Model\PoolUpgradeOSParameter.md)| The parameters for the request. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **if_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag is an exact match as specified. | [optional]
 **if_none_match** | **string**| An ETag is specified. Specify this header to perform the operation only if the resource&#39;s ETag does not match the specified ETag. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

