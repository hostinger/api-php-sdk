# Hostinger\EcommerceStoresApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStoreV1()**](EcommerceStoresApi.md#createStoreV1) | **POST** /api/ecommerce/v1/stores | Create store |
| [**deleteStoreV1()**](EcommerceStoresApi.md#deleteStoreV1) | **DELETE** /api/ecommerce/v1/stores/{store_id} | Delete store |
| [**getStoreMetadataV1()**](EcommerceStoresApi.md#getStoreMetadataV1) | **GET** /api/ecommerce/v1/stores/{store_id}/metadata | Get store metadata |
| [**getStoresV1()**](EcommerceStoresApi.md#getStoresV1) | **GET** /api/ecommerce/v1/stores | Get stores |


## `createStoreV1()`

```php
createStoreV1($ecommerceV1StoreStoreRequest): \Hostinger\Model\EcommerceV1StoreStoreCreationResource
```

Create store

Create a new store for your account.  A primary sales channel is created alongside the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceStoresApi(config: $config);
$ecommerceV1StoreStoreRequest = new \Hostinger\Model\EcommerceV1StoreStoreRequest(); // \Hostinger\Model\EcommerceV1StoreStoreRequest

try {
    $result = $apiInstance->createStoreV1($ecommerceV1StoreStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceStoresApi->createStoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecommerceV1StoreStoreRequest** | [**\Hostinger\Model\EcommerceV1StoreStoreRequest**](../Model/EcommerceV1StoreStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1StoreStoreCreationResource**](../Model/EcommerceV1StoreStoreCreationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoreV1()`

```php
deleteStoreV1($storeId): \Hostinger\Model\EcommerceV1StoreStoreDeleteResource
```

Delete store

Soft-delete a store owned by your account.  The underlying store data is preserved; only the store is marked as deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceStoresApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to delete.

try {
    $result = $apiInstance->deleteStoreV1($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceStoresApi->deleteStoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to delete. | |

### Return type

[**\Hostinger\Model\EcommerceV1StoreStoreDeleteResource**](../Model/EcommerceV1StoreStoreDeleteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreMetadataV1()`

```php
getStoreMetadataV1($storeId): \Hostinger\Model\EcommerceV1StoreStoreMetadataResource
```

Get store metadata

Get a store's readiness metadata: whether payment methods and shipping are configured, plus its default currency. Useful to verify prerequisites before building a storefront.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceStoresApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to read metadata for.

try {
    $result = $apiInstance->getStoreMetadataV1($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceStoresApi->getStoreMetadataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to read metadata for. | |

### Return type

[**\Hostinger\Model\EcommerceV1StoreStoreMetadataResource**](../Model/EcommerceV1StoreStoreMetadataResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoresV1()`

```php
getStoresV1($page): \Hostinger\Model\EcommerceGetStoresV1200Response
```

Get stores

Retrieve the stores associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceStoresApi(config: $config);
$page = 1; // int | Page number

try {
    $result = $apiInstance->getStoresV1($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceStoresApi->getStoresV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\EcommerceGetStoresV1200Response**](../Model/EcommerceGetStoresV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
