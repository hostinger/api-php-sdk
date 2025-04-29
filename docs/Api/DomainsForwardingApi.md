# Hostinger\DomainsForwardingApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createForwardingDataV1()**](DomainsForwardingApi.md#createForwardingDataV1) | **POST** /api/domains/v1/forwarding | Create forwarding data |
| [**deleteForwardingDataV1()**](DomainsForwardingApi.md#deleteForwardingDataV1) | **DELETE** /api/domains/v1/forwarding/{domain} | Delete forwarding data |
| [**getForwardingDataV1()**](DomainsForwardingApi.md#getForwardingDataV1) | **GET** /api/domains/v1/forwarding/{domain} | Get forwarding data |


## `createForwardingDataV1()`

```php
createForwardingDataV1($domainsV1ForwardingStoreRequest): \Hostinger\Model\DomainsV1ForwardingForwardingResource
```

Create forwarding data

This endpoint creates domain forwarding data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domainsV1ForwardingStoreRequest = new \Hostinger\Model\DomainsV1ForwardingStoreRequest(); // \Hostinger\Model\DomainsV1ForwardingStoreRequest

try {
    $result = $apiInstance->createForwardingDataV1($domainsV1ForwardingStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->createForwardingDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1ForwardingStoreRequest** | [**\Hostinger\Model\DomainsV1ForwardingStoreRequest**](../Model/DomainsV1ForwardingStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1ForwardingForwardingResource**](../Model/DomainsV1ForwardingForwardingResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteForwardingDataV1()`

```php
deleteForwardingDataV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete forwarding data

This endpoint deletes domain forwarding data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->deleteForwardingDataV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->deleteForwardingDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForwardingDataV1()`

```php
getForwardingDataV1($domain): \Hostinger\Model\DomainsV1ForwardingForwardingResource
```

Get forwarding data

This endpoint retrieves domain forwarding data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getForwardingDataV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->getForwardingDataV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DomainsV1ForwardingForwardingResource**](../Model/DomainsV1ForwardingForwardingResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
