# Hostinger\ReachContactsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewContactV1()**](ReachContactsApi.md#createANewContactV1) | **POST** /api/reach/v1/contacts | Create a new contact |
| [**createContactsInBulkV1()**](ReachContactsApi.md#createContactsInBulkV1) | **POST** /api/reach/v1/profiles/{profileUuid}/contacts/bulk | Create contacts in bulk |
| [**createNewContactsV1()**](ReachContactsApi.md#createNewContactsV1) | **POST** /api/reach/v1/profiles/{profileUuid}/contacts | Create new contacts |
| [**deleteAContactV1()**](ReachContactsApi.md#deleteAContactV1) | **DELETE** /api/reach/v1/contacts/{uuid} | Delete a contact |
| [**deleteAProfileContactV1()**](ReachContactsApi.md#deleteAProfileContactV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/contacts/{contactUuid} | Delete a profile contact |
| [**getContactDetailsV1()**](ReachContactsApi.md#getContactDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/contacts/{contactUuid} | Get contact details |
| [**listContactGroupsV1()**](ReachContactsApi.md#listContactGroupsV1) | **GET** /api/reach/v1/contacts/groups | List contact groups |
| [**listContactsV1()**](ReachContactsApi.md#listContactsV1) | **GET** /api/reach/v1/contacts | List contacts |
| [**listProfileContactsV1()**](ReachContactsApi.md#listProfileContactsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/contacts | List profile contacts |
| [**updateAContactV1()**](ReachContactsApi.md#updateAContactV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/contacts/{contactUuid} | Update a contact |


## `createANewContactV1()`

```php
createANewContactV1($reachV1ContactsStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create a new contact

Create a new contact in the email marketing system.  This endpoint allows you to create a new contact with basic information like name, email, and surname.  If double opt-in is enabled, the contact will be created with a pending status and a confirmation email will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$reachV1ContactsStoreRequest = new \Hostinger\Model\ReachV1ContactsStoreRequest(); // \Hostinger\Model\ReachV1ContactsStoreRequest

try {
    $result = $apiInstance->createANewContactV1($reachV1ContactsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->createANewContactV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reachV1ContactsStoreRequest** | [**\Hostinger\Model\ReachV1ContactsStoreRequest**](../Model/ReachV1ContactsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContactsInBulkV1()`

```php
createContactsInBulkV1($profileUuid, $reachV1ContactsBulkStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create contacts in bulk

Create many contacts in a profile in a single call.  The contacts are imported in the background, so a success response means the import was accepted rather than finished. Contacts whose email already exists in the profile are left as they are. If double opt-in is enabled, new contacts start off pending and are sent a confirmation email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ContactsBulkStoreRequest = new \Hostinger\Model\ReachV1ContactsBulkStoreRequest(); // \Hostinger\Model\ReachV1ContactsBulkStoreRequest

try {
    $result = $apiInstance->createContactsInBulkV1($profileUuid, $reachV1ContactsBulkStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->createContactsInBulkV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ContactsBulkStoreRequest** | [**\Hostinger\Model\ReachV1ContactsBulkStoreRequest**](../Model/ReachV1ContactsBulkStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewContactsV1()`

```php
createNewContactsV1($profileUuid, $reachV1ContactsStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create new contacts

Create a new contact in the email marketing system.  This endpoint allows you to create a new contact with basic information like name, email, and surname.  If double opt-in is enabled, the contact will be created with a pending status and a confirmation email will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ContactsStoreRequest = new \Hostinger\Model\ReachV1ContactsStoreRequest(); // \Hostinger\Model\ReachV1ContactsStoreRequest

try {
    $result = $apiInstance->createNewContactsV1($profileUuid, $reachV1ContactsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->createNewContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ContactsStoreRequest** | [**\Hostinger\Model\ReachV1ContactsStoreRequest**](../Model/ReachV1ContactsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAContactV1()`

```php
deleteAContactV1($uuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a contact

Delete a contact with the specified UUID.  This endpoint permanently removes a contact from the email marketing system.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot delete contacts of any other profile. Use `DELETE /api/reach/v1/profiles/{profileUuid}/contacts/{contactUuid}` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$uuid = 'uuid_example'; // string | UUID of the contact to delete

try {
    $result = $apiInstance->deleteAContactV1($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->deleteAContactV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the contact to delete | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAProfileContactV1()`

```php
deleteAProfileContactV1($profileUuid, $contactUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a profile contact

Permanently delete a contact from a profile.  The contact is removed together with its custom field values and tag assignments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$contactUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact uuid parameter

try {
    $result = $apiInstance->deleteAProfileContactV1($profileUuid, $contactUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->deleteAProfileContactV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **contactUuid** | **string**| Contact uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactDetailsV1()`

```php
getContactDetailsV1($profileUuid, $contactUuid): \Hostinger\Model\ReachV1ContactsContactDetailsResource
```

Get contact details

Get the full details of a single contact.  Alongside the contact's own attributes this returns the tags assigned to it and the values it holds for the profile's custom contact fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$contactUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact uuid parameter

try {
    $result = $apiInstance->getContactDetailsV1($profileUuid, $contactUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->getContactDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **contactUuid** | **string**| Contact uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsContactDetailsResource**](../Model/ReachV1ContactsContactDetailsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactGroupsV1()`

```php
listContactGroupsV1(): \Hostinger\Model\ReachV1ContactsGroupsContactGroupResource[]
```

List contact groups

Get a list of all contact groups.  This endpoint returns a list of contact groups that can be used to organize contacts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);

try {
    $result = $apiInstance->listContactGroupsV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->listContactGroupsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\ReachV1ContactsGroupsContactGroupResource[]**](../Model/ReachV1ContactsGroupsContactGroupResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContactsV1()`

```php
listContactsV1($groupUuid, $subscriptionStatus, $page): \Hostinger\Model\ReachListContactsV1200Response
```

List contacts

Get a list of contacts, optionally filtered by group and subscription status.  This endpoint returns a paginated list of contacts with their basic information. You can filter contacts by group UUID and subscription status.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot list contacts of any other profile. Use `GET /api/reach/v1/profiles/{profileUuid}/contacts` instead, which also replaces the group filter with a tag filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$groupUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Filter contacts by group UUID
$subscriptionStatus = subscribed; // string | Filter contacts by subscription status
$page = 1; // int | Page number

try {
    $result = $apiInstance->listContactsV1($groupUuid, $subscriptionStatus, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->listContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupUuid** | **string**| Filter contacts by group UUID | [optional] |
| **subscriptionStatus** | **string**| Filter contacts by subscription status | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\Hostinger\Model\ReachListContactsV1200Response**](../Model/ReachListContactsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfileContactsV1()`

```php
listProfileContactsV1($profileUuid, $subscriptionStatus, $tagUuid, $search, $page, $perPage): \Hostinger\Model\ReachListProfileContactsV1200Response
```

List profile contacts

Get a paginated list of contacts belonging to a profile.  Contacts can be filtered by subscription status, by tag, and by an email search term. The `meta.total` field of the response is the number of contacts matching the filters, so calling this endpoint without filters gives the profile's total contact count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$subscriptionStatus = subscribed; // string | Filter contacts by subscription status
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Filter contacts by tag UUID
$search = john.doe@example.com; // string | Search contacts by email
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listProfileContactsV1($profileUuid, $subscriptionStatus, $tagUuid, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->listProfileContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **subscriptionStatus** | **string**| Filter contacts by subscription status | [optional] |
| **tagUuid** | **string**| Filter contacts by tag UUID | [optional] |
| **search** | **string**| Search contacts by email | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListProfileContactsV1200Response**](../Model/ReachListProfileContactsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAContactV1()`

```php
updateAContactV1($profileUuid, $contactUuid, $reachV1ContactsUpdateRequest): \Hostinger\Model\ReachV1ContactsProfileContactUpdateResource
```

Update a contact

Update a contact's attributes and custom field values.  Only the properties present in the request body are changed, so a partial body is enough to change a single attribute. Sending a property as `null` clears it.  The response carries the contact's core attributes. Read back its tags, custom field values, source and note with `GET /api/reach/v1/profiles/{profileUuid}/contacts/{contactUuid}`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachContactsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$contactUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact uuid parameter
$reachV1ContactsUpdateRequest = new \Hostinger\Model\ReachV1ContactsUpdateRequest(); // \Hostinger\Model\ReachV1ContactsUpdateRequest

try {
    $result = $apiInstance->updateAContactV1($profileUuid, $contactUuid, $reachV1ContactsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachContactsApi->updateAContactV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **contactUuid** | **string**| Contact uuid parameter | |
| **reachV1ContactsUpdateRequest** | [**\Hostinger\Model\ReachV1ContactsUpdateRequest**](../Model/ReachV1ContactsUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsProfileContactUpdateResource**](../Model/ReachV1ContactsProfileContactUpdateResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
