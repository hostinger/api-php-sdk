# # HostingV1NodeJsStoredBuildSettingsResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodeVersion** | **int** | Node.js major version used to build and run the application |
**appType** | **string** | Detected or chosen application framework |
**rootDirectory** | **string** | Application root directory (where package.json is located) relative to public_html; null means public_html itself |
**outputDirectory** | **string** | Build output directory relative to the root directory |
**buildScript** | **string** | The package.json script that builds the application |
**entryFile** | **string** | The main entry point file for the application |
**packageManager** | **string** | Package manager used to install dependencies |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
