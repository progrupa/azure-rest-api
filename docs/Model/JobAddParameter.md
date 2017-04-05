# JobAddParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID can contain any combination of alphanumeric characters including hyphens and underscores, and cannot contain more than 64 characters. It is common to use a GUID for the id. | 
**display_name** | **string** | The display name need not be unique and can contain any Unicode characters up to a maximum length of 1024. | [optional] 
**priority** | **int** | Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. The default value is 0. | [optional] 
**constraints** | [**\Progrupa\Azure\Model\JobConstraints**](JobConstraints.md) | The execution constraints for the job. | [optional] 
**job_manager_task** | [**\Progrupa\Azure\Model\JobManagerTask**](JobManagerTask.md) | If the job does not specify a Job Manager task, the user must explicitly add tasks to the job. If the job does specify a Job Manager task, the Batch service creates the Job Manager task when the job is created, and will try to schedule the Job Manager task before scheduling other tasks in the job. The Job Manager task&#39;s typical purpose is to control and/or monitor job execution, for example by deciding what additional tasks to run, determining when the work is complete, etc. (However, a Job Manager task is not restricted to these activities – it is a fully-fledged task in the system and perform whatever actions are required for the job.) For example, a Job Manager task might download a file specified as a parameter, analyze the contents of that file and submit additional tasks based on those contents. | [optional] 
**job_preparation_task** | [**\Progrupa\Azure\Model\JobPreparationTask**](JobPreparationTask.md) | If a job has a Job Preparation task, the Batch service will run the Job Preparation task on a compute node before starting any tasks of that job on that compute node. | [optional] 
**job_release_task** | [**\Progrupa\Azure\Model\JobReleaseTask**](JobReleaseTask.md) | A Job Release task cannot be specified without also specifying a Job Preparation task for the job. The Batch service runs the Job Release task on the compute nodes that have run the Job Preparation task. The primary purpose of the Job Release task is to undo changes to compute nodes made by the Job Preparation task. Example activities include deleting local files, or shutting down services that were started as part of job preparation. | [optional] 
**common_environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) |  | [optional] 
**pool_info** | [**\Progrupa\Azure\Model\PoolInformation**](PoolInformation.md) |  | 
**on_all_tasks_complete** | **string** | Note that if a job contains no tasks, then all tasks are considered complete. This option is therefore most commonly used with a job manager task; if you want to use automatic job termination without a job manager, you should initially set onAllTasksComplete to noaction and update the job properties to set onAllTasksComplete to terminatejob once you have finished adding tasks. Permitted values are: noaction – do nothing. The job remains active unless terminated or disabled by some other means. terminatejob – terminate the job. The job’s terminateReason is set to &#39;AllTasksComplete&#39;. The default is noaction. | [optional] 
**on_task_failure** | **string** | Permitted values are: noaction – do nothing. performexitoptionsjobaction – take the action associated with the task exit condition in the task&#39;s exitConditions collection. (This may still result in no action being taken, if that is what the task specifies.) The default is noaction. | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | The Batch service does not assign any meaning to metadata; it is solely for the use of user code. | [optional] 
**uses_task_dependencies** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


