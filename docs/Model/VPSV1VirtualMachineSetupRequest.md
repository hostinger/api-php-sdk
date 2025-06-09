# # VPSV1VirtualMachineSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**templateId** | **int** | Template ID |
**dataCenterId** | **int** | Data center ID |
**postInstallScriptId** | **int** | Post-install script ID |
**password** | **string** | Password for the virtual machine. If not provided, random password will be generated. Password will not be shown in the response. |
**hostname** | **string** | Override default hostname of the virtual machine |
**installMonarx** | **bool** | Install Monarx malware scanner (if supported) | [default to false]
**enableBackups** | **bool** | Enable weekly backup schedule | [default to true]
**ns1** | **string** | Name server 1 |
**ns2** | **string** | Name server 2 |
**publicKey** | [**\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey**](VPSV1VirtualMachineSetupRequestPublicKey.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
