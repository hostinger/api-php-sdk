# # HostingV1PocketBaseBackendCreatedResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instanceId** | **string** | PocketBase instance ID |
**domain** | **string** | Website domain that serves the PocketBase API |
**apiUrl** | **string** | Base URL of the PocketBase REST API |
**adminUrl** | **string** | URL of the PocketBase dashboard |
**superuserEmail** | **string** | Email of the superuser set up when the backend was created |
**superuserPassword** | **string** | Password of that superuser, generated when the request had none. Returned only here: Hostinger does not store it, so save it right away. |
**state** | **string** | Live process state. The instance sleeps when idle and wakes on the first request. Usually null right after creation. |
**version** | **string** | PocketBase version |
**nextSteps** | **string[]** | What to do next with this backend |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
