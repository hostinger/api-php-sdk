# Hostinger\MailMailboxesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMailboxListV1()**](MailMailboxesApi.md#getMailboxListV1) | **GET** /api/mail/v1/orders/{orderId}/mailboxes | Get mailbox list |


## `getMailboxListV1()`

```php
getMailboxListV1($orderId, $search, $sort, $page, $perPage): \Hostinger\Model\MailGetMailboxListV1200Response
```

Get mailbox list

Retrieve a paginated list of mailboxes belonging to a mail order.  Use this endpoint to monitor mailboxes of your mail service, including their status, enabled protocols, attached resource counts, and periodically synced usage numbers (usage may lag behind live values).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailMailboxesApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$search = info; // string | Filter mailboxes whose email address contains the given string
$sort = address; // string | Sort mailboxes by field. Prefix with `-` for descending order.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->getMailboxListV1($orderId, $search, $sort, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailMailboxesApi->getMailboxListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **search** | **string**| Filter mailboxes whose email address contains the given string | [optional] |
| **sort** | **string**| Sort mailboxes by field. Prefix with &#x60;-&#x60; for descending order. | [optional] [default to &#39;address&#39;] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailGetMailboxListV1200Response**](../Model/MailGetMailboxListV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
