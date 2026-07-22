# Hostinger\DomainsForwardingApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomainForwardingV1()**](DomainsForwardingApi.md#createDomainForwardingV1) | **POST** /api/domains/v1/forwarding | Create domain forwarding |
| [**deleteDomainForwardingV1()**](DomainsForwardingApi.md#deleteDomainForwardingV1) | **DELETE** /api/domains/v1/forwarding/{domain} | Delete domain forwarding |
| [**getDomainForwardingV1()**](DomainsForwardingApi.md#getDomainForwardingV1) | **GET** /api/domains/v1/forwarding/{domain} | Get domain forwarding |
| [**updateDomainForwardingV1()**](DomainsForwardingApi.md#updateDomainForwardingV1) | **PUT** /api/domains/v1/forwarding/{domain} | Update domain forwarding |


## `createDomainForwardingV1()`

```php
createDomainForwardingV1($domainsV1ForwardingStoreRequest): \Hostinger\Model\DomainsV1ForwardingForwardingResource
```

Create domain forwarding

Create domain forwarding configuration.  Use this endpoint to set up domain redirects to other URLs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domainsV1ForwardingStoreRequest = new \Hostinger\Model\DomainsV1ForwardingStoreRequest(); // \Hostinger\Model\DomainsV1ForwardingStoreRequest

try {
    $result = $apiInstance->createDomainForwardingV1($domainsV1ForwardingStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->createDomainForwardingV1: ', $e->getMessage(), PHP_EOL;
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

## `deleteDomainForwardingV1()`

```php
deleteDomainForwardingV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete domain forwarding

Delete domain forwarding data.  Use this endpoint to remove redirect configuration from domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->deleteDomainForwardingV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->deleteDomainForwardingV1: ', $e->getMessage(), PHP_EOL;
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

## `getDomainForwardingV1()`

```php
getDomainForwardingV1($domain): \Hostinger\Model\DomainsV1ForwardingForwardingResource
```

Get domain forwarding

Retrieve domain forwarding data.  Use this endpoint to view current redirect configuration for domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getDomainForwardingV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->getDomainForwardingV1: ', $e->getMessage(), PHP_EOL;
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

## `updateDomainForwardingV1()`

```php
updateDomainForwardingV1($domain, $domainsV1ForwardingUpdateRequest): \Hostinger\Model\DomainsV1ForwardingForwardingResource
```

Update domain forwarding

Update domain forwarding configuration.  Use this endpoint to modify existing redirect configuration for domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsForwardingApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$domainsV1ForwardingUpdateRequest = new \Hostinger\Model\DomainsV1ForwardingUpdateRequest(); // \Hostinger\Model\DomainsV1ForwardingUpdateRequest

try {
    $result = $apiInstance->updateDomainForwardingV1($domain, $domainsV1ForwardingUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsForwardingApi->updateDomainForwardingV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **domainsV1ForwardingUpdateRequest** | [**\Hostinger\Model\DomainsV1ForwardingUpdateRequest**](../Model/DomainsV1ForwardingUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1ForwardingForwardingResource**](../Model/DomainsV1ForwardingForwardingResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
