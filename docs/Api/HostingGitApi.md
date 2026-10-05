# Hostinger\HostingGitApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteGitAutoDeploymentSettingsV1()**](HostingGitApi.md#deleteGitAutoDeploymentSettingsV1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/git/auto-deployments/settings | Delete Git auto-deployment settings |
| [**deployWebsiteGitRepositoryV1()**](HostingGitApi.md#deployWebsiteGitRepositoryV1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/git/repositories/deploy | Deploy website Git repository |
| [**generateGitSSHKeyV1()**](HostingGitApi.md#generateGitSSHKeyV1) | **POST** /api/hosting/v1/accounts/{username}/git/ssh-key | Generate Git SSH key |
| [**getGitAutoDeploymentSettingsV1()**](HostingGitApi.md#getGitAutoDeploymentSettingsV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/git/auto-deployments/settings | Get Git auto-deployment settings |
| [**getGitSSHPublicKeyV1()**](HostingGitApi.md#getGitSSHPublicKeyV1) | **GET** /api/hosting/v1/accounts/{username}/git/ssh-key | Get Git SSH public key |
| [**listGitInstallationRepositoriesV1()**](HostingGitApi.md#listGitInstallationRepositoriesV1) | **GET** /api/hosting/v1/git/installations/{uuid}/repositories | List Git installation repositories |
| [**listGitInstallationsV1()**](HostingGitApi.md#listGitInstallationsV1) | **GET** /api/hosting/v1/git/installations | List Git installations |
| [**listWebsiteGitRepositoriesV1()**](HostingGitApi.md#listWebsiteGitRepositoriesV1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/git/repositories | List website Git repositories |
| [**updateGitAutoDeploymentSettingsV1()**](HostingGitApi.md#updateGitAutoDeploymentSettingsV1) | **PUT** /api/hosting/v1/accounts/{username}/websites/{domain}/git/auto-deployments/settings | Update Git auto-deployment settings |


## `deleteGitAutoDeploymentSettingsV1()`

```php
deleteGitAutoDeploymentSettingsV1($username, $domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Delete Git auto-deployment settings

Removes the Git auto-deployment settings of the website. Files already deployed stay on the website; pushes stop deploying until settings are saved again. Succeeds also when nothing is configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->deleteGitAutoDeploymentSettingsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->deleteGitAutoDeploymentSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deployWebsiteGitRepositoryV1()`

```php
deployWebsiteGitRepositoryV1($username, $domain, $hostingV1GitDeployWebsiteGitRepositoryRequest): \Hostinger\Model\HostingV1GitGitDeployOutputResource
```

Deploy website Git repository

Clones a Git repository into a directory of the website, or pulls it again. An empty or missing directory gets a clone of the branch. A directory that already holds this repository and branch is reset to its last commit and pulled: changes made on the server to files the repository tracks are discarded, files it does not track stay. A directory that holds other files, including another repository or another branch of this one, is rejected. `composer install` runs after the clone or pull when the repository has a `composer.json`.  The call waits for the deployment and returns its log. `is_success` false means Git or composer failed and the log says why. A second call for the same directory is rejected while the first is still waiting for the server. If the request times out, the deployment may still finish on the server; calling again later with the same repository and branch pulls.  Private repositories need an SSH URL and the account's Git SSH key from `Generate Git SSH key`, added to the repository as a deploy key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1GitDeployWebsiteGitRepositoryRequest = new \Hostinger\Model\HostingV1GitDeployWebsiteGitRepositoryRequest(); // \Hostinger\Model\HostingV1GitDeployWebsiteGitRepositoryRequest

try {
    $result = $apiInstance->deployWebsiteGitRepositoryV1($username, $domain, $hostingV1GitDeployWebsiteGitRepositoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->deployWebsiteGitRepositoryV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1GitDeployWebsiteGitRepositoryRequest** | [**\Hostinger\Model\HostingV1GitDeployWebsiteGitRepositoryRequest**](../Model/HostingV1GitDeployWebsiteGitRepositoryRequest.md)|  | |

### Return type

[**\Hostinger\Model\HostingV1GitGitDeployOutputResource**](../Model/HostingV1GitGitDeployOutputResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGitSSHKeyV1()`

```php
generateGitSSHKeyV1($username): \Hostinger\Model\HostingV1GitGitSshKeyResource
```

Generate Git SSH key

Creates the SSH key pair of the hosting account and returns the public key. When the account already has a key, returns that key unchanged. One key serves every website of the account; add the public key to a private repository as a deploy key before deploying it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string

try {
    $result = $apiInstance->generateGitSSHKeyV1($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->generateGitSSHKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

[**\Hostinger\Model\HostingV1GitGitSshKeyResource**](../Model/HostingV1GitGitSshKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGitAutoDeploymentSettingsV1()`

```php
getGitAutoDeploymentSettingsV1($username, $domain): \Hostinger\Model\HostingV1GitGitAutoDeploymentSettingsResource
```

Get Git auto-deployment settings

Returns the Git auto-deployment settings of the website: which repository and branch deploy into which directory, and whether pushes trigger a deployment. `is_enabled` false keeps the repository link but ignores pushes.  When the website has no auto-deployment configured every field is null. Save settings with `Update Git auto-deployment settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getGitAutoDeploymentSettingsV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->getGitAutoDeploymentSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1GitGitAutoDeploymentSettingsResource**](../Model/HostingV1GitGitAutoDeploymentSettingsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGitSSHPublicKeyV1()`

```php
getGitSSHPublicKeyV1($username): \Hostinger\Model\HostingV1GitGitSshKeyResource
```

Get Git SSH public key

Returns the public SSH key of the hosting account. `Deploy website Git repository` uses this key to clone and pull over SSH, so a private repository works once the key is added to it as a deploy key on the Git host. `public_key` is null when the account has no key yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string

try {
    $result = $apiInstance->getGitSSHPublicKeyV1($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->getGitSSHPublicKeyV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |

### Return type

[**\Hostinger\Model\HostingV1GitGitSshKeyResource**](../Model/HostingV1GitGitSshKeyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGitInstallationRepositoriesV1()`

```php
listGitInstallationRepositoriesV1($uuid): \Hostinger\Model\HostingV1GitGitRepositoryResource[]
```

List Git installation repositories

Lists the repositories the Git installation can access, read live from the provider. Works for github and gitlab installations. Use an active installation: a suspended or pending one is still queried and the call fails with whatever the provider answers. The list is cut at the first 500 repositories in the order the provider returns them; when the account has more, name the repository directly instead of searching this list.  `owner`, `name` and a branch (`default_branch` or another one) go into `source_options` of `Start Node.js build` or into `Update Git auto-deployment settings`. Returns 404 when the installation does not belong to the customer. Limited to 10 calls per minute per API client (429 above that).

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

Lists the Git provider accounts the customer has connected. Only installations with status `active` are returned unless the `status` filter says otherwise.  An empty list means the customer has no active installation. Check `status=suspended` and `status=pending` as well. If there is none at all, a Git provider (GitHub or GitLab) has to be connected once in hPanel (Websites, Manage, Advanced, Git; or Add Website, Node.js Web App, Import Git Repository); this endpoint then lists the new installation.  Use `uuid` as the path parameter of `List Git installation repositories`, and as `installation_uuid` in `Start Node.js build` with `source_type` `git` and in `Update Git auto-deployment settings`.

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

## `listWebsiteGitRepositoriesV1()`

```php
listWebsiteGitRepositoriesV1($username, $domain): \Hostinger\Model\HostingV1GitWebsiteGitRepositoryResource[]
```

List website Git repositories

Lists the Git repositories linked to directories of the website, with `Deploy website Git repository` or in the Git section of hPanel: clone URL, branch and directory of each one. A repository whose clone failed stays listed; deploying it again retries the clone. GitHub and GitLab auto-deployments are not listed here; see `Get Git auto-deployment settings`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->listWebsiteGitRepositoriesV1($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->listWebsiteGitRepositoriesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\HostingV1GitWebsiteGitRepositoryResource[]**](../Model/HostingV1GitWebsiteGitRepositoryResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGitAutoDeploymentSettingsV1()`

```php
updateGitAutoDeploymentSettingsV1($username, $domain, $hostingV1GitUpdateGitAutoDeploymentSettingsRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Update Git auto-deployment settings

Creates or replaces the Git auto-deployment settings of the website: repository, branch, the directory under the document root to deploy into, and `is_enabled`. Send the full set; `is_enabled` defaults to true and `directory` to the document root. `installation_uuid` must be an installation from `List Git installations` that belongs to the same customer as the website.  For PHP and static websites, saving with `is_enabled` true deploys the branch right away and every later push to that branch deploys again. For Node.js and Website Builder websites saving does not clone anything. On a Node.js website start the first deploy with `Start Node.js build` using `source_type` `git`; pushes then trigger new builds with the build settings stored for the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\HostingGitApi(config: $config);
$username = u123456789; // string
$domain = mydomain.tld; // string | Domain name
$hostingV1GitUpdateGitAutoDeploymentSettingsRequest = new \Hostinger\Model\HostingV1GitUpdateGitAutoDeploymentSettingsRequest(); // \Hostinger\Model\HostingV1GitUpdateGitAutoDeploymentSettingsRequest

try {
    $result = $apiInstance->updateGitAutoDeploymentSettingsV1($username, $domain, $hostingV1GitUpdateGitAutoDeploymentSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostingGitApi->updateGitAutoDeploymentSettingsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **domain** | **string**| Domain name | |
| **hostingV1GitUpdateGitAutoDeploymentSettingsRequest** | [**\Hostinger\Model\HostingV1GitUpdateGitAutoDeploymentSettingsRequest**](../Model/HostingV1GitUpdateGitAutoDeploymentSettingsRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
