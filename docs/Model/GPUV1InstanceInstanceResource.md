# # GPUV1InstanceInstanceResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | GPU instance ID |
**name** | **string** |  |
**status** | **string** |  |
**actionLock** | **string** | Whether an action is in progress on the instance |
**actionLockReason** | **string** | Action in progress on the instance, &#x60;null&#x60; when unlocked |
**pool** | [**\Hostinger\Model\GPUV1PoolPoolResource**](GPUV1PoolPoolResource.md) |  |
**poolInstance** | [**\Hostinger\Model\GPUV1PoolPoolInstanceResource**](GPUV1PoolPoolInstanceResource.md) |  |
**osTemplate** | [**\Hostinger\Model\GPUV1OsTemplateOsTemplateResource**](GPUV1OsTemplateOsTemplateResource.md) |  |
**llmModelVariant** | [**\Hostinger\Model\GPUV1LlmModelVariantLlmModelVariantResource**](GPUV1LlmModelVariantLlmModelVariantResource.md) |  |
**sshKeys** | [**\Hostinger\Model\GPUV1SshKeySshKeyResource[]**](GPUV1SshKeySshKeyResource.md) | Array of [&#x60;GPU.V1.SshKey.SshKeyResource&#x60;](#model/gpuv1sshkeysshkeyresource) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
