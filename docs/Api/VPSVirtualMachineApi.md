# Hostinger\VPSVirtualMachineApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttachedPublicKeysV1()**](VPSVirtualMachineApi.md#getAttachedPublicKeysV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/public-keys | Get attached public keys |
| [**getMetricsV1()**](VPSVirtualMachineApi.md#getMetricsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/metrics | Get metrics |
| [**getVirtualMachineDetailsV1()**](VPSVirtualMachineApi.md#getVirtualMachineDetailsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId} | Get virtual machine details |
| [**getVirtualMachinesV1()**](VPSVirtualMachineApi.md#getVirtualMachinesV1) | **GET** /api/vps/v1/virtual-machines | Get virtual machines |
| [**purchaseNewVirtualMachineV1()**](VPSVirtualMachineApi.md#purchaseNewVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines | Purchase new virtual machine |
| [**recreateVirtualMachineV1()**](VPSVirtualMachineApi.md#recreateVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/recreate | Recreate virtual machine |
| [**resetHostnameV1()**](VPSVirtualMachineApi.md#resetHostnameV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Reset hostname |
| [**restartVirtualMachineV1()**](VPSVirtualMachineApi.md#restartVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/restart | Restart virtual machine |
| [**setHostnameV1()**](VPSVirtualMachineApi.md#setHostnameV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Set hostname |
| [**setNameserversV1()**](VPSVirtualMachineApi.md#setNameserversV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/nameservers | Set nameservers |
| [**setPanelPasswordV1()**](VPSVirtualMachineApi.md#setPanelPasswordV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/panel-password | Set panel password |
| [**setRootPasswordV1()**](VPSVirtualMachineApi.md#setRootPasswordV1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/root-password | Set root password |
| [**setupPurchasedVirtualMachineV1()**](VPSVirtualMachineApi.md#setupPurchasedVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/setup | Setup purchased virtual machine |
| [**startVirtualMachineV1()**](VPSVirtualMachineApi.md#startVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/start | Start virtual machine |
| [**stopVirtualMachineV1()**](VPSVirtualMachineApi.md#stopVirtualMachineV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/stop | Stop virtual machine |


## `getAttachedPublicKeysV1()`

```php
getAttachedPublicKeysV1($virtualMachineId, $page): \Hostinger\Model\VPSV1PublicKeyListResponse
```

Get attached public keys

Retrieve public keys attached to a specified virtual machine.  Use this endpoint to view SSH keys configured for specific VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[**\Hostinger\Model\VPSV1PublicKeyListResponse**](../Model/VPSV1PublicKeyListResponse.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsV1()`

```php
getMetricsV1($virtualMachineId, $dateFrom, $dateTo): \Hostinger\Model\VPSV1MetricsMetricsCollection
```

Get metrics

Retrieve historical metrics for a specified virtual machine.  It includes the following metrics:  - CPU usage - Memory usage - Disk usage - Network usage - Uptime  Use this endpoint to monitor VPS performance and resource utilization over time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$dateFrom = 2025-05-01T00:00Z; // \DateTime
$dateTo = 2025-06-01T00:00Z; // \DateTime

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
| **dateFrom** | **\DateTime**|  | |
| **dateTo** | **\DateTime**|  | |

### Return type

[**\Hostinger\Model\VPSV1MetricsMetricsCollection**](../Model/VPSV1MetricsMetricsCollection.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualMachineDetailsV1()`

```php
getVirtualMachineDetailsV1($virtualMachineId): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource
```

Get virtual machine details

Retrieve detailed information about a specified virtual machine.  Use this endpoint to view comprehensive VPS configuration and status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->getVirtualMachineDetailsV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getVirtualMachineDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource**](../Model/VPSV1VirtualMachineVirtualMachineResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVirtualMachinesV1()`

```php
getVirtualMachinesV1(): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource[]
```

Get virtual machines

Retrieve all available virtual machines.  Use this endpoint to view available VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);

try {
    $result = $apiInstance->getVirtualMachinesV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->getVirtualMachinesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource[]**](../Model/VPSV1VirtualMachineVirtualMachineResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseNewVirtualMachineV1()`

```php
purchaseNewVirtualMachineV1($vPSV1VirtualMachinePurchaseRequest): \Hostinger\Model\BillingV1OrderVirtualMachineOrderResource
```

Purchase new virtual machine

Purchase and setup a new virtual machine.  If virtual machine setup fails for any reason, login to [hPanel](https://hpanel.hostinger.com/) and complete the setup manually.  If no payment method is provided, your default payment method will be used automatically.  Use this endpoint to create new VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
$vPSV1VirtualMachinePurchaseRequest = new \Hostinger\Model\VPSV1VirtualMachinePurchaseRequest(); // \Hostinger\Model\VPSV1VirtualMachinePurchaseRequest

try {
    $result = $apiInstance->purchaseNewVirtualMachineV1($vPSV1VirtualMachinePurchaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->purchaseNewVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vPSV1VirtualMachinePurchaseRequest** | [**\Hostinger\Model\VPSV1VirtualMachinePurchaseRequest**](../Model/VPSV1VirtualMachinePurchaseRequest.md)|  | |

### Return type

[**\Hostinger\Model\BillingV1OrderVirtualMachineOrderResource**](../Model/BillingV1OrderVirtualMachineOrderResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recreateVirtualMachineV1()`

```php
recreateVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineRecreateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Recreate virtual machine

Recreate a virtual machine from scratch.  The recreation process involves reinstalling the operating system and resetting the virtual machine to its initial state. Snapshots, if there are any, will be deleted.  ## Password Requirements Password will be checked against leaked password databases.  Requirements for the password are: - At least 8 characters long - At least one uppercase letter - At least one lowercase letter - At least one number - Is not leaked publicly  **This operation is irreversible and will result in the loss of all data stored on the virtual machine!**  Use this endpoint to completely rebuild VPS instances with fresh OS installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetHostnameV1()`

```php
resetHostnameV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Reset hostname

Reset hostname and PTR record of a specified virtual machine to default value.  Use this endpoint to restore default hostname configuration for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartVirtualMachineV1()`

```php
restartVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Restart virtual machine

Restart a specified virtual machine by fully stopping and starting it.  If the virtual machine was stopped, it will be started.  Use this endpoint to reboot VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setHostnameV1()`

```php
setHostnameV1($virtualMachineId, $vPSV1VirtualMachineHostnameUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set hostname

Set hostname for a specified virtual machine.  Changing hostname does not update PTR record automatically. If you want your virtual machine to be reachable by a hostname,  you need to point your domain A/AAAA records to virtual machine IP as well.  Use this endpoint to configure custom hostnames for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setNameserversV1()`

```php
setNameserversV1($virtualMachineId, $vPSV1VirtualMachineNameserversUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set nameservers

Set nameservers for a specified virtual machine.  Be aware, that improper nameserver configuration can lead to the virtual machine being unable to resolve domain names.  Use this endpoint to configure custom DNS resolvers for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPanelPasswordV1()`

```php
setPanelPasswordV1($virtualMachineId, $vPSV1VirtualMachinePanelPasswordUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set panel password

Set panel password for a specified virtual machine.  If virtual machine does not use panel OS, the request will still be processed without any effect. Requirements for password are same as in the [recreate virtual machine endpoint](/#tag/vps-virtual-machine/POST/api/vps/v1/virtual-machines/{virtualMachineId}/recreate).  Use this endpoint to configure control panel access credentials for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRootPasswordV1()`

```php
setRootPasswordV1($virtualMachineId, $vPSV1VirtualMachineRootPasswordUpdateRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Set root password

Set root password for a specified virtual machine.  Requirements for password are same as in the [recreate virtual machine endpoint](/#tag/vps-virtual-machine/POST/api/vps/v1/virtual-machines/{virtualMachineId}/recreate).  Use this endpoint to update administrator credentials for VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setupPurchasedVirtualMachineV1()`

```php
setupPurchasedVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineSetupRequest): \Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource
```

Setup purchased virtual machine

Setup newly purchased virtual machine with `initial` state.  Use this endpoint to configure and initialize purchased VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineSetupRequest = new \Hostinger\Model\VPSV1VirtualMachineSetupRequest(); // \Hostinger\Model\VPSV1VirtualMachineSetupRequest

try {
    $result = $apiInstance->setupPurchasedVirtualMachineV1($virtualMachineId, $vPSV1VirtualMachineSetupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSVirtualMachineApi->setupPurchasedVirtualMachineV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineSetupRequest** | [**\Hostinger\Model\VPSV1VirtualMachineSetupRequest**](../Model/VPSV1VirtualMachineSetupRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1VirtualMachineVirtualMachineResource**](../Model/VPSV1VirtualMachineVirtualMachineResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startVirtualMachineV1()`

```php
startVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Start virtual machine

Start a specified virtual machine.  If the virtual machine is already running, the request will still be processed without any effect.  Use this endpoint to power on stopped VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopVirtualMachineV1()`

```php
stopVirtualMachineV1($virtualMachineId): \Hostinger\Model\VPSV1ActionActionResource
```

Stop virtual machine

Stop a specified virtual machine.  If the virtual machine is already stopped, the request will still be processed without any effect.  Use this endpoint to power off running VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSVirtualMachineApi(config: $config);
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
