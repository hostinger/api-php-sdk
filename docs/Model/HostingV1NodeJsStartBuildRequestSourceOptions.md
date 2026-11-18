# # HostingV1NodeJsStartBuildRequestSourceOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archivePath** | **string** | The path to the archive file relative to the document root of the vhost (required if source is \&quot;archive\&quot;) |
**message** | **string** | Short summary of what this deployment changes, shown in the website&#39;s deployment history the way a commit message is for git deployments. Without it the history only shows the archive file name, so always send one: keep the first line under 72 characters and describe the change, not the upload. Only used if source is \&quot;archive\&quot;. |
**owner** | **string** | Repository owner login (required if source is \&quot;git\&quot;). GitLab group paths use slashes. |
**repository** | **string** | Repository name without the .git suffix (required if source is \&quot;git\&quot;) |
**branch** | **string** | Branch to build (required if source is \&quot;git\&quot;) |
**installationUuid** | **string** | Git installation used to access the repository (required if source is \&quot;git\&quot;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
