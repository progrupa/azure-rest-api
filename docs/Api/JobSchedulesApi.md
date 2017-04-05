# Progrupa\Azure\JobSchedulesApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobScheduleAdd**](JobSchedulesApi.md#jobScheduleAdd) | **POST** /jobschedules | Adds a job schedule to the specified account.
[**jobScheduleDelete**](JobSchedulesApi.md#jobScheduleDelete) | **DELETE** /jobschedules/{jobScheduleId} | Deletes a job schedule from the specified account.
[**jobScheduleDisable**](JobSchedulesApi.md#jobScheduleDisable) | **POST** /jobschedules/{jobScheduleId}/disable | Disables a job schedule.
[**jobScheduleEnable**](JobSchedulesApi.md#jobScheduleEnable) | **POST** /jobschedules/{jobScheduleId}/enable | Enables a job schedule.
[**jobScheduleExists**](JobSchedulesApi.md#jobScheduleExists) | **HEAD** /jobschedules/{jobScheduleId} | Checks the specified job schedule exists.
[**jobScheduleGet**](JobSchedulesApi.md#jobScheduleGet) | **GET** /jobschedules/{jobScheduleId} | 
[**jobScheduleList**](JobSchedulesApi.md#jobScheduleList) | **GET** /jobschedules | Lists all of the job schedules in the specified account.
[**jobSchedulePatch**](JobSchedulesApi.md#jobSchedulePatch) | **PATCH** /jobschedules/{jobScheduleId} | Updates the properties of the specified job schedule.
[**jobScheduleTerminate**](JobSchedulesApi.md#jobScheduleTerminate) | **POST** /jobschedules/{jobScheduleId}/terminate | Terminates a job schedule.
[**jobScheduleUpdate**](JobSchedulesApi.md#jobScheduleUpdate) | **PUT** /jobschedules/{jobScheduleId} | Updates the properties of the specified job schedule.


# **jobScheduleAdd**
> jobScheduleAdd($cloud_job_schedule, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a job schedule to the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$cloud_job_schedule = new \Progrupa\Azure\Model\JobScheduleAddParameter(); // \Progrupa\Azure\Model\JobScheduleAddParameter | The job schedule to be added.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->jobScheduleAdd($cloud_job_schedule, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_job_schedule** | [**\Progrupa\Azure\Model\JobScheduleAddParameter**](../Model/\Progrupa\Azure\Model\JobScheduleAddParameter.md)| The job schedule to be added. |
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

# **jobScheduleDelete**
> jobScheduleDelete($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Deletes a job schedule from the specified account.

When you delete a job schedule, this also deletes all jobs and tasks under that schedule. When tasks are deleted, all the files in their working directories on the compute nodes are also deleted (the retention period is ignored). The job schedule statistics are no longer accessible once the job schedule is deleted, though they are still counted towards account lifetime statistics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to delete.
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
    $api_instance->jobScheduleDelete($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to delete. |
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

# **jobScheduleDisable**
> jobScheduleDisable($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Disables a job schedule.

No new jobs will be created until the job schedule is enabled again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to disable.
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
    $api_instance->jobScheduleDisable($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to disable. |
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

# **jobScheduleEnable**
> jobScheduleEnable($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Enables a job schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to enable.
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
    $api_instance->jobScheduleEnable($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to enable. |
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

# **jobScheduleExists**
> jobScheduleExists($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Checks the specified job schedule exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule which you want to check.
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
    $api_instance->jobScheduleExists($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule which you want to check. |
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

# **jobScheduleGet**
> \Progrupa\Azure\Model\CloudJobSchedule jobScheduleGet($job_schedule_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)



Gets information about the specified job schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to get.
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
    $result = $api_instance->jobScheduleGet($job_schedule_id, $api_version, $select, $expand, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to get. |
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

[**\Progrupa\Azure\Model\CloudJobSchedule**](../Model/CloudJobSchedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobScheduleList**
> \Progrupa\Azure\Model\CloudJobScheduleListResult jobScheduleList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists all of the job schedules in the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause.
$select = "select_example"; // string | An OData $select clause.
$expand = "expand_example"; // string | An OData $expand clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 job schedules can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->jobScheduleList($api_version, $filter, $select, $expand, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleList: ', $e->getMessage(), PHP_EOL;
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
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 job schedules can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\CloudJobScheduleListResult**](../Model/CloudJobScheduleListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobSchedulePatch**
> jobSchedulePatch($job_schedule_id, $job_schedule_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Updates the properties of the specified job schedule.

This replaces only the job schedule properties specified in the request. For example, if the schedule property is not specified with this request, then the Batch service will keep the existing schedule. Changes to a job schedule only impact jobs created by the schedule after the update has taken place; currently running jobs are unaffected.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to update.
$job_schedule_patch_parameter = new \Progrupa\Azure\Model\JobSchedulePatchParameter(); // \Progrupa\Azure\Model\JobSchedulePatchParameter | The parameters for the request.
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
    $api_instance->jobSchedulePatch($job_schedule_id, $job_schedule_patch_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobSchedulePatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to update. |
 **job_schedule_patch_parameter** | [**\Progrupa\Azure\Model\JobSchedulePatchParameter**](../Model/\Progrupa\Azure\Model\JobSchedulePatchParameter.md)| The parameters for the request. |
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

# **jobScheduleTerminate**
> jobScheduleTerminate($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Terminates a job schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to terminates.
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
    $api_instance->jobScheduleTerminate($job_schedule_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleTerminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to terminates. |
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

# **jobScheduleUpdate**
> jobScheduleUpdate($job_schedule_id, $job_schedule_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Updates the properties of the specified job schedule.

This fully replaces all the updateable properties of the job schedule. For example, if the schedule property is not specified with this request, then the Batch service will remove the existing schedule. Changes to a job schedule only impact jobs created by the schedule after the update has taken place; currently running jobs are unaffected.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\JobSchedulesApi();
$job_schedule_id = "job_schedule_id_example"; // string | The ID of the job schedule to update.
$job_schedule_update_parameter = new \Progrupa\Azure\Model\JobScheduleUpdateParameter(); // \Progrupa\Azure\Model\JobScheduleUpdateParameter | The parameters for the request.
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
    $api_instance->jobScheduleUpdate($job_schedule_id, $job_schedule_update_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling JobSchedulesApi->jobScheduleUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_schedule_id** | **string**| The ID of the job schedule to update. |
 **job_schedule_update_parameter** | [**\Progrupa\Azure\Model\JobScheduleUpdateParameter**](../Model/\Progrupa\Azure\Model\JobScheduleUpdateParameter.md)| The parameters for the request. |
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

