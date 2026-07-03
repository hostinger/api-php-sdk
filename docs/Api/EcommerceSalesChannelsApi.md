# Hostinger\EcommerceSalesChannelsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createACustomSalesChannelV1()**](EcommerceSalesChannelsApi.md#createACustomSalesChannelV1) | **POST** /api/ecommerce/v1/stores/{store_id}/sales-channels | Create a custom sales channel |
| [**listSalesChannelsV1()**](EcommerceSalesChannelsApi.md#listSalesChannelsV1) | **GET** /api/ecommerce/v1/stores/{store_id}/sales-channels | List sales channels |


## `createACustomSalesChannelV1()`

```php
createACustomSalesChannelV1($storeId, $ecommerceV1SalesChannelStoreRequest): \Hostinger\Model\EcommerceV1SalesChannelSalesChannelCreationResource
```

Create a custom sales channel

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
    $result = $apiInstance->createACustomSalesChannelV1($storeId, $ecommerceV1SalesChannelStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceSalesChannelsApi->createACustomSalesChannelV1: ', $e->getMessage(), PHP_EOL;
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
