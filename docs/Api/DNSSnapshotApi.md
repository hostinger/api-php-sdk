# Hostinger\DNSSnapshotApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSnapshotListV1()**](DNSSnapshotApi.md#getSnapshotListV1) | **GET** /api/dns/v1/snapshots/{domain} | Get snapshot list |
| [**getSnapshotV1()**](DNSSnapshotApi.md#getSnapshotV1) | **GET** /api/dns/v1/snapshots/{domain}/{snapshotId} | Get snapshot |
| [**restoreSnapshotV1()**](DNSSnapshotApi.md#restoreSnapshotV1) | **POST** /api/dns/v1/snapshots/{domain}/{snapshotId} | Restore snapshot |


## `getSnapshotListV1()`

```php
getSnapshotListV1($domain): \Hostinger\Model\DNSV1SnapshotSnapshotResource[]
```

Get snapshot list

This endpoint retrieves list of DNS snapshots.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSSnapshotApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getSnapshotListV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->getSnapshotListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DNSV1SnapshotSnapshotResource[]**](../Model/DNSV1SnapshotSnapshotResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnapshotV1()`

```php
getSnapshotV1($domain, $snapshotId): \Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource
```

Get snapshot

This endpoint retrieves particular DNS snapshot with the contents of DNS zone records.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSSnapshotApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$snapshotId = 53513053; // int | Snapshot ID

try {
    $result = $apiInstance->getSnapshotV1($domain, $snapshotId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->getSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **snapshotId** | **int**| Snapshot ID | |

### Return type

[**\Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource**](../Model/DNSV1SnapshotSnapshotWithContentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreSnapshotV1()`

```php
restoreSnapshotV1($domain, $snapshotId): \Hostinger\Model\CommonSuccessEmptyResource
```

Restore snapshot

This endpoint restores DNS zone to the selected snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSSnapshotApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$snapshotId = 53513053; // int | Snapshot ID

try {
    $result = $apiInstance->restoreSnapshotV1($domain, $snapshotId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->restoreSnapshotV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **snapshotId** | **int**| Snapshot ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
