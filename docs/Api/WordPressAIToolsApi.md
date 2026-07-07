# Hostinger\WordPressAIToolsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**setAIOptionStatusV1()**](WordPressAIToolsApi.md#setAIOptionStatusV1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/hostinger-plugins/ai-option/status | Set AI option status |
| [**showAIOptionStatusV1()**](WordPressAIToolsApi.md#showAIOptionStatusV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/hostinger-plugins/ai-option/status | Show AI option status |


## `setAIOptionStatusV1()`

```php
setAIOptionStatusV1($username, $software, $wordPressV1HostingerPluginsUpdateAiOptionStatusRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Set AI option status

Enable or disable an AI option for the Hostinger Tools plugin on the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressAIToolsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1HostingerPluginsUpdateAiOptionStatusRequest = new \Hostinger\Model\WordPressV1HostingerPluginsUpdateAiOptionStatusRequest(); // \Hostinger\Model\WordPressV1HostingerPluginsUpdateAiOptionStatusRequest

try {
    $result = $apiInstance->setAIOptionStatusV1($username, $software, $wordPressV1HostingerPluginsUpdateAiOptionStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressAIToolsApi->setAIOptionStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1HostingerPluginsUpdateAiOptionStatusRequest** | [**\Hostinger\Model\WordPressV1HostingerPluginsUpdateAiOptionStatusRequest**](../Model/WordPressV1HostingerPluginsUpdateAiOptionStatusRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showAIOptionStatusV1()`

```php
showAIOptionStatusV1($username, $software, $option): \Hostinger\Model\WordPressV1HostingerPluginsAiOptionStatusResource
```

Show AI option status

Show the current AI option status for the Hostinger Tools plugin on the specified WordPress installation. Filter by `option` to return a single option, or omit it to return all options.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressAIToolsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$option = llmstxt; // string | Filter the status by a single AI option.

try {
    $result = $apiInstance->showAIOptionStatusV1($username, $software, $option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressAIToolsApi->showAIOptionStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **option** | **string**| Filter the status by a single AI option. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1HostingerPluginsAiOptionStatusResource**](../Model/WordPressV1HostingerPluginsAiOptionStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
