# Hostinger\AgencyHostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buildWebsiteNodeJSAssetsV1()**](AgencyHostingWebsitesApi.md#buildWebsiteNodeJSAssetsV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/build-assets | Build website NodeJS assets |
| [**deleteWebsiteV1()**](AgencyHostingWebsitesApi.md#deleteWebsiteV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid} | Delete website |
| [**getWebsiteDetailsV1()**](AgencyHostingWebsitesApi.md#getWebsiteDetailsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid} | Get website details |
| [**listWebsiteProcessesV1()**](AgencyHostingWebsitesApi.md#listWebsiteProcessesV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/processes | List website processes |


## `buildWebsiteNodeJSAssetsV1()`

```php
buildWebsiteNodeJSAssetsV1($websiteUid, $agencyHostingV1WebsitesBuildAssetsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Build website NodeJS assets

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
    $result = $apiInstance->buildWebsiteNodeJSAssetsV1($websiteUid, $agencyHostingV1WebsitesBuildAssetsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->buildWebsiteNodeJSAssetsV1: ', $e->getMessage(), PHP_EOL;
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

## `deleteWebsiteV1()`

```php
deleteWebsiteV1($websiteUid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website

Permanently deletes an Agency Plan website. Deletion is processed asynchronously: the website is immediately transitioned to a deleting state and the underlying server resources are removed in the background.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->deleteWebsiteV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->deleteWebsiteV1: ', $e->getMessage(), PHP_EOL;
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

## `getWebsiteDetailsV1()`

```php
getWebsiteDetailsV1($websiteUid): \Hostinger\Model\AgencyHostingV1WebsitesWebsiteResource
```

Get website details

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
    $result = $apiInstance->getWebsiteDetailsV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->getWebsiteDetailsV1: ', $e->getMessage(), PHP_EOL;
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

## `listWebsiteProcessesV1()`

```php
listWebsiteProcessesV1($websiteUid): \Hostinger\Model\AgencyHostingV1WebsitesWebsiteProcessResource[]
```

List website processes

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
    $result = $apiInstance->listWebsiteProcessesV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->listWebsiteProcessesV1: ', $e->getMessage(), PHP_EOL;
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
