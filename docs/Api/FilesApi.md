# Progrupa\Azure\FilesApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileDeleteFromComputeNode**](FilesApi.md#fileDeleteFromComputeNode) | **DELETE** /pools/{poolId}/nodes/{nodeId}/files/{fileName} | Deletes the specified task file from the compute node.
[**fileDeleteFromTask**](FilesApi.md#fileDeleteFromTask) | **DELETE** /jobs/{jobId}/tasks/{taskId}/files/{fileName} | Deletes the specified task file from the compute node where the task ran.
[**fileGetFromComputeNode**](FilesApi.md#fileGetFromComputeNode) | **GET** /pools/{poolId}/nodes/{nodeId}/files/{fileName} | 
[**fileGetFromTask**](FilesApi.md#fileGetFromTask) | **GET** /jobs/{jobId}/tasks/{taskId}/files/{fileName} | 
[**fileGetNodeFilePropertiesFromComputeNode**](FilesApi.md#fileGetNodeFilePropertiesFromComputeNode) | **HEAD** /pools/{poolId}/nodes/{nodeId}/files/{fileName} | 
[**fileGetNodeFilePropertiesFromTask**](FilesApi.md#fileGetNodeFilePropertiesFromTask) | **HEAD** /jobs/{jobId}/tasks/{taskId}/files/{fileName} | 
[**fileListFromComputeNode**](FilesApi.md#fileListFromComputeNode) | **GET** /pools/{poolId}/nodes/{nodeId}/files | Lists all of the files in task directories on the specified compute node.
[**fileListFromTask**](FilesApi.md#fileListFromTask) | **GET** /jobs/{jobId}/tasks/{taskId}/files | Lists the files in a task&#39;s directory on its compute node.


# **fileDeleteFromComputeNode**
> fileDeleteFromComputeNode($pool_id, $node_id, $file_name, $api_version, $recursive, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Deletes the specified task file from the compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node from which you want to delete the file.
$file_name = "file_name_example"; // string | The path to the file that you want to delete.
$api_version = "api_version_example"; // string | Client API Version.
$recursive = true; // bool | Whether to delete children of a directory. If the fileName parameter represents a directory instead of a file, you can set recursive to true to delete the directory and all of the files and subdirectories in it. If recursive is false then the directory must be empty or deletion will fail.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->fileDeleteFromComputeNode($pool_id, $node_id, $file_name, $api_version, $recursive, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileDeleteFromComputeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node from which you want to delete the file. |
 **file_name** | **string**| The path to the file that you want to delete. |
 **api_version** | **string**| Client API Version. |
 **recursive** | **bool**| Whether to delete children of a directory. If the fileName parameter represents a directory instead of a file, you can set recursive to true to delete the directory and all of the files and subdirectories in it. If recursive is false then the directory must be empty or deletion will fail. | [optional]
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

# **fileDeleteFromTask**
> fileDeleteFromTask($job_id, $task_id, $file_name, $api_version, $recursive, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Deletes the specified task file from the compute node where the task ran.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$job_id = "job_id_example"; // string | The ID of the job that contains the task.
$task_id = "task_id_example"; // string | The ID of the task whose file you want to delete.
$file_name = "file_name_example"; // string | The path to the task file that you want to delete.
$api_version = "api_version_example"; // string | Client API Version.
$recursive = true; // bool | Whether to delete children of a directory. If the fileName parameter represents a directory instead of a file, you can set recursive to true to delete the directory and all of the files and subdirectories in it. If recursive is false then the directory must be empty or deletion will fail.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->fileDeleteFromTask($job_id, $task_id, $file_name, $api_version, $recursive, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileDeleteFromTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job that contains the task. |
 **task_id** | **string**| The ID of the task whose file you want to delete. |
 **file_name** | **string**| The path to the task file that you want to delete. |
 **api_version** | **string**| Client API Version. |
 **recursive** | **bool**| Whether to delete children of a directory. If the fileName parameter represents a directory instead of a file, you can set recursive to true to delete the directory and all of the files and subdirectories in it. If recursive is false then the directory must be empty or deletion will fail. | [optional]
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

# **fileGetFromComputeNode**
> \SplFileObject fileGetFromComputeNode($pool_id, $node_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $ocp_range, $if_modified_since, $if_unmodified_since)



Returns the content of the specified task file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node that contains the file.
$file_name = "file_name_example"; // string | The path to the task file that you want to get the content of.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$ocp_range = "ocp_range_example"; // string | The byte range to be retrieved. The default is to retrieve the entire file. The format is bytes=startRange-endRange.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $result = $api_instance->fileGetFromComputeNode($pool_id, $node_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $ocp_range, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileGetFromComputeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node that contains the file. |
 **file_name** | **string**| The path to the task file that you want to get the content of. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **ocp_range** | **string**| The byte range to be retrieved. The default is to retrieve the entire file. The format is bytes&#x3D;startRange-endRange. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileGetFromTask**
> \SplFileObject fileGetFromTask($job_id, $task_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $ocp_range, $if_modified_since, $if_unmodified_since)



Returns the content of the specified task file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$job_id = "job_id_example"; // string | The ID of the job that contains the task.
$task_id = "task_id_example"; // string | The ID of the task whose file you want to retrieve.
$file_name = "file_name_example"; // string | The path to the task file that you want to get the content of.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$ocp_range = "ocp_range_example"; // string | The byte range to be retrieved. The default is to retrieve the entire file. The format is bytes=startRange-endRange.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $result = $api_instance->fileGetFromTask($job_id, $task_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $ocp_range, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileGetFromTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job that contains the task. |
 **task_id** | **string**| The ID of the task whose file you want to retrieve. |
 **file_name** | **string**| The path to the task file that you want to get the content of. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
 **ocp_range** | **string**| The byte range to be retrieved. The default is to retrieve the entire file. The format is bytes&#x3D;startRange-endRange. | [optional]
 **if_modified_since** | **string**| Specify this header to perform the operation only if the resource has been modified since the specified date/time. | [optional]
 **if_unmodified_since** | **string**| Specify this header to perform the operation only if the resource has not been modified since the specified date/time. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileGetNodeFilePropertiesFromComputeNode**
> fileGetNodeFilePropertiesFromComputeNode($pool_id, $node_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_modified_since, $if_unmodified_since)



Gets the properties of the specified compute node file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node that contains the file.
$file_name = "file_name_example"; // string | The path to the compute node file that you want to get the properties of.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->fileGetNodeFilePropertiesFromComputeNode($pool_id, $node_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileGetNodeFilePropertiesFromComputeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node that contains the file. |
 **file_name** | **string**| The path to the compute node file that you want to get the properties of. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
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

# **fileGetNodeFilePropertiesFromTask**
> fileGetNodeFilePropertiesFromTask($job_id, $task_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_modified_since, $if_unmodified_since)



Gets the properties of the specified task file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$job_id = "job_id_example"; // string | The ID of the job that contains the task.
$task_id = "task_id_example"; // string | The ID of the task whose file you want to get the properties of.
$file_name = "file_name_example"; // string | The path to the task file that you want to get the properties of.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->fileGetNodeFilePropertiesFromTask($job_id, $task_id, $file_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileGetNodeFilePropertiesFromTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job that contains the task. |
 **task_id** | **string**| The ID of the task whose file you want to get the properties of. |
 **file_name** | **string**| The path to the task file that you want to get the properties of. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]
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

# **fileListFromComputeNode**
> \Progrupa\Azure\Model\NodeFileListResult fileListFromComputeNode($pool_id, $node_id, $api_version, $filter, $recursive, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the files in task directories on the specified compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node whose files you want to list.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$recursive = true; // bool | Whether to list children of a directory.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 files can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->fileListFromComputeNode($pool_id, $node_id, $api_version, $filter, $recursive, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileListFromComputeNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node whose files you want to list. |
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **recursive** | **bool**| Whether to list children of a directory. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 files can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\NodeFileListResult**](../Model/NodeFileListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileListFromTask**
> \Progrupa\Azure\Model\NodeFileListResult fileListFromTask($job_id, $task_id, $api_version, $filter, $recursive, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists the files in a task's directory on its compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\FilesApi();
$job_id = "job_id_example"; // string | The ID of the job that contains the task.
$task_id = "task_id_example"; // string | The ID of the task whose files you want to list.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$recursive = true; // bool | Whether to list children of a directory. This parameter can be used in combination with the filter parameter to list specific type of files.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 files can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->fileListFromTask($job_id, $task_id, $api_version, $filter, $recursive, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->fileListFromTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job that contains the task. |
 **task_id** | **string**| The ID of the task whose files you want to list. |
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **recursive** | **bool**| Whether to list children of a directory. This parameter can be used in combination with the filter parameter to list specific type of files. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 files can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\NodeFileListResult**](../Model/NodeFileListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

