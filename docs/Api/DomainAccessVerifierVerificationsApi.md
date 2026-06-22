# Hostinger\DomainAccessVerifierVerificationsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDomainVerificationsDIRECT()**](DomainAccessVerifierVerificationsApi.md#getDomainVerificationsDIRECT) | **GET** /api/v2/direct/verifications/active | Get domain verifications |


## `getDomainVerificationsDIRECT()`

```php
getDomainVerificationsDIRECT($domainAccessVerifierV2VerificationsListRequest): \Hostinger\Model\DomainAccessVerifierV2VerificationsActiveVerificationsCollection
```

Get domain verifications

Retrieve a list of pending and completed domain verifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainAccessVerifierVerificationsApi(config: $config);
$domainAccessVerifierV2VerificationsListRequest = new \Hostinger\Model\DomainAccessVerifierV2VerificationsListRequest(); // \Hostinger\Model\DomainAccessVerifierV2VerificationsListRequest

try {
    $result = $apiInstance->getDomainVerificationsDIRECT($domainAccessVerifierV2VerificationsListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainAccessVerifierVerificationsApi->getDomainVerificationsDIRECT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainAccessVerifierV2VerificationsListRequest** | [**\Hostinger\Model\DomainAccessVerifierV2VerificationsListRequest**](../Model/DomainAccessVerifierV2VerificationsListRequest.md)|  | |

### Return type

[**\Hostinger\Model\DomainAccessVerifierV2VerificationsActiveVerificationsCollection**](../Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollection.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
