# Hostinger\ReachProfilesApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listProfilesV1()**](ReachProfilesApi.md#listProfilesV1) | **GET** /api/reach/v1/profiles | List Profiles |


## `listProfilesV1()`

```php
listProfilesV1(): \Hostinger\Model\ReachV1ProfilesProfileResource[]
```

List Profiles

This endpoint returns all profiles available to the client, including their basic information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\ReachProfilesApi(config: $config);

try {
    $result = $apiInstance->listProfilesV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReachProfilesApi->listProfilesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\ReachV1ProfilesProfileResource[]**](../Model/ReachV1ProfilesProfileResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
