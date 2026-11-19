# # DNSV1PropagationVantagePointResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | Country code of the resolver |
**provider** | **string** | Resolver provider |
**ip** | **string** | IP address of the resolver |
**location** | **string** | Location of the resolver |
**latitude** | **float** |  |
**longitude** | **float** |  |
**records** | **string[]** | Records the resolver returned; null when it returned none or could not be queried |
**isPropagated** | **bool** | Whether this location returns the same records as the authoritative nameservers. For GeoDNS domains, whose nameservers answer differently by region, true means the location returned a record. A records served from the Hostinger CDN count as propagated when the location also returns CDN addresses. True when every responding authoritative nameserver returns no records. Null when the location could not be queried or no authoritative answer could be compared. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
