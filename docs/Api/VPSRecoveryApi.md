# Hostinger\VPSRecoveryApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**startRecoveryModeV1()**](VPSRecoveryApi.md#startRecoveryModeV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/recovery | Start recovery mode |
| [**stopRecoveryModeV1()**](VPSRecoveryApi.md#stopRecoveryModeV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/recovery | Stop recovery mode |


## `startRecoveryModeV1()`

```php
startRecoveryModeV1($virtualMachineId, $vPSV1VirtualMachineRecoveryStartRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Start recovery mode

Initiate recovery mode for a specified virtual machine.  Recovery mode is a special state that allows users to perform system rescue operations,  such as repairing file systems, recovering data, or troubleshooting issues that prevent the virtual machine  from booting normally.   Virtual machine will boot recovery disk image and original disk image will be mounted in `/mnt` directory.  Use this endpoint to enable system rescue operations on VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSRecoveryApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineRecoveryStartRequest = new \Hostinger\Model\VPSV1VirtualMachineRecoveryStartRequest(); // \Hostinger\Model\VPSV1VirtualMachineRecoveryStartRequest

try {
    $result = $apiInstance->startRecoveryModeV1($virtualMachineId, $vPSV1VirtualMachineRecoveryStartRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSRecoveryApi->startRecoveryModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineRecoveryStartRequest** | [**\Hostinger\Model\VPSV1VirtualMachineRecoveryStartRequest**](../Model/VPSV1VirtualMachineRecoveryStartRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopRecoveryModeV1()`

```php
stopRecoveryModeV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Stop recovery mode

Stop recovery mode for a specified virtual machine.  If virtual machine is not in recovery mode, this operation will fail.  Use this endpoint to exit system rescue mode and return VPS to normal operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSRecoveryApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->stopRecoveryModeV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSRecoveryApi->stopRecoveryModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
