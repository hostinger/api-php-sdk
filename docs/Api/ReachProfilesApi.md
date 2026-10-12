# Hostinger\ReachProfilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**connectSendingDomainV1()**](ReachProfilesApi.md#connectSendingDomainV1) | **POST** /api/reach/v1/profiles/{profileUuid}/domains | Connect sending domain |
| [**deleteSendingDomainV1()**](ReachProfilesApi.md#deleteSendingDomainV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/domains | Delete sending domain |
| [**getConnectedSendingDomainV1()**](ReachProfilesApi.md#getConnectedSendingDomainV1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains | Get connected sending domain |
| [**getProfileDomainDNSStatusV1()**](ReachProfilesApi.md#getProfileDomainDNSStatusV1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains/dns-status | Get profile domain DNS status |
| [**getProfileSettingsV1()**](ReachProfilesApi.md#getProfileSettingsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/settings | Get profile settings |
| [**getRemainingPlanLimitsV1()**](ReachProfilesApi.md#getRemainingPlanLimitsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/limits | Get remaining plan limits |
| [**listPlanFeatureAccessV1()**](ReachProfilesApi.md#listPlanFeatureAccessV1) | **GET** /api/reach/v1/profiles/{profileUuid}/features | List plan feature access |
| [**listProfilesV1()**](ReachProfilesApi.md#listProfilesV1) | **GET** /api/reach/v1/profiles | List Profiles |
| [**updateProfileSettingsV1()**](ReachProfilesApi.md#updateProfileSettingsV1) | **PATCH** /api/reach/v1/profiles/{profileUuid}/settings | Update profile settings |


## `connectSendingDomainV1()`

```php
connectSendingDomainV1($profileUuid, $reachV1ProfilesDomainsConnectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Connect sending domain

Connect a sending domain to the profile so emails can be sent from addresses on it.  Connecting does not make the domain ready to send: check the DNS status endpoint next for records that are still missing. A domain the account owns or has already verified connects immediately. Any other domain starts a TXT ownership verification and returns `409`; complete the verification in Reach, then retry. Returns `422` when the profile or another profile already has the domain, the domain is blocked, or its ownership cannot be verified. An already connected domain is never replaced.  On success the sender address of draft and scheduled campaigns, and of published automation and double opt-in emails, moves onto the new domain in the background, keeping the part before the `@`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ProfilesDomainsConnectRequest = new \Hostinger\Model\ReachV1ProfilesDomainsConnectRequest(); // \Hostinger\Model\ReachV1ProfilesDomainsConnectRequest

try {
    $result = $apiInstance->connectSendingDomainV1($profileUuid, $reachV1ProfilesDomainsConnectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->connectSendingDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ProfilesDomainsConnectRequest** | [**\Hostinger\Model\ReachV1ProfilesDomainsConnectRequest**](../Model/ReachV1ProfilesDomainsConnectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSendingDomainV1()`

```php
deleteSendingDomainV1($profileUuid, $reachV1ProfilesDomainsDisconnectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete sending domain

Disconnect the sending domain from the profile.  The domain record is removed, so the profile has no sending domain afterwards and campaigns cannot be sent until a domain is connected again. Sender addresses already stored on campaigns, automations and settings are left untouched and keep pointing at the removed domain. A domain that is not connected to the profile also succeeds, so success is not proof that anything was deleted. DNS records at the DNS provider are not removed. To switch domains, delete this one and connect the new one. Confirm the domain with the customer before calling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ProfilesDomainsDisconnectRequest = new \Hostinger\Model\ReachV1ProfilesDomainsDisconnectRequest(); // \Hostinger\Model\ReachV1ProfilesDomainsDisconnectRequest

try {
    $result = $apiInstance->deleteSendingDomainV1($profileUuid, $reachV1ProfilesDomainsDisconnectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->deleteSendingDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ProfilesDomainsDisconnectRequest** | [**\Hostinger\Model\ReachV1ProfilesDomainsDisconnectRequest**](../Model/ReachV1ProfilesDomainsDisconnectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `getProfileSettingsV1()`

```php
getProfileSettingsV1($profileUuid): \Hostinger\Model\ReachV1ProfilesSettingsSettingsResource
```

Get profile settings

Get the profile's saved sender identity and brand details.  Read the default sender before creating a campaign instead of asking the customer, and reuse the brand fields when generating email content. Any field can be `null` for a profile that never filled its settings in. This does not check that the sending domain is verified, use the connected sending domain endpoint for that.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->getProfileSettingsV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->getProfileSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesSettingsSettingsResource**](../Model/ReachV1ProfilesSettingsSettingsResource.md)

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

## `updateProfileSettingsV1()`

```php
updateProfileSettingsV1($profileUuid, $reachV1ProfilesSettingsUpdateRequest): \Hostinger\Model\ReachV1ProfilesSettingsSettingsResource
```

Update profile settings

Change the profile's default sender and brand details.  Send only the fields to change: every omitted field keeps its value, and `null` or an empty string clears a text field. The default sender is what campaigns created afterwards start from; existing campaigns keep their own sender. `sender_email` is only the part before the `@`, because Reach combines it with the profile's connected sending domain, so an address outside that domain cannot be set. Connecting a sending domain is a separate endpoint and a connected domain cannot be changed here. Returns the settings after the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1ProfilesSettingsUpdateRequest = new \Hostinger\Model\ReachV1ProfilesSettingsUpdateRequest(); // \Hostinger\Model\ReachV1ProfilesSettingsUpdateRequest

try {
    $result = $apiInstance->updateProfileSettingsV1($profileUuid, $reachV1ProfilesSettingsUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->updateProfileSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1ProfilesSettingsUpdateRequest** | [**\Hostinger\Model\ReachV1ProfilesSettingsUpdateRequest**](../Model/ReachV1ProfilesSettingsUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\ReachV1ProfilesSettingsSettingsResource**](../Model/ReachV1ProfilesSettingsSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
