# Hostinger\BillingSubscriptionsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSubscriptionV1()**](BillingSubscriptionsApi.md#cancelSubscriptionV1) | **DELETE** /api/billing/v1/subscriptions/{subscriptionId} | Cancel subscription |
| [**disableAutoRenewalV1()**](BillingSubscriptionsApi.md#disableAutoRenewalV1) | **DELETE** /api/billing/v1/subscriptions/{subscriptionId}/auto-renewal/disable | Disable auto-renewal |
| [**enableAutoRenewalV1()**](BillingSubscriptionsApi.md#enableAutoRenewalV1) | **PATCH** /api/billing/v1/subscriptions/{subscriptionId}/auto-renewal/enable | Enable auto-renewal |
| [**getSubscriptionListV1()**](BillingSubscriptionsApi.md#getSubscriptionListV1) | **GET** /api/billing/v1/subscriptions | Get subscription list |


## `cancelSubscriptionV1()`

```php
cancelSubscriptionV1($subscriptionId, $billingV1SubscriptionCancelRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Cancel subscription

Cancel a subscription and stop any further billing.  Use this endpoint when users want to terminate active services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingSubscriptionsApi(config: $config);
$subscriptionId = Cxy353Uhl1xC54pG6; // string | Subscription ID
$billingV1SubscriptionCancelRequest = new \Hostinger\Model\BillingV1SubscriptionCancelRequest(); // \Hostinger\Model\BillingV1SubscriptionCancelRequest

try {
    $result = $apiInstance->cancelSubscriptionV1($subscriptionId, $billingV1SubscriptionCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingSubscriptionsApi->cancelSubscriptionV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| Subscription ID | |
| **billingV1SubscriptionCancelRequest** | [**\Hostinger\Model\BillingV1SubscriptionCancelRequest**](../Model/BillingV1SubscriptionCancelRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableAutoRenewalV1()`

```php
disableAutoRenewalV1($subscriptionId): \Hostinger\Model\BillingV1SubscriptionSubscriptionResource
```

Disable auto-renewal

Disable auto-renewal for a subscription.  Use this endpoint when disable auto-renewal for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingSubscriptionsApi(config: $config);
$subscriptionId = Cxy353Uhl1xC54pG6; // string | Subscription ID

try {
    $result = $apiInstance->disableAutoRenewalV1($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingSubscriptionsApi->disableAutoRenewalV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| Subscription ID | |

### Return type

[**\Hostinger\Model\BillingV1SubscriptionSubscriptionResource**](../Model/BillingV1SubscriptionSubscriptionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableAutoRenewalV1()`

```php
enableAutoRenewalV1($subscriptionId): \Hostinger\Model\BillingV1SubscriptionSubscriptionResource
```

Enable auto-renewal

Enable auto-renewal for a subscription.  Use this endpoint when enable auto-renewal for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingSubscriptionsApi(config: $config);
$subscriptionId = Cxy353Uhl1xC54pG6; // string | Subscription ID

try {
    $result = $apiInstance->enableAutoRenewalV1($subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingSubscriptionsApi->enableAutoRenewalV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscriptionId** | **string**| Subscription ID | |

### Return type

[**\Hostinger\Model\BillingV1SubscriptionSubscriptionResource**](../Model/BillingV1SubscriptionSubscriptionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionListV1()`

```php
getSubscriptionListV1(): \Hostinger\Model\BillingV1SubscriptionSubscriptionResource[]
```

Get subscription list

Retrieve a list of all subscriptions associated with your account.  Use this endpoint to monitor active services and billing status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\BillingSubscriptionsApi(config: $config);

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
