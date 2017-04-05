# JobScheduleExecutionInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_run_time** | [**\DateTime**](\DateTime.md) | This property is meaningful only if the schedule is in the active state when the time comes around. For example, if the schedule is disabled, no job will be created at nextRunTime unless the job is enabled before then. | [optional] 
**recent_job** | [**\Progrupa\Azure\Model\RecentJob**](RecentJob.md) | This property is present only if the at least one job has run under the schedule. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | This property is set only if the job schedule is in the completed state. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


