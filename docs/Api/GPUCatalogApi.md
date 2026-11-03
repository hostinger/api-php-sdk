# Hostinger\GPUCatalogApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPoolGroupsV1()**](GPUCatalogApi.md#getPoolGroupsV1) | **GET** /api/gpu/v1/pools/groups | Get pool groups |
| [**getPoolInstanceTypesV1()**](GPUCatalogApi.md#getPoolInstanceTypesV1) | **GET** /api/gpu/v1/pools/{poolId}/instances | Get pool instance types |
| [**getPoolListV1()**](GPUCatalogApi.md#getPoolListV1) | **GET** /api/gpu/v1/pools | Get pool list |
| [**getPoolOSTemplatesV1()**](GPUCatalogApi.md#getPoolOSTemplatesV1) | **GET** /api/gpu/v1/pools/{poolId}/instances/{poolInstanceId}/os-templates | Get pool OS templates |


## `getPoolGroupsV1()`

```php
getPoolGroupsV1($currency): \Hostinger\Model\GPUV1PoolPoolGroupResource[]
```

Get pool groups

Retrieve GPU pool groups, ordered by name.  Each group bundles the pools of one GPU model and lists its currently available pools, whether any of them is available and the lowest hourly price among its instance types. The price is returned even when the group is out of stock.  Use this endpoint to show which GPU models can be ordered and from what price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUCatalogApi(config: $config);
$currency = EUR; // string | Currency of the returned prices, `USD` by default

try {
    $result = $apiInstance->getPoolGroupsV1($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUCatalogApi->getPoolGroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Currency of the returned prices, &#x60;USD&#x60; by default | [optional] |

### Return type

[**\Hostinger\Model\GPUV1PoolPoolGroupResource[]**](../Model/GPUV1PoolPoolGroupResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPoolInstanceTypesV1()`

```php
getPoolInstanceTypesV1($poolId): \Hostinger\Model\GPUV1PoolPoolInstanceResource[]
```

Get pool instance types

Retrieve the instance types offered by a specified GPU pool, ordered by CPU core count.  Each instance type describes its CPU, memory and storage, and its hourly price. Only instance types that can currently be ordered are returned.  Use this endpoint to choose the `pool_instance_id` for a new GPU instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUCatalogApi(config: $config);
$poolId = 12; // int | GPU pool ID

try {
    $result = $apiInstance->getPoolInstanceTypesV1($poolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUCatalogApi->getPoolInstanceTypesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poolId** | **int**| GPU pool ID | |

### Return type

[**\Hostinger\Model\GPUV1PoolPoolInstanceResource[]**](../Model/GPUV1PoolPoolInstanceResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPoolListV1()`

```php
getPoolListV1(): \Hostinger\Model\GPUV1PoolPoolResource[]
```

Get pool list

Retrieve all available GPU pools, ordered by name.  A pool serves GPU accelerators of one model from a single region.  Use this endpoint to choose a pool before listing its instance types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUCatalogApi(config: $config);

try {
    $result = $apiInstance->getPoolListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUCatalogApi->getPoolListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\GPUV1PoolPoolResource[]**](../Model/GPUV1PoolPoolResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPoolOSTemplatesV1()`

```php
getPoolOSTemplatesV1($poolId, $poolInstanceId): \Hostinger\Model\GPUV1OsTemplateOsTemplateResource[]
```

Get pool OS templates

Retrieve the OS templates that can be installed on a specified GPU pool instance type.  Use this endpoint to choose the `os_template_id` for a new GPU instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUCatalogApi(config: $config);
$poolId = 12; // int | GPU pool ID
$poolInstanceId = 232; // int | GPU pool instance type ID

try {
    $result = $apiInstance->getPoolOSTemplatesV1($poolId, $poolInstanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUCatalogApi->getPoolOSTemplatesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **poolId** | **int**| GPU pool ID | |
| **poolInstanceId** | **int**| GPU pool instance type ID | |

### Return type

[**\Hostinger\Model\GPUV1OsTemplateOsTemplateResource[]**](../Model/GPUV1OsTemplateOsTemplateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
