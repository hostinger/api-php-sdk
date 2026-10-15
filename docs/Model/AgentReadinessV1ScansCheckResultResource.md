# # AgentReadinessV1ScansCheckResultResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkId** | **string** | Check ID, as listed by the &#x60;List checks&#x60; operation |
**category** | **string** | Category the check belongs to |
**status** | **string** | Check outcome. &#x60;not_applicable&#x60; and &#x60;error&#x60; checks do not count towards the category score. |
**earned** | **int** | Points earned by this check |
**possible** | **int** | Points this check can earn |
**evidence** | **string** | What the scanner observed |
**fix** | **string** | How to improve the result, or null when there is nothing to fix |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
