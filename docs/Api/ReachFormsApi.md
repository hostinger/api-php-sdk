# Hostinger\ReachFormsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFormV1()**](ReachFormsApi.md#deleteFormV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid} | Delete form |
| [**getFormDetailsV1()**](ReachFormsApi.md#getFormDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid} | Get form details |
| [**listFormsV1()**](ReachFormsApi.md#listFormsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/forms | List forms |


## `deleteFormV1()`

```php
deleteFormV1($profileUuid, $formUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete form

Permanently delete a form together with its template.  A form that has already captured submissions cannot be deleted, so that the contacts it collected are never silently discarded - pause the form instead to stop it collecting new ones. Views alone do not block deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter

try {
    $result = $apiInstance->deleteFormV1($profileUuid, $formUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->deleteFormV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormDetailsV1()`

```php
getFormDetailsV1($profileUuid, $formUuid): \Hostinger\Model\ReachV1FormsFormDetailsResource
```

Get form details

Get a single form with the URL of its hosted template and the tags it applies to the contacts it captures.  There is no ready-made embed snippet in the response - either serve the template HTML yourself or build your own embed around the form uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter

try {
    $result = $apiInstance->getFormDetailsV1($profileUuid, $formUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->getFormDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1FormsFormDetailsResource**](../Model/ReachV1FormsFormDetailsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFormsV1()`

```php
listFormsV1($profileUuid, $page, $perPage): \Hostinger\Model\ReachListFormsV1200Response
```

List forms

Get a paginated list of the signup forms in a profile.  Each form carries a reference to the template that renders it. Get the form details for a directly usable template URL and for the tags the form puts on the contacts it captures.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listFormsV1($profileUuid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->listFormsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListFormsV1200Response**](../Model/ReachListFormsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
