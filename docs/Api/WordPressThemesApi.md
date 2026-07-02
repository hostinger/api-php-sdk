# Hostinger\WordPressThemesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**installWordPressThemeV1()**](WordPressThemesApi.md#installWordPressThemeV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/install | Install WordPress theme |


## `installWordPressThemeV1()`

```php
installWordPressThemeV1($username, $software, $wordPressV1ThemesInstallThemeRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Install WordPress theme

Install a theme on an existing WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  When the theme is one of the Hostinger themes (hostinger-blog, hostinger-affiliate-theme, hostinger-ai-theme), the optional `palette`, `layout`, and `font` fields are forwarded to the custom installer (defaults: palette1, layout1, default). For any other theme they are ignored.  This operation is asynchronous: a successful response only means the install job has been queued, not that the theme is ready.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1ThemesInstallThemeRequest = new \Hostinger\Model\WordPressV1ThemesInstallThemeRequest(); // \Hostinger\Model\WordPressV1ThemesInstallThemeRequest

try {
    $result = $apiInstance->installWordPressThemeV1($username, $software, $wordPressV1ThemesInstallThemeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->installWordPressThemeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1ThemesInstallThemeRequest** | [**\Hostinger\Model\WordPressV1ThemesInstallThemeRequest**](../Model/WordPressV1ThemesInstallThemeRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
