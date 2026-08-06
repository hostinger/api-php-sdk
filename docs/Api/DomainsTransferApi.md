# Hostinger\DomainsTransferApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**claimFreeDomainTransferV1()**](DomainsTransferApi.md#claimFreeDomainTransferV1) | **POST** /api/domains/v1/transfers/claim | Claim free domain transfer |
| [**getTransferListV1()**](DomainsTransferApi.md#getTransferListV1) | **GET** /api/domains/v1/transfers | Get transfer list |
| [**getTransferV1()**](DomainsTransferApi.md#getTransferV1) | **GET** /api/domains/v1/transfers/{domain} | Get transfer |


## `claimFreeDomainTransferV1()`

```php
claimFreeDomainTransferV1($domainsV1TransferClaimRequest): \Hostinger\Model\DomainsV1TransferTransferResource
```

Claim free domain transfer

Claim a free domain transfer available on your account and start the transfer.  Unlike purchasing a transfer, this consumes a free domain transfer you already have, so no payment method is required.  Before making request, unlock the domain at the current registrar and get its authorization code. The transfer is validated first, so domains which cannot be transferred are rejected before the free domain transfer is consumed.  A successful response means the transfer has been started. Completion depends on the current registrar and can be followed with the [transfer list endpoint](#tag/domains-transfer).  If no WHOIS information is provided, default contact information for that TLD will be used. Before making request, ensure WHOIS information for desired TLD exists in your account.  Requests which cannot be fulfilled are rejected with an error code in the response body.  Use this endpoint to transfer a domain using a free domain transfer from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsTransferApi(config: $config);
$domainsV1TransferClaimRequest = new \Hostinger\Model\DomainsV1TransferClaimRequest(); // \Hostinger\Model\DomainsV1TransferClaimRequest

try {
    $result = $apiInstance->claimFreeDomainTransferV1($domainsV1TransferClaimRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsTransferApi->claimFreeDomainTransferV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1TransferClaimRequest** | [**\Hostinger\Model\DomainsV1TransferClaimRequest**](../Model/DomainsV1TransferClaimRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1TransferTransferResource**](../Model/DomainsV1TransferTransferResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransferListV1()`

```php
getTransferListV1(): \Hostinger\Model\DomainsV1TransferTransferResource[]
```

Get transfer list

Retrieve all domain transfers in your portfolio.  Use this endpoint to monitor incoming and outgoing registrar transfers across your domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsTransferApi(config: $config);

try {
    $result = $apiInstance->getTransferListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsTransferApi->getTransferListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\DomainsV1TransferTransferResource[]**](../Model/DomainsV1TransferTransferResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransferV1()`

```php
getTransferV1($domain): \Hostinger\Model\DomainsV1TransferTransferResource
```

Get transfer

Retrieve the transfer for a specified domain.  Use this endpoint to track an incoming or outgoing registrar transfer and its status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsTransferApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getTransferV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsTransferApi->getTransferV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DomainsV1TransferTransferResource**](../Model/DomainsV1TransferTransferResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
