# # HostingV1DatabasesDatabaseResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Database name. |
**user** | **string** | Database user. |
**domain** | **string** | Domain assigned to the database, or null when the database is unassigned. |
**permissions** | **object** | Database user permissions keyed by permission name. |
**createdAt** | **\DateTime** | Database creation date in ISO 8601 format. |
**updatedAt** | **\DateTime** | Database last update date in ISO 8601 format. |
**diskUsageMb** | **int** | Current database disk usage in megabytes. |
**maxSizeMb** | **int** | Maximum allowed database size in megabytes. |
**host** | **string** | MySQL hostname for remote connections. Same value as hPanel Remote MySQL. Identical for every database on this account. Not the database user grant host. |
**port** | **int** | MySQL port for remote connections. Always 3306. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
