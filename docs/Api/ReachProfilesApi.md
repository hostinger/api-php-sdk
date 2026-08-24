# Hostinger\ReachProfilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConnectedSendingDomainV1()**](ReachProfilesApi.md#getConnectedSendingDomainV1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains | Get connected sending domain |
| [**getProfileDomainDNSStatusV1()**](ReachProfilesApi.md#getProfileDomainDNSStatusV1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains/dns-status | Get profile domain DNS status |
| [**getRemainingPlanLimitsV1()**](ReachProfilesApi.md#getRemainingPlanLimitsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/limits | Get remaining plan limits |
| [**listPlanFeatureAccessV1()**](ReachProfilesApi.md#listPlanFeatureAccessV1) | **GET** /api/reach/v1/profiles/{profileUuid}/features | List plan feature access |
| [**listProfilesV1()**](ReachProfilesApi.md#listProfilesV1) | **GET** /api/reach/v1/profiles | List Profiles |


## `getConnectedSendingDomainV1()`

```php
getConnectedSendingDomainV1($profileUuid): \Hostinger\Model\ReachV1ProfilesDomainsSendingDomainResource
```

Get connected sending domain

Get the sending domain connected to the profile, its verification status and any suspended sender addresses.  Campaigns only go out once a domain is connected and active, so this is the cheapest way to check that precondition before building one. A profile with no domain connected returns the same shape with every field set to `null`. For the individual MX, SPF, DKIM and DMARC records behind the status, use the DNS status endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->getConnectedSendingDomainV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->getConnectedSendingDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesDomainsSendingDomainResource**](../Model/ReachV1ProfilesDomainsSendingDomainResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `getRemainingPlanLimitsV1()`

```php
getRemainingPlanLimitsV1($profileUuid): \Hostinger\Model\ReachV1ProfilesPlanLimitsResource
```

Get remaining plan limits

Get how much of the plan is left for the current period.  Two things to keep in mind before you build alerting on this. The period is a calendar month rather than a billing anniversary, so the counters reset on the 1st no matter when the subscription started. And usage is tracked per order, so every profile on the same order shares one pool and reports the same numbers here. Only the current period is available, past usage is not kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->getRemainingPlanLimitsV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->getRemainingPlanLimitsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesPlanLimitsResource**](../Model/ReachV1ProfilesPlanLimitsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlanFeatureAccessV1()`

```php
listPlanFeatureAccessV1($profileUuid): \Hostinger\Model\ReachV1ProfilesFeaturesPlanFeatureResource[]
```

List plan feature access

List which plan features the profile can use.  This is the feature lock matrix, not a usage quota. `available` means the feature can be used right now and `locked` means it is not part of the base plan, so an upgrade is needed. For remaining emails, recipients and AI credits use the limits endpoint instead.  Worth checking before building something that cannot be activated afterwards, such as an automation on a plan without automation activation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listPlanFeatureAccessV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->listPlanFeatureAccessV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesFeaturesPlanFeatureResource[]**](../Model/ReachV1ProfilesFeaturesPlanFeatureResource.md)

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
