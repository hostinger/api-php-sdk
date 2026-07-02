# # WordPressV1InstallationsInstallWordPressRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Domain of the existing website where WordPress will be installed |
**siteTitle** | **string** | Title of the WordPress site |
**language** | **string** | WordPress locale. Defaults to en_US when omitted. |
**directory** | **string** | Relative directory to install WordPress into. Defaults to the website root when omitted. |
**overwrite** | **bool** | When false (default), does not replace an existing installation. If WordPress is already installed on the domain/path, the async install job fails unless true. |
**autoUpdates** | **string** | WordPress core auto-update policy |
**version** | **string** | WordPress core version to install. If omitted, the latest core version compatible with the account vhost PHP version is selected. |
**credentials** | [**\Hostinger\Model\WordPressV1InstallationsInstallWordPressRequestCredentials**](WordPressV1InstallationsInstallWordPressRequestCredentials.md) |  |
**database** | [**\Hostinger\Model\WordPressV1InstallationsInstallWordPressRequestDatabase**](WordPressV1InstallationsInstallWordPressRequestDatabase.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
