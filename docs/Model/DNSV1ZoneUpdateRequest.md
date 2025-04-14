# # DNSV1ZoneUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overwrite** | **bool** | If &#x60;true&#x60;, resource records (RRs) matching name and type will be deleted and new RRs will be created, otherwise resource records&#39; ttl&#39;s are updated and new records are appended. If no matching RRs are found, they are created. | [default to true]
**zone** | [**\Hostinger\Model\DNSV1ZoneUpdateRequestZoneInner[]**](DNSV1ZoneUpdateRequestZoneInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
