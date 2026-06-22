# Hostinger\EcommerceProductsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDigitalProductV1()**](EcommerceProductsApi.md#createDigitalProductV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/digital | Create digital product |
| [**createPhysicalProductV1()**](EcommerceProductsApi.md#createPhysicalProductV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/physical | Create physical product |


## `createDigitalProductV1()`

```php
createDigitalProductV1($storeId, $ecommerceV1ProductCreateDigitalProductRequest): \Hostinger\Model\EcommerceV1ProductProductCreationResource
```

Create digital product

Create a published digital product with a single variant and an optional external download link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to create the product in.
$ecommerceV1ProductCreateDigitalProductRequest = new \Hostinger\Model\EcommerceV1ProductCreateDigitalProductRequest(); // \Hostinger\Model\EcommerceV1ProductCreateDigitalProductRequest

try {
    $result = $apiInstance->createDigitalProductV1($storeId, $ecommerceV1ProductCreateDigitalProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->createDigitalProductV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to create the product in. | |
| **ecommerceV1ProductCreateDigitalProductRequest** | [**\Hostinger\Model\EcommerceV1ProductCreateDigitalProductRequest**](../Model/EcommerceV1ProductCreateDigitalProductRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductCreationResource**](../Model/EcommerceV1ProductProductCreationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPhysicalProductV1()`

```php
createPhysicalProductV1($storeId, $ecommerceV1ProductCreatePhysicalProductRequest): \Hostinger\Model\EcommerceV1ProductProductCreationResource
```

Create physical product

Create a published physical product with a single variant priced in the store currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to create the product in.
$ecommerceV1ProductCreatePhysicalProductRequest = new \Hostinger\Model\EcommerceV1ProductCreatePhysicalProductRequest(); // \Hostinger\Model\EcommerceV1ProductCreatePhysicalProductRequest

try {
    $result = $apiInstance->createPhysicalProductV1($storeId, $ecommerceV1ProductCreatePhysicalProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->createPhysicalProductV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to create the product in. | |
| **ecommerceV1ProductCreatePhysicalProductRequest** | [**\Hostinger\Model\EcommerceV1ProductCreatePhysicalProductRequest**](../Model/EcommerceV1ProductCreatePhysicalProductRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductCreationResource**](../Model/EcommerceV1ProductProductCreationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
