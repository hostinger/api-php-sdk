# Hostinger\ReachTemplatesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAnEmailTemplateV1()**](ReachTemplatesApi.md#createAnEmailTemplateV1) | **POST** /api/reach/v1/profiles/{profileUuid}/templates | Create an email template |
| [**getEmailTemplateV1()**](ReachTemplatesApi.md#getEmailTemplateV1) | **GET** /api/reach/v1/profiles/{profileUuid}/templates/{templateUuid} | Get email template |
| [**listEmailTemplatesV1()**](ReachTemplatesApi.md#listEmailTemplatesV1) | **GET** /api/reach/v1/profiles/{profileUuid}/templates | List email templates |


## `createAnEmailTemplateV1()`

```php
createAnEmailTemplateV1($profileUuid, $reachV1TemplatesStoreRequest): \Hostinger\Model\ReachV1TemplatesTemplateResource
```

Create an email template

Create an email template in a profile.  The template holds the HTML body a campaign reuses, so it can be created before any campaign exists. Only the template metadata comes back - keep the returned `uuid` to reference it as the `template_uuid` of a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTemplatesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1TemplatesStoreRequest = new \Hostinger\Model\ReachV1TemplatesStoreRequest(); // \Hostinger\Model\ReachV1TemplatesStoreRequest

try {
    $result = $apiInstance->createAnEmailTemplateV1($profileUuid, $reachV1TemplatesStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTemplatesApi->createAnEmailTemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1TemplatesStoreRequest** | [**\Hostinger\Model\ReachV1TemplatesStoreRequest**](../Model/ReachV1TemplatesStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1TemplatesTemplateResource**](../Model/ReachV1TemplatesTemplateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplateV1()`

```php
getEmailTemplateV1($profileUuid, $templateUuid): \Hostinger\Model\ReachV1TemplatesTemplateDetailsResource
```

Get email template

Get one email template of the profile with its full HTML in `template_content`.  A campaign's email content is its template: to read what a campaign sends, get the campaign and pass its `template_uuid` here. The HTML can be large, so fetch it only when the content itself is needed, never to browse or pick templates - the list email templates endpoint does that without content. Personalization tags such as `{{name}}` come back unrendered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTemplatesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$templateUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Template uuid parameter

try {
    $result = $apiInstance->getEmailTemplateV1($profileUuid, $templateUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTemplatesApi->getEmailTemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **templateUuid** | **string**| Template uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1TemplatesTemplateDetailsResource**](../Model/ReachV1TemplatesTemplateDetailsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmailTemplatesV1()`

```php
listEmailTemplatesV1($profileUuid): \Hostinger\Model\ReachV1TemplatesTemplateResource[]
```

List email templates

Get a list of the email templates in a profile, most recently updated first.  Templates are the reusable email bodies a campaign is built from. The list is not paginated and only the metadata is returned, without the HTML content. Use the `uuid` of a template as the `template_uuid` when creating a campaign. To read one template's HTML use the get email template endpoint, and only when the content itself is needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTemplatesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listEmailTemplatesV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTemplatesApi->listEmailTemplatesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1TemplatesTemplateResource[]**](../Model/ReachV1TemplatesTemplateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
