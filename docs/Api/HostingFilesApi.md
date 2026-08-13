# Hostinger\HostingFilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebsiteFileContentV1()**](HostingFilesApi.md#getWebsiteFileContentV1) | **GET** /api/hosting/v1/accounts/{username}/domains/{domain}/files/content | Get website file content |
| [**listWebsiteFilesAndDirectoriesV1()**](HostingFilesApi.md#listWebsiteFilesAndDirectoriesV1) | **GET** /api/hosting/v1/accounts/{username}/domains/{domain}/files | List website files and directories |


## `getWebsiteFileContentV1()`

```php
getWebsiteFileContentV1($username, $domain, $path, $fromLine, $maxLines): \Hostinger\Model\HostingV1FilesFileContentResource
```

Get website file content

Get a single file's content, relative to a website's document root.  Read-only; refuses symlinks, oversized files, non-text file types, and files identified as containing secrets (e.g. credential files) — none of these are returned by this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingFilesApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$path = index.php; // string | File path, relative to the document root.
$fromLine = 0; // int | Line offset to start reading from.
$maxLines = 1000; // int | Max number of lines to return.

try {
    $result = $apiInstance->getWebsiteFileContentV1($username, $domain, $path, $fromLine, $maxLines);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingFilesApi->getWebsiteFileContentV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **path** | **string**| File path, relative to the document root. | |
| **fromLine** | **int**| Line offset to start reading from. | [optional] [default to 0] |
| **maxLines** | **int**| Max number of lines to return. | [optional] [default to 5000] |

### Return type

[**\Hostinger\Model\HostingV1FilesFileContentResource**](../Model/HostingV1FilesFileContentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteFilesAndDirectoriesV1()`

```php
listWebsiteFilesAndDirectoriesV1($username, $domain, $directory, $maxDepth, $maxItems, $offset, $fileTypes): \Hostinger\Model\HostingV1FilesFilesResource
```

List website files and directories

List files and directories under a website's document root.  Use `directory` to browse a subdirectory relative to the document root. Symlinked entries are listed but never traversed into or resolved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingFilesApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$directory = blog; // string | Directory path to check
$maxDepth = 5; // int | How many directory levels deep to recurse.
$maxItems = 500; // int | Max number of entries to return in this page.
$offset = 0; // int | Number of entries to skip. Page with offset + item count until reaching total_items.
$fileTypes = ["file","directory"]; // string[] | Filter by entry type, e.g. file,directory. Omit for all types.

try {
    $result = $apiInstance->listWebsiteFilesAndDirectoriesV1($username, $domain, $directory, $maxDepth, $maxItems, $offset, $fileTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingFilesApi->listWebsiteFilesAndDirectoriesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **directory** | **string**| Directory path to check | [optional] [default to &#39;&#39;] |
| **maxDepth** | **int**| How many directory levels deep to recurse. | [optional] [default to 5] |
| **maxItems** | **int**| Max number of entries to return in this page. | [optional] [default to 1000] |
| **offset** | **int**| Number of entries to skip. Page with offset + item count until reaching total_items. | [optional] [default to 0] |
| **fileTypes** | [**string[]**](../Model/string.md)| Filter by entry type, e.g. file,directory. Omit for all types. | [optional] |

### Return type

[**\Hostinger\Model\HostingV1FilesFilesResource**](../Model/HostingV1FilesFilesResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
