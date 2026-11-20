# Hostinger\VPSPublicKeysApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPublicKeyV1()**](VPSPublicKeysApi.md#createPublicKeyV1) | **POST** /api/vps/v1/public-keys | Create public key |
| [**deletePublicKeyV1()**](VPSPublicKeysApi.md#deletePublicKeyV1) | **DELETE** /api/vps/v1/public-keys/{publicKeyId} | Delete public key |
| [**getPublicKeysV1()**](VPSPublicKeysApi.md#getPublicKeysV1) | **GET** /api/vps/v1/public-keys | Get public keys |


## `createPublicKeyV1()`

```php
createPublicKeyV1($vPSV1PublicKeyStoreRequest): \Hostinger\Model\VPSV1PublicKeyPublicKeyResource
```

Create public key

Deprecated: account-level public keys have no direct replacement. Root SSH keys are now managed per virtual machine via `POST /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys`.  Add a new public key to your account.  Use this endpoint to register SSH keys for VPS authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(config: $config);
$vPSV1PublicKeyStoreRequest = new \Hostinger\Model\VPSV1PublicKeyStoreRequest(); // \Hostinger\Model\VPSV1PublicKeyStoreRequest

try {
    $result = $apiInstance->createPublicKeyV1($vPSV1PublicKeyStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->createPublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vPSV1PublicKeyStoreRequest** | [**\Hostinger\Model\VPSV1PublicKeyStoreRequest**](../Model/VPSV1PublicKeyStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1PublicKeyPublicKeyResource**](../Model/VPSV1PublicKeyPublicKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePublicKeyV1()`

```php
deletePublicKeyV1($publicKeyId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete public key

Deprecated: account-level public keys have no direct replacement. Root SSH keys are now managed per virtual machine via `DELETE /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys`.  Delete a public key from your account.   **Deleting public key from account does not remove it from virtual machine**          Use this endpoint to remove unused SSH keys from account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(config: $config);
$publicKeyId = 6672861; // int | Public Key ID

try {
    $result = $apiInstance->deletePublicKeyV1($publicKeyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->deletePublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publicKeyId** | **int**| Public Key ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicKeysV1()`

```php
getPublicKeysV1($page): \Hostinger\Model\VPSV1PublicKeyListResponse
```

Get public keys

Deprecated: account-level public keys have no direct replacement. Root SSH keys are now managed per virtual machine via `GET /api/vps/v1/virtual-machines/{virtualMachineId}/ssh-keys`.  Retrieve public keys associated with your account.  Use this endpoint to view available SSH keys for VPS authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPublicKeysApi(config: $config);
$page = 1; // int | Page number

try {
    $result = $apiInstance->getPublicKeysV1($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPublicKeysApi->getPublicKeysV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSV1PublicKeyListResponse**](../Model/VPSV1PublicKeyListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
