# CloudTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID can contain any combination of alphanumeric characters including hyphens and underscores, and cannot contain more than 64 characters. | [optional] 
**display_name** | **string** | The display name need not be unique and can contain any Unicode characters up to a maximum length of 1024. | [optional] 
**url** | **string** |  | [optional] 
**e_tag** | **string** | This is an opaque string. You can use it to detect whether the task has changed between requests. In particular, you can be pass the ETag when updating a task to specify that your changes should take effect only if nobody else has modified the task in the meantime. | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**creation_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**exit_conditions** | [**\Progrupa\Azure\Model\ExitConditions**](ExitConditions.md) | How the Batch service should respond when the task completes. | [optional] 
**state** | **string** |  | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous_state** | **string** | This property is not set if the task is in its initial Active state. | [optional] 
**previous_state_transition_time** | [**\DateTime**](\DateTime.md) | This property is not set if the task is in its initial Active state. | [optional] 
**command_line** | **string** | For multi-instance tasks, the command line is executed as the primary task, after the primary task and all subtasks have finished executing the coordination command line. The command line does not run under a shell, and therefore cannot take advantage of shell features such as environment variable expansion. If you want to take advantage of such features, you should invoke the shell in the command line, for example using \&quot;cmd /c MyCommand\&quot; in Windows or \&quot;/bin/sh -c MyCommand\&quot; in Linux. | [optional] 
**resource_files** | [**\Progrupa\Azure\Model\ResourceFile[]**](ResourceFile.md) | For multi-instance tasks, the resource files will only be downloaded to the compute node on which the primary task is executed. | [optional] 
**environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) |  | [optional] 
**affinity_info** | [**\Progrupa\Azure\Model\AffinityInformation**](AffinityInformation.md) |  | [optional] 
**constraints** | [**\Progrupa\Azure\Model\TaskConstraints**](TaskConstraints.md) |  | [optional] 
**run_elevated** | **bool** |  | [optional] 
**execution_info** | [**\Progrupa\Azure\Model\TaskExecutionInformation**](TaskExecutionInformation.md) |  | [optional] 
**node_info** | [**\Progrupa\Azure\Model\ComputeNodeInformation**](ComputeNodeInformation.md) |  | [optional] 
**multi_instance_settings** | [**\Progrupa\Azure\Model\MultiInstanceSettings**](MultiInstanceSettings.md) |  | [optional] 
**stats** | [**\Progrupa\Azure\Model\TaskStatistics**](TaskStatistics.md) |  | [optional] 
**depends_on** | [**\Progrupa\Azure\Model\TaskDependencies**](TaskDependencies.md) | The task will not be scheduled until all depended-on tasks have completed successfully. (If any depended-on tasks fail and exhaust their retry counts, the task will never be scheduled.) | [optional] 
**application_package_references** | [**\Progrupa\Azure\Model\ApplicationPackageReference[]**](ApplicationPackageReference.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


