# Hostinger\EcommercePaymentsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**enableManualPaymentMethodV1()**](EcommercePaymentsApi.md#enableManualPaymentMethodV1) | **POST** /api/ecommerce/v1/stores/{store_id}/payment-methods/manual | Enable manual payment method |


## `enableManualPaymentMethodV1()`

```php
enableManualPaymentMethodV1($storeId, $ecommerceV1PaymentEnableManualPaymentRequest): \Hostinger\Model\EcommerceV1PaymentManualPaymentResource
```

Enable manual payment method

Enable a manual payment method so the store can accept orders without an online payment provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommercePaymentsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to enable manual payment for.
$ecommerceV1PaymentEnableManualPaymentRequest = new \Hostinger\Model\EcommerceV1PaymentEnableManualPaymentRequest(); // \Hostinger\Model\EcommerceV1PaymentEnableManualPaymentRequest

try {
    $result = $apiInstance->enableManualPaymentMethodV1($storeId, $ecommerceV1PaymentEnableManualPaymentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommercePaymentsApi->enableManualPaymentMethodV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to enable manual payment for. | |
| **ecommerceV1PaymentEnableManualPaymentRequest** | [**\Hostinger\Model\EcommerceV1PaymentEnableManualPaymentRequest**](../Model/EcommerceV1PaymentEnableManualPaymentRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1PaymentManualPaymentResource**](../Model/EcommerceV1PaymentManualPaymentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
