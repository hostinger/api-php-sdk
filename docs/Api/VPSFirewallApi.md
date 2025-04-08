# Hostinger\VPSFirewallApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateFirewallV1()**](VPSFirewallApi.md#activateFirewallV1) | **POST** /api/vps/v1/firewall/{firewallId}/activate/{virtualMachineId} | Activate firewall |
| [**createFirewallRuleV1()**](VPSFirewallApi.md#createFirewallRuleV1) | **POST** /api/vps/v1/firewall/{firewallId}/rules | Create firewall rule |
| [**createNewFirewallV1()**](VPSFirewallApi.md#createNewFirewallV1) | **POST** /api/vps/v1/firewall | Create new firewall |
| [**deactivateFirewallV1()**](VPSFirewallApi.md#deactivateFirewallV1) | **POST** /api/vps/v1/firewall/{firewallId}/deactivate/{virtualMachineId} | Deactivate firewall |
| [**deleteFirewallRuleV1()**](VPSFirewallApi.md#deleteFirewallRuleV1) | **DELETE** /api/vps/v1/firewall/{firewallId}/rules/{ruleId} | Delete firewall rule |
| [**deleteFirewallV1()**](VPSFirewallApi.md#deleteFirewallV1) | **DELETE** /api/vps/v1/firewall/{firewallId} | Delete firewall |
| [**getFirewallListV1()**](VPSFirewallApi.md#getFirewallListV1) | **GET** /api/vps/v1/firewall | Get firewall list |
| [**getFirewallV1()**](VPSFirewallApi.md#getFirewallV1) | **GET** /api/vps/v1/firewall/{firewallId} | Get firewall |
| [**syncFirewallV1()**](VPSFirewallApi.md#syncFirewallV1) | **POST** /api/vps/v1/firewall/{firewallId}/sync/{virtualMachineId} | Sync firewall |
| [**updateFirewallRuleV1()**](VPSFirewallApi.md#updateFirewallRuleV1) | **PUT** /api/vps/v1/firewall/{firewallId}/rules/{ruleId} | Update firewall rule |


## `activateFirewallV1()`

```php
activateFirewallV1($firewall_id, $virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Activate firewall

This endpoint activates a firewall for a specified virtual machine.   Only one firewall can be active for a virtual machine at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->activateFirewallV1($firewall_id, $virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->activateFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

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

## `createFirewallRuleV1()`

```php
createFirewallRuleV1($firewall_id, $vpsv1_firewall_rules_store_request): \Hostinger\Model\VPSV1FirewallFirewallRuleResource
```

Create firewall rule

This endpoint creates new firewall rule from a specified firewall.  By default, the firewall drops all incoming traffic, which means you must add accept rules for all ports you want to use.  Any virtual machine that has this firewall activated will loose sync with the firewall and will have to be synced again manually.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$vpsv1_firewall_rules_store_request = new \Hostinger\Model\VPSV1FirewallRulesStoreRequest(); // \Hostinger\Model\VPSV1FirewallRulesStoreRequest

try {
    $result = $apiInstance->createFirewallRuleV1($firewall_id, $vpsv1_firewall_rules_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->createFirewallRuleV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **vpsv1_firewall_rules_store_request** | [**\Hostinger\Model\VPSV1FirewallRulesStoreRequest**](../Model/VPSV1FirewallRulesStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1FirewallFirewallRuleResource**](../Model/VPSV1FirewallFirewallRuleResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewFirewallV1()`

```php
createNewFirewallV1($vpsv1_firewall_store_request): \Hostinger\Model\VPSV1FirewallFirewallResource
```

Create new firewall

This endpoint creates a new firewall.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vpsv1_firewall_store_request = new \Hostinger\Model\VPSV1FirewallStoreRequest(); // \Hostinger\Model\VPSV1FirewallStoreRequest

try {
    $result = $apiInstance->createNewFirewallV1($vpsv1_firewall_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->createNewFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vpsv1_firewall_store_request** | [**\Hostinger\Model\VPSV1FirewallStoreRequest**](../Model/VPSV1FirewallStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1FirewallFirewallResource**](../Model/VPSV1FirewallFirewallResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateFirewallV1()`

```php
deactivateFirewallV1($firewall_id, $virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Deactivate firewall

This endpoint deactivates a firewall for a specified virtual machine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->deactivateFirewallV1($firewall_id, $virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->deactivateFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

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

## `deleteFirewallRuleV1()`

```php
deleteFirewallRuleV1($firewall_id, $rule_id): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete firewall rule

This endpoint deletes a specific firewall rule from a specified firewall.  Any virtual machine that has this firewall activated will loose sync with the firewall and will have to be synced again manually.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$rule_id = 8941182; // int | Firewall Rule ID

try {
    $result = $apiInstance->deleteFirewallRuleV1($firewall_id, $rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->deleteFirewallRuleV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **rule_id** | **int**| Firewall Rule ID | |

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

## `deleteFirewallV1()`

```php
deleteFirewallV1($firewall_id): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete firewall

This endpoint deletes a specified firewall.   Any virtual machine that has this firewall activated will automatically have it deactivated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID

try {
    $result = $apiInstance->deleteFirewallV1($firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->deleteFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |

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

## `getFirewallListV1()`

```php
getFirewallListV1($page): \Hostinger\Model\VPSGetFirewallListV1200Response
```

Get firewall list

This endpoint retrieves a list of all firewalls available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number

try {
    $result = $apiInstance->getFirewallListV1($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->getFirewallListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\VPSGetFirewallListV1200Response**](../Model/VPSGetFirewallListV1200Response.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFirewallV1()`

```php
getFirewallV1($firewall_id): \Hostinger\Model\VPSV1FirewallFirewallResource
```

Get firewall

This endpoint retrieves firewall by its ID and rules associated with it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID

try {
    $result = $apiInstance->getFirewallV1($firewall_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->getFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |

### Return type

[**\Hostinger\Model\VPSV1FirewallFirewallResource**](../Model/VPSV1FirewallFirewallResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncFirewallV1()`

```php
syncFirewallV1($firewall_id, $virtual_machine_id): \Hostinger\Model\VPSV1ActionActionResource
```

Sync firewall

This endpoint syncs a firewall for a specified virtual machine.  Firewall can loose sync with virtual machine if the firewall has new rules added, removed or updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$virtual_machine_id = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->syncFirewallV1($firewall_id, $virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->syncFirewallV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **virtual_machine_id** | **int**| Virtual Machine ID | |

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

## `updateFirewallRuleV1()`

```php
updateFirewallRuleV1($firewall_id, $rule_id, $vpsv1_firewall_rules_store_request): \Hostinger\Model\VPSV1FirewallFirewallRuleResource
```

Update firewall rule

This endpoint updates a specific firewall rule from a specified firewall.  Any virtual machine that has this firewall activated will loose sync with the firewall and will have to be synced again manually.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSFirewallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firewall_id = 9449049; // int | Firewall ID
$rule_id = 8941182; // int | Firewall Rule ID
$vpsv1_firewall_rules_store_request = new \Hostinger\Model\VPSV1FirewallRulesStoreRequest(); // \Hostinger\Model\VPSV1FirewallRulesStoreRequest

try {
    $result = $apiInstance->updateFirewallRuleV1($firewall_id, $rule_id, $vpsv1_firewall_rules_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSFirewallApi->updateFirewallRuleV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firewall_id** | **int**| Firewall ID | |
| **rule_id** | **int**| Firewall Rule ID | |
| **vpsv1_firewall_rules_store_request** | [**\Hostinger\Model\VPSV1FirewallRulesStoreRequest**](../Model/VPSV1FirewallRulesStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1FirewallFirewallRuleResource**](../Model/VPSV1FirewallFirewallRuleResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
