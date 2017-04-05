# Progrupa\Azure\TasksApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskAdd**](TasksApi.md#taskAdd) | **POST** /jobs/{jobId}/tasks | Adds a task to the specified job.
[**taskAddCollection**](TasksApi.md#taskAddCollection) | **POST** /jobs/{jobId}/addtaskcollection | Adds a collection of tasks to the specified job.
[**taskDelete**](TasksApi.md#taskDelete) | **DELETE** /jobs/{jobId}/tasks/{taskId} | Deletes a task from the specified job.
[**taskGet**](TasksApi.md#taskGet) | **GET** /jobs/{jobId}/tasks/{taskId} | Gets information about the specified task.
[**taskList**](TasksApi.md#taskList) | **GET** /jobs/{jobId}/tasks | Lists all of the tasks that are associated with the specified job.
[**taskListSubtasks**](TasksApi.md#taskListSubtasks) | **GET** /jobs/{jobId}/tasks/{taskId}/subtasksinfo | Lists all of the subtasks that are associated with the specified multi-instance task.
[**taskReactivate**](TasksApi.md#taskReactivate) | **POST** /jobs/{jobId}/tasks/{taskId}/reactivate | Reactivates the specified task.
[**taskTerminate**](TasksApi.md#taskTerminate) | **POST** /jobs/{jobId}/tasks/{taskId}/terminate | Terminates the specified task.
[**taskUpdate**](TasksApi.md#taskUpdate) | **PUT** /jobs/{jobId}/tasks/{taskId} | 


# **taskAdd**
> taskAdd($job_id, $task, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a task to the specified job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job to which the task is to be added.
$task = new \Progrupa\Azure\Model\TaskAddParameter(); // \Progrupa\Azure\Model\TaskAddParameter | The task to be added.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->taskAdd($job_id, $task, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to which the task is to be added. |
 **task** | [**\Progrupa\Azure\Model\TaskAddParameter**](../Model/\Progrupa\Azure\Model\TaskAddParameter.md)| The task to be added. |
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

# **taskAddCollection**
> \Progrupa\Azure\Model\TaskAddCollectionResult taskAddCollection($job_id, $task_collection, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a collection of tasks to the specified job.

Note that each task must have a unique ID. The Batch service may not return the results for each task in the same order the tasks were submitted in this request. If the server times out or the connection is closed during the request, the request may have been partially or fully processed, or not at all. In such cases, the user should re-issue the request. Note that it is up to the user to correctly handle failures when re-issuing a request. For example, you should use the same task ids during a retry so that if the prior operation succeeded, the retry will not create extra tasks unexpectedly.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job to which the task collection is to be added.
$task_collection = new \Progrupa\Azure\Model\TaskAddCollectionParameter(); // \Progrupa\Azure\Model\TaskAddCollectionParameter | The tasks to be added.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->taskAddCollection($job_id, $task_collection, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskAddCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to which the task collection is to be added. |
 **task_collection** | [**\Progrupa\Azure\Model\TaskAddCollectionParameter**](../Model/\Progrupa\Azure\Model\TaskAddCollectionParameter.md)| The tasks to be added. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\TaskAddCollectionResult**](../Model/TaskAddCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskDelete**
> taskDelete($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Deletes a task from the specified job.

When a task is deleted, all of the files in its directory on the compute node where it ran are also deleted (regardless of the retention time). For multi-instance tasks, the delete task operation applies synchronously to the primary task; subtasks and their files are then deleted asynchronously in the background.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job from which to delete the task.
$task_id = "task_id_example"; // string | The ID of the task to delete.
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
    $api_instance->taskDelete($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job from which to delete the task. |
 **task_id** | **string**| The ID of the task to delete. |
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

# **taskGet**
> \Progrupa\Azure\Model\CloudTask taskGet($job_id, $task_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Gets information about the specified task.

For multi-instance tasks, information such as affinityId, executionInfo and nodeInfo refer to the primary task. Use the list subtasks API to retrieve information about subtasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job that contains the task.
$task_id = "task_id_example"; // string | The ID of the task to get information about.
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
    $result = $api_instance->taskGet($job_id, $task_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job that contains the task. |
 **task_id** | **string**| The ID of the task to get information about. |
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

[**\Progrupa\Azure\Model\CloudTask**](../Model/CloudTask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskList**
> \Progrupa\Azure\Model\CloudTaskListResult taskList($job_id, $api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the tasks that are associated with the specified job.

For multi-instance tasks, information such as affinityId, executionInfo and nodeInfo refer to the primary task. Use the list subtasks API to retrieve information about subtasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 tasks can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->taskList($job_id, $api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job. |
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **select** | **string**| An OData $select clause. | [optional]
 **expand** | **string**| An OData $expand clause. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 tasks can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudTaskListResult**](../Model/CloudTaskListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskListSubtasks**
> \Progrupa\Azure\Model\CloudTaskListSubtasksResult taskListSubtasks($job_id, $task_id, $api_version, $select, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the subtasks that are associated with the specified multi-instance task.

If the task is not a multi-instance task then this returns an empty collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job.
$task_id = "task_id_example"; // string | The ID of the task.
$api_version = "api_version_example"; // string | Client API Version.
$select = "select_example"; // string | An OData $select clause.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->taskListSubtasks($job_id, $task_id, $api_version, $select, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskListSubtasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job. |
 **task_id** | **string**| The ID of the task. |
 **api_version** | **string**| Client API Version. |
 **select** | **string**| An OData $select clause. | [optional]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudTaskListSubtasksResult**](../Model/CloudTaskListSubtasksResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskReactivate**
> taskReactivate($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Reactivates the specified task.

Reactivation makes a task eligible to be retried again up to its maximum retry count. The task's state is changed to active. As the task is no longer in the completed state, any previous exit code or scheduling error is no longer available after reactivation. This will fail for tasks that are not completed or that previously completed successfully (with an exit code of 0). Additionally, this will fail if the job has completed (or is terminating or deleting).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job containing the task.
$task_id = "task_id_example"; // string | The ID of the task to reactivate.
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
    $api_instance->taskReactivate($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskReactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job containing the task. |
 **task_id** | **string**| The ID of the task to reactivate. |
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

# **taskTerminate**
> taskTerminate($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Terminates the specified task.

When the task has been terminated, it moves to the completed state. For multi-instance tasks, the terminate task operation applies synchronously to the primary task; subtasks are then terminated asynchronously in the background.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job containing the task.
$task_id = "task_id_example"; // string | The ID of the task to terminate.
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
    $api_instance->taskTerminate($job_id, $task_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskTerminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job containing the task. |
 **task_id** | **string**| The ID of the task to terminate. |
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

# **taskUpdate**
> taskUpdate($job_id, $task_id, $task_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)



Updates the properties of the specified task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\TasksApi();
$job_id = "job_id_example"; // string | The ID of the job containing the task.
$task_id = "task_id_example"; // string | The ID of the task to update.
$task_update_parameter = new \Progrupa\Azure\Model\TaskUpdateParameter(); // \Progrupa\Azure\Model\TaskUpdateParameter | The parameters for the request.
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
    $api_instance->taskUpdate($job_id, $task_id, $task_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->taskUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job containing the task. |
 **task_id** | **string**| The ID of the task to update. |
 **task_update_parameter** | [**\Progrupa\Azure\Model\TaskUpdateParameter**](../Model/\Progrupa\Azure\Model\TaskUpdateParameter.md)| The parameters for the request. |
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

