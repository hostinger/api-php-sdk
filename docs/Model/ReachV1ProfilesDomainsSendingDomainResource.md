# # ReachV1ProfilesDomainsSendingDomainResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Domain campaigns are sent from. It may be a subdomain of the domain that was connected, so it will not always match the website domain. |
**status** | **string** | Campaigns can only be sent while the domain is &#x60;active&#x60;. |
**createdAt** | **\DateTime** | When the domain was connected to the profile. |
**updatedAt** | **\DateTime** | When the domain or its verification state last changed. |
**suspendedSenderEmails** | [**\Hostinger\Model\ReachV1ProfilesDomainsSuspendedSenderEmailResource[]**](ReachV1ProfilesDomainsSuspendedSenderEmailResource.md) | Sender addresses on this domain that have been suspended. A campaign using one of them will not go out even while the domain itself is active. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
