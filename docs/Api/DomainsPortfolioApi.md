# Hostinger\DomainsPortfolioApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableDomainLockV1()**](DomainsPortfolioApi.md#disableDomainLockV1) | **DELETE** /api/domains/v1/portfolio/{domain}/domain-lock | Disable domain lock |
| [**disablePrivacyProtectionV1()**](DomainsPortfolioApi.md#disablePrivacyProtectionV1) | **DELETE** /api/domains/v1/portfolio/{domain}/privacy-protection | Disable privacy protection |
| [**enableDomainLockV1()**](DomainsPortfolioApi.md#enableDomainLockV1) | **PUT** /api/domains/v1/portfolio/{domain}/domain-lock | Enable domain lock |
| [**enablePrivacyProtectionV1()**](DomainsPortfolioApi.md#enablePrivacyProtectionV1) | **PUT** /api/domains/v1/portfolio/{domain}/privacy-protection | Enable privacy protection |
| [**getDomainListV1()**](DomainsPortfolioApi.md#getDomainListV1) | **GET** /api/domains/v1/portfolio | Get domain list |
| [**getDomainV1()**](DomainsPortfolioApi.md#getDomainV1) | **GET** /api/domains/v1/portfolio/{domain} | Get domain |
| [**purchaseNewDomainV1()**](DomainsPortfolioApi.md#purchaseNewDomainV1) | **POST** /api/domains/v1/portfolio | Purchase new domain |
| [**updateNameserversV1()**](DomainsPortfolioApi.md#updateNameserversV1) | **PUT** /api/domains/v1/portfolio/{domain}/nameservers | Update nameservers |


## `disableDomainLockV1()`

```php
disableDomainLockV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Disable domain lock

This endpoint disables domain lock for the domain. Domain lock needs to be disabled  before transferring the domain to another registrar.

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

This endpoint disables privacy protection for the domain. When privacy protection is disabled, the domain owner's personal information is visible in the public WHOIS database.

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

This endpoint enables domain lock for the domain. When domain lock is enabled,  the domain cannot be transferred to another registrar without first disabling the lock.

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

This endpoint enables privacy protection for the domain. When privacy protection is enabled, the domain owner's personal information is hidden from the public WHOIS database.

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

## `getDomainListV1()`

```php
getDomainListV1(): \Hostinger\Model\DomainsV1DomainDomainResource[]
```

Get domain list

This endpoint retrieves a list of all domains associated with your account.

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

## `getDomainV1()`

```php
getDomainV1($domain): \Hostinger\Model\DomainsV1DomainDomainExtendedResource
```

Get domain

This endpoint retrieves details for specified domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getDomainV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->getDomainV1: ', $e->getMessage(), PHP_EOL;
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

## `purchaseNewDomainV1()`

```php
purchaseNewDomainV1($domainsV1PortfolioPurchaseRequest): \Hostinger\Model\BillingV1OrderOrderResource
```

Purchase new domain

This endpoint purchases and registers new domain. If registration fails, login to hPanel and check the domain registration status.  If no payment method is provided, default will be used.  If no WHOIS information is provided, default for that TLD will be used.  Before making request make sure that WHOIS information for TLD exists.  Some TLDs require `additional_details` to be provided and will be validated before making purchase.

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

## `updateNameserversV1()`

```php
updateNameserversV1($domain, $domainsV1PortfolioUpdateNameserversRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update nameservers

This endpoint sets the nameservers for a specified domain.  Be aware, that improper nameserver configuration can lead to the domain being unresolvable or unavailable.

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
    $result = $apiInstance->updateNameserversV1($domain, $domainsV1PortfolioUpdateNameserversRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->updateNameserversV1: ', $e->getMessage(), PHP_EOL;
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
