# # VPSV1VirtualMachineVirtualMachineResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Virtual machine ID |
**firewallGroupId** | **int** | Active firewall ID, &#x60;null&#x60; if disabled |
**subscriptionId** | **string** | Subscription ID |
**plan** | **string** | VPS plan name |
**hostname** | **string** |  |
**state** | **string** |  |
**actionsLock** | **string** |  |
**cpus** | **int** | CPUs count assigned to virtual machine |
**memory** | **int** | Memory available to virtual machine (in megabytes) |
**disk** | **int** | Virtual machine disk size (in megabytes) |
**bandwidth** | **int** | Monthly internet traffic available to virtual machine (in megabytes) |
**ns1** | **string** | Primary DNS resolver |
**ns2** | **string** | Secondary DNS resolver |
**ipv4** | [**\Hostinger\Model\VPSV1IPAddressIPAddressCollection**](VPSV1IPAddressIPAddressCollection.md) |  |
**ipv6** | [**\Hostinger\Model\VPSV1IPAddressIPAddressCollection**](VPSV1IPAddressIPAddressCollection.md) |  |
**template** | [**\Hostinger\Model\VPSV1TemplateTemplateResource**](VPSV1TemplateTemplateResource.md) |  |
**createdAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
