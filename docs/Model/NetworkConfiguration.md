# NetworkConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subnet_id** | **string** | The virtual network must be in the same region and subscription as the Azure Batch account. The specified subnet should have enough free IP addresses to accommodate the number of nodes in the pool. If the subnet doesn&#39;t have enough free IP addresses, the pool will partially allocate compute nodes, and a resize error will occur. The &#39;MicrosoftAzureBatch&#39; service principal must have the &#39;Classic Virtual Machine Contributor&#39; Role-Based Access Control (RBAC) role for the specified VNet. The specified subnet must allow communication from the Azure Batch service to be able to schedule tasks on the compute nodes. This can be verified by checking if the specified VNet has any associated Network Security Groups (NSG). If communication to the compute nodes in the specified subnet is denied by an NSG, then the Batch service will set the state of the compute nodes to unusable. This property can only be specified for pools created with a cloudServiceConfiguration. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


