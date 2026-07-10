# Hostinger\AgencyHostingWebsiteSetupsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAgencyPlanWebsiteSetupStatusV1()**](AgencyHostingWebsiteSetupsApi.md#getAgencyPlanWebsiteSetupStatusV1) | **GET** /api/agency-hosting/v1/orders/{order_id}/websites/setups/{setup_uuid} | Get Agency Plan website setup status |
| [**provisionANewAgencyPlanWebsiteV1()**](AgencyHostingWebsiteSetupsApi.md#provisionANewAgencyPlanWebsiteV1) | **POST** /api/agency-hosting/v1/orders/{order_id}/websites/setups | Provision a new Agency Plan website |


## `getAgencyPlanWebsiteSetupStatusV1()`

```php
getAgencyPlanWebsiteSetupStatusV1($orderId, $setupUuid): \Hostinger\Model\AgencyHostingV1SetupsWebsiteSetupStatusResource
```

Get Agency Plan website setup status

Returns the current status of an Agency Plan website setup started via the setups endpoint.  Poll this endpoint using the `setup_uuid` returned from the provisioning request until `status` becomes `completed`, at which point `website_uid` identifies the new website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsiteSetupsApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID
$setupUuid = 0193b6d4-fabb-70e0-8ea4-cfe060a45898; // string | Website setup UUID

try {
    $result = $apiInstance->getAgencyPlanWebsiteSetupStatusV1($orderId, $setupUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsiteSetupsApi->getAgencyPlanWebsiteSetupStatusV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |
| **setupUuid** | **string**| Website setup UUID | |

### Return type

[**\Hostinger\Model\AgencyHostingV1SetupsWebsiteSetupStatusResource**](../Model/AgencyHostingV1SetupsWebsiteSetupStatusResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provisionANewAgencyPlanWebsiteV1()`

```php
provisionANewAgencyPlanWebsiteV1($orderId, $agencyHostingV1SetupsCreateSetupRequest): \Hostinger\Model\AgencyHostingV1SetupsWebsiteSetupResource
```

Provision a new Agency Plan website

Provisions a new website on one of your Agency Plan hosting orders.  Choose the datacenter, stack (`flavor`), and PHP version for the site. Optionally attach your own `domain` — omit it, set it to `null`, or leave it unavailable and a free `*.hostingersite.com` subdomain is generated instead — and/or install WordPress by supplying the `wordpress` details (admin account, site title, and language).  Common setups: - **Plain PHP site**: `flavor` set to `php-fpm`, with `settings.php.version`; omit   `wordpress` and `type`. - **WordPress site**: `flavor` set to the desired WordPress version (e.g. `wp-7.0`), plus   the `wordpress` block (admin account, title, language). - **Static/Node.js frontend app**: `flavor` set to `php-fpm` and `type` set to   `node-static`.  Provisioning runs in the background, so the response returns immediately with a setup UUID that identifies the job. The new website becomes reachable once provisioning finishes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingWebsiteSetupsApi(config: $config);
$orderId = 123456; // int | Agency Plan order ID
$agencyHostingV1SetupsCreateSetupRequest = new \Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequest(); // \Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequest

try {
    $result = $apiInstance->provisionANewAgencyPlanWebsiteV1($orderId, $agencyHostingV1SetupsCreateSetupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingWebsiteSetupsApi->provisionANewAgencyPlanWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| Agency Plan order ID | |
| **agencyHostingV1SetupsCreateSetupRequest** | [**\Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequest**](../Model/AgencyHostingV1SetupsCreateSetupRequest.md)|  | |

### Return type

[**\Hostinger\Model\AgencyHostingV1SetupsWebsiteSetupResource**](../Model/AgencyHostingV1SetupsWebsiteSetupResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
