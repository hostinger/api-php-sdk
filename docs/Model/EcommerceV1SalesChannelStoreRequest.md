# # EcommerceV1SalesChannelStoreRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Sales channel type. \&quot;custom\&quot; is a headless channel: it requires a name and takes an optional public url. \&quot;quick-link\&quot; is a one-page store whose handle is auto-generated; it supports neither name nor url. |
**name** | **string** | Merchant-facing custom name. Required for custom channels; not supported for quick-link. |
**url** | **string** | Optional public url for the channel. Custom channels only; not supported for quick-link. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
