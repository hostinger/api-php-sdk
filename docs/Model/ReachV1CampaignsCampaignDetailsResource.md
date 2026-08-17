# # ReachV1CampaignsCampaignDetailsResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  |
**title** | **string** |  |
**subject** | **string** |  |
**senderName** | **string** |  |
**senderEmail** | **string** |  |
**templateUuid** | **string** | The email template this campaign uses. The template title is not exposed. |
**status** | **string** | A fully sent campaign is &#x60;publish&#x60;. There is no &#x60;sent&#x60;, &#x60;paused&#x60; or &#x60;archived&#x60; status. |
**type** | **string** |  |
**failureReason** | **string** | Set only while the status is &#x60;failed&#x60;. |
**isSmartSend** | **bool** | Whether delivery time is picked per contact rather than sent to everyone at once. |
**isAllContacts** | **bool** | Whether the campaign targets every contact instead of the listed segments. |
**delivery** | [**\Hostinger\Model\ReachV1CampaignsCampaignDeliveryResource**](ReachV1CampaignsCampaignDeliveryResource.md) |  |
**segmentUuids** | **string[]** | Segments this campaign targets. Empty when it targets all contacts. |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |
**sentAt** | **\DateTime** |  |
**scheduledAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
