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
createSnapshotV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Create snapshot

Create a snapshot of a specified virtual machine.  A snapshot captures the state and data of the virtual machine at a specific point in time,  allowing users to restore the virtual machine to that state if needed.  This operation is useful for backup purposes, system recovery,  and testing changes without affecting the current state of the virtual machine.  **Creating new snapshot will overwrite the existing snapshot!**  Use this endpoint to capture VPS state for backup and recovery purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->createSnapshotV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->createSnapshotV1: ', $e->getMessage(), PHP_EOL;
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

## `deleteSnapshotV1()`

```php
deleteSnapshotV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Delete snapshot

Delete a snapshot of a specified virtual machine.  Use this endpoint to remove VPS snapshots.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->deleteSnapshotV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->deleteSnapshotV1: ', $e->getMessage(), PHP_EOL;
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

## `getSnapshotV1()`

```php
getSnapshotV1($virtualMachineId): \Hostinger\Model\VPSV1SnapshotSnapshotResource
```

Get snapshot

Retrieve snapshot for a specified virtual machine.  Use this endpoint to view current VPS snapshot information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->getSnapshotV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->getSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1SnapshotSnapshotResource**](../Model/VPSV1SnapshotSnapshotResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreSnapshotV1()`

```php
restoreSnapshotV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Restore snapshot

Restore a specified virtual machine to a previous state using a snapshot.  Restoring from a snapshot allows users to revert the virtual machine to that state, which is useful for system recovery, undoing changes, or testing.  Use this endpoint to revert VPS instances to previous saved states.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSSnapshotsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->restoreSnapshotV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSSnapshotsApi->restoreSnapshotV1: ', $e->getMessage(), PHP_EOL;
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
