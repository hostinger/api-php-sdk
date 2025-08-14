# Hostinger\BillingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServiceOrderV1()**](BillingOrdersApi.md#createServiceOrderV1) | **POST** /api/billing/v1/orders | Create service order |


## `createServiceOrderV1()`

```php
createServiceOrderV1($billingV1OrderStoreRequest): \Hostinger\Model\BillingV1OrderOrderResource
```

Create service order

Create a new service order.   **DEPRECATED**  To purchase a domain, use [`POST /api/domains/v1/portfolio`](/#tag/domains-portfolio/POST/api/domains/v1/portfolio) instead.  To purchase a VPS, use [`POST /api/vps/v1/virtual-machines`](/#tag/vps-virtual-machine/POST/api/vps/v1/virtual-machines) instead.   To place order, you need to provide payment method ID and list of price items from the catalog endpoint together with quantity. Coupons also can be provided during order creation.  Orders created using this endpoint will be set for automatic renewal.  Some `credit_card` payments might need additional verification, rendering purchase unprocessed. We recommend use other payment methods than `credit_card` if you encounter this issue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingOrdersApi(config: $config);
$billingV1OrderStoreRequest = new \Hostinger\Model\BillingV1OrderStoreRequest(); // \Hostinger\Model\BillingV1OrderStoreRequest

try {
    $result = $apiInstance->createServiceOrderV1($billingV1OrderStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingOrdersApi->createServiceOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billingV1OrderStoreRequest** | [**\Hostinger\Model\BillingV1OrderStoreRequest**](../Model/BillingV1OrderStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\BillingV1OrderOrderResource**](../Model/BillingV1OrderOrderResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
