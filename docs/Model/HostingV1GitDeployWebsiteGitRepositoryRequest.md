# # HostingV1GitDeployWebsiteGitRepositoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**repositoryUrl** | **string** | Clone URL of the repository on any Git host, SSH or HTTPS. Private repositories need an SSH URL and the account&#39;s Git SSH key added to the repository as a deploy key. An HTTP or HTTPS URL with a username or token, or any URL with a password, is rejected. |
**branch** | **string** | Branch to clone and pull |
**directory** | **string** | Directory under the website document root, exactly as &#x60;List website Git repositories&#x60; returns it for an existing repository. Empty, null or omitted means the document root. | [default to '']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
