# # MailV1WebhooksWebhookDeliveryLogResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** |  |
**mailboxAddress** | **string** | Email address of the mailbox this delivery is attached to |
**webhookUrl** | **string** | URL that received the webhook POST request |
**isSuccessful** | **bool** | Whether the delivery was successful |
**duration** | **int** | Webhook request duration in milliseconds |
**retryCount** | **int** | Number of delivery attempts made |
**maxRetryCount** | **int** | Maximum number of delivery attempts allowed |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
