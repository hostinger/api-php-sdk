# Hostinger\AgencyHostingOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAgencyPlanOrdersV1()**](AgencyHostingOrdersApi.md#listAgencyPlanOrdersV1) | **GET** /api/agency-hosting/v1/orders | List Agency Plan orders |


## `listAgencyPlanOrdersV1()`

```php
listAgencyPlanOrdersV1($page, $perPage): \Hostinger\Model\AgencyHostingListAgencyPlanOrdersV1200Response
```

List Agency Plan orders

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
    $result = $apiInstance->listAgencyPlanOrdersV1($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingOrdersApi->listAgencyPlanOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\AgencyHostingListAgencyPlanOrdersV1200Response**](../Model/AgencyHostingListAgencyPlanOrdersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
