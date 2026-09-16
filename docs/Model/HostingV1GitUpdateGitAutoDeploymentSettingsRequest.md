# # HostingV1GitUpdateGitAutoDeploymentSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installationUuid** | **string** | Active Git installation from &#x60;List Git installations&#x60; |
**owner** | **string** | Repository owner login, as returned by &#x60;List Git installation repositories&#x60;. GitLab group paths use slashes. |
**repository** | **string** | Repository name without the .git suffix |
**branch** | **string** | Branch to deploy |
**directory** | **string** | Subdirectory under the website document root to deploy into. Empty, null or omitted means the document root. | [default to '']
**isEnabled** | **bool** | Whether pushes to the branch deploy automatically | [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
