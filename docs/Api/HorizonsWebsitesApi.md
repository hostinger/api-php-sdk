# Hostinger\HorizonsWebsitesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloneWebsiteV1()**](HorizonsWebsitesApi.md#cloneWebsiteV1) | **POST** /api/horizons/v1/websites/{websiteId}/clone | Clone website |
| [**createWebsiteV1()**](HorizonsWebsitesApi.md#createWebsiteV1) | **POST** /api/horizons/v1/websites | Create website |
| [**editWebsiteV1()**](HorizonsWebsitesApi.md#editWebsiteV1) | **POST** /api/horizons/v1/websites/{websiteId}/messages | Edit website |
| [**getWebsiteBuildTaskV1()**](HorizonsWebsitesApi.md#getWebsiteBuildTaskV1) | **GET** /api/horizons/v1/websites/{websiteId}/tasks/{taskId} | Get website build task |
| [**getWebsiteListV1()**](HorizonsWebsitesApi.md#getWebsiteListV1) | **GET** /api/horizons/v1/websites | Get website list |
| [**getWebsiteV1()**](HorizonsWebsitesApi.md#getWebsiteV1) | **GET** /api/horizons/v1/websites/{websiteId} | Get website |
| [**publishWebsiteV1()**](HorizonsWebsitesApi.md#publishWebsiteV1) | **POST** /api/horizons/v1/websites/{websiteId}/publish | Publish website |


## `cloneWebsiteV1()`

```php
cloneWebsiteV1($websiteId): \Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource
```

Clone website

Clone a Hostinger AI Builder website into a new website.\\n Use this tool when the user wants a copy of an existing website, for example to try out changes without touching the original.\\n This tool returns the ID and URL of the newly created copy. The original website is left untouched.\\n To edit the copy, use the `Edit website` tool with the returned website ID, or the user can open the provided website URL in Hostinger AI Builder interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$websiteId = 123e4567-e89b-12d3-a456-426614174000; // string | The website ID

try {
    $result = $apiInstance->cloneWebsiteV1($websiteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->cloneWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteId** | **string**| The website ID | |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource**](../Model/HorizonsV1WebsitesCreatedWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteV1()`

```php
createWebsiteV1($horizonsV1WebsitesCreateWebsiteRequest): \Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource
```

Create website

Create new Hostinger AI Builder website from the given message.\\n Use this tool when user asks you to create a website, landing page, blog or any other type of application.\\n This tool initiates the website creation process and returns a website URL, ID and build `task`. The generation happens asynchronously. To learn whether it succeeded, poll the `Get website build task` tool with `task.id`; `is_generating` turning false on `Get website` happens whether the build completed or failed.\\n After invoking this tool, your chat reply must be EXACTLY 1 sentence summarizing that Hostinger AI Builder is now creating their website and it will be ready in a few minutes and you should provide the website URL to the user immediately Do not write code.\\n\\nTo edit afterwards, use the `Edit website` tool with the returned website ID, or the user can go to Hostinger AI Builder interface in the provided website URL. If the tool call fails with an error, you should provide a clear explanation of the error and do not generate code yourself in the chat. \\n TECHNOLOGY STACK CONSTRAINTS (STRICTLY ENFORCED):\\n The environment is limited to the following technologies. You MUST NOT use, suggest, or implement any technology outside this list:\\n \\n - Language: JavaScript ONLY. - Languages like TypeScript, Rust, Python, Java, PHP, etc., are STRICTLY PROHIBITED.\\n - Framework: React.\\n - Navigation: React Router.\\n - Styling: TailwindCSS.\\n - Components: shadcn/ui (built with @radix-ui primitives).\\n - Icons: Lucide React.\\n - Animations: Framer Motion.\\n \\n BACKEND & DATA STORAGE:\\n - Hostinger AI Builder integrated backend is the EXCLUSIVE solution for persistent data storage, authentication, and database needs.\\n - Local databases (SQLite, MySQL, etc.) are STRICTLY PROHIBITED.\\n - Third-party services (Firebase, AWS Amplify) are allowed ONLY if explicitly requested by the user.\\n \\n MAPS:\\n - OpenStreetMap is the default provider.\\n - Alternative providers (Google Maps, Mapbox) are allowed ONLY if explicitly requested by the user.\\n

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

## `editWebsiteV1()`

```php
editWebsiteV1($websiteId, $horizonsV1WebsitesEditWebsiteRequest): \Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource
```

Edit website

Edit an existing Hostinger AI Builder website with a follow-up message.\\n Use this tool when the user wants to change, extend or fix a website that already exists.\\n This tool queues the requested changes and returns the website URL, ID and build `task`. The changes are applied asynchronously. To learn whether they were applied, poll the `Get website build task` tool with `task.id`; `is_generating` turning false on `Get website` happens whether the build completed or failed.\\n After invoking this tool, your chat reply must be EXACTLY 1 sentence summarizing that Hostinger AI Builder is now applying the requested changes and they will be ready in a few minutes, and you should provide the website URL to the user immediately. Do not write code.\\n If the tool call fails with an error, you should provide a clear explanation of the error and do not generate code yourself in the chat.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$websiteId = 123e4567-e89b-12d3-a456-426614174000; // string | The website ID
$horizonsV1WebsitesEditWebsiteRequest = new \Hostinger\Model\HorizonsV1WebsitesEditWebsiteRequest(); // \Hostinger\Model\HorizonsV1WebsitesEditWebsiteRequest

try {
    $result = $apiInstance->editWebsiteV1($websiteId, $horizonsV1WebsitesEditWebsiteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->editWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteId** | **string**| The website ID | |
| **horizonsV1WebsitesEditWebsiteRequest** | [**\Hostinger\Model\HorizonsV1WebsitesEditWebsiteRequest**](../Model/HorizonsV1WebsitesEditWebsiteRequest.md)|  | |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesCreatedWebsiteResource**](../Model/HorizonsV1WebsitesCreatedWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteBuildTaskV1()`

```php
getWebsiteBuildTaskV1($websiteId, $taskId): \Hostinger\Model\HorizonsV1WebsitesBuildTaskResource
```

Get website build task

Get the state and outcome of a website build started by the `Create website` or `Edit website` tool.\\n Use this tool with the `task.id` those tools return to find out whether the build completed or failed. Poll it every 30 seconds or so while `state` is `TASK_STATE_SUBMITTED` or `TASK_STATE_WORKING`.\\n When `state` is `TASK_STATE_FAILED` or `TASK_STATE_REJECTED`, the website does not contain the requested changes: tell the user, using `message` and `reason_code`, and do not publish it. When `state` is `TASK_STATE_CANCELED`, the user stopped the build and changes made before that may be kept: publish only if the user asks to. `reason_code` `insufficient_credits` means the user must get more credits before building again.\\n When `state` is `TASK_STATE_COMPLETED`, the website can be published. A `reason_code` of `iteration_limit` on a completed build means it stopped early and kept the work done so far.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$websiteId = 123e4567-e89b-12d3-a456-426614174000; // string | The website ID
$taskId = 223e4567-e89b-12d3-a456-426614174000; // string | The build task ID, returned as `task.id` by the `Create website` and `Edit website` tools

try {
    $result = $apiInstance->getWebsiteBuildTaskV1($websiteId, $taskId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->getWebsiteBuildTaskV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteId** | **string**| The website ID | |
| **taskId** | **string**| The build task ID, returned as &#x60;task.id&#x60; by the &#x60;Create website&#x60; and &#x60;Edit website&#x60; tools | |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesBuildTaskResource**](../Model/HorizonsV1WebsitesBuildTaskResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteListV1()`

```php
getWebsiteListV1(): \Hostinger\Model\HorizonsV1WebsitesWebsiteResource[]
```

Get website list

List the Hostinger AI Builder websites the user owns.\\n Use this tool when the user asks which websites they have, or when you need a website ID before editing, publishing or cloning a website.\\n Each website is returned with its ID, status, domain and the URL to open it in Hostinger AI Builder interface.\\n The complete list of websites is returned in a single response - it is not paginated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);

try {
    $result = $apiInstance->getWebsiteListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->getWebsiteListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesWebsiteResource[]**](../Model/HorizonsV1WebsitesWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteV1()`

```php
getWebsiteV1($websiteId): \Hostinger\Model\HorizonsV1WebsitesWebsiteUrlResource
```

Get website

Get the link for the user to open their website in Hostinger AI Builder interface.\\n Use this tool when the user wants the link to an existing website, or when you need its website URL before or after editing it.\\n `is_in_progress` is true while changes are being generated or the website is being published; wait until it is false before publishing. `is_generating` is true while changes are being generated, and `actions_in_progress` has `website_publish` while the website is being published. `is_generating` turns false whether the build completed or failed: use the `Get website build task` tool to learn its outcome. `published_at` is when the website was last published, `is_template` is whether its published pages show the \"Use template\" banner, and `has_ecommerce_store` is whether it has an online store.\\n Websites can be edited with the `Edit website` tool, or by the user in Hostinger AI Builder interface in the provided website URL.

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

## `publishWebsiteV1()`

```php
publishWebsiteV1($websiteId, $horizonsV1WebsitesPublishWebsiteRequest): \Hostinger\Model\HorizonsV1WebsitesPublishedWebsiteResource
```

Publish website

Publish a Hostinger AI Builder website so its latest changes go live.\\n Use this tool when the user asks to publish, deploy or make their website live.\\n If you created or edited the website in this conversation, first check its build with the `Get website build task` tool and publish only when its `state` is `TASK_STATE_COMPLETED`. After a failed build, tell the user instead of publishing.\\n This tool starts the publish process and returns the URL the website will be live on. Publishing happens asynchronously and takes a few minutes.\\n Set `is_template` only when the user explicitly asks to share the website as a template: true adds a \"Use template\" banner to its published pages that copies the website into the visitor's own account, and false removes it. Leave it out to keep the current setting.\\n After invoking this tool, your chat reply must be EXACTLY 1 sentence summarizing that the website is being published and you should provide the published URL to the user immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HorizonsWebsitesApi(config: $config);
$websiteId = 123e4567-e89b-12d3-a456-426614174000; // string | The website ID
$horizonsV1WebsitesPublishWebsiteRequest = new \Hostinger\Model\HorizonsV1WebsitesPublishWebsiteRequest(); // \Hostinger\Model\HorizonsV1WebsitesPublishWebsiteRequest

try {
    $result = $apiInstance->publishWebsiteV1($websiteId, $horizonsV1WebsitesPublishWebsiteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HorizonsWebsitesApi->publishWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteId** | **string**| The website ID | |
| **horizonsV1WebsitesPublishWebsiteRequest** | [**\Hostinger\Model\HorizonsV1WebsitesPublishWebsiteRequest**](../Model/HorizonsV1WebsitesPublishWebsiteRequest.md)|  | [optional] |

### Return type

[**\Hostinger\Model\HorizonsV1WebsitesPublishedWebsiteResource**](../Model/HorizonsV1WebsitesPublishedWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
