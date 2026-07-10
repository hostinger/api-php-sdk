# Hostinger\AgencyHostingDatacentersApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAvailableDatacentersForAnAgencyPlanOrderV1()**](AgencyHostingDatacentersApi.md#listAvailableDatacentersForAnAgencyPlanOrderV1) | **GET** /api/agency-hosting/v1/orders/{order_id}/datacenters | List available datacenters for an Agency Plan order |


## `listAvailableDatacentersForAnAgencyPlanOrderV1()`

```php
listAvailableDatacentersForAnAgencyPlanOrderV1($orderId): \Hostinger\Model\AgencyHostingV1DatacentersDatacenterResource[]
```

List available datacenters for an Agency Plan order

Lists the datacenters available for provisioning a new website on the given Agency Plan hosting order.  Each datacenter includes a `pinger_url` you can ping from the client to measure round-trip latency; comparing the results across datacenters lets you pick the nearest one (lowest ping) before choosing its `code` as the `datacenter_code` when creating a website setup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatacentersApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID

try {
    $result = $apiInstance->listAvailableDatacentersForAnAgencyPlanOrderV1($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatacentersApi->listAvailableDatacentersForAnAgencyPlanOrderV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1DatacentersDatacenterResource[]**](../Model/AgencyHostingV1DatacentersDatacenterResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
