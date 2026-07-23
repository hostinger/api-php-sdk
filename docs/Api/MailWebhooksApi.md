# Hostinger\MailWebhooksApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookV1()**](MailWebhooksApi.md#createWebhookV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/webhooks | Create webhook |


## `createWebhookV1()`

```php
createWebhookV1($mailboxId, $mailV1SchemaCreateWebhookRequestSchema): \Hostinger\Model\MailV1WebhooksWebhookResource
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

[**\Hostinger\Model\MailV1WebhooksWebhookResource**](../Model/MailV1WebhooksWebhookResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
