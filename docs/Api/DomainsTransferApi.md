# Hostinger\DomainsTransferApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransferListV1()**](DomainsTransferApi.md#getTransferListV1) | **GET** /api/domains/v1/transfers | Get transfer list |
| [**getTransferV1()**](DomainsTransferApi.md#getTransferV1) | **GET** /api/domains/v1/transfers/{domain} | Get transfer |


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
