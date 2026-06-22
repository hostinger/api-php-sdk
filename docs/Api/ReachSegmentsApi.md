# Hostinger\ReachSegmentsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewContactSegmentV1()**](ReachSegmentsApi.md#createANewContactSegmentV1) | **POST** /api/reach/v1/segmentation/segments | Create a new contact segment |
| [**getSegmentDetailsV1()**](ReachSegmentsApi.md#getSegmentDetailsV1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid} | Get segment details |
| [**listProfileSegmentContactsV1()**](ReachSegmentsApi.md#listProfileSegmentContactsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}/contacts | List profile segment contacts |
| [**listSegmentContactsV1()**](ReachSegmentsApi.md#listSegmentContactsV1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid}/contacts | List segment contacts |
| [**listSegmentsV1()**](ReachSegmentsApi.md#listSegmentsV1) | **GET** /api/reach/v1/segmentation/segments | List segments |


## `createANewContactSegmentV1()`

```php
createANewContactSegmentV1($reachV1ContactsSegmentsStoreRequest): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Create a new contact segment

Create a new contact segment.  This endpoint allows creating a new contact segment that can be used to organize contacts. The segment can be configured with specific criteria like email, name, subscription status, etc.

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

## `getSegmentDetailsV1()`

```php
getSegmentDetailsV1($segmentUuid): \Hostinger\Model\ReachV1ContactsSegmentsSegmentResource
```

Get segment details

Get details of a specific segment.  This endpoint retrieves information about a single segment identified by UUID. Segments are used to organize and group contacts based on specific criteria.

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

## `listSegmentContactsV1()`

```php
listSegmentContactsV1($segmentUuid, $page, $perPage): \Hostinger\Model\ReachListProfileSegmentContactsV1200Response
```

List segment contacts

Retrieve contacts associated with a specific segment.  This endpoint allows you to fetch and filter contacts that belong to a particular segment, identified by its UUID.

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

Get a list of all contact segments.  This endpoint returns a list of contact segments that can be used to organize contacts.

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
