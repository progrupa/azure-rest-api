# JobStatistics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | 
**start_time** | [**\DateTime**](\DateTime.md) |  | 
**last_update_time** | [**\DateTime**](\DateTime.md) |  | 
**user_cpu_time** | **string** |  | 
**kernel_cpu_time** | **string** |  | 
**wall_clock_time** | **string** |  | 
**read_i_ops** | **int** |  | 
**write_i_ops** | **int** |  | 
**read_io_gi_b** | **double** |  | 
**write_io_gi_b** | **double** |  | 
**num_succeeded_tasks** | **int** | A task completes successfully if it returns exit code 0. | 
**num_failed_tasks** | **int** | A task fails if it exhausts its maximum retry count without returning exit code 0. | 
**num_task_retries** | **int** |  | 
**wait_time** | **string** | The wait time for a task is defined as the elapsed time between the creation of the task and the start of task execution. (If the task is retried due to failures, the wait time is the time to the most recent task execution.) This value is only reported in the account lifetime statistics; it is not included in the job statistics. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


