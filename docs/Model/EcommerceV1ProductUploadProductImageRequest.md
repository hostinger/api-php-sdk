# # EcommerceV1ProductUploadProductImageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imageUrl** | **string** | Publicly reachable URL of a raster image (JPEG, PNG, GIF or WebP), maximum 15MB. Fetching the image requires HTTPS on port 443 without embedded credentials. At most one redirect is allowed; its destination must meet the same URL requirements. Private or reserved network destinations, unsupported URLs and longer redirect chains are rejected. The image is fetched, virus-scanned and validated by content, then stored on the CDN. SVG is not accepted. Provide either this or object_name. |
**objectName** | **string** | Key returned by the upload-url endpoint. Provide this instead of image_url to attach an uploaded image. |
**isThumbnail** | **bool** | When true, the image becomes the product&#39;s thumbnail (primary image). When omitted, it becomes the thumbnail only if the product does not have one yet. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
