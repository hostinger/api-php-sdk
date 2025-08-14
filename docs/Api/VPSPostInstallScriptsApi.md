# Hostinger\VPSPostInstallScriptsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPostInstallScriptV1()**](VPSPostInstallScriptsApi.md#createPostInstallScriptV1) | **POST** /api/vps/v1/post-install-scripts | Create post-install script |
| [**deletePostInstallScriptV1()**](VPSPostInstallScriptsApi.md#deletePostInstallScriptV1) | **DELETE** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Delete post-install script |
| [**getPostInstallScriptV1()**](VPSPostInstallScriptsApi.md#getPostInstallScriptV1) | **GET** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Get post-install script |
| [**getPostInstallScriptsV1()**](VPSPostInstallScriptsApi.md#getPostInstallScriptsV1) | **GET** /api/vps/v1/post-install-scripts | Get post-install scripts |
| [**updatePostInstallScriptV1()**](VPSPostInstallScriptsApi.md#updatePostInstallScriptV1) | **PUT** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Update post-install script |


## `createPostInstallScriptV1()`

```php
createPostInstallScriptV1($vPSV1PostInstallScriptStoreRequest): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource
```

Create post-install script

Add a new post-install script to your account, which can then be used after virtual machine installation.  The script contents will be saved to the file `/post_install` with executable attribute set and will be executed once virtual machine is installed. The output of the script will be redirected to `/post_install.log`. Maximum script size is 48KB.  Use this endpoint to create automation scripts for VPS setup tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPostInstallScriptsApi(config: $config);
$vPSV1PostInstallScriptStoreRequest = new \Hostinger\Model\VPSV1PostInstallScriptStoreRequest(); // \Hostinger\Model\VPSV1PostInstallScriptStoreRequest

try {
    $result = $apiInstance->createPostInstallScriptV1($vPSV1PostInstallScriptStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPostInstallScriptsApi->createPostInstallScriptV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vPSV1PostInstallScriptStoreRequest** | [**\Hostinger\Model\VPSV1PostInstallScriptStoreRequest**](../Model/VPSV1PostInstallScriptStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource**](../Model/VPSV1PostInstallScriptPostInstallScriptResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePostInstallScriptV1()`

```php
deletePostInstallScriptV1($postInstallScriptId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete post-install script

Delete a post-install script from your account.         Use this endpoint to remove unused automation scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPostInstallScriptsApi(config: $config);
$postInstallScriptId = 9568314; // int | Post-install script ID

try {
    $result = $apiInstance->deletePostInstallScriptV1($postInstallScriptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPostInstallScriptsApi->deletePostInstallScriptV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postInstallScriptId** | **int**| Post-install script ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostInstallScriptV1()`

```php
getPostInstallScriptV1($postInstallScriptId): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource
```

Get post-install script

Retrieve post-install script by its ID.  Use this endpoint to view specific automation script details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPostInstallScriptsApi(config: $config);
$postInstallScriptId = 9568314; // int | Post-install script ID

try {
    $result = $apiInstance->getPostInstallScriptV1($postInstallScriptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPostInstallScriptsApi->getPostInstallScriptV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postInstallScriptId** | **int**| Post-install script ID | |

### Return type

[**\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource**](../Model/VPSV1PostInstallScriptPostInstallScriptResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostInstallScriptsV1()`

```php
getPostInstallScriptsV1($page): \Hostinger\Model\VPSV1PostInstallScriptListResponse
```

Get post-install scripts

Retrieve post-install scripts associated with your account.  Use this endpoint to view available automation scripts for VPS deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPostInstallScriptsApi(config: $config);
$page = 1; // int | Page number

try {
    $result = $apiInstance->getPostInstallScriptsV1($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPostInstallScriptsApi->getPostInstallScriptsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSV1PostInstallScriptListResponse**](../Model/VPSV1PostInstallScriptListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePostInstallScriptV1()`

```php
updatePostInstallScriptV1($postInstallScriptId, $vPSV1PostInstallScriptStoreRequest): \Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource
```

Update post-install script

Update a specific post-install script.  Use this endpoint to modify existing automation scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSPostInstallScriptsApi(config: $config);
$postInstallScriptId = 9568314; // int | Post-install script ID
$vPSV1PostInstallScriptStoreRequest = new \Hostinger\Model\VPSV1PostInstallScriptStoreRequest(); // \Hostinger\Model\VPSV1PostInstallScriptStoreRequest

try {
    $result = $apiInstance->updatePostInstallScriptV1($postInstallScriptId, $vPSV1PostInstallScriptStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSPostInstallScriptsApi->updatePostInstallScriptV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postInstallScriptId** | **int**| Post-install script ID | |
| **vPSV1PostInstallScriptStoreRequest** | [**\Hostinger\Model\VPSV1PostInstallScriptStoreRequest**](../Model/VPSV1PostInstallScriptStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1PostInstallScriptPostInstallScriptResource**](../Model/VPSV1PostInstallScriptPostInstallScriptResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
