# PoolUsageMetrics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pool_id** | **string** |  | 
**start_time** | [**\DateTime**](\DateTime.md) |  | 
**end_time** | [**\DateTime**](\DateTime.md) |  | 
**vm_size** | **string** | For information about available sizes of virtual machines for Cloud Services pools (pools created with cloudServiceConfiguration), see Sizes for Cloud Services (http://azure.microsoft.com/documentation/articles/cloud-services-sizes-specs/). Batch supports all Cloud Services VM sizes except ExtraSmall. For information about available VM sizes for pools using images from the Virtual Machines Marketplace (pools created with virtualMachineConfiguration) see Sizes for Virtual Machines (Linux) (https://azure.microsoft.com/documentation/articles/virtual-machines-linux-sizes/) or Sizes for Virtual Machines (Windows) (https://azure.microsoft.com/documentation/articles/virtual-machines-windows-sizes/). Batch supports all Azure VM sizes except STANDARD_A0 and those with premium storage (STANDARD_GS, STANDARD_DS, and STANDARD_DSV2 series). | 
**total_core_hours** | **double** |  | 
**data_ingress_gi_b** | **double** |  | 
**data_egress_gi_b** | **double** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


