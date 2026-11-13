# # HostingV1PocketBaseBackendResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instanceId** | **string** | PocketBase instance ID |
**domain** | **string** | Website domain that serves the PocketBase API |
**apiUrl** | **string** | Base URL of the PocketBase REST API |
**adminUrl** | **string** | URL of the PocketBase dashboard |
**state** | **string** | Live process state. The instance sleeps when idle and wakes on the first request. Null when the server could not be reached. |
**failureReason** | **string** | Why the last start did not succeed, set only while &#x60;state&#x60; is &#x60;failed&#x60;. &#x60;process_limit&#x60; means the hosting account has no free process slots, usually because its Node.js apps are running; &#x60;start_failed&#x60; is any other cause. |
**retryAfterSeconds** | **int** | Seconds until Hostinger tries to start the instance again, set only while &#x60;state&#x60; is &#x60;failed&#x60;. Null when the next try is due now. |
**version** | **string** | PocketBase version |
**nextSteps** | **string[]** | What to do next with this backend |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
