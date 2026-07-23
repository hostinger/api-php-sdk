# Hostinger\MailMailboxesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeMailboxPasswordV1()**](MailMailboxesApi.md#changeMailboxPasswordV1) | **PATCH** /api/mail/v1/mailboxes/{mailboxId}/password | Change mailbox password |
| [**createMailboxV1()**](MailMailboxesApi.md#createMailboxV1) | **POST** /api/mail/v1/orders/{orderId}/mailboxes | Create mailbox |
| [**deleteMailboxV1()**](MailMailboxesApi.md#deleteMailboxV1) | **DELETE** /api/mail/v1/mailboxes/{mailboxId} | Delete mailbox |
| [**listMailboxesV1()**](MailMailboxesApi.md#listMailboxesV1) | **GET** /api/mail/v1/orders/{orderId}/mailboxes | List mailboxes |


## `changeMailboxPasswordV1()`

```php
changeMailboxPasswordV1($mailboxId, $mailV1SchemaChangeMailboxPasswordRequestSchema): \Hostinger\Model\CommonSuccessEmptyResource
```

Change mailbox password

Change the password of a mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailMailboxesApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID
$mailV1SchemaChangeMailboxPasswordRequestSchema = new \Hostinger\Model\MailV1SchemaChangeMailboxPasswordRequestSchema(); // \Hostinger\Model\MailV1SchemaChangeMailboxPasswordRequestSchema

try {
    $result = $apiInstance->changeMailboxPasswordV1($mailboxId, $mailV1SchemaChangeMailboxPasswordRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailMailboxesApi->changeMailboxPasswordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |
| **mailV1SchemaChangeMailboxPasswordRequestSchema** | [**\Hostinger\Model\MailV1SchemaChangeMailboxPasswordRequestSchema**](../Model/MailV1SchemaChangeMailboxPasswordRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMailboxV1()`

```php
createMailboxV1($orderId, $mailV1SchemaCreateMailboxRequestSchema): \Hostinger\Model\MailV1MailboxesMailboxResource
```

Create mailbox

Create a mailbox under the given mail order. The full email address is composed from the given local part and the domain of the order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailMailboxesApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$mailV1SchemaCreateMailboxRequestSchema = new \Hostinger\Model\MailV1SchemaCreateMailboxRequestSchema(); // \Hostinger\Model\MailV1SchemaCreateMailboxRequestSchema

try {
    $result = $apiInstance->createMailboxV1($orderId, $mailV1SchemaCreateMailboxRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailMailboxesApi->createMailboxV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **mailV1SchemaCreateMailboxRequestSchema** | [**\Hostinger\Model\MailV1SchemaCreateMailboxRequestSchema**](../Model/MailV1SchemaCreateMailboxRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1MailboxesMailboxResource**](../Model/MailV1MailboxesMailboxResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMailboxV1()`

```php
deleteMailboxV1($mailboxId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete mailbox

Delete a mailbox. The mailbox is soft-deleted and stays restorable for a limited period before it is permanently removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailMailboxesApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID

try {
    $result = $apiInstance->deleteMailboxV1($mailboxId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailMailboxesApi->deleteMailboxV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMailboxesV1()`

```php
listMailboxesV1($orderId, $search, $sort, $page, $perPage): \Hostinger\Model\MailListMailboxesV1200Response
```

List mailboxes

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
    $result = $apiInstance->listMailboxesV1($orderId, $search, $sort, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailMailboxesApi->listMailboxesV1: ', $e->getMessage(), PHP_EOL;
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

[**\Hostinger\Model\MailListMailboxesV1200Response**](../Model/MailListMailboxesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
