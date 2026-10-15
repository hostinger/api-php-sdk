# # WordPressV1ContentGenerationResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**generationId** | **string** | Generation ID (UUID) used to poll for the result |
**type** | **string** | Kind of generation, determines the shape of &#x60;result&#x60; |
**status** | **string** | &#x60;in-progress&#x60; while the generation is still running, &#x60;completed&#x60; once &#x60;result&#x60; is available, &#x60;failed&#x60; when the generation stopped without a result. |
**result** | [**\Hostinger\Model\WordPressV1ContentGenerationResourceResult**](WordPressV1ContentGenerationResourceResult.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
