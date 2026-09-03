# # ReachV1CampaignsCreatedCampaignResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  |
**title** | **string** |  |
**subject** | **string** |  |
**senderName** | **string** |  |
**senderEmail** | **string** |  |
**templateUuid** | **string** |  |
**status** | **string** | Always &#x60;draft&#x60; for a campaign that was just created. |
**type** | **string** |  |
**isAllContacts** | **bool** | Whether the campaign targets every contact instead of selected segments. |
**metadata** | **array<string,string>** | The stored extra fields, including the ones Reach sets itself. |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
