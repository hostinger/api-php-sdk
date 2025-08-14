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

Check availability of domain names across multiple TLDs.  Multiple TLDs can be checked at once. If you want alternative domains with response, provide only one TLD and set `with_alternatives` to `true`. TLDs should be provided without leading dot (e.g. `com`, `net`, `org`).  Endpoint has rate limit of 10 requests per minute.  Use this endpoint to verify domain availability before purchase.

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
