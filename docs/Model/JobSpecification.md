# JobSpecification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** | Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. The default value is 0. This priority is used as the default for all jobs under the job schedule. You can update a job&#39;s priority after it has been created using by using the update job API. | [optional] 
**display_name** | **string** | The name need not be unique and can contain any Unicode characters up to a maximum length of 1024. | [optional] 
**uses_task_dependencies** | **bool** |  | [optional] 
**on_all_tasks_complete** | **string** | Note that if a job contains no tasks, then all tasks are considered complete. This option is therefore most commonly used with a job manager task; if you want to use automatic job termination without a job manager, you should initially set onAllTasksComplete to noaction and update the job properties to set onAllTasksComplete to terminatejob once you have finished adding tasks. The default is noaction. | [optional] 
**on_task_failure** | **string** | The default is noaction. | [optional] 
**constraints** | [**\Progrupa\Azure\Model\JobConstraints**](JobConstraints.md) |  | [optional] 
**job_manager_task** | [**\Progrupa\Azure\Model\JobManagerTask**](JobManagerTask.md) | If the job does not specify a Job Manager task, the user must explicitly add tasks to the job using the Task API. If the job does specify a Job Manager task, the Batch service creates the Job Manager task when the job is created, and will try to schedule the Job Manager task before scheduling other tasks in the job. | [optional] 
**job_preparation_task** | [**\Progrupa\Azure\Model\JobPreparationTask**](JobPreparationTask.md) | If a job has a Job Preparation task, the Batch service will run the Job Preparation task on a compute node before starting any tasks of that job on that compute node. | [optional] 
**job_release_task** | [**\Progrupa\Azure\Model\JobReleaseTask**](JobReleaseTask.md) | The primary purpose of the Job Release task is to undo changes to compute nodes made by the Job Preparation task. Example activities include deleting local files, or shutting down services that were started as part of job preparation. A Job Release task cannot be specified without also specifying a Job Preparation task for the job. The Batch service runs the Job Release task on the compute nodes that have run the Job Preparation task. | [optional] 
**common_environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) | Individual tasks can override an environment setting specified here by specifying the same setting name with a different value. | [optional] 
**pool_info** | [**\Progrupa\Azure\Model\PoolInformation**](PoolInformation.md) |  | 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | The Batch service does not assign any meaning to metadata; it is solely for the use of user code. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


