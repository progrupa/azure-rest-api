# Progrupa\Azure\ComputeNodesApi

All URIs are relative to *https://batch.core.windows.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**computeNodeAddUser**](ComputeNodesApi.md#computeNodeAddUser) | **POST** /pools/{poolId}/nodes/{nodeId}/users | Adds a user account to the specified compute node.
[**computeNodeDeleteUser**](ComputeNodesApi.md#computeNodeDeleteUser) | **DELETE** /pools/{poolId}/nodes/{nodeId}/users/{userName} | Deletes a user account from the specified compute node.
[**computeNodeDisableScheduling**](ComputeNodesApi.md#computeNodeDisableScheduling) | **POST** /pools/{poolId}/nodes/{nodeId}/disablescheduling | Disables task scheduling on the specified compute node.
[**computeNodeEnableScheduling**](ComputeNodesApi.md#computeNodeEnableScheduling) | **POST** /pools/{poolId}/nodes/{nodeId}/enablescheduling | Enables task scheduling on the specified compute node.
[**computeNodeGet**](ComputeNodesApi.md#computeNodeGet) | **GET** /pools/{poolId}/nodes/{nodeId} | Gets information about the specified compute node.
[**computeNodeGetRemoteDesktop**](ComputeNodesApi.md#computeNodeGetRemoteDesktop) | **GET** /pools/{poolId}/nodes/{nodeId}/rdp | Gets the Remote Desktop Protocol file for the specified compute node.
[**computeNodeGetRemoteLoginSettings**](ComputeNodesApi.md#computeNodeGetRemoteLoginSettings) | **GET** /pools/{poolId}/nodes/{nodeId}/remoteloginsettings | Gets the settings required for remote login to a compute node.
[**computeNodeList**](ComputeNodesApi.md#computeNodeList) | **GET** /pools/{poolId}/nodes | Lists the compute nodes in the specified pool.
[**computeNodeReboot**](ComputeNodesApi.md#computeNodeReboot) | **POST** /pools/{poolId}/nodes/{nodeId}/reboot | Restarts the specified compute node.
[**computeNodeReimage**](ComputeNodesApi.md#computeNodeReimage) | **POST** /pools/{poolId}/nodes/{nodeId}/reimage | Reinstalls the operating system on the specified compute node.
[**computeNodeUpdateUser**](ComputeNodesApi.md#computeNodeUpdateUser) | **PUT** /pools/{poolId}/nodes/{nodeId}/users/{userName} | Updates the password or expiration time of a user account on the specified compute node.
[**poolRemoveNodes**](ComputeNodesApi.md#poolRemoveNodes) | **POST** /pools/{poolId}/removenodes | Removes compute nodes from the specified pool.


# **computeNodeAddUser**
> computeNodeAddUser($pool_id, $node_id, $user, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Adds a user account to the specified compute node.

You can add a user account to a node only when it is in the idle or running state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the machine on which you want to create a user account.
$user = new \Progrupa\Azure\Model\ComputeNodeUser(); // \Progrupa\Azure\Model\ComputeNodeUser | The user account to be created.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeAddUser($pool_id, $node_id, $user, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeAddUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the machine on which you want to create a user account. |
 **user** | [**\Progrupa\Azure\Model\ComputeNodeUser**](../Model/\Progrupa\Azure\Model\ComputeNodeUser.md)| The user account to be created. |
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

# **computeNodeDeleteUser**
> computeNodeDeleteUser($pool_id, $node_id, $user_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Deletes a user account from the specified compute node.

You can delete a user account to a node only when it is in the idle or running state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the machine on which you want to delete a user account.
$user_name = "user_name_example"; // string | The name of the user account to delete.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeDeleteUser($pool_id, $node_id, $user_name, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeDeleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the machine on which you want to delete a user account. |
 **user_name** | **string**| The name of the user account to delete. |
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

# **computeNodeDisableScheduling**
> computeNodeDisableScheduling($pool_id, $node_id, $api_version, $node_disable_scheduling_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Disables task scheduling on the specified compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node on which you want to disable task scheduling.
$api_version = "api_version_example"; // string | Client API Version.
$node_disable_scheduling_parameter = new \Progrupa\Azure\Model\NodeDisableSchedulingParameter(); // \Progrupa\Azure\Model\NodeDisableSchedulingParameter | The parameters for the request.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeDisableScheduling($pool_id, $node_id, $api_version, $node_disable_scheduling_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeDisableScheduling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node on which you want to disable task scheduling. |
 **api_version** | **string**| Client API Version. |
 **node_disable_scheduling_parameter** | [**\Progrupa\Azure\Model\NodeDisableSchedulingParameter**](../Model/\Progrupa\Azure\Model\NodeDisableSchedulingParameter.md)| The parameters for the request. | [optional]
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

# **computeNodeEnableScheduling**
> computeNodeEnableScheduling($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Enables task scheduling on the specified compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node on which you want to enable task scheduling.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeEnableScheduling($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeEnableScheduling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node on which you want to enable task scheduling. |
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

# **computeNodeGet**
> \Progrupa\Azure\Model\ComputeNode computeNodeGet($pool_id, $node_id, $api_version, $select, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets information about the specified compute node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node that you want to get information about.
$api_version = "api_version_example"; // string | Client API Version.
$select = "select_example"; // string | An OData $select clause.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->computeNodeGet($pool_id, $node_id, $api_version, $select, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node that you want to get information about. |
 **api_version** | **string**| Client API Version. |
 **select** | **string**| An OData $select clause. | [optional]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\ComputeNode**](../Model/ComputeNode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **computeNodeGetRemoteDesktop**
> \SplFileObject computeNodeGetRemoteDesktop($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets the Remote Desktop Protocol file for the specified compute node.

Before you can access a node by using the RDP file, you must create a user account on the node. This API can only be invoked on pools created with the cloud service configuration property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node for which you want to get the Remote Desktop Protocol file.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->computeNodeGetRemoteDesktop($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeGetRemoteDesktop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node for which you want to get the Remote Desktop Protocol file. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **computeNodeGetRemoteLoginSettings**
> \Progrupa\Azure\Model\ComputeNodeGetRemoteLoginSettingsResult computeNodeGetRemoteLoginSettings($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Gets the settings required for remote login to a compute node.

Before you can remotely login to a node using the remote login settings, you must create a user account on the node. This API can be invoked only on pools created with the virtual machine configuration property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node for which to obtain the remote login settings.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->computeNodeGetRemoteLoginSettings($pool_id, $node_id, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeGetRemoteLoginSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node for which to obtain the remote login settings. |
 **api_version** | **string**| Client API Version. |
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\ComputeNodeGetRemoteLoginSettingsResult**](../Model/ComputeNodeGetRemoteLoginSettingsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **computeNodeList**
> \Progrupa\Azure\Model\ComputeNodeListResult computeNodeList($pool_id, $api_version, $filter, $select, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Lists the compute nodes in the specified pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool from which you want to list nodes.
$api_version = "api_version_example"; // string | Client API Version.
$filter = "filter_example"; // string | An OData $filter clause..
$select = "select_example"; // string | An OData $select clause.
$maxresults = 1000; // int | The maximum number of items to return in the response. A maximum of 1000 nodes can be returned.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $result = $api_instance->computeNodeList($pool_id, $api_version, $filter, $select, $maxresults, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool from which you want to list nodes. |
 **api_version** | **string**| Client API Version. |
 **filter** | **string**| An OData $filter clause.. | [optional]
 **select** | **string**| An OData $select clause. | [optional]
 **maxresults** | **int**| The maximum number of items to return in the response. A maximum of 1000 nodes can be returned. | [optional] [default to 1000]
 **timeout** | **int**| The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds. | [optional] [default to 30]
 **client_request_id** | **string**| The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0. | [optional]
 **return_client_request_id** | **bool**| Whether the server should return the client-request-id in the response. | [optional] [default to false]
 **ocp_date** | **string**| The time the request was issued. If not specified, this header will be automatically populated with the current system clock time. | [optional]

### Return type

[**\Progrupa\Azure\Model\ComputeNodeListResult**](../Model/ComputeNodeListResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; odata=minimalmetadata
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **computeNodeReboot**
> computeNodeReboot($pool_id, $node_id, $api_version, $node_reboot_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Restarts the specified compute node.

You can restart a node only if it is in an idle or running state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node that you want to restart.
$api_version = "api_version_example"; // string | Client API Version.
$node_reboot_parameter = new \Progrupa\Azure\Model\NodeRebootParameter(); // \Progrupa\Azure\Model\NodeRebootParameter | The parameters for the request.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeReboot($pool_id, $node_id, $api_version, $node_reboot_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeReboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node that you want to restart. |
 **api_version** | **string**| Client API Version. |
 **node_reboot_parameter** | [**\Progrupa\Azure\Model\NodeRebootParameter**](../Model/\Progrupa\Azure\Model\NodeRebootParameter.md)| The parameters for the request. | [optional]
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

# **computeNodeReimage**
> computeNodeReimage($pool_id, $node_id, $api_version, $node_reimage_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Reinstalls the operating system on the specified compute node.

You can reinstall the operating system on a node only if it is in an idle or running state. This API can be invoked only on pools created with the cloud service configuration property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the compute node that you want to restart.
$api_version = "api_version_example"; // string | Client API Version.
$node_reimage_parameter = new \Progrupa\Azure\Model\NodeReimageParameter(); // \Progrupa\Azure\Model\NodeReimageParameter | The parameters for the request.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeReimage($pool_id, $node_id, $api_version, $node_reimage_parameter, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeReimage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the compute node that you want to restart. |
 **api_version** | **string**| Client API Version. |
 **node_reimage_parameter** | [**\Progrupa\Azure\Model\NodeReimageParameter**](../Model/\Progrupa\Azure\Model\NodeReimageParameter.md)| The parameters for the request. | [optional]
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

# **computeNodeUpdateUser**
> computeNodeUpdateUser($pool_id, $node_id, $user_name, $node_update_user_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date)

Updates the password or expiration time of a user account on the specified compute node.

This operation replaces of all the updateable properties of the account. For example, if the expiryTime element is not specified, the current value is replaced with the default value, not left unmodified. You can update a user account on a node only when it is in the idle or running state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool that contains the compute node.
$node_id = "node_id_example"; // string | The ID of the machine on which you want to update a user account.
$user_name = "user_name_example"; // string | The name of the user account to update.
$node_update_user_parameter = new \Progrupa\Azure\Model\NodeUpdateUserParameter(); // \Progrupa\Azure\Model\NodeUpdateUserParameter | The parameters for the request.
$api_version = "api_version_example"; // string | Client API Version.
$timeout = 30; // int | The maximum time that the server can spend processing the request, in seconds. The default is 30 seconds.
$client_request_id = "client_request_id_example"; // string | The caller-generated request identity, in the form of a GUID with no decoration such as curly braces, e.g. 9C4D50EE-2D56-4CD3-8152-34347DC9F2B0.
$return_client_request_id = false; // bool | Whether the server should return the client-request-id in the response.
$ocp_date = "ocp_date_example"; // string | The time the request was issued. If not specified, this header will be automatically populated with the current system clock time.

try {
    $api_instance->computeNodeUpdateUser($pool_id, $node_id, $user_name, $node_update_user_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->computeNodeUpdateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool that contains the compute node. |
 **node_id** | **string**| The ID of the machine on which you want to update a user account. |
 **user_name** | **string**| The name of the user account to update. |
 **node_update_user_parameter** | [**\Progrupa\Azure\Model\NodeUpdateUserParameter**](../Model/\Progrupa\Azure\Model\NodeUpdateUserParameter.md)| The parameters for the request. |
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

# **poolRemoveNodes**
> poolRemoveNodes($pool_id, $node_remove_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since)

Removes compute nodes from the specified pool.

This operation can only run when the allocation state of the pool is steady. When this operation runs, the allocation state changes from steady to resizing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Progrupa\Azure\Api\ComputeNodesApi();
$pool_id = "pool_id_example"; // string | The ID of the pool from which you want to remove nodes.
$node_remove_parameter = new \Progrupa\Azure\Model\NodeRemoveParameter(); // \Progrupa\Azure\Model\NodeRemoveParameter | The parameters for the request.
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
    $api_instance->poolRemoveNodes($pool_id, $node_remove_parameter, $api_version, $timeout, $client_request_id, $return_client_request_id, $ocp_date, $if_match, $if_none_match, $if_modified_since, $if_unmodified_since);
} catch (Exception $e) {
    echo 'Exception when calling ComputeNodesApi->poolRemoveNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_id** | **string**| The ID of the pool from which you want to remove nodes. |
 **node_remove_parameter** | [**\Progrupa\Azure\Model\NodeRemoveParameter**](../Model/\Progrupa\Azure\Model\NodeRemoveParameter.md)| The parameters for the request. |
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

