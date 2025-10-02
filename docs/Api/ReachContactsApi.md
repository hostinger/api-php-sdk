# Hostinger\ReachContactsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewContactV1()**](ReachContactsApi.md#createANewContactV1) | **POST** /api/reach/v1/contacts | Create a new contact |
| [**deleteAContactV1()**](ReachContactsApi.md#deleteAContactV1) | **DELETE** /api/reach/v1/contacts/{uuid} | Delete a contact |
| [**listContactGroupsV1()**](ReachContactsApi.md#listContactGroupsV1) | **GET** /api/reach/v1/contacts/groups | List contact groups |
| [**listContactsV1()**](ReachContactsApi.md#listContactsV1) | **GET** /api/reach/v1/contacts | List contacts |


## `createANewContactV1()`

```php
createANewContactV1($reachV1ContactsStoreRequest): \Hostinger\Model\ReachV1ContactsContactResource
```

Create a new contact

Create a new contact in the email marketing system.  This endpoint allows you to create a new contact with basic information like name, email, and surname. You can optionally assign the contact to specific groups and add notes.  The contact will be automatically subscribed to email communications.

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

[**\Hostinger\Model\ReachV1ContactsContactResource**](../Model/ReachV1ContactsContactResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAContactV1()`

```php
deleteAContactV1($uuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a contact

Delete a contact with the specified UUID.  This endpoint permanently removes a contact from the email marketing system.

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

Get a list of contacts, optionally filtered by group and subscription status.  This endpoint returns a paginated list of contacts with their basic information. You can filter contacts by group UUID and subscription status.

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
