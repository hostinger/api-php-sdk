# # ReachV1CampaignsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Name the campaign is listed under. Not shown to the recipients. |
**subject** | **string** | Subject line of the email. |
**senderName** | **string** | From name shown to the recipients. |
**senderEmail** | **string** | From address of the campaign. Its domain has to be verified on the profile before the campaign can be sent. |
**templateUuid** | **string** | Template to send, as returned by the template endpoints. |
**allContacts** | **bool** | &#x60;true&#x60; targets every contact of the profile, &#x60;false&#x60; targets only &#x60;segment_uuids&#x60;. Required when &#x60;segment_uuids&#x60; or &#x60;excluded_segment_uuids&#x60; is sent. |
**segmentUuids** | **string[]** | Segments to target. Replaces the segments currently targeted. |
**excludedSegmentUuids** | **string[]** | Segments to leave out. Only allowed together with &#x60;all_contacts: true&#x60;. |
**metadata** | [**\Hostinger\Model\ReachV1CampaignsStoreRequestMetadata**](ReachV1CampaignsStoreRequestMetadata.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
