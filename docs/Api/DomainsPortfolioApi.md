# Hostinger\DomainsPortfolioApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDomainListV1()**](DomainsPortfolioApi.md#getDomainListV1) | **GET** /api/domains/v1/portfolio | Get domain list |


## `getDomainListV1()`

```php
getDomainListV1(): \Hostinger\Model\DomainsV1DomainDomainCollection
```

Get domain list

This endpoint retrieves a list of all domains associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsPortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDomainListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsPortfolioApi->getDomainListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\DomainsV1DomainDomainCollection**](../Model/DomainsV1DomainDomainCollection.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
