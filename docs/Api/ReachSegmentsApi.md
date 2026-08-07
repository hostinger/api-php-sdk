# Hostinger\ReachSegmentsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countProfileSegmentContactsV1()**](ReachSegmentsApi.md#countProfileSegmentContactsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}/count | Count profile segment contacts |
| [**createANewContactSegmentV1()**](ReachSegmentsApi.md#createANewContactSegmentV1) | **POST** /api/reach/v1/segmentation/segments | Create a new contact segment |
| [**createAProfileSegmentV1()**](ReachSegmentsApi.md#createAProfileSegmentV1) | **POST** /api/reach/v1/profiles/{profileUuid}/segmentation/segments | Create a profile segment |
| [**deleteAProfileSegmentV1()**](ReachSegmentsApi.md#deleteAProfileSegmentV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid} | Delete a profile segment |
| [**getProfileSegmentDetailsV1()**](ReachSegmentsApi.md#getProfileSegmentDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid} | Get profile segment details |
| [**getSegmentDetailsV1()**](ReachSegmentsApi.md#getSegmentDetailsV1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid} | Get segment details |
| [**listProfileSegmentContactsV1()**](ReachSegmentsApi.md#listProfileSegmentContactsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}/contacts | List profile segment contacts |
| [**listProfileSegmentsV1()**](ReachSegmentsApi.md#listProfileSegmentsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments | List profile segments |
| [**listSegmentContactsV1()**](ReachSegmentsApi.md#listSegmentContactsV1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid}/contacts | List segment contacts |
| [**listSegmentsV1()**](ReachSegmentsApi.md#listSegmentsV1) | **GET** /api/reach/v1/segmentation/segments | List segments |
| [**updateAProfileSegmentV1()**](ReachSegmentsApi.md#updateAProfileSegmentV1) | **PUT** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid} | Update a profile segment |


## `countProfileSegmentContactsV1()`

```php
countProfileSegmentContactsV1($profileUuid, $segmentUuid): \Hostinger\Model\ReachV1ContactsSegmentsSegmentContactsCountResource
```

Count profile segment contacts

Count the contacts currently matching a segment without listing them.  Cheaper than paging through the segment contacts endpoint when only the size is needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter

try {
    $result = $apiInstance->countProfileSegmentContactsV1($profileUuid, $segmentUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->countProfileSegmentContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **segmentUuid** | **string**| Segment uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentContactsCountResource**](../Model/ReachV1ContactsSegmentsSegmentContactsCountResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createANewContactSegmentV1()`

```php
createANewContactSegmentV1($reachV1ContactsSegmentsStoreRequest): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Create a new contact segment

Create a new contact segment.  This endpoint allows creating a new contact segment that can be used to organize contacts. The segment can be configured with specific criteria like email, name, subscription status, etc.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot create segments in any other profile. Use `POST /api/reach/v1/profiles/{profileUuid}/segmentation/segments` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$reachV1ContactsSegmentsStoreRequest = new \Hostinger\Model\ReachV1ContactsSegmentsStoreRequest(); // \Hostinger\Model\ReachV1ContactsSegmentsStoreRequest

try {
    $result = $apiInstance->createANewContactSegmentV1($reachV1ContactsSegmentsStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->createANewContactSegmentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reachV1ContactsSegmentsStoreRequest** | [**\Hostinger\Model\ReachV1ContactsSegmentsStoreRequest**](../Model/ReachV1ContactsSegmentsStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentResource**](../Model/ReachV1ContactsSegmentsSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAProfileSegmentV1()`

```php
createAProfileSegmentV1($profileUuid, $reachV1ContactsSegmentsProfileStoreRequest): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Create a profile segment

Create a segment in a profile.  A segment is a saved set of conditions rather than a fixed list, so its membership changes as contacts change. Creating one does not modify any contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ContactsSegmentsProfileStoreRequest = new \Hostinger\Model\ReachV1ContactsSegmentsProfileStoreRequest(); // \Hostinger\Model\ReachV1ContactsSegmentsProfileStoreRequest

try {
    $result = $apiInstance->createAProfileSegmentV1($profileUuid, $reachV1ContactsSegmentsProfileStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->createAProfileSegmentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ContactsSegmentsProfileStoreRequest** | [**\Hostinger\Model\ReachV1ContactsSegmentsProfileStoreRequest**](../Model/ReachV1ContactsSegmentsProfileStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentResource**](../Model/ReachV1ContactsSegmentsSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAProfileSegmentV1()`

```php
deleteAProfileSegmentV1($profileUuid, $segmentUuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete a profile segment

Delete a segment.  Only the segment definition is removed. The contacts that matched it are left untouched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter

try {
    $result = $apiInstance->deleteAProfileSegmentV1($profileUuid, $segmentUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->deleteAProfileSegmentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **segmentUuid** | **string**| Segment uuid parameter | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileSegmentDetailsV1()`

```php
getProfileSegmentDetailsV1($profileUuid, $segmentUuid): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Get profile segment details

Get a single segment of a profile, including the conditions that define it.  To retrieve the contacts currently matching those conditions, use the segment contacts endpoint instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter

try {
    $result = $apiInstance->getProfileSegmentDetailsV1($profileUuid, $segmentUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->getProfileSegmentDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **segmentUuid** | **string**| Segment uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentResource**](../Model/ReachV1ContactsSegmentsSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSegmentDetailsV1()`

```php
getSegmentDetailsV1($segmentUuid): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Get segment details

Get details of a specific segment.  This endpoint retrieves information about a single segment identified by UUID. Segments are used to organize and group contacts based on specific criteria.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot read segments of any other profile. Use `GET /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter

try {
    $result = $apiInstance->getSegmentDetailsV1($segmentUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->getSegmentDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segmentUuid** | **string**| Segment uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentResource**](../Model/ReachV1ContactsSegmentsSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfileSegmentContactsV1()`

```php
listProfileSegmentContactsV1($profileUuid, $segmentUuid, $page, $perPage): \Hostinger\Model\ReachListProfileSegmentContactsV1200Response
```

List profile segment contacts

Retrieve contacts associated with a specific segment for a given profile.  This endpoint allows you to fetch and filter contacts that belong to a particular segment, identified by its UUID, scoped to a specific profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listProfileSegmentContactsV1($profileUuid, $segmentUuid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->listProfileSegmentContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **segmentUuid** | **string**| Segment uuid parameter | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListProfileSegmentContactsV1200Response**](../Model/ReachListProfileSegmentContactsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfileSegmentsV1()`

```php
listProfileSegmentsV1($profileUuid, $countType, $page, $perPage): \Hostinger\Model\ReachListProfileSegmentsV1200Response
```

List profile segments

Get a paginated list of the segments defined in a profile.  Each entry carries the number of contacts currently matching it, which is recalculated on read rather than stored. Use `count_type` to count either every matching contact or only the subscribed ones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$countType = all; // string | Which matching contacts to count for each segment
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listProfileSegmentsV1($profileUuid, $countType, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->listProfileSegmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **countType** | **string**| Which matching contacts to count for each segment | [optional] [default to &#39;all&#39;] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListProfileSegmentsV1200Response**](../Model/ReachListProfileSegmentsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSegmentContactsV1()`

```php
listSegmentContactsV1($segmentUuid, $page, $perPage): \Hostinger\Model\ReachListProfileSegmentContactsV1200Response
```

List segment contacts

Retrieve contacts associated with a specific segment.  This endpoint allows you to fetch and filter contacts that belong to a particular segment, identified by its UUID.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot read segments of any other profile. Use `GET /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}/contacts` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listSegmentContactsV1($segmentUuid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->listSegmentContactsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **segmentUuid** | **string**| Segment uuid parameter | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListProfileSegmentContactsV1200Response**](../Model/ReachListProfileSegmentContactsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSegmentsV1()`

```php
listSegmentsV1(): \Hostinger\Model\ReachV1ContactsSegmentsContactSegmentResource[]
```

List segments

Get a list of all contact segments.  This endpoint returns a list of contact segments that can be used to organize contacts.  **Deprecated.** This endpoint cannot target a profile, so it always falls back to the client's default profile and cannot list the segments of any other profile. Use `GET /api/reach/v1/profiles/{profileUuid}/segmentation/segments` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);

try {
    $result = $apiInstance->listSegmentsV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->listSegmentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsContactSegmentResource[]**](../Model/ReachV1ContactsSegmentsContactSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAProfileSegmentV1()`

```php
updateAProfileSegmentV1($profileUuid, $segmentUuid, $reachV1ContactsSegmentsProfileUpdateRequest): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Update a profile segment

Rename a segment and/or replace the conditions that define it.  `name` is always required. Omit `conditions` to rename without touching the conditions; supply them and they replace the existing set entirely rather than being merged into it. Contacts are never modified, but which of them match the segment can change immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachSegmentsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$segmentUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Segment uuid parameter
$reachV1ContactsSegmentsProfileUpdateRequest = new \Hostinger\Model\ReachV1ContactsSegmentsProfileUpdateRequest(); // \Hostinger\Model\ReachV1ContactsSegmentsProfileUpdateRequest

try {
    $result = $apiInstance->updateAProfileSegmentV1($profileUuid, $segmentUuid, $reachV1ContactsSegmentsProfileUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachSegmentsApi->updateAProfileSegmentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **segmentUuid** | **string**| Segment uuid parameter | |
| **reachV1ContactsSegmentsProfileUpdateRequest** | [**\Hostinger\Model\ReachV1ContactsSegmentsProfileUpdateRequest**](../Model/ReachV1ContactsSegmentsProfileUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ContactsSegmentsSegmentResource**](../Model/ReachV1ContactsSegmentsSegmentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
