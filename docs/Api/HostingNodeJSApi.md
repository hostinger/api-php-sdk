# Hostinger\HostingNodeJSApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNodeJSBuildFromArchiveV1()**](HostingNodeJSApi.md#createNodeJSBuildFromArchiveV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/from-archive | Create NodeJS build from archive |
| [**getNodeJSBuildLogsV1()**](HostingNodeJSApi.md#getNodeJSBuildLogsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid}/logs | Get NodeJS build logs |
| [**listNodeJSBuildsV1()**](HostingNodeJSApi.md#listNodeJSBuildsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds | List NodeJS builds |
| [**listNodeJsVulnerabilitiesV1()**](HostingNodeJSApi.md#listNodeJsVulnerabilitiesV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities | List Node.js vulnerabilities |
| [**patchNodeJsVulnerabilitiesV1()**](HostingNodeJSApi.md#patchNodeJsVulnerabilitiesV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities/patch | Patch Node.js vulnerabilities |
| [**restartNodeJsApplicationV1()**](HostingNodeJSApi.md#restartNodeJsApplicationV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/server/restart | Restart Node.js application |


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

## `listNodeJsVulnerabilitiesV1()`

```php
listNodeJsVulnerabilitiesV1($username, $domain, $severities): \Hostinger\Model\HostingV1NodeJsVulnerabilityResource[]
```

List Node.js vulnerabilities

Lists known npm package vulnerabilities detected on a Node.js website, enriched with advisory metadata (severity, CVSS score, CVE, advisory URL). Results are sorted from the most severe to the least severe, then by publish date (newest first). Use the `severities` query parameter to filter.  Vulnerabilities with `is_patchable` set to `true` can be auto-fixed via the `Patch Node.js Vulnerabilities` endpoint, which opens a GitHub pull request with updated package versions. Auto-fix is only available for websites deployed from a connected GitHub repository. Vulnerabilities with `is_patching_in_progress` set to `true` are already included in an open patch pull request; while any patch pull request is open, new patch requests for this website are rejected until it is merged or closed.  Data comes from periodic dependency scans, so it may lag behind the latest deployment. An empty list means the most recent scan found no vulnerabilities; it does not guarantee the current deployment is vulnerability-free. Available on Business and Cloud Hosting plans.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$severities = array('severities_example'); // string[] | Severities to filter by

try {
    $result = $apiInstance->listNodeJsVulnerabilitiesV1($username, $domain, $severities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->listNodeJsVulnerabilitiesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **severities** | [**string[]**](../Model/string.md)| Severities to filter by | [optional] |

### Return type

[**\Hostinger\Model\HostingV1NodeJsVulnerabilityResource[]**](../Model/HostingV1NodeJsVulnerabilityResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchNodeJsVulnerabilitiesV1()`

```php
patchNodeJsVulnerabilitiesV1($username, $domain, $hostingV1NodeJsPatchVulnerabilitiesRequest): \Hostinger\Model\HostingV1NodeJsPatchResultResource
```

Patch Node.js vulnerabilities

Patches the selected Node.js vulnerabilities by updating the affected package versions in `package.json` and opening a GitHub pull request in the connected repository. The customer reviews and merges the pull request; merging triggers the automatic deployment.  Auto-fix is only available for websites deployed from a connected GitHub repository. Websites deployed from an archive have no auto-fix path and return a 404. The Hostinger GitHub App needs write access to the repository; without it the request fails with a 403 explaining the missing permission.  Only vulnerabilities with `is_patchable` set to `true` can be patched. Non-patchable IDs in the selection are skipped; the pull request covers the patchable subset, listed in `patched_vulnerability_ids`. Selections without any patchable vulnerability are rejected with a 422. Only one patch pull request can be open at a time per website; close or merge it before patching again. Available on Business and Cloud Hosting plans.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1NodeJsPatchVulnerabilitiesRequest = new \Hostinger\Model\HostingV1NodeJsPatchVulnerabilitiesRequest(); // \Hostinger\Model\HostingV1NodeJsPatchVulnerabilitiesRequest

try {
    $result = $apiInstance->patchNodeJsVulnerabilitiesV1($username, $domain, $hostingV1NodeJsPatchVulnerabilitiesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->patchNodeJsVulnerabilitiesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1NodeJsPatchVulnerabilitiesRequest** | [**\Hostinger\Model\HostingV1NodeJsPatchVulnerabilitiesRequest**](../Model/HostingV1NodeJsPatchVulnerabilitiesRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsPatchResultResource**](../Model/HostingV1NodeJsPatchResultResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartNodeJsApplicationV1()`

```php
restartNodeJsApplicationV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Restart Node.js application

Restarts the Node.js server process for the website. Does not rebuild or redeploy the application. Use it to apply environment or configuration changes, or to recover a hung application.  Only applicable to server-side applications (Express, Next.js, NestJS, etc.). Static front-end apps (React, Vue, Vite) have no persistent server process, so restarting them has no effect. Returns success even when the website has no server process to restart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->restartNodeJsApplicationV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->restartNodeJsApplicationV1: ', $e->getMessage(), PHP_EOL;
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
