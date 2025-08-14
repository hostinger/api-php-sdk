# # VPSV1VirtualMachineRecreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**templateId** | **int** | Template ID |
**password** | **string** | Root password for the virtual machine. If not provided, random password will be generated. Password will not be shown in the response. |
**panelPassword** | **string** | Panel password for the panel-based OS template. If not provided, random password will be generated. If OS does not support panel_password this field will be ignored. Password will not be shown in the response. |
**postInstallScriptId** | **int** | Post-install script to execute after virtual machine was recreated |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
