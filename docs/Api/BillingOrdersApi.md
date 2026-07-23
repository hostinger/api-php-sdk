# Hostinger\BillingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPurchaseOrderV1()**](BillingOrdersApi.md#createPurchaseOrderV1) | **POST** /api/billing/v1/orders | Create purchase order |


## `createPurchaseOrderV1()`

```php
createPurchaseOrderV1($billingV1OrderPurchaseRequest): \Hostinger\Model\BillingV1OrderOrderResource
```

Create purchase order

Create a purchase order for any Hostinger product.  This unified endpoint places an order for one or more catalog items and works across all Hostinger products, leveraging the existing billing infrastructure. Use the [catalog endpoint](#tag/billing-catalog) to look up the `item_id` values available for purchase.  If no payment method is provided, your default payment method will be used automatically.  This endpoint only places the order. Product-specific provisioning (e.g. VPS setup or domain registration) is not performed here — once the order completes, use the relevant product endpoints or [hPanel](https://hpanel.hostinger.com/) to finalize setup.  Use this endpoint to purchase any product available in the catalog.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingOrdersApi(config: $config);
$billingV1OrderPurchaseRequest = new \Hostinger\Model\BillingV1OrderPurchaseRequest(); // \Hostinger\Model\BillingV1OrderPurchaseRequest

try {
    $result = $apiInstance->createPurchaseOrderV1($billingV1OrderPurchaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingOrdersApi->createPurchaseOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billingV1OrderPurchaseRequest** | [**\Hostinger\Model\BillingV1OrderPurchaseRequest**](../Model/BillingV1OrderPurchaseRequest.md)|  | |

### Return type

[**\Hostinger\Model\BillingV1OrderOrderResource**](../Model/BillingV1OrderOrderResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
