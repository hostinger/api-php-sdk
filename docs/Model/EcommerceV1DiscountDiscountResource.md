# # EcommerceV1DiscountDiscountResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The discount ID, required by every other discount endpoint. |
**code** | **string** | The discount code customers enter at checkout. |
**name** | **string** | The discount name, or null. |
**type** | **string** | The discount type, or null. |
**value** | **int** | The discount value, or null. Percentage is 1-100; fixed is in the smallest currency unit. |
**allocation** | **string** | Whether the discount applies to the cart total or to each item, or null. |
**isDisabled** | **bool** | Whether the discount is disabled. |
**startsAt** | **\DateTime** | When the discount becomes active. |
**endsAt** | **\DateTime** | When the discount expires, or null. |
**usageLimit** | **int** | Maximum number of redemptions, or null for unlimited. |
**usageCount** | **int** | Number of times the discount has been redeemed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
