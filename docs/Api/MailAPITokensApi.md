# Hostinger\MailAPITokensApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAPITokenV1()**](MailAPITokensApi.md#createAPITokenV1) | **POST** /api/mail/v1/orders/{orderId}/api-tokens | Create API token |
| [**listAPITokensV1()**](MailAPITokensApi.md#listAPITokensV1) | **GET** /api/mail/v1/api-tokens | List API tokens |
| [**revokeAPITokenV1()**](MailAPITokensApi.md#revokeAPITokenV1) | **DELETE** /api/mail/v1/api-tokens/{tokenId} | Revoke API token |


## `createAPITokenV1()`

```php
createAPITokenV1($orderId, $mailV1SchemaCreateApiTokenRequestSchema): \Hostinger\Model\MailV1ApiTokensApiTokenCreatedResource
```

Create API token

Create an API token for the given mail order. The token grants access to the [Hostinger Email API](https://api.mail.hostinger.com/), where you can provision and manage the mailboxes it is scoped to.  The plaintext token is returned only in this response, never again. A maximum of 10 tokens can exist per order. Use `scope.has_all_mailboxes` to cover all current and future mailboxes, or list specific mailboxes in `scope.mailbox_ids`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAPITokensApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$mailV1SchemaCreateApiTokenRequestSchema = new \Hostinger\Model\MailV1SchemaCreateApiTokenRequestSchema(); // \Hostinger\Model\MailV1SchemaCreateApiTokenRequestSchema

try {
    $result = $apiInstance->createAPITokenV1($orderId, $mailV1SchemaCreateApiTokenRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAPITokensApi->createAPITokenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **mailV1SchemaCreateApiTokenRequestSchema** | [**\Hostinger\Model\MailV1SchemaCreateApiTokenRequestSchema**](../Model/MailV1SchemaCreateApiTokenRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1ApiTokensApiTokenCreatedResource**](../Model/MailV1ApiTokensApiTokenCreatedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAPITokensV1()`

```php
listAPITokensV1($orderId, $page, $perPage): \Hostinger\Model\MailListAPITokensV1200Response
```

List API tokens

Retrieve a paginated list of [Hostinger Email API](https://api.mail.hostinger.com/) tokens across all your mail orders, optionally filtered by order. Plaintext tokens are never included; they are returned only when a token is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAPITokensApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g,OR9z8y7x6w5v4u3t; // string | Filter tokens by order resource ID. Single value or comma-separated list.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAPITokensV1($orderId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAPITokensApi->listAPITokensV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Filter tokens by order resource ID. Single value or comma-separated list. | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListAPITokensV1200Response**](../Model/MailListAPITokensV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAPITokenV1()`

```php
revokeAPITokenV1($tokenId): \Hostinger\Model\CommonSuccessEmptyResource
```

Revoke API token

Revoke an API token. The token immediately loses access to the [Hostinger Email API](https://api.mail.hostinger.com/). This action cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAPITokensApi(config: $config);
$tokenId = 019683f8-1234-7abc-8def-0123456789ab; // string | API token ID (returned when the token was created)

try {
    $result = $apiInstance->revokeAPITokenV1($tokenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAPITokensApi->revokeAPITokenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tokenId** | **string**| API token ID (returned when the token was created) | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
