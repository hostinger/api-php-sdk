# Hostinger\ReachAutomationsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAutomationDetailsV1()**](ReachAutomationsApi.md#getAutomationDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/automations/{automationUuid} | Get automation details |
| [**listAutomationStepsV1()**](ReachAutomationsApi.md#listAutomationStepsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/automations/{automationUuid}/steps | List automation steps |
| [**listAutomationsV1()**](ReachAutomationsApi.md#listAutomationsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/automations | List automations |


## `getAutomationDetailsV1()`

```php
getAutomationDetailsV1($profileUuid, $automationUuid): \Hostinger\Model\ReachV1AutomationsAutomationResource
```

Get automation details

Get a single automation with the counts of contacts that entered it, are moving through it, finished it or failed on the way.  This describes the automation itself. To see the workflow it runs, use the steps endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachAutomationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$automationUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Automation uuid parameter

try {
    $result = $apiInstance->getAutomationDetailsV1($profileUuid, $automationUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAutomationsApi->getAutomationDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **automationUuid** | **string**| Automation uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1AutomationsAutomationResource**](../Model/ReachV1AutomationsAutomationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationStepsV1()`

```php
listAutomationStepsV1($profileUuid, $automationUuid): \Hostinger\Model\ReachV1AutomationsStepsAutomationStepResource[]
```

List automation steps

Get the workflow of an automation as a flat list of steps.  The steps form a tree rather than a straight line: follow `parent_uuid` to reconstruct the branches, and use `step_order` to order the steps that share a parent. An automation with no steps yet returns an empty list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachAutomationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$automationUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Automation uuid parameter

try {
    $result = $apiInstance->listAutomationStepsV1($profileUuid, $automationUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAutomationsApi->listAutomationStepsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **automationUuid** | **string**| Automation uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1AutomationsStepsAutomationStepResource[]**](../Model/ReachV1AutomationsStepsAutomationStepResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutomationsV1()`

```php
listAutomationsV1($profileUuid, $status, $sortDirection, $page, $perPage): \Hostinger\Model\ReachListAutomationsV1200Response
```

List automations

Get a paginated list of the automations in a profile.  Every automation comes with the counts of contacts that entered it, are moving through it, finished it or failed on the way. Those counts describe the contact journey and are not email engagement metrics - for opens, clicks and unsubscribes use the campaign statistics endpoint instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachAutomationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$status = active; // string | Filter automations by status.  There is no `completed` status. An automation that has finished for every contact still reports `active`.
$sortDirection = desc; // string | Order automations by creation date. Newest first unless set to `asc`.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAutomationsV1($profileUuid, $status, $sortDirection, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachAutomationsApi->listAutomationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **status** | **string**| Filter automations by status.  There is no &#x60;completed&#x60; status. An automation that has finished for every contact still reports &#x60;active&#x60;. | [optional] |
| **sortDirection** | **string**| Order automations by creation date. Newest first unless set to &#x60;asc&#x60;. | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListAutomationsV1200Response**](../Model/ReachListAutomationsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
