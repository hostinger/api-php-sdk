# Hostinger\EcommerceMiscellaneousApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomStorefrontSetupInstructionsV1()**](EcommerceMiscellaneousApi.md#getCustomStorefrontSetupInstructionsV1) | **GET** /api/ecommerce/v1/miscellaneous/custom-storefront-instructions | Get custom storefront setup instructions |


## `getCustomStorefrontSetupInstructionsV1()`

```php
getCustomStorefrontSetupInstructionsV1(): \Hostinger\Model\EcommerceV1MiscellaneousCustomStorefrontInstructionsResource
```

Get custom storefront setup instructions

Retrieve step-by-step setup instructions, formatted as Markdown, for connecting a custom sales channel to your store and keeping your catalog, orders, shipping and payments in sync through the Ecommerce API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceMiscellaneousApi(config: $config);

try {
    $result = $apiInstance->getCustomStorefrontSetupInstructionsV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceMiscellaneousApi->getCustomStorefrontSetupInstructionsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\EcommerceV1MiscellaneousCustomStorefrontInstructionsResource**](../Model/EcommerceV1MiscellaneousCustomStorefrontInstructionsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
