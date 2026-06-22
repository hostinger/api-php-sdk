# Hostinger\HostingNodeJSApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNodeJSBuildFromArchiveV1()**](HostingNodeJSApi.md#createNodeJSBuildFromArchiveV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/from-archive | Create NodeJS build from archive |
| [**getNodeJSBuildLogsV1()**](HostingNodeJSApi.md#getNodeJSBuildLogsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid}/logs | Get NodeJS build logs |
| [**listNodeJSBuildsV1()**](HostingNodeJSApi.md#listNodeJSBuildsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds | List NodeJS builds |


## `createNodeJSBuildFromArchiveV1()`

```php
createNodeJSBuildFromArchiveV1($username, $domain, $hostingV1NodeJsCreateFromArchiveRequest): \Hostinger\Model\HostingV1NodeJsBuildResource
```

Create NodeJS build from archive

Upload a project archive, auto-detect build settings, and immediately start a Node.js build.  This is the recommended single-step approach for deploying a Node.js application. The archive is uploaded to the website's file storage, build settings are auto-detected from the package.json inside the archive, and the build process starts automatically. Optional override fields take precedence over auto-detected values. Maximum archive size is 50MB.  Before archiving, exclude `node_modules/` and any build output directories (e.g. `dist/`, `.next/`, `build/`) — they are not needed because the build process runs the install step automatically, and including them unnecessarily increases the archive size. This also helps keep the archive well under the 50MB limit.  Example (zip): ``` zip -r archive.zip . --exclude \"node_modules/_*\" --exclude \"dist/_*\" ```  The returned build `uuid` can be used to poll progress and retrieve logs via the `Get Node.js Build Logs` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1NodeJsCreateFromArchiveRequest = new \Hostinger\Model\HostingV1NodeJsCreateFromArchiveRequest(); // \Hostinger\Model\HostingV1NodeJsCreateFromArchiveRequest

try {
    $result = $apiInstance->createNodeJSBuildFromArchiveV1($username, $domain, $hostingV1NodeJsCreateFromArchiveRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->createNodeJSBuildFromArchiveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1NodeJsCreateFromArchiveRequest** | [**\Hostinger\Model\HostingV1NodeJsCreateFromArchiveRequest**](../Model/HostingV1NodeJsCreateFromArchiveRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildResource**](../Model/HostingV1NodeJsBuildResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeJSBuildLogsV1()`

```php
getNodeJSBuildLogsV1($username, $domain, $uuid, $fromLine): \Hostinger\Model\HostingV1NodeJsBuildLogsResource
```

Get NodeJS build logs

Retrieve logs from a specific Node.js build process.  To stream live output while a build is running, poll this endpoint repeatedly while the build state is `running`, passing the previously returned `lines` count as `from_line` to fetch only new output since the last call. Log content may contain ANSI escape sequences (color codes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$uuid = 123e4567-e89b-12d3-a456-426614174000; // string | Build UUID
$fromLine = 10; // int | Line from which to start retrieving logs

try {
    $result = $apiInstance->getNodeJSBuildLogsV1($username, $domain, $uuid, $fromLine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->getNodeJSBuildLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **uuid** | **string**| Build UUID | |
| **fromLine** | **int**| Line from which to start retrieving logs | [optional] [default to 0] |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildLogsResource**](../Model/HostingV1NodeJsBuildLogsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNodeJSBuildsV1()`

```php
listNodeJSBuildsV1($username, $domain, $page, $perPage, $states): \Hostinger\Model\HostingListNodeJSBuildsV1200Response
```

List NodeJS builds

Retrieve a paginated list of Node.js build processes for a specific website.  Each build represents a single run of the Node.js build pipeline. Use the `states` query parameter to filter results by build state (pending, running, completed, failed). Use the `uuid` from a build to poll its output via the `Get Node.js Build Logs` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$states = array('states_example'); // string[] | Build states to filter by

try {
    $result = $apiInstance->listNodeJSBuildsV1($username, $domain, $page, $perPage, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->listNodeJSBuildsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **states** | [**string[]**](../Model/string.md)| Build states to filter by | [optional] |

### Return type

[**\Hostinger\Model\HostingListNodeJSBuildsV1200Response**](../Model/HostingListNodeJSBuildsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
