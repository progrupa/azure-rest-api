# NodeUpdateUserParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**password** | **string** | The password is required for Windows nodes (those created with &#39;cloudServiceConfiguration&#39;, or created with &#39;virtualMachineConfiguration&#39; using a Windows image reference). For Linux compute nodes, the password can optionally be specified along with the sshPublicKey property. If omitted, any existing password is removed. | [optional] 
**expiry_time** | [**\DateTime**](\DateTime.md) | If omitted, the default is 1 day from the current time. For Linux compute nodes, the expiryTime has a precision up to a day. | [optional] 
**ssh_public_key** | **string** | The public key should be compatible with OpenSSH encoding and should be base 64 encoded. This property can be specified only for Linux nodes. If this is specified for a Windows node, then the Batch service rejects the request; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request). If omitted, any existing SSH public key is removed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


