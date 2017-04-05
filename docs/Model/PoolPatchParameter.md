# PoolPatchParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_task** | [**\Progrupa\Azure\Model\StartTask**](StartTask.md) | If omitted, any existing start task is left unchanged. | [optional] 
**certificate_references** | [**\Progrupa\Azure\Model\CertificateReference[]**](CertificateReference.md) | If omitted, any existing certificate references are left unchanged. For Windows compute nodes, the Batch service installs the certificates to the specified certificate store and location. For Linux compute nodes, the certificates are stored in a directory inside the task working directory and an environment variable AZ_BATCH_CERTIFICATES_DIR is supplied to the task to query for this location. For certificates with visibility of remoteuser, a certs directory is created in the user&#39;s home directory (e.g., /home/&lt;user-name&gt;/certs) where certificates are placed. | [optional] 
**application_package_references** | [**\Progrupa\Azure\Model\ApplicationPackageReference[]**](ApplicationPackageReference.md) | Changes to application package references affect all new compute nodes joining the pool, but do not affect compute nodes that are already in the pool until they are rebooted or reimaged. If this element is present, it replaces any existing application package references. If you specify an empty collection, then all application package references are removed from the pool. If omitted, any existing application package references are left unchanged. | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | If this element is present, it replaces any existing metadata configured on the pool. If you specify an empty collection, any metadata is removed from the pool. If omitted, any existing metadata is left unchanged. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


