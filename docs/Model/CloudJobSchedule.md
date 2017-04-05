# CloudJobSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | It is common to use a GUID for the id. | [optional] 
**display_name** | **string** |  | [optional] 
**url** | **string** |  | [optional] 
**e_tag** | **string** | This is an opaque string. You can use it to detect whether the job schedule has changed between requests. In particular, you can be pass the ETag with an Update Job Schedule request to specify that your changes should take effect only if nobody else has modified the schedule in the meantime. | [optional] 
**last_modified** | [**\DateTime**](\DateTime.md) | This is the last time at which the schedule level data, such as the job specification or recurrence information, changed. It does not factor in job-level changes such as new jobs being created or jobs changing state. | [optional] 
**creation_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**state** | **string** |  | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous_state** | **string** | This property is not present if the job schedule is in its initial active state. | [optional] 
**previous_state_transition_time** | [**\DateTime**](\DateTime.md) | This property is not present if the job schedule is in its initial active state. | [optional] 
**schedule** | [**\Progrupa\Azure\Model\Schedule**](Schedule.md) |  | [optional] 
**job_specification** | [**\Progrupa\Azure\Model\JobSpecification**](JobSpecification.md) |  | [optional] 
**execution_info** | [**\Progrupa\Azure\Model\JobScheduleExecutionInformation**](JobScheduleExecutionInformation.md) |  | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | The Batch service does not assign any meaning to metadata; it is solely for the use of user code. | [optional] 
**stats** | [**\Progrupa\Azure\Model\JobScheduleStatistics**](JobScheduleStatistics.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


