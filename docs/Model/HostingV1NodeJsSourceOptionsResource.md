# # HostingV1NodeJsSourceOptionsResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archivePath** | **string** | Present if sourceType is \&quot;archive\&quot; |
**owner** | **string** | Repository owner login (present if source_type is \&quot;git\&quot;) |
**repository** | **string** | Repository name without the .git suffix (present if source_type is \&quot;git\&quot;) |
**branch** | **string** | Branch that was built (present if source_type is \&quot;git\&quot;) |
**installationUuid** | **string** | Git installation used to access the repository (present if source_type is \&quot;git\&quot;) |
**commit** | [**\Hostinger\Model\HostingV1GitGitCommitResource**](HostingV1GitGitCommitResource.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
