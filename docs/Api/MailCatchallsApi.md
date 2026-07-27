# Hostinger\MailCatchallsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCatchAllV1()**](MailCatchallsApi.md#createCatchAllV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/catchalls | Create catch-all |
| [**deleteCatchAllV1()**](MailCatchallsApi.md#deleteCatchAllV1) | **DELETE** /api/mail/v1/catchalls/{catchallId} | Delete catch-all |
| [**listCatchAllsV1()**](MailCatchallsApi.md#listCatchAllsV1) | **GET** /api/mail/v1/orders/{orderId}/catchalls | List catch-alls |
| [**resendCatchAllConfirmationV1()**](MailCatchallsApi.md#resendCatchAllConfirmationV1) | **POST** /api/mail/v1/catchalls/{catchallId}/confirmation/resend | Resend catch-all confirmation |


## `createCatchAllV1()`

```php
createCatchAllV1($mailboxId): \Hostinger\Model\MailV1CatchallsCatchallResource
```

Create catch-all

Create a catch-all that routes all messages sent to unknown addresses of the domain to the given mailbox. The mailbox address receives a confirmation email and the catch-all becomes active only after it is confirmed. A domain can have only one catch-all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailCatchallsApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID

try {
    $result = $apiInstance->createCatchAllV1($mailboxId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailCatchallsApi->createCatchAllV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |

### Return type

[**\Hostinger\Model\MailV1CatchallsCatchallResource**](../Model/MailV1CatchallsCatchallResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCatchAllV1()`

```php
deleteCatchAllV1($catchallId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete catch-all

Delete a catch-all. Messages sent to unknown addresses of the domain are no longer routed to the mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailCatchallsApi(config: $config);
$catchallId = CA1a2b3c4d5e6f7g; // string | Catch-all resource ID

try {
    $result = $apiInstance->deleteCatchAllV1($catchallId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailCatchallsApi->deleteCatchAllV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catchallId** | **string**| Catch-all resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCatchAllsV1()`

```php
listCatchAllsV1($orderId, $page, $perPage): \Hostinger\Model\MailListCatchAllsV1200Response
```

List catch-alls

Retrieve a paginated list of catch-alls across all mailboxes of a mail order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailCatchallsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listCatchAllsV1($orderId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailCatchallsApi->listCatchAllsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListCatchAllsV1200Response**](../Model/MailListCatchAllsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendCatchAllConfirmationV1()`

```php
resendCatchAllConfirmationV1($catchallId): \Hostinger\Model\CommonSuccessEmptyResource
```

Resend catch-all confirmation

Resend the confirmation email to the mailbox address of an unconfirmed catch-all.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailCatchallsApi(config: $config);
$catchallId = CA1a2b3c4d5e6f7g; // string | Catch-all resource ID

try {
    $result = $apiInstance->resendCatchAllConfirmationV1($catchallId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailCatchallsApi->resendCatchAllConfirmationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catchallId** | **string**| Catch-all resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
