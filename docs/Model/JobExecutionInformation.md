# JobExecutionInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | [**\DateTime**](\DateTime.md) | This is the time at which the job was created. | 
**end_time** | [**\DateTime**](\DateTime.md) | This property is set only if the job is in the completed state. | [optional] 
**pool_id** | **string** | This element contains the actual pool where the job is assigned. When you get job details from the service, they also contain a poolInfo element, which contains the pool configuration data from when the job was added or updated. That poolInfo element may also contain a poolId element. If it does, the two IDs are the same. If it does not, it means the job ran on an auto pool, and this property contains the id of that auto pool. | [optional] 
**scheduling_error** | [**\Progrupa\Azure\Model\JobSchedulingError**](JobSchedulingError.md) | This property is not set if there was no error starting the job. | [optional] 
**terminate_reason** | **string** | This property is set only if the job is in the completed state. If the Batch service terminates the job, it sets the reason as follows: JMComplete – the Job Manager task completed, and killJobOnCompletion was set to true. MaxWallClockTimeExpiry – the job reached its maxWallClockTime constraint. TerminateJobSchedule – the job ran as part of a schedule, and the schedule terminated. AllTasksComplete – the job&#39;s onAllTasksComplete attribute is set to terminatejob, and all tasks in the job are complete. TaskFailed – the job&#39;s onTaskFailure attribute is set to performexitoptionsjobaction, and a task in the job failed with an exit condition that specified a jobAction of terminatejob. Any other string is a user-defined reason specified in a call to the &#39;Terminate a job&#39; operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


