# Hostinger\GPUInstancesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInstanceV1()**](GPUInstancesApi.md#createInstanceV1) | **POST** /api/gpu/v1/instances | Create instance |
| [**deleteInstanceV1()**](GPUInstancesApi.md#deleteInstanceV1) | **DELETE** /api/gpu/v1/instances/{instanceId} | Delete instance |
| [**getInstanceDetailsV1()**](GPUInstancesApi.md#getInstanceDetailsV1) | **GET** /api/gpu/v1/instances/{instanceId} | Get instance details |
| [**getInstanceMetricsV1()**](GPUInstancesApi.md#getInstanceMetricsV1) | **GET** /api/gpu/v1/instances/{instanceId}/metrics | Get instance metrics |
| [**getInstancesV1()**](GPUInstancesApi.md#getInstancesV1) | **GET** /api/gpu/v1/instances | Get instances |


## `createInstanceV1()`

```php
createInstanceV1($gPUV1InstanceStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create instance

Create a new GPU instance.  Pick `pool_instance_id` from the pool instance types list and `os_template_id` from the OS templates available for that instance type. Your account must have enough credits to run the instance for its first hour.  The instance is created asynchronously: a successful request returns immediately, and the instance appears in the instance list while its `status` moves from `created` through `creating` to `running`.  Use this endpoint to provision GPU compute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUInstancesApi(config: $config);
$gPUV1InstanceStoreRequest = new \Hostinger\Model\GPUV1InstanceStoreRequest(); // \Hostinger\Model\GPUV1InstanceStoreRequest

try {
    $result = $apiInstance->createInstanceV1($gPUV1InstanceStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUInstancesApi->createInstanceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **gPUV1InstanceStoreRequest** | [**\Hostinger\Model\GPUV1InstanceStoreRequest**](../Model/GPUV1InstanceStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInstanceV1()`

```php
deleteInstanceV1($instanceId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete instance

Delete a specified GPU instance.  The instance is destroyed asynchronously: a successful request returns immediately and the instance `status` moves to `destroying`. Deleting fails while the instance is in `created`, `destroying`, `destroyed` or `abuse` status, or while another action is in progress on it.  Use this endpoint to stop billing for a GPU instance you no longer need.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUInstancesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID

try {
    $result = $apiInstance->deleteInstanceV1($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUInstancesApi->deleteInstanceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstanceDetailsV1()`

```php
getInstanceDetailsV1($instanceId): \Hostinger\Model\GPUV1InstanceInstanceResource
```

Get instance details

Retrieve detailed information about a specified GPU instance, including its SSH keys.  Use this endpoint to follow the instance `status` after creating or deleting it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUInstancesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID

try {
    $result = $apiInstance->getInstanceDetailsV1($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUInstancesApi->getInstanceDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |

### Return type

[**\Hostinger\Model\GPUV1InstanceInstanceResource**](../Model/GPUV1InstanceInstanceResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstanceMetricsV1()`

```php
getInstanceMetricsV1($instanceId): \Hostinger\Model\GPUV1MetricsMetricsResource[]
```

Get instance metrics

Retrieve utilisation metrics of a specified GPU instance for the last hour.  Each data point contains CPU, memory and GPU utilisation, used GPU memory and GPU throughput. The list is empty until the instance is provisioned.  Use this endpoint to monitor GPU instance load.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUInstancesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID

try {
    $result = $apiInstance->getInstanceMetricsV1($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUInstancesApi->getInstanceMetricsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |

### Return type

[**\Hostinger\Model\GPUV1MetricsMetricsResource[]**](../Model/GPUV1MetricsMetricsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstancesV1()`

```php
getInstancesV1(): \Hostinger\Model\GPUV1InstanceInstanceListResource[]
```

Get instances

Retrieve all GPU instances of your account.  Use this endpoint to view your GPU instances with their status, pool, instance type and OS template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUInstancesApi(config: $config);

try {
    $result = $apiInstance->getInstancesV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUInstancesApi->getInstancesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\GPUV1InstanceInstanceListResource[]**](../Model/GPUV1InstanceInstanceListResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
