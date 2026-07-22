# # MailV1OrdersOrderResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order resource ID |
**status** | **string** | Order status |
**isTrial** | **bool** | Whether the order is currently in a trial period |
**seats** | **int** | Number of mailbox seats purchased with the order |
**domain** | [**\Hostinger\Model\MailV1OrdersOrderDomainResource**](MailV1OrdersOrderDomainResource.md) |  |
**plan** | [**\Hostinger\Model\MailV1OrdersOrderPlanResource**](MailV1OrdersOrderPlanResource.md) |  |
**hasPendingUpgrade** | **bool** | Whether an upgrade is currently pending for the order |
**createdAt** | **\DateTime** |  |
**expiresAt** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
