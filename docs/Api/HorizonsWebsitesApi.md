# Hostinger\HorizonsWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteV1()**](HorizonsWebsitesApi.md#createWebsiteV1) | **POST** /api/horizons/v1/websites | Create website |
| [**getWebsiteV1()**](HorizonsWebsitesApi.md#getWebsiteV1) | **GET** /api/horizons/v1/websites/{websiteId} | Get website |


## `createWebsiteV1()`

```php
createWebsiteV1($horizonsV1WebsitesCreateWebsiteRequest): \Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource
```

Create website

Create new Hostinger Horizons website from the given message.\\n Use this tool when user asks you to create a website, landing page, blog or any other type of application.\\n This tool initiates the website creation process and returns a website URL and ID. The generation happens asynchronously.\\n After invoking this tool, your chat reply must be EXACTLY 1 sentence summarizing that Hostinger Horizons is now creating their website and it will be ready in a few minutes and you should provide the website URL to the user immediately Do not write code.\\n\\nTo edit afterwards, users must go to Hostinger Horizons interface in the provided website URL. If the tool call fails with an error, you should provide a clear explanation of the error and do not generate code yourself in the chat. \\n TECHNOLOGY STACK CONSTRAINTS (STRICTLY ENFORCED):\\n The environment is limited to the following technologies. You MUST NOT use, suggest, or implement any technology outside this list:\\n \\n - Language: JavaScript ONLY. - Languages like TypeScript, Rust, Python, Java, PHP, etc., are STRICTLY PROHIBITED.\\n - Framework: React.\\n - Navigation: React Router.\\n - Styling: TailwindCSS.\\n - Components: shadcn/ui (built with @radix-ui primitives).\\n - Icons: Lucide React.\\n - Animations: Framer Motion.\\n \\n BACKEND & DATA STORAGE:\\n - Horizons integrated backend is the EXCLUSIVE solution for persistent data storage, authentication, and database needs.\\n - Local databases (SQLite, MySQL, etc.) are STRICTLY PROHIBITED.\\n - Third-party services (Firebase, AWS Amplify) are allowed ONLY if explicitly requested by the user.\\n \\n MAPS:\\n - OpenStreetMap is the default provider.\\n - Alternative providers (Google Maps, Mapbox) are allowed ONLY if explicitly requested by the user.\\n

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$horizonsV1WebsitesCreateWebsiteRequest = new \Hostinger\Model\HorizonsV1WebsitesCreateWebsiteRequest(); // \Hostinger\Model\HorizonsV1WebsitesCreateWebsiteRequest

try {
    $result = $apiInstance->createWebsiteV1($horizonsV1WebsitesCreateWebsiteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->createWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **horizonsV1WebsitesCreateWebsiteRequest** | [**\Hostinger\Model\HorizonsV1WebsitesCreateWebsiteRequest**](../Model/HorizonsV1WebsitesCreateWebsiteRequest.md)|  | |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource**](../Model/HorizonsV1WebsitesCreatedWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteV1()`

```php
getWebsiteV1($websiteId): \Hostinger\Model\HorizonsV1WebsitesWebsiteUrlResource
```

Get website

Get a link for the user to edit their website in Hostinger Horizons interface.\\n Use this tool when user wants to modify, edit or add new features to an existing website.\\n Websites can only be edited in Hostinger Horizons interface in the provided website URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$websiteId = 123e4567-e89b-12d3-a456-426614174000; // string | The website ID

try {
    $result = $apiInstance->getWebsiteV1($websiteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->getWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteId** | **string**| The website ID | |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesWebsiteUrlResource**](../Model/HorizonsV1WebsitesWebsiteUrlResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
