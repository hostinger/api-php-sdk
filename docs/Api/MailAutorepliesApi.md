# Hostinger\MailAutorepliesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAutoreplyV1()**](MailAutorepliesApi.md#createAutoreplyV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/autoreplies | Create autoreply |
| [**deleteAutoreplyV1()**](MailAutorepliesApi.md#deleteAutoreplyV1) | **DELETE** /api/mail/v1/autoreplies/{autoreplyId} | Delete autoreply |
| [**listAutorepliesV1()**](MailAutorepliesApi.md#listAutorepliesV1) | **GET** /api/mail/v1/orders/{orderId}/autoreplies | List autoreplies |
| [**updateAutoreplyV1()**](MailAutorepliesApi.md#updateAutoreplyV1) | **PUT** /api/mail/v1/autoreplies/{autoreplyId} | Update autoreply |


## `createAutoreplyV1()`

```php
createAutoreplyV1($mailboxId, $mailV1SchemaUpsertAutoreplyRequestSchema): \Hostinger\Model\MailV1AutorepliesAutoreplyResource
```

Create autoreply

Create an automatic reply for the given mailbox. A mailbox can have only one autoreply. Omit `starts_at` to activate the autoreply immediately and omit `ends_at` to keep it active indefinitely.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAutorepliesApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID
$mailV1SchemaUpsertAutoreplyRequestSchema = new \Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema(); // \Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema

try {
    $result = $apiInstance->createAutoreplyV1($mailboxId, $mailV1SchemaUpsertAutoreplyRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAutorepliesApi->createAutoreplyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |
| **mailV1SchemaUpsertAutoreplyRequestSchema** | [**\Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema**](../Model/MailV1SchemaUpsertAutoreplyRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1AutorepliesAutoreplyResource**](../Model/MailV1AutorepliesAutoreplyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutoreplyV1()`

```php
deleteAutoreplyV1($autoreplyId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete autoreply

Delete the autoreply of a mailbox. The mailbox stops sending automatic replies immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAutorepliesApi(config: $config);
$autoreplyId = AR1a2b3c4d5e6f7g; // string | Autoreply resource ID

try {
    $result = $apiInstance->deleteAutoreplyV1($autoreplyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAutorepliesApi->deleteAutoreplyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoreplyId** | **string**| Autoreply resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutorepliesV1()`

```php
listAutorepliesV1($orderId, $page, $perPage): \Hostinger\Model\MailListAutorepliesV1200Response
```

List autoreplies

Retrieve a paginated list of autoreplies across all mailboxes of a mail order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAutorepliesApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAutorepliesV1($orderId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAutorepliesApi->listAutorepliesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListAutorepliesV1200Response**](../Model/MailListAutorepliesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoreplyV1()`

```php
updateAutoreplyV1($autoreplyId, $mailV1SchemaUpsertAutoreplyRequestSchema): \Hostinger\Model\MailV1AutorepliesAutoreplyResource
```

Update autoreply

Replace the autoreply with the given content and schedule. Omitted optional fields are cleared: omit `starts_at` to activate the autoreply immediately and omit `ends_at` to keep it active indefinitely.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAutorepliesApi(config: $config);
$autoreplyId = AR1a2b3c4d5e6f7g; // string | Autoreply resource ID
$mailV1SchemaUpsertAutoreplyRequestSchema = new \Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema(); // \Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema

try {
    $result = $apiInstance->updateAutoreplyV1($autoreplyId, $mailV1SchemaUpsertAutoreplyRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAutorepliesApi->updateAutoreplyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoreplyId** | **string**| Autoreply resource ID | |
| **mailV1SchemaUpsertAutoreplyRequestSchema** | [**\Hostinger\Model\MailV1SchemaUpsertAutoreplyRequestSchema**](../Model/MailV1SchemaUpsertAutoreplyRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1AutorepliesAutoreplyResource**](../Model/MailV1AutorepliesAutoreplyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
