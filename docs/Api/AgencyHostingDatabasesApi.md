# Hostinger\AgencyHostingDatabasesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAgencyPlanWebsiteDatabaseUserV1()**](AgencyHostingDatabasesApi.md#createAgencyPlanWebsiteDatabaseUserV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users | Create Agency Plan website database user |
| [**createAgencyPlanWebsiteDatabaseV1()**](AgencyHostingDatabasesApi.md#createAgencyPlanWebsiteDatabaseV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases | Create Agency Plan website database |
| [**deleteAgencyPlanWebsiteDatabaseUserV1()**](AgencyHostingDatabasesApi.md#deleteAgencyPlanWebsiteDatabaseUserV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users/{database_user_name} | Delete Agency Plan website database user |
| [**deleteAgencyPlanWebsiteDatabaseV1()**](AgencyHostingDatabasesApi.md#deleteAgencyPlanWebsiteDatabaseV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name} | Delete Agency Plan website database |
| [**listAgencyPlanWebsiteDatabasesV1()**](AgencyHostingDatabasesApi.md#listAgencyPlanWebsiteDatabasesV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/databases | List Agency Plan website databases |


## `createAgencyPlanWebsiteDatabaseUserV1()`

```php
createAgencyPlanWebsiteDatabaseUserV1($websiteUid, $databaseName, $agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest): \Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseUserResource
```

Create Agency Plan website database user

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
    $result = $apiInstance->createAgencyPlanWebsiteDatabaseUserV1($websiteUid, $databaseName, $agencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->createAgencyPlanWebsiteDatabaseUserV1: ', $e->getMessage(), PHP_EOL;
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

## `createAgencyPlanWebsiteDatabaseV1()`

```php
createAgencyPlanWebsiteDatabaseV1($websiteUid, $agencyHostingV1WebsitesDatabasesCreateDatabaseRequest): \Hostinger\Model\AgencyHostingV1WebsitesDatabasesDatabaseResource
```

Create Agency Plan website database

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
    $result = $apiInstance->createAgencyPlanWebsiteDatabaseV1($websiteUid, $agencyHostingV1WebsitesDatabasesCreateDatabaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->createAgencyPlanWebsiteDatabaseV1: ', $e->getMessage(), PHP_EOL;
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

## `deleteAgencyPlanWebsiteDatabaseUserV1()`

```php
deleteAgencyPlanWebsiteDatabaseUserV1($websiteUid, $databaseName, $databaseUserName): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete Agency Plan website database user

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
    $result = $apiInstance->deleteAgencyPlanWebsiteDatabaseUserV1($websiteUid, $databaseName, $databaseUserName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->deleteAgencyPlanWebsiteDatabaseUserV1: ', $e->getMessage(), PHP_EOL;
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

## `deleteAgencyPlanWebsiteDatabaseV1()`

```php
deleteAgencyPlanWebsiteDatabaseV1($websiteUid, $databaseName): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete Agency Plan website database

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
    $result = $apiInstance->deleteAgencyPlanWebsiteDatabaseV1($websiteUid, $databaseName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->deleteAgencyPlanWebsiteDatabaseV1: ', $e->getMessage(), PHP_EOL;
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

## `listAgencyPlanWebsiteDatabasesV1()`

```php
listAgencyPlanWebsiteDatabasesV1($websiteUid, $page, $perPage): \Hostinger\Model\AgencyHostingListAgencyPlanWebsiteDatabasesV1200Response
```

List Agency Plan website databases

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
    $result = $apiInstance->listAgencyPlanWebsiteDatabasesV1($websiteUid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDatabasesApi->listAgencyPlanWebsiteDatabasesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\AgencyHostingListAgencyPlanWebsiteDatabasesV1200Response**](../Model/AgencyHostingListAgencyPlanWebsiteDatabasesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
