# Hostinger\MailAliasesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAliasV1()**](MailAliasesApi.md#createAliasV1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/aliases | Create alias |
| [**deleteAliasV1()**](MailAliasesApi.md#deleteAliasV1) | **DELETE** /api/mail/v1/aliases/{aliasId} | Delete alias |
| [**listAliasesV1()**](MailAliasesApi.md#listAliasesV1) | **GET** /api/mail/v1/orders/{orderId}/aliases | List aliases |


## `createAliasV1()`

```php
createAliasV1($mailboxId, $mailV1SchemaCreateAliasRequestSchema): \Hostinger\Model\MailV1AliasesAliasResource
```

Create alias

Create an alias for the given mailbox. The alias address is formed from the given local part and the domain of the mailbox. Messages sent to the alias are delivered to the mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAliasesApi(config: $config);
$mailboxId = AC1a2b3c4d5e6f7g; // string | Mailbox resource ID
$mailV1SchemaCreateAliasRequestSchema = new \Hostinger\Model\MailV1SchemaCreateAliasRequestSchema(); // \Hostinger\Model\MailV1SchemaCreateAliasRequestSchema

try {
    $result = $apiInstance->createAliasV1($mailboxId, $mailV1SchemaCreateAliasRequestSchema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAliasesApi->createAliasV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailboxId** | **string**| Mailbox resource ID | |
| **mailV1SchemaCreateAliasRequestSchema** | [**\Hostinger\Model\MailV1SchemaCreateAliasRequestSchema**](../Model/MailV1SchemaCreateAliasRequestSchema.md)|  | |

### Return type

[**\Hostinger\Model\MailV1AliasesAliasResource**](../Model/MailV1AliasesAliasResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAliasV1()`

```php
deleteAliasV1($aliasId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete alias

Delete an alias. Messages sent to the alias address are no longer delivered to the mailbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAliasesApi(config: $config);
$aliasId = AA1a2b3c4d5e6f7g; // string | Alias resource ID

try {
    $result = $apiInstance->deleteAliasV1($aliasId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAliasesApi->deleteAliasV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aliasId** | **string**| Alias resource ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAliasesV1()`

```php
listAliasesV1($orderId, $page, $perPage): \Hostinger\Model\MailListAliasesV1200Response
```

List aliases

Retrieve a paginated list of aliases across all mailboxes of a mail order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailAliasesApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAliasesV1($orderId, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailAliasesApi->listAliasesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListAliasesV1200Response**](../Model/MailListAliasesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
