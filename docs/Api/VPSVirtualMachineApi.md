# Hostinger\VPSVirtualMachineApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttachedPublicKeysV1()**](VPSVirtualMachineApi.md#getAttachedPublicKeysV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/public-keys | Get attached public keys |
| [**getMetricsV1()**](VPSVirtualMachineApi.md#getMetricsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/metrics | Get metrics |
| [**getVirtualMachineListV1()**](VPSVirtualMachineApi.md#getVirtualMachineListV1) | **GET** /api/vps/v1/virtual-machines | Get virtual machine list |
| [**getVirtualMachineV1()**](VPSVirtualMachineApi.md#getVirtualMachineV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId} | Get virtual machine |
| [**recreateVirtualMachineV1()**](VPSVirtualMachineApi.md#recreateVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/recreate | Recreate virtual machine |
| [**resetHostnameV1()**](VPSVirtualMachineApi.md#resetHostnameV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Reset hostname |
| [**restartVirtualMachineV1()**](VPSVirtualMachineApi.md#restartVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/restart | Restart virtual machine |
| [**setHostnameV1()**](VPSVirtualMachineApi.md#setHostnameV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Set hostname |
| [**setNameserversV1()**](VPSVirtualMachineApi.md#setNameserversV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/nameservers | Set nameservers |
| [**setPanelPasswordV1()**](VPSVirtualMachineApi.md#setPanelPasswordV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/panel-password | Set panel password |
| [**setRootPasswordV1()**](VPSVirtualMachineApi.md#setRootPasswordV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/root-password | Set root password |
| [**setupNewVirtualMachineV1()**](VPSVirtualMachineApi.md#setupNewVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/setup | Setup new virtual machine |
| [**startVirtualMachineV1()**](VPSVirtualMachineApi.md#startVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/start | Start virtual machine |
| [**stopVirtualMachineV1()**](VPSVirtualMachineApi.md#stopVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/stop | Stop virtual machine |


## `getAttachedPublicKeysV1()`

```php
getAttachedPublicKeysV1($virtualMachineId, $page): \Hostinger\Model\VPSGetPublicKeyListV1200Response
```

Get attached public keys

This endpoint retrieves a list of public keys attached to a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$page = 1; // int | Page number

try {
    $result = $apiInstance->getAttachedPublicKeysV1($virtualMachineId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getAttachedPublicKeysV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
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

## `getMetricsV1()`

```php
getMetricsV1($virtualMachineId, $dateFrom, $dateTo): \Hostinger\Model\VPSV1MetricsMetricsCollection
```

Get metrics

This endpoint retrieves the historical metrics for a specified virtual machine. It includes the following metrics:  - CPU usage - Memory usage - Disk usage - Network usage - Uptime

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$dateFrom = 2025-05-01T00:00:00Z; // string | the date-time notation as defined by RFC 3339, section 5.6
$dateTo = 2025-06-01T00:00:00Z; // string | the date-time notation as defined by RFC 3339, section 5.6

try {
    $result = $apiInstance->getMetricsV1($virtualMachineId, $dateFrom, $dateTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getMetricsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **dateFrom** | **string**| the date-time notation as defined by RFC 3339, section 5.6 | |
| **dateTo** | **string**| the date-time notation as defined by RFC 3339, section 5.6 | |

### Return type

[**\Hostinger\Model\VPSV1MetricsMetricsCollection**](../Model/VPSV1MetricsMetricsCollection.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualMachineListV1()`

```php
getVirtualMachineListV1(): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineCollection
```

Get virtual machine list

This endpoint retrieves a list of all available virtual machines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVirtualMachineListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getVirtualMachineListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineCollection**](../Model/VPSV1VirtualMachineVirtualMachineCollection.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualMachineV1()`

```php
getVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource
```

Get virtual machine

This endpoint retrieves detailed information about a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->getVirtualMachineV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource**](../Model/VPSV1VirtualMachineVirtualMachineResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recreateVirtualMachineV1()`

```php
recreateVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineRecreateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Recreate virtual machine

This endpoint will recreate a virtual machine from scratch.  The recreation process involves reinstalling the operating system and resetting the virtual machine to its initial state. Snapshots, if there are any, will be deleted.  ## Password Requirements Password will be checked against leaked password databases.  Requirements for the password are: - At least 8 characters long - At least one uppercase letter - At least one lowercase letter - At least one number - Is not leaked publicly  **This operation is irreversible and will result in the loss of all data stored on the virtual machine!**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineRecreateRequest = new \Hostinger\Model\VPSV1VirtualMachineRecreateRequest(); // \Hostinger\Model\VPSV1VirtualMachineRecreateRequest

try {
    $result = $apiInstance->recreateVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineRecreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->recreateVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineRecreateRequest** | [**\Hostinger\Model\VPSV1VirtualMachineRecreateRequest**](../Model/VPSV1VirtualMachineRecreateRequest.md)|  | |

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

## `resetHostnameV1()`

```php
resetHostnameV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Reset hostname

This endpoint resets the hostname and PTR record of a specified virtual machine to the default value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->resetHostnameV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->resetHostnameV1: ', $e->getMessage(), PHP_EOL;
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

## `restartVirtualMachineV1()`

```php
restartVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Restart virtual machine

This endpoint restarts a specified virtual machine. This is equivalent to fully stopping and starting the virtual machine. If the virtual machine was stopped, it will be started.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->restartVirtualMachineV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->restartVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
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

## `setHostnameV1()`

```php
setHostnameV1($virtualMachineId, $vPSV1VirtualMachineHostnameUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set hostname

This endpoint sets the hostname for a specified virtual machine.  Changing hostname does not update PTR record automatically. If you want your virtual machine to be reachable by a hostname,  you need to point your domain A/AAAA records to virtual machine IP as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineHostnameUpdateRequest = new \Hostinger\Model\VPSV1VirtualMachineHostnameUpdateRequest(); // \Hostinger\Model\VPSV1VirtualMachineHostnameUpdateRequest

try {
    $result = $apiInstance->setHostnameV1($virtualMachineId, $vPSV1VirtualMachineHostnameUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setHostnameV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineHostnameUpdateRequest** | [**\Hostinger\Model\VPSV1VirtualMachineHostnameUpdateRequest**](../Model/VPSV1VirtualMachineHostnameUpdateRequest.md)|  | |

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

## `setNameserversV1()`

```php
setNameserversV1($virtualMachineId, $vPSV1VirtualMachineNameserversUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set nameservers

This endpoint sets the nameservers for a specified virtual machine. Be aware, that improper nameserver configuration can lead to the virtual machine being unable to resolve domain names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineNameserversUpdateRequest = new \Hostinger\Model\VPSV1VirtualMachineNameserversUpdateRequest(); // \Hostinger\Model\VPSV1VirtualMachineNameserversUpdateRequest

try {
    $result = $apiInstance->setNameserversV1($virtualMachineId, $vPSV1VirtualMachineNameserversUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setNameserversV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineNameserversUpdateRequest** | [**\Hostinger\Model\VPSV1VirtualMachineNameserversUpdateRequest**](../Model/VPSV1VirtualMachineNameserversUpdateRequest.md)|  | |

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

## `setPanelPasswordV1()`

```php
setPanelPasswordV1($virtualMachineId, $vPSV1VirtualMachinePanelPasswordUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set panel password

This endpoint sets the panel password for a specified virtual machine.  If virtual machine does not use panel OS, the request will still be processed without any effect. Requirements for the password is the same as in the [recreate virtual machine endpoint](/#tag/vps-virtual-machine/POST/api/vps/v1/virtual-machines/{virtualMachineId}/recreate).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachinePanelPasswordUpdateRequest = new \Hostinger\Model\VPSV1VirtualMachinePanelPasswordUpdateRequest(); // \Hostinger\Model\VPSV1VirtualMachinePanelPasswordUpdateRequest

try {
    $result = $apiInstance->setPanelPasswordV1($virtualMachineId, $vPSV1VirtualMachinePanelPasswordUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setPanelPasswordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachinePanelPasswordUpdateRequest** | [**\Hostinger\Model\VPSV1VirtualMachinePanelPasswordUpdateRequest**](../Model/VPSV1VirtualMachinePanelPasswordUpdateRequest.md)|  | |

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

## `setRootPasswordV1()`

```php
setRootPasswordV1($virtualMachineId, $vPSV1VirtualMachineRootPasswordUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set root password

This endpoint sets the root password for a specified virtual machine.  Requirements for the password is the same as in the [recreate virtual machine endpoint](/#tag/vps-virtual-machine/POST/api/vps/v1/virtual-machines/{virtualMachineId}/recreate).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineRootPasswordUpdateRequest = new \Hostinger\Model\VPSV1VirtualMachineRootPasswordUpdateRequest(); // \Hostinger\Model\VPSV1VirtualMachineRootPasswordUpdateRequest

try {
    $result = $apiInstance->setRootPasswordV1($virtualMachineId, $vPSV1VirtualMachineRootPasswordUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setRootPasswordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineRootPasswordUpdateRequest** | [**\Hostinger\Model\VPSV1VirtualMachineRootPasswordUpdateRequest**](../Model/VPSV1VirtualMachineRootPasswordUpdateRequest.md)|  | |

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

## `setupNewVirtualMachineV1()`

```php
setupNewVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineSetupRequest): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource
```

Setup new virtual machine

This endpoint will setup newly purchased virtual machine. Such virtual machines has `initial` state.  New virtual machine can be purchased using [`/api/billing/v1/orders`](/#tag/billing-orders/POST/api/billing/v1/orders) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineSetupRequest = new \Hostinger\Model\VPSV1VirtualMachineSetupRequest(); // \Hostinger\Model\VPSV1VirtualMachineSetupRequest

try {
    $result = $apiInstance->setupNewVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineSetupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setupNewVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineSetupRequest** | [**\Hostinger\Model\VPSV1VirtualMachineSetupRequest**](../Model/VPSV1VirtualMachineSetupRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource**](../Model/VPSV1VirtualMachineVirtualMachineResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startVirtualMachineV1()`

```php
startVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Start virtual machine

This endpoint starts a specified virtual machine.  If the virtual machine is already running, the request will still be processed without any effect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->startVirtualMachineV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->startVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
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

## `stopVirtualMachineV1()`

```php
stopVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Stop virtual machine

This endpoint stops a specified virtual machine.  If the virtual machine is already stopped, the request will still be processed without any effect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->stopVirtualMachineV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->stopVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
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
