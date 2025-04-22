# Hostinger\DomainsAvailabilityApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkDomainAvailabilityV1()**](DomainsAvailabilityApi.md#checkDomainAvailabilityV1) | **POST** /api/domains/v1/availability | Check domain availability |


## `checkDomainAvailabilityV1()`

```php
checkDomainAvailabilityV1($domainsV1AvailabilityAvailabilityRequest): \Hostinger\Model\DomainsV1AvailabilityAvailabilityResource[]
```

Check domain availability

This endpoint checks the availability of a domain name. Multiple TLDs can be checked at once.  Endpoint has rate limit of 10 requests per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsAvailabilityApi(config: $config);
$domainsV1AvailabilityAvailabilityRequest = new \Hostinger\Model\DomainsV1AvailabilityAvailabilityRequest(); // \Hostinger\Model\DomainsV1AvailabilityAvailabilityRequest

try {
    $result = $apiInstance->checkDomainAvailabilityV1($domainsV1AvailabilityAvailabilityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsAvailabilityApi->checkDomainAvailabilityV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainsV1AvailabilityAvailabilityRequest** | [**\Hostinger\Model\DomainsV1AvailabilityAvailabilityRequest**](../Model/DomainsV1AvailabilityAvailabilityRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainsV1AvailabilityAvailabilityResource[]**](../Model/DomainsV1AvailabilityAvailabilityResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
