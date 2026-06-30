# Hostinger\HostingCronJobsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccountCronJobV1()**](HostingCronJobsApi.md#createAccountCronJobV1) | **POST** /api/hosting/v1/accounts/{username}/cron-jobs | Create account cron job |
| [**deleteAccountCronJobV1()**](HostingCronJobsApi.md#deleteAccountCronJobV1) | **DELETE** /api/hosting/v1/accounts/{username}/cron-jobs/{uid} | Delete account cron job |
| [**getCronJobOutputV1()**](HostingCronJobsApi.md#getCronJobOutputV1) | **GET** /api/hosting/v1/accounts/{username}/cron-jobs/{uid}/output | Get cron job output |
| [**listAccountCronJobsV1()**](HostingCronJobsApi.md#listAccountCronJobsV1) | **GET** /api/hosting/v1/accounts/{username}/cron-jobs | List account cron jobs |


## `createAccountCronJobV1()`

```php
createAccountCronJobV1($username, $hostingV1CronJobsCreateCronJobRequest): \Hostinger\Model\HostingV1CronJobsCronJobResource
```

Create account cron job

Creates a cron job for the specified account from a schedule expression and a command.  Returns the created cron job, including its uid, which is required to delete the cron job or fetch its output.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCronJobsApi(config: $config);
$username = u123456789; // string
$hostingV1CronJobsCreateCronJobRequest = new \Hostinger\Model\HostingV1CronJobsCreateCronJobRequest(); // \Hostinger\Model\HostingV1CronJobsCreateCronJobRequest

try {
    $result = $apiInstance->createAccountCronJobV1($username, $hostingV1CronJobsCreateCronJobRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCronJobsApi->createAccountCronJobV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **hostingV1CronJobsCreateCronJobRequest** | [**\Hostinger\Model\HostingV1CronJobsCreateCronJobRequest**](../Model/HostingV1CronJobsCreateCronJobRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1CronJobsCronJobResource**](../Model/HostingV1CronJobsCronJobResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountCronJobV1()`

```php
deleteAccountCronJobV1($username, $uid): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete account cron job

Permanently deletes the cron job identified by its uid.  The uid is returned by the list cron jobs endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCronJobsApi(config: $config);
$username = u123456789; // string
$uid = cron_abc123; // string | Unique identifier of the cron job as returned by the list cron jobs endpoint.

try {
    $result = $apiInstance->deleteAccountCronJobV1($username, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCronJobsApi->deleteAccountCronJobV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **uid** | **string**| Unique identifier of the cron job as returned by the list cron jobs endpoint. | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCronJobOutputV1()`

```php
getCronJobOutputV1($username, $uid): \Hostinger\Model\HostingV1CronJobsCronJobOutputResource
```

Get cron job output

Returns the output captured from the last execution of the cron job identified by its uid.  The uid is returned by the list cron jobs endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCronJobsApi(config: $config);
$username = u123456789; // string
$uid = cron_abc123; // string | Unique identifier of the cron job as returned by the list cron jobs endpoint.

try {
    $result = $apiInstance->getCronJobOutputV1($username, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCronJobsApi->getCronJobOutputV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **uid** | **string**| Unique identifier of the cron job as returned by the list cron jobs endpoint. | |

### Return type

[**\Hostinger\Model\HostingV1CronJobsCronJobOutputResource**](../Model/HostingV1CronJobsCronJobOutputResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountCronJobsV1()`

```php
listAccountCronJobsV1($username): \Hostinger\Model\HostingV1CronJobsCronJobResource[]
```

List account cron jobs

Returns the list of cron jobs configured for the specified account, including their schedule and command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingCronJobsApi(config: $config);
$username = u123456789; // string

try {
    $result = $apiInstance->listAccountCronJobsV1($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingCronJobsApi->listAccountCronJobsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

[**\Hostinger\Model\HostingV1CronJobsCronJobResource[]**](../Model/HostingV1CronJobsCronJobResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
