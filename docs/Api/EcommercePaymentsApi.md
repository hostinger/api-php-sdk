# Hostinger\EcommercePaymentsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAPaymentProviderConnectLinkV1()**](EcommercePaymentsApi.md#createAPaymentProviderConnectLinkV1) | **POST** /api/ecommerce/v1/stores/{store_id}/payment-providers/{provider_id}/connect-link | Create a payment provider connect link |
| [**enableManualPaymentMethodV1()**](EcommercePaymentsApi.md#enableManualPaymentMethodV1) | **POST** /api/ecommerce/v1/stores/{store_id}/payment-methods/manual | Enable manual payment method |
| [**listStorePaymentProvidersV1()**](EcommercePaymentsApi.md#listStorePaymentProvidersV1) | **GET** /api/ecommerce/v1/stores/{store_id}/payment-providers | List store payment providers |


## `createAPaymentProviderConnectLinkV1()`

```php
createAPaymentProviderConnectLinkV1($storeId, $providerId): \Hostinger\Model\EcommerceV1PaymentProviderPaymentProviderConnectLinkResource
```

Create a payment provider connect link

Create an onboarding link for connecting a payment gateway to the store. Returns the gateway onboarding URL for the merchant to open and a deep-link into the store admin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommercePaymentsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to connect the payment provider to.
$providerId = stripe; // string | The ID of the payment gateway to connect, e.g. stripe.

try {
    $result = $apiInstance->createAPaymentProviderConnectLinkV1($storeId, $providerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommercePaymentsApi->createAPaymentProviderConnectLinkV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to connect the payment provider to. | |
| **providerId** | **string**| The ID of the payment gateway to connect, e.g. stripe. | |

### Return type

[**\Hostinger\Model\EcommerceV1PaymentProviderPaymentProviderConnectLinkResource**](../Model/EcommerceV1PaymentProviderPaymentProviderConnectLinkResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `listStorePaymentProvidersV1()`

```php
listStorePaymentProvidersV1($storeId, $includeCurrencyUnsupported): \Hostinger\Model\EcommerceV1PaymentProviderPaymentProviderListResource
```

List store payment providers

List a store's payment providers, split into providers already connected to the store and gateways available to install. Never exposes gateway credentials, secrets, or configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommercePaymentsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to list payment providers for.
$includeCurrencyUnsupported = true; // bool | Include gateways that do not support the store currency in the available list.

try {
    $result = $apiInstance->listStorePaymentProvidersV1($storeId, $includeCurrencyUnsupported);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommercePaymentsApi->listStorePaymentProvidersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to list payment providers for. | |
| **includeCurrencyUnsupported** | **bool**| Include gateways that do not support the store currency in the available list. | [optional] |

### Return type

[**\Hostinger\Model\EcommerceV1PaymentProviderPaymentProviderListResource**](../Model/EcommerceV1PaymentProviderPaymentProviderListResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
