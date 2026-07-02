# Hostinger\WordPressInstallationsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**installWordPressV1()**](WordPressInstallationsApi.md#installWordPressV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations | Install WordPress |
| [**listWordPressInstallationsV1()**](WordPressInstallationsApi.md#listWordPressInstallationsV1) | **GET** /api/hosting/v1/wordpress/installations | List WordPress installations |


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
