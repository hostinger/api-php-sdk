# Hostinger\VPSPTRRecordsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPTRRecordV1()**](VPSPTRRecordsApi.md#createPTRRecordV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr/{ipAddressId} | Create PTR record |
| [**deletePTRRecordV1()**](VPSPTRRecordsApi.md#deletePTRRecordV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr/{ipAddressId} | Delete PTR record |


## `createPTRRecordV1()`

```php
createPTRRecordV1($virtualMachineId, $ipAddressId, $vPSV1VirtualMachinePTRStoreRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Create PTR record

Create or update a PTR (Pointer) record for a specified virtual machine.  Use this endpoint to configure reverse DNS lookup for VPS IP addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPTRRecordsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$ipAddressId = 246547; // int | IP Address ID
$vPSV1VirtualMachinePTRStoreRequest = new \Hostinger\Model\VPSV1VirtualMachinePTRStoreRequest(); // \Hostinger\Model\VPSV1VirtualMachinePTRStoreRequest

try {
    $result = $apiInstance->createPTRRecordV1($virtualMachineId, $ipAddressId, $vPSV1VirtualMachinePTRStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPTRRecordsApi->createPTRRecordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **ipAddressId** | **int**| IP Address ID | |
| **vPSV1VirtualMachinePTRStoreRequest** | [**\Hostinger\Model\VPSV1VirtualMachinePTRStoreRequest**](../Model/VPSV1VirtualMachinePTRStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePTRRecordV1()`

```php
deletePTRRecordV1($virtualMachineId, $ipAddressId): \Hostinger\Model\VPSV1ActionActionResource
```

Delete PTR record

Delete a PTR (Pointer) record for a specified virtual machine.  Once deleted, reverse DNS lookups to the virtual machine's IP address will no longer return the previously configured hostname.  Use this endpoint to remove reverse DNS configuration from VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPTRRecordsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$ipAddressId = 246547; // int | IP Address ID

try {
    $result = $apiInstance->deletePTRRecordV1($virtualMachineId, $ipAddressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPTRRecordsApi->deletePTRRecordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **ipAddressId** | **int**| IP Address ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
