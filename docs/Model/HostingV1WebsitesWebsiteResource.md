# # HostingV1WebsitesWebsiteResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Website domain. Null for U4S websites with no domain attached. |
**vhostType** | **string** | Virtual host type. Only present for CloudLinux websites. |
**isEnabled** | **bool** | Whether website is enabled |
**username** | **string** | Username. Not applicable for U4S websites. |
**clientId** | **int** | Client ID |
**orderId** | **int** | Order ID |
**createdAt** | **\DateTime** | Creation date |
**rootDirectory** | **string** | Root directory path. Only present for CloudLinux websites. |
**parentDomain** | **string** | Parent domain |
**websiteType** | **string** | Type of website detected on the underlying platform. |
**horizonsUuid** | **string** | Horizons UUID. Only present for horizons websites. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
