# Hostinger\AgencyHostingWordPressApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeAgencyPlanWebsiteWordPressCoreVersionV1()**](AgencyHostingWordPressApi.md#changeAgencyPlanWebsiteWordPressCoreVersionV1) | **PATCH** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/version | Change Agency Plan website WordPress core version |
| [**getAgencyPlanWebsiteWordPressSettingsV1()**](AgencyHostingWordPressApi.md#getAgencyPlanWebsiteWordPressSettingsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings | Get Agency Plan website WordPress settings |
| [**listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1()**](AgencyHostingWordPressApi.md#listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/versions | List available WordPress versions for an Agency Plan website |


## `changeAgencyPlanWebsiteWordPressCoreVersionV1()`

```php
changeAgencyPlanWebsiteWordPressCoreVersionV1($websiteUid, $agencyHostingV1WordPressChangeVersionRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change Agency Plan website WordPress core version

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
    $result = $apiInstance->changeAgencyPlanWebsiteWordPressCoreVersionV1($websiteUid, $agencyHostingV1WordPressChangeVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->changeAgencyPlanWebsiteWordPressCoreVersionV1: ', $e->getMessage(), PHP_EOL;
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

## `getAgencyPlanWebsiteWordPressSettingsV1()`

```php
getAgencyPlanWebsiteWordPressSettingsV1($websiteUid): \Hostinger\Model\AgencyHostingV1WordPressSettingsResource
```

Get Agency Plan website WordPress settings

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
    $result = $apiInstance->getAgencyPlanWebsiteWordPressSettingsV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->getAgencyPlanWebsiteWordPressSettingsV1: ', $e->getMessage(), PHP_EOL;
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

## `listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1()`

```php
listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1($websiteUid): \Hostinger\Model\AgencyHostingV1WordPressVersionResource[]
```

List available WordPress versions for an Agency Plan website

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
    $result = $apiInstance->listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWordPressApi->listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1: ', $e->getMessage(), PHP_EOL;
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
