# Certificate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thumbprint** | **string** |  | [optional] 
**thumbprint_algorithm** | **string** |  | [optional] 
**url** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**state_transition_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**previous_state** | **string** | This property is not set if the certificate is in its initial Active state. | [optional] 
**previous_state_transition_time** | [**\DateTime**](\DateTime.md) | This property is not set if the certificate is in its initial Active state. | [optional] 
**public_data** | **string** |  | [optional] 
**delete_certificate_error** | [**\Progrupa\Azure\Model\DeleteCertificateError**](DeleteCertificateError.md) | This property is set only if the certificate is in the DeleteFailed state. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


