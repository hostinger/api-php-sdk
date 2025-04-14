# Hostinger\DNSZoneApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRecordsV1()**](DNSZoneApi.md#getRecordsV1) | **GET** /api/dns/v1/zones/{domain} | Get records |
| [**resetZoneRecordsV1()**](DNSZoneApi.md#resetZoneRecordsV1) | **POST** /api/dns/v1/zones/{domain}/reset | Reset zone records |


## `getRecordsV1()`

```php
getRecordsV1($domain): \Hostinger\Model\DNSV1ZoneNameResource[]
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

[**\Hostinger\Model\DNSV1ZoneNameResource[]**](../Model/DNSV1ZoneNameResource.md)

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
