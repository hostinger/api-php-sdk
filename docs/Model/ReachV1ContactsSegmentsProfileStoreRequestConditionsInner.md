# # ReachV1ContactsSegmentsProfileStoreRequestConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute** | **string** | A built-in contact attribute, or &#x60;cf:{fieldUuid}&#x60; to target a custom contact field. Custom fields are addressed by field UUID; their slug is not accepted.  Built-in attributes: &#x60;email&#x60;, &#x60;note&#x60;, &#x60;domain&#x60;, &#x60;source&#x60;, &#x60;opt_in_method&#x60;, &#x60;subscription_status&#x60;, &#x60;subscribed_at&#x60;, &#x60;unsubscribed_at&#x60;, &#x60;created_at&#x60;, &#x60;tag&#x60;, &#x60;campaigns&#x60;, &#x60;processed&#x60;, &#x60;opened&#x60;, &#x60;clicked&#x60;, &#x60;delivered&#x60;, &#x60;bounced&#x60;, &#x60;soft_bounced&#x60;, &#x60;dropped&#x60;.  Which operators are accepted depends on the attribute. |
**operator** | **string** |  |
**value** | **string** | Always a string, including for numeric and date comparisons |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
