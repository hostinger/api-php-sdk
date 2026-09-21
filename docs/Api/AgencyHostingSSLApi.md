# Hostinger\AgencyHostingSSLApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebsiteSSLStatusV1()**](AgencyHostingSSLApi.md#getWebsiteSSLStatusV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain}/ssl/status | Get website SSL status |
| [**installWebsiteSSLV1()**](AgencyHostingSSLApi.md#installWebsiteSSLV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain}/ssl/setup | Install website SSL |
| [**reinstallWebsiteSSLV1()**](AgencyHostingSSLApi.md#reinstallWebsiteSSLV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain}/ssl/reinstall | Reinstall website SSL |
| [**uninstallWebsiteSSLV1()**](AgencyHostingSSLApi.md#uninstallWebsiteSSLV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain}/ssl | Uninstall website SSL |


## `getWebsiteSSLStatusV1()`

```php
getWebsiteSSLStatusV1($websiteUid, $domain): \Hostinger\Model\AgencyHostingV1SslSslStatusResource
```

Get website SSL status

Returns the SSL state of one domain of an Agency Plan website: the certificate `status`, whether the certificate was uploaded by the customer, and when it stops being valid.  `installing` means a certificate setup is running or retrying; the `ssl_setup` entry of `List website processes` shows the same progress. `active` means a valid certificate is in place: uploaded by the customer, issued by the platform, or a lifetime certificate bought for the domain. `failed` means the last setup gave up and no valid certificate is in place. `expired` means the certificate has run out. `not_installed` means the domain has no certificate and no setup process. Returns 404 when the website or the domain does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingSSLApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getWebsiteSSLStatusV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingSSLApi->getWebsiteSSLStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\AgencyHostingV1SslSslStatusResource**](../Model/AgencyHostingV1SslSslStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installWebsiteSSLV1()`

```php
installWebsiteSSLV1($websiteUid, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Install website SSL

Starts a Let's Encrypt certificate setup for the domain and returns at once; the setup runs in the background. `Get website SSL status` reports `installing` while it runs, then `active` or `failed`; the `ssl_setup` entry of `List website processes` shows the same progress.  Returns 422 when the domain already has a platform certificate that is not expired, when a certificate process is recorded for the domain (a failed setup counts until it is cleaned up), or when the domain hit its limit of three setups per seven days. Returns 429 when the same domain was requested less than a minute ago, 403 when the website is suspended or locked, and 404 when the website or the domain does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingSSLApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->installWebsiteSSLV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingSSLApi->installWebsiteSSLV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reinstallWebsiteSSLV1()`

```php
reinstallWebsiteSSLV1($websiteUid, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Reinstall website SSL

Replaces the Let's Encrypt certificate of the domain: the current platform certificate, when one is recorded, is revoked and removed, then a new setup starts in the background. Returns at once; `Get website SSL status` reports `installing` while it runs, then `active` or `failed`.  Returns 422 for free subdomains, when a certificate process is recorded for the domain (a failed setup counts until it is cleaned up), or when the domain hit its limit of three setups per seven days. Returns 429 when the same domain was requested less than a minute ago, and 403 when the website is suspended or locked, and 404 when the website or the domain does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingSSLApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->reinstallWebsiteSSLV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingSSLApi->reinstallWebsiteSSLV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallWebsiteSSLV1()`

```php
uninstallWebsiteSSLV1($websiteUid, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Uninstall website SSL

Removes the platform-issued Let's Encrypt certificate of the domain: the certificate is revoked and deleted before the response, so the domain is no longer served with a platform certificate until a new setup completes. Also succeeds when the domain has no platform certificate to remove. Uploaded (custom) certificates are not affected.  Returns 422 when a certificate process is recorded for the domain (a failed setup counts until it is cleaned up), 429 when the same domain was requested less than a minute ago, and 403 when the website is suspended or locked, and 404 when the website or the domain does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingSSLApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->uninstallWebsiteSSLV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingSSLApi->uninstallWebsiteSSLV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
