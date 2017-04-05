# JobScheduleAddParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID can contain any combination of alphanumeric characters including hyphens and underscores, and cannot contain more than 64 characters. The id is case-preserving and case-insensitive (that is, you may not have two ids within an account that differ only by case). | 
**display_name** | **string** | The display name need not be unique and can contain any Unicode characters up to a maximum length of 1024. | [optional] 
**schedule** | [**\Progrupa\Azure\Model\Schedule**](Schedule.md) |  | 
**job_specification** | [**\Progrupa\Azure\Model\JobSpecification**](JobSpecification.md) |  | 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | The Batch service does not assign any meaning to metadata; it is solely for the use of user code. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


