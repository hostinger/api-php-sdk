# Hostinger\VPSDataCentersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDataCenterListV1()**](VPSDataCentersApi.md#getDataCenterListV1) | **GET** /api/vps/v1/data-centers | Get data center list |


## `getDataCenterListV1()`

```php
getDataCenterListV1(): \Hostinger\Model\VPSV1DataCenterDataCenterResource[]
```

Get data center list

Retrieve all available data centers.  Use this endpoint to view location options before deploying VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDataCentersApi(config: $config);

try {
    $result = $apiInstance->getDataCenterListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDataCentersApi->getDataCenterListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1DataCenterDataCenterResource[]**](../Model/VPSV1DataCenterDataCenterResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
