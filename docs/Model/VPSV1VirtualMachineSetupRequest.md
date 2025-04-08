# # VPSV1VirtualMachineSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**template_id** | **int** | Template ID |
**data_center_id** | **int** | Data center ID |
**post_install_script_id** | **int** | Post-install script ID | [optional]
**password** | **string** |  |
**hostname** | **string** | Override default hostname of the virtual machine | [optional]
**install_monarx** | **bool** | Install Monarx malware scanner (if supported) | [optional] [default to false]
**enable_backups** | **bool** | Enable weekly backup schedule | [optional] [default to true]
**ns1** | **string** |  | [optional]
**ns2** | **string** |  | [optional]
**public_key** | [**\Hostinger\Model\VPSV1VirtualMachineSetupRequestPublicKey**](VPSV1VirtualMachineSetupRequestPublicKey.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
