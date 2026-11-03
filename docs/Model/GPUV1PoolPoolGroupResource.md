# # GPUV1PoolPoolGroupResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | GPU pool group ID |
**name** | **string** |  |
**vram** | **int** | Total VRAM in bytes |
**isAvailable** | **bool** | Whether the group has any available pools |
**minPricePerHour** | **float** | Lowest hourly price of the group instance types, in the requested currency |
**pools** | [**\Hostinger\Model\GPUV1PoolPoolResource[]**](GPUV1PoolPoolResource.md) | Array of [&#x60;GPU.V1.Pool.PoolResource&#x60;](#model/gpuv1poolpoolresource) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
