# Hostinger\AgencyHostingWordPressApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeWordPressVersionV1()**](AgencyHostingWordPressApi.md#changeWordPressVersionV1) | **PATCH** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/version | Change WordPress version |
| [**getWordPressSettingsV1()**](AgencyHostingWordPressApi.md#getWordPressSettingsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings | Get WordPress settings |
| [**listAvailableWordPressVersionsV1()**](AgencyHostingWordPressApi.md#listAvailableWordPressVersionsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/versions | List available WordPress versions |


## `changeWordPressVersionV1()`

```php
changeWordPressVersionV1($websiteUid, $agencyHostingV1WordPressChangeVersionRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change WordPress version

Changes the installed WordPress core version on an Agency Plan website to one of the versions available for installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWordPressApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1WordPressChangeVersionRequest = new \Hostinger\Model\AgencyHostingV1WordPressChangeVersionRequest(); // \Hostinger\Model\AgencyHostingV1WordPressChangeVersionRequest

try {
    $result = $apiInstance->changeWordPressVersionV1($websiteUid, $agencyHostingV1WordPressChangeVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->changeWordPressVersionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1WordPressChangeVersionRequest** | [**\Hostinger\Model\AgencyHostingV1WordPressChangeVersionRequest**](../Model/AgencyHostingV1WordPressChangeVersionRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordPressSettingsV1()`

```php
getWordPressSettingsV1($websiteUid): \Hostinger\Model\AgencyHostingV1WordPressSettingsResource
```

Get WordPress settings

Returns the current WordPress settings for an Agency Plan website: installed core version, LiteSpeed Cache plugin status, object cache status, and maintenance mode status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWordPressApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->getWordPressSettingsV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->getWordPressSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WordPressSettingsResource**](../Model/AgencyHostingV1WordPressSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableWordPressVersionsV1()`

```php
listAvailableWordPressVersionsV1($websiteUid): \Hostinger\Model\AgencyHostingV1WordPressVersionResource[]
```

List available WordPress versions

Lists the WordPress core versions available for installation on an Agency Plan website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWordPressApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->listAvailableWordPressVersionsV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->listAvailableWordPressVersionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WordPressVersionResource[]**](../Model/AgencyHostingV1WordPressVersionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
