# # WordPressV1InstallationsJwtTokenResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Signed JWT used to authenticate requests against the WordPress installation |
**expiresIn** | **int** | Token lifetime in seconds from the moment it was issued |
**expiresAt** | **\DateTime** | Date-time at which the token expires, or null when not provided |
**mcpUrl** | **string** | MCP (Model Context Protocol) endpoint URL for the WordPress installation, or null when not provided |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
