# # AgentReadinessV1ScansScanResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Domain name that was scanned |
**status** | **string** | Scan status. Result fields are null until the status is &#x60;completed&#x60;. |
**score** | **int** | Agent readiness score from 0 to 100. Null unless completed, and null when unreachable. |
**grade** | **string** | Letter grade for the score, from &#x60;A&#x60; to &#x60;F&#x60;. Null unless completed, and null when unreachable. |
**isUnreachable** | **bool** | Whether the website homepage could not be fetched |
**scannerVersion** | **int** | Version of the scoring method that produced this scan |
**isOutdated** | **bool** | Whether the scan was produced by an older scoring method than the current one |
**scannedAt** | **\DateTime** | When the scan finished. Null unless completed. |
**categories** | [**\Hostinger\Model\AgentReadinessV1ScansCategoriesResource**](AgentReadinessV1ScansCategoriesResource.md) |  |
**unassessedCategories** | **string[]** | Categories where no check could be counted. They still cost their full weight. Null unless completed. |
**results** | [**\Hostinger\Model\AgentReadinessV1ScansCheckResultResource[]**](AgentReadinessV1ScansCheckResultResource.md) | Result of every check. Null unless completed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
