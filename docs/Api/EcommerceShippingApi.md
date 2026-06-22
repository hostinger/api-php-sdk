# Hostinger\EcommerceShippingApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**setStoreShippingV1()**](EcommerceShippingApi.md#setStoreShippingV1) | **POST** /api/ecommerce/v1/stores/{store_id}/shipping | Set store shipping |


## `setStoreShippingV1()`

```php
setStoreShippingV1($storeId, $ecommerceV1ShippingSetShippingRequest): \Hostinger\Model\EcommerceV1ShippingShippingResource
```

Set store shipping

Set the flat-rate shipping price for a store, creating the shipping zone if it does not exist yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceShippingApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to configure shipping for.
$ecommerceV1ShippingSetShippingRequest = new \Hostinger\Model\EcommerceV1ShippingSetShippingRequest(); // \Hostinger\Model\EcommerceV1ShippingSetShippingRequest

try {
    $result = $apiInstance->setStoreShippingV1($storeId, $ecommerceV1ShippingSetShippingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceShippingApi->setStoreShippingV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to configure shipping for. | |
| **ecommerceV1ShippingSetShippingRequest** | [**\Hostinger\Model\EcommerceV1ShippingSetShippingRequest**](../Model/EcommerceV1ShippingSetShippingRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1ShippingShippingResource**](../Model/EcommerceV1ShippingShippingResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
