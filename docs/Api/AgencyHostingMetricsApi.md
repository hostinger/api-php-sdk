# Hostinger\AgencyHostingMetricsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAgencyPlanOrderDiskUsageMetricsV1()**](AgencyHostingMetricsApi.md#listAgencyPlanOrderDiskUsageMetricsV1) | **GET** /api/agency-hosting/v1/orders/{order_id}/disk-usage-metrics | List Agency Plan order disk usage metrics |
| [**listOrderResourceUsageMetricsV1()**](AgencyHostingMetricsApi.md#listOrderResourceUsageMetricsV1) | **GET** /api/agency-hosting/v1/orders/{order_id}/resource-usage-metrics | List order resource usage metrics |


## `listAgencyPlanOrderDiskUsageMetricsV1()`

```php
listAgencyPlanOrderDiskUsageMetricsV1($orderId, $timeFrameDays): \Hostinger\Model\AgencyHostingV1OrdersDiskUsageMetricsMetricsResource
```

List Agency Plan order disk usage metrics

Returns aggregated disk and inode usage for the Agency Plan order over the selected time frame, plus the plan quotas. Figures cover the whole order account. Values may be up to one hour stale. CPU, memory, and process usage are on the resource-usage-metrics endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingMetricsApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID
$timeFrameDays = 7; // int | Length of the window in days, ending now. Bucket size grows with the window.

try {
    $result = $apiInstance->listAgencyPlanOrderDiskUsageMetricsV1($orderId, $timeFrameDays);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingMetricsApi->listAgencyPlanOrderDiskUsageMetricsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |
| **timeFrameDays** | **int**| Length of the window in days, ending now. Bucket size grows with the window. | [optional] [default to 1] |

### Return type

[**\Hostinger\Model\AgencyHostingV1OrdersDiskUsageMetricsMetricsResource**](../Model/AgencyHostingV1OrdersDiskUsageMetricsMetricsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrderResourceUsageMetricsV1()`

```php
listOrderResourceUsageMetricsV1($orderId, $timeFrameHours): \Hostinger\Model\AgencyHostingV1OrdersResourceUsageMetricsMetricsResource
```

List order resource usage metrics

Returns aggregated CPU, memory, and process usage for the Agency Plan order over the selected time frame, plus the plan quotas and a per-website breakdown. Each website is identified by uid. Suspended and deleted websites are excluded from both the order totals and the per-website breakdown. Values may be up to one hour stale. Disk and inode usage are on the disk-usage-metrics endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingMetricsApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID
$timeFrameHours = 168; // int | Length of the window in hours, ending now. Bucket size grows with the window.

try {
    $result = $apiInstance->listOrderResourceUsageMetricsV1($orderId, $timeFrameHours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingMetricsApi->listOrderResourceUsageMetricsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |
| **timeFrameHours** | **int**| Length of the window in hours, ending now. Bucket size grows with the window. | [optional] [default to 24] |

### Return type

[**\Hostinger\Model\AgencyHostingV1OrdersResourceUsageMetricsMetricsResource**](../Model/AgencyHostingV1OrdersResourceUsageMetricsMetricsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
