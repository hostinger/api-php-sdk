# Hostinger\AgencyHostingDomainsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeAgencyPlanWebsiteDomainV1()**](AgencyHostingDomainsApi.md#changeAgencyPlanWebsiteDomainV1) | **PUT** /api/agency-hosting/v1/websites/{website_uid}/domains/{from_domain} | Change Agency Plan website domain |
| [**linkDomainToAgencyPlanWebsiteV1()**](AgencyHostingDomainsApi.md#linkDomainToAgencyPlanWebsiteV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/domains | Link domain to Agency Plan website |
| [**listAgencyPlanDomainsV1()**](AgencyHostingDomainsApi.md#listAgencyPlanDomainsV1) | **GET** /api/agency-hosting/v1/domains | List Agency Plan domains |
| [**unlinkDomainFromAgencyPlanWebsiteV1()**](AgencyHostingDomainsApi.md#unlinkDomainFromAgencyPlanWebsiteV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain} | Unlink domain from Agency Plan website |


## `changeAgencyPlanWebsiteDomainV1()`

```php
changeAgencyPlanWebsiteDomainV1($websiteUid, $fromDomain, $agencyHostingV1DomainsChangeDomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change Agency Plan website domain

Changes the primary domain for an Agency Plan website.  Provide the current domain in the path and the new domain in the request body. Set domain to null to revert to the temporary domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDomainsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$fromDomain = old.example.com; // string | Current domain name to change from
$agencyHostingV1DomainsChangeDomainRequest = new \Hostinger\Model\AgencyHostingV1DomainsChangeDomainRequest(); // \Hostinger\Model\AgencyHostingV1DomainsChangeDomainRequest

try {
    $result = $apiInstance->changeAgencyPlanWebsiteDomainV1($websiteUid, $fromDomain, $agencyHostingV1DomainsChangeDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->changeAgencyPlanWebsiteDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **fromDomain** | **string**| Current domain name to change from | |
| **agencyHostingV1DomainsChangeDomainRequest** | [**\Hostinger\Model\AgencyHostingV1DomainsChangeDomainRequest**](../Model/AgencyHostingV1DomainsChangeDomainRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkDomainToAgencyPlanWebsiteV1()`

```php
linkDomainToAgencyPlanWebsiteV1($websiteUid, $agencyHostingV1DomainsLinkDomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Link domain to Agency Plan website

Links a domain to the specified Agency Plan website so it can serve traffic for that domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDomainsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$agencyHostingV1DomainsLinkDomainRequest = new \Hostinger\Model\AgencyHostingV1DomainsLinkDomainRequest(); // \Hostinger\Model\AgencyHostingV1DomainsLinkDomainRequest

try {
    $result = $apiInstance->linkDomainToAgencyPlanWebsiteV1($websiteUid, $agencyHostingV1DomainsLinkDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->linkDomainToAgencyPlanWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **agencyHostingV1DomainsLinkDomainRequest** | [**\Hostinger\Model\AgencyHostingV1DomainsLinkDomainRequest**](../Model/AgencyHostingV1DomainsLinkDomainRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgencyPlanDomainsV1()`

```php
listAgencyPlanDomainsV1($page, $perPage, $websiteUuids): \Hostinger\Model\AgencyHostingListAgencyPlanDomainsV1200Response
```

List Agency Plan domains

Returns a paginated list of domains associated with Agency Plan websites accessible to the authenticated client.  Use the website_uuids filter to narrow results to specific websites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDomainsApi(config: $config);
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page
$websiteUuids = ["zpwlGlp19"]; // string[] | Filter by website UIDs

try {
    $result = $apiInstance->listAgencyPlanDomainsV1($page, $perPage, $websiteUuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->listAgencyPlanDomainsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **websiteUuids** | [**string[]**](../Model/string.md)| Filter by website UIDs | [optional] |

### Return type

[**\Hostinger\Model\AgencyHostingListAgencyPlanDomainsV1200Response**](../Model/AgencyHostingListAgencyPlanDomainsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkDomainFromAgencyPlanWebsiteV1()`

```php
unlinkDomainFromAgencyPlanWebsiteV1($websiteUid, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Unlink domain from Agency Plan website

Unlinks a domain from the specified Agency Plan website.  The website stops serving traffic on this domain immediately.  Website files and database are preserved, and any other linked domains remain accessible.  If this is the only domain on the website, unlinking leaves the website without an accessible domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingDomainsApi(config: $config);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->unlinkDomainFromAgencyPlanWebsiteV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->unlinkDomainFromAgencyPlanWebsiteV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **websiteUid** | **string**| Agency Plan website UID | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
