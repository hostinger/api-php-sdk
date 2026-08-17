# Hostinger\AgencyHostingPHPApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAvailablePHPVersionsForAWebsiteV1()**](AgencyHostingPHPApi.md#listAvailablePHPVersionsForAWebsiteV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/php-settings/versions | List available PHP versions for a website |
| [**listAvailablePHPVersionsForAnOrderV1()**](AgencyHostingPHPApi.md#listAvailablePHPVersionsForAnOrderV1) | **GET** /api/agency-hosting/v1/orders/{order_id}/websites/php-settings/versions | List available PHP versions for an order |
| [**listPHPExtensionsForAWebsiteV1()**](AgencyHostingPHPApi.md#listPHPExtensionsForAWebsiteV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/php-settings/extensions | List PHP extensions for a website |
| [**listPHPOptionsForAWebsiteV1()**](AgencyHostingPHPApi.md#listPHPOptionsForAWebsiteV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/php-settings/options | List PHP options for a website |
| [**replaceWebsitePHPExtensionsV1()**](AgencyHostingPHPApi.md#replaceWebsitePHPExtensionsV1) | **PUT** /api/agency-hosting/v1/websites/{website_uid}/php-settings/extensions | Replace website PHP extensions |
| [**replaceWebsitePHPOptionsV1()**](AgencyHostingPHPApi.md#replaceWebsitePHPOptionsV1) | **PUT** /api/agency-hosting/v1/websites/{website_uid}/php-settings/options | Replace website PHP options |
| [**updateWebsitePHPVersionV1()**](AgencyHostingPHPApi.md#updateWebsitePHPVersionV1) | **PATCH** /api/agency-hosting/v1/websites/{website_uid}/php-settings/version | Update website PHP version |


## `listAvailablePHPVersionsForAWebsiteV1()`

```php
listAvailablePHPVersionsForAWebsiteV1($websiteUid): \Hostinger\Model\AgencyHostingV1PhpVersionResource[]
```

List available PHP versions for a website

Lists the PHP versions an Agency Plan website can be switched to. The version the website is currently running is returned as settings.php.version by the website details endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->listAvailablePHPVersionsForAWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->listAvailablePHPVersionsForAWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1PhpVersionResource[]**](../Model/AgencyHostingV1PhpVersionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailablePHPVersionsForAnOrderV1()`

```php
listAvailablePHPVersionsForAnOrderV1($orderId): \Hostinger\Model\AgencyHostingV1PhpVersionResource[]
```

List available PHP versions for an order

Lists the PHP versions available to websites created under an Agency Plan order, determined by the server the order is hosted on. Use this before creating a website; for a website that already exists, call the website-scoped versions endpoint instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID

try {
    $result = $apiInstance->listAvailablePHPVersionsForAnOrderV1($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->listAvailablePHPVersionsForAnOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1PhpVersionResource[]**](../Model/AgencyHostingV1PhpVersionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPHPExtensionsForAWebsiteV1()`

```php
listPHPExtensionsForAWebsiteV1($websiteUid): \Hostinger\Model\AgencyHostingV1PhpExtensionResource[]
```

List PHP extensions for a website

Lists every PHP extension available to an Agency Plan website and whether it is currently enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->listPHPExtensionsForAWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->listPHPExtensionsForAWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1PhpExtensionResource[]**](../Model/AgencyHostingV1PhpExtensionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPHPOptionsForAWebsiteV1()`

```php
listPHPOptionsForAWebsiteV1($websiteUid): \Hostinger\Model\AgencyHostingV1PhpOptionResource[]
```

List PHP options for a website

Lists the php.ini directives that can be configured for an Agency Plan website, each with its default, the value currently in effect, and the values it accepts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->listPHPOptionsForAWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->listPHPOptionsForAWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1PhpOptionResource[]**](../Model/AgencyHostingV1PhpOptionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceWebsitePHPExtensionsV1()`

```php
replaceWebsitePHPExtensionsV1($websiteUid, $agencyHostingV1PhpUpdateExtensionsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Replace website PHP extensions

Replaces the set of PHP extensions enabled on an Agency Plan website with the ones provided. Any toggleable extension not in the request is disabled, so call the extensions endpoint first and send the full desired set. Extensions compiled into PHP, reported with the \"built-in\" state, are always active and are unaffected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1PhpUpdateExtensionsRequest = new \Hostinger\Model\AgencyHostingV1PhpUpdateExtensionsRequest(); // \Hostinger\Model\AgencyHostingV1PhpUpdateExtensionsRequest

try {
    $result = $apiInstance->replaceWebsitePHPExtensionsV1($websiteUid, $agencyHostingV1PhpUpdateExtensionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->replaceWebsitePHPExtensionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1PhpUpdateExtensionsRequest** | [**\Hostinger\Model\AgencyHostingV1PhpUpdateExtensionsRequest**](../Model/AgencyHostingV1PhpUpdateExtensionsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceWebsitePHPOptionsV1()`

```php
replaceWebsitePHPOptionsV1($websiteUid, $agencyHostingV1PhpUpdateOptionsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Replace website PHP options

Replaces the custom php.ini values on an Agency Plan website with the ones provided. Any option not in the request is reset to its default, so call the options endpoint first and send the full desired set. Sending an empty array resets every option to its default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1PhpUpdateOptionsRequest = new \Hostinger\Model\AgencyHostingV1PhpUpdateOptionsRequest(); // \Hostinger\Model\AgencyHostingV1PhpUpdateOptionsRequest

try {
    $result = $apiInstance->replaceWebsitePHPOptionsV1($websiteUid, $agencyHostingV1PhpUpdateOptionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->replaceWebsitePHPOptionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1PhpUpdateOptionsRequest** | [**\Hostinger\Model\AgencyHostingV1PhpUpdateOptionsRequest**](../Model/AgencyHostingV1PhpUpdateOptionsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebsitePHPVersionV1()`

```php
updateWebsitePHPVersionV1($websiteUid, $agencyHostingV1PhpUpdateVersionRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update website PHP version

Switches an Agency Plan website to a different PHP version. Call the available versions endpoint first to see which versions can be selected. The website restarts on the new version, so requests served during the switch may fail and code that is incompatible with the target version will break.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingPHPApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1PhpUpdateVersionRequest = new \Hostinger\Model\AgencyHostingV1PhpUpdateVersionRequest(); // \Hostinger\Model\AgencyHostingV1PhpUpdateVersionRequest

try {
    $result = $apiInstance->updateWebsitePHPVersionV1($websiteUid, $agencyHostingV1PhpUpdateVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingPHPApi->updateWebsitePHPVersionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1PhpUpdateVersionRequest** | [**\Hostinger\Model\AgencyHostingV1PhpUpdateVersionRequest**](../Model/AgencyHostingV1PhpUpdateVersionRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
