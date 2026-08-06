# Hostinger\ReachContactFieldsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAContactFieldV1()**](ReachContactFieldsApi.md#createAContactFieldV1) | **POST** /api/reach/v1/profiles/{profileUuid}/contacts/fields | Create a contact field |
| [**deleteAContactFieldV1()**](ReachContactFieldsApi.md#deleteAContactFieldV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/contacts/fields/{fieldUuid} | Delete a contact field |
| [**listContactFieldsV1()**](ReachContactFieldsApi.md#listContactFieldsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/contacts/fields | List contact fields |
| [**updateAContactFieldV1()**](ReachContactFieldsApi.md#updateAContactFieldV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/contacts/fields/{fieldUuid} | Update a contact field |


## `createAContactFieldV1()`

```php
createAContactFieldV1($profileUuid, $reachV1ContactsFieldsStoreRequest): \Hostinger\Model\ReachV1ContactsFieldsContactFieldResource
```

Create a contact field

Define a new custom contact field in a profile.  The `slug` is derived from the label and, like the field type, cannot be changed later. Use the returned uuid to set values on contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactFieldsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ContactsFieldsStoreRequest = new \Hostinger\Model\ReachV1ContactsFieldsStoreRequest(); // \Hostinger\Model\ReachV1ContactsFieldsStoreRequest

try {
    $result = $apiInstance->createAContactFieldV1($profileUuid, $reachV1ContactsFieldsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactFieldsApi->createAContactFieldV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ContactsFieldsStoreRequest** | [**\Hostinger\Model\ReachV1ContactsFieldsStoreRequest**](../Model/ReachV1ContactsFieldsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsFieldsContactFieldResource**](../Model/ReachV1ContactsFieldsContactFieldResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAContactFieldV1()`

```php
deleteAContactFieldV1($profileUuid, $fieldUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a contact field

Delete a custom contact field.  Every value contacts hold for the field is deleted with it, and for the choice types so are its options. The contacts themselves are not affected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactFieldsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$fieldUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact field uuid parameter

try {
    $result = $apiInstance->deleteAContactFieldV1($profileUuid, $fieldUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactFieldsApi->deleteAContactFieldV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **fieldUuid** | **string**| Contact field uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactFieldsV1()`

```php
listContactFieldsV1($profileUuid): \Hostinger\Model\ReachV1ContactsFieldsContactFieldResource[]
```

List contact fields

Get the custom contact fields defined in a profile.  Custom fields let you store your own attributes on contacts. The returned uuids are what you pass to the contact update endpoint to set values, and choice fields also list the options available to pick from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactFieldsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listContactFieldsV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactFieldsApi->listContactFieldsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsFieldsContactFieldResource[]**](../Model/ReachV1ContactsFieldsContactFieldResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAContactFieldV1()`

```php
updateAContactFieldV1($profileUuid, $fieldUuid, $reachV1ContactsFieldsUpdateRequest): \Hostinger\Model\ReachV1ContactsFieldsContactFieldResource
```

Update a contact field

Rename a custom contact field and, for the choice types, replace its option set.  Options carrying a uuid are kept and relabelled, options without one are created, and any existing option left out of the list is deleted along with the values contacts hold for it. The field type and slug cannot be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactFieldsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$fieldUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact field uuid parameter
$reachV1ContactsFieldsUpdateRequest = new \Hostinger\Model\ReachV1ContactsFieldsUpdateRequest(); // \Hostinger\Model\ReachV1ContactsFieldsUpdateRequest

try {
    $result = $apiInstance->updateAContactFieldV1($profileUuid, $fieldUuid, $reachV1ContactsFieldsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactFieldsApi->updateAContactFieldV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **fieldUuid** | **string**| Contact field uuid parameter | |
| **reachV1ContactsFieldsUpdateRequest** | [**\Hostinger\Model\ReachV1ContactsFieldsUpdateRequest**](../Model/ReachV1ContactsFieldsUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsFieldsContactFieldResource**](../Model/ReachV1ContactsFieldsContactFieldResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
