# JobUpdateParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**priority** | **int** | Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. If omitted, it is set to the default value 0. | [optional] 
**constraints** | [**\Progrupa\Azure\Model\JobConstraints**](JobConstraints.md) | If omitted, the constraints are cleared. | [optional] 
**pool_info** | [**\Progrupa\Azure\Model\PoolInformation**](PoolInformation.md) | You may change the pool for a job only when the job is disabled. The Update Job call will fail if you include the poolInfo element and the job is not disabled. If you specify an autoPoolSpecification specification in the poolInfo, only the keepAlive property can be updated, and then only if the auto pool has a poolLifetimeOption of job. | 
**metadata** | [**\Progrupa\Azure\Model\MetadataItem[]**](MetadataItem.md) | If omitted, it takes the default value of an empty list; in effect, any existing metadata is deleted. | [optional] 
**on_all_tasks_complete** | **string** | If omitted, the completion behavior is set to noaction. If the current value is terminatejob, this is an error because a job&#39;s completion behavior may not be changed from terminatejob to noaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


