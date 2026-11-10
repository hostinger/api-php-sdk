# # DomainsV1WHOISStoreRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tld** | **string** | TLD of the domain (without leading dot) |
**country** | **string** | ISO 3166 2-letter country code |
**entityType** | **string** | Legal entity type |
**tldDetails** | **object** | TLD-specific details. The required keys depend on the TLD, country and entity type. |
**whoisDetails** | **object** | WHOIS contact details. The required keys depend on the TLD, country and entity type, and can be country-specific (e.g. &#x60;state_lt&#x60; and &#x60;zip_lt&#x60; instead of &#x60;state&#x60; and &#x60;zip&#x60; for Lithuania). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
