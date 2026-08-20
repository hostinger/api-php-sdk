# # EcommerceV1DiscountCreateDiscountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The discount code customers enter at checkout. |
**name** | **string** | A human-friendly discount name. |
**type** | **string** | The discount type. |
**value** | **int** | For percentage discounts a whole number 1-100; for fixed discounts an amount in the smallest currency unit (e.g. $10 is 1000). Ignored for free_shipping. |
**allocation** | **string** | Whether the discount applies to the cart total or to each eligible item. |
**startsAt** | **\DateTime** | When the discount becomes active. A bare date (2026-11-27) anchors to time_zone. Defaults to now when omitted. |
**endsAt** | **\DateTime** | When the discount expires. A bare date runs to the end of that day in time_zone. Never expires when omitted. |
**usageLimit** | **int** | Maximum number of times the discount can be redeemed. |
**minCartValue** | **int** | Minimum cart value in the smallest currency unit required for the discount to apply. |
**timeZone** | **string** | IANA time zone used to interpret starts_at and ends_at. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
