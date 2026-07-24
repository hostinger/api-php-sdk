# Hostinger\MailForwardersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createForwarderV1()**](MailForwardersApi.md#createForwarderV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/forwarders | Create forwarder |
| [**deleteForwarderV1()**](MailForwardersApi.md#deleteForwarderV1) | **DELETE** /api/mail/v1/forwarders/{forwarderId} | Delete forwarder |
| [**listForwardersV1()**](MailForwardersApi.md#listForwardersV1) | **GET** /api/mail/v1/orders/{orderId}/forwarders | List forwarders |
| [**resendForwarderConfirmationV1()**](MailForwardersApi.md#resendForwarderConfirmationV1) | **POST** /api/mail/v1/forwarders/{forwarderId}/confirmation/resend | Resend forwarder confirmation |
| [**updateForwarderKeepCopySettingV1()**](MailForwardersApi.md#updateForwarderKeepCopySettingV1) | **PATCH** /api/mail/v1/forwarders/{forwarderId}/keep-copy | Update forwarder keep-copy setting |


## `createForwarderV1()`

```php
createForwarderV1($mailboxId, $mailV1SchemaCreateForwarderRequestSchema): \Hostinger\Model\MailV1ForwardersForwarderResource
```

Create forwarder

Create a forwarder from the given mailbox to the destination address. The destination receives a confirmation email and forwarding becomes active only after it is confirmed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailForwardersApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID
$mailV1SchemaCreateForwarderRequestSchema = new \Hostinger\Model\MailV1SchemaCreateForwarderRequestSchema(); // \Hostinger\Model\MailV1SchemaCreateForwarderRequestSchema

try {
    $result = $apiInstance->createForwarderV1($mailboxId, $mailV1SchemaCreateForwarderRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailForwardersApi->createForwarderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |
| **mailV1SchemaCreateForwarderRequestSchema** | [**\Hostinger\Model\MailV1SchemaCreateForwarderRequestSchema**](../Model/MailV1SchemaCreateForwarderRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1ForwardersForwarderResource**](../Model/MailV1ForwardersForwarderResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteForwarderV1()`

```php
deleteForwarderV1($forwarderId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete forwarder

Delete a forwarder. The mailbox stops forwarding messages to the destination address immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailForwardersApi(config: $config);
$forwarderId = FW1a2b3c4d5e6f7g; // string | Forwarder resource ID

try {
    $result = $apiInstance->deleteForwarderV1($forwarderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailForwardersApi->deleteForwarderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forwarderId** | **string**| Forwarder resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listForwardersV1()`

```php
listForwardersV1($orderId, $page, $perPage): \Hostinger\Model\MailListForwardersV1200Response
```

List forwarders

Retrieve a paginated list of forwarders across all mailboxes of a mail order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailForwardersApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listForwardersV1($orderId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailForwardersApi->listForwardersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListForwardersV1200Response**](../Model/MailListForwardersV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendForwarderConfirmationV1()`

```php
resendForwarderConfirmationV1($forwarderId): \Hostinger\Model\CommonSuccessEmptyResource
```

Resend forwarder confirmation

Resend the confirmation email to the destination address of an unconfirmed forwarder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailForwardersApi(config: $config);
$forwarderId = FW1a2b3c4d5e6f7g; // string | Forwarder resource ID

try {
    $result = $apiInstance->resendForwarderConfirmationV1($forwarderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailForwardersApi->resendForwarderConfirmationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forwarderId** | **string**| Forwarder resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateForwarderKeepCopySettingV1()`

```php
updateForwarderKeepCopySettingV1($forwarderId, $mailV1SchemaUpdateForwarderKeepCopyRequestSchema): \Hostinger\Model\CommonSuccessEmptyResource
```

Update forwarder keep-copy setting

Enable or disable keeping a copy of forwarded messages in the mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailForwardersApi(config: $config);
$forwarderId = FW1a2b3c4d5e6f7g; // string | Forwarder resource ID
$mailV1SchemaUpdateForwarderKeepCopyRequestSchema = new \Hostinger\Model\MailV1SchemaUpdateForwarderKeepCopyRequestSchema(); // \Hostinger\Model\MailV1SchemaUpdateForwarderKeepCopyRequestSchema

try {
    $result = $apiInstance->updateForwarderKeepCopySettingV1($forwarderId, $mailV1SchemaUpdateForwarderKeepCopyRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailForwardersApi->updateForwarderKeepCopySettingV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forwarderId** | **string**| Forwarder resource ID | |
| **mailV1SchemaUpdateForwarderKeepCopyRequestSchema** | [**\Hostinger\Model\MailV1SchemaUpdateForwarderKeepCopyRequestSchema**](../Model/MailV1SchemaUpdateForwarderKeepCopyRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
