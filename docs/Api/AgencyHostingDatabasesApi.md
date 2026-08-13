# Hostinger\AgencyHostingDatabasesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteDatabaseUserV1()**](AgencyHostingDatabasesApi.md#createWebsiteDatabaseUserV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users | Create website database user |
| [**createWebsiteDatabaseV1()**](AgencyHostingDatabasesApi.md#createWebsiteDatabaseV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases | Create website database |
| [**deleteWebsiteDatabaseUserV1()**](AgencyHostingDatabasesApi.md#deleteWebsiteDatabaseUserV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users/{database_user_name} | Delete website database user |
| [**deleteWebsiteDatabaseV1()**](AgencyHostingDatabasesApi.md#deleteWebsiteDatabaseV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name} | Delete website database |
| [**listWebsiteDatabasesV1()**](AgencyHostingDatabasesApi.md#listWebsiteDatabasesV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/databases | List website databases |


## `createWebsiteDatabaseUserV1()`

```php
createWebsiteDatabaseUserV1($websiteUid, $databaseName, $agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest): \Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseUserResource
```

Create website database user

Creates a user for an existing database on an Agency Plan website.  Each database supports a single non-system user; creating a user for a database that already has one fails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatabasesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$databaseName = my_database; // string | Full database name as returned by the list databases endpoint.
$agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest = new \Hostinger\Model\AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest(); // \Hostinger\Model\AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest

try {
    $result = $apiInstance->createWebsiteDatabaseUserV1($websiteUid, $databaseName, $agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->createWebsiteDatabaseUserV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **databaseName** | **string**| Full database name as returned by the list databases endpoint. | |
| **agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest** | [**\Hostinger\Model\AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest**](../Model/AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest.md)|  | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseUserResource**](../Model/AgencyHostingV1WebsitesDatabasesDatabaseUserResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteDatabaseV1()`

```php
createWebsiteDatabaseV1($websiteUid, $agencyHostingV1WebsitesDatabasesCreateDatabaseRequest): \Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseResource
```

Create website database

Creates a MySQL database with a dedicated user for an Agency Plan website.  The database name, username, and password must all be provided by the caller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatabasesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1WebsitesDatabasesCreateDatabaseRequest = new \Hostinger\Model\AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest(); // \Hostinger\Model\AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest

try {
    $result = $apiInstance->createWebsiteDatabaseV1($websiteUid, $agencyHostingV1WebsitesDatabasesCreateDatabaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->createWebsiteDatabaseV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1WebsitesDatabasesCreateDatabaseRequest** | [**\Hostinger\Model\AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest**](../Model/AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest.md)|  | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseResource**](../Model/AgencyHostingV1WebsitesDatabasesDatabaseResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteDatabaseUserV1()`

```php
deleteWebsiteDatabaseUserV1($websiteUid, $databaseName, $databaseUserName): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website database user

Permanently deletes a database user from an Agency Plan website database, revoking all access it had.  The operation is idempotent: deleting a user that does not exist succeeds without error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatabasesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$databaseName = my_database; // string | Full database name as returned by the list databases endpoint.
$databaseUserName = my_user; // string | Database username as returned by the list databases endpoint.

try {
    $result = $apiInstance->deleteWebsiteDatabaseUserV1($websiteUid, $databaseName, $databaseUserName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->deleteWebsiteDatabaseUserV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **databaseName** | **string**| Full database name as returned by the list databases endpoint. | |
| **databaseUserName** | **string**| Database username as returned by the list databases endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteDatabaseV1()`

```php
deleteWebsiteDatabaseV1($websiteUid, $databaseName): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website database

Permanently deletes a MySQL database and all its data from an Agency Plan website, including its users.  The operation is idempotent: deleting a database that does not exist succeeds without error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatabasesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$databaseName = my_database; // string | Full database name as returned by the list databases endpoint.

try {
    $result = $apiInstance->deleteWebsiteDatabaseV1($websiteUid, $databaseName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->deleteWebsiteDatabaseV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **databaseName** | **string**| Full database name as returned by the list databases endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteDatabasesV1()`

```php
listWebsiteDatabasesV1($websiteUid, $page, $perPage): \Hostinger\Model\AgencyHostingListWebsiteDatabasesV1200Response
```

List website databases

Returns a paginated list of MySQL databases created for an Agency Plan website.  Each entry includes the database's non-system users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDatabasesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listWebsiteDatabasesV1($websiteUid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->listWebsiteDatabasesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\AgencyHostingListWebsiteDatabasesV1200Response**](../Model/AgencyHostingListWebsiteDatabasesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
