# Hostinger\WordPressPluginsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**installWordPressPluginsV1()**](WordPressPluginsApi.md#installWordPressPluginsV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/install | Install WordPress plugins |


## `installWordPressPluginsV1()`

```php
installWordPressPluginsV1($username, $software, $wordPressV1PluginsInstallPluginsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Install WordPress plugins

Install one or more plugins on an existing WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field). Use GET /api/hosting/v1/wordpress/plugins to discover the plugin slugs available for installation.  This operation is asynchronous: a successful response only means the install job has been queued, not that the plugins are ready.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsInstallPluginsRequest = new \Hostinger\Model\WordPressV1PluginsInstallPluginsRequest(); // \Hostinger\Model\WordPressV1PluginsInstallPluginsRequest

try {
    $result = $apiInstance->installWordPressPluginsV1($username, $software, $wordPressV1PluginsInstallPluginsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->installWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsInstallPluginsRequest** | [**\Hostinger\Model\WordPressV1PluginsInstallPluginsRequest**](../Model/WordPressV1PluginsInstallPluginsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
