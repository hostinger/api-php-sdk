# Hostinger\EcommerceDiscountsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createADiscountV1()**](EcommerceDiscountsApi.md#createADiscountV1) | **POST** /api/ecommerce/v1/stores/{store_id}/discounts | Create a discount |
| [**listDiscountsV1()**](EcommerceDiscountsApi.md#listDiscountsV1) | **GET** /api/ecommerce/v1/stores/{store_id}/discounts | List discounts |


## `createADiscountV1()`

```php
createADiscountV1($storeId, $ecommerceV1DiscountCreateDiscountRequest): \Hostinger\Model\EcommerceV1DiscountDiscountResponseResource
```

Create a discount

Create a discount for a store. Fixed discounts take an amount in the smallest currency unit (e.g. $10 is 1000); percentage discounts take a whole-number value between 1 and 100. Free-shipping discounts ignore value. Returns the created discount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceDiscountsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to create the discount for.
$ecommerceV1DiscountCreateDiscountRequest = new \Hostinger\Model\EcommerceV1DiscountCreateDiscountRequest(); // \Hostinger\Model\EcommerceV1DiscountCreateDiscountRequest

try {
    $result = $apiInstance->createADiscountV1($storeId, $ecommerceV1DiscountCreateDiscountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceDiscountsApi->createADiscountV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to create the discount for. | |
| **ecommerceV1DiscountCreateDiscountRequest** | [**\Hostinger\Model\EcommerceV1DiscountCreateDiscountRequest**](../Model/EcommerceV1DiscountCreateDiscountRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1DiscountDiscountResponseResource**](../Model/EcommerceV1DiscountDiscountResponseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDiscountsV1()`

```php
listDiscountsV1($storeId, $q, $isDisabled, $page): \Hostinger\Model\EcommerceListDiscountsV1200Response
```

List discounts

List a store's discounts. Filter by free text over code and name, or by disabled state. Amounts for fixed discounts are integers in the smallest currency unit; percentage discounts carry a whole-number value between 1 and 100.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceDiscountsApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | The ID of the store to list discounts for.
$q = blackfriday; // string | Free-text search over discount code and name.
$isDisabled = 'isDisabled_example'; // string | Filter by disabled state.
$page = 1; // int | Page number

try {
    $result = $apiInstance->listDiscountsV1($storeId, $q, $isDisabled, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceDiscountsApi->listDiscountsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| The ID of the store to list discounts for. | |
| **q** | **string**| Free-text search over discount code and name. | [optional] |
| **isDisabled** | **string**| Filter by disabled state. | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\EcommerceListDiscountsV1200Response**](../Model/EcommerceListDiscountsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
