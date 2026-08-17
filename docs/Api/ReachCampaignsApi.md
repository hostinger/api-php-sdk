# Hostinger\ReachCampaignsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaignDetailsV1()**](ReachCampaignsApi.md#getCampaignDetailsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/campaigns/{campaignUuid} | Get campaign details |
| [**getCampaignPerformanceV1()**](ReachCampaignsApi.md#getCampaignPerformanceV1) | **GET** /api/reach/v1/profiles/{profileUuid}/campaigns/{campaignUuid}/statistics | Get campaign performance |
| [**listCampaignsV1()**](ReachCampaignsApi.md#listCampaignsV1) | **GET** /api/reach/v1/profiles/{profileUuid}/campaigns | List campaigns |


## `getCampaignDetailsV1()`

```php
getCampaignDetailsV1($profileUuid, $campaignUuid): \Hostinger\Model\ReachV1CampaignsCampaignDetailsResource
```

Get campaign details

Get a single campaign with its sender, subject, template reference, targeting and delivery progress.  This describes how the campaign was set up and how far it has got. For opens, clicks and unsubscribes use the campaign statistics endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachCampaignsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$campaignUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Campaign uuid parameter

try {
    $result = $apiInstance->getCampaignDetailsV1($profileUuid, $campaignUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachCampaignsApi->getCampaignDetailsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **campaignUuid** | **string**| Campaign uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1CampaignsCampaignDetailsResource**](../Model/ReachV1CampaignsCampaignDetailsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignPerformanceV1()`

```php
getCampaignPerformanceV1($profileUuid, $campaignUuid): \Hostinger\Model\ReachV1CampaignsCampaignStatisticsResource
```

Get campaign performance

Get the performance of a campaign: delivery, opens, clicks and unsubscribes, with the matching rates.  Every count is unique contacts rather than raw events, so a contact who opens the same email five times is counted once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachCampaignsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$campaignUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Campaign uuid parameter

try {
    $result = $apiInstance->getCampaignPerformanceV1($profileUuid, $campaignUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachCampaignsApi->getCampaignPerformanceV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **campaignUuid** | **string**| Campaign uuid parameter | |

### Return type

[**\Hostinger\Model\ReachV1CampaignsCampaignStatisticsResource**](../Model/ReachV1CampaignsCampaignStatisticsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignsV1()`

```php
listCampaignsV1($profileUuid, $status, $type, $sortDirection, $page, $perPage): \Hostinger\Model\ReachListCampaignsV1200Response
```

List campaigns

Get a paginated list of the campaigns in a profile.  Each campaign carries its headline engagement rates. Filter by status to find drafts, scheduled, sending or sent campaigns, keeping in mind that a fully sent campaign has the status `publish`. By default only regular campaigns are returned - pass `type` to get the emails sent by automations or the double opt-in confirmations instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachCampaignsApi(config: $config);
$profileUuid = 550e8400-e09b-41d4-a716-400055000000; // string | Profile uuid parameter
$status = publish; // string | Filter campaigns by status.  A fully sent campaign has the status `publish`. There is no `sent` status, and campaigns can be neither paused nor archived.
$type = campaign; // string | Filter campaigns by type.  Defaults to `campaign`, which leaves out the emails sent by automations and the double opt-in confirmations.
$sortDirection = desc; // string | Order campaigns by creation date. Newest first unless set to `asc`.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listCampaignsV1($profileUuid, $status, $type, $sortDirection, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachCampaignsApi->listCampaignsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profileUuid** | **string**| Profile uuid parameter | |
| **status** | **string**| Filter campaigns by status.  A fully sent campaign has the status &#x60;publish&#x60;. There is no &#x60;sent&#x60; status, and campaigns can be neither paused nor archived. | [optional] |
| **type** | **string**| Filter campaigns by type.  Defaults to &#x60;campaign&#x60;, which leaves out the emails sent by automations and the double opt-in confirmations. | [optional] [default to &#39;campaign&#39;] |
| **sortDirection** | **string**| Order campaigns by creation date. Newest first unless set to &#x60;asc&#x60;. | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\ReachListCampaignsV1200Response**](../Model/ReachListCampaignsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
