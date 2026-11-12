# # HostingV1PocketBaseInstanceResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instanceId** | **string** | PocketBase instance ID |
**domain** | **string** | Website domain that serves the PocketBase API |
**apiUrl** | **string** | Base URL of the PocketBase REST API |
**adminUrl** | **string** | URL of the PocketBase dashboard |
**state** | **string** | Live process state. The instance sleeps when idle and wakes on the first request. Null when the server could not be reached. |
**version** | **string** | PocketBase version |
**diskUsageKb** | **int** | Disk space used by the instance data, in KB |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
