# VirtualMachineConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_reference** | [**\Progrupa\Azure\Model\ImageReference**](ImageReference.md) |  | 
**node_agent_sku_id** | **string** | The Batch node agent is a program that runs on each node in the pool, and provides the command-and-control interface between the node and the Batch service. There are different implementations of the node agent, known as SKUs, for different operating systems. You must specify a node agent SKU which matches the selected image reference. To get the list of supported node agent SKUs along with their list of verified image references, see the &#39;List supported node agent SKUs&#39; operation. | 
**windows_configuration** | [**\Progrupa\Azure\Model\WindowsConfiguration**](WindowsConfiguration.md) | This property must not be specified if the imageReference property specifies a Linux OS image. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


