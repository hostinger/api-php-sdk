# # ReachV1CampaignsCampaignStatisticsResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalSent** | **int** | Emails sent for this campaign, and the denominator of every rate below. |
**estimatedTotalRecipients** | **int** | Recipients this campaign was estimated to reach when sending started. Null for campaigns that have not started sending. |
**processedCount** | **int** |  |
**deliveredCount** | **int** |  |
**droppedCount** | **int** |  |
**bouncedCount** | **int** |  |
**softBouncedCount** | **int** |  |
**openedCount** | **int** | Contacts who opened this campaign. |
**clickedCount** | **int** | Contacts who clicked a link. Only clicks from contacts who also registered an open count. |
**unsubscribedCount** | **int** | Contacts who unsubscribed through this campaign. |
**openRate** | **float** | Percentage of sent emails that were opened. |
**clickRate** | **float** | Percentage of sent emails that got a click. |
**clickToOpenRate** | **float** | Percentage of the contacts who opened that went on to click. |
**unsubscribeRate** | **float** | Percentage of sent emails that led to an unsubscribe. |
**hasBouncedContacts** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
