# # EcommerceV1PaymentProviderPaymentProviderListResourceDataAvailableInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The payment gateway ID, e.g. stripe. |
**isInstalled** | **bool** | Whether the gateway is installed on the store. |
**isEnabled** | **bool** | Whether the gateway is enabled on the store. |
**isCurrencySupported** | **bool** | Whether the gateway supports the store currency. |
**supportedCurrencies** | **string[]** | Currencies the gateway supports; present only when the store currency is unsupported. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
