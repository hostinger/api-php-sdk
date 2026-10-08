# # BillingV1SubscriptionSubscriptionResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Subscription ID |
**name** | **string** |  |
**status** | **string** |  |
**billingPeriod** | **int** |  |
**billingPeriodUnit** | **string** |  |
**currencyCode** | **string** |  |
**totalPrice** | **int** | Total price in cents |
**renewalPrice** | **int** | Renewal price in cents |
**isAutoRenewed** | **bool** |  |
**createdAt** | **\DateTime** |  |
**expiresAt** | **\DateTime** | Final date when the subscription will be or was cancelled and expire. Set when a cancellation is scheduled (e.g. after auto-renewal is disabled) or the subscription is already cancelled; &#x60;null&#x60; otherwise. |
**nextBillingAt** | **\DateTime** | Date when the next charge will happen while the subscription is auto-renewing. Only relevant when &#x60;is_auto_renewed&#x60; is &#x60;true&#x60;; ignore it otherwise. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
