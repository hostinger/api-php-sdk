# Hostinger\HostingGitApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listGitInstallationRepositoriesV1()**](HostingGitApi.md#listGitInstallationRepositoriesV1) | **GET** /api/hosting/v1/git/installations/{uuid}/repositories | List Git installation repositories |
| [**listGitInstallationsV1()**](HostingGitApi.md#listGitInstallationsV1) | **GET** /api/hosting/v1/git/installations | List Git installations |


## `listGitInstallationRepositoriesV1()`

```php
listGitInstallationRepositoriesV1($uuid): \Hostinger\Model\HostingV1GitGitRepositoryResource[]
```

List Git installation repositories

Lists the repositories the Git installation can access, read live from the provider. Works for github and gitlab installations. Use an active installation: a suspended or pending one is still queried and the call fails with whatever the provider answers. The list is cut at the first 500 repositories in the order the provider returns them; when the account has more, name the repository directly instead of searching this list.  `owner`, `name` and `default_branch` identify a repository and a branch to deploy. Returns 404 when the installation does not belong to the customer. Limited to 10 calls per minute per API client (429 above that).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$uuid = 018f5e2a-1234-7890-abcd-1234567890ab; // string | Git installation UUID from the List Git installations endpoint

try {
    $result = $apiInstance->listGitInstallationRepositoriesV1($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->listGitInstallationRepositoriesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Git installation UUID from the List Git installations endpoint | |

### Return type

[**\Hostinger\Model\HostingV1GitGitRepositoryResource[]**](../Model/HostingV1GitGitRepositoryResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGitInstallationsV1()`

```php
listGitInstallationsV1($provider, $status): \Hostinger\Model\HostingV1GitGitInstallationResource[]
```

List Git installations

Lists the Git provider accounts the customer has connected. Only installations with status `active` are returned unless the `status` filter says otherwise.  An empty list means the customer has no active installation. Check `status=suspended` and `status=pending` as well. If there is none at all, GitHub has to be connected once in hPanel (Websites, Manage, Advanced, Git, Connect GitHub; or Add Website, Node.js Web App, Import Git Repository, Continue with GitHub); this endpoint then lists the new installation.  Use `uuid` as the path parameter of `List Git installation repositories`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$provider = github; // string | Filter by Git provider
$status = active; // string | Filter by installation status

try {
    $result = $apiInstance->listGitInstallationsV1($provider, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->listGitInstallationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| Filter by Git provider | [optional] |
| **status** | **string**| Filter by installation status | [optional] [default to &#39;active&#39;] |

### Return type

[**\Hostinger\Model\HostingV1GitGitInstallationResource[]**](../Model/HostingV1GitGitInstallationResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
