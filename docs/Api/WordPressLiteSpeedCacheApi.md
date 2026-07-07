# Hostinger\WordPressLiteSpeedCacheApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purgeLiteSpeedCacheV1()**](WordPressLiteSpeedCacheApi.md#purgeLiteSpeedCacheV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/litespeed-cache/purge | Purge LiteSpeed Cache |
| [**showLiteSpeedCacheStatusV1()**](WordPressLiteSpeedCacheApi.md#showLiteSpeedCacheStatusV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/litespeed-cache/status | Show LiteSpeed Cache status |


## `purgeLiteSpeedCacheV1()`

```php
purgeLiteSpeedCacheV1($username, $software): \Hostinger\Model\CommonSuccessEmptyResource
```

Purge LiteSpeed Cache

Purge the LiteSpeed Cache for the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressLiteSpeedCacheApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->purgeLiteSpeedCacheV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressLiteSpeedCacheApi->purgeLiteSpeedCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showLiteSpeedCacheStatusV1()`

```php
showLiteSpeedCacheStatusV1($username, $software): \Hostinger\Model\WordPressV1LitespeedLitespeedCacheStatusResource
```

Show LiteSpeed Cache status

Show the LiteSpeed Cache status for the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressLiteSpeedCacheApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->showLiteSpeedCacheStatusV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressLiteSpeedCacheApi->showLiteSpeedCacheStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1LitespeedLitespeedCacheStatusResource**](../Model/WordPressV1LitespeedLitespeedCacheStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
