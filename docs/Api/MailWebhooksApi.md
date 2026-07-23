# Hostinger\MailWebhooksApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookV1()**](MailWebhooksApi.md#createWebhookV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/webhooks | Create webhook |
| [**deleteWebhookV1()**](MailWebhooksApi.md#deleteWebhookV1) | **DELETE** /api/mail/v1/webhooks/{webhookId} | Delete webhook |
| [**getWebhookV1()**](MailWebhooksApi.md#getWebhookV1) | **GET** /api/mail/v1/webhooks/{webhookId} | Get webhook |
| [**listWebhookDeliveryLogsV1()**](MailWebhooksApi.md#listWebhookDeliveryLogsV1) | **GET** /api/mail/v1/orders/{orderId}/webhooks/delivery-logs | List webhook delivery logs |
| [**listWebhooksV1()**](MailWebhooksApi.md#listWebhooksV1) | **GET** /api/mail/v1/orders/{orderId}/webhooks | List webhooks |
| [**regenerateWebhookSecretV1()**](MailWebhooksApi.md#regenerateWebhookSecretV1) | **POST** /api/mail/v1/webhooks/{webhookId}/regenerate-secret | Regenerate webhook secret |
| [**testWebhookV1()**](MailWebhooksApi.md#testWebhookV1) | **POST** /api/mail/v1/webhooks/{webhookId}/test | Test webhook |
| [**updateWebhookV1()**](MailWebhooksApi.md#updateWebhookV1) | **PATCH** /api/mail/v1/webhooks/{webhookId} | Update webhook |


## `createWebhookV1()`

```php
createWebhookV1($mailboxId, $mailV1SchemaCreateWebhookRequestSchema): \Hostinger\Model\MailV1WebhooksWebhookCreatedResource
```

Create webhook

Create a webhook for the given mailbox. The generated secret is returned only in this response and is sent as a bearer token with every delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID
$mailV1SchemaCreateWebhookRequestSchema = new \Hostinger\Model\MailV1SchemaCreateWebhookRequestSchema(); // \Hostinger\Model\MailV1SchemaCreateWebhookRequestSchema

try {
    $result = $apiInstance->createWebhookV1($mailboxId, $mailV1SchemaCreateWebhookRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->createWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |
| **mailV1SchemaCreateWebhookRequestSchema** | [**\Hostinger\Model\MailV1SchemaCreateWebhookRequestSchema**](../Model/MailV1SchemaCreateWebhookRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1WebhooksWebhookCreatedResource**](../Model/MailV1WebhooksWebhookCreatedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookV1()`

```php
deleteWebhookV1($webhookId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete webhook

Permanently delete a webhook. This action cannot be undone. After deletion the URL no longer receives event notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$webhookId = 019683f8-1234-7abc-8def-0123456789ab; // string | Webhook ID (returned when the webhook was created)

try {
    $result = $apiInstance->deleteWebhookV1($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->deleteWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookId** | **string**| Webhook ID (returned when the webhook was created) | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookV1()`

```php
getWebhookV1($webhookId): \Hostinger\Model\MailV1WebhooksWebhookResource
```

Get webhook

Retrieve the details of a single webhook. The webhook secret is never included; it is returned only when a webhook is created or its secret is regenerated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$webhookId = 019683f8-1234-7abc-8def-0123456789ab; // string | Webhook ID (returned when the webhook was created)

try {
    $result = $apiInstance->getWebhookV1($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->getWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookId** | **string**| Webhook ID (returned when the webhook was created) | |

### Return type

[**\Hostinger\Model\MailV1WebhooksWebhookResource**](../Model/MailV1WebhooksWebhookResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookDeliveryLogsV1()`

```php
listWebhookDeliveryLogsV1($orderId, $mailboxId, $page, $perPage): \Hostinger\Model\MailListWebhookDeliveryLogsV1200Response
```

List webhook delivery logs

Retrieve a paginated list of webhook delivery logs for the given mail order, including delivery outcome, duration, and retry counts. Supports filtering by mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$mailboxId = AC1a2b3c4d5e6f7g; // string | Filter by the mailbox resource ID the webhooks are attached to
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listWebhookDeliveryLogsV1($orderId, $mailboxId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->listWebhookDeliveryLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **mailboxId** | **string**| Filter by the mailbox resource ID the webhooks are attached to | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListWebhookDeliveryLogsV1200Response**](../Model/MailListWebhookDeliveryLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooksV1()`

```php
listWebhooksV1($orderId, $mailboxId, $status, $page, $perPage): \Hostinger\Model\MailListWebhooksV1200Response
```

List webhooks

Retrieve a paginated list of webhooks belonging to the given mail order. Supports filtering by mailbox and status. The webhook secret is never included; it is returned only when a webhook is created or its secret is regenerated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$mailboxId = AC1a2b3c4d5e6f7g; // string | Filter by the mailbox resource ID the webhooks are attached to
$status = active; // string | Filter webhooks by status
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listWebhooksV1($orderId, $mailboxId, $status, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->listWebhooksV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **mailboxId** | **string**| Filter by the mailbox resource ID the webhooks are attached to | [optional] |
| **status** | **string**| Filter webhooks by status | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListWebhooksV1200Response**](../Model/MailListWebhooksV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateWebhookSecretV1()`

```php
regenerateWebhookSecretV1($webhookId): \Hostinger\Model\MailV1WebhooksWebhookSecretResource
```

Regenerate webhook secret

Regenerate the secret of a webhook. The previous secret is immediately invalidated. The new secret is returned only in this response and is sent as a bearer token with every delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$webhookId = 019683f8-1234-7abc-8def-0123456789ab; // string | Webhook ID (returned when the webhook was created)

try {
    $result = $apiInstance->regenerateWebhookSecretV1($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->regenerateWebhookSecretV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookId** | **string**| Webhook ID (returned when the webhook was created) | |

### Return type

[**\Hostinger\Model\MailV1WebhooksWebhookSecretResource**](../Model/MailV1WebhooksWebhookSecretResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testWebhookV1()`

```php
testWebhookV1($webhookId): \Hostinger\Model\MailV1WebhooksWebhookTestResultResource
```

Test webhook

Send a test delivery to the webhook URL and return the result. Test requests are rate limited upstream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$webhookId = 019683f8-1234-7abc-8def-0123456789ab; // string | Webhook ID (returned when the webhook was created)

try {
    $result = $apiInstance->testWebhookV1($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->testWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookId** | **string**| Webhook ID (returned when the webhook was created) | |

### Return type

[**\Hostinger\Model\MailV1WebhooksWebhookTestResultResource**](../Model/MailV1WebhooksWebhookTestResultResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookV1()`

```php
updateWebhookV1($webhookId, $mailV1SchemaUpdateWebhookRequestSchema): \Hostinger\Model\MailV1WebhooksWebhookResource
```

Update webhook

Partially update a webhook. Only the fields included in the request body are changed; omitted fields retain their current values. Pass `\"description\": null` to clear the description.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailWebhooksApi(config: $config);
$webhookId = 019683f8-1234-7abc-8def-0123456789ab; // string | Webhook ID (returned when the webhook was created)
$mailV1SchemaUpdateWebhookRequestSchema = new \Hostinger\Model\MailV1SchemaUpdateWebhookRequestSchema(); // \Hostinger\Model\MailV1SchemaUpdateWebhookRequestSchema

try {
    $result = $apiInstance->updateWebhookV1($webhookId, $mailV1SchemaUpdateWebhookRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailWebhooksApi->updateWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookId** | **string**| Webhook ID (returned when the webhook was created) | |
| **mailV1SchemaUpdateWebhookRequestSchema** | [**\Hostinger\Model\MailV1SchemaUpdateWebhookRequestSchema**](../Model/MailV1SchemaUpdateWebhookRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1WebhooksWebhookResource**](../Model/MailV1WebhooksWebhookResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
