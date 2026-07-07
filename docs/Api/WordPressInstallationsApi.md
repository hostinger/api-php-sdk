# Hostinger\WordPressInstallationsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkIfWordPressInstallationsAreValidV1()**](WordPressInstallationsApi.md#checkIfWordPressInstallationsAreValidV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations/check-is-valid | Check if WordPress installations are valid |
| [**deleteWordPressInstallationV1()**](WordPressInstallationsApi.md#deleteWordPressInstallationV1) | **DELETE** /api/hosting/v1/accounts/{username}/wordpress/{software} | Delete WordPress installation |
| [**detectWordPressInstallationsV1()**](WordPressInstallationsApi.md#detectWordPressInstallationsV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations/detect | Detect WordPress installations |
| [**getInstallationJWTTokenV1()**](WordPressInstallationsApi.md#getInstallationJWTTokenV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/jwt-token | Get installation JWT token |
| [**installWordPressV1()**](WordPressInstallationsApi.md#installWordPressV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations | Install WordPress |
| [**listAvailableWordPressCoreUpdatesV1()**](WordPressInstallationsApi.md#listAvailableWordPressCoreUpdatesV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/updates | List available WordPress core updates |
| [**listWordPressInstallationsV1()**](WordPressInstallationsApi.md#listWordPressInstallationsV1) | **GET** /api/hosting/v1/wordpress/installations | List WordPress installations |
| [**showWordPressCoreVersionV1()**](WordPressInstallationsApi.md#showWordPressCoreVersionV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/version | Show WordPress core version |
| [**updateWordPressCoreV1()**](WordPressInstallationsApi.md#updateWordPressCoreV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/update | Update WordPress core |


## `checkIfWordPressInstallationsAreValidV1()`

```php
checkIfWordPressInstallationsAreValidV1($username, $wordPressV1InstallationsCheckIsValidRequest): \Hostinger\Model\WordPressV1InstallationsCheckIsValidResultResource[]
```

Check if WordPress installations are valid

Check whether one or more WordPress installations are valid and working correctly. Detects broken installations caused by missing files, broken plugins, themes and similar issues.  Provide the WordPress installation (software) identifiers in the body. They can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$wordPressV1InstallationsCheckIsValidRequest = new \Hostinger\Model\WordPressV1InstallationsCheckIsValidRequest(); // \Hostinger\Model\WordPressV1InstallationsCheckIsValidRequest

try {
    $result = $apiInstance->checkIfWordPressInstallationsAreValidV1($username, $wordPressV1InstallationsCheckIsValidRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->checkIfWordPressInstallationsAreValidV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **wordPressV1InstallationsCheckIsValidRequest** | [**\Hostinger\Model\WordPressV1InstallationsCheckIsValidRequest**](../Model/WordPressV1InstallationsCheckIsValidRequest.md)|  | |

### Return type

[**\Hostinger\Model\WordPressV1InstallationsCheckIsValidResultResource[]**](../Model/WordPressV1InstallationsCheckIsValidResultResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWordPressInstallationV1()`

```php
deleteWordPressInstallationV1($username, $software, $wordPressV1InstallationsDeleteInstallationRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete WordPress installation

Delete the specified WordPress installation, with optional file and database removal. This removes all associated components including plugins, themes, staging websites and any other related data.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1InstallationsDeleteInstallationRequest = new \Hostinger\Model\WordPressV1InstallationsDeleteInstallationRequest(); // \Hostinger\Model\WordPressV1InstallationsDeleteInstallationRequest

try {
    $result = $apiInstance->deleteWordPressInstallationV1($username, $software, $wordPressV1InstallationsDeleteInstallationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->deleteWordPressInstallationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1InstallationsDeleteInstallationRequest** | [**\Hostinger\Model\WordPressV1InstallationsDeleteInstallationRequest**](../Model/WordPressV1InstallationsDeleteInstallationRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detectWordPressInstallationsV1()`

```php
detectWordPressInstallationsV1($username): \Hostinger\Model\CommonSuccessEmptyResource
```

Detect WordPress installations

Trigger a background scan to detect WordPress installations for the account.  This operation is asynchronous: a successful response only means the scan has been queued. Poll GET /api/hosting/v1/wordpress/installations to fetch the detected installations once the scan completes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string

try {
    $result = $apiInstance->detectWordPressInstallationsV1($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->detectWordPressInstallationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstallationJWTTokenV1()`

```php
getInstallationJWTTokenV1($username, $software): \Hostinger\Model\WordPressV1InstallationsJwtTokenResource
```

Get installation JWT token

Return a JWT token used to authenticate requests against the specified WordPress installation, including its MCP (Model Context Protocol) endpoint.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->getInstallationJWTTokenV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->getInstallationJWTTokenV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1InstallationsJwtTokenResource**](../Model/WordPressV1InstallationsJwtTokenResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installWordPressV1()`

```php
installWordPressV1($username, $wordPressV1InstallationsInstallWordPressRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Install WordPress

Install WordPress on an existing website.  The website must already exist before calling this endpoint. To create a new website first, use POST /api/hosting/v1/websites and poll GET /api/hosting/v1/websites until it appears.  Call GET /api/hosting/v1/wordpress/installations filtered by username and domain before proceeding to check whether WordPress is already installed on the target domain/path. If WordPress already exists and `overwrite` is false (the default), the async job will fail.  This operation is asynchronous: a successful response only means the install job has been queued, not that WordPress is ready. Installation typically takes 1-2 minutes. Poll GET /api/hosting/v1/wordpress/installations filtered by username and domain to track progress. When the installation appears in that list, WordPress is ready.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$wordPressV1InstallationsInstallWordPressRequest = new \Hostinger\Model\WordPressV1InstallationsInstallWordPressRequest(); // \Hostinger\Model\WordPressV1InstallationsInstallWordPressRequest

try {
    $result = $apiInstance->installWordPressV1($username, $wordPressV1InstallationsInstallWordPressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->installWordPressV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **wordPressV1InstallationsInstallWordPressRequest** | [**\Hostinger\Model\WordPressV1InstallationsInstallWordPressRequest**](../Model/WordPressV1InstallationsInstallWordPressRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableWordPressCoreUpdatesV1()`

```php
listAvailableWordPressCoreUpdatesV1($username, $software): \Hostinger\Model\WordPressV1InstallationsUpdateResource[]
```

List available WordPress core updates

List available WordPress core updates for the specified installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->listAvailableWordPressCoreUpdatesV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->listAvailableWordPressCoreUpdatesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1InstallationsUpdateResource[]**](../Model/WordPressV1InstallationsUpdateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWordPressInstallationsV1()`

```php
listWordPressInstallationsV1($username, $domain, $ownership): \Hostinger\Model\WordPressV1InstallationsWordPressInstallationResource[]
```

List WordPress installations

List WordPress installations accessible to the authenticated client.  Use this endpoint to discover existing WordPress installations and to poll for installation status after calling the install endpoint. When a newly requested installation appears in this list, WordPress is ready. Filter by username and domain to narrow results to a specific website.  Each installation includes a `valid` flag and, when invalid, a `validationError` describing why.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = cl_user123; // string | Filter by specific username
$domain = example.com; // string | Filter by domain name (exact match)
$ownership = owned; // string | Filter by ownership type. Defaults to \"owned\". Use \"all\" to include both owned and managed installations.

try {
    $result = $apiInstance->listWordPressInstallationsV1($username, $domain, $ownership);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->listWordPressInstallationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Filter by specific username | [optional] |
| **domain** | **string**| Filter by domain name (exact match) | [optional] |
| **ownership** | **string**| Filter by ownership type. Defaults to \&quot;owned\&quot;. Use \&quot;all\&quot; to include both owned and managed installations. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1InstallationsWordPressInstallationResource[]**](../Model/WordPressV1InstallationsWordPressInstallationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showWordPressCoreVersionV1()`

```php
showWordPressCoreVersionV1($username, $software): \Hostinger\Model\WordPressV1InstallationsVersionResource
```

Show WordPress core version

Show the WordPress core version for the specified installation, along with known vulnerabilities affecting it.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->showWordPressCoreVersionV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->showWordPressCoreVersionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1InstallationsVersionResource**](../Model/WordPressV1InstallationsVersionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordPressCoreV1()`

```php
updateWordPressCoreV1($username, $software, $wordPressV1InstallationsUpdateInstallationRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update WordPress core

Update the WordPress core for the specified installation (minor update or a specific version).  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).  This operation is asynchronous: a successful response only means the update job has been queued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressInstallationsApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1InstallationsUpdateInstallationRequest = new \Hostinger\Model\WordPressV1InstallationsUpdateInstallationRequest(); // \Hostinger\Model\WordPressV1InstallationsUpdateInstallationRequest

try {
    $result = $apiInstance->updateWordPressCoreV1($username, $software, $wordPressV1InstallationsUpdateInstallationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressInstallationsApi->updateWordPressCoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1InstallationsUpdateInstallationRequest** | [**\Hostinger\Model\WordPressV1InstallationsUpdateInstallationRequest**](../Model/WordPressV1InstallationsUpdateInstallationRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
