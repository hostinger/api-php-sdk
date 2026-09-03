# # ReachV1CampaignsStoreRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**senderName** | **string** | From name shown to the recipients. |
**senderEmail** | **string** | From address of the campaign. Its domain has to be verified on the profile before the campaign can be sent. |
**title** | **string** | Name the campaign is listed under. Not shown to the recipients. |
**subject** | **string** | Subject line of the email. |
**templateUuid** | **string** | Template to send, as returned by the template endpoints. Can be left out and attached later, but the campaign cannot be sent without one. |
**metadata** | [**\Hostinger\Model\ReachV1CampaignsStoreRequestMetadata**](ReachV1CampaignsStoreRequestMetadata.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
