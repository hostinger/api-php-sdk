# Hostinger\AgencyHostingDomainsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeWebsiteDomainV1()**](AgencyHostingDomainsApi.md#changeWebsiteDomainV1) | **PUT** /api/agency-hosting/v1/websites/{website_uid}/domains/{from_domain} | Change website domain |
| [**linkDomainToWebsiteV1()**](AgencyHostingDomainsApi.md#linkDomainToWebsiteV1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/domains | Link domain to website |
| [**listDomainsV1()**](AgencyHostingDomainsApi.md#listDomainsV1) | **GET** /api/agency-hosting/v1/domains | List domains |
| [**unlinkDomainFromWebsiteV1()**](AgencyHostingDomainsApi.md#unlinkDomainFromWebsiteV1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain} | Unlink domain from website |


## `changeWebsiteDomainV1()`

```php
changeWebsiteDomainV1($websiteUid, $fromDomain, $agencyHostingV1DomainsChangeDomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Change website domain

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
    $result = $apiInstance->changeWebsiteDomainV1($websiteUid, $fromDomain, $agencyHostingV1DomainsChangeDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->changeWebsiteDomainV1: ', $e->getMessage(), PHP_EOL;
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

## `linkDomainToWebsiteV1()`

```php
linkDomainToWebsiteV1($websiteUid, $agencyHostingV1DomainsLinkDomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Link domain to website

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
    $result = $apiInstance->linkDomainToWebsiteV1($websiteUid, $agencyHostingV1DomainsLinkDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->linkDomainToWebsiteV1: ', $e->getMessage(), PHP_EOL;
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

## `listDomainsV1()`

```php
listDomainsV1($page, $perPage, $websiteUuids): \Hostinger\Model\AgencyHostingListDomainsV1200Response
```

List domains

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
    $result = $apiInstance->listDomainsV1($page, $perPage, $websiteUuids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->listDomainsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |
| **websiteUuids** | [**string[]**](../Model/string.md)| Filter by website UIDs | [optional] |

### Return type

[**\Hostinger\Model\AgencyHostingListDomainsV1200Response**](../Model/AgencyHostingListDomainsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlinkDomainFromWebsiteV1()`

```php
unlinkDomainFromWebsiteV1($websiteUid, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Unlink domain from website

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
    $result = $apiInstance->unlinkDomainFromWebsiteV1($websiteUid, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingDomainsApi->unlinkDomainFromWebsiteV1: ', $e->getMessage(), PHP_EOL;
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
