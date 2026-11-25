# Hostinger\DNSPropagationApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkDNSRecordPropagationV1()**](DNSPropagationApi.md#checkDNSRecordPropagationV1) | **GET** /api/dns/v1/propagation/{domain}/{type} | Check DNS record propagation |


## `checkDNSRecordPropagationV1()`

```php
checkDNSRecordPropagationV1($domain, $type): \Hostinger\Model\DNSV1PropagationPropagationReportResource
```

Check DNS record propagation

Check whether a DNS record of a domain or host name has propagated to public resolvers around the world.  `authoritative` shows what the domain's authoritative nameservers serve now. It is the best signal of the current record value. Its TTL tells how long resolvers may keep serving the old value.  `vantage_points` shows what public resolvers at different locations return. `is_propagated` is true when the location returns the same records as the authoritative nameservers. For GeoDNS domains, whose nameservers answer differently by region, true means the location returned a record. A records served from the Hostinger CDN count as propagated. When every responding authoritative nameserver returns no records, `is_propagated` is true.  Works for any domain or host name, either a domain or a subdomain. Read-only: it changes nothing.  A 404 response with error code 2025 can also mean the check could not be completed, for example when the DNS checker is busy or timed out. It is safe to retry after a short delay.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DNSPropagationApi(config: $config);
$domain = www.mydomain.tld; // string | Domain or host name to check, either a domain or a subdomain
$type = A; // string | DNS record type to check, uppercase. One of: A, AAAA, CAA, CNAME, DNAME, DNSKEY, HTTPS, LOC, MX, NS, PTR, SOA, SRV, SSHFP, SVCB, TLSA, TXT, URI. PTR takes the reverse name, e.g. 10.2.0.192.in-addr.arpa, not the IP address. SOA exists only at a zone's apex. DS and ALIAS cannot be checked.

try {
    $result = $apiInstance->checkDNSRecordPropagationV1($domain, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSPropagationApi->checkDNSRecordPropagationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain or host name to check, either a domain or a subdomain | |
| **type** | **string**| DNS record type to check, uppercase. One of: A, AAAA, CAA, CNAME, DNAME, DNSKEY, HTTPS, LOC, MX, NS, PTR, SOA, SRV, SSHFP, SVCB, TLSA, TXT, URI. PTR takes the reverse name, e.g. 10.2.0.192.in-addr.arpa, not the IP address. SOA exists only at a zone&#39;s apex. DS and ALIAS cannot be checked. | |

### Return type

[**\Hostinger\Model\DNSV1PropagationPropagationReportResource**](../Model/DNSV1PropagationPropagationReportResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
