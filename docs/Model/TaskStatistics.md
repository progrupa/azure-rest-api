# TaskStatistics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | 
**start_time** | [**\DateTime**](\DateTime.md) |  | 
**last_update_time** | [**\DateTime**](\DateTime.md) |  | 
**user_cpu_time** | **string** |  | 
**kernel_cpu_time** | **string** |  | 
**wall_clock_time** | **string** | The wall clock time is the elapsed time from when the task started running on a compute node to when it finished (or to the last time the statistics were updated, if the task had not finished by then). If the task was retried, this includes the wall clock time of all the task retries. | 
**read_i_ops** | **int** |  | 
**write_i_ops** | **int** |  | 
**read_io_gi_b** | **double** |  | 
**write_io_gi_b** | **double** |  | 
**wait_time** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


