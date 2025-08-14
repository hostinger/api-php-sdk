# Hostinger\VPSOSTemplatesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTemplateDetailsV1()**](VPSOSTemplatesApi.md#getTemplateDetailsV1) | **GET** /api/vps/v1/templates/{templateId} | Get template details |
| [**getTemplatesV1()**](VPSOSTemplatesApi.md#getTemplatesV1) | **GET** /api/vps/v1/templates | Get templates |


## `getTemplateDetailsV1()`

```php
getTemplateDetailsV1($templateId): \Hostinger\Model\VPSV1TemplateTemplateResource
```

Get template details

Retrieve detailed information about a specific OS template for virtual machines.  Use this endpoint to view specific template specifications before deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSOSTemplatesApi(config: $config);
$templateId = 2868928; // int | Template ID

try {
    $result = $apiInstance->getTemplateDetailsV1($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSOSTemplatesApi->getTemplateDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| Template ID | |

### Return type

[**\Hostinger\Model\VPSV1TemplateTemplateResource**](../Model/VPSV1TemplateTemplateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplatesV1()`

```php
getTemplatesV1(): \Hostinger\Model\VPSV1TemplateTemplateResource[]
```

Get templates

Retrieve available OS templates for virtual machines.  Use this endpoint to view operating system options before creating or recreating VPS instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSOSTemplatesApi(config: $config);

try {
    $result = $apiInstance->getTemplatesV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSOSTemplatesApi->getTemplatesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1TemplateTemplateResource[]**](../Model/VPSV1TemplateTemplateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
