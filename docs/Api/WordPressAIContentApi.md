# Hostinger\WordPressAIContentApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateImagesV1()**](WordPressAIContentApi.md#generateImagesV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/content/images/generate | Generate images |


## `generateImagesV1()`

```php
generateImagesV1($username, $software, $wordPressV1ContentGenerateImagesRequest): \Hostinger\Model\WordPressV1ContentGeneratedImagesResource
```

Generate images

Generate one or more images from a prompt and an image type for the specified WordPress installation. Images are returned inline as base64-encoded PNGs. They match the requested aspect ratio and are never smaller than the requested size; logos are transparent PNGs cropped to the mark.  Generation is synchronous and can take up to a minute. The endpoint is limited to 10 requests per minute.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressAIContentApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$wordPressV1ContentGenerateImagesRequest = new \Hostinger\Model\WordPressV1ContentGenerateImagesRequest(); // \Hostinger\Model\WordPressV1ContentGenerateImagesRequest

try {
    $result = $apiInstance->generateImagesV1($username, $software, $wordPressV1ContentGenerateImagesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressAIContentApi->generateImagesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **wordPressV1ContentGenerateImagesRequest** | [**\Hostinger\Model\WordPressV1ContentGenerateImagesRequest**](../Model/WordPressV1ContentGenerateImagesRequest.md)|  | |

### Return type

[**\Hostinger\Model\WordPressV1ContentGeneratedImagesResource**](../Model/WordPressV1ContentGeneratedImagesResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
