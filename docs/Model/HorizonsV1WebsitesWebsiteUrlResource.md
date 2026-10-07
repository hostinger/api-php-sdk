# # HorizonsV1WebsitesWebsiteUrlResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**websiteUrl** | **string** | The website URL for the user to access their website in Hostinger Horizons interface |
**publishedAt** | **\DateTime** | When the website was last published, or null if it has never been published |
**isTemplate** | **bool** | Whether the website is published as a template, so its published pages show a \&quot;Use template\&quot; banner |
**isInProgress** | **bool** | Whether Hostinger Horizons is still generating changes or publishing the website. Publishing is refused while it is true, and editing while changes are being generated. An unfinished template migration also refuses publishing, with its own error, without setting this flag. |
**hasEcommerceStore** | **bool** | Whether the website has an ecommerce store |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
