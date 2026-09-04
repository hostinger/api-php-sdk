# # HostingV1NodeJsUpdateBuildSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodeVersion** | **int** | Node.js major version |
**appType** | **string** | Node.js application framework. Set it explicitly when auto-detection picked the wrong one. |
**rootDirectory** | **string** | Application root directory (where package.json is located) relative to public_html. Omit it, or send \&quot;.\&quot;, for public_html itself. |
**outputDirectory** | **string** | Build output directory relative to the root directory |
**buildScript** | **string** | The package.json script that builds the application |
**entryFile** | **string** | The main entry point file for the application (required for express, fastify, nest, nuxt and hono app types) |
**packageManager** | **string** | Package manager used to install dependencies |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
