# Hostinger\HostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteV1()**](HostingWebsitesApi.md#createWebsiteV1) | **POST** /api/hosting/v1/websites | Create website |
| [**deleteWebsiteV1()**](HostingWebsitesApi.md#deleteWebsiteV1) | **DELETE** /api/hosting/v1/websites/{domain} | Delete website |
| [**listWebsitesV1()**](HostingWebsitesApi.md#listWebsitesV1) | **GET** /api/hosting/v1/websites | List websites |


## `createWebsiteV1()`

```php
createWebsiteV1($hostingV1WebsitesCreateWebsiteRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create website

Create a new website for the authenticated client.  Provide the domain name and associated order ID to create a new website. The datacenter_code parameter is required when creating the first website on a new hosting plan - this will set up and configure new hosting account in the selected datacenter.  Subsequent websites will be hosted on the same datacenter automatically.  Website creation takes up to a few minutes to complete. Check the websites list endpoint to see when your new website becomes available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$hostingV1WebsitesCreateWebsiteRequest = new \Hostinger\Model\HostingV1WebsitesCreateWebsiteRequest(); // \Hostinger\Model\HostingV1WebsitesCreateWebsiteRequest

try {
    $result = $apiInstance->createWebsiteV1($hostingV1WebsitesCreateWebsiteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->createWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostingV1WebsitesCreateWebsiteRequest** | [**\Hostinger\Model\HostingV1WebsitesCreateWebsiteRequest**](../Model/HostingV1WebsitesCreateWebsiteRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteV1()`

```php
deleteWebsiteV1($domain, $hostingV1WebsitesDeleteWebsiteRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website

Permanently deletes a website and all of its data. This action is destructive and cannot be undone. Always ask the user for explicit confirmation before calling this endpoint.  All website files, databases and related configuration will be removed. The hosting plan itself is kept, so a new website can be created on it afterwards.  The confirm field must be boolean true, otherwise the request is rejected.  Supported websites: main and addon domain websites on web hosting plans, and Website Builder websites. Parked domains and subdomains cannot be deleted with this endpoint. The domain must be the exact website domain, not a preview domain or an alias.  Returns 404 when the domain does not exist or does not belong to the authenticated client.  Website removal is processed asynchronously and can take a few minutes to complete. The response returns before the removal finishes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$hostingV1WebsitesDeleteWebsiteRequest = new \Hostinger\Model\HostingV1WebsitesDeleteWebsiteRequest(); // \Hostinger\Model\HostingV1WebsitesDeleteWebsiteRequest

try {
    $result = $apiInstance->deleteWebsiteV1($domain, $hostingV1WebsitesDeleteWebsiteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->deleteWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **hostingV1WebsitesDeleteWebsiteRequest** | [**\Hostinger\Model\HostingV1WebsitesDeleteWebsiteRequest**](../Model/HostingV1WebsitesDeleteWebsiteRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsitesV1()`

```php
listWebsitesV1($page, $perPage, $username, $orderId, $isEnabled, $domain): \Hostinger\Model\HostingListWebsitesV1200Response
```

List websites

Retrieve a paginated list of websites (main and addon types) accessible to the authenticated client.  This endpoint returns websites from your hosting accounts as well as websites from other client hosting accounts that have shared access with you.  Use the available query parameters to filter results by username, order ID, enabled status, or domain name for more targeted results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$username = cl_user123; // string | Filter by specific username
$orderId = 123; // int | Order ID
$isEnabled = true; // bool | Filter by enabled status
$domain = example.com; // string | Filter by domain name (exact match)

try {
    $result = $apiInstance->listWebsitesV1($page, $perPage, $username, $orderId, $isEnabled, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->listWebsitesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **username** | **string**| Filter by specific username | [optional] |
| **orderId** | **int**| Order ID | [optional] |
| **isEnabled** | **bool**| Filter by enabled status | [optional] |
| **domain** | **string**| Filter by domain name (exact match) | [optional] |

### Return type

[**\Hostinger\Model\HostingListWebsitesV1200Response**](../Model/HostingListWebsitesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
