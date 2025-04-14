# Hostinger\DNSZoneApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteZoneRecordsV1()**](DNSZoneApi.md#deleteZoneRecordsV1) | **DELETE** /api/dns/v1/zones/{domain} | Delete zone records |
| [**getRecordsV1()**](DNSZoneApi.md#getRecordsV1) | **GET** /api/dns/v1/zones/{domain} | Get records |
| [**resetZoneRecordsV1()**](DNSZoneApi.md#resetZoneRecordsV1) | **POST** /api/dns/v1/zones/{domain}/reset | Reset zone records |
| [**updateZoneRecordsV1()**](DNSZoneApi.md#updateZoneRecordsV1) | **PUT** /api/dns/v1/zones/{domain} | Update zone records |
| [**validateZoneRecordsV1()**](DNSZoneApi.md#validateZoneRecordsV1) | **POST** /api/dns/v1/zones/{domain}/validate | Validate zone records |


## `deleteZoneRecordsV1()`

```php
deleteZoneRecordsV1($domain, $dNSV1ZoneDestroyRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete zone records

This endpoint deletes DNS records for the selected domain.  To filter which records to delete, add the `name` of the record and `type` to the filter.  Multiple filters can be provided with single request.  If you have multiple records with the same name and type, and you want to delete only part of them, refer to the `Update zone records` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$dNSV1ZoneDestroyRequest = new \Hostinger\Model\DNSV1ZoneDestroyRequest(); // \Hostinger\Model\DNSV1ZoneDestroyRequest

try {
    $result = $apiInstance->deleteZoneRecordsV1($domain, $dNSV1ZoneDestroyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->deleteZoneRecordsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **dNSV1ZoneDestroyRequest** | [**\Hostinger\Model\DNSV1ZoneDestroyRequest**](../Model/DNSV1ZoneDestroyRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecordsV1()`

```php
getRecordsV1($domain): \Hostinger\Model\DNSV1ZoneRecordResource[]
```

Get records

This endpoint retrieves DNS zone records for a specific domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getRecordsV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->getRecordsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DNSV1ZoneRecordResource[]**](../Model/DNSV1ZoneRecordResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetZoneRecordsV1()`

```php
resetZoneRecordsV1($domain, $dNSV1ZoneResetRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Reset zone records

This endpoint resets DNS zone to the default records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$dNSV1ZoneResetRequest = new \Hostinger\Model\DNSV1ZoneResetRequest(); // \Hostinger\Model\DNSV1ZoneResetRequest

try {
    $result = $apiInstance->resetZoneRecordsV1($domain, $dNSV1ZoneResetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->resetZoneRecordsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **dNSV1ZoneResetRequest** | [**\Hostinger\Model\DNSV1ZoneResetRequest**](../Model/DNSV1ZoneResetRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZoneRecordsV1()`

```php
updateZoneRecordsV1($domain, $dNSV1ZoneUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update zone records

This endpoint updates DNS records for the selected domain.   Using `overwrite = true` will replace existing records with the provided ones.  Otherwise existing records will be updated and new records will be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$dNSV1ZoneUpdateRequest = new \Hostinger\Model\DNSV1ZoneUpdateRequest(); // \Hostinger\Model\DNSV1ZoneUpdateRequest

try {
    $result = $apiInstance->updateZoneRecordsV1($domain, $dNSV1ZoneUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->updateZoneRecordsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **dNSV1ZoneUpdateRequest** | [**\Hostinger\Model\DNSV1ZoneUpdateRequest**](../Model/DNSV1ZoneUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateZoneRecordsV1()`

```php
validateZoneRecordsV1($domain, $dNSV1ZoneUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Validate zone records

This endpoint used to validate DNS records prior update for the selected domain.   If the validation is successful, the response will contain `200 Success` code. If there is validation error, the response will fail with `422 Validation error` code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$dNSV1ZoneUpdateRequest = new \Hostinger\Model\DNSV1ZoneUpdateRequest(); // \Hostinger\Model\DNSV1ZoneUpdateRequest

try {
    $result = $apiInstance->validateZoneRecordsV1($domain, $dNSV1ZoneUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->validateZoneRecordsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **dNSV1ZoneUpdateRequest** | [**\Hostinger\Model\DNSV1ZoneUpdateRequest**](../Model/DNSV1ZoneUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
