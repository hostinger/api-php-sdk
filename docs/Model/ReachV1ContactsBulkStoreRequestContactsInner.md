# # ReachV1ContactsBulkStoreRequestContactsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  |
**name** | **string** |  |
**surname** | **string** |  |
**phone** | **string** | Phone number in E.164 format (leading \&quot;+\&quot; then 7-15 digits) |
**fields** | [**\Hostinger\Model\ReachV1ContactsBulkStoreRequestContactsInnerFieldsInner[]**](ReachV1ContactsBulkStoreRequestContactsInnerFieldsInner.md) | Custom field values to set on the contact. For a contact whose email already exists, only fields that have no value yet are filled. Unknown field UUIDs and values that do not match the field type are skipped. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
