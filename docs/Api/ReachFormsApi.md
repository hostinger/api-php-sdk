# Hostinger\ReachFormsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addFormSubmitterTagsV1()**](ReachFormsApi.md#addFormSubmitterTagsV1) | **POST** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid}/tags | Add form submitter tags |
| [**createFormV1()**](ReachFormsApi.md#createFormV1) | **POST** /api/reach/v1/profiles/{profileUuid}/forms | Create form |
| [**deleteFormV1()**](ReachFormsApi.md#deleteFormV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid} | Delete form |
| [**duplicateFormV1()**](ReachFormsApi.md#duplicateFormV1) | **POST** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid}/duplicate | Duplicate form |
| [**getFormDetailsV1()**](ReachFormsApi.md#getFormDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid} | Get form details |
| [**listFormsV1()**](ReachFormsApi.md#listFormsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/forms | List forms |
| [**removeFormSubmitterTagV1()**](ReachFormsApi.md#removeFormSubmitterTagV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid}/tags | Remove form submitter tag |
| [**updateFormTemplateV1()**](ReachFormsApi.md#updateFormTemplateV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid}/template | Update form template |
| [**updateFormV1()**](ReachFormsApi.md#updateFormV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/forms/{formUuid} | Update form |


## `addFormSubmitterTagsV1()`

```php
addFormSubmitterTagsV1($profileUuid, $formUuid, $reachV1FormsAssignTagsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Add form submitter tags

Add tags to a form so that every contact who submits it from now on receives them.  A tag the form already has is skipped; an unknown tag is rejected. Contacts who submitted earlier are not tagged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter
$reachV1FormsAssignTagsRequest = new \Hostinger\Model\ReachV1FormsAssignTagsRequest(); // \Hostinger\Model\ReachV1FormsAssignTagsRequest

try {
    $result = $apiInstance->addFormSubmitterTagsV1($profileUuid, $formUuid, $reachV1FormsAssignTagsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->addFormSubmitterTagsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |
| **reachV1FormsAssignTagsRequest** | [**\Hostinger\Model\ReachV1FormsAssignTagsRequest**](../Model/ReachV1FormsAssignTagsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFormV1()`

```php
createFormV1($profileUuid, $reachV1FormsStoreRequest): \Hostinger\Model\ReachV1FormsFormResource
```

Create form

Create an empty draft form.  Reach also adds an automatic `form:{name}` tag that every submitter receives. A draft has no design and is not reachable by visitors: save a design with the update form template operation, then take the form live by setting its status to `active`. Creating a form does not consume AI credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1FormsStoreRequest = new \Hostinger\Model\ReachV1FormsStoreRequest(); // \Hostinger\Model\ReachV1FormsStoreRequest

try {
    $result = $apiInstance->createFormV1($profileUuid, $reachV1FormsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->createFormV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1FormsStoreRequest** | [**\Hostinger\Model\ReachV1FormsStoreRequest**](../Model/ReachV1FormsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1FormsFormResource**](../Model/ReachV1FormsFormResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `duplicateFormV1()`

```php
duplicateFormV1($profileUuid, $formUuid): \Hostinger\Model\ReachV1FormsFormResource
```

Duplicate form

Copy a form into a new draft form with the same name and design.  The copy shares the source's automatic `form:{name}` tag; other submitter tags are not copied. The copy is not live until its status is set to `active`.

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
    $result = $apiInstance->duplicateFormV1($profileUuid, $formUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->duplicateFormV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1FormsFormResource**](../Model/ReachV1FormsFormResource.md)

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
listFormsV1($profileUuid, $page, $perPage, $status): \Hostinger\Model\ReachListFormsV1200Response
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
$status = 'status_example'; // string | Return only forms with this status.

try {
    $result = $apiInstance->listFormsV1($profileUuid, $page, $perPage, $status);
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
| **status** | **string**| Return only forms with this status. | [optional] |

### Return type

[**\Hostinger\Model\ReachListFormsV1200Response**](../Model/ReachListFormsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeFormSubmitterTagV1()`

```php
removeFormSubmitterTagV1($profileUuid, $formUuid, $reachV1FormsRemoveTagRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Remove form submitter tag

Stop a form from applying a tag to its future submitters.  Succeeds also when the form did not have the tag. Contacts who already received the tag keep it, and the tag itself is not deleted. The automatic `form:{name}` tag cannot be removed and is rejected with a conflict.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter
$reachV1FormsRemoveTagRequest = new \Hostinger\Model\ReachV1FormsRemoveTagRequest(); // \Hostinger\Model\ReachV1FormsRemoveTagRequest

try {
    $result = $apiInstance->removeFormSubmitterTagV1($profileUuid, $formUuid, $reachV1FormsRemoveTagRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->removeFormSubmitterTagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |
| **reachV1FormsRemoveTagRequest** | [**\Hostinger\Model\ReachV1FormsRemoveTagRequest**](../Model/ReachV1FormsRemoveTagRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormTemplateV1()`

```php
updateFormTemplateV1($profileUuid, $formUuid, $reachV1FormsUpdateTemplateRequest): \Hostinger\Model\ReachV1FormsFormTemplateVersionResource
```

Update form template

Save `content` as the latest design of a form and return the stored version.  The HTML is sanitized and, unless the plan allows removing it, the Reach signature is added. Visitors submit the form with an `email` field (required) and optional `name`, `surname` and `phone`. After sanitizing, the design must contain a form container (`data-reach-form`), an email input (`data-reach-field=\"email\"`) and a submit button (`data-reach-submit`); otherwise the request fails with `422` and `errors.content` lists `missing_form_container`, `missing_email_field` and/or `missing_submit_button`.  A `draft` or `paused` form stays unreachable until its status is set to `active`, which publishes this design. On a form that is already `active` the saved design is not public until the form is paused and set to `active` again. Saving a design does not consume AI credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter
$reachV1FormsUpdateTemplateRequest = new \Hostinger\Model\ReachV1FormsUpdateTemplateRequest(); // \Hostinger\Model\ReachV1FormsUpdateTemplateRequest

try {
    $result = $apiInstance->updateFormTemplateV1($profileUuid, $formUuid, $reachV1FormsUpdateTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->updateFormTemplateV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |
| **reachV1FormsUpdateTemplateRequest** | [**\Hostinger\Model\ReachV1FormsUpdateTemplateRequest**](../Model/ReachV1FormsUpdateTemplateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1FormsFormTemplateVersionResource**](../Model/ReachV1FormsFormTemplateVersionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormV1()`

```php
updateFormV1($profileUuid, $formUuid, $reachV1FormsUpdateRequest): \Hostinger\Model\ReachV1FormsFormResource
```

Update form

Rename a form and/or change its status.  Setting a `draft` or `paused` form to `active` takes it live: its latest saved design is published and visitors can submit it. `paused` and `draft` stop the form from accepting submissions. A form is not reachable by visitors until it is taken live. Design changes saved while the form is already `active` stay unpublished until the form is paused and set to `active` again. Renaming does not rename the automatic `form:{name}` tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachFormsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$formUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Form uuid parameter
$reachV1FormsUpdateRequest = new \Hostinger\Model\ReachV1FormsUpdateRequest(); // \Hostinger\Model\ReachV1FormsUpdateRequest

try {
    $result = $apiInstance->updateFormV1($profileUuid, $formUuid, $reachV1FormsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachFormsApi->updateFormV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **formUuid** | **string**| Form uuid parameter | |
| **reachV1FormsUpdateRequest** | [**\Hostinger\Model\ReachV1FormsUpdateRequest**](../Model/ReachV1FormsUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1FormsFormResource**](../Model/ReachV1FormsFormResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
