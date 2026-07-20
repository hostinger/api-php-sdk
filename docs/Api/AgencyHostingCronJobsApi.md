# Hostinger\AgencyHostingCronJobsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAgencyPlanWebsiteCronJobV1()**](AgencyHostingCronJobsApi.md#createAgencyPlanWebsiteCronJobV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs | Create Agency Plan website cron job |
| [**deleteAgencyPlanWebsiteCronJobV1()**](AgencyHostingCronJobsApi.md#deleteAgencyPlanWebsiteCronJobV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs/{uuid} | Delete Agency Plan website cron job |
| [**listAgencyPlanWebsiteCronJobsV1()**](AgencyHostingCronJobsApi.md#listAgencyPlanWebsiteCronJobsV1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs | List Agency Plan website cron jobs |


## `createAgencyPlanWebsiteCronJobV1()`

```php
createAgencyPlanWebsiteCronJobV1($websiteUid, $agencyHostingV1WebsitesCronJobsCreateCronJobRequest): \Hostinger\Model\AgencyHostingV1WebsitesCronJobsCronJobResource
```

Create Agency Plan website cron job

Creates a cron job for an Agency Plan website from a schedule expression and a command.  Returns the created cron job, including its uuid, which is required to delete the cron job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingCronJobsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1WebsitesCronJobsCreateCronJobRequest = new \Hostinger\Model\AgencyHostingV1WebsitesCronJobsCreateCronJobRequest(); // \Hostinger\Model\AgencyHostingV1WebsitesCronJobsCreateCronJobRequest

try {
    $result = $apiInstance->createAgencyPlanWebsiteCronJobV1($websiteUid, $agencyHostingV1WebsitesCronJobsCreateCronJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingCronJobsApi->createAgencyPlanWebsiteCronJobV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1WebsitesCronJobsCreateCronJobRequest** | [**\Hostinger\Model\AgencyHostingV1WebsitesCronJobsCreateCronJobRequest**](../Model/AgencyHostingV1WebsitesCronJobsCreateCronJobRequest.md)|  | |

### Return type

[**\Hostinger\Model\AgencyHostingV1WebsitesCronJobsCronJobResource**](../Model/AgencyHostingV1WebsitesCronJobsCronJobResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgencyPlanWebsiteCronJobV1()`

```php
deleteAgencyPlanWebsiteCronJobV1($websiteUid, $uuid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete Agency Plan website cron job

Permanently deletes the cron job identified by its uuid from an Agency Plan website.  The operation is idempotent: deleting a cron job that does not exist succeeds without error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingCronJobsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$uuid = 01931d6f-68f5-7b72-8d9e-09c6e1e6aa0e; // string | Unique identifier of the cron job as returned by the list cron jobs endpoint.

try {
    $result = $apiInstance->deleteAgencyPlanWebsiteCronJobV1($websiteUid, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingCronJobsApi->deleteAgencyPlanWebsiteCronJobV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **uuid** | **string**| Unique identifier of the cron job as returned by the list cron jobs endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgencyPlanWebsiteCronJobsV1()`

```php
listAgencyPlanWebsiteCronJobsV1($websiteUid, $page, $perPage): \Hostinger\Model\AgencyHostingListAgencyPlanWebsiteCronJobsV1200Response
```

List Agency Plan website cron jobs

Returns a paginated list of cron jobs configured for an Agency Plan website.  Each entry includes the schedule expression and the command executed on that schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingCronJobsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAgencyPlanWebsiteCronJobsV1($websiteUid, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingCronJobsApi->listAgencyPlanWebsiteCronJobsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\AgencyHostingListAgencyPlanWebsiteCronJobsV1200Response**](../Model/AgencyHostingListAgencyPlanWebsiteCronJobsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
