# Hostinger\WordPressThemesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateWordPressThemeV1()**](WordPressThemesApi.md#activateWordPressThemeV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/activate | Activate WordPress theme |
| [**installWordPressThemeV1()**](WordPressThemesApi.md#installWordPressThemeV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/install | Install WordPress theme |
| [**listInstalledWordPressThemesV1()**](WordPressThemesApi.md#listInstalledWordPressThemesV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes | List installed WordPress themes |
| [**listWordPressThemesV1()**](WordPressThemesApi.md#listWordPressThemesV1) | **GET** /api/hosting/v1/wordpress/themes | List WordPress themes |
| [**uninstallWordPressThemesV1()**](WordPressThemesApi.md#uninstallWordPressThemesV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/uninstall | Uninstall WordPress themes |
| [**updateWordPressThemesV1()**](WordPressThemesApi.md#updateWordPressThemesV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/update | Update WordPress themes |


## `activateWordPressThemeV1()`

```php
activateWordPressThemeV1($username, $software, $wordPressV1ThemesActivateThemeRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Activate WordPress theme

Activate an installed theme on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the activation job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1ThemesActivateThemeRequest = new \Hostinger\Model\WordPressV1ThemesActivateThemeRequest(); // \Hostinger\Model\WordPressV1ThemesActivateThemeRequest

try {
    $result = $apiInstance->activateWordPressThemeV1($username, $software, $wordPressV1ThemesActivateThemeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->activateWordPressThemeV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1ThemesActivateThemeRequest** | [**\Hostinger\Model\WordPressV1ThemesActivateThemeRequest**](../Model/WordPressV1ThemesActivateThemeRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `listInstalledWordPressThemesV1()`

```php
listInstalledWordPressThemesV1($username, $software): \Hostinger\Model\WordPressV1ThemesInstalledThemeResource[]
```

List installed WordPress themes

List themes installed on a WordPress installation, including their status, available updates and known vulnerabilities.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->listInstalledWordPressThemesV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->listInstalledWordPressThemesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1ThemesInstalledThemeResource[]**](../Model/WordPressV1ThemesInstalledThemeResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWordPressThemesV1()`

```php
listWordPressThemesV1($orderId, $search): \Hostinger\Model\WordPressV1ThemesThemeResource[]
```

List WordPress themes

List WordPress themes available to install.  Use the returned `slug` values with POST /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/install.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$orderId = 123456; // int | Optionally scope themes to a specific order.
$search = blog; // string | Search term to match against theme names.

try {
    $result = $apiInstance->listWordPressThemesV1($orderId, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->listWordPressThemesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Optionally scope themes to a specific order. | [optional] |
| **search** | **string**| Search term to match against theme names. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1ThemesThemeResource[]**](../Model/WordPressV1ThemesThemeResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallWordPressThemesV1()`

```php
uninstallWordPressThemesV1($username, $software, $wordPressV1ThemesUninstallThemesRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Uninstall WordPress themes

Uninstall one or more themes from a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the uninstall job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1ThemesUninstallThemesRequest = new \Hostinger\Model\WordPressV1ThemesUninstallThemesRequest(); // \Hostinger\Model\WordPressV1ThemesUninstallThemesRequest

try {
    $result = $apiInstance->uninstallWordPressThemesV1($username, $software, $wordPressV1ThemesUninstallThemesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->uninstallWordPressThemesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1ThemesUninstallThemesRequest** | [**\Hostinger\Model\WordPressV1ThemesUninstallThemesRequest**](../Model/WordPressV1ThemesUninstallThemesRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordPressThemesV1()`

```php
updateWordPressThemesV1($username, $software, $wordPressV1ThemesUpdateThemesRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update WordPress themes

Update one or more installed themes to their latest version on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the update job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressThemesApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1ThemesUpdateThemesRequest = new \Hostinger\Model\WordPressV1ThemesUpdateThemesRequest(); // \Hostinger\Model\WordPressV1ThemesUpdateThemesRequest

try {
    $result = $apiInstance->updateWordPressThemesV1($username, $software, $wordPressV1ThemesUpdateThemesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressThemesApi->updateWordPressThemesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1ThemesUpdateThemesRequest** | [**\Hostinger\Model\WordPressV1ThemesUpdateThemesRequest**](../Model/WordPressV1ThemesUpdateThemesRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
