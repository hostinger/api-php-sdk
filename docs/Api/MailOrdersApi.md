# Hostinger\MailOrdersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrderPlanV1()**](MailOrdersApi.md#getOrderPlanV1) | **GET** /api/mail/v1/orders/{orderId}/plan | Get order plan |
| [**listOrdersV1()**](MailOrdersApi.md#listOrdersV1) | **GET** /api/mail/v1/orders | List orders |


## `getOrderPlanV1()`

```php
getOrderPlanV1($orderId): \Hostinger\Model\MailV1OrdersPlanResource
```

Get order plan

Retrieve the plan the given mail order was purchased with, including domain-level and mailbox-level quotas, limits, and protocol availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailOrdersApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID

try {
    $result = $apiInstance->getOrderPlanV1($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOrdersApi->getOrderPlanV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |

### Return type

[**\Hostinger\Model\MailV1OrdersPlanResource**](../Model/MailV1OrdersPlanResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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
