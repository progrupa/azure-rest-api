# PoolEnableAutoScaleParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_scale_formula** | **string** | The formula is checked for validity before it is applied to the pool. If the formula is not valid, the Batch service rejects the request with detailed error information. For more information about specifying this formula, see Automatically scale compute nodes in an Azure Batch pool (https://azure.microsoft.com/en-us/documentation/articles/batch-automatic-scaling). | [optional] 
**auto_scale_evaluation_interval** | **string** | The default value is 15 minutes. The minimum and maximum value are 5 minutes and 168 hours respectively. If you specify a value less than 5 minutes or greater than 168 hours, the Batch service rejects the request with an invalid property value error; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request). If you specify a new interval, then the existing autoscale evaluation schedule will be stopped and a new autoscale evaluation schedule will be started, with its starting time being the time when this request was issued. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


