# # VPSV1VirtualMachineVirtualMachineResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Virtual machine ID | [optional]
**firewallGroupId** | **int** | Active firewall ID, &#x60;null&#x60; if disabled | [optional]
**subscriptionId** | **string** | Subscription ID | [optional]
**plan** | **string** | VPS plan name | [optional]
**hostname** | **string** |  | [optional]
**state** | **string** |  | [optional]
**actionsLock** | **string** |  | [optional]
**cpus** | **int** | CPUs count assigned to virtual machine | [optional]
**memory** | **int** | Memory available to virtual machine (in megabytes) | [optional]
**disk** | **int** | Virtual machine disk size (in megabytes) | [optional]
**bandwidth** | **int** | Monthly internet traffic available to virtual machine (in megabytes) | [optional]
**ns1** | **string** | Primary DNS resolver | [optional]
**ns2** | **string** | Secondary DNS resolver | [optional]
**ipv4** | [**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv4**](VPSV1VirtualMachineVirtualMachineResourceIpv4.md) |  | [optional]
**ipv6** | [**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceIpv6**](VPSV1VirtualMachineVirtualMachineResourceIpv6.md) |  | [optional]
**template** | [**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResourceTemplate**](VPSV1VirtualMachineVirtualMachineResourceTemplate.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
