# Hostinger\BillingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewServiceOrderV1()**](BillingOrdersApi.md#createNewServiceOrderV1) | **POST** /api/billing/v1/orders | Create new service order |


## `createNewServiceOrderV1()`

```php
createNewServiceOrderV1($billing_v1_order_store_request): \Hostinger\Model\BillingV1OrderOrderResource
```

Create new service order

This endpoint creates a new service order.   To place order, you need to provide payment method ID and list of price items from the catalog endpoint together with quantity. Coupons also can be provided during order creation.  Orders created using this endpoint will be set for automatically renewal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_v1_order_store_request = new \Hostinger\Model\BillingV1OrderStoreRequest(); // \Hostinger\Model\BillingV1OrderStoreRequest

try {
    $result = $apiInstance->createNewServiceOrderV1($billing_v1_order_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingOrdersApi->createNewServiceOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_v1_order_store_request** | [**\Hostinger\Model\BillingV1OrderStoreRequest**](../Model/BillingV1OrderStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\BillingV1OrderOrderResource**](../Model/BillingV1OrderOrderResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
