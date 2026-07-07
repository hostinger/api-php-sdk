# Hostinger\WordPressObjectCacheApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**showMemcachedObjectCacheStatusV1()**](WordPressObjectCacheApi.md#showMemcachedObjectCacheStatusV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/memcached/status | Show Memcached object cache status |
| [**toggleMemcachedObjectCacheV1()**](WordPressObjectCacheApi.md#toggleMemcachedObjectCacheV1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/memcached/toggle | Toggle Memcached object cache |


## `showMemcachedObjectCacheStatusV1()`

```php
showMemcachedObjectCacheStatusV1($username, $software): \Hostinger\Model\WordPressV1MemcachedMemcachedStatusResource
```

Show Memcached object cache status

Show the Memcached object cache status for the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressObjectCacheApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->showMemcachedObjectCacheStatusV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressObjectCacheApi->showMemcachedObjectCacheStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1MemcachedMemcachedStatusResource**](../Model/WordPressV1MemcachedMemcachedStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleMemcachedObjectCacheV1()`

```php
toggleMemcachedObjectCacheV1($username, $software, $wordPressV1MemcachedToggleMemcachedRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Toggle Memcached object cache

Activate or deactivate the Memcached object cache for the specified WordPress installation, based on the `enabled` flag.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressObjectCacheApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1MemcachedToggleMemcachedRequest = new \Hostinger\Model\WordPressV1MemcachedToggleMemcachedRequest(); // \Hostinger\Model\WordPressV1MemcachedToggleMemcachedRequest

try {
    $result = $apiInstance->toggleMemcachedObjectCacheV1($username, $software, $wordPressV1MemcachedToggleMemcachedRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressObjectCacheApi->toggleMemcachedObjectCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1MemcachedToggleMemcachedRequest** | [**\Hostinger\Model\WordPressV1MemcachedToggleMemcachedRequest**](../Model/WordPressV1MemcachedToggleMemcachedRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
