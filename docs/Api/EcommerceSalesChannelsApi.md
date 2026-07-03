# Hostinger\EcommerceSalesChannelsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomSalesChannelV1()**](EcommerceSalesChannelsApi.md#createCustomSalesChannelV1) | **POST** /api/ecommerce/v1/stores/{store_id}/sales-channels | Create custom sales channel |
| [**listSalesChannelsV1()**](EcommerceSalesChannelsApi.md#listSalesChannelsV1) | **GET** /api/ecommerce/v1/stores/{store_id}/sales-channels | List sales channels |
| [**updateSalesChannelV1()**](EcommerceSalesChannelsApi.md#updateSalesChannelV1) | **PATCH** /api/ecommerce/v1/stores/{store_id}/sales-channels/{sales_channel_id} | Update sales channel |


## `createCustomSalesChannelV1()`

```php
createCustomSalesChannelV1($storeId, $ecommerceV1SalesChannelStoreRequest): \Hostinger\Model\EcommerceV1SalesChannelSalesChannelCreationResource
```

Create custom sales channel

Create a custom sales channel for a store. Build your own frontend and keep your catalog, orders, shipping and payments in sync through the Ecommerce API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceSalesChannelsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to create the sales channel for.
$ecommerceV1SalesChannelStoreRequest = new \Hostinger\Model\EcommerceV1SalesChannelStoreRequest(); // \Hostinger\Model\EcommerceV1SalesChannelStoreRequest

try {
    $result = $apiInstance->createCustomSalesChannelV1($storeId, $ecommerceV1SalesChannelStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceSalesChannelsApi->createCustomSalesChannelV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to create the sales channel for. | |
| **ecommerceV1SalesChannelStoreRequest** | [**\Hostinger\Model\EcommerceV1SalesChannelStoreRequest**](../Model/EcommerceV1SalesChannelStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1SalesChannelSalesChannelCreationResource**](../Model/EcommerceV1SalesChannelSalesChannelCreationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSalesChannelsV1()`

```php
listSalesChannelsV1($storeId): \Hostinger\Model\EcommerceV1SalesChannelSalesChannelListResource
```

List sales channels

List a store's active sales channels with their full metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceSalesChannelsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to list sales channels for.

try {
    $result = $apiInstance->listSalesChannelsV1($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceSalesChannelsApi->listSalesChannelsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to list sales channels for. | |

### Return type

[**\Hostinger\Model\EcommerceV1SalesChannelSalesChannelListResource**](../Model/EcommerceV1SalesChannelSalesChannelListResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSalesChannelV1()`

```php
updateSalesChannelV1($storeId, $salesChannelId, $ecommerceV1SalesChannelUpdateRequest): \Hostinger\Model\EcommerceV1SalesChannelSalesChannelUpdateResource
```

Update sales channel

Update a custom sales channel. The merchant-facing `name` and the public `url` (returned as the channel `domain`) can be changed. Pass `null` to clear a value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceSalesChannelsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the sales channel.
$salesChannelId = scha_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the sales channel to update.
$ecommerceV1SalesChannelUpdateRequest = new \Hostinger\Model\EcommerceV1SalesChannelUpdateRequest(); // \Hostinger\Model\EcommerceV1SalesChannelUpdateRequest

try {
    $result = $apiInstance->updateSalesChannelV1($storeId, $salesChannelId, $ecommerceV1SalesChannelUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceSalesChannelsApi->updateSalesChannelV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the sales channel. | |
| **salesChannelId** | **string**| The ID of the sales channel to update. | |
| **ecommerceV1SalesChannelUpdateRequest** | [**\Hostinger\Model\EcommerceV1SalesChannelUpdateRequest**](../Model/EcommerceV1SalesChannelUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1SalesChannelSalesChannelUpdateResource**](../Model/EcommerceV1SalesChannelSalesChannelUpdateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
