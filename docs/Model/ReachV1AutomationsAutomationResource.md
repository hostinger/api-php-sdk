# # ReachV1AutomationsAutomationResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  |
**name** | **string** |  |
**status** | **string** | There is no &#x60;completed&#x60; status. Use &#x60;events.completed&#x60; to see how many contacts finished. |
**type** | **string** | What kind of workflow this is. &#x60;custom&#x60; automations are the ones built from scratch. |
**config** | **object** | Trigger configuration of the automation. The shape depends on the type. |
**events** | [**\Hostinger\Model\ReachV1AutomationsAutomationEventsResource**](ReachV1AutomationsAutomationEventsResource.md) |  |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
