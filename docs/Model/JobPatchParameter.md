# JobPatchParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** | Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. If omitted, the priority of the job is left unchanged. | [optional] 
**on_all_tasks_complete** | **string** | If omitted, the completion behavior is left unchanged. You may not change the value from terminatejob to noaction – that is, once you have engaged automatic job termination, you cannot turn it off again. If you try to do this, the request fails with an &#39;invalid property value&#39; error response; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request). | [optional] 
**constraints** | [**\Progrupa\Azure\Model\JobConstraints**](JobConstraints.md) | If omitted, the existing execution constraints are left unchanged. | [optional] 
**pool_info** | [**\Progrupa\Azure\Model\PoolInformation**](PoolInformation.md) | You may change the pool for a job only when the job is disabled. The Patch Job call will fail if you include the poolInfo element and the job is not disabled. If you specify an autoPoolSpecification specification in the poolInfo, only the keepAlive property can be updated, and then only if the auto pool has a poolLifetimeOption of job. If omitted, the job continues to run on its current pool. | [optional] 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | If omitted, the existing job metadata is left unchanged. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


