# # DomainsV1DomainDomainContactVerificationChannelResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | - &#x60;pending&#x60;: not verified yet. Verify it in [hPanel](https://hpanel.hostinger.com/) before   &#x60;ends_at&#x60;. - &#x60;verified&#x60;: verified, or never required for this TLD. Nothing to do. - &#x60;suspended&#x60;: not verified in time, so the domain is suspended until the owner contact is   verified in [hPanel](https://hpanel.hostinger.com/). |
**endsAt** | **\DateTime** | Deadline to verify by while &#x60;status&#x60; is &#x60;pending&#x60;, after which the domain is suspended. It can still hold the past deadline once the channel is &#x60;verified&#x60; or &#x60;suspended&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
