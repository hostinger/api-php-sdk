# Hostinger\ReachTagsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignAContactToATagV1()**](ReachTagsApi.md#assignAContactToATagV1) | **POST** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid}/contacts/{contactUuid} | Assign a contact to a tag |
| [**assignContactsToATagV1()**](ReachTagsApi.md#assignContactsToATagV1) | **POST** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid}/contacts | Assign contacts to a tag |
| [**createOrFindTagsV1()**](ReachTagsApi.md#createOrFindTagsV1) | **POST** /api/reach/v1/profiles/{profileUuid}/tags | Create or find tags |
| [**deleteATagV1()**](ReachTagsApi.md#deleteATagV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid} | Delete a tag |
| [**listProfileTagsV1()**](ReachTagsApi.md#listProfileTagsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/tags | List profile tags |
| [**removeAContactFromATagV1()**](ReachTagsApi.md#removeAContactFromATagV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid}/contacts/{contactUuid} | Remove a contact from a tag |
| [**removeContactsFromATagV1()**](ReachTagsApi.md#removeContactsFromATagV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid}/contacts | Remove contacts from a tag |
| [**renameATagV1()**](ReachTagsApi.md#renameATagV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/tags/{tagUuid} | Rename a tag |


## `assignAContactToATagV1()`

```php
assignAContactToATagV1($profileUuid, $tagUuid, $contactUuid): \Hostinger\Model\ReachV1ContactsTagsTagResource
```

Assign a contact to a tag

Assign a tag to a single contact.  Unlike the bulk endpoint this is applied immediately rather than queued. Assigning a tag the contact already carries succeeds without duplicating it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter
$contactUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact uuid parameter

try {
    $result = $apiInstance->assignAContactToATagV1($profileUuid, $tagUuid, $contactUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->assignAContactToATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |
| **contactUuid** | **string**| Contact uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsTagsTagResource**](../Model/ReachV1ContactsTagsTagResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignContactsToATagV1()`

```php
assignContactsToATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsManageContactsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Assign contacts to a tag

Assign a tag to many contacts at once.  Pass `contact_uuids` to target specific contacts, or `all_contacts` to target every contact in the profile. The work is queued, so a success response means it was accepted rather than finished. Contacts that already carry the tag are left alone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter
$reachV1ContactsTagsManageContactsRequest = new \Hostinger\Model\ReachV1ContactsTagsManageContactsRequest(); // \Hostinger\Model\ReachV1ContactsTagsManageContactsRequest

try {
    $result = $apiInstance->assignContactsToATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsManageContactsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->assignContactsToATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |
| **reachV1ContactsTagsManageContactsRequest** | [**\Hostinger\Model\ReachV1ContactsTagsManageContactsRequest**](../Model/ReachV1ContactsTagsManageContactsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrFindTagsV1()`

```php
createOrFindTagsV1($profileUuid, $reachV1ContactsTagsStoreRequest): \Hostinger\Model\ReachV1ContactsTagsTagResource[]
```

Create or find tags

Create tags in a profile.  Names that already exist in the profile are not duplicated: the existing tag is returned instead, so the call is safe to repeat. Every tag in the request is returned, whether it was created now or already existed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ContactsTagsStoreRequest = new \Hostinger\Model\ReachV1ContactsTagsStoreRequest(); // \Hostinger\Model\ReachV1ContactsTagsStoreRequest

try {
    $result = $apiInstance->createOrFindTagsV1($profileUuid, $reachV1ContactsTagsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->createOrFindTagsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ContactsTagsStoreRequest** | [**\Hostinger\Model\ReachV1ContactsTagsStoreRequest**](../Model/ReachV1ContactsTagsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsTagsTagResource[]**](../Model/ReachV1ContactsTagsTagResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteATagV1()`

```php
deleteATagV1($profileUuid, $tagUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a tag

Delete a tag and remove it from every contact carrying it.  The contacts themselves are not deleted. This is idempotent: deleting a tag that does not exist in the profile still succeeds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter

try {
    $result = $apiInstance->deleteATagV1($profileUuid, $tagUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->deleteATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfileTagsV1()`

```php
listProfileTagsV1($profileUuid): \Hostinger\Model\ReachV1ContactsTagsTagResource[]
```

List profile tags

Get all tags defined in a profile.  Tags are the way contacts are grouped in Reach, and can be used to filter the contact list or to build segments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listProfileTagsV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->listProfileTagsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsTagsTagResource[]**](../Model/ReachV1ContactsTagsTagResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAContactFromATagV1()`

```php
removeAContactFromATagV1($profileUuid, $tagUuid, $contactUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Remove a contact from a tag

Remove a tag from a single contact.  Unlike the bulk endpoint this is applied immediately rather than queued. Neither the tag nor the contact is deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter
$contactUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Contact uuid parameter

try {
    $result = $apiInstance->removeAContactFromATagV1($profileUuid, $tagUuid, $contactUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->removeAContactFromATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |
| **contactUuid** | **string**| Contact uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeContactsFromATagV1()`

```php
removeContactsFromATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsManageContactsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Remove contacts from a tag

Remove a tag from many contacts at once.  Pass `contact_uuids` to target specific contacts, or `all_contacts` to target every contact in the profile. The work is queued, so a success response means it was accepted rather than finished. The tag itself and the contacts are not deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter
$reachV1ContactsTagsManageContactsRequest = new \Hostinger\Model\ReachV1ContactsTagsManageContactsRequest(); // \Hostinger\Model\ReachV1ContactsTagsManageContactsRequest

try {
    $result = $apiInstance->removeContactsFromATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsManageContactsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->removeContactsFromATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |
| **reachV1ContactsTagsManageContactsRequest** | [**\Hostinger\Model\ReachV1ContactsTagsManageContactsRequest**](../Model/ReachV1ContactsTagsManageContactsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameATagV1()`

```php
renameATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsUpdateRequest): \Hostinger\Model\ReachV1ContactsTagsTagResource
```

Rename a tag

Rename a tag.  The contacts assigned to the tag are unaffected. Names are unique within a profile, so renaming a tag to a name that is already taken is rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachTagsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$tagUuid = 550e8400-e29b-41d4-a716-446655440000; // string | Tag uuid parameter
$reachV1ContactsTagsUpdateRequest = new \Hostinger\Model\ReachV1ContactsTagsUpdateRequest(); // \Hostinger\Model\ReachV1ContactsTagsUpdateRequest

try {
    $result = $apiInstance->renameATagV1($profileUuid, $tagUuid, $reachV1ContactsTagsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachTagsApi->renameATagV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **tagUuid** | **string**| Tag uuid parameter | |
| **reachV1ContactsTagsUpdateRequest** | [**\Hostinger\Model\ReachV1ContactsTagsUpdateRequest**](../Model/ReachV1ContactsTagsUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsTagsTagResource**](../Model/ReachV1ContactsTagsTagResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
