# Hostinger\EcommerceOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAnOrderV1()**](EcommerceOrdersApi.md#cancelAnOrderV1) | **POST** /api/ecommerce/v1/stores/{store_id}/orders/{order_id}/cancel | Cancel an order |
| [**fulfilAnOrderV1()**](EcommerceOrdersApi.md#fulfilAnOrderV1) | **POST** /api/ecommerce/v1/stores/{store_id}/orders/{order_id}/fulfill | Fulfil an order |
| [**listOrdersV1()**](EcommerceOrdersApi.md#listOrdersV1) | **GET** /api/ecommerce/v1/stores/{store_id}/orders | List orders |
| [**retrieveAnOrderV1()**](EcommerceOrdersApi.md#retrieveAnOrderV1) | **GET** /api/ecommerce/v1/stores/{store_id}/orders/{order_id} | Retrieve an order |


## `cancelAnOrderV1()`

```php
cancelAnOrderV1($storeId, $orderId, $ecommerceV1OrderCancelRequest): \Hostinger\Model\EcommerceV1OrderOrderResponseResource
```

Cancel an order

Cancel the order and optionally email the customer. Returns the updated order summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceOrdersApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the order.
$orderId = order_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the order to cancel.
$ecommerceV1OrderCancelRequest = new \Hostinger\Model\EcommerceV1OrderCancelRequest(); // \Hostinger\Model\EcommerceV1OrderCancelRequest

try {
    $result = $apiInstance->cancelAnOrderV1($storeId, $orderId, $ecommerceV1OrderCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceOrdersApi->cancelAnOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the order. | |
| **orderId** | **string**| The ID of the order to cancel. | |
| **ecommerceV1OrderCancelRequest** | [**\Hostinger\Model\EcommerceV1OrderCancelRequest**](../Model/EcommerceV1OrderCancelRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1OrderOrderResponseResource**](../Model/EcommerceV1OrderOrderResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfilAnOrderV1()`

```php
fulfilAnOrderV1($storeId, $orderId, $ecommerceV1OrderFulfillRequest): \Hostinger\Model\EcommerceV1OrderOrderResponseResource
```

Fulfil an order

Create a fulfilment for the order and attach tracking in one call. Omit items to fulfil every remaining unfulfilled item. Returns the updated order summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceOrdersApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the order.
$orderId = order_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the order to fulfil.
$ecommerceV1OrderFulfillRequest = new \Hostinger\Model\EcommerceV1OrderFulfillRequest(); // \Hostinger\Model\EcommerceV1OrderFulfillRequest

try {
    $result = $apiInstance->fulfilAnOrderV1($storeId, $orderId, $ecommerceV1OrderFulfillRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceOrdersApi->fulfilAnOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the order. | |
| **orderId** | **string**| The ID of the order to fulfil. | |
| **ecommerceV1OrderFulfillRequest** | [**\Hostinger\Model\EcommerceV1OrderFulfillRequest**](../Model/EcommerceV1OrderFulfillRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1OrderOrderResponseResource**](../Model/EcommerceV1OrderOrderResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrdersV1()`

```php
listOrdersV1($storeId, $status, $paymentStatus, $fulfillmentStatus, $email, $displayId, $q, $createdAtFrom, $createdAtTo, $page): \Hostinger\Model\EcommerceListOrdersV1200Response
```

List orders

List a store's orders newest first as summaries. Filter by status, payment or fulfilment status, customer email, order number or a free-text query. Amounts are in the smallest currency unit. Retrieve a single order for its line items, addresses and fulfilments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceOrdersApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to list orders for.
$status = array('status_example'); // string[] | Order statuses to include.
$paymentStatus = array('paymentStatus_example'); // string[] | Payment statuses to include. A paid order is \"captured\".
$fulfillmentStatus = array('fulfillmentStatus_example'); // string[] | Fulfilment statuses to include.
$email = buyer@example.com; // string | Customer email, matched exactly.
$displayId = 1042; // string | The order number the merchant and customer see.
$q = blue shirt; // string | Free-text search over customer name, email, order number and line items.
$createdAtFrom = 2026-01-01; // string | Earliest creation time to include, inclusive. Accepts a date or ISO date-time (UTC).
$createdAtTo = 2026-01-31; // string | Latest creation time to include, inclusive. A bare date covers that whole day.
$page = 1; // int | Page number

try {
    $result = $apiInstance->listOrdersV1($storeId, $status, $paymentStatus, $fulfillmentStatus, $email, $displayId, $q, $createdAtFrom, $createdAtTo, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceOrdersApi->listOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to list orders for. | |
| **status** | [**string[]**](../Model/string.md)| Order statuses to include. | [optional] |
| **paymentStatus** | [**string[]**](../Model/string.md)| Payment statuses to include. A paid order is \&quot;captured\&quot;. | [optional] |
| **fulfillmentStatus** | [**string[]**](../Model/string.md)| Fulfilment statuses to include. | [optional] |
| **email** | **string**| Customer email, matched exactly. | [optional] |
| **displayId** | **string**| The order number the merchant and customer see. | [optional] |
| **q** | **string**| Free-text search over customer name, email, order number and line items. | [optional] |
| **createdAtFrom** | **string**| Earliest creation time to include, inclusive. Accepts a date or ISO date-time (UTC). | [optional] |
| **createdAtTo** | **string**| Latest creation time to include, inclusive. A bare date covers that whole day. | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\EcommerceListOrdersV1200Response**](../Model/EcommerceListOrdersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAnOrderV1()`

```php
retrieveAnOrderV1($storeId, $orderId): \Hostinger\Model\EcommerceV1OrderOrderDetailResponseResource
```

Retrieve an order

Retrieve one order in full: line items (each with the id the fulfil endpoint needs), addresses, the totals breakdown and fulfilments with tracking. Amounts are in the smallest currency unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceOrdersApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store that owns the order.
$orderId = order_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the order to retrieve.

try {
    $result = $apiInstance->retrieveAnOrderV1($storeId, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceOrdersApi->retrieveAnOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store that owns the order. | |
| **orderId** | **string**| The ID of the order to retrieve. | |

### Return type

[**\Hostinger\Model\EcommerceV1OrderOrderDetailResponseResource**](../Model/EcommerceV1OrderOrderDetailResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
