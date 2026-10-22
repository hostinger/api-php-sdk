# # HostingV1NodeJsGetBuildSettingsFromRepositoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**owner** | **string** | Repository owner login, as returned by &#x60;List Git installation repositories&#x60;. GitLab group paths use slashes. |
**repository** | **string** | Repository name without the .git suffix |
**branch** | **string** | Branch whose package.json is inspected |
**installationUuid** | **string** | Git installation used to access the repository, taken from &#x60;List Git installations&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
