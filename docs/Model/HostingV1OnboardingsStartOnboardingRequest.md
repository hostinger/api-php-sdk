# # HostingV1OnboardingsStartOnboardingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Website type. Omit or &#x60;null&#x60; for an empty website. &#x60;wordpress&#x60; installs WordPress in the website root and requires &#x60;wordpress&#x60;. The headless types (&#x60;headless_empty&#x60;, &#x60;headless_wordpress&#x60;, &#x60;headless_ecommerce&#x60;, &#x60;headless_pocketbase&#x60;) create a headless website; &#x60;headless_wordpress&#x60; additionally installs WordPress into the &#x60;cms&#x60; directory with generated credentials. &#x60;headless_empty&#x60; installs nothing, so WordPress can be added later through &#x60;POST /api/hosting/v1/accounts/{username}/wordpress/installations&#x60; (&#x60;wordpress_installations_install&#x60;) with &#x60;type: headless&#x60;. |
**domain** | **string** | Customer-owned domain, or a free subdomain you generated through &#x60;POST /api/hosting/v1/domains/free-subdomains&#x60; (&#x60;hosting_domains_generate-free-subdomain&#x60;) in the last 24 hours. Cannot start with \&quot;www.\&quot; and can have at most one subdomain level, e.g. &#x60;blog.example.com&#x60;. Omit or &#x60;null&#x60; to set the website up on a generated temporary free subdomain. |
**datacenterCode** | **string** | Datacenter for the hosting account when the order does not have one yet. Omit to use the order&#39;s default datacenter. Ignored when the order already has a hosting account. List available datacenters to find valid codes. |
**wordpress** | [**\Hostinger\Model\HostingV1OnboardingsStartOnboardingRequestWordpress**](HostingV1OnboardingsStartOnboardingRequestWordpress.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
