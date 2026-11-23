# # HorizonsV1WebsitesBuildTaskResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The build task ID, used with the &#x60;Get website build task&#x60; tool |
**state** | **string** | The build state. &#x60;TASK_STATE_SUBMITTED&#x60; and &#x60;TASK_STATE_WORKING&#x60; mean the build is still running. &#x60;TASK_STATE_COMPLETED&#x60; means it finished. &#x60;TASK_STATE_FAILED&#x60; means it broke, and &#x60;TASK_STATE_REJECTED&#x60; means it never started: the website does not contain the requested changes. &#x60;TASK_STATE_CANCELED&#x60; means the user stopped it; changes made before that may be kept. |
**updatedAt** | **\DateTime** | When the build last changed state |
**reasonCode** | **string** | Why the build stopped, or null. &#x60;insufficient_credits&#x60;: the user has no credits left; &#x60;execution_error&#x60; or &#x60;missing_result&#x60;: the build broke; &#x60;iteration_limit&#x60;: the build stopped early and kept the work done so far. |
**message** | **string** | Guidance to tell the user about the build outcome, or null |
**summary** | **string** | An internal changelog entry describing what the build changed, or null until the build ends. Rewrite it in plain language before showing it to the user. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
