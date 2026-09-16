# # HostingV1SslSslStatusResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Current certificate status |
**provider** | **string** | Provider of the assigned certificate, or of the last recorded installation when none is assigned. &#x60;custom&#x60; means an uploaded certificate. Null when no certificate is assigned and no installation is recorded, which is also the case for free subdomains on the platform-managed certificate. |
**isLifetime** | **bool** | Whether the certificate comes from a lifetime provider managed by the platform, not an uploaded one. Follows &#x60;provider&#x60;: it reflects the last recorded installation when no certificate is assigned, and is false when &#x60;provider&#x60; is null. |
**isHttpsRedirectEnabled** | **bool** | Whether HTTP requests to the website are redirected to HTTPS |
**expiresAt** | **\DateTime** | End of the assigned certificate validity period; null when no certificate details are available. |
**lastError** | **string** | Last installation error, when it is one of the known displayable messages |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
