# Hostinger\VPSSSHKeysApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addVirtualMachineSSHKeysV1()**](VPSSSHKeysApi.md#addVirtualMachineSSHKeysV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys | Add virtual machine SSH keys |
| [**listVirtualMachineSSHKeysV1()**](VPSSSHKeysApi.md#listVirtualMachineSSHKeysV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys | List virtual machine SSH keys |
| [**removeVirtualMachineSSHKeysV1()**](VPSSSHKeysApi.md#removeVirtualMachineSSHKeysV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys | Remove virtual machine SSH keys |


## `addVirtualMachineSSHKeysV1()`

```php
addVirtualMachineSSHKeysV1($virtualMachineId, $vPSV1SshKeyStoreRequest): \Hostinger\Model\VPSV1SshKeySshKeyResource[]
```

Add virtual machine SSH keys

Add one or more SSH public keys to a specified virtual machine.  Keys are added to the `root` user and can be used for passwordless SSH authentication. Returns the complete list of SSH keys currently configured on the virtual machine.  Use this endpoint to enable SSH key authentication for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSSHKeysApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1SshKeyStoreRequest = new \Hostinger\Model\VPSV1SshKeyStoreRequest(); // \Hostinger\Model\VPSV1SshKeyStoreRequest

try {
    $result = $apiInstance->addVirtualMachineSSHKeysV1($virtualMachineId, $vPSV1SshKeyStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSSHKeysApi->addVirtualMachineSSHKeysV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1SshKeyStoreRequest** | [**\Hostinger\Model\VPSV1SshKeyStoreRequest**](../Model/VPSV1SshKeyStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1SshKeySshKeyResource[]**](../Model/VPSV1SshKeySshKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVirtualMachineSSHKeysV1()`

```php
listVirtualMachineSSHKeysV1($virtualMachineId): \Hostinger\Model\VPSV1SshKeySshKeyResource[]
```

List virtual machine SSH keys

Retrieve SSH public keys currently configured on a specified virtual machine.  Only keys of the `root` user are listed.  Use this endpoint to view SSH keys that can be used for authentication on VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSSHKeysApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->listVirtualMachineSSHKeysV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSSHKeysApi->listVirtualMachineSSHKeysV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1SshKeySshKeyResource[]**](../Model/VPSV1SshKeySshKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeVirtualMachineSSHKeysV1()`

```php
removeVirtualMachineSSHKeysV1($virtualMachineId, $vPSV1SshKeyDestroyRequest): \Hostinger\Model\VPSV1SshKeySshKeyResource[]
```

Remove virtual machine SSH keys

Remove one or more SSH public keys from a specified virtual machine.  Removed keys can no longer be used to authenticate via SSH as the `root` user. Returns the remaining list of SSH keys configured on the virtual machine.  Use this endpoint to revoke SSH key access to VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSSHKeysApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1SshKeyDestroyRequest = new \Hostinger\Model\VPSV1SshKeyDestroyRequest(); // \Hostinger\Model\VPSV1SshKeyDestroyRequest

try {
    $result = $apiInstance->removeVirtualMachineSSHKeysV1($virtualMachineId, $vPSV1SshKeyDestroyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSSHKeysApi->removeVirtualMachineSSHKeysV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1SshKeyDestroyRequest** | [**\Hostinger\Model\VPSV1SshKeyDestroyRequest**](../Model/VPSV1SshKeyDestroyRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1SshKeySshKeyResource[]**](../Model/VPSV1SshKeySshKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
