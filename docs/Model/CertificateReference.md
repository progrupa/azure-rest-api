# CertificateReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thumbprint** | **string** |  | 
**thumbprint_algorithm** | **string** |  | 
**store_location** | **string** | The default value is CurrentUser. This property is applicable only for pools configured with Windows nodes (that is, created with cloudServiceConfiguration, or with virtualMachineConfiguration using a Windows image reference). For Linux compute nodes, the certificates are stored in a directory inside the task working directory and an environment variable AZ_BATCH_CERTIFICATES_DIR is supplied to the task to query for this location. For certificates with visibility of remoteuser, a certs directory is created in the user&#39;s home directory (e.g., /home/&lt;user-name&gt;/certs) where certificates are placed. | [optional] 
**store_name** | **string** | The default value is My. This property is applicable only for pools configured with Windows nodes (that is, created with cloudServiceConfiguration, or with virtualMachineConfiguration using a Windows image reference). | [optional] 
**visibility** | **string[]** | The default is all accounts. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


