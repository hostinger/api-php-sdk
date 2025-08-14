# Hostinger\DNSZoneApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDNSRecordsV1()**](DNSZoneApi.md#deleteDNSRecordsV1) | **DELETE** /api/dns/v1/zones/{domain} | Delete DNS records |
| [**getDNSRecordsV1()**](DNSZoneApi.md#getDNSRecordsV1) | **GET** /api/dns/v1/zones/{domain} | Get DNS records |
| [**resetDNSRecordsV1()**](DNSZoneApi.md#resetDNSRecordsV1) | **POST** /api/dns/v1/zones/{domain}/reset | Reset DNS records |
| [**updateDNSRecordsV1()**](DNSZoneApi.md#updateDNSRecordsV1) | **PUT** /api/dns/v1/zones/{domain} | Update DNS records |
| [**validateDNSRecordsV1()**](DNSZoneApi.md#validateDNSRecordsV1) | **POST** /api/dns/v1/zones/{domain}/validate | Validate DNS records |


## `deleteDNSRecordsV1()`

```php
deleteDNSRecordsV1($domain, $dNSV1ZoneDestroyRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete DNS records

Delete DNS records for the selected domain.  To filter which records to delete, add the `name` of the record and `type` to the filter.  Multiple filters can be provided with single request.  If you have multiple records with the same name and type, and you want to delete only part of them, refer to the `Update zone records` endpoint.  Use this endpoint to remove specific DNS records from domains.

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
    $result = $apiInstance->deleteDNSRecordsV1($domain, $dNSV1ZoneDestroyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->deleteDNSRecordsV1: ', $e->getMessage(), PHP_EOL;
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

## `getDNSRecordsV1()`

```php
getDNSRecordsV1($domain): \Hostinger\Model\DNSV1ZoneRecordResource[]
```

Get DNS records

Retrieve DNS zone records for a specific domain.  Use this endpoint to view current DNS configuration for domain management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSZoneApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getDNSRecordsV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->getDNSRecordsV1: ', $e->getMessage(), PHP_EOL;
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

## `resetDNSRecordsV1()`

```php
resetDNSRecordsV1($domain, $dNSV1ZoneResetRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Reset DNS records

Reset DNS zone to the default records.  Use this endpoint to restore domain DNS to original configuration.

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
    $result = $apiInstance->resetDNSRecordsV1($domain, $dNSV1ZoneResetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->resetDNSRecordsV1: ', $e->getMessage(), PHP_EOL;
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

## `updateDNSRecordsV1()`

```php
updateDNSRecordsV1($domain, $dNSV1ZoneUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update DNS records

Update DNS records for the selected domain.  Using `overwrite = true` will replace existing records with the provided ones.  Otherwise existing records will be updated and new records will be added.  Use this endpoint to modify domain DNS configuration.

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
    $result = $apiInstance->updateDNSRecordsV1($domain, $dNSV1ZoneUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->updateDNSRecordsV1: ', $e->getMessage(), PHP_EOL;
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

## `validateDNSRecordsV1()`

```php
validateDNSRecordsV1($domain, $dNSV1ZoneUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Validate DNS records

Validate DNS records prior to update for the selected domain.  If the validation is successful, the response will contain `200 Success` code. If there is validation error, the response will fail with `422 Validation error` code.  Use this endpoint to verify DNS record validity before applying changes.

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
    $result = $apiInstance->validateDNSRecordsV1($domain, $dNSV1ZoneUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSZoneApi->validateDNSRecordsV1: ', $e->getMessage(), PHP_EOL;
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
