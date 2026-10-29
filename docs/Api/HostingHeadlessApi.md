# Hostinger\HostingHeadlessApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**submitHeadlessBuildReportV1()**](HostingHeadlessApi.md#submitHeadlessBuildReportV1) | **POST** /api/hosting/v1/headless/agent-reports | Submit headless build report |


## `submitHeadlessBuildReportV1()`

```php
submitHeadlessBuildReportV1($hostingV1HeadlessStoreAgentReportRequest): \Hostinger\Model\HostingV1HeadlessAgentReportResource
```

Submit headless build report

Submits the build report the headless skill writes at the end of a run (including early stops), so Hostinger can learn where builds get stuck. Send one report per call, with the report JSON as the request body, unchanged.  The report must match report.schema.json v1; an invalid report returns 422 and is not stored. The report is linked to the authenticated account, so do not add account details to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingHeadlessApi(config: $config);
$hostingV1HeadlessStoreAgentReportRequest = new \Hostinger\Model\HostingV1HeadlessStoreAgentReportRequest(); // \Hostinger\Model\HostingV1HeadlessStoreAgentReportRequest

try {
    $result = $apiInstance->submitHeadlessBuildReportV1($hostingV1HeadlessStoreAgentReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingHeadlessApi->submitHeadlessBuildReportV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostingV1HeadlessStoreAgentReportRequest** | [**\Hostinger\Model\HostingV1HeadlessStoreAgentReportRequest**](../Model/HostingV1HeadlessStoreAgentReportRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1HeadlessAgentReportResource**](../Model/HostingV1HeadlessAgentReportResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
