# Hostinger\AgencyHostingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listOrdersV1()**](AgencyHostingOrdersApi.md#listOrdersV1) | **GET** /api/agency-hosting/v1/orders | List orders |


## `listOrdersV1()`

```php
listOrdersV1($page, $perPage): \Hostinger\Model\AgencyHostingListOrdersV1200Response
```

List orders

Returns a paginated list of Agency Plan orders accessible to the authenticated client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingOrdersApi(config: $config);
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listOrdersV1($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingOrdersApi->listOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\AgencyHostingListOrdersV1200Response**](../Model/AgencyHostingListOrdersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
