# Hostinger\HostingDatacentersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAvailableDatacentersV1()**](HostingDatacentersApi.md#listAvailableDatacentersV1) | **GET** /api/hosting/v1/datacenters | List available datacenters |


## `listAvailableDatacentersV1()`

```php
listAvailableDatacentersV1($orderId): \Hostinger\Model\HostingV1DatacenterDatacenterResource[]
```

List available datacenters

Retrieve a list of datacenters available for setting up hosting plans based on available datacenter capacity and hosting plan of your order. The first item in the list is the best match for your specific order requirements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatacentersApi(config: $config);
$orderId = 123; // int | Order ID

try {
    $result = $apiInstance->listAvailableDatacentersV1($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatacentersApi->listAvailableDatacentersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Order ID | |

### Return type

[**\Hostinger\Model\HostingV1DatacenterDatacenterResource[]**](../Model/HostingV1DatacenterDatacenterResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
