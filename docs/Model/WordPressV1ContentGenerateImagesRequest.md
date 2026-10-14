# # WordPressV1ContentGenerateImagesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prompt** | **string** | What the image should show. For the logo type, the wordmark and mark to render. |
**imageType** | **string** | Kind of image to generate. It sets the default size and cropping. |
**numOfImages** | **int** | How many images to generate | [default to 1]
**width** | **int** | Output width in pixels. Defaults per image type and is ignored for the logo type. |
**height** | **int** | Output height in pixels. Defaults per image type and is ignored for the logo type. |
**style** | **string** | Style tokens appended to photographic prompts. Ignored for the logo type. |
**colorGuidance** | **string** | Colour direction for the logo type only. It is not rendered as text. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
