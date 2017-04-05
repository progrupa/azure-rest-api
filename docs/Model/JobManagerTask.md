# JobManagerTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id can contain any combination of alphanumeric characters including hyphens and underscores and cannot contain more than 64 characters. | 
**display_name** | **string** | It need not be unique and can contain any Unicode characters up to a maximum length of 1024. | [optional] 
**command_line** | **string** | The command line does not run under a shell, and therefore cannot take advantage of shell features such as environment variable expansion. If you want to take advantage of such features, you should invoke the shell in the command line, for example using \&quot;cmd /c MyCommand\&quot; in Windows or \&quot;/bin/sh -c MyCommand\&quot; in Linux. | 
**resource_files** | [**\Progrupa\Azure\Model\ResourceFile[]**](ResourceFile.md) | Files listed under this element are located in the task&#39;s working directory. | [optional] 
**environment_settings** | [**\Progrupa\Azure\Model\EnvironmentSetting[]**](EnvironmentSetting.md) |  | [optional] 
**constraints** | [**\Progrupa\Azure\Model\TaskConstraints**](TaskConstraints.md) |  | [optional] 
**kill_job_on_completion** | **bool** | If true, when the Job Manager task completes, the Batch service marks the job as complete. If any tasks are still running at this time (other than Job Release), those tasks are terminated. If false, the completion of the Job Manager task does not affect the job status. In this case, you should either use the onAllTasksComplete attribute to terminate the job, or have a client or user terminate the job explicitly. An example of this is if the Job Manager creates a set of tasks but then takes no further role in their execution. The default value is true. If you are using the onAllTasksComplete and onTaskFailure attributes to control job lifetime, and using the job manager task only to create the tasks for the job (not to monitor progress), then it is important to set killJobOnCompletion to false. | [optional] 
**run_elevated** | **bool** |  | [optional] 
**run_exclusive** | **bool** | If true, no other tasks will run on the same compute node for as long as the Job Manager is running. If false, other tasks can run simultaneously with the Job Manager on a compute node. The Job Manager task counts normally against the node&#39;s concurrent task limit, so this is only relevant if the node allows multiple concurrent tasks. The default value is true. | [optional] 
**application_package_references** | [**\Progrupa\Azure\Model\ApplicationPackageReference[]**](ApplicationPackageReference.md) | Application packages are downloaded and deployed to a shared directory, not the task directory. Therefore, if a referenced package is already on the compute node, and is up to date, then it is not re-downloaded; the existing copy on the compute node is used. If a referenced application package cannot be installed, for example because the package has been deleted or because download failed, the task fails with a scheduling error. This property is currently not supported on jobs running on pools created using the virtualMachineConfiguration (IaaS) property. If a task specifying applicationPackageReferences runs on such a pool, it fails with a scheduling error with code TaskSchedulingConstraintFailed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


