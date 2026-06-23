# Hostinger\ReachProfilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfileDomainDNSStatusV1()**](ReachProfilesApi.md#getProfileDomainDNSStatusV1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains/dns-status | Get profile domain DNS status |
| [**listProfilesV1()**](ReachProfilesApi.md#listProfilesV1) | **GET** /api/reach/v1/profiles | List Profiles |


## `getProfileDomainDNSStatusV1()`

```php
getProfileDomainDNSStatusV1($profileUuid): \Hostinger\Model\ReachV1ProfilesDomainsDnsStatusResource
```

Get profile domain DNS status

Retrieve the DNS configuration status for a profile's domain.  This endpoint reports the state of MX, SPF, DKIM and DMARC records, including the actual records found and the suggested records required for correct email delivery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->getProfileDomainDNSStatusV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->getProfileDomainDNSStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesDomainsDnsStatusResource**](../Model/ReachV1ProfilesDomainsDnsStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProfilesV1()`

```php
listProfilesV1(): \Hostinger\Model\ReachV1ProfilesProfileResource[]
```

List Profiles

This endpoint returns all profiles available to the client, including their basic information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);

try {
    $result = $apiInstance->listProfilesV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->listProfilesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\ReachV1ProfilesProfileResource[]**](../Model/ReachV1ProfilesProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
