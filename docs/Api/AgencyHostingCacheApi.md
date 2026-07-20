# Hostinger\AgencyHostingCacheApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearAgencyPlanWebsiteCacheV1()**](AgencyHostingCacheApi.md#clearAgencyPlanWebsiteCacheV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/cache | Clear Agency Plan website cache |


## `clearAgencyPlanWebsiteCacheV1()`

```php
clearAgencyPlanWebsiteCacheV1($websiteUid): \Hostinger\Model\CommonSuccessEmptyResource
```

Clear Agency Plan website cache

Clears cache for all domains associated with an Agency Plan website, including its preview domain.  This operation clears all cache types for the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingCacheApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->clearAgencyPlanWebsiteCacheV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingCacheApi->clearAgencyPlanWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
