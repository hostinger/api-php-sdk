# Hostinger\AgencyHostingFilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateUploadURLV1()**](AgencyHostingFilesApi.md#generateUploadURLV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/files/upload-urls | Generate upload URL |
| [**importWebsiteFromArchiveV1()**](AgencyHostingFilesApi.md#importWebsiteFromArchiveV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/files/import-archive | Import website from archive |


## `generateUploadURLV1()`

```php
generateUploadURLV1($websiteUid): \Hostinger\Model\AgencyHostingV1FilesUploadUrlResource
```

Generate upload URL

Generate a file browser upload URL with authentication credentials for uploading files to an Agency Plan website's file storage.  Returns `url`, `auth_key` and `rest_auth_key`. Use these to upload a file to the website's file storage via the TUS resumable upload protocol (TUS 1.0.0). Send `X-Auth: {auth_key}` and `X-Auth-Rest: {rest_auth_key}` headers on every request below.  1. Create the upload: `POST` to `{url}/{relative_file_path}?override=true` with headers    `upload-length: {file size in bytes}` and `upload-offset: 0`. Expect `201 Created`. 2. Upload the file: send the file bytes to the same location (any TUS 1.0.0 client, or    `PATCH` requests with an `upload-offset` header tracking progress) until complete.  `relative_file_path` is the destination path inside the website's file storage, e.g. `app.zip`.  Instead of a TUS client, plain `curl` also works: ``` FILE=app.zip SIZE=$(stat -f%z \"$FILE\")   # stat -c%s on Linux  curl -i -X POST \"{url}/${FILE}?override=true\" \\   -H \"X-Auth: {auth_key}\" \\   -H \"X-Auth-Rest: {rest_auth_key}\" \\   -H \"Tus-Resumable: 1.0.0\" \\   -H \"Upload-Length: ${SIZE}\" \\   -H \"Upload-Offset: 0\" # -> 201 Created  curl -i -X PATCH \"{url}/${FILE}?override=true\" \\   -H \"X-Auth: {auth_key}\" \\   -H \"X-Auth-Rest: {rest_auth_key}\" \\   -H \"Tus-Resumable: 1.0.0\" \\   -H \"Content-Type: application/offset+octet-stream\" \\   -H \"Upload-Offset: 0\" \\   --data-binary \"@${FILE}\" # -> 204 No Content, Upload-Offset response header equals SIZE when done ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingFilesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->generateUploadURLV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingFilesApi->generateUploadURLV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1FilesUploadUrlResource**](../Model/AgencyHostingV1FilesUploadUrlResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importWebsiteFromArchiveV1()`

```php
importWebsiteFromArchiveV1($websiteUid, $agencyHostingV1FilesImportArchiveRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Import website from archive

Imports an Agency Plan website from an already-uploaded archive.  Upload the archive to the website's root directory via file browser first, then provide its filename in this request. Website contents are overwritten by the archive contents. Supported archive types: .zip, .tar, .tar.gz, .tgz.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingFilesApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1FilesImportArchiveRequest = new \Hostinger\Model\AgencyHostingV1FilesImportArchiveRequest(); // \Hostinger\Model\AgencyHostingV1FilesImportArchiveRequest

try {
    $result = $apiInstance->importWebsiteFromArchiveV1($websiteUid, $agencyHostingV1FilesImportArchiveRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingFilesApi->importWebsiteFromArchiveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1FilesImportArchiveRequest** | [**\Hostinger\Model\AgencyHostingV1FilesImportArchiveRequest**](../Model/AgencyHostingV1FilesImportArchiveRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
