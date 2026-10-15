# Hostinger\AgentReadinessChecksApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listChecksV1()**](AgentReadinessChecksApi.md#listChecksV1) | **GET** /api/agent-readiness/v1/checks | List checks |


## `listChecksV1()`

```php
listChecksV1(): \Hostinger\Model\AgentReadinessV1ChecksCheckResource[]
```

List checks

List every check an agent readiness scan runs, with its name, category and weight.\\n Use it to show the human-readable name of each `check_id` in a scan's results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgentReadinessChecksApi(config: $config);

try {
    $result = $apiInstance->listChecksV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentReadinessChecksApi->listChecksV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\AgentReadinessV1ChecksCheckResource[]**](../Model/AgentReadinessV1ChecksCheckResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
