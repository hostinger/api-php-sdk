# Hostinger\VPSOSTemplatesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTemplateListV1()**](VPSOSTemplatesApi.md#getTemplateListV1) | **GET** /api/vps/v1/templates | Get template list |
| [**getTemplateV1()**](VPSOSTemplatesApi.md#getTemplateV1) | **GET** /api/vps/v1/templates/{templateId} | Get template |


## `getTemplateListV1()`

```php
getTemplateListV1(): \Hostinger\Model\VPSV1TemplateTemplateResource[]
```

Get template list

This endpoint retrieves a list of available OS templates for virtual machines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSOSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplateListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSOSTemplatesApi->getTemplateListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\VPSV1TemplateTemplateResource[]**](../Model/VPSV1TemplateTemplateResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateV1()`

```php
getTemplateV1($templateId): \Hostinger\Model\VPSV1TemplateTemplateResource
```

Get template

This endpoint retrieves details of a specific OS template for virtual machines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSOSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templateId = 2868928; // int | Template ID

try {
    $result = $apiInstance->getTemplateV1($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSOSTemplatesApi->getTemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templateId** | **int**| Template ID | |

### Return type

[**\Hostinger\Model\VPSV1TemplateTemplateResource**](../Model/VPSV1TemplateTemplateResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
