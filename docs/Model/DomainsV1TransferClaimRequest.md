# # DomainsV1TransferClaimRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Domain name |
**authCode** | **string** | EPP code that authorizes this transfer, which the domain owner gets from the current registrar. Required only for TLDs whose transfers use one. |
**domainContacts** | [**\Hostinger\Model\DomainsV1PortfolioClaimRequestDomainContacts**](DomainsV1PortfolioClaimRequestDomainContacts.md) |  |
**shouldKeepNs** | **bool** | Keep the existing nameservers of the domain | [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
