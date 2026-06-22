# Hostinger\HostingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listOrdersV1()**](HostingOrdersApi.md#listOrdersV1) | **GET** /api/hosting/v1/orders | List orders |


## `listOrdersV1()`

```php
listOrdersV1($page, $perPage, $statuses, $orderIds): \Hostinger\Model\HostingListOrdersV1200Response
```

List orders

Retrieve a paginated list of orders accessible to the authenticated client.  This endpoint returns orders of your hosting accounts as well as orders of other client hosting accounts that have shared access with you.  Use the available query parameters to filter results by order statuses or specific order IDs for more targeted results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingOrdersApi(config: $config);
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$statuses = ["active","suspended"]; // string[] | Filter by order statuses
$orderIds = [12345,67890]; // int[] | Filter by specific order IDs

try {
    $result = $apiInstance->listOrdersV1($page, $perPage, $statuses, $orderIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingOrdersApi->listOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **statuses** | [**string[]**](../Model/string.md)| Filter by order statuses | [optional] |
| **orderIds** | [**int[]**](../Model/int.md)| Filter by specific order IDs | [optional] |

### Return type

[**\Hostinger\Model\HostingListOrdersV1200Response**](../Model/HostingListOrdersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
