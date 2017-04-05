# PoolInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pool_id** | **string** | You must ensure that the pool referenced by this property exists. If the pool does not exist at the time the Batch service tries to schedule a job, no tasks for the job will run until you create a pool with that id. Note that the Batch service will not reject the job request; it will simply not run tasks until the pool exists. You must specify either the pool ID or the auto pool specification, but not both. | [optional] 
**auto_pool_specification** | [**\Progrupa\Azure\Model\AutoPoolSpecification**](AutoPoolSpecification.md) | If auto pool creation fails, the Batch service moves the job to a completed state, and the pool creation error is set in the job&#39;s scheduling error property. The Batch service manages the lifetime (both creation and, unless keepAlive is specified, deletion) of the auto pool. Any user actions that affect the lifetime of the auto pool while the job is active will result in unexpected behavior. You must specify either the pool ID or the auto pool specification, but not both. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


