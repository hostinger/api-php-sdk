# Hostinger\WordPressAIContentApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateImagesV1()**](WordPressAIContentApi.md#generateImagesV1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/content/images/generate | Generate images |
| [**getGenerationResultV1()**](WordPressAIContentApi.md#getGenerationResultV1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/content/generations/{generation_id} | Get generation result |


## `generateImagesV1()`

```php
generateImagesV1($username, $software, $wordPressV1ContentGenerateImagesRequest): \Hostinger\Model\WordPressV1ContentGenerationResource
```

Generate images

Start generating one or more images from a prompt and an image type for the specified WordPress installation. The generation runs asynchronously: the response is returned right away with `status: in-progress` and a `generation_id`. Poll GET /api/hosting/v1/accounts/{username}/wordpress/{software}/content/generations/{generation_id} every few seconds until `status` is `completed` or `failed`.  A completed generation returns temporary image URLs together with the time they expire; download the images before then. Images match the requested aspect ratio and are never smaller than the requested size; logos are transparent images cropped to the mark.  Only one image generation can run per installation at a time: while one is still in progress the endpoint returns 409 without the ID of the running generation, so a caller that did not receive the `202` has to wait for it to finish (up to a few minutes) before starting a new one. The endpoint is limited to 10 requests per minute.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

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

[**\Hostinger\Model\WordPressV1ContentGenerationResource**](../Model/WordPressV1ContentGenerationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenerationResultV1()`

```php
getGenerationResultV1($username, $software, $generationId, $type): \Hostinger\Model\WordPressV1ContentGenerationResource
```

Get generation result

Get the result of an AI content generation started for the specified WordPress installation, such as an image generation started with POST /api/hosting/v1/accounts/{username}/wordpress/{software}/content/images/generate.  While the generation is still running only `status: in-progress` is returned; poll every few seconds. Once `completed`, `result` holds the generated content shaped according to `type`: temporary image URLs together with the time they expire for `image-generation`, or the generated website document for `website-generation` (started from the Hostinger WordPress plugin). A `failed` generation has no `result`. Unknown or expired generation IDs return 404.  Provide the WordPress installation (software) identifier in the path. It can be obtained from GET /api/hosting/v1/wordpress/installations (the `id` field).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\WordPressAIContentApi(config: $config);
$username = u123456789; // string
$software = 1232456789; // string | WordPress installation (software) identifier
$generationId = 9d4f8a1e-2b3c-4d5e-8f6a-7b8c9d0e1f2a; // string | Generation ID returned when the generation was started
$type = image-generation; // string | Generation type to look up. When omitted, every generation type is checked.

try {
    $result = $apiInstance->getGenerationResultV1($username, $software, $generationId, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordPressAIContentApi->getGenerationResultV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **software** | **string**| WordPress installation (software) identifier | |
| **generationId** | **string**| Generation ID returned when the generation was started | |
| **type** | **string**| Generation type to look up. When omitted, every generation type is checked. | [optional] |

### Return type

[**\Hostinger\Model\WordPressV1ContentGenerationResource**](../Model/WordPressV1ContentGenerationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
