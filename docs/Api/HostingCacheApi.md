# Hostinger\HostingCacheApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearWebsiteCacheV1()**](HostingCacheApi.md#clearWebsiteCacheV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/clear | Clear website cache |
| [**disableCachelessModeV1()**](HostingCacheApi.md#disableCachelessModeV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cacheless-mode/disable | Disable cacheless mode |
| [**disableWebsiteCacheV1()**](HostingCacheApi.md#disableWebsiteCacheV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/disable | Disable website cache |
| [**enableCachelessModeV1()**](HostingCacheApi.md#enableCachelessModeV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cacheless-mode/enable | Enable cacheless mode |
| [**enableWebsiteCacheV1()**](HostingCacheApi.md#enableWebsiteCacheV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/enable | Enable website cache |


## `clearWebsiteCacheV1()`

```php
clearWebsiteCacheV1($username, $domain, $directory): \Hostinger\Model\CommonSuccessEmptyResource
```

Clear website cache

Permanently clears all server-side cache for the website at once. Use it when content was updated and needs to be visible immediately, or after making major changes.  Also purges the Hostinger CDN cache when CDN is enabled on the website. For a WordPress installation living in a subdirectory, pass the directory query parameter to clear its cache.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$directory = blog; // string | Directory of the website installation to clear, relative to the website root. Defaults to the website root.

try {
    $result = $apiInstance->clearWebsiteCacheV1($username, $domain, $directory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->clearWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **directory** | **string**| Directory of the website installation to clear, relative to the website root. Defaults to the website root. | [optional] |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableCachelessModeV1()`

```php
disableCachelessModeV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable cacheless mode

Turns off development (cacheless) mode and returns the website to normal caching. Use it after finishing development work to restore the performance benefits of caching.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->disableCachelessModeV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->disableCachelessModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableWebsiteCacheV1()`

```php
disableWebsiteCacheV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable website cache

Turns off server-side caching for the website until it is enabled again. May impact performance. Use it when experiencing cache-related issues; to temporarily bypass caching while developing or debugging, prefer enabling cacheless mode instead.  Does nothing if caching is already disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->disableWebsiteCacheV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->disableWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableCachelessModeV1()`

```php
enableCachelessModeV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Enable cacheless mode

Enables development (cacheless) mode where nothing is cached, effectively turning off all caching for the website. Use it while actively developing, testing changes, debugging issues, or when real-time updates must be visible. Disable cacheless mode afterwards to restore normal caching.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->enableCachelessModeV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->enableCachelessModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableWebsiteCacheV1()`

```php
enableWebsiteCacheV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Enable website cache

Turns on server-side caching for the website for better performance. Use it for faster page loads, reduced server load, or improved user experience. Recommended for production websites.  Does nothing if caching is already enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->enableWebsiteCacheV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->enableWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
