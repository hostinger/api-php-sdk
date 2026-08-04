# Hostinger\DomainsWHOISApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPendingIRTPVerificationV1()**](DomainsWHOISApi.md#cancelPendingIRTPVerificationV1) | **DELETE** /api/domains/v1/irtp/{domain} | Cancel pending IRTP verification |
| [**changeWHOISProfileForDomainV1()**](DomainsWHOISApi.md#changeWHOISProfileForDomainV1) | **PUT** /api/domains/v1/whois/change | Change WHOIS profile for domain |
| [**createWHOISProfileV1()**](DomainsWHOISApi.md#createWHOISProfileV1) | **POST** /api/domains/v1/whois | Create WHOIS profile |
| [**deleteWHOISProfileV1()**](DomainsWHOISApi.md#deleteWHOISProfileV1) | **DELETE** /api/domains/v1/whois/{whoisId} | Delete WHOIS profile |
| [**getPendingIRTPVerificationV1()**](DomainsWHOISApi.md#getPendingIRTPVerificationV1) | **GET** /api/domains/v1/irtp/{domain} | Get pending IRTP verification |
| [**getWHOISProfileListV1()**](DomainsWHOISApi.md#getWHOISProfileListV1) | **GET** /api/domains/v1/whois | Get WHOIS profile list |
| [**getWHOISProfileUsageV1()**](DomainsWHOISApi.md#getWHOISProfileUsageV1) | **GET** /api/domains/v1/whois/{whoisId}/usage | Get WHOIS profile usage |
| [**getWHOISProfileV1()**](DomainsWHOISApi.md#getWHOISProfileV1) | **GET** /api/domains/v1/whois/{whoisId} | Get WHOIS profile |
| [**setWHOISProfileAsDefaultV1()**](DomainsWHOISApi.md#setWHOISProfileAsDefaultV1) | **PUT** /api/domains/v1/whois/default/{whoisId} | Set WHOIS profile as default |
| [**unsetDefaultWHOISProfileV1()**](DomainsWHOISApi.md#unsetDefaultWHOISProfileV1) | **DELETE** /api/domains/v1/whois/default/{whoisId} | Unset default WHOIS profile |


## `cancelPendingIRTPVerificationV1()`

```php
cancelPendingIRTPVerificationV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Cancel pending IRTP verification

Cancel a pending IRTP verification.  Use this endpoint to back out of a WHOIS change that is stuck waiting on registrant confirmation, for example when the confirmation email cannot be received, without waiting out the 5-day expiry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->cancelPendingIRTPVerificationV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->cancelPendingIRTPVerificationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeWHOISProfileForDomainV1()`

```php
changeWHOISProfileForDomainV1($domainsV1WHOISChangeUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change WHOIS profile for domain

Change WHOIS contact profile for a domain.  Repoints the given contact roles to a new WHOIS profile and submits the change to the registry. The profile currently assigned to those roles is resolved automatically; the request fails if the given roles are not all on the same profile today.  Changing transfer sensitive fields on the owner contact starts an IRTP verification.  The change is processed asynchronously.  Use this endpoint to move a registered domain onto different contact information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$domainsV1WHOISChangeUpdateRequest = new \Hostinger\Model\DomainsV1WHOISChangeUpdateRequest(); // \Hostinger\Model\DomainsV1WHOISChangeUpdateRequest

try {
    $result = $apiInstance->changeWHOISProfileForDomainV1($domainsV1WHOISChangeUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->changeWHOISProfileForDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1WHOISChangeUpdateRequest** | [**\Hostinger\Model\DomainsV1WHOISChangeUpdateRequest**](../Model/DomainsV1WHOISChangeUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWHOISProfileV1()`

```php
createWHOISProfileV1($domainsV1WHOISStoreRequest): \Hostinger\Model\DomainsV1WHOISProfileResource
```

Create WHOIS profile

Create WHOIS contact profile.  Use this endpoint to add new contact information for domain registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$domainsV1WHOISStoreRequest = new \Hostinger\Model\DomainsV1WHOISStoreRequest(); // \Hostinger\Model\DomainsV1WHOISStoreRequest

try {
    $result = $apiInstance->createWHOISProfileV1($domainsV1WHOISStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->createWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1WHOISStoreRequest** | [**\Hostinger\Model\DomainsV1WHOISStoreRequest**](../Model/DomainsV1WHOISStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWHOISProfileV1()`

```php
deleteWHOISProfileV1($whoisId): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete WHOIS profile

Delete WHOIS contact profile.  Use this endpoint to remove unused contact profiles from account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->deleteWHOISProfileV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->deleteWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingIRTPVerificationV1()`

```php
getPendingIRTPVerificationV1($domain): \Hostinger\Model\DomainsV1IRTPVerificationResource
```

Get pending IRTP verification

Retrieve a pending IRTP verification for a domain.  Both the old and new registrant must confirm it before the WHOIS change takes effect.  Use this endpoint to check the status of a WHOIS change awaiting registrant confirmation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getPendingIRTPVerificationV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getPendingIRTPVerificationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DomainsV1IRTPVerificationResource**](../Model/DomainsV1IRTPVerificationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileListV1()`

```php
getWHOISProfileListV1($tld): \Hostinger\Model\DomainsV1WHOISProfileResource[]
```

Get WHOIS profile list

Retrieve WHOIS contact profiles.  Use this endpoint to view available contact profiles for domain registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$tld = com; // string | Filter by TLD (without leading dot)

try {
    $result = $apiInstance->getWHOISProfileListV1($tld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tld** | **string**| Filter by TLD (without leading dot) | [optional] |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource[]**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileUsageV1()`

```php
getWHOISProfileUsageV1($whoisId): string[]
```

Get WHOIS profile usage

Retrieve domain list where provided WHOIS contact profile is used.  Use this endpoint to view which domains use specific contact profiles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->getWHOISProfileUsageV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileUsageV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

**string[]**

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWHOISProfileV1()`

```php
getWHOISProfileV1($whoisId): \Hostinger\Model\DomainsV1WHOISProfileResource
```

Get WHOIS profile

Retrieve a WHOIS contact profile.  Use this endpoint to view domain registration contact information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->getWHOISProfileV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->getWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\DomainsV1WHOISProfileResource**](../Model/DomainsV1WHOISProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWHOISProfileAsDefaultV1()`

```php
setWHOISProfileAsDefaultV1($whoisId): \Hostinger\Model\CommonSuccessEmptyResource
```

Set WHOIS profile as default

Set WHOIS contact profile as default.  The default profile is pre-selected for the TLD it belongs to when registering new domains.  Use this endpoint to avoid picking contact information for every registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->setWHOISProfileAsDefaultV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->setWHOISProfileAsDefaultV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsetDefaultWHOISProfileV1()`

```php
unsetDefaultWHOISProfileV1($whoisId): \Hostinger\Model\CommonSuccessEmptyResource
```

Unset default WHOIS profile

Unset WHOIS contact profile as default.  The profile itself is kept, it is only no longer pre-selected for its TLD.  Use this endpoint to stop reusing contact information for new registrations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsWHOISApi(config: $config);
$whoisId = 564651; // int | WHOIS ID

try {
    $result = $apiInstance->unsetDefaultWHOISProfileV1($whoisId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsWHOISApi->unsetDefaultWHOISProfileV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **whoisId** | **int**| WHOIS ID | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
