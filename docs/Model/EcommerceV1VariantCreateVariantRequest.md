# # EcommerceV1VariantCreateVariantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The variant title. Defaults to the option values joined with &#39; / &#39; (e.g. &#39;Red / L&#39;). |
**sku** | **string** | The variant SKU. |
**options** | [**\Hostinger\Model\EcommerceV1VariantCreateVariantRequestOptionsInner[]**](EcommerceV1VariantCreateVariantRequestOptionsInner.md) | Option name/value pairs that distinguish this variant, e.g. [{name: Size, value: M}]. Options missing from the product are created; provide a value for every option the product already has. |
**prices** | [**\Hostinger\Model\EcommerceV1VariantCreateVariantRequestPricesInner[]**](EcommerceV1VariantCreateVariantRequestPricesInner.md) | Prices per currency. Amounts are integers in the smallest currency unit. A free item is amount: 0. |
**inventoryQuantity** | **int** | Units in stock. Defaults to 0. |
**manageInventory** | **bool** | Whether stock is tracked for this variant. Defaults to false. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
