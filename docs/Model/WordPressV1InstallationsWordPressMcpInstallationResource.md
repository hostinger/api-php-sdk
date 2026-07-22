# # WordPressV1InstallationsWordPressMcpInstallationResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | WordPress installation (software) id |
**username** | **string** | Hosting account username |
**domain** | **string** | Domain the installation belongs to |
**directory** | **string** | Installation directory on the server |
**token** | **string** | JWT used to authenticate against the installation MCP server |
**mcpUrl** | **string** | MCP (Model Context Protocol) endpoint URL for the WordPress installation |
**expiresIn** | **int** | Token lifetime in seconds from the moment it was issued |
**expiresAt** | **\DateTime** | Date-time at which the token expires |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
