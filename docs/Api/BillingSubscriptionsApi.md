# Hostinger\BillingSubscriptionsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubscriptionListV1()**](BillingSubscriptionsApi.md#getSubscriptionListV1) | **GET** /api/billing/v1/subscriptions | Get subscription list |


## `getSubscriptionListV1()`

```php
getSubscriptionListV1(): \Hostinger\Model\BillingV1SubscriptionSubscriptionResource[]
```

Get subscription list

This endpoint retrieves a list of all subscriptions associated with your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubscriptionListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingSubscriptionsApi->getSubscriptionListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\BillingV1SubscriptionSubscriptionResource[]**](../Model/BillingV1SubscriptionSubscriptionResource.md)

### Authorization

[apiToken](../../README.md#apiToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
