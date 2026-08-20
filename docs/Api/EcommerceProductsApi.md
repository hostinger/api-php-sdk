# Hostinger\EcommerceProductsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAProductImageUploadURLV1()**](EcommerceProductsApi.md#createAProductImageUploadURLV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/images/upload-url | Create a product image upload URL |
| [**createDigitalProductV1()**](EcommerceProductsApi.md#createDigitalProductV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/digital | Create digital product |
| [**createPhysicalProductV1()**](EcommerceProductsApi.md#createPhysicalProductV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/physical | Create physical product |
| [**deleteAProductV1()**](EcommerceProductsApi.md#deleteAProductV1) | **DELETE** /api/ecommerce/v1/stores/{store_id}/products/{product_id} | Delete a product |
| [**listProductsV1()**](EcommerceProductsApi.md#listProductsV1) | **GET** /api/ecommerce/v1/stores/{store_id}/products | List products |
| [**updateAProductV1()**](EcommerceProductsApi.md#updateAProductV1) | **PATCH** /api/ecommerce/v1/stores/{store_id}/products/{product_id} | Update a product |
| [**uploadAndAttachAProductImageV1()**](EcommerceProductsApi.md#uploadAndAttachAProductImageV1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/{product_id}/images | Upload and attach a product image |


## `createAProductImageUploadURLV1()`

```php
createAProductImageUploadURLV1($storeId, $productId): \Hostinger\Model\EcommerceV1ProductProductImageUploadUrlResource
```

Create a product image upload URL

Returns a signed URL to upload a product image to (multipart/form-data POST). Then call the attach-image endpoint with the returned object_name to scan and attach it to the product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store the product belongs to.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product the image will be attached to.

try {
    $result = $apiInstance->createAProductImageUploadURLV1($storeId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->createAProductImageUploadURLV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store the product belongs to. | |
| **productId** | **string**| The ID of the product the image will be attached to. | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductImageUploadUrlResource**](../Model/EcommerceV1ProductProductImageUploadUrlResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `deleteAProductV1()`

```php
deleteAProductV1($storeId, $productId): \Hostinger\Model\EcommerceV1ProductProductDeletedResource
```

Delete a product

Delete a product and its variants from the store. A subscription product with active subscribers is archived instead of deleted so its data stays available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product to delete.

try {
    $result = $apiInstance->deleteAProductV1($storeId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->deleteAProductV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product to delete. | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductDeletedResource**](../Model/EcommerceV1ProductProductDeletedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductsV1()`

```php
listProductsV1($storeId, $productIds, $status, $q, $include, $page): \Hostinger\Model\EcommerceListProductsV1200Response
```

List products

List a store's products newest first as lean summaries (name, status, thumbnail, variant count and price range). Prices are integers in the smallest currency unit and live on variants. Filter by status, free text or a set of product ids. Use include=variants to embed each product's variants with prices and inventory, and include=media to embed its media.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to list products for.
$productIds = array('productIds_example'); // string[] | Restrict to these product ids. Doubles as a single-product lookup. Up to 200 ids.
$status = array('status_example'); // string[] | Product statuses to include.
$q = blue shirt; // string | Free-text search over product title and SKU.
$include = array('include_example'); // string[] | Opt-in heavy data: \"variants\" embeds each product's variants; \"media\" embeds its media.
$page = 1; // int | Page number

try {
    $result = $apiInstance->listProductsV1($storeId, $productIds, $status, $q, $include, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->listProductsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to list products for. | |
| **productIds** | [**string[]**](../Model/string.md)| Restrict to these product ids. Doubles as a single-product lookup. Up to 200 ids. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Product statuses to include. | [optional] |
| **q** | **string**| Free-text search over product title and SKU. | [optional] |
| **include** | [**string[]**](../Model/string.md)| Opt-in heavy data: \&quot;variants\&quot; embeds each product&#39;s variants; \&quot;media\&quot; embeds its media. | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\EcommerceListProductsV1200Response**](../Model/EcommerceListProductsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAProductV1()`

```php
updateAProductV1($storeId, $productId, $ecommerceV1ProductUpdateRequest): \Hostinger\Model\EcommerceV1ProductProductResponseResource
```

Update a product

Update a product's name, description or status. Set status to published to make it buyable, draft to hide it, or archived to retire it. Variants, prices and inventory are managed through the variant endpoints, not here. Returns the updated product summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the product.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product to update.
$ecommerceV1ProductUpdateRequest = new \Hostinger\Model\EcommerceV1ProductUpdateRequest(); // \Hostinger\Model\EcommerceV1ProductUpdateRequest

try {
    $result = $apiInstance->updateAProductV1($storeId, $productId, $ecommerceV1ProductUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->updateAProductV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the product. | |
| **productId** | **string**| The ID of the product to update. | |
| **ecommerceV1ProductUpdateRequest** | [**\Hostinger\Model\EcommerceV1ProductUpdateRequest**](../Model/EcommerceV1ProductUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductResponseResource**](../Model/EcommerceV1ProductProductResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAndAttachAProductImageV1()`

```php
uploadAndAttachAProductImageV1($storeId, $productId, $ecommerceV1ProductUploadProductImageRequest): \Hostinger\Model\EcommerceV1ProductProductImageUploadResource
```

Upload and attach a product image

Fetch a raster image (JPEG, PNG, GIF or WebP, max 15MB) from a URL and attach it to a product in a single call. The image is virus-scanned and validated by content, then stored on the CDN. Set is_thumbnail to make it the product's primary image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceProductsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store the product belongs to.
$productId = prod_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the product to attach the image to.
$ecommerceV1ProductUploadProductImageRequest = new \Hostinger\Model\EcommerceV1ProductUploadProductImageRequest(); // \Hostinger\Model\EcommerceV1ProductUploadProductImageRequest

try {
    $result = $apiInstance->uploadAndAttachAProductImageV1($storeId, $productId, $ecommerceV1ProductUploadProductImageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceProductsApi->uploadAndAttachAProductImageV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store the product belongs to. | |
| **productId** | **string**| The ID of the product to attach the image to. | |
| **ecommerceV1ProductUploadProductImageRequest** | [**\Hostinger\Model\EcommerceV1ProductUploadProductImageRequest**](../Model/EcommerceV1ProductUploadProductImageRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1ProductProductImageUploadResource**](../Model/EcommerceV1ProductProductImageUploadResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
