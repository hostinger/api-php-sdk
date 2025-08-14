# Hostinger\VPSActionsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActionDetailsV1()**](VPSActionsApi.md#getActionDetailsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions/{actionId} | Get action details |
| [**getActionsV1()**](VPSActionsApi.md#getActionsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions | Get actions |


## `getActionDetailsV1()`

```php
getActionDetailsV1($virtualMachineId, $actionId): \Hostinger\Model\VPSV1ActionActionResource
```

Get action details

Retrieve detailed information about a specific action performed on a specified virtual machine.  Use this endpoint to monitor specific VPS operation status and details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSActionsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$actionId = 8123712; // int | Action ID

try {
    $result = $apiInstance->getActionDetailsV1($virtualMachineId, $actionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSActionsApi->getActionDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **actionId** | **int**| Action ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionsV1()`

```php
getActionsV1($virtualMachineId, $page): \Hostinger\Model\VPSV1ActionListResponse
```

Get actions

Retrieve actions performed on a specified virtual machine.  Actions are operations or events that have been executed on the virtual machine, such as starting, stopping, or modifying  the machine. This endpoint allows you to view the history of these actions, providing details about each action,  such as the action name, timestamp, and status.  Use this endpoint to view VPS operation history and troubleshoot issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSActionsApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$page = 1; // int | Page number

try {
    $result = $apiInstance->getActionsV1($virtualMachineId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSActionsApi->getActionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSV1ActionListResponse**](../Model/VPSV1ActionListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
