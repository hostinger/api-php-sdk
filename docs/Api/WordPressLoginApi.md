# Hostinger\WordPressLoginApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLoginLinksV1()**](WordPressLoginApi.md#createLoginLinksV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/login/links | Create login links |


## `createLoginLinksV1()`

```php
createLoginLinksV1($username, $software): \Hostinger\Model\WordPressV1LoginLoginLinksResource
```

Create login links

Create temporary auto-login links for the specified WordPress installation.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressLoginApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier

try {
    $result = $apiInstance->createLoginLinksV1($username, $software);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressLoginApi->createLoginLinksV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |

### Return type

[**\Hostinger\Model\WordPressV1LoginLoginLinksResource**](../Model/WordPressV1LoginLoginLinksResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
