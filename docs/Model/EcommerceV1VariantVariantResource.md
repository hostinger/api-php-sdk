# # EcommerceV1VariantVariantResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The variant ID, required by every other variant endpoint. |
**title** | **string** | The variant title, or null. |
**sku** | **string** | The variant SKU, or null. |
**options** | [**\Hostinger\Model\EcommerceV1VariantVariantResourceOptionsInner[]**](EcommerceV1VariantVariantResourceOptionsInner.md) | The variant&#39;s option values. |
**prices** | [**\Hostinger\Model\EcommerceV1ProductProductResourceVariantsInnerPricesInner[]**](EcommerceV1ProductProductResourceVariantsInnerPricesInner.md) | Prices per currency, in the smallest currency unit. |
**inventoryQuantity** | **int** | Units in stock. |
**manageInventory** | **bool** | Whether stock is tracked for this variant. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
