# # ReachV1AutomationsStepsAutomationStepResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** |  |
**parentUuid** | **string** | The step this one branches from. Null for the entry point of the workflow. |
**stepOrder** | **int** | Position of this step among the steps sharing its parent. |
**type** | **string** | Role of the step in the workflow. A &#x60;conditional&#x60; step branches into several children. |
**value** | **string** | The concrete trigger, action, decision or delay this step performs. |
**config** | **object** | Step configuration. The shape depends on the value, and is empty for steps that take none. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
