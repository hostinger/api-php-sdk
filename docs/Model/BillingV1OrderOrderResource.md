# # BillingV1OrderOrderResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order ID | [optional]
**subscriptionId** | **string** | Subscription ID | [optional]
**status** | **string** |  | [optional]
**currency** | **string** | Currency code | [optional]
**subtotal** | **int** | Subtotal price (exc. VAT) in cents | [optional]
**total** | **int** | Total price (inc. VAT) in cents | [optional]
**billingAddress** | [**\Hostinger\Model\BillingV1OrderOrderBillingAddressResource**](BillingV1OrderOrderBillingAddressResource.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
