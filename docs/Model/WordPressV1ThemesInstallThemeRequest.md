# # WordPressV1ThemesInstallThemeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**theme** | **string** | Slug of the theme to install. Hostinger theme slugs (hostinger-blog, hostinger-affiliate-theme, hostinger-ai-theme) trigger the custom installer and forward the optional palette/layout/font fields; any other WordPress theme slug uses the standard installer and ignores those fields. |
**palette** | **string** | Palette identifier. Only applied when the theme is a Hostinger theme; the default is used when omitted. | [default to 'palette1']
**layout** | **string** | Layout identifier. Only applied when the theme is a Hostinger theme; the default is used when omitted. | [default to 'layout1']
**font** | **string** | Font identifier. Only applied when the theme is a Hostinger theme; the default is used when omitted. | [default to 'default']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
