# Hostinger\HostingPocketBaseApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPocketBaseBackendV1()**](HostingPocketBaseApi.md#createPocketBaseBackendV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/pocketbase | Create PocketBase backend |
| [**deletePocketBaseBackendV1()**](HostingPocketBaseApi.md#deletePocketBaseBackendV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/pocketbase | Delete PocketBase backend |
| [**getPocketBaseBackendV1()**](HostingPocketBaseApi.md#getPocketBaseBackendV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/pocketbase | Get PocketBase backend |
| [**listAccountPocketBaseBackendsV1()**](HostingPocketBaseApi.md#listAccountPocketBaseBackendsV1) | **GET** /api/hosting/v1/accounts/{username}/pocketbase | List account PocketBase backends |
| [**setPocketBaseSuperuserV1()**](HostingPocketBaseApi.md#setPocketBaseSuperuserV1) | **PUT** /api/hosting/v1/accounts/{username}/websites/{domain}/pocketbase/superuser | Set PocketBase superuser |


## `createPocketBaseBackendV1()`

```php
createPocketBaseBackendV1($username, $domain, $hostingV1PocketBaseCreateBackendRequest): \Hostinger\Model\HostingV1PocketBaseBackendCreatedResource
```

Create PocketBase backend

Creates a PocketBase backend for a website: a database, authentication, file storage and a realtime REST API, served from the website's own domain. A website has at most one PocketBase backend. Creation usually takes a few seconds.  The backend takes over the `/api` and `/_` paths of the website: from then on requests to these paths and everything below them go to PocketBase, while every other path keeps serving the website. Do not create a backend for a website that serves its own `/api` or `/_` paths, because they stop working; confirm with the user before calling it. Deleting the backend gives both paths back to the website. Headless WordPress websites and parked domains are not supported; for a parked domain, use the website it is parked on. A website that already has a backend is rejected with 422, unless that backend is in state `missing`: then it is replaced with a new, empty one. A website set up with `type: headless_empty` becomes `headless_pocketbase`; any other website keeps its type.  `superuser_password` is optional: leave it out to get a strong generated password, or send your own (10-128 characters). The response returns it in `superuser_password` once and Hostinger never stores it, so save it in your app secrets right away; you need it to manage the backend through the PocketBase REST API. If it is lost, set a new one with the `Set PocketBase superuser` endpoint. `superuser_email` defaults to the email of the website owner.  The instance sleeps when idle and wakes on the first request, so the first call after a quiet period can take a few seconds. `next_steps` in the response lists what to do next.  PocketBase is rolling out gradually: an account without access yet gets 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPocketBaseApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1PocketBaseCreateBackendRequest = new \Hostinger\Model\HostingV1PocketBaseCreateBackendRequest(); // \Hostinger\Model\HostingV1PocketBaseCreateBackendRequest

try {
    $result = $apiInstance->createPocketBaseBackendV1($username, $domain, $hostingV1PocketBaseCreateBackendRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPocketBaseApi->createPocketBaseBackendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1PocketBaseCreateBackendRequest** | [**\Hostinger\Model\HostingV1PocketBaseCreateBackendRequest**](../Model/HostingV1PocketBaseCreateBackendRequest.md)|  | [optional] |

### Return type

[**\Hostinger\Model\HostingV1PocketBaseBackendCreatedResource**](../Model/HostingV1PocketBaseBackendCreatedResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePocketBaseBackendV1()`

```php
deletePocketBaseBackendV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete PocketBase backend

Permanently deletes the PocketBase backend of a website with all its data (collections, records, users and uploaded files) and gives the `/api` and `/_` paths back to the website; a `headless_pocketbase` website becomes `headless_empty`. This cannot be undone and every app using this backend stops working, so confirm with the user before calling it and export the data you need from the dashboard (`admin_url`) first.  Returns success also when the website has no PocketBase backend; then it only clears a `headless_pocketbase` mark. To regain access after losing the superuser password, use the `Set PocketBase superuser` endpoint instead of deleting the backend.  PocketBase is rolling out gradually: an account without access yet gets 422; an unknown website gets 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPocketBaseApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->deletePocketBaseBackendV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPocketBaseApi->deletePocketBaseBackendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPocketBaseBackendV1()`

```php
getPocketBaseBackendV1($username, $domain): \Hostinger\Model\HostingV1PocketBaseBackendResource
```

Get PocketBase backend

Returns the PocketBase backend of a website: its REST API and dashboard URLs, live state and version. A PocketBase backend gives the website a database, authentication, file storage and a realtime REST API, served from the website's own domain under `/api` and `/_`. Returns 404 when the website has no PocketBase backend.  The superuser password is only shown once, when it is set, and is never returned here. If it is lost, set a new one with the `Set PocketBase superuser` endpoint.  The instance sleeps when idle and wakes on the first request, so `asleep` is a normal state and the first call to a sleeping instance can take a few seconds. `starting`, `running` and `stopping` are healthy; `failed` or `unregistered` mean the instance is broken; `missing` means its files are gone from the server, and creating the PocketBase backend again sets up a new, empty one. `state` is null when the server could not be reached; retry later.  PocketBase is rolling out gradually: an account without access yet gets 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPocketBaseApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getPocketBaseBackendV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPocketBaseApi->getPocketBaseBackendV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1PocketBaseBackendResource**](../Model/HostingV1PocketBaseBackendResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountPocketBaseBackendsV1()`

```php
listAccountPocketBaseBackendsV1($username): \Hostinger\Model\HostingV1PocketBaseInstanceResource[]
```

List account PocketBase backends

Lists the PocketBase backends of all websites of a hosting account with their URLs, live state, version and disk usage. A PocketBase backend gives a website a database, authentication, file storage and a realtime REST API, served from the website's own domain. An empty list means no website of the account has a PocketBase backend.  States: `asleep` is normal (the instance sleeps when idle and wakes on the first request); `starting`, `running` and `stopping` are healthy; `failed` or `unregistered` mean the instance is broken; `missing` means its files are gone from the server, and creating the PocketBase backend again sets up a new, empty one. `state` is null when the server could not be reached; retry later.  PocketBase is rolling out gradually: an account without access yet gets 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPocketBaseApi(config: $config);
$username = u123456789; // string

try {
    $result = $apiInstance->listAccountPocketBaseBackendsV1($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPocketBaseApi->listAccountPocketBaseBackendsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

[**\Hostinger\Model\HostingV1PocketBaseInstanceResource[]**](../Model/HostingV1PocketBaseInstanceResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPocketBaseSuperuserV1()`

```php
setPocketBaseSuperuserV1($username, $domain, $hostingV1PocketBaseUpdateSuperuserRequest): \Hostinger\Model\HostingV1PocketBaseSuperuserResource
```

Set PocketBase superuser

Sets the password of a superuser of the website's PocketBase backend, and creates that superuser when there is none with the given email. The old password of that superuser stops working at once, so apps and scripts still using it lose superuser access; confirm with the user before calling it.  Use it when the superuser password is lost (Hostinger never stores it), when it leaked and must be rotated, or to add another superuser with a different email. Returns 404 when the website has no PocketBase backend; create one first. App user accounts are managed through the PocketBase REST API, not here.  `superuser_password` is optional: leave it out to get a strong generated password, or send your own (10-128 characters). The response returns it in `superuser_password` once and Hostinger never stores it, so save it in your app secrets right away, then authenticate again with `pb.collection('_superusers').authWithPassword`. `superuser_email` defaults to the email of the website owner.  PocketBase is rolling out gradually: an account without access yet gets 422.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingPocketBaseApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1PocketBaseUpdateSuperuserRequest = new \Hostinger\Model\HostingV1PocketBaseUpdateSuperuserRequest(); // \Hostinger\Model\HostingV1PocketBaseUpdateSuperuserRequest

try {
    $result = $apiInstance->setPocketBaseSuperuserV1($username, $domain, $hostingV1PocketBaseUpdateSuperuserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingPocketBaseApi->setPocketBaseSuperuserV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1PocketBaseUpdateSuperuserRequest** | [**\Hostinger\Model\HostingV1PocketBaseUpdateSuperuserRequest**](../Model/HostingV1PocketBaseUpdateSuperuserRequest.md)|  | [optional] |

### Return type

[**\Hostinger\Model\HostingV1PocketBaseSuperuserResource**](../Model/HostingV1PocketBaseSuperuserResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
