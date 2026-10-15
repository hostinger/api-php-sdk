# Hostinger\AgentReadinessScansApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAgentReadinessScanV1()**](AgentReadinessScansApi.md#getAgentReadinessScanV1) | **GET** /api/agent-readiness/v1/scans/{domain} | Get agent readiness scan |
| [**runAgentReadinessScanV1()**](AgentReadinessScansApi.md#runAgentReadinessScanV1) | **POST** /api/agent-readiness/v1/scans | Run agent readiness scan |


## `getAgentReadinessScanV1()`

```php
getAgentReadinessScanV1($domain): \Hostinger\Model\AgentReadinessV1ScansScanResource
```

Get agent readiness scan

Get the latest agent readiness scan of a website.\\n Scans started with the `Run agent readiness scan` operation are asynchronous. While the status is `pending`, the result fields are null; wait a few seconds and call this operation again until the status is `completed` or `failed`. A `failed` scan is not retried; run the scan again.\\n A completed scan has a 0-100 score, a letter grade, a score per category, and the result of every check with the evidence found and how to fix it. Check names are listed by the `List checks` operation.\\n Returns 404 when the domain has never been scanned; use the `Run agent readiness scan` operation first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgentReadinessScansApi(config: $config);
$domain = example.com; // string | Domain name the scan was run for

try {
    $result = $apiInstance->getAgentReadinessScanV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentReadinessScansApi->getAgentReadinessScanV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name the scan was run for | |

### Return type

[**\Hostinger\Model\AgentReadinessV1ScansScanResource**](../Model/AgentReadinessV1ScansScanResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runAgentReadinessScanV1()`

```php
runAgentReadinessScanV1($agentReadinessV1ScansRunScanRequest): \Hostinger\Model\AgentReadinessV1ScansScanResource
```

Run agent readiness scan

Start a scan of how ready a public website is for AI agents to discover, read and act on.\\n Scanning is asynchronous: this operation only starts the scan, and the returned scan is usually `pending` with no results yet. To get the results, poll the `Get agent readiness scan` operation with the same domain every few seconds until its status is `completed` or `failed`. The scan itself is limited to 60 seconds, plus any time it waits in the queue. A `failed` scan is not retried; run this operation again.\\n Starting a scan for a domain that already has a pending scan from the last 5 minutes returns that scan instead of starting a new one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgentReadinessScansApi(config: $config);
$agentReadinessV1ScansRunScanRequest = new \Hostinger\Model\AgentReadinessV1ScansRunScanRequest(); // \Hostinger\Model\AgentReadinessV1ScansRunScanRequest

try {
    $result = $apiInstance->runAgentReadinessScanV1($agentReadinessV1ScansRunScanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentReadinessScansApi->runAgentReadinessScanV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agentReadinessV1ScansRunScanRequest** | [**\Hostinger\Model\AgentReadinessV1ScansRunScanRequest**](../Model/AgentReadinessV1ScansRunScanRequest.md)|  | |

### Return type

[**\Hostinger\Model\AgentReadinessV1ScansScanResource**](../Model/AgentReadinessV1ScansScanResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
