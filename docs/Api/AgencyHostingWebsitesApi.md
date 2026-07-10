# Hostinger\AgencyHostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buildAgencyPlanWebsiteNodeJSAssetsV1()**](AgencyHostingWebsitesApi.md#buildAgencyPlanWebsiteNodeJSAssetsV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/build-assets | Build Agency Plan website NodeJS assets |
| [**deleteAgencyPlanWebsiteV1()**](AgencyHostingWebsitesApi.md#deleteAgencyPlanWebsiteV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid} | Delete Agency Plan website |
| [**getAgencyPlanWebsiteDetailsV1()**](AgencyHostingWebsitesApi.md#getAgencyPlanWebsiteDetailsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid} | Get Agency Plan website details |
| [**listRunningAgencyPlanWebsiteProcessesV1()**](AgencyHostingWebsitesApi.md#listRunningAgencyPlanWebsiteProcessesV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/processes | List running Agency Plan website processes |


## `buildAgencyPlanWebsiteNodeJSAssetsV1()`

```php
buildAgencyPlanWebsiteNodeJSAssetsV1($websiteUid, $agencyHostingV1WebsitesBuildAssetsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Build Agency Plan website NodeJS assets

Builds and deploys a Node.js application for an Agency Plan website from an already-uploaded archive.  Upload the archive to file browser first, then provide its relative path from document root in this request. Website contents are overwritten by the build result, which is deployed to public_html.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1WebsitesBuildAssetsRequest = new \Hostinger\Model\AgencyHostingV1WebsitesBuildAssetsRequest(); // \Hostinger\Model\AgencyHostingV1WebsitesBuildAssetsRequest

try {
    $result = $apiInstance->buildAgencyPlanWebsiteNodeJSAssetsV1($websiteUid, $agencyHostingV1WebsitesBuildAssetsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->buildAgencyPlanWebsiteNodeJSAssetsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1WebsitesBuildAssetsRequest** | [**\Hostinger\Model\AgencyHostingV1WebsitesBuildAssetsRequest**](../Model/AgencyHostingV1WebsitesBuildAssetsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgencyPlanWebsiteV1()`

```php
deleteAgencyPlanWebsiteV1($websiteUid): \Hostinger\Model\AgencyHostingV1WebsitesWebsiteDeletionResource
```

Delete Agency Plan website

Deletes an Agency Plan website and schedules cleanup of its resources.  This action is irreversible. Website files, databases, and linked domains are removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->deleteAgencyPlanWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->deleteAgencyPlanWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesWebsiteDeletionResource**](../Model/AgencyHostingV1WebsitesWebsiteDeletionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgencyPlanWebsiteDetailsV1()`

```php
getAgencyPlanWebsiteDetailsV1($websiteUid): \Hostinger\Model\AgencyHostingV1WebsitesWebsiteResource
```

Get Agency Plan website details

Retrieves detailed information about a specific Agency Plan website, including configuration, status, metadata, hosting plan details, and resource quotas.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->getAgencyPlanWebsiteDetailsV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->getAgencyPlanWebsiteDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesWebsiteResource**](../Model/AgencyHostingV1WebsitesWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRunningAgencyPlanWebsiteProcessesV1()`

```php
listRunningAgencyPlanWebsiteProcessesV1($websiteUid): \Hostinger\Model\AgencyHostingV1WebsitesWebsiteProcessResource[]
```

List running Agency Plan website processes

Lists active and recently completed asynchronous processes for an Agency Plan website.  Each process has a unique ID (for tracking), a type, and a status (running, completed, failed). Poll this endpoint after initiating async operations (SSL setup, backups, cloning) to track progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->listRunningAgencyPlanWebsiteProcessesV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->listRunningAgencyPlanWebsiteProcessesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesWebsiteProcessResource[]**](../Model/AgencyHostingV1WebsitesWebsiteProcessResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
