# Hostinger\HostingCacheApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearWebsiteCacheV1()**](HostingCacheApi.md#clearWebsiteCacheV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/clear | Clear website cache |
| [**getCacheStatusV1()**](HostingCacheApi.md#getCacheStatusV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/status | Get cache status |
| [**toggleCachelessModeV1()**](HostingCacheApi.md#toggleCachelessModeV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cacheless-mode/toggle | Toggle cacheless mode |
| [**toggleWebsiteCacheV1()**](HostingCacheApi.md#toggleWebsiteCacheV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/toggle | Toggle website cache |


## `clearWebsiteCacheV1()`

```php
clearWebsiteCacheV1($username, $domain, $directory): \Hostinger\Model\CommonSuccessEmptyResource
```

Clear website cache

Permanently clears all server-side cache for the website at once. Use it when content was updated and needs to be visible immediately, or after making major changes.  Also purges the Hostinger CDN cache when CDN is enabled on the website. To purge only the CDN cache and leave the server cache untouched, use `Purge CDN cache`. For a WordPress installation living in a subdirectory, pass the directory query parameter to clear its cache.

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

## `getCacheStatusV1()`

```php
getCacheStatusV1($username, $domain): \Hostinger\Model\HostingV1CacheCacheStatusResource
```

Get cache status

Returns the caching state of the website: whether server-side caching is enabled and whether development (cacheless) mode is on. Works for the main domain, addon websites, parked domains and subdomains of the account; each reports its own settings and does not inherit them from its parent website.  `is_enabled` is the setting changed by `Toggle website cache` and reflects a toggle immediately. `is_cacheless_mode_enabled` is true while development mode is on; caching is then bypassed even when `is_enabled` is true. `Toggle cacheless mode` is applied in the background, so this flag can take a few minutes to follow it.  The domain must be the exact website name as listed on the account, without a `www.` prefix. Returns 404 when the domain is not a website on the account.

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
    $result = $apiInstance->getCacheStatusV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->getCacheStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1CacheCacheStatusResource**](../Model/HostingV1CacheCacheStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleCachelessModeV1()`

```php
toggleCachelessModeV1($username, $domain, $hostingV1CacheToggleCachelessModeRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Toggle cacheless mode

Turns development (cacheless) mode on or off, based on the enabled flag. When enabled, nothing is cached, effectively turning off all caching for the website; use it while actively developing, testing changes, debugging issues, or when real-time updates must be visible. Disable it after finishing development work to restore the performance benefits of caching.  The change is applied in the background and can take a few minutes. Use `Get cache status` to check the current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1CacheToggleCachelessModeRequest = new \Hostinger\Model\HostingV1CacheToggleCachelessModeRequest(); // \Hostinger\Model\HostingV1CacheToggleCachelessModeRequest

try {
    $result = $apiInstance->toggleCachelessModeV1($username, $domain, $hostingV1CacheToggleCachelessModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->toggleCachelessModeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1CacheToggleCachelessModeRequest** | [**\Hostinger\Model\HostingV1CacheToggleCachelessModeRequest**](../Model/HostingV1CacheToggleCachelessModeRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleWebsiteCacheV1()`

```php
toggleWebsiteCacheV1($username, $domain, $hostingV1CacheToggleCacheRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Toggle website cache

Turns server-side caching for the website on or off, based on the enabled flag. Enable it for faster page loads, reduced server load, and improved user experience; recommended for production websites. Disabling may impact performance; to temporarily bypass caching while developing or debugging, prefer toggling cacheless mode instead.  Does nothing if caching is already in the requested state. Use `Get cache status` to check the current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCacheApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1CacheToggleCacheRequest = new \Hostinger\Model\HostingV1CacheToggleCacheRequest(); // \Hostinger\Model\HostingV1CacheToggleCacheRequest

try {
    $result = $apiInstance->toggleWebsiteCacheV1($username, $domain, $hostingV1CacheToggleCacheRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCacheApi->toggleWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1CacheToggleCacheRequest** | [**\Hostinger\Model\HostingV1CacheToggleCacheRequest**](../Model/HostingV1CacheToggleCacheRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
