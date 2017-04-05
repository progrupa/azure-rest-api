# SubtaskInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**node_info** | [**\Progrupa\Azure\Model\ComputeNodeInformation**](ComputeNodeInformation.md) |  | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | This property is set only if the subtask is in the Completed state. | [optional] 
**exit_code** | **int** | This property is set only if the subtask is in the completed state. In general, the exit code for a process reflects the specific convention implemented by the application developer for that process. If you use the exit code value to make decisions in your code, be sure that you know the exit code convention used by the application process. However, if the Batch service terminates the subtask (due to timeout, or user termination via the API) you may see an operating system-defined exit code. | [optional] 
**scheduling_error** | [**\Progrupa\Azure\Model\TaskSchedulingError**](TaskSchedulingError.md) |  | [optional] 
**state** | **string** |  | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous_state** | **string** | This property is not set if the subtask is in its initial running state. | [optional] 
**previous_state_transition_time** | [**\DateTime**](\DateTime.md) | This property is not set if the subtask is in its initial running state. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


