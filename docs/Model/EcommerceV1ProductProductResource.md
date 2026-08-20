# # EcommerceV1ProductProductResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The product ID, required by every other product endpoint. |
**title** | **string** | The product name. |
**status** | **string** | The product status. |
**thumbnail** | **string** | The product&#39;s primary image URL, or null. |
**type** | **string** | The product type. |
**variantCount** | **int** | Number of variants. Use include&#x3D;variants to retrieve them. |
**priceRange** | [**\Hostinger\Model\EcommerceV1ProductProductResourcePriceRange**](EcommerceV1ProductProductResourcePriceRange.md) |  |
**variants** | [**\Hostinger\Model\EcommerceV1ProductProductResourceVariantsInner[]**](EcommerceV1ProductProductResourceVariantsInner.md) | Present (non-null) only when include&#x3D;variants is set; null otherwise. |
**media** | [**\Hostinger\Model\EcommerceV1ProductProductResourceMediaInner[]**](EcommerceV1ProductProductResourceMediaInner.md) | Present (non-null) only when include&#x3D;media is set; null otherwise. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
