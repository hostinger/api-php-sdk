# Hostinger\HostingCDNApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableCDNV1()**](HostingCDNApi.md#disableCDNV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/cdn/disable | Disable CDN |
| [**enableCDNV1()**](HostingCDNApi.md#enableCDNV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/cdn/enable | Enable CDN |
| [**getCDNStatusV1()**](HostingCDNApi.md#getCDNStatusV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/cdn/status | Get CDN status |
| [**purgeCDNCacheV1()**](HostingCDNApi.md#purgeCDNCacheV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/cdn/purge | Purge CDN cache |


## `disableCDNV1()`

```php
disableCDNV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable CDN

Turns off the Hostinger CDN for the website domain. Once DNS propagation completes, the website content is served directly from the origin server. Repeating the call is safe; when CDN is already disabled, it applies the DNS change again.  Returns 422 for platform-managed domains (for example `*.hostingersite.com` and `*.app-preview.com`), where CDN cannot be disabled, even when CDN is already off. Also returns 422 while the account is being moved to another server (retry after the move finishes), or when the CDN provider rejects the change. Returns 404 when the domain is not a website on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCDNApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->disableCDNV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCDNApi->disableCDNV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableCDNV1()`

```php
enableCDNV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Enable CDN

Turns on the Hostinger CDN for the website domain, which speeds up page loads and reduces the load on the server. Works for the main domain, parked domains and subdomains of the account.  Enabling changes the domain's DNS records and usually takes a few seconds. After that, DNS propagation can take a few more minutes before visitors are served through the CDN.  Repeating the call is safe, for example after a timeout. When CDN is already enabled, it applies the DNS change again and refreshes the CDN SSL certificate.  Returns 422 when the account is disabled, while the account is being moved to another server (retry after the move finishes), or when the CDN provider rejects the change. Returns 404 when the domain is not a website on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCDNApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->enableCDNV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCDNApi->enableCDNV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCDNStatusV1()`

```php
getCDNStatusV1($username, $domain): \Hostinger\Model\HostingV1CdnCdnStatusResource
```

Get CDN status

Returns whether the Hostinger CDN is enabled for the website domain. Works for the main domain, parked domains and subdomains of the account.  The domain must be the exact website name as listed on the account, without a `www.` prefix. Returns 404 when the domain is not a website on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCDNApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getCDNStatusV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCDNApi->getCDNStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1CdnCdnStatusResource**](../Model/HostingV1CdnCdnStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purgeCDNCacheV1()`

```php
purgeCDNCacheV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Purge CDN cache

Purges the website's content from the Hostinger CDN edge cache only. The origin server cache is not touched; to clear both, use `Clear website cache`.  Returns 422 when CDN is not enabled on the website. Returns 404 when the domain is not a website on the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCDNApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->purgeCDNCacheV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCDNApi->purgeCDNCacheV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
