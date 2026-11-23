# Hostinger\EcommerceWebhooksApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAnEcommerceWebhookV1()**](EcommerceWebhooksApi.md#createAnEcommerceWebhookV1) | **POST** /api/ecommerce/v1/stores/{store_id}/webhooks | Create an ecommerce webhook |
| [**deleteAnEcommerceWebhookV1()**](EcommerceWebhooksApi.md#deleteAnEcommerceWebhookV1) | **DELETE** /api/ecommerce/v1/stores/{store_id}/webhooks/{endpoint_id} | Delete an ecommerce webhook |
| [**getAnEcommerceWebhookV1()**](EcommerceWebhooksApi.md#getAnEcommerceWebhookV1) | **GET** /api/ecommerce/v1/stores/{store_id}/webhooks/{endpoint_id} | Get an ecommerce webhook |
| [**listEcommerceWebhooksV1()**](EcommerceWebhooksApi.md#listEcommerceWebhooksV1) | **GET** /api/ecommerce/v1/stores/{store_id}/webhooks | List ecommerce webhooks |
| [**rotateAnEcommerceWebhookSecretV1()**](EcommerceWebhooksApi.md#rotateAnEcommerceWebhookSecretV1) | **POST** /api/ecommerce/v1/stores/{store_id}/webhooks/{endpoint_id}/rotate-secret | Rotate an ecommerce webhook secret |
| [**updateAnEcommerceWebhookV1()**](EcommerceWebhooksApi.md#updateAnEcommerceWebhookV1) | **PATCH** /api/ecommerce/v1/stores/{store_id}/webhooks/{endpoint_id} | Update an ecommerce webhook |


## `createAnEcommerceWebhookV1()`

```php
createAnEcommerceWebhookV1($storeId, $ecommerceV1WebhookStoreRequest): \Hostinger\Model\EcommerceV1WebhookWebhookCreationResource
```

Create an ecommerce webhook

Create an enabled subscription for your store to receive ecommerce events in external automation systems. Save the whsec_ signing secret securely; it is returned once. Up to ten endpoints, including disabled endpoints, may exist per store. Deliveries follow Standard Webhooks: verify the webhook-id, webhook-timestamp and webhook-signature headers against the raw body with an official Standard Webhooks library before parsing. Events can arrive out of order or more than once; deduplicate by event id.  400: the URL is not a public destination, or webhook_sales_channel_invalid (a channel ID does not belong to this store). 409 codes: webhook_endpoint_limit_reached, webhook_store_inactive, webhook_endpoint_catalog_busy (a catalog change is in progress; retry). Errors return the upstream code in `message`, as `[Ecommerce:<code>] <reason>`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.
$ecommerceV1WebhookStoreRequest = new \Hostinger\Model\EcommerceV1WebhookStoreRequest(); // \Hostinger\Model\EcommerceV1WebhookStoreRequest

try {
    $result = $apiInstance->createAnEcommerceWebhookV1($storeId, $ecommerceV1WebhookStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->createAnEcommerceWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |
| **ecommerceV1WebhookStoreRequest** | [**\Hostinger\Model\EcommerceV1WebhookStoreRequest**](../Model/EcommerceV1WebhookStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1WebhookWebhookCreationResource**](../Model/EcommerceV1WebhookWebhookCreationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnEcommerceWebhookV1()`

```php
deleteAnEcommerceWebhookV1($storeId, $endpointId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete an ecommerce webhook

Delete a subscription owned by your store, retaining delivery audit records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.
$endpointId = whep_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | Webhook endpoint ID belonging to this store.

try {
    $result = $apiInstance->deleteAnEcommerceWebhookV1($storeId, $endpointId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->deleteAnEcommerceWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |
| **endpointId** | **string**| Webhook endpoint ID belonging to this store. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEcommerceWebhookV1()`

```php
getAnEcommerceWebhookV1($storeId, $endpointId): \Hostinger\Model\EcommerceV1WebhookWebhookResource
```

Get an ecommerce webhook

Get a subscription owned by your store, without signing secrets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.
$endpointId = whep_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | Webhook endpoint ID belonging to this store.

try {
    $result = $apiInstance->getAnEcommerceWebhookV1($storeId, $endpointId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->getAnEcommerceWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |
| **endpointId** | **string**| Webhook endpoint ID belonging to this store. | |

### Return type

[**\Hostinger\Model\EcommerceV1WebhookWebhookResource**](../Model/EcommerceV1WebhookWebhookResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEcommerceWebhooksV1()`

```php
listEcommerceWebhooksV1($storeId): \Hostinger\Model\EcommerceV1WebhookWebhookListResource
```

List ecommerce webhooks

List your store's subscriptions for external automation systems, without signing secrets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.

try {
    $result = $apiInstance->listEcommerceWebhooksV1($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->listEcommerceWebhooksV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |

### Return type

[**\Hostinger\Model\EcommerceV1WebhookWebhookListResource**](../Model/EcommerceV1WebhookWebhookListResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotateAnEcommerceWebhookSecretV1()`

```php
rotateAnEcommerceWebhookSecretV1($storeId, $endpointId): \Hostinger\Model\EcommerceV1WebhookWebhookSecretResource
```

Rotate an ecommerce webhook secret

Explicitly rotate the signing secret of an enabled endpoint on an active store. Save the new secret securely. Prior secrets retain their original 24-hour overlap deadlines. Repeated calls create distinct secrets, up to five live secrets. Wait for an old secret to expire at the limit. After a lost response, explicitly rotate again; stored secrets cannot be retrieved. No daily renewal is required.  409 codes: webhook_endpoint_disabled (endpoint is disabled or revoked), webhook_store_inactive, webhook_secret_rotation_limit_reached (five live secrets). Errors return the upstream code in `message`, as `[Ecommerce:<code>] <reason>`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.
$endpointId = whep_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | Webhook endpoint ID belonging to this store.

try {
    $result = $apiInstance->rotateAnEcommerceWebhookSecretV1($storeId, $endpointId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->rotateAnEcommerceWebhookSecretV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |
| **endpointId** | **string**| Webhook endpoint ID belonging to this store. | |

### Return type

[**\Hostinger\Model\EcommerceV1WebhookWebhookSecretResource**](../Model/EcommerceV1WebhookWebhookSecretResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnEcommerceWebhookV1()`

```php
updateAnEcommerceWebhookV1($storeId, $endpointId, $ecommerceV1WebhookUpdateRequest): \Hostinger\Model\EcommerceV1WebhookWebhookResource
```

Update an ecommerce webhook

Change the receiver, events, channel filter or enabled state. Omitted fields are preserved; a null channel filter restores store-wide delivery. Endpoints disabled automatically after a 410 Gone (receiver_gone) or persistent delivery failures (receiver_failing) resume with enabled: true; events from the disabled period are not sent. Lifecycle-revoked endpoints cannot be enabled again: delete them and create fresh subscriptions after recovery.  400 codes: webhook_destination_not_allowed (the new URL, or the saved URL when enabling, is not a public destination), webhook_sales_channel_invalid. 409 codes: webhook_endpoint_revoked, webhook_store_inactive, webhook_endpoint_catalog_busy (retry). Errors return the upstream code in `message`, as `[Ecommerce:<code>] <reason>`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\EcommerceWebhooksApi(config: $config);
$storeId = store_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | ID of the store owned by your account.
$endpointId = whep_01J8Z5F8W9K8M4A7B3C2D1E0FG; // string | Webhook endpoint ID belonging to this store.
$ecommerceV1WebhookUpdateRequest = new \Hostinger\Model\EcommerceV1WebhookUpdateRequest(); // \Hostinger\Model\EcommerceV1WebhookUpdateRequest

try {
    $result = $apiInstance->updateAnEcommerceWebhookV1($storeId, $endpointId, $ecommerceV1WebhookUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcommerceWebhooksApi->updateAnEcommerceWebhookV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storeId** | **string**| ID of the store owned by your account. | |
| **endpointId** | **string**| Webhook endpoint ID belonging to this store. | |
| **ecommerceV1WebhookUpdateRequest** | [**\Hostinger\Model\EcommerceV1WebhookUpdateRequest**](../Model/EcommerceV1WebhookUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\EcommerceV1WebhookWebhookResource**](../Model/EcommerceV1WebhookWebhookResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
