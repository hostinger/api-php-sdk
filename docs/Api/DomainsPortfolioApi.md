# Hostinger\DomainsPortfolioApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableDomainLockV1()**](DomainsPortfolioApi.md#disableDomainLockV1) | **DELETE** /api/domains/v1/portfolio/{domain}/domain-lock | Disable domain lock |
| [**disablePrivacyProtectionV1()**](DomainsPortfolioApi.md#disablePrivacyProtectionV1) | **DELETE** /api/domains/v1/portfolio/{domain}/privacy-protection | Disable privacy protection |
| [**enableDomainLockV1()**](DomainsPortfolioApi.md#enableDomainLockV1) | **PUT** /api/domains/v1/portfolio/{domain}/domain-lock | Enable domain lock |
| [**enablePrivacyProtectionV1()**](DomainsPortfolioApi.md#enablePrivacyProtectionV1) | **PUT** /api/domains/v1/portfolio/{domain}/privacy-protection | Enable privacy protection |
| [**getDomainDetailsV1()**](DomainsPortfolioApi.md#getDomainDetailsV1) | **GET** /api/domains/v1/portfolio/{domain} | Get domain details |
| [**getDomainListV1()**](DomainsPortfolioApi.md#getDomainListV1) | **GET** /api/domains/v1/portfolio | Get domain list |
| [**purchaseNewDomainV1()**](DomainsPortfolioApi.md#purchaseNewDomainV1) | **POST** /api/domains/v1/portfolio | Purchase new domain |
| [**updateDomainNameserversV1()**](DomainsPortfolioApi.md#updateDomainNameserversV1) | **PUT** /api/domains/v1/portfolio/{domain}/nameservers | Update domain nameservers |


## `disableDomainLockV1()`

```php
disableDomainLockV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable domain lock

Disable domain lock for the domain.  Domain lock needs to be disabled before transferring the domain to another registrar.  Use this endpoint to prepare domains for transfer to other registrars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->disableDomainLockV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->disableDomainLockV1: ', $e->getMessage(), PHP_EOL;
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

## `disablePrivacyProtectionV1()`

```php
disablePrivacyProtectionV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable privacy protection

Disable privacy protection for the domain.  When privacy protection is disabled, domain owner's personal information is visible in public WHOIS database.  Use this endpoint to make domain owner's information publicly visible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->disablePrivacyProtectionV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->disablePrivacyProtectionV1: ', $e->getMessage(), PHP_EOL;
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

## `enableDomainLockV1()`

```php
enableDomainLockV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Enable domain lock

Enable domain lock for the domain.  When domain lock is enabled, the domain cannot be transferred to another registrar without first disabling the lock.  Use this endpoint to secure domains against unauthorized transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->enableDomainLockV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->enableDomainLockV1: ', $e->getMessage(), PHP_EOL;
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

## `enablePrivacyProtectionV1()`

```php
enablePrivacyProtectionV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Enable privacy protection

Enable privacy protection for the domain.  When privacy protection is enabled, domain owner's personal information is hidden from public WHOIS database.  Use this endpoint to protect domain owner's personal information from public view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->enablePrivacyProtectionV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->enablePrivacyProtectionV1: ', $e->getMessage(), PHP_EOL;
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

## `getDomainDetailsV1()`

```php
getDomainDetailsV1($domain): \Hostinger\Model\DomainsV1DomainDomainExtendedResource
```

Get domain details

Retrieve detailed information for specified domain.  Use this endpoint to view comprehensive domain configuration and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getDomainDetailsV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->getDomainDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DomainsV1DomainDomainExtendedResource**](../Model/DomainsV1DomainDomainExtendedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainListV1()`

```php
getDomainListV1(): \Hostinger\Model\DomainsV1DomainDomainResource[]
```

Get domain list

Retrieve all domains associated with your account.  Use this endpoint to view user's domain portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);

try {
    $result = $apiInstance->getDomainListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->getDomainListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\DomainsV1DomainDomainResource[]**](../Model/DomainsV1DomainDomainResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseNewDomainV1()`

```php
purchaseNewDomainV1($domainsV1PortfolioPurchaseRequest): \Hostinger\Model\BillingV1OrderOrderResource
```

Purchase new domain

Purchase and register a new domain name.  If registration fails, login to [hPanel](https://hpanel.hostinger.com/) and check domain registration status.  If no payment method is provided, your default payment method will be used automatically.  If no WHOIS information is provided, default contact information for that TLD will be used.  Before making request, ensure WHOIS information for desired TLD exists in your account.  Some TLDs require `additional_details` to be provided and these will be validated before completing purchase.  Use this endpoint to register new domains for users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domainsV1PortfolioPurchaseRequest = new \Hostinger\Model\DomainsV1PortfolioPurchaseRequest(); // \Hostinger\Model\DomainsV1PortfolioPurchaseRequest

try {
    $result = $apiInstance->purchaseNewDomainV1($domainsV1PortfolioPurchaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->purchaseNewDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1PortfolioPurchaseRequest** | [**\Hostinger\Model\DomainsV1PortfolioPurchaseRequest**](../Model/DomainsV1PortfolioPurchaseRequest.md)|  | |

### Return type

[**\Hostinger\Model\BillingV1OrderOrderResource**](../Model/BillingV1OrderOrderResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainNameserversV1()`

```php
updateDomainNameserversV1($domain, $domainsV1PortfolioUpdateNameserversRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update domain nameservers

Set nameservers for a specified domain.  Be aware, that improper nameserver configuration can lead to the domain being unresolvable or unavailable.  Use this endpoint to configure custom DNS hosting for domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$domainsV1PortfolioUpdateNameserversRequest = new \Hostinger\Model\DomainsV1PortfolioUpdateNameserversRequest(); // \Hostinger\Model\DomainsV1PortfolioUpdateNameserversRequest

try {
    $result = $apiInstance->updateDomainNameserversV1($domain, $domainsV1PortfolioUpdateNameserversRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->updateDomainNameserversV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **domainsV1PortfolioUpdateNameserversRequest** | [**\Hostinger\Model\DomainsV1PortfolioUpdateNameserversRequest**](../Model/DomainsV1PortfolioUpdateNameserversRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
