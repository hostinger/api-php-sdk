# # EcommerceV1WebhookWebhookEndpointResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Webhook endpoint ID. |
**storeId** | **string** | Owning store ID. |
**url** | **string** | HTTPS receiver URL. |
**events** | **string[]** | Subscribed event types.  - &#x60;order.placed&#x60;: a customer places an order, before any online payment is completed. Orders paid online   may not have an order number yet. - &#x60;order.paid&#x60;: an order becomes fully paid: an online payment is captured, a free order is placed or the   merchant marks it as paid. Partial payments don&#39;t send it. - &#x60;order.cancelled&#x60;: an unpaid order is canceled, for example by the merchant, a connected sales channel or   after a delayed payment fails. Paid orders can&#39;t be canceled, so a cancellation never involves a refund. - &#x60;order.refunded&#x60;: each time a full or partial refund is recorded, through the payment provider or   manually. - &#x60;order.fulfilled&#x60;: a fulfillment leaves every item in the order fulfilled. Partial fulfillments send   &#x60;fulfillment.created&#x60; instead. - &#x60;fulfillment.created&#x60;: each time items in an order are fulfilled, including partial fulfillments and   digital items fulfilled automatically after payment. - &#x60;fulfillment.updated&#x60;: a fulfillment&#39;s tracking details change, or a connected shipping service or sales   channel reports progress such as delivery. - &#x60;fulfillment.cancelled&#x60;: a fulfillment is canceled before it ships, for example when it is canceled or   its shipping label is voided. - &#x60;product.created&#x60;: a product is added to the store, including drafts and products created in bulk. - &#x60;product.updated&#x60;: a product changes, including its details, variants, prices, stock, visibility or   collections. Stock changes from orders also send it, so expect frequent events. - &#x60;product.deleted&#x60;: a product is deleted, individually or in bulk. |
**salesChannelIds** | **string[]** | Channel filter; null means store-wide. |
**enabled** | **bool** | Whether delivery is enabled. |
**disabledReason** | **string** | Reason delivery was disabled. receiver_gone and receiver_failing are automatic health disables that can be resumed with enabled: true; store_* reasons are permanent revocations. |
**disabledAt** | **\DateTime** |  |
**failingSince** | **\DateTime** | Start of the current failure streak; null after a successful delivery attempt, a URL change or re-enabling. |
**lastAttemptedAt** | **\DateTime** | When the latest delivery attempt started, whether or not it reached the receiver; null before any attempt. |
**lastSucceededAt** | **\DateTime** | When the latest successful delivery completed; null before any success. |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
