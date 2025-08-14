# Hostinger\DomainsWHOISApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWHOISProfileV1()**](DomainsWHOISApi.md#createWHOISProfileV1) | **POST** /api/domains/v1/whois | Create WHOIS profile |
| [**deleteWHOISProfileV1()**](DomainsWHOISApi.md#deleteWHOISProfileV1) | **DELETE** /api/domains/v1/whois/{whoisId} | Delete WHOIS profile |
| [**getWHOISProfileListV1()**](DomainsWHOISApi.md#getWHOISProfileListV1) | **GET** /api/domains/v1/whois | Get WHOIS profile list |
| [**getWHOISProfileUsageV1()**](DomainsWHOISApi.md#getWHOISProfileUsageV1) | **GET** /api/domains/v1/whois/{whoisId}/usage | Get WHOIS profile usage |
| [**getWHOISProfileV1()**](DomainsWHOISApi.md#getWHOISProfileV1) | **GET** /api/domains/v1/whois/{whoisId} | Get WHOIS profile |


## `createWHOISProfileV1()`

```php
createWHOISProfileV1($domainsV1WHOISStoreRequest): \Hostinger\Model\DomainsV1WHOISProfileResource
```

Create WHOIS profile

Create WHOIS contact profile.  Use this endpoint to add new contact information for domain registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$domainsV1WHOISStoreRequest = new \Hostinger\Model\DomainsV1WHOISStoreRequest(); // \Hostinger\Model\DomainsV1WHOISStoreRequest

try {
    $result = $apiInstance->createWHOISProfileV1($domainsV1WHOISStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->createWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1WHOISStoreRequest** | [**\Hostinger\Model\DomainsV1WHOISStoreRequest**](../Model/DomainsV1WHOISStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWHOISProfileV1()`

```php
deleteWHOISProfileV1($whoisId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete WHOIS profile

Delete WHOIS contact profile.  Use this endpoint to remove unused contact profiles from account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->deleteWHOISProfileV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->deleteWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileListV1()`

```php
getWHOISProfileListV1($tld): \Hostinger\Model\DomainsV1WHOISProfileResource[]
```

Get WHOIS profile list

Retrieve WHOIS contact profiles.  Use this endpoint to view available contact profiles for domain registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$tld = com; // string | Filter by TLD (without leading dot)

try {
    $result = $apiInstance->getWHOISProfileListV1($tld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tld** | **string**| Filter by TLD (without leading dot) | [optional] |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource[]**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileUsageV1()`

```php
getWHOISProfileUsageV1($whoisId): string[]
```

Get WHOIS profile usage

Retrieve domain list where provided WHOIS contact profile is used.  Use this endpoint to view which domains use specific contact profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->getWHOISProfileUsageV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileUsageV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

**string[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileV1()`

```php
getWHOISProfileV1($whoisId): \Hostinger\Model\DomainsV1WHOISProfileResource
```

Get WHOIS profile

Retrieve a WHOIS contact profile.  Use this endpoint to view domain registration contact information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->getWHOISProfileV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
