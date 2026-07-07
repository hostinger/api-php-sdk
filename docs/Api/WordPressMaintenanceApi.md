# Hostinger\WordPressMaintenanceApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**showMaintenanceStatusV1()**](WordPressMaintenanceApi.md#showMaintenanceStatusV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/maintenance/status | Show maintenance status |
| [**toggleMaintenanceModeV1()**](WordPressMaintenanceApi.md#toggleMaintenanceModeV1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/maintenance/toggle | Toggle maintenance mode |


## `showMaintenanceStatusV1()`

```php
showMaintenanceStatusV1($username, $software): \Hostinger\Model\WordPressV1MaintenanceMaintenanceStatusResource
```

Show maintenance status

Show the maintenance mode status for the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressMaintenanceApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->showMaintenanceStatusV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressMaintenanceApi->showMaintenanceStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1MaintenanceMaintenanceStatusResource**](../Model/WordPressV1MaintenanceMaintenanceStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleMaintenanceModeV1()`

```php
toggleMaintenanceModeV1($username, $software, $wordPressV1MaintenanceToggleMaintenanceRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Toggle maintenance mode

Enable or disable maintenance mode for the specified WordPress installation, based on the `enabled` flag.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressMaintenanceApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1MaintenanceToggleMaintenanceRequest = new \Hostinger\Model\WordPressV1MaintenanceToggleMaintenanceRequest(); // \Hostinger\Model\WordPressV1MaintenanceToggleMaintenanceRequest

try {
    $result = $apiInstance->toggleMaintenanceModeV1($username, $software, $wordPressV1MaintenanceToggleMaintenanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressMaintenanceApi->toggleMaintenanceModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1MaintenanceToggleMaintenanceRequest** | [**\Hostinger\Model\WordPressV1MaintenanceToggleMaintenanceRequest**](../Model/WordPressV1MaintenanceToggleMaintenanceRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
