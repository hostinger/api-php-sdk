# Hostinger\BillingCatalogApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCatalogItemListV1()**](BillingCatalogApi.md#getCatalogItemListV1) | **GET** /api/billing/v1/catalog | Get catalog item list |


## `getCatalogItemListV1()`

```php
getCatalogItemListV1($category, $name): \Hostinger\Model\BillingV1CatalogCatalogItemResource[]
```

Get catalog item list

Retrieve catalog items available for order.  Prices in catalog items is displayed as cents (without floating point), e.g: float `17.99` is displayed as integer `1799`.  Use this endpoint to view available services and pricing before placing orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingCatalogApi(config: $config);
$category = VPS; // string | Filter catalog items by category
$name = .COM*; // string | Filter catalog items by name. Use `*` for wildcard search, e.g. `.COM*` to find .com domain

try {
    $result = $apiInstance->getCatalogItemListV1($category, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCatalogApi->getCatalogItemListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category** | **string**| Filter catalog items by category | [optional] |
| **name** | **string**| Filter catalog items by name. Use &#x60;*&#x60; for wildcard search, e.g. &#x60;.COM*&#x60; to find .com domain | [optional] |

### Return type

[**\Hostinger\Model\BillingV1CatalogCatalogItemResource[]**](../Model/BillingV1CatalogCatalogItemResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
