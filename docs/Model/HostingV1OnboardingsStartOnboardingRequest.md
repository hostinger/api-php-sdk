# # HostingV1OnboardingsStartOnboardingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Website type. Omit or &#x60;null&#x60; for an empty website. &#x60;wordpress&#x60; installs WordPress in the website root and requires &#x60;wordpress&#x60;. The headless types (&#x60;headless_wordpress&#x60;, &#x60;headless_ecommerce&#x60;, &#x60;headless_pocketbase&#x60;) create a headless website; &#x60;headless_wordpress&#x60; additionally installs WordPress into the &#x60;cms&#x60; directory with generated credentials. |
**domain** | **string** | Customer-owned domain. Cannot start with \&quot;www.\&quot;. Omit or &#x60;null&#x60; to set the website up on a generated temporary free subdomain. |
**wordpress** | [**\Hostinger\Model\HostingV1OnboardingsStartOnboardingRequestWordpress**](HostingV1OnboardingsStartOnboardingRequestWordpress.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
