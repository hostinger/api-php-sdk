# # HostingV1OnboardingsOnboardingResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Domain of the website being set up. |
**username** | **string** | Hosting account username. |
**type** | **string** | Website type requested for the setup: &#x60;wordpress&#x60;, &#x60;headless_wordpress&#x60;, &#x60;headless_ecommerce&#x60; or &#x60;headless_pocketbase&#x60;. &#x60;null&#x60; for an empty website. Setups started outside this API may report other legacy types. |
**status** | **string** | &#x60;running&#x60; while the website is still being set up, &#x60;completed&#x60; once the setup has finished, &#x60;failed&#x60; when it stopped before finishing or has not reported progress for over an hour. |
**createdAt** | **\DateTime** | When the setup was requested. |
**updatedAt** | **\DateTime** | When the setup last reported progress. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
