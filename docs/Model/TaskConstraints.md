# TaskConstraints

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max_wall_clock_time** | **string** | If this is not specified, there is no time limit on how long the task may run. | [optional] 
**retention_time** | **string** | The default is infinite, i.e. the task directory will be retained until the compute node is removed or reimaged. | [optional] 
**max_task_retry_count** | **int** | Note that this value specifically controls the number of retries. The Batch service will try the task once, and may then retry up to this limit. For example, if the maximum retry count is 3, Batch tries the task up to 4 times (one initial try and 3 retries). If the maximum retry count is 0, the Batch service does not retry the task. If the maximum retry count is -1, the Batch service retries the task without limit. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


