# Hostinger\BillingPaymentMethodsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePaymentMethodV1()**](BillingPaymentMethodsApi.md#deletePaymentMethodV1) | **DELETE** /api/billing/v1/payment-methods/{paymentMethodId} | Delete payment method |
| [**getPaymentMethodListV1()**](BillingPaymentMethodsApi.md#getPaymentMethodListV1) | **GET** /api/billing/v1/payment-methods | Get payment method list |
| [**setDefaultPaymentMethodV1()**](BillingPaymentMethodsApi.md#setDefaultPaymentMethodV1) | **POST** /api/billing/v1/payment-methods/{paymentMethodId} | Set default payment method |


## `deletePaymentMethodV1()`

```php
deletePaymentMethodV1($paymentMethodId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete payment method

This endpoint deletes a payment method from your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingPaymentMethodsApi(config: $config);
$paymentMethodId = 9693613; // int | Payment method ID

try {
    $result = $apiInstance->deletePaymentMethodV1($paymentMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentMethodsApi->deletePaymentMethodV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **int**| Payment method ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethodListV1()`

```php
getPaymentMethodListV1(): \Hostinger\Model\BillingV1PaymentMethodPaymentMethodCollection
```

Get payment method list

This endpoint retrieves a list of available payment methods that can be used for placing new orders.  If you want to add new payment method, please use [hPanel](https://hpanel.hostinger.com/billing/payment-methods).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingPaymentMethodsApi(config: $config);

try {
    $result = $apiInstance->getPaymentMethodListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentMethodsApi->getPaymentMethodListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\BillingV1PaymentMethodPaymentMethodCollection**](../Model/BillingV1PaymentMethodPaymentMethodCollection.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultPaymentMethodV1()`

```php
setDefaultPaymentMethodV1($paymentMethodId): \Hostinger\Model\CommonSuccessEmptyResource
```

Set default payment method

This endpoint sets default payment method for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingPaymentMethodsApi(config: $config);
$paymentMethodId = 9693613; // int | Payment method ID

try {
    $result = $apiInstance->setDefaultPaymentMethodV1($paymentMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentMethodsApi->setDefaultPaymentMethodV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **paymentMethodId** | **int**| Payment method ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
