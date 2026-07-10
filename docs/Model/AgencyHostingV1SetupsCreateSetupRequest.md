# # AgencyHostingV1SetupsCreateSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**datacenterCode** | **string** | Datacenter code where the website should be provisioned. Available codes depend on live capacity and are not a fixed set. |
**flavor** | **string** | Setup flavor: a specific WordPress version in the format &#x60;wp-&lt;major&gt;.&lt;minor&gt;&#x60; or &#x60;wp-&lt;major&gt;.&lt;minor&gt;.&lt;patch&gt;&#x60; (e.g. &#x60;wp-6.8.2&#x60;), or &#x60;php-fpm&#x60; for a plain PHP stack. Generic versions like &#x60;wp-latest&#x60; are not allowed. |
**settings** | [**\Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequestSettings**](AgencyHostingV1SetupsCreateSetupRequestSettings.md) |  |
**domain** | **string** | Primary domain to attach to the website. Omit or set to null to get a free auto-generated *.hostingersite.com subdomain instead. |
**type** | **string** | Website type |
**wordpress** | [**\Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequestWordpress**](AgencyHostingV1SetupsCreateSetupRequestWordpress.md) |  |
**clone** | [**\Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequestClone**](AgencyHostingV1SetupsCreateSetupRequestClone.md) |  |
**deriveDomain** | [**\Hostinger\Model\AgencyHostingV1SetupsCreateSetupRequestDeriveDomain**](AgencyHostingV1SetupsCreateSetupRequestDeriveDomain.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
