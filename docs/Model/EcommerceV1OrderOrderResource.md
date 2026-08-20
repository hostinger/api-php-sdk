# # EcommerceV1OrderOrderResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The order ID, required by every other order endpoint. |
**displayId** | **int** | The order number the merchant and customer see. |
**status** | **string** | The order status. |
**paymentStatus** | **string** | The payment status. A paid order is \&quot;captured\&quot;. |
**fulfillmentStatus** | **string** | The fulfilment status. |
**total** | **int** | Order total in the smallest currency unit. |
**currencyCode** | **string** | The order currency code. |
**customerEmail** | **string** | The customer email. |
**itemCount** | **int** | Number of distinct line items. Retrieve the order for the items themselves. |
**createdAt** | **\DateTime** | ISO timestamp of when the order was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
