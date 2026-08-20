# # EcommerceV1OrderOrderDetailResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The order ID. |
**displayId** | **int** | The order number. |
**status** | **string** | The order status. |
**paymentStatus** | **string** | The payment status. |
**fulfillmentStatus** | **string** | The fulfilment status. |
**total** | **int** | Order total in the smallest currency unit. |
**currencyCode** | **string** | The order currency code. |
**customerEmail** | **string** | The customer email. |
**itemCount** | **int** | Number of distinct line items. |
**createdAt** | **\DateTime** | ISO timestamp of when the order was created. |
**merchantNote** | **string** | Internal note visible only to the merchant. |
**subtotal** | **int** | Subtotal in the smallest currency unit. |
**discountTotal** | **int** | Discount total in the smallest currency unit. |
**taxTotal** | **int** | Tax total in the smallest currency unit. |
**shippingTotal** | **int** | Shipping total in the smallest currency unit. |
**paidTotal** | **int** | Amount paid in the smallest currency unit. |
**refundedTotal** | **int** | Amount refunded in the smallest currency unit. |
**shippingAddress** | [**\Hostinger\Model\EcommerceV1OrderOrderDetailResourceShippingAddress**](EcommerceV1OrderOrderDetailResourceShippingAddress.md) |  |
**billingAddress** | [**\Hostinger\Model\EcommerceV1OrderOrderDetailResourceBillingAddress**](EcommerceV1OrderOrderDetailResourceBillingAddress.md) |  |
**items** | [**\Hostinger\Model\EcommerceV1OrderOrderDetailResourceItemsInner[]**](EcommerceV1OrderOrderDetailResourceItemsInner.md) | The order line items. |
**fulfillments** | [**\Hostinger\Model\EcommerceV1OrderOrderDetailResourceFulfillmentsInner[]**](EcommerceV1OrderOrderDetailResourceFulfillmentsInner.md) | The order fulfilments with tracking. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
