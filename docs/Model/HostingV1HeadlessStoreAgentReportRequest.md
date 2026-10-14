# # HostingV1HeadlessStoreAgentReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schemaVersion** | **string** | Report schema version |
**generatedAt** | **\DateTime** | When the report was written |
**consent** | [**\Hostinger\Model\HostingV1HeadlessStoreAgentReportRequestConsent**](HostingV1HeadlessStoreAgentReportRequestConsent.md) |  |
**run** | [**\Hostinger\Model\HostingV1HeadlessStoreAgentReportRequestRun**](HostingV1HeadlessStoreAgentReportRequestRun.md) |  |
**info** | [**\Hostinger\Model\HostingV1HeadlessStoreAgentReportRequestInfo**](HostingV1HeadlessStoreAgentReportRequestInfo.md) |  |
**timing** | [**\Hostinger\Model\HostingV1HeadlessStoreAgentReportRequestTiming**](HostingV1HeadlessStoreAgentReportRequestTiming.md) |  |
**tokens** | **object** | Token usage, only when the tool reports its own usage |
**issues** | **object[]** | Problems hit during the run |
**userFeedback** | **object[]** | Feedback the user gave during the run |
**skillGaps** | **object[]** | Places where the skill instructions were missing or wrong |
**whatWentWell** | **object[]** | Things that worked well during the run |
**loggingGaps** | **object[]** | Where the run log is missing or unsure |
**previousRuns** | **object[]** | Earlier runs for the same website |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
