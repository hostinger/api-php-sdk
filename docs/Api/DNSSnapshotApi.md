# Hostinger\DNSSnapshotApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDNSSnapshotListV1()**](DNSSnapshotApi.md#getDNSSnapshotListV1) | **GET** /api/dns/v1/snapshots/{domain} | Get DNS snapshot list |
| [**getDNSSnapshotV1()**](DNSSnapshotApi.md#getDNSSnapshotV1) | **GET** /api/dns/v1/snapshots/{domain}/{snapshotId} | Get DNS snapshot |
| [**restoreDNSSnapshotV1()**](DNSSnapshotApi.md#restoreDNSSnapshotV1) | **POST** /api/dns/v1/snapshots/{domain}/{snapshotId}/restore | Restore DNS snapshot |


## `getDNSSnapshotListV1()`

```php
getDNSSnapshotListV1($domain): \Hostinger\Model\DNSV1SnapshotSnapshotResource[]
```

Get DNS snapshot list

Retrieve DNS snapshots for a domain.  Use this endpoint to view available DNS backup points for restoration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSSnapshotApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getDNSSnapshotListV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->getDNSSnapshotListV1: ', $e->getMessage(), PHP_EOL;
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

## `getDNSSnapshotV1()`

```php
getDNSSnapshotV1($domain, $snapshotId): \Hostinger\Model\DNSV1SnapshotSnapshotWithContentResource
```

Get DNS snapshot

Retrieve particular DNS snapshot with contents of DNS zone records.  Use this endpoint to view historical DNS configurations for domains.

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
    $result = $apiInstance->getDNSSnapshotV1($domain, $snapshotId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->getDNSSnapshotV1: ', $e->getMessage(), PHP_EOL;
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

## `restoreDNSSnapshotV1()`

```php
restoreDNSSnapshotV1($domain, $snapshotId): \Hostinger\Model\CommonSuccessEmptyResource
```

Restore DNS snapshot

Restore DNS zone to the selected snapshot.  Use this endpoint to revert domain DNS to a previous configuration.

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
    $result = $apiInstance->restoreDNSSnapshotV1($domain, $snapshotId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSSnapshotApi->restoreDNSSnapshotV1: ', $e->getMessage(), PHP_EOL;
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
