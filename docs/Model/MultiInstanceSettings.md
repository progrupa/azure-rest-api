# MultiInstanceSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_instances** | **int** |  | 
**coordination_command_line** | **string** | A typical coordination command line launches a background service and verifies that the service is ready to process inter-node messages. | [optional] 
**common_resource_files** | [**\Progrupa\Azure\Model\ResourceFile[]**](ResourceFile.md) | The difference between common resource files and task resource files is that common resource files are downloaded for all subtasks including the primary, whereas task resource files are downloaded only for the primary. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


