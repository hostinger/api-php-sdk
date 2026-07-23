# # MailV1WebhooksWebhookSecretResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique webhook identifier |
**mailbox** | [**\Hostinger\Model\MailV1WebhooksWebhookMailboxResource**](MailV1WebhooksWebhookMailboxResource.md) |  |
**name** | **string** | Human-readable name for this webhook |
**description** | **string** | Optional description of the webhook&#39;s purpose |
**events** | **string[]** | Events that trigger this webhook |
**status** | **string** | Current status of the webhook |
**url** | **string** | URL that receives webhook POST requests |
**secret** | **string** | New webhook secret, sent as &#x60;Authorization: Bearer &lt;secret&gt;&#x60; with every delivery. The previous secret is immediately invalidated and the new one is not returned again. |
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
