# Hostinger\MailOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listOrdersV1()**](MailOrdersApi.md#listOrdersV1) | **GET** /api/mail/v1/orders | List orders |


## `listOrdersV1()`

```php
listOrdersV1($domain, $status, $isTrial, $sort, $page, $perPage): \Hostinger\Model\MailListOrdersV1200Response
```

List orders

Retrieve a paginated list of mail orders associated with your account.  Use this endpoint to monitor your mail services, including their status, plan, attached domain, and expiration details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailOrdersApi(config: $config);
$domain = example.com; // string | Filter orders by domain name (exact match)
$status = active; // string | Filter orders by status
$isTrial = false; // bool | Filter orders by trial state
$sort = -created_at; // string | Sort orders by field. Prefix with `-` for descending order.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listOrdersV1($domain, $status, $isTrial, $sort, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOrdersApi->listOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Filter orders by domain name (exact match) | [optional] |
| **status** | **string**| Filter orders by status | [optional] |
| **isTrial** | **bool**| Filter orders by trial state | [optional] |
| **sort** | **string**| Sort orders by field. Prefix with &#x60;-&#x60; for descending order. | [optional] [default to &#39;-created_at&#39;] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListOrdersV1200Response**](../Model/MailListOrdersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
