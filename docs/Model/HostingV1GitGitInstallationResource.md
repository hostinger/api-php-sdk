# # HostingV1GitGitInstallationResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Installation identifier. Use it as the path parameter of List Git installation repositories. |
**provider** | **string** | Git provider the account belongs to |
**accountLogin** | **string** | Login of the connected provider account (user or organization) |
**accountType** | **string** | Whether the connected account is a user or an organization |
**accountAvatarUrl** | **string** | Avatar URL of the connected provider account |
**status** | **string** | Installation status. Only active installations are listed unless the status filter says otherwise. |
**installedAt** | **\DateTime** | When the provider app was installed on the account |
**createdAt** | **\DateTime** | When the installation record was created |
**hasOauth** | **bool** | True when the GitHub user account has a stored OAuth token whose refresh token is still valid, false when the token is missing or its refresh token expired. Null for organization accounts and for providers other than GitHub. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
