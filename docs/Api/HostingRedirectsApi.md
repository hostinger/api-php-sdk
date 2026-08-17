# Hostinger\HostingRedirectsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteRedirectV1()**](HostingRedirectsApi.md#createWebsiteRedirectV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/redirects | Create website redirect |
| [**deleteWebsiteRedirectV1()**](HostingRedirectsApi.md#deleteWebsiteRedirectV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/redirects | Delete website redirect |
| [**listWebsiteRedirectsV1()**](HostingRedirectsApi.md#listWebsiteRedirectsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/redirects | List website redirects |


## `createWebsiteRedirectV1()`

```php
createWebsiteRedirectV1($username, $domain, $hostingV1RedirectsCreateRedirectRequest): \Hostinger\Model\HostingV1RedirectsRedirectResource
```

Create website redirect

Creates a redirect from a URL on the selected website to another URL or IP address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingRedirectsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1RedirectsCreateRedirectRequest = new \Hostinger\Model\HostingV1RedirectsCreateRedirectRequest(); // \Hostinger\Model\HostingV1RedirectsCreateRedirectRequest

try {
    $result = $apiInstance->createWebsiteRedirectV1($username, $domain, $hostingV1RedirectsCreateRedirectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingRedirectsApi->createWebsiteRedirectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1RedirectsCreateRedirectRequest** | [**\Hostinger\Model\HostingV1RedirectsCreateRedirectRequest**](../Model/HostingV1RedirectsCreateRedirectRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1RedirectsRedirectResource**](../Model/HostingV1RedirectsRedirectResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteRedirectV1()`

```php
deleteWebsiteRedirectV1($username, $domain, $from): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website redirect

Permanently deletes the redirect identified by its source URL.  Pass the `from` value exactly as returned by the list redirects endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingRedirectsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$from = https://example.com/old-page; // string | Source URL returned by the list redirects endpoint.

try {
    $result = $apiInstance->deleteWebsiteRedirectV1($username, $domain, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingRedirectsApi->deleteWebsiteRedirectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **from** | **string**| Source URL returned by the list redirects endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteRedirectsV1()`

```php
listWebsiteRedirectsV1($username, $domain, $page, $perPage): \Hostinger\Model\HostingListWebsiteRedirectsV1200Response
```

List website redirects

Returns a paginated list of redirects configured for the selected website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingRedirectsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listWebsiteRedirectsV1($username, $domain, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingRedirectsApi->listWebsiteRedirectsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\HostingListWebsiteRedirectsV1200Response**](../Model/HostingListWebsiteRedirectsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
