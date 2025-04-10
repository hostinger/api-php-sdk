# Hostinger\VPSDataCentersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDataCentersListV1()**](VPSDataCentersApi.md#getDataCentersListV1) | **GET** /api/vps/v1/data-centers | Get data centers list |


## `getDataCentersListV1()`

```php
getDataCentersListV1(): \Hostinger\Model\VPSV1DataCenterDataCenterCollection
```

Get data centers list

This endpoint retrieves a list of all data centers available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDataCentersListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDataCentersApi->getDataCentersListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1DataCenterDataCenterCollection**](../Model/VPSV1DataCenterDataCenterCollection.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
