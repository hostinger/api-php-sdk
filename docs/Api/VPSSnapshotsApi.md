# Hostinger\VPSSnapshotsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSnapshotV1()**](VPSSnapshotsApi.md#createSnapshotV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Create snapshot |
| [**deleteSnapshotV1()**](VPSSnapshotsApi.md#deleteSnapshotV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Delete snapshot |
| [**getSnapshotV1()**](VPSSnapshotsApi.md#getSnapshotV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Get snapshot |
| [**restoreSnapshotV1()**](VPSSnapshotsApi.md#restoreSnapshotV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot/restore | Restore snapshot |


## `createSnapshotV1()`

```php
createSnapshotV1($virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Create snapshot

This endpoint creates a snapshot of a specified virtual machine.  A snapshot captures the state and data of the virtual machine at a specific point in time,  allowing users to restore the virtual machine to that state if needed.  This operation is useful for backup purposes, system recovery,  and testing changes without affecting the current state of the virtual machine.  **Creating new snapshot will overwrite the existing snapshot!**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->createSnapshotV1($virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->createSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSnapshotV1()`

```php
deleteSnapshotV1($virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Delete snapshot

This endpoint deletes a snapshot of a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->deleteSnapshotV1($virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->deleteSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnapshotV1()`

```php
getSnapshotV1($virtual_machine_id): \Hostinger\Model\VPSV1SnapshotSnapshotResource
```

Get snapshot

This endpoint retrieves a snapshot for a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->getSnapshotV1($virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->getSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1SnapshotSnapshotResource**](../Model/VPSV1SnapshotSnapshotResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreSnapshotV1()`

```php
restoreSnapshotV1($virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Restore snapshot

This endpoint restores a specified virtual machine to a previous state using a snapshot.  Restoring from a snapshot allows users to revert the virtual machine to that state, which is useful for system recovery, undoing changes, or testing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->restoreSnapshotV1($virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->restoreSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
