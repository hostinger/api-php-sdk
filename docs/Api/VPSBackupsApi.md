# Hostinger\VPSBackupsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBackupV1()**](VPSBackupsApi.md#deleteBackupV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/backups/{backupId} | Delete backup |
| [**getBackupListV1()**](VPSBackupsApi.md#getBackupListV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/backups | Get backup list |
| [**restoreBackupV1()**](VPSBackupsApi.md#restoreBackupV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/backups/{backupId}/restore | Restore backup |


## `deleteBackupV1()`

```php
deleteBackupV1($virtualMachineId, $backupId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete backup

This endpoint deletes a specified backup for a virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSBackupsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$backupId = 8676502; // int | Backup ID

try {
    $result = $apiInstance->deleteBackupV1($virtualMachineId, $backupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSBackupsApi->deleteBackupV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **backupId** | **int**| Backup ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBackupListV1()`

```php
getBackupListV1($virtualMachineId, $page): \Hostinger\Model\VPSGetBackupListV1200Response
```

Get backup list

This endpoint retrieves a list of backups for a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSBackupsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$page = 1; // int | Page number

try {
    $result = $apiInstance->getBackupListV1($virtualMachineId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSBackupsApi->getBackupListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSGetBackupListV1200Response**](../Model/VPSGetBackupListV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreBackupV1()`

```php
restoreBackupV1($virtualMachineId, $backupId): \Hostinger\Model\VPSV1ActionActionResource
```

Restore backup

This endpoint restores a backup for a specified virtual machine.  The system will then initiate the restore process, which may take some time depending on the size of the backup.  **All data on the virtual machine will be overwritten with the data from the backup.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSBackupsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$backupId = 8676502; // int | Backup ID

try {
    $result = $apiInstance->restoreBackupV1($virtualMachineId, $backupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSBackupsApi->restoreBackupV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **backupId** | **int**| Backup ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
