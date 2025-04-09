# Hostinger\VPSPTRRecordsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPTRRecordV1()**](VPSPTRRecordsApi.md#createPTRRecordV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr | Create PTR record |
| [**deletePTRRecordV1()**](VPSPTRRecordsApi.md#deletePTRRecordV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr | Delete PTR record |


## `createPTRRecordV1()`

```php
createPTRRecordV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Create PTR record

This endpoint creates or updates a PTR (Pointer) record for a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPTRRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->createPTRRecordV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPTRRecordsApi->createPTRRecordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePTRRecordV1()`

```php
deletePTRRecordV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Delete PTR record

This endpoint deletes a PTR (Pointer) record for a specified virtual machine.   Once deleted, reverse DNS lookups to the virtual machine's IP address will no longer return the previously configured hostname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPTRRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->deletePTRRecordV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPTRRecordsApi->deletePTRRecordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
