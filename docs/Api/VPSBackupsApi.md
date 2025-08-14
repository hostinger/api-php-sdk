# Hostinger\VPSBackupsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBackupsV1()**](VPSBackupsApi.md#getBackupsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/backups | Get backups |
| [**restoreBackupV1()**](VPSBackupsApi.md#restoreBackupV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/backups/{backupId}/restore | Restore backup |


## `getBackupsV1()`

```php
getBackupsV1($virtualMachineId, $page): \Hostinger\Model\VPSV1BackupListResponse
```

Get backups

Retrieve backups for a specified virtual machine.  Use this endpoint to view available backup points for VPS data recovery.

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
    $result = $apiInstance->getBackupsV1($virtualMachineId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSBackupsApi->getBackupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSV1BackupListResponse**](../Model/VPSV1BackupListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreBackupV1()`

```php
restoreBackupV1($virtualMachineId, $backupId): \Hostinger\Model\VPSV1ActionActionResource
```

Restore backup

Restore a backup for a specified virtual machine.  The system will then initiate the restore process, which may take some time depending on the size of the backup.  **All data on the virtual machine will be overwritten with the data from the backup.**  Use this endpoint to recover VPS data from backup points.

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
