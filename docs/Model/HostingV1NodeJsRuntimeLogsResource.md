# # HostingV1NodeJsRuntimeLogsResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**logs** | [**\Hostinger\Model\HostingV1NodeJsLogEntryResource[]**](HostingV1NodeJsLogEntryResource.md) | Array of [&#x60;Hosting.V1.NodeJs.LogEntryResource&#x60;](#model/hostingv1nodejslogentryresource) |
**startedAt** | **\DateTime** | Timestamp of the first line of the log file; null when the file is empty or its first line has no timestamp field |
**totalLines** | **int** | Total number of lines in the raw log file. Send total_lines + 1 as from_line in the next poll to receive only new entries. |
**lastDeployedAt** | **\DateTime** | Time of the last completed build; entries before it belong to the previous deployment. null when no build has completed yet. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
