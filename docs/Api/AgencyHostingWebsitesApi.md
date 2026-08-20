# Hostinger\AgencyHostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**buildWebsiteNodeJSAssetsV1()**](AgencyHostingWebsitesApi.md#buildWebsiteNodeJSAssetsV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/build-assets | Build website NodeJS assets |
| [**deleteWebsiteV1()**](AgencyHostingWebsitesApi.md#deleteWebsiteV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid} | Delete website |
| [**getWebsiteDetailsV1()**](AgencyHostingWebsitesApi.md#getWebsiteDetailsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid} | Get website details |
| [**listAgencyPlanWebsitesV1()**](AgencyHostingWebsitesApi.md#listAgencyPlanWebsitesV1) | **GET** /api/agency-hosting/v1/websites | List Agency Plan websites |
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

## `listAgencyPlanWebsitesV1()`

```php
listAgencyPlanWebsitesV1($page, $perPage, $orderIds, $states, $websiteTypes, $domain): \Hostinger\Model\AgencyHostingListAgencyPlanWebsitesV1200Response
```

List Agency Plan websites

Retrieve a paginated list of Agency Plan websites (H5G, Builder, and Horizons) accessible to the authenticated client.  This endpoint returns websites from your hosting accounts as well as websites from other client hosting accounts that have shared access with you.  The response shape differs per platform — see the `platform` field on each item.  Use `website_types` to list only websites of a given detected type, e.g. only WordPress websites (`website_types=wordpress`) or only Node.js websites (`website_types=nodejs`). Combine with `order_ids`, `states`, or `domain` for more targeted results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsitesApi(config: $config);
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$orderIds = [12345,67890]; // int[] | Filter by order IDs. Accepts a comma-separated list.
$states = ["active"]; // string[] | Filter by website state. Accepts a comma-separated list.
$websiteTypes = ["wordpress","nodejs"]; // string[] | Filter by detected website type, e.g. wordpress,nodejs. Accepts a comma-separated list.
$domain = example.com; // string | Filter by domain name (case-insensitive substring match)

try {
    $result = $apiInstance->listAgencyPlanWebsitesV1($page, $perPage, $orderIds, $states, $websiteTypes, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsitesApi->listAgencyPlanWebsitesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **orderIds** | [**int[]**](../Model/int.md)| Filter by order IDs. Accepts a comma-separated list. | [optional] |
| **states** | [**string[]**](../Model/string.md)| Filter by website state. Accepts a comma-separated list. | [optional] |
| **websiteTypes** | [**string[]**](../Model/string.md)| Filter by detected website type, e.g. wordpress,nodejs. Accepts a comma-separated list. | [optional] |
| **domain** | **string**| Filter by domain name (case-insensitive substring match) | [optional] |

### Return type

[**\Hostinger\Model\AgencyHostingListAgencyPlanWebsitesV1200Response**](../Model/AgencyHostingListAgencyPlanWebsitesV1200Response.md)

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
