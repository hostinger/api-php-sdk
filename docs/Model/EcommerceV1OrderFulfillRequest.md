# # EcommerceV1OrderFulfillRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\Hostinger\Model\EcommerceV1OrderFulfillRequestItemsInner[]**](EcommerceV1OrderFulfillRequestItemsInner.md) | Line items to fulfil. Omit to fulfil every remaining unfulfilled item. |
**trackingNumber** | **string** | Carrier tracking number for the shipment. |
**trackingUrl** | **string** | Public tracking URL for the shipment. Requires tracking_number. |
**notifyCustomer** | **bool** | Whether to email the customer about the fulfilment. Defaults to true. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
