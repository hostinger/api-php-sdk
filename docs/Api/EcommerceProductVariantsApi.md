# Hostinger\EcommerceProductVariantsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAProductVariantV1()**](EcommerceProductVariantsApi.md#createAProductVariantV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/variants | Create a product variant |
| [**deleteAProductVariantV1()**](EcommerceProductVariantsApi.md#deleteAProductVariantV1) | **DELETE** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/variants/{variant_id} | Delete a product variant |
| [**listProductVariantsV1()**](EcommerceProductVariantsApi.md#listProductVariantsV1) | **GET** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/variants | List product variants |
| [**updateProductVariantsInBatchV1()**](EcommerceProductVariantsApi.md#updateProductVariantsInBatchV1) | **PATCH** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/variants/batch | Update product variants in batch |


## `createAProductVariantV1()`

```php
createAProductVariantV1($storeId, $productId, $ecommerceV1VariantCreateVariantRequest): \Hostinger\Model\EcommerceV1VariantVariantResponseResource
```

Create a product variant

Add a variant to a product along one or more option dimensions (e.g. Size, Color). Options missing from the product are created automatically; provide a value for every option the product already has. Prices are integers in the smallest currency unit and default to the store currency. Returns the created variant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductVariantsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product to add the variant to.
$ecommerceV1VariantCreateVariantRequest = new \Hostinger\Model\EcommerceV1VariantCreateVariantRequest(); // \Hostinger\Model\EcommerceV1VariantCreateVariantRequest

try {
    $result = $apiInstance->createAProductVariantV1($storeId, $productId, $ecommerceV1VariantCreateVariantRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductVariantsApi->createAProductVariantV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product to add the variant to. | |
| **ecommerceV1VariantCreateVariantRequest** | [**\Hostinger\Model\EcommerceV1VariantCreateVariantRequest**](../Model/EcommerceV1VariantCreateVariantRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1VariantVariantResponseResource**](../Model/EcommerceV1VariantVariantResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAProductVariantV1()`

```php
deleteAProductVariantV1($storeId, $productId, $variantId): \Hostinger\Model\EcommerceV1VariantVariantDeletedResource
```

Delete a product variant

Delete a single variant from the product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductVariantsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product that owns the variant.
$variantId = variant_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the variant to delete.

try {
    $result = $apiInstance->deleteAProductVariantV1($storeId, $productId, $variantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductVariantsApi->deleteAProductVariantV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product that owns the variant. | |
| **variantId** | **string**| The ID of the variant to delete. | |

### Return type

[**\Hostinger\Model\EcommerceV1VariantVariantDeletedResource**](../Model/EcommerceV1VariantVariantDeletedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductVariantsV1()`

```php
listProductVariantsV1($storeId, $productId, $page): \Hostinger\Model\EcommerceListProductVariantsV1200Response
```

List product variants

List a product's variants, ordered by rank, with their options, prices and inventory. Prices are integers in the smallest currency unit and live on variants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductVariantsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product to list variants for.
$page = 1; // int | Page number

try {
    $result = $apiInstance->listProductVariantsV1($storeId, $productId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductVariantsApi->listProductVariantsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product to list variants for. | |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\EcommerceListProductVariantsV1200Response**](../Model/EcommerceListProductVariantsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductVariantsInBatchV1()`

```php
updateProductVariantsInBatchV1($storeId, $productId, $ecommerceV1VariantBatchUpdateVariantsRequest): \Hostinger\Model\EcommerceV1VariantVariantListResponseResource
```

Update product variants in batch

Update up to 100 existing variants in place by id — title, inventory, stock tracking and prices. Variants omitted from the request are left untouched. Prices replace the variant's existing prices in full. Returns the updated variants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductVariantsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product whose variants are being updated.
$ecommerceV1VariantBatchUpdateVariantsRequest = new \Hostinger\Model\EcommerceV1VariantBatchUpdateVariantsRequest(); // \Hostinger\Model\EcommerceV1VariantBatchUpdateVariantsRequest

try {
    $result = $apiInstance->updateProductVariantsInBatchV1($storeId, $productId, $ecommerceV1VariantBatchUpdateVariantsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductVariantsApi->updateProductVariantsInBatchV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product whose variants are being updated. | |
| **ecommerceV1VariantBatchUpdateVariantsRequest** | [**\Hostinger\Model\EcommerceV1VariantBatchUpdateVariantsRequest**](../Model/EcommerceV1VariantBatchUpdateVariantsRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1VariantVariantListResponseResource**](../Model/EcommerceV1VariantVariantListResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
