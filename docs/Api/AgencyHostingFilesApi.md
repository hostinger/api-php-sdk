# Hostinger\AgencyHostingFilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**importAgencyPlanWebsiteFromArchiveV1()**](AgencyHostingFilesApi.md#importAgencyPlanWebsiteFromArchiveV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/files/import-archive | Import Agency Plan website from archive |


## `importAgencyPlanWebsiteFromArchiveV1()`

```php
importAgencyPlanWebsiteFromArchiveV1($websiteUid, $agencyHostingV1FilesImportArchiveRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Import Agency Plan website from archive

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
    $result = $apiInstance->importAgencyPlanWebsiteFromArchiveV1($websiteUid, $agencyHostingV1FilesImportArchiveRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingFilesApi->importAgencyPlanWebsiteFromArchiveV1: ', $e->getMessage(), PHP_EOL;
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
