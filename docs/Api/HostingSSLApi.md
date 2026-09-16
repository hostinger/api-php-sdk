# Hostinger\HostingSSLApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSSLStatusV1()**](HostingSSLApi.md#getSSLStatusV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/ssl/status | Get SSL status |
| [**installSSLV1()**](HostingSSLApi.md#installSSLV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/ssl/setup | Install SSL |
| [**toggleHTTPSRedirectV1()**](HostingSSLApi.md#toggleHTTPSRedirectV1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/ssl/https-redirect/toggle | Toggle HTTPS redirect |
| [**uninstallSSLV1()**](HostingSSLApi.md#uninstallSSLV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/ssl | Uninstall SSL |


## `getSSLStatusV1()`

```php
getSSLStatusV1($username, $domain): \Hostinger\Model\HostingV1SslSslStatusResource
```

Get SSL status

Returns the SSL state of the website: the certificate `status` and `provider`, whether the certificate is a lifetime one managed by the platform, whether HTTP requests are redirected to HTTPS, when the certificate stops being valid and the last installation error.  `installing` and `waiting_for_retry` mean an installation is in progress. `failed` means the last installation gave up, or the website was not updated for 60 minutes while `installing`; `last_error` holds the reason when it is a known message, otherwise it is null. `expired` means the assigned certificate's validity has ended. `not_installed` means no certificate is assigned. Free subdomains use a platform-managed certificate: with no installation recorded they report `active` with `provider` and `expires_at` null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingSSLApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getSSLStatusV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingSSLApi->getSSLStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1SslSslStatusResource**](../Model/HostingV1SslSslStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installSSLV1()`

```php
installSSLV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Install SSL

Requests a lifetime SSL certificate for the website. The installation runs in the background; `Get SSL status` reports `active` or `failed` when it ends. An `active` lifetime certificate does not block the request: a new installation is requested, which is how a certificate is reinstalled.  Returns 422 for free subdomains (their certificate is managed by the platform), while an installation is `installing` or `waiting_for_retry`, when the website's certificate was revoked (it cannot be reissued), and when an uploaded custom certificate is installed; that one has to be uninstalled first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingSSLApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->installSSLV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingSSLApi->installSSLV1: ', $e->getMessage(), PHP_EOL;
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

## `toggleHTTPSRedirectV1()`

```php
toggleHTTPSRedirectV1($username, $domain, $hostingV1SslToggleHttpsRedirectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Toggle HTTPS redirect

Turns the HTTP to HTTPS redirect of the website on or off, based on `is_enabled`. Does nothing when the redirect is already in the requested state. Turning it on requires an installed certificate (`status` `active` or `expired` on `Get SSL status`) and returns 422 when there is none; turning it off is always accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingSSLApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1SslToggleHttpsRedirectRequest = new \Hostinger\Model\HostingV1SslToggleHttpsRedirectRequest(); // \Hostinger\Model\HostingV1SslToggleHttpsRedirectRequest

try {
    $result = $apiInstance->toggleHTTPSRedirectV1($username, $domain, $hostingV1SslToggleHttpsRedirectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingSSLApi->toggleHTTPSRedirectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1SslToggleHttpsRedirectRequest** | [**\Hostinger\Model\HostingV1SslToggleHttpsRedirectRequest**](../Model/HostingV1SslToggleHttpsRedirectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallSSLV1()`

```php
uninstallSSLV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Uninstall SSL

Removes the SSL certificate assigned to the website, turns the HTTPS redirect off and cancels a pending installation retry. The website serves plain HTTP until a new installation completes. `Get SSL status` reports `not_installed` as soon as the call returns; the call also succeeds when no certificate is assigned, so repeating it is safe.  Returns 422 for free subdomains (their certificate is managed by the platform) and while an installation is `installing`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingSSLApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->uninstallSSLV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingSSLApi->uninstallSSLV1: ', $e->getMessage(), PHP_EOL;
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
