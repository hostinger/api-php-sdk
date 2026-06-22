# Hostinger\HostingDatabasesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeDatabasePasswordV1()**](HostingDatabasesApi.md#changeDatabasePasswordV1) | **PATCH** /api/hosting/v1/accounts/{username}/databases/{name}/change-password | Change database password |
| [**createAccountDatabaseV1()**](HostingDatabasesApi.md#createAccountDatabaseV1) | **POST** /api/hosting/v1/accounts/{username}/databases | Create account database |
| [**deleteAccountDatabaseV1()**](HostingDatabasesApi.md#deleteAccountDatabaseV1) | **DELETE** /api/hosting/v1/accounts/{username}/databases/{name} | Delete account database |
| [**getPhpMyAdminLinkV1()**](HostingDatabasesApi.md#getPhpMyAdminLinkV1) | **GET** /api/hosting/v1/accounts/{username}/databases/{name}/phpmyadmin-link | Get phpMyAdmin link |
| [**listAccountDatabasesV1()**](HostingDatabasesApi.md#listAccountDatabasesV1) | **GET** /api/hosting/v1/accounts/{username}/databases | List account databases |
| [**repairDatabaseV1()**](HostingDatabasesApi.md#repairDatabaseV1) | **PATCH** /api/hosting/v1/accounts/{username}/databases/{name}/repair | Repair database |


## `changeDatabasePasswordV1()`

```php
changeDatabasePasswordV1($username, $name, $hostingV1DatabasesChangeDatabasePasswordRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change database password

Changes the password for the specified database user.  The database name must be the full name returned by the list databases endpoint. The password must also be updated in any website configuration that uses this database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$name = u123456789_test_db; // string | Full database name as returned by the list databases endpoint.
$hostingV1DatabasesChangeDatabasePasswordRequest = new \Hostinger\Model\HostingV1DatabasesChangeDatabasePasswordRequest(); // \Hostinger\Model\HostingV1DatabasesChangeDatabasePasswordRequest

try {
    $result = $apiInstance->changeDatabasePasswordV1($username, $name, $hostingV1DatabasesChangeDatabasePasswordRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->changeDatabasePasswordV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **name** | **string**| Full database name as returned by the list databases endpoint. | |
| **hostingV1DatabasesChangeDatabasePasswordRequest** | [**\Hostinger\Model\HostingV1DatabasesChangeDatabasePasswordRequest**](../Model/HostingV1DatabasesChangeDatabasePasswordRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountDatabaseV1()`

```php
createAccountDatabaseV1($username, $hostingV1DatabasesCreateDatabaseRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create account database

Creates a database with a database user and password for the specified account.  The database name and user are automatically prefixed with the account username when needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$hostingV1DatabasesCreateDatabaseRequest = new \Hostinger\Model\HostingV1DatabasesCreateDatabaseRequest(); // \Hostinger\Model\HostingV1DatabasesCreateDatabaseRequest

try {
    $result = $apiInstance->createAccountDatabaseV1($username, $hostingV1DatabasesCreateDatabaseRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->createAccountDatabaseV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **hostingV1DatabasesCreateDatabaseRequest** | [**\Hostinger\Model\HostingV1DatabasesCreateDatabaseRequest**](../Model/HostingV1DatabasesCreateDatabaseRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountDatabaseV1()`

```php
deleteAccountDatabaseV1($username, $name): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete account database

Permanently deletes a database and its remote connections.  The database name must be the full name returned by the list databases endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$name = u123456789_test_db; // string | Full database name as returned by the list databases endpoint.

try {
    $result = $apiInstance->deleteAccountDatabaseV1($username, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->deleteAccountDatabaseV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **name** | **string**| Full database name as returned by the list databases endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhpMyAdminLinkV1()`

```php
getPhpMyAdminLinkV1($username, $name): \Hostinger\Model\HostingV1DatabasesPhpMyAdminLinkResource
```

Get phpMyAdmin link

Returns a direct sign-on link to phpMyAdmin for the specified database.  Use this when a visual database interface is needed for SQL queries, imports, exports, or table management. The database name must be the full name returned by the list databases endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$name = u123456789_test_db; // string | Full database name as returned by the list databases endpoint.

try {
    $result = $apiInstance->getPhpMyAdminLinkV1($username, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->getPhpMyAdminLinkV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **name** | **string**| Full database name as returned by the list databases endpoint. | |

### Return type

[**\Hostinger\Model\HostingV1DatabasesPhpMyAdminLinkResource**](../Model/HostingV1DatabasesPhpMyAdminLinkResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountDatabasesV1()`

```php
listAccountDatabasesV1($username, $page, $perPage, $domain, $isAssigned, $search): \Hostinger\Model\HostingListAccountDatabasesV1200Response
```

List account databases

Returns a paginated list of databases for the specified account.  Use the domain and is_assigned filters to find databases assigned to a specific domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$domain = example.com; // string | Filter by domain name (exact match)
$isAssigned = true; // bool | When used with domain, return only databases assigned to that domain.
$search = test_db; // string | Search databases by name, user, or creation date.

try {
    $result = $apiInstance->listAccountDatabasesV1($username, $page, $perPage, $domain, $isAssigned, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->listAccountDatabasesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **domain** | **string**| Filter by domain name (exact match) | [optional] |
| **isAssigned** | **bool**| When used with domain, return only databases assigned to that domain. | [optional] |
| **search** | **string**| Search databases by name, user, or creation date. | [optional] |

### Return type

[**\Hostinger\Model\HostingListAccountDatabasesV1200Response**](../Model/HostingListAccountDatabasesV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repairDatabaseV1()`

```php
repairDatabaseV1($username, $name): \Hostinger\Model\CommonSuccessEmptyResource
```

Repair database

Repairs corrupted database tables asynchronously.  Use when database errors, crashes, or corruption are reported. The database name must be the full name returned by the list databases endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDatabasesApi(config: $config);
$username = u123456789; // string
$name = u123456789_test_db; // string | Full database name as returned by the list databases endpoint.

try {
    $result = $apiInstance->repairDatabaseV1($username, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDatabasesApi->repairDatabaseV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **name** | **string**| Full database name as returned by the list databases endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
