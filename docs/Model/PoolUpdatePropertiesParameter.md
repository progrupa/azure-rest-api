# PoolUpdatePropertiesParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_task** | [**\Progrupa\Azure\Model\StartTask**](StartTask.md) | If this element is present, it overwrites any existing start task. If omitted, any existing start task is removed from the pool. | [optional] 
**certificate_references** | [**\Progrupa\Azure\Model\CertificateReference[]**](CertificateReference.md) | If you specify an empty collection, any existing certificate references are removed from the pool. For Windows compute nodes, the Batch service installs the certificates to the specified certificate store and location. For Linux compute nodes, the certificates are stored in a directory inside the task working directory and an environment variable AZ_BATCH_CERTIFICATES_DIR is supplied to the task to query for this location. For certificates with visibility of remoteuser, a certs directory is created in the user&#39;s home directory (e.g., /home/&lt;user-name&gt;/certs) where certificates are placed. | 
**application_package_references** | [**\Progrupa\Azure\Model\ApplicationPackageReference[]**](ApplicationPackageReference.md) | Changes to application package references affect all new compute nodes joining the pool, but do not affect compute nodes that are already in the pool until they are rebooted or reimaged. The list replaces any existing application package references. If omitted, or if you specify an empty collection, any existing application packages references are removed from the pool. | 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | This list replaces any existing metadata configured on the pool. If omitted, or if you specify an empty collection, any existing metadata is removed from the pool. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


