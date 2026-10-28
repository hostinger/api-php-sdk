# Hostinger\ReachIntegrationsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**connectAIWebsiteBuilderSiteV1()**](ReachIntegrationsApi.md#connectAIWebsiteBuilderSiteV1) | **POST** /api/reach/v1/profiles/{profileUuid}/websites/website-builder | Connect AI Website Builder site |
| [**connectEcommerceStoreV1()**](ReachIntegrationsApi.md#connectEcommerceStoreV1) | **POST** /api/reach/v1/profiles/{profileUuid}/ecommerce/stores/{storeId} | Connect Ecommerce store |
| [**disconnectAIWebsiteBuilderSiteV1()**](ReachIntegrationsApi.md#disconnectAIWebsiteBuilderSiteV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/websites/website-builder | Disconnect AI Website Builder site |
| [**disconnectEcommerceStoreV1()**](ReachIntegrationsApi.md#disconnectEcommerceStoreV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/ecommerce/stores/{storeId} | Disconnect Ecommerce store |
| [**disconnectWordPressSiteV1()**](ReachIntegrationsApi.md#disconnectWordPressSiteV1) | **DELETE** /api/reach/v1/profiles/{profileUuid}/websites/wordpress | Disconnect WordPress site |
| [**listConnectedWebsitesV1()**](ReachIntegrationsApi.md#listConnectedWebsitesV1) | **GET** /api/reach/v1/profiles/{profileUuid}/websites | List connected websites |
| [**listEcommerceStoresV1()**](ReachIntegrationsApi.md#listEcommerceStoresV1) | **GET** /api/reach/v1/profiles/{profileUuid}/ecommerce/stores | List Ecommerce stores |


## `connectAIWebsiteBuilderSiteV1()`

```php
connectAIWebsiteBuilderSiteV1($profileUuid, $reachV1WebsitesWebsiteBuilderConnectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Connect AI Website Builder site

Connect an AI Website Builder site the customer built manually to the profile, so its subscribers flow into Reach.  Fails with not found when the customer owns no AI Website Builder site with that domain. Fails with `DOMAIN_ALREADY_EXISTS` when the domain is connected to any profile - to move a site to another plan, disconnect it from the old profile first - and with `WEBSITE_CONNECTION_ALREADY_EXISTS` when this profile already has an AI Website Builder site. The eCommerce store selling on the site, if it is not connected anywhere, is connected too. WordPress sites and sites made with the agentic AI Website Builder cannot be connected here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1WebsitesWebsiteBuilderConnectRequest = new \Hostinger\Model\ReachV1WebsitesWebsiteBuilderConnectRequest(); // \Hostinger\Model\ReachV1WebsitesWebsiteBuilderConnectRequest

try {
    $result = $apiInstance->connectAIWebsiteBuilderSiteV1($profileUuid, $reachV1WebsitesWebsiteBuilderConnectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->connectAIWebsiteBuilderSiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1WebsitesWebsiteBuilderConnectRequest** | [**\Hostinger\Model\ReachV1WebsitesWebsiteBuilderConnectRequest**](../Model/ReachV1WebsitesWebsiteBuilderConnectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectEcommerceStoreV1()`

```php
connectEcommerceStoreV1($profileUuid, $storeId): \Hostinger\Model\ReachV1StoresConnectionResource
```

Connect Ecommerce store

Connect one of the customer's eCommerce stores to the profile, so Reach receives its customers and orders.  Take `store_id` from the list eCommerce stores endpoint. Fails with not found (`ECOMMERCE_STORE_NOT_FOUND`) when the store is not one of the customer's own stores, also when the eCommerce service cannot be reached. Fails with a conflict (`ECOMMERCE_CONNECTION_ALREADY_EXISTS`) when the store is connected to any profile or this profile already has a store - to move a store to another plan, disconnect it from the profile that holds it first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$storeId = ec_123; // string | Hostinger eCommerce store ID, as returned by the eCommerce stores list

try {
    $result = $apiInstance->connectEcommerceStoreV1($profileUuid, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->connectEcommerceStoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **storeId** | **string**| Hostinger eCommerce store ID, as returned by the eCommerce stores list | |

### Return type

[**\Hostinger\Model\ReachV1StoresConnectionResource**](../Model/ReachV1StoresConnectionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectAIWebsiteBuilderSiteV1()`

```php
disconnectAIWebsiteBuilderSiteV1($profileUuid, $reachV1WebsitesWebsiteBuilderDisconnectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Disconnect AI Website Builder site

Disconnect an AI Website Builder site from the profile; the site stops sending subscribers to Reach.  Take `domain` from the list connected websites endpoint. Works for a site that was already deleted in the builder. Fails with not found when the domain is not connected to this profile. Contacts and any connected eCommerce store stay. The site stays disconnected until it is connected again, so confirm the site and the plan with the customer before calling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1WebsitesWebsiteBuilderDisconnectRequest = new \Hostinger\Model\ReachV1WebsitesWebsiteBuilderDisconnectRequest(); // \Hostinger\Model\ReachV1WebsitesWebsiteBuilderDisconnectRequest

try {
    $result = $apiInstance->disconnectAIWebsiteBuilderSiteV1($profileUuid, $reachV1WebsitesWebsiteBuilderDisconnectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->disconnectAIWebsiteBuilderSiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1WebsitesWebsiteBuilderDisconnectRequest** | [**\Hostinger\Model\ReachV1WebsitesWebsiteBuilderDisconnectRequest**](../Model/ReachV1WebsitesWebsiteBuilderDisconnectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectEcommerceStoreV1()`

```php
disconnectEcommerceStoreV1($profileUuid, $storeId): \Hostinger\Model\CommonSuccessEmptyResource
```

Disconnect Ecommerce store

Disconnect an eCommerce store from the profile.  Reach stops receiving the store's customers and orders, and its products and coupons are removed from Reach; contacts and past orders stay. Take `store_id` from the list eCommerce stores endpoint; for a store that is `connected_to_other_profile`, call this with that profile. Also succeeds when the store is not connected to this profile, so success is not proof that anything was disconnected. To move the store to another plan, connect it to the new profile afterwards. Confirm the store and the plan with the customer before calling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$storeId = ec_123; // string | Hostinger eCommerce store ID, as returned by the eCommerce stores list

try {
    $result = $apiInstance->disconnectEcommerceStoreV1($profileUuid, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->disconnectEcommerceStoreV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **storeId** | **string**| Hostinger eCommerce store ID, as returned by the eCommerce stores list | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectWordPressSiteV1()`

```php
disconnectWordPressSiteV1($profileUuid, $reachV1WebsitesWordPressDisconnectRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Disconnect WordPress site

Disconnect a WordPress site from the profile.  The Reach plugin on the site stops sending subscribers and store data, and the site's products and coupons are removed from Reach; contacts and past orders stay. Take `domain` from the list connected websites endpoint. Fails with not found when the domain is not connected to this profile. This cannot be undone through the API - the customer reconnects from the WordPress plugin - so confirm the site and the plan with the customer before calling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$reachV1WebsitesWordPressDisconnectRequest = new \Hostinger\Model\ReachV1WebsitesWordPressDisconnectRequest(); // \Hostinger\Model\ReachV1WebsitesWordPressDisconnectRequest

try {
    $result = $apiInstance->disconnectWordPressSiteV1($profileUuid, $reachV1WebsitesWordPressDisconnectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->disconnectWordPressSiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **reachV1WebsitesWordPressDisconnectRequest** | [**\Hostinger\Model\ReachV1WebsitesWordPressDisconnectRequest**](../Model/ReachV1WebsitesWordPressDisconnectRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnectedWebsitesV1()`

```php
listConnectedWebsitesV1($profileUuid): \Hostinger\Model\ReachV1WebsitesWebsiteResource[]
```

List connected websites

Get the websites connected to the profile, each with its `domain` and `platform_type`.  A domain is connected to at most one profile, so to find which plan a site is on, call this for each profile. Only connected sites are listed, not every website the customer owns, and eCommerce stores are not included - use the list eCommerce stores endpoint for those. Pass `domain` to the disconnect WordPress site or disconnect AI Website Builder site endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listConnectedWebsitesV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->listConnectedWebsitesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1WebsitesWebsiteResource[]**](../Model/ReachV1WebsitesWebsiteResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEcommerceStoresV1()`

```php
listEcommerceStoresV1($profileUuid): \Hostinger\Model\ReachV1StoresStoreResource[]
```

List Ecommerce stores

Get all of the customer's Hostinger eCommerce stores, each with its `store_id` and `connection_status` for the profile in the path.  A store is connected to at most one profile. `connected_to_other_profile` does not name that profile - call this for each profile to find it. The list is empty, not an error, when the eCommerce service cannot be reached. Pass `store_id` to the connect or disconnect eCommerce store endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachIntegrationsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter

try {
    $result = $apiInstance->listEcommerceStoresV1($profileUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachIntegrationsApi->listEcommerceStoresV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1StoresStoreResource[]**](../Model/ReachV1StoresStoreResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
