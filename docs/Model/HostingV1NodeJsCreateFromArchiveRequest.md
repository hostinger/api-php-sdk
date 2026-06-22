# # HostingV1NodeJsCreateFromArchiveRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archive** | **string** | Project archive file (.zip, .tar.gz, or .tgz), maximum 50MB |
**nodeVersion** | **int** | Node.js version override (auto-detected from package.json if omitted) |
**appType** | **string** | Node.js application type override |
**rootDirectory** | **string** | Application root directory override (where package.json is located) relative to public_html |
**outputDirectory** | **string** | Build output directory override relative to the root directory |
**buildScript** | **string** | Build script override |
**entryFile** | **string** | Main entry point file override |
**packageManager** | **string** | Package manager override |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
