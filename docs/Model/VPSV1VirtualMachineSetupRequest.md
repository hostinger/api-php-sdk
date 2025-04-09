# # VPSV1VirtualMachineSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**templateId** | **int** | Template ID |
**dataCenterId** | **int** | Data center ID |
**postInstallScriptId** | **int** | Post-install script ID | [optional]
**password** | **string** | Password for the virtual machine. If not provided, random password will be generated. Password will not be shown in the response. | [optional]
**hostname** | **string** | Override default hostname of the virtual machine | [optional]
**installMonarx** | **bool** | Install Monarx malware scanner (if supported) | [optional] [default to false]
**enableBackups** | **bool** | Enable weekly backup schedule | [optional] [default to true]
**ns1** | **string** |  | [optional]
**ns2** | **string** |  | [optional]
**publicKey** | [**\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey**](VPSV1VirtualMachineSetupRequestPublicKey.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
