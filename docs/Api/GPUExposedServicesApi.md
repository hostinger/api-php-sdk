# Hostinger\GPUExposedServicesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExposedServiceV1()**](GPUExposedServicesApi.md#createExposedServiceV1) | **POST** /api/gpu/v1/instances/{instanceId}/exposed-services | Create exposed service |
| [**deleteExposedServiceV1()**](GPUExposedServicesApi.md#deleteExposedServiceV1) | **DELETE** /api/gpu/v1/instances/{instanceId}/exposed-services/{exposedServiceId} | Delete exposed service |
| [**getExposedServicesV1()**](GPUExposedServicesApi.md#getExposedServicesV1) | **GET** /api/gpu/v1/instances/{instanceId}/exposed-services | Get exposed services |


## `createExposedServiceV1()`

```php
createExposedServiceV1($instanceId, $gPUV1ExposedServiceStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create exposed service

Expose a service running on a specified GPU instance to the internet.  The service is exposed asynchronously: a successful request returns immediately, and the service appears in the exposed services list once it gets its public hostname and external port. Fails when the instance already has the maximum of 4 exposed services.  Use this endpoint to make an application on your GPU instance publicly reachable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUExposedServicesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID
$gPUV1ExposedServiceStoreRequest = new \Hostinger\Model\GPUV1ExposedServiceStoreRequest(); // \Hostinger\Model\GPUV1ExposedServiceStoreRequest

try {
    $result = $apiInstance->createExposedServiceV1($instanceId, $gPUV1ExposedServiceStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUExposedServicesApi->createExposedServiceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |
| **gPUV1ExposedServiceStoreRequest** | [**\Hostinger\Model\GPUV1ExposedServiceStoreRequest**](../Model/GPUV1ExposedServiceStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExposedServiceV1()`

```php
deleteExposedServiceV1($instanceId, $exposedServiceId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete exposed service

Delete a specified exposed service of a GPU instance.  The service is removed asynchronously: a successful request returns immediately and the service stops being reachable from the internet shortly after.  Use this endpoint to close public access to a service on your GPU instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUExposedServicesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID
$exposedServiceId = 3621; // int | Exposed service ID

try {
    $result = $apiInstance->deleteExposedServiceV1($instanceId, $exposedServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUExposedServicesApi->deleteExposedServiceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |
| **exposedServiceId** | **int**| Exposed service ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExposedServicesV1()`

```php
getExposedServicesV1($instanceId): \Hostinger\Model\GPUV1ExposedServiceExposedServiceResource[]
```

Get exposed services

Retrieve the services exposed on a specified GPU instance.  A newly created service is listed once it gets its public hostname and external port.  Use this endpoint to find the public address of services running on your GPU instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\GPUExposedServicesApi(config: $config);
$instanceId = 6325; // int | GPU instance ID

try {
    $result = $apiInstance->getExposedServicesV1($instanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPUExposedServicesApi->getExposedServicesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instanceId** | **int**| GPU instance ID | |

### Return type

[**\Hostinger\Model\GPUV1ExposedServiceExposedServiceResource[]**](../Model/GPUV1ExposedServiceExposedServiceResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
