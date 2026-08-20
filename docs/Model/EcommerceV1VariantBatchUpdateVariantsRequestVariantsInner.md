# # EcommerceV1VariantBatchUpdateVariantsRequestVariantsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variantId** | **string** | The id of the variant to update. |
**title** | **string** | The variant title. |
**inventoryQuantity** | **int** | Units in stock. |
**manageInventory** | **bool** | Whether stock is tracked for this variant. |
**prices** | [**\Hostinger\Model\EcommerceV1VariantBatchUpdateVariantsRequestVariantsInnerPricesInner[]**](EcommerceV1VariantBatchUpdateVariantsRequestVariantsInnerPricesInner.md) | The full list of prices for the variant, replacing the existing ones. A free item is amount: 0. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
