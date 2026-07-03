# Hostinger\HostingPHPApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPHPDetailsV1()**](HostingPHPApi.md#getPHPDetailsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/php/details | Get PHP details |
| [**getPHPInfoV1()**](HostingPHPApi.md#getPHPInfoV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/php/php-info | Get PHP info |
| [**resetPHPExtensionsV1()**](HostingPHPApi.md#resetPHPExtensionsV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/extensions/reset | Reset PHP extensions |
| [**updatePHPExtensionsV1()**](HostingPHPApi.md#updatePHPExtensionsV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/extensions | Update PHP extensions |
| [**updatePHPOptionsV1()**](HostingPHPApi.md#updatePHPOptionsV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/options | Update PHP options |
| [**updatePHPVersionV1()**](HostingPHPApi.md#updatePHPVersionV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/version | Update PHP version |


## `getPHPDetailsV1()`

```php
getPHPDetailsV1($username, $domain): \Hostinger\Model\HostingV1PhpPhpDetailsResource
```

Get PHP details

Returns the full PHP configuration for the website: current version, available versions (supported and unsupported), enabled/disabled extensions, options with their current value, default, type and the plan limit (`max`), and conflicting extension groups.  Use it to check the current PHP setup before updating the version, extensions or options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getPHPDetailsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->getPHPDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1PhpPhpDetailsResource**](../Model/HostingV1PhpPhpDetailsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPHPInfoV1()`

```php
getPHPInfoV1($username, $domain): \Hostinger\Model\HostingV1PhpPhpInfoResource
```

Get PHP info

Returns the full phpinfo page (HTML) for the website.  Use it to debug PHP issues or inspect the complete PHP environment of the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getPHPInfoV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->getPHPInfoV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1PhpPhpInfoResource**](../Model/HostingV1PhpPhpInfoResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPHPExtensionsV1()`

```php
resetPHPExtensionsV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Reset PHP extensions

Resets all PHP extensions of the website to their default state.  Use it to recover from extension conflicts or restore the original configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->resetPHPExtensionsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->resetPHPExtensionsV1: ', $e->getMessage(), PHP_EOL;
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

## `updatePHPExtensionsV1()`

```php
updatePHPExtensionsV1($username, $domain, $hostingV1PhpUpdatePhpExtensionsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update PHP extensions

Enables or disables PHP extensions (modules) for the website.  Use the Get PHP details endpoint to check the current extension states before changing them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1PhpUpdatePhpExtensionsRequest = new \Hostinger\Model\HostingV1PhpUpdatePhpExtensionsRequest(); // \Hostinger\Model\HostingV1PhpUpdatePhpExtensionsRequest

try {
    $result = $apiInstance->updatePHPExtensionsV1($username, $domain, $hostingV1PhpUpdatePhpExtensionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->updatePHPExtensionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1PhpUpdatePhpExtensionsRequest** | [**\Hostinger\Model\HostingV1PhpUpdatePhpExtensionsRequest**](../Model/HostingV1PhpUpdatePhpExtensionsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePHPOptionsV1()`

```php
updatePHPOptionsV1($username, $domain, $hostingV1PhpUpdatePhpOptionsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update PHP options

Updates PHP options for the website (e.g. `memory_limit`, `max_execution_time`, `upload_max_filesize`). Only provide the options you want to change, inside the `options` object.  Values above the account plan limit are silently capped to that limit, so the request can succeed with a smaller applied value. Call the Get PHP details endpoint afterwards to read the applied value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1PhpUpdatePhpOptionsRequest = new \Hostinger\Model\HostingV1PhpUpdatePhpOptionsRequest(); // \Hostinger\Model\HostingV1PhpUpdatePhpOptionsRequest

try {
    $result = $apiInstance->updatePHPOptionsV1($username, $domain, $hostingV1PhpUpdatePhpOptionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->updatePHPOptionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1PhpUpdatePhpOptionsRequest** | [**\Hostinger\Model\HostingV1PhpUpdatePhpOptionsRequest**](../Model/HostingV1PhpUpdatePhpOptionsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePHPVersionV1()`

```php
updatePHPVersionV1($username, $domain, $hostingV1PhpUpdatePhpVersionRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update PHP version

Changes the PHP version of the website.  Use the Get PHP details endpoint to see the versions available for the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPHPApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1PhpUpdatePhpVersionRequest = new \Hostinger\Model\HostingV1PhpUpdatePhpVersionRequest(); // \Hostinger\Model\HostingV1PhpUpdatePhpVersionRequest

try {
    $result = $apiInstance->updatePHPVersionV1($username, $domain, $hostingV1PhpUpdatePhpVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPHPApi->updatePHPVersionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1PhpUpdatePhpVersionRequest** | [**\Hostinger\Model\HostingV1PhpUpdatePhpVersionRequest**](../Model/HostingV1PhpUpdatePhpVersionRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
