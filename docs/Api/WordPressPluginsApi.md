# Hostinger\WordPressPluginsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateWordPressPluginV1()**](WordPressPluginsApi.md#activateWordPressPluginV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/activate | Activate WordPress plugin |
| [**checkIfWooCommerceIsInstalledV1()**](WordPressPluginsApi.md#checkIfWooCommerceIsInstalledV1) | **GET** /api/hosting/v1/wordpress/plugins/is-woocommerce-installed | Check if WooCommerce is installed |
| [**deactivateWordPressPluginV1()**](WordPressPluginsApi.md#deactivateWordPressPluginV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/deactivate | Deactivate WordPress plugin |
| [**installWordPressPluginsV1()**](WordPressPluginsApi.md#installWordPressPluginsV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/install | Install WordPress plugins |
| [**listAvailableWordPressPluginsV1()**](WordPressPluginsApi.md#listAvailableWordPressPluginsV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/available | List available WordPress plugins |
| [**listInstalledWordPressPluginsV1()**](WordPressPluginsApi.md#listInstalledWordPressPluginsV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins | List installed WordPress plugins |
| [**listSuggestedWordPressPluginsV1()**](WordPressPluginsApi.md#listSuggestedWordPressPluginsV1) | **GET** /api/hosting/v1/wordpress/plugins/suggested | List suggested WordPress plugins |
| [**searchWordPressPluginsV1()**](WordPressPluginsApi.md#searchWordPressPluginsV1) | **GET** /api/hosting/v1/wordpress/plugins | Search WordPress plugins |
| [**uninstallWordPressPluginsV1()**](WordPressPluginsApi.md#uninstallWordPressPluginsV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/uninstall | Uninstall WordPress plugins |
| [**updateHostingerWordPressPluginV1()**](WordPressPluginsApi.md#updateHostingerWordPressPluginV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/hostinger/update | Update Hostinger WordPress plugin |
| [**updateWordPressPluginsV1()**](WordPressPluginsApi.md#updateWordPressPluginsV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/update | Update WordPress plugins |


## `activateWordPressPluginV1()`

```php
activateWordPressPluginV1($username, $software, $wordPressV1PluginsActivatePluginRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Activate WordPress plugin

Activate an installed plugin on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the activation job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsActivatePluginRequest = new \Hostinger\Model\WordPressV1PluginsActivatePluginRequest(); // \Hostinger\Model\WordPressV1PluginsActivatePluginRequest

try {
    $result = $apiInstance->activateWordPressPluginV1($username, $software, $wordPressV1PluginsActivatePluginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->activateWordPressPluginV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsActivatePluginRequest** | [**\Hostinger\Model\WordPressV1PluginsActivatePluginRequest**](../Model/WordPressV1PluginsActivatePluginRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkIfWooCommerceIsInstalledV1()`

```php
checkIfWooCommerceIsInstalledV1($domain): \Hostinger\Model\WordPressV1PluginsWoocommerceInstalledResource
```

Check if WooCommerce is installed

Check whether WooCommerce is installed on any WordPress installation of a domain. Optionally filter by domain to scope the check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$domain = example.com; // string | Filter by domain name (exact match)

try {
    $result = $apiInstance->checkIfWooCommerceIsInstalledV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->checkIfWooCommerceIsInstalledV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Filter by domain name (exact match) | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1PluginsWoocommerceInstalledResource**](../Model/WordPressV1PluginsWoocommerceInstalledResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateWordPressPluginV1()`

```php
deactivateWordPressPluginV1($username, $software, $wordPressV1PluginsDeactivatePluginRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Deactivate WordPress plugin

Deactivate an installed plugin on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the deactivation job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsDeactivatePluginRequest = new \Hostinger\Model\WordPressV1PluginsDeactivatePluginRequest(); // \Hostinger\Model\WordPressV1PluginsDeactivatePluginRequest

try {
    $result = $apiInstance->deactivateWordPressPluginV1($username, $software, $wordPressV1PluginsDeactivatePluginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->deactivateWordPressPluginV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsDeactivatePluginRequest** | [**\Hostinger\Model\WordPressV1PluginsDeactivatePluginRequest**](../Model/WordPressV1PluginsDeactivatePluginRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `listAvailableWordPressPluginsV1()`

```php
listAvailableWordPressPluginsV1($username, $software): \Hostinger\Model\WordPressV1PluginsAvailablePluginResource[]
```

List available WordPress plugins

List plugins recommended for installation on a WordPress installation that are not yet installed.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->listAvailableWordPressPluginsV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->listAvailableWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1PluginsAvailablePluginResource[]**](../Model/WordPressV1PluginsAvailablePluginResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstalledWordPressPluginsV1()`

```php
listInstalledWordPressPluginsV1($username, $software, $category): \Hostinger\Model\WordPressV1PluginsInstalledPluginResource[]
```

List installed WordPress plugins

List plugins installed on a WordPress installation, including their status, available updates and known vulnerabilities.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$category = cache; // string | Filter installed plugins by category.

try {
    $result = $apiInstance->listInstalledWordPressPluginsV1($username, $software, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->listInstalledWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **category** | **string**| Filter installed plugins by category. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1PluginsInstalledPluginResource[]**](../Model/WordPressV1PluginsInstalledPluginResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSuggestedWordPressPluginsV1()`

```php
listSuggestedWordPressPluginsV1($orderId): \Hostinger\Model\WordPressV1PluginsSuggestedPluginGroupResource[]
```

List suggested WordPress plugins

List curated plugin suggestions grouped by website type.  Use the returned `slug` values with POST /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/install.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$orderId = 123456; // int | Optionally scope suggestions to a specific order.

try {
    $result = $apiInstance->listSuggestedWordPressPluginsV1($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->listSuggestedWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Optionally scope suggestions to a specific order. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1PluginsSuggestedPluginGroupResource[]**](../Model/WordPressV1PluginsSuggestedPluginGroupResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchWordPressPluginsV1()`

```php
searchWordPressPluginsV1($search): \Hostinger\Model\WordPressV1PluginsPluginResource[]
```

Search WordPress plugins

Search the WordPress.org plugin directory for plugins available to install.  Use the returned `slug` values with POST /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/install.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$search = seo; // string | Search term to match against plugin names. Minimum 3 characters.

try {
    $result = $apiInstance->searchWordPressPluginsV1($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->searchWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search term to match against plugin names. Minimum 3 characters. | |

### Return type

[**\Hostinger\Model\WordPressV1PluginsPluginResource[]**](../Model/WordPressV1PluginsPluginResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallWordPressPluginsV1()`

```php
uninstallWordPressPluginsV1($username, $software, $wordPressV1PluginsUninstallPluginsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Uninstall WordPress plugins

Uninstall one or more plugins from a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the uninstall job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsUninstallPluginsRequest = new \Hostinger\Model\WordPressV1PluginsUninstallPluginsRequest(); // \Hostinger\Model\WordPressV1PluginsUninstallPluginsRequest

try {
    $result = $apiInstance->uninstallWordPressPluginsV1($username, $software, $wordPressV1PluginsUninstallPluginsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->uninstallWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsUninstallPluginsRequest** | [**\Hostinger\Model\WordPressV1PluginsUninstallPluginsRequest**](../Model/WordPressV1PluginsUninstallPluginsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostingerWordPressPluginV1()`

```php
updateHostingerWordPressPluginV1($username, $software, $wordPressV1PluginsUpdateHostingerPluginRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update Hostinger WordPress plugin

Update a Hostinger plugin to its latest version on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the update job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsUpdateHostingerPluginRequest = new \Hostinger\Model\WordPressV1PluginsUpdateHostingerPluginRequest(); // \Hostinger\Model\WordPressV1PluginsUpdateHostingerPluginRequest

try {
    $result = $apiInstance->updateHostingerWordPressPluginV1($username, $software, $wordPressV1PluginsUpdateHostingerPluginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->updateHostingerWordPressPluginV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsUpdateHostingerPluginRequest** | [**\Hostinger\Model\WordPressV1PluginsUpdateHostingerPluginRequest**](../Model/WordPressV1PluginsUpdateHostingerPluginRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordPressPluginsV1()`

```php
updateWordPressPluginsV1($username, $software, $wordPressV1PluginsUpdatePluginsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update WordPress plugins

Update one or more installed plugins to their latest version on a WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the update job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressPluginsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1PluginsUpdatePluginsRequest = new \Hostinger\Model\WordPressV1PluginsUpdatePluginsRequest(); // \Hostinger\Model\WordPressV1PluginsUpdatePluginsRequest

try {
    $result = $apiInstance->updateWordPressPluginsV1($username, $software, $wordPressV1PluginsUpdatePluginsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressPluginsApi->updateWordPressPluginsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1PluginsUpdatePluginsRequest** | [**\Hostinger\Model\WordPressV1PluginsUpdatePluginsRequest**](../Model/WordPressV1PluginsUpdatePluginsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
