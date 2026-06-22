# Hostinger\HostingDomainsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteParkedDomainV1()**](HostingDomainsApi.md#createWebsiteParkedDomainV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains | Create website parked domain |
| [**createWebsiteSubdomainV1()**](HostingDomainsApi.md#createWebsiteSubdomainV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains | Create website subdomain |
| [**deleteWebsiteParkedDomainV1()**](HostingDomainsApi.md#deleteWebsiteParkedDomainV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains/{parkedDomain} | Delete website parked domain |
| [**deleteWebsiteSubdomainV1()**](HostingDomainsApi.md#deleteWebsiteSubdomainV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains/{subdomain} | Delete website subdomain |
| [**generateAFreeSubdomainV1()**](HostingDomainsApi.md#generateAFreeSubdomainV1) | **POST** /api/hosting/v1/domains/free-subdomains | Generate a free subdomain |
| [**listWebsiteParkedDomainsV1()**](HostingDomainsApi.md#listWebsiteParkedDomainsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains | List website parked domains |
| [**listWebsiteSubdomainsV1()**](HostingDomainsApi.md#listWebsiteSubdomainsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains | List website subdomains |
| [**verifyDomainOwnershipV1()**](HostingDomainsApi.md#verifyDomainOwnershipV1) | **POST** /api/hosting/v1/domains/verify-ownership | Verify domain ownership |


## `createWebsiteParkedDomainV1()`

```php
createWebsiteParkedDomainV1($username, $domain, $hostingV1DomainsCreateParkedDomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create website parked domain

Create a parked or alias domain for the selected website.  Provide a domain name or IP address to park on the website so it serves the same content as the parent domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1DomainsCreateParkedDomainRequest = new \Hostinger\Model\HostingV1DomainsCreateParkedDomainRequest(); // \Hostinger\Model\HostingV1DomainsCreateParkedDomainRequest

try {
    $result = $apiInstance->createWebsiteParkedDomainV1($username, $domain, $hostingV1DomainsCreateParkedDomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->createWebsiteParkedDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1DomainsCreateParkedDomainRequest** | [**\Hostinger\Model\HostingV1DomainsCreateParkedDomainRequest**](../Model/HostingV1DomainsCreateParkedDomainRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteSubdomainV1()`

```php
createWebsiteSubdomainV1($username, $domain, $hostingV1DomainsCreateSubdomainRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Create website subdomain

Create a new subdomain for the selected website.  Provide a subdomain prefix and, optionally, a custom directory or the website public directory to use as the subdomain root.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1DomainsCreateSubdomainRequest = new \Hostinger\Model\HostingV1DomainsCreateSubdomainRequest(); // \Hostinger\Model\HostingV1DomainsCreateSubdomainRequest

try {
    $result = $apiInstance->createWebsiteSubdomainV1($username, $domain, $hostingV1DomainsCreateSubdomainRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->createWebsiteSubdomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1DomainsCreateSubdomainRequest** | [**\Hostinger\Model\HostingV1DomainsCreateSubdomainRequest**](../Model/HostingV1DomainsCreateSubdomainRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteParkedDomainV1()`

```php
deleteWebsiteParkedDomainV1($username, $domain, $parkedDomain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website parked domain

Delete an existing parked or alias domain from the selected website.  Use this endpoint to remove parked domains that are no longer needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$parkedDomain = parked-domain.com; // string

try {
    $result = $apiInstance->deleteWebsiteParkedDomainV1($username, $domain, $parkedDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->deleteWebsiteParkedDomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **parkedDomain** | **string**|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteSubdomainV1()`

```php
deleteWebsiteSubdomainV1($username, $domain, $subdomain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete website subdomain

Delete an existing subdomain from the selected website.  Use this endpoint to remove subdomains that are no longer needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$subdomain = blog; // string

try {
    $result = $apiInstance->deleteWebsiteSubdomainV1($username, $domain, $subdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->deleteWebsiteSubdomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **subdomain** | **string**|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAFreeSubdomainV1()`

```php
generateAFreeSubdomainV1(): \Hostinger\Model\HostingV1DomainsFreeSubdomainResource
```

Generate a free subdomain

Generate a unique free subdomain that can be used for hosting services without purchasing custom domains. Free subdomains allow you to start using hosting services immediately and you can always connect a custom domain to your site later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);

try {
    $result = $apiInstance->generateAFreeSubdomainV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->generateAFreeSubdomainV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\HostingV1DomainsFreeSubdomainResource**](../Model/HostingV1DomainsFreeSubdomainResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteParkedDomainsV1()`

```php
listWebsiteParkedDomainsV1($username, $domain): \Hostinger\Model\HostingV1DomainsParkedDomainResource[]
```

List website parked domains

Retrieve all parked or alias domains created under the selected website.  Use this endpoint to inspect parked domain configuration for a specific website, including the parent domain and root directory assigned to each parked domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->listWebsiteParkedDomainsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->listWebsiteParkedDomainsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1DomainsParkedDomainResource[]**](../Model/HostingV1DomainsParkedDomainResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsiteSubdomainsV1()`

```php
listWebsiteSubdomainsV1($username, $domain): \Hostinger\Model\HostingV1DomainsSubdomainResource[]
```

List website subdomains

Retrieve all subdomains created under the selected website.  Use this endpoint to inspect subdomain configuration for a specific website, including the parent domain and root directory assigned to each subdomain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->listWebsiteSubdomainsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->listWebsiteSubdomainsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1DomainsSubdomainResource[]**](../Model/HostingV1DomainsSubdomainResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyDomainOwnershipV1()`

```php
verifyDomainOwnershipV1($hostingV1DomainsVerifyOwnershipRequest): \Hostinger\Model\HostingV1DomainsDomainAccessResource
```

Verify domain ownership

Verify ownership of a single domain and return the verification status.  Use this endpoint to check if a domain is accessible for you before using it for new websites. If the domain is accessible, the response will have `is_accessible: true`. If not, add the given TXT record to your domain's DNS records and try verifying again. Keep in mind that it may take up to 10 minutes for new TXT DNS records to propagate.  Skip this verification when using Hostinger's free subdomains (*.hostingersite.com).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingDomainsApi(config: $config);
$hostingV1DomainsVerifyOwnershipRequest = new \Hostinger\Model\HostingV1DomainsVerifyOwnershipRequest(); // \Hostinger\Model\HostingV1DomainsVerifyOwnershipRequest

try {
    $result = $apiInstance->verifyDomainOwnershipV1($hostingV1DomainsVerifyOwnershipRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingDomainsApi->verifyDomainOwnershipV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostingV1DomainsVerifyOwnershipRequest** | [**\Hostinger\Model\HostingV1DomainsVerifyOwnershipRequest**](../Model/HostingV1DomainsVerifyOwnershipRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1DomainsDomainAccessResource**](../Model/HostingV1DomainsDomainAccessResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
