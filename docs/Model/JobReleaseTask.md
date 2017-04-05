# JobReleaseTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID can contain any combination of alphanumeric characters including hyphens and underscores and cannot contain more than 64 characters. If you do not specify this property, the Batch service assigns a default value of &#39;jobrelease&#39;. No other task in the job can have the same id as the Job Release task. If you try to submit a task with the same id, the Batch service rejects the request with error code TaskIdSameAsJobReleaseTask; if you are calling the REST API directly, the HTTP status code is 409 (Conflict). | [optional] 
**command_line** | **string** | The command line does not run under a shell, and therefore cannot take advantage of shell features such as environment variable expansion. If you want to take advantage of such features, you should invoke the shell in the command line, for example using \&quot;cmd /c MyCommand\&quot; in Windows or \&quot;/bin/sh -c MyCommand\&quot; in Linux. | 
**resource_files** | [**\Progrupa\Azure\Model\ResourceFile[]**](ResourceFile.md) | Files listed under this element are located in the task&#39;s working directory. | [optional] 
**environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) |  | [optional] 
**max_wall_clock_time** | **string** |  | [optional] 
**retention_time** | **string** | The default is infinite, i.e. the task directory will be retained until the compute node is removed or reimaged. | [optional] 
**run_elevated** | **bool** | The default value is false. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


