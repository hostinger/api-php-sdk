# Hostinger\BillingCatalogApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCatalogItemListV1()**](BillingCatalogApi.md#getCatalogItemListV1) | **GET** /api/billing/v1/catalog | Get catalog item list |


## `getCatalogItemListV1()`

```php
getCatalogItemListV1(): \Hostinger\Model\BillingV1CatalogCatalogItemCollection
```

Get catalog item list

This endpoint retrieves a list of catalog items available for order.   Prices in catalog items is displayed as cents (without floating point), e.g: float `17.99` is displayed as integer `1799`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingCatalogApi(config: $config);

try {
    $result = $apiInstance->getCatalogItemListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCatalogApi->getCatalogItemListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\BillingV1CatalogCatalogItemCollection**](../Model/BillingV1CatalogCatalogItemCollection.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
