# Hostinger\VPSPublicKeysApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachPublicKeyV1()**](VPSPublicKeysApi.md#attachPublicKeyV1) | **POST** /api/vps/v1/public-keys/attach/{virtualMachineId} | Attach public key |
| [**createNewPublicKeyV1()**](VPSPublicKeysApi.md#createNewPublicKeyV1) | **POST** /api/vps/v1/public-keys | Create new public key |
| [**deleteAPublicKeyV1()**](VPSPublicKeysApi.md#deleteAPublicKeyV1) | **DELETE** /api/vps/v1/public-keys/{publicKeyId} | Delete a public key |
| [**getPublicKeyListV1()**](VPSPublicKeysApi.md#getPublicKeyListV1) | **GET** /api/vps/v1/public-keys | Get public key list |


## `attachPublicKeyV1()`

```php
attachPublicKeyV1($virtualMachineId, $vPSV1PublicKeyAttachRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Attach public key

This endpoint attaches an existing public keys from your account to a specified virtual machine.  Multiple keys can be attached to a single virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1PublicKeyAttachRequest = new \Hostinger\Model\VPSV1PublicKeyAttachRequest(); // \Hostinger\Model\VPSV1PublicKeyAttachRequest

try {
    $result = $apiInstance->attachPublicKeyV1($virtualMachineId, $vPSV1PublicKeyAttachRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->attachPublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1PublicKeyAttachRequest** | [**\Hostinger\Model\VPSV1PublicKeyAttachRequest**](../Model/VPSV1PublicKeyAttachRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewPublicKeyV1()`

```php
createNewPublicKeyV1($vPSV1PublicKeyStoreRequest): \Hostinger\Model\VPSV1PublicKeyPublicKeyResource
```

Create new public key

This endpoint allows you to add a new public key to your account,  which can then be attached to virtual machine instances for secure access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vPSV1PublicKeyStoreRequest = new \Hostinger\Model\VPSV1PublicKeyStoreRequest(); // \Hostinger\Model\VPSV1PublicKeyStoreRequest

try {
    $result = $apiInstance->createNewPublicKeyV1($vPSV1PublicKeyStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->createNewPublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vPSV1PublicKeyStoreRequest** | [**\Hostinger\Model\VPSV1PublicKeyStoreRequest**](../Model/VPSV1PublicKeyStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1PublicKeyPublicKeyResource**](../Model/VPSV1PublicKeyPublicKeyResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAPublicKeyV1()`

```php
deleteAPublicKeyV1($publicKeyId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a public key

This endpoint deletes a public key from your account.   **Deleting public key from account does not remove it from virtual machine**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publicKeyId = 6672861; // int | Public Key ID

try {
    $result = $apiInstance->deleteAPublicKeyV1($publicKeyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->deleteAPublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicKeyId** | **int**| Public Key ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicKeyListV1()`

```php
getPublicKeyListV1($page): \Hostinger\Model\VPSGetPublicKeyListV1200Response
```

Get public key list

This endpoint retrieves a list of public keys associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number

try {
    $result = $apiInstance->getPublicKeyListV1($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->getPublicKeyListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSGetPublicKeyListV1200Response**](../Model/VPSGetPublicKeyListV1200Response.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
