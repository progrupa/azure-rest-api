# CloudJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID can contain any combination of alphanumeric characters including hyphens and underscores, and cannot contain more than 64 characters. It is common to use a GUID for the id. | [optional] 
**display_name** | **string** |  | [optional] 
**uses_task_dependencies** | **bool** |  | [optional] 
**url** | **string** |  | [optional] 
**e_tag** | **string** | This is an opaque string. You can use it to detect whether the job has changed between requests. In particular, you can be pass the ETag when updating a job to specify that your changes should take effect only if nobody else has modified the job in the meantime. | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) | This is the last time at which the job level data, such as the job state or priority, changed. It does not factor in task-level changes such as adding new tasks or tasks changing state. | [optional] 
**creation_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**state** | **string** |  | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous_state** | **string** | This property is not set if the job is in its initial Active state. | [optional] 
**previous_state_transition_time** | [**\DateTime**](\DateTime.md) | This property is not set if the job is in its initial Active state. | [optional] 
**priority** | **int** | Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. The default value is 0. | [optional] 
**constraints** | [**\Progrupa\Azure\Model\JobConstraints**](JobConstraints.md) |  | [optional] 
**job_manager_task** | [**\Progrupa\Azure\Model\JobManagerTask**](JobManagerTask.md) |  | [optional] 
**job_preparation_task** | [**\Progrupa\Azure\Model\JobPreparationTask**](JobPreparationTask.md) | The Job Preparation task is a special task run on each node before any other task of the job. | [optional] 
**job_release_task** | [**\Progrupa\Azure\Model\JobReleaseTask**](JobReleaseTask.md) | The Job Release task is a special task run at the end of the job on each node that has run any other task of the job. | [optional] 
**common_environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) |  | [optional] 
**pool_info** | [**\Progrupa\Azure\Model\PoolInformation**](PoolInformation.md) |  | [optional] 
**on_all_tasks_complete** | **string** | Permitted values are: noaction – do nothing. The job remains active unless terminated or disabled by some other means. terminatejob – terminate the job. The job&#39;s terminateReason is set to &#39;AllTasksComplete&#39;. The default is noaction. | [optional] 
**on_task_failure** | **string** | Permitted values are: noaction – do nothing. performexitoptionsjobaction – take the action associated with the task exit condition in the task&#39;s exitConditions collection. (This may still result in no action being taken, if that is what the task specifies.) The default is noaction. | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | The Batch service does not assign any meaning to metadata; it is solely for the use of user code. | [optional] 
**execution_info** | [**\Progrupa\Azure\Model\JobExecutionInformation**](JobExecutionInformation.md) |  | [optional] 
**stats** | [**\Progrupa\Azure\Model\JobStatistics**](JobStatistics.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


