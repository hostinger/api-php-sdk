# Hostinger\HostingWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteV1()**](HostingWebsitesApi.md#createWebsiteV1) | **POST** /api/hosting/v1/websites | Create website |
| [**deleteWebsiteV1()**](HostingWebsitesApi.md#deleteWebsiteV1) | **DELETE** /api/hosting/v1/websites/{domain} | Delete website |
| [**deployStaticSiteArchiveV1()**](HostingWebsitesApi.md#deployStaticSiteArchiveV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/deploy | Deploy static site archive |
| [**listWebsiteSetupsV1()**](HostingWebsitesApi.md#listWebsiteSetupsV1) | **GET** /api/hosting/v1/onboardings | List website setups |
| [**listWebsitesV1()**](HostingWebsitesApi.md#listWebsitesV1) | **GET** /api/hosting/v1/websites | List websites |


## `createWebsiteV1()`

```php
createWebsiteV1($hostingV1WebsitesCreateWebsiteRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create website

Create a new website for the authenticated client.  You must choose which hosting order to create this website on. Pass that order as `order_id` together with the domain name. List orders to see available IDs; the website is provisioned on that order's hosting plan.  Only Web and Cloud hosting orders are accepted. To create a website on an Agency Plan order, use `POST /api/agency-hosting/v1/orders/{order_id}/websites/setups`.  The datacenter_code parameter is required when creating the first website on a new hosting plan - this will set up and configure new hosting account in the selected datacenter.  Subsequent websites will be hosted on the same datacenter automatically.  Website creation is asynchronous and takes up to a few minutes. Poll the list website setups endpoint with the `domain` filter every 10 to 15 seconds and wait for `status: completed` before uploading files, deploying or creating databases. While the setup is `running`, endpoints that operate on the website may respond with `404` or `409`. `is_enabled` on the websites list reflects suspension, not readiness.

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
deleteWebsiteV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website

This endpoint permanently removes a website and all of its data. This action cannot be undone. Before calling it, make sure the user understands the consequences and explicitly confirms that they want to proceed.  All website files, databases and related configuration will be removed. The hosting plan itself is kept, so a new website can be created on it afterwards.  Supported websites: main and addon domain websites on web hosting plans, and Website Builder websites. Parked domains and subdomains cannot be deleted with this endpoint. The domain must be the exact website domain, not a preview domain or an alias.  Returns 404 when the domain does not exist or does not belong to the authenticated client.  Website removal is processed asynchronously and can take a few minutes to complete. The response returns before the removal finishes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->deleteWebsiteV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->deleteWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deployStaticSiteArchiveV1()`

```php
deployStaticSiteArchiveV1($username, $domain, $hostingV1WebsitesDeployArchiveRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Deploy static site archive

Deploy a static application from an archive file.  WARNING: this overwrites the website's existing contents and cannot be undone — verify this is intended before calling this endpoint.  This endpoint allows you to deploy a static application from an archive file that has been uploaded to the website's directory.  This only works for static sites (pre-built HTML/CSS/JS with no build step). For Node.js applications, use `Create NodeJS build from archive` instead, or `Start Node.js build` if the archive is already uploaded. For WordPress sites, use `Import WordPress website`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1WebsitesDeployArchiveRequest = new \Hostinger\Model\HostingV1WebsitesDeployArchiveRequest(); // \Hostinger\Model\HostingV1WebsitesDeployArchiveRequest

try {
    $result = $apiInstance->deployStaticSiteArchiveV1($username, $domain, $hostingV1WebsitesDeployArchiveRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->deployStaticSiteArchiveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1WebsitesDeployArchiveRequest** | [**\Hostinger\Model\HostingV1WebsitesDeployArchiveRequest**](../Model/HostingV1WebsitesDeployArchiveRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteSetupsV1()`

```php
listWebsiteSetupsV1($domain): \Hostinger\Model\HostingV1OnboardingsOnboardingResource[]
```

List website setups

Returns the website setups started in the last 24 hours for the hosting accounts accessible to the authenticated client, newest first.  Meant for polling right after creating a website: the website shows up in the websites list before its server-side setup has finished, and while the setup is `running` endpoints that operate on that website may respond with `404` or `409`. Poll this endpoint with the `domain` filter every 10 to 15 seconds and wait for `status: completed` before uploading files, deploying or creating databases. `failed` means the setup stopped before finishing or has not reported progress for over an hour. Setups older than 24 hours are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingWebsitesApi(config: $config);
$domain = example.com; // string | Filter by domain name (exact match)

try {
    $result = $apiInstance->listWebsiteSetupsV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingWebsitesApi->listWebsiteSetupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Filter by domain name (exact match) | [optional] |

### Return type

[**\Hostinger\Model\HostingV1OnboardingsOnboardingResource[]**](../Model/HostingV1OnboardingsOnboardingResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsitesV1()`

```php
listWebsitesV1($page, $perPage, $username, $orderId, $isEnabled, $domain, $websiteTypes): \Hostinger\Model\HostingListWebsitesV1200Response
```

List websites

Retrieve a paginated list of websites (CloudLinux, Builder, and Horizons) accessible to the authenticated client.  This endpoint returns websites from your hosting accounts as well as websites from other client hosting accounts that have shared access with you.  Each website includes a `website_type` field describing the type of website detected on the underlying platform (`wordpress`, `builder`, `horizons`, `nodejs`, or `other`). Some fields, such as `vhost_type`, `username`, and `root_directory`, only apply to CloudLinux websites and are null for other platforms.  Use `website_types` to list only websites of a given detected type, e.g. only WordPress websites (`website_types=wordpress`) or only Node.js websites (`website_types=nodejs`). Combine with the other available query parameters to filter by username, order ID, enabled status, or domain name for more targeted results.  A website appears in this list before its server-side setup has finished, and `is_enabled` reflects suspension, not readiness. To know when a newly created website is ready for file, deploy or database operations, poll the list website setups endpoint instead.

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
$domain = example.com; // string | Filter by domain name (case-insensitive substring match)
$websiteTypes = ["wordpress","nodejs"]; // string[] | Filter by detected website type, e.g. wordpress,nodejs. Accepts a comma-separated list.

try {
    $result = $apiInstance->listWebsitesV1($page, $perPage, $username, $orderId, $isEnabled, $domain, $websiteTypes);
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
| **domain** | **string**| Filter by domain name (case-insensitive substring match) | [optional] |
| **websiteTypes** | [**string[]**](../Model/string.md)| Filter by detected website type, e.g. wordpress,nodejs. Accepts a comma-separated list. | [optional] |

### Return type

[**\Hostinger\Model\HostingListWebsitesV1200Response**](../Model/HostingListWebsitesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
