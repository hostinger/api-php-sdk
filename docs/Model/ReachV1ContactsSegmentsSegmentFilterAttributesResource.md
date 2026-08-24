# # ReachV1ContactsSegmentsSegmentFilterAttributesResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**array<string,\Hostinger\Model\ReachV1ContactsSegmentsSegmentFilterAttributeResource>**](ReachV1ContactsSegmentsSegmentFilterAttributeResource.md) | Every attribute a condition can filter on, keyed by the value to send as &#x60;attribute&#x60;. Custom contact fields are keyed &#x60;cf:{fieldUuid}&#x60;, tags and campaigns by their uuid, so the keys are not a fixed list and should be read from this response rather than hardcoded. |
**logicOperators** | **array<string,string>** | The values accepted by &#x60;logic&#x60; when a segment combines several conditions. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
