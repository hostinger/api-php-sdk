# Hostinger\VPSActionsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActionListV1()**](VPSActionsApi.md#getActionListV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions | Get action list |
| [**getActionV1()**](VPSActionsApi.md#getActionV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions/{actionId} | Get action |


## `getActionListV1()`

```php
getActionListV1($virtualMachineId, $page): \Hostinger\Model\VPSGetActionListV1200Response
```

Get action list

This endpoint retrieves a list of actions performed on a specified virtual machine.  Actions are operations or events that have been executed on the virtual machine, such as starting, stopping, or modifying  the machine. This endpoint allows you to view the history of these actions, providing details about each action,  such as the action name, timestamp, and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$page = 1; // int | Page number

try {
    $result = $apiInstance->getActionListV1($virtualMachineId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSActionsApi->getActionListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSGetActionListV1200Response**](../Model/VPSGetActionListV1200Response.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionV1()`

```php
getActionV1($virtualMachineId, $actionId): \Hostinger\Model\VPSV1ActionActionResource
```

Get action

This endpoint retrieves details of a specific action performed on a specified virtual machine.   This endpoint allows you to view detailed information about a particular action, including the action name, timestamp, and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$actionId = 8123712; // int | Action ID

try {
    $result = $apiInstance->getActionV1($virtualMachineId, $actionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSActionsApi->getActionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **actionId** | **int**| Action ID | |

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
