# ComputeNode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Every node that is added to a pool is assigned a unique ID. Whenever a node is removed from a pool, all of its local files are deleted, and the ID is reclaimed and could be reused for new nodes. | [optional] 
**url** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**scheduling_state** | **string** | Possible values are: enabled – Tasks can be scheduled on the node. disabled – No new tasks will be scheduled on the node. Tasks already running on the node may still run to completion. All nodes start with scheduling enabled. | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_boot_time** | [**\DateTime**](\DateTime.md) | This property may not be present if the node state is unusable. | [optional] 
**allocation_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**ip_address** | **string** | Every node that is added to a pool is assigned a unique IP address. Whenever a node is removed from a pool, all of its local files are deleted, and the IP address is reclaimed and could be reused for new nodes. | [optional] 
**affinity_id** | **string** |  | [optional] 
**vm_size** | **string** | For information about available sizes of virtual machines for Cloud Services pools (pools created with cloudServiceConfiguration), see Sizes for Cloud Services (http://azure.microsoft.com/documentation/articles/cloud-services-sizes-specs/). Batch supports all Cloud Services VM sizes except ExtraSmall. For information about available VM sizes for pools using images from the Virtual Machines Marketplace (pools created with virtualMachineConfiguration) see Sizes for Virtual Machines (Linux) (https://azure.microsoft.com/documentation/articles/virtual-machines-linux-sizes/) or Sizes for Virtual Machines (Windows) (https://azure.microsoft.com/documentation/articles/virtual-machines-windows-sizes/). Batch supports all Azure VM sizes except STANDARD_A0 and those with premium storage (STANDARD_GS, STANDARD_DS, and STANDARD_DSV2 series). | [optional] 
**total_tasks_run** | **int** |  | [optional] 
**running_tasks_count** | **int** |  | [optional] 
**total_tasks_succeeded** | **int** |  | [optional] 
**recent_tasks** | [**\Progrupa\Azure\Model\TaskInformation[]**](TaskInformation.md) |  | [optional] 
**start_task** | [**\Progrupa\Azure\Model\StartTask**](StartTask.md) |  | [optional] 
**start_task_info** | [**\Progrupa\Azure\Model\StartTaskInformation**](StartTaskInformation.md) |  | [optional] 
**certificate_references** | [**\Progrupa\Azure\Model\CertificateReference[]**](CertificateReference.md) | For Windows compute nodes, the Batch service installs the certificates to the specified certificate store and location. For Linux compute nodes, the certificates are stored in a directory inside the task working directory and an environment variable AZ_BATCH_CERTIFICATES_DIR is supplied to the task to query for this location. For certificates with visibility of remoteuser, a certs directory is created in the user&#39;s home directory (e.g., /home/&lt;user-name&gt;/certs) where certificates are placed. | [optional] 
**errors** | [**\Progrupa\Azure\Model\ComputeNodeError[]**](ComputeNodeError.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


