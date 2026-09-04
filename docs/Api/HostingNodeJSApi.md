# Hostinger\HostingNodeJSApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyseFailedNodeJsBuildV1()**](HostingNodeJSApi.md#analyseFailedNodeJsBuildV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid}/analysis | Analyse failed Node.js build |
| [**clearNodeJsRuntimeLogsV1()**](HostingNodeJSApi.md#clearNodeJsRuntimeLogsV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/runtime-logs | Clear Node.js runtime logs |
| [**getNodeJSBuildLogsV1()**](HostingNodeJSApi.md#getNodeJSBuildLogsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid}/logs | Get NodeJS build logs |
| [**getNodeJsBuildDetailsV1()**](HostingNodeJSApi.md#getNodeJsBuildDetailsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid} | Get Node.js build details |
| [**getNodeJsBuildSettingsFromArchiveV1()**](HostingNodeJSApi.md#getNodeJsBuildSettingsFromArchiveV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/settings/from-archive | Get Node.js build settings from archive |
| [**getNodeJsBuildSettingsV1()**](HostingNodeJSApi.md#getNodeJsBuildSettingsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/settings | Get Node.js build settings |
| [**getNodeJsRuntimeLogsV1()**](HostingNodeJSApi.md#getNodeJsRuntimeLogsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/runtime-logs | Get Node.js runtime logs |
| [**listNodeJSBuildsV1()**](HostingNodeJSApi.md#listNodeJSBuildsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds | List NodeJS builds |
| [**listNodeJsEnvironmentVariablesV1()**](HostingNodeJSApi.md#listNodeJsEnvironmentVariablesV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/settings/env | List Node.js environment variables |
| [**listNodeJsVulnerabilitiesV1()**](HostingNodeJSApi.md#listNodeJsVulnerabilitiesV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities | List Node.js vulnerabilities |
| [**patchNodeJsVulnerabilitiesV1()**](HostingNodeJSApi.md#patchNodeJsVulnerabilitiesV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities/patch | Patch Node.js vulnerabilities |
| [**replaceNodeJsEnvironmentVariablesV1()**](HostingNodeJSApi.md#replaceNodeJsEnvironmentVariablesV1) | **PUT** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/settings/env | Replace Node.js environment variables |
| [**restartNodeJsApplicationV1()**](HostingNodeJSApi.md#restartNodeJsApplicationV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/server/restart | Restart Node.js application |
| [**startNodeJsBuildV1()**](HostingNodeJSApi.md#startNodeJsBuildV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds | Start Node.js build |
| [**updateNodeJsBuildSettingsV1()**](HostingNodeJSApi.md#updateNodeJsBuildSettingsV1) | **PUT** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/settings | Update Node.js build settings |


## `analyseFailedNodeJsBuildV1()`

```php
analyseFailedNodeJsBuildV1($username, $domain, $uuid): \Hostinger\Model\HostingV1NodeJsBuildAnalysisResource
```

Analyse failed Node.js build

Returns an AI analysis of why a build failed and how to fix it, based on the build logs, the project file list and package.json. Only builds in the `failed` state can be analysed; any other state returns 422. When no analysis could be produced both `analysis` and `solution` are null, in which case read `Get NodeJS build logs` instead.  Each call runs the analysis again, so call it once per failed build and keep the result. Limited to 5 calls per minute per API client (429 above that).

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

try {
    $result = $apiInstance->analyseFailedNodeJsBuildV1($username, $domain, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->analyseFailedNodeJsBuildV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **uuid** | **string**| Build UUID | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildAnalysisResource**](../Model/HostingV1NodeJsBuildAnalysisResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clearNodeJsRuntimeLogsV1()`

```php
clearNodeJsRuntimeLogsV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Clear Node.js runtime logs

Empties the Node.js application's runtime log file. This cannot be undone, so confirm with the user before calling it. Returns success even when no log file exists yet.  Use it before reproducing a problem so the next `Get Node.js runtime logs` call returns only fresh entries; start that call with `period` again instead of reusing a `from_line` from before the clear.

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
    $result = $apiInstance->clearNodeJsRuntimeLogsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->clearNodeJsRuntimeLogsV1: ', $e->getMessage(), PHP_EOL;
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

## `getNodeJsBuildDetailsV1()`

```php
getNodeJsBuildDetailsV1($username, $domain, $uuid): \Hostinger\Model\HostingV1NodeJsBuildResource
```

Get Node.js build details

Returns one build by UUID: its state (`pending`, `running`, `completed`, `failed`), the options it ran with and timestamps. Poll this while a build is pending or running. When it is failed, read `Get NodeJS build logs` and `Analyse failed Node.js build` for the cause. Returns 404 when the UUID does not belong to a build of this website.

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

try {
    $result = $apiInstance->getNodeJsBuildDetailsV1($username, $domain, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->getNodeJsBuildDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **uuid** | **string**| Build UUID | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildResource**](../Model/HostingV1NodeJsBuildResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeJsBuildSettingsFromArchiveV1()`

```php
getNodeJsBuildSettingsFromArchiveV1($username, $domain, $archivePath): \Hostinger\Model\HostingV1NodeJsBuildSettingsResource
```

Get Node.js build settings from archive

Auto-detect Node.js build settings from a package.json inside an archive already on the server.  Use this before calling `Start Node.js Build` to preview what settings will be used, or to let the user review and override values (framework, node version, root directory, output directory, build script) before committing to a build.  The archive must already be present on the website's file storage. Use the `Generate Upload URL` endpoint to obtain credentials and upload the archive first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$archivePath = example.zip; // string | The path to the archive file relative to the document root of the vhost

try {
    $result = $apiInstance->getNodeJsBuildSettingsFromArchiveV1($username, $domain, $archivePath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->getNodeJsBuildSettingsFromArchiveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **archivePath** | **string**| The path to the archive file relative to the document root of the vhost | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildSettingsResource**](../Model/HostingV1NodeJsBuildSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeJsBuildSettingsV1()`

```php
getNodeJsBuildSettingsV1($username, $domain): \Hostinger\Model\HostingV1NodeJsStoredBuildSettingsResource
```

Get Node.js build settings

Returns the build settings stored for the website: framework (`app_type`), Node.js version, root and output directory, build script, entry file and package manager. Stored settings drive Git auto-deployment builds. A build started through the API uses the values sent in that request and saves them here only when no settings exist yet.  Returns 404 until the first build or the first settings update stores them. Use this after a failed build to check whether the framework or the entry file were detected wrong, then fix them with the `Update Node.js build settings` endpoint.

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
    $result = $apiInstance->getNodeJsBuildSettingsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->getNodeJsBuildSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsStoredBuildSettingsResource**](../Model/HostingV1NodeJsStoredBuildSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeJsRuntimeLogsV1()`

```php
getNodeJsRuntimeLogsV1($username, $domain, $period, $fromLine, $limit, $levels): \Hostinger\Model\HostingV1NodeJsRuntimeLogsResource
```

Get Node.js runtime logs

Returns the Node.js application's runtime console log entries, oldest first, each with timestamp, level and message. On the first call send `period` (`1h`, `1d`, `1w` or `1m`) and optionally `levels` and `limit` (1-5000, default 1000); when more entries match than `limit`, the newest are kept.  To poll for new entries send `total_lines + 1` from the previous response as `from_line` and omit `period`; `period` and `from_line` cannot be combined. Lines that are not JSON with a timestamp, level and message are skipped, so `logs` may hold fewer than `limit` entries while `total_lines` counts every raw line. Entries with a timestamp before `last_deployed_at` belong to the previous deployment. Returns an empty `logs` list when the application has not written a log file yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$period = 1h; // string | Time window for the first fetch. Required when `from_line` is not sent.
$fromLine = 5042; // int | 1-based line of the log file to start from. For polling send `total_lines + 1` from the previous response. Cannot be combined with `period`.
$limit = 200; // int | Maximum number of log entries to return. When more entries match, the newest are kept.
$levels = ["ERROR","WARN"]; // string[] | Return only entries with these log levels, sent as a comma-separated list, e.g. ERROR,WARN. Matching runs on the raw log line, so entries written with numeric levels (for example by pino) are excluded while this filter is set.

try {
    $result = $apiInstance->getNodeJsRuntimeLogsV1($username, $domain, $period, $fromLine, $limit, $levels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->getNodeJsRuntimeLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **period** | **string**| Time window for the first fetch. Required when &#x60;from_line&#x60; is not sent. | [optional] |
| **fromLine** | **int**| 1-based line of the log file to start from. For polling send &#x60;total_lines + 1&#x60; from the previous response. Cannot be combined with &#x60;period&#x60;. | [optional] |
| **limit** | **int**| Maximum number of log entries to return. When more entries match, the newest are kept. | [optional] [default to 1000] |
| **levels** | [**string[]**](../Model/string.md)| Return only entries with these log levels, sent as a comma-separated list, e.g. ERROR,WARN. Matching runs on the raw log line, so entries written with numeric levels (for example by pino) are excluded while this filter is set. | [optional] |

### Return type

[**\Hostinger\Model\HostingV1NodeJsRuntimeLogsResource**](../Model/HostingV1NodeJsRuntimeLogsResource.md)

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

## `listNodeJsEnvironmentVariablesV1()`

```php
listNodeJsEnvironmentVariablesV1($username, $domain): \Hostinger\Model\HostingV1NodeJsEnvVarResource[]
```

List Node.js environment variables

Lists the Node.js environment variables currently set for the website. Values are always masked as `********` and cannot be read back through this API. Use this endpoint to see which keys are configured or to verify a change, not to read values.  To change variables, use the `Replace Node.js environment variables` endpoint. It replaces the whole set, so never copy the masked values from this response into that request; send the full desired set with real values taken from the project `.env` file or the user prompt instead.

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
    $result = $apiInstance->listNodeJsEnvironmentVariablesV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->listNodeJsEnvironmentVariablesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsEnvVarResource[]**](../Model/HostingV1NodeJsEnvVarResource.md)

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

## `replaceNodeJsEnvironmentVariablesV1()`

```php
replaceNodeJsEnvironmentVariablesV1($username, $domain, $hostingV1NodeJsSetBuildEnvVarsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Replace Node.js environment variables

Replaces the website's Node.js environment variables with the ones provided. This is a full replace: any variable not in the request is deleted, and sending an empty `env_vars` array deletes every variable. Saving writes the values and restarts the running Node.js process.  A restart is enough for apps that read environment variables at process start, such as Express or NestJS. It is not enough for frameworks that bake variables into the build. Next.js standalone is one of those: build-time values (including `NEXT_PUBLIC_*`) need a fresh build. After this call, use the `Start Node.js build` endpoint so those apps pick up the new values.  The `List Node.js environment variables` endpoint returns masked values (`********`), so never copy values from it into this request. Always send the full desired set with real values taken from the project `.env` file or the user prompt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1NodeJsSetBuildEnvVarsRequest = new \Hostinger\Model\HostingV1NodeJsSetBuildEnvVarsRequest(); // \Hostinger\Model\HostingV1NodeJsSetBuildEnvVarsRequest

try {
    $result = $apiInstance->replaceNodeJsEnvironmentVariablesV1($username, $domain, $hostingV1NodeJsSetBuildEnvVarsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->replaceNodeJsEnvironmentVariablesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1NodeJsSetBuildEnvVarsRequest** | [**\Hostinger\Model\HostingV1NodeJsSetBuildEnvVarsRequest**](../Model/HostingV1NodeJsSetBuildEnvVarsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

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

## `startNodeJsBuildV1()`

```php
startNodeJsBuildV1($username, $domain, $hostingV1NodeJsStartBuildRequest): \Hostinger\Model\HostingV1NodeJsBuildResource
```

Start Node.js build

Start a Node.js build process using files already present on the website's file storage.  WARNING: on success this overwrites the website's existing contents and cannot be undone — verify this is intended before calling this endpoint.  The `source_type` must be `archive` and `source_options.archive_path` must point to an existing archive file on the server (relative to the website document root). Use the `Generate Upload URL` endpoint to obtain credentials and upload the archive first.  To auto-detect build settings from an archive before starting, first call the `Get Node.js Build Settings from Archive` endpoint.  The returned build `uuid` can be used to poll progress and retrieve logs via the `Get Node.js Build Logs` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1NodeJsStartBuildRequest = new \Hostinger\Model\HostingV1NodeJsStartBuildRequest(); // \Hostinger\Model\HostingV1NodeJsStartBuildRequest

try {
    $result = $apiInstance->startNodeJsBuildV1($username, $domain, $hostingV1NodeJsStartBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->startNodeJsBuildV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1NodeJsStartBuildRequest** | [**\Hostinger\Model\HostingV1NodeJsStartBuildRequest**](../Model/HostingV1NodeJsStartBuildRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsBuildResource**](../Model/HostingV1NodeJsBuildResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNodeJsBuildSettingsV1()`

```php
updateNodeJsBuildSettingsV1($username, $domain, $hostingV1NodeJsUpdateBuildSettingsRequest): \Hostinger\Model\HostingV1NodeJsStoredBuildSettingsResource
```

Update Node.js build settings

Replaces the build settings stored for the website. Send the full set: `node_version` is required and every nullable field you omit is stored as null. Creates the settings when none exist yet.  This does not start a build. Stored settings drive Git auto-deployment builds; a build started through the API uses the values sent in that request, so to rebuild with corrected settings call `Start Node.js build` with the same values. Typical fixes: a wrong `app_type` after auto-detection, or a missing `entry_file` for express, fastify, nest, nuxt and hono apps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingNodeJSApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1NodeJsUpdateBuildSettingsRequest = new \Hostinger\Model\HostingV1NodeJsUpdateBuildSettingsRequest(); // \Hostinger\Model\HostingV1NodeJsUpdateBuildSettingsRequest

try {
    $result = $apiInstance->updateNodeJsBuildSettingsV1($username, $domain, $hostingV1NodeJsUpdateBuildSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingNodeJSApi->updateNodeJsBuildSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1NodeJsUpdateBuildSettingsRequest** | [**\Hostinger\Model\HostingV1NodeJsUpdateBuildSettingsRequest**](../Model/HostingV1NodeJsUpdateBuildSettingsRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1NodeJsStoredBuildSettingsResource**](../Model/HostingV1NodeJsStoredBuildSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
