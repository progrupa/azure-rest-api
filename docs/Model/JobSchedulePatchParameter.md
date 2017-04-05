# JobSchedulePatchParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule** | [**\Progrupa\Azure\Model\Schedule**](Schedule.md) | If you do not specify this element, the existing schedule is left unchanged. | [optional] 
**job_specification** | [**\Progrupa\Azure\Model\JobSpecification**](JobSpecification.md) | Updates affect only jobs that are started after the update has taken place. Any currently active job continues with the older specification. | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | If you do not specify this element, existing metadata is left unchanged. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


