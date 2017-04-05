# ExitConditions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exit_codes** | [**\Progrupa\Azure\Model\ExitCodeMapping[]**](ExitCodeMapping.md) |  | [optional] 
**exit_code_ranges** | [**\Progrupa\Azure\Model\ExitCodeRangeMapping[]**](ExitCodeRangeMapping.md) |  | [optional] 
**scheduling_error** | [**\Progrupa\Azure\Model\ExitOptions**](ExitOptions.md) |  | [optional] 
**default** | [**\Progrupa\Azure\Model\ExitOptions**](ExitOptions.md) | Note that the default condition does not include exit code 0. If you want non-default behaviour on exit code 0, you must list it explicitly using the exitCodes or exitCodeRanges collection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


