# Hostinger\HostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteV1()**](HostingWebsitesApi.md#createWebsiteV1) | **POST** /api/hosting/v1/websites | Create website |
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
