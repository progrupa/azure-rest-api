# Progrupa\Azure\JobsApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobAdd**](JobsApi.md#jobAdd) | **POST** /jobs | Adds a job to the specified account.
[**jobDelete**](JobsApi.md#jobDelete) | **DELETE** /jobs/{jobId} | Deletes a job.
[**jobDisable**](JobsApi.md#jobDisable) | **POST** /jobs/{jobId}/disable | Disables the specified job, preventing new tasks from running.
[**jobEnable**](JobsApi.md#jobEnable) | **POST** /jobs/{jobId}/enable | Enables the specified job, allowing new tasks to run.
[**jobGet**](JobsApi.md#jobGet) | **GET** /jobs/{jobId} | Gets information about the specified job.
[**jobGetAllJobsLifetimeStatistics**](JobsApi.md#jobGetAllJobsLifetimeStatistics) | **GET** /lifetimejobstats | Gets lifetime summary statistics for all of the jobs in the specified account.
[**jobList**](JobsApi.md#jobList) | **GET** /jobs | Lists all of the jobs in the specified account.
[**jobListFromJobSchedule**](JobsApi.md#jobListFromJobSchedule) | **GET** /jobschedules/{jobScheduleId}/jobs | Lists the jobs that have been created under the specified job schedule.
[**jobListPreparationAndReleaseTaskStatus**](JobsApi.md#jobListPreparationAndReleaseTaskStatus) | **GET** /jobs/{jobId}/jobpreparationandreleasetaskstatus | Lists the execution status of the Job Preparation and Job Release task for the specified job across the compute nodes where the job has run.
[**jobPatch**](JobsApi.md#jobPatch) | **PATCH** /jobs/{jobId} | Updates the properties of the specified job.
[**jobTerminate**](JobsApi.md#jobTerminate) | **POST** /jobs/{jobId}/terminate | Terminates the specified job, marking it as completed.
[**jobUpdate**](JobsApi.md#jobUpdate) | **PUT** /jobs/{jobId} | Updates the properties of the specified job.


# **jobAdd**
> jobAdd($job, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a job to the specified account.

The Batch service supports two ways to control the work done as part of a job. In the first approach, the user specifies a Job Manager task. The Batch service launches this task when it is ready to start the job. The Job Manager task controls all other tasks that run under this job, by using the Task APIs. In the second approach, the user directly controls the execution of tasks under an active job, by using the Task APIs. Also note: when naming jobs, avoid including sensitive information such as user names or secret project names. This information may appear in telemetry logs accessible to Microsoft Support engineers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job = new \Progrupa\Azure\Model\JobAddParameter(); // \Progrupa\Azure\Model\JobAddParameter | The job to be added.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->jobAdd($job, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job** | [**\Progrupa\Azure\Model\JobAddParameter**](../Model/\Progrupa\Azure\Model\JobAddParameter.md)| The job to be added. |
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

# **jobDelete**
> jobDelete($job_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Deletes a job.

Deleting a job also deletes all tasks that are part of that job, and all job statistics. This also overrides the retention period for task data; that is, if the job contains tasks which are still retained on compute nodes, the Batch services deletes those tasks' working directories and all their contents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job to delete.
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
    $api_instance->jobDelete($job_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to delete. |
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

# **jobDisable**
> jobDisable($job_id, $job_disable_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Disables the specified job, preventing new tasks from running.

The Batch Service immediately moves the job to the disabling state. Batch then uses the disableTasks parameter to determine what to do with the currently running tasks of the job. The job remains in the disabling state until the disable operation is completed and all tasks have been dealt with according to the disableTasks option; the job then moves to the disabled state. No new tasks are started under the job until it moves back to active state. If you try to disable a job that is in any state other than active, disabling, or disabled, the request fails with status code 409.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job to disable.
$job_disable_parameter = new \Progrupa\Azure\Model\JobDisableParameter(); // \Progrupa\Azure\Model\JobDisableParameter | The parameters for the request.
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
    $api_instance->jobDisable($job_id, $job_disable_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to disable. |
 **job_disable_parameter** | [**\Progrupa\Azure\Model\JobDisableParameter**](../Model/\Progrupa\Azure\Model\JobDisableParameter.md)| The parameters for the request. |
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

# **jobEnable**
> jobEnable($job_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Enables the specified job, allowing new tasks to run.

When you call this API, the Batch service sets a disabled job to the enabling state. After the this operation is completed, the job moves to the active state, and scheduling of new tasks under the job resumes. The Batch service does not allow a task to remain in the active state for more than 7 days. Therefore, if you enable a job containing active tasks which were added more than 7 days ago, those tasks will not run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job to enable.
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
    $api_instance->jobEnable($job_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to enable. |
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

# **jobGet**
> \Progrupa\Azure\Model\CloudJob jobGet($job_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Gets information about the specified job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job.
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
    $result = $api_instance->jobGet($job_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job. |
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

[**\Progrupa\Azure\Model\CloudJob**](../Model/CloudJob.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobGetAllJobsLifetimeStatistics**
> \Progrupa\Azure\Model\JobStatistics jobGetAllJobsLifetimeStatistics($api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets lifetime summary statistics for all of the jobs in the specified account.

Statistics are aggregated across all jobs that have ever existed in the account, from account creation to the last update time of the statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->jobGetAllJobsLifetimeStatistics($api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobGetAllJobsLifetimeStatistics: ', $e->getMessage(), PHP_EOL;
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

[**\Progrupa\Azure\Model\JobStatistics**](../Model/JobStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobList**
> \Progrupa\Azure\Model\CloudJobListResult jobList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the jobs in the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 jobs can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->jobList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobList: ', $e->getMessage(), PHP_EOL;
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
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 jobs can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudJobListResult**](../Model/CloudJobListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobListFromJobSchedule**
> \Progrupa\Azure\Model\CloudJobListResult jobListFromJobSchedule($job_schedule_id, $api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists the jobs that have been created under the specified job schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule from which you want to get a list of jobs.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 jobs can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->jobListFromJobSchedule($job_schedule_id, $api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobListFromJobSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule from which you want to get a list of jobs. |
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause. | [optional]
 **select** | **string**| An OData $select clause. | [optional]
 **expand** | **string**| An OData $expand clause. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 jobs can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudJobListResult**](../Model/CloudJobListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobListPreparationAndReleaseTaskStatus**
> \Progrupa\Azure\Model\CloudJobListPreparationAndReleaseTaskStatusResult jobListPreparationAndReleaseTaskStatus($job_id, $api_version, $filter, $select, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists the execution status of the Job Preparation and Job Release task for the specified job across the compute nodes where the job has run.

This API returns the Job Preparation and Job Release task status on all compute nodes that have run the Job Preparation or Job Release task. This includes nodes which have since been removed from the pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 tasks can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->jobListPreparationAndReleaseTaskStatus($job_id, $api_version, $filter, $select, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobListPreparationAndReleaseTaskStatus: ', $e->getMessage(), PHP_EOL;
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
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 tasks can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudJobListPreparationAndReleaseTaskStatusResult**](../Model/CloudJobListPreparationAndReleaseTaskStatusResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobPatch**
> jobPatch($job_id, $job_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Updates the properties of the specified job.

This replaces only the job properties specified in the request. For example, if the job has constraints, and a request does not specify the constraints element, then the job keeps the existing constraints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job whose properties you want to update.
$job_patch_parameter = new \Progrupa\Azure\Model\JobPatchParameter(); // \Progrupa\Azure\Model\JobPatchParameter | The parameters for the request.
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
    $api_instance->jobPatch($job_id, $job_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job whose properties you want to update. |
 **job_patch_parameter** | [**\Progrupa\Azure\Model\JobPatchParameter**](../Model/\Progrupa\Azure\Model\JobPatchParameter.md)| The parameters for the request. |
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

# **jobTerminate**
> jobTerminate($job_id, $api_version, $job_terminate_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Terminates the specified job, marking it as completed.

When a Terminate Job request is received, the Batch service sets the job to the terminating state. The Batch service then terminates any active or running tasks associated with the job, and runs any required Job Release tasks. The job then moves into the completed state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job to terminate.
$api_version = "api_version_example"; // string | Client API Version.
$job_terminate_parameter = new \Progrupa\Azure\Model\JobTerminateParameter(); // \Progrupa\Azure\Model\JobTerminateParameter | The parameters for the request.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.
$if_match = "if_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag is an exact match as specified.
$if_none_match = "if_none_match_example"; // string | An ETag is specified. Specify this header to perform the operation only if the resource's ETag does not match the specified ETag.
$if_modified_since = "if_modified_since_example"; // string | Specify this header to perform the operation only if the resource has been modified since the specified date/time.
$if_unmodified_since = "if_unmodified_since_example"; // string | Specify this header to perform the operation only if the resource has not been modified since the specified date/time.

try {
    $api_instance->jobTerminate($job_id, $api_version, $job_terminate_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobTerminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job to terminate. |
 **api_version** | **string**| Client API Version. |
 **job_terminate_parameter** | [**\Progrupa\Azure\Model\JobTerminateParameter**](../Model/\Progrupa\Azure\Model\JobTerminateParameter.md)| The parameters for the request. | [optional]
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

# **jobUpdate**
> jobUpdate($job_id, $job_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Updates the properties of the specified job.

This fully replaces all the updateable properties of the job. For example, if the job has constraints associated with it and if constraints is not specified with this request, then the Batch service will remove the existing constraints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobsApi();
$job_id = "job_id_example"; // string | The ID of the job whose properties you want to update.
$job_update_parameter = new \Progrupa\Azure\Model\JobUpdateParameter(); // \Progrupa\Azure\Model\JobUpdateParameter | The parameters for the request.
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
    $api_instance->jobUpdate($job_id, $job_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobsApi->jobUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| The ID of the job whose properties you want to update. |
 **job_update_parameter** | [**\Progrupa\Azure\Model\JobUpdateParameter**](../Model/\Progrupa\Azure\Model\JobUpdateParameter.md)| The parameters for the request. |
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

