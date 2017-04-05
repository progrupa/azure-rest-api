# JobScheduleUpdateParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule** | [**\Progrupa\Azure\Model\Schedule**](Schedule.md) | If you do not specify this element, it is equivalent to passing the default schedule: that is, a single job scheduled to run immediately. | 
**job_specification** | [**\Progrupa\Azure\Model\JobSpecification**](JobSpecification.md) | Updates affect only jobs that are started after the update has taken place. Any currently active job continues with the older specification. | 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | If you do not specify this element, it takes the default value of an empty list; in effect, any existing metadata is deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


