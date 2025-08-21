# Hostinger\VPSDockerManagerApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewProjectV1()**](VPSDockerManagerApi.md#createNewProjectV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker | Create new project |
| [**deleteProjectV1()**](VPSDockerManagerApi.md#deleteProjectV1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/down | Delete project |
| [**getProjectContainersV1()**](VPSDockerManagerApi.md#getProjectContainersV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/containers | Get project containers |
| [**getProjectContentsV1()**](VPSDockerManagerApi.md#getProjectContentsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName} | Get project contents |
| [**getProjectListV1()**](VPSDockerManagerApi.md#getProjectListV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker | Get project list |
| [**getProjectLogsV1()**](VPSDockerManagerApi.md#getProjectLogsV1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/logs | Get project logs |
| [**restartProjectV1()**](VPSDockerManagerApi.md#restartProjectV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/restart | Restart project |
| [**startProjectV1()**](VPSDockerManagerApi.md#startProjectV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/start | Start project |
| [**stopProjectV1()**](VPSDockerManagerApi.md#stopProjectV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/stop | Stop project |
| [**updateProjectV1()**](VPSDockerManagerApi.md#updateProjectV1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/update | Update project |


## `createNewProjectV1()`

```php
createNewProjectV1($virtualMachineId, $vPSV1VirtualMachineDockerManagerUpRequest): \Hostinger\Model\VPSV1ActionActionResource
```

Create new project

Deploy new project from docker-compose.yaml contents or download contents from URL.   URL can be Github repository url in format https://github.com/[user]/[repo] and it will be automatically resolved to  docker-compose.yaml file in master branch. Any other URL provided must return docker-compose.yaml file contents.  If project with the same name already exists, existing project will be replaced.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$vPSV1VirtualMachineDockerManagerUpRequest = new \Hostinger\Model\VPSV1VirtualMachineDockerManagerUpRequest(); // \Hostinger\Model\VPSV1VirtualMachineDockerManagerUpRequest

try {
    $result = $apiInstance->createNewProjectV1($virtualMachineId, $vPSV1VirtualMachineDockerManagerUpRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->createNewProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **vPSV1VirtualMachineDockerManagerUpRequest** | [**\Hostinger\Model\VPSV1VirtualMachineDockerManagerUpRequest**](../Model/VPSV1VirtualMachineDockerManagerUpRequest.md)|  | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectV1()`

```php
deleteProjectV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1ActionActionResource
```

Delete project

Completely removes a Docker Compose project from the virtual machine, stopping all containers and cleaning up  associated resources including networks, volumes, and images.   This operation is irreversible and will delete all project data.   Use this when you want to permanently remove a project and free up system resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->deleteProjectV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->deleteProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectContainersV1()`

```php
getProjectContainersV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1DockerManagerContainerResource[]
```

Get project containers

Retrieves a list of all containers belonging to a specific Docker Compose project on the virtual machine.   This endpoint returns detailed information about each container including their current status, port mappings, and runtime configuration.   Use this to monitor the health and state of all services within your Docker Compose project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->getProjectContainersV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->getProjectContainersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1DockerManagerContainerResource[]**](../Model/VPSV1DockerManagerContainerResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectContentsV1()`

```php
getProjectContentsV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1DockerManagerContentResource
```

Get project contents

Retrieves the complete project information including the docker-compose.yml file contents, project metadata, and current deployment status.   This endpoint provides the full configuration and state details of a specific Docker Compose project.   Use this to inspect project settings, review the compose file, or check the overall project health.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->getProjectContentsV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->getProjectContentsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1DockerManagerContentResource**](../Model/VPSV1DockerManagerContentResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectListV1()`

```php
getProjectListV1($virtualMachineId): \Hostinger\Model\VPSV1DockerManagerProjectResource[]
```

Get project list

Retrieves a list of all Docker Compose projects currently deployed on the virtual machine.   This endpoint returns basic information about each project including name, status, file path and list of containers with  details about their names, image, status, health and ports. Container stats are omitted in this endpoint. If you need to get detailed information about container with stats included, use the `Get project containers` endpoint.   Use this to get an overview of all Docker projects on your VPS instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID

try {
    $result = $apiInstance->getProjectListV1($virtualMachineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->getProjectListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |

### Return type

[**\Hostinger\Model\VPSV1DockerManagerProjectResource[]**](../Model/VPSV1DockerManagerProjectResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectLogsV1()`

```php
getProjectLogsV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1DockerManagerLogsResource[]
```

Get project logs

Retrieves aggregated log entries from all services within a Docker Compose project.   This endpoint returns recent log output from each container, organized by service name with timestamps.  The response contains the last 300 log entries across all services.   Use this for debugging, monitoring application behavior, and troubleshooting issues across your entire project stack.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->getProjectLogsV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->getProjectLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1DockerManagerLogsResource[]**](../Model/VPSV1DockerManagerLogsResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartProjectV1()`

```php
restartProjectV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1ActionActionResource
```

Restart project

Restarts all services in a Docker Compose project by stopping and starting containers in the correct dependency order.   This operation preserves data volumes and network configurations while refreshing the running containers.   Use this to apply configuration changes or recover from service failures.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->restartProjectV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->restartProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startProjectV1()`

```php
startProjectV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1ActionActionResource
```

Start project

Starts all services in a Docker Compose project that are currently stopped.   This operation brings up containers in the correct dependency order as defined in the compose file.   Use this to resume a project that was previously stopped or to start services after a system reboot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->startProjectV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->startProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopProjectV1()`

```php
stopProjectV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1ActionActionResource
```

Stop project

Stops all running services in a Docker Compose project while preserving container configurations and data volumes.   This operation gracefully shuts down containers in reverse dependency order.   Use this to temporarily halt a project without removing data or configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->stopProjectV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->stopProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectV1()`

```php
updateProjectV1($virtualMachineId, $projectName): \Hostinger\Model\VPSV1ActionActionResource
```

Update project

Updates a Docker Compose project by pulling the latest image versions and recreating containers with new configurations.   This operation preserves data volumes while applying changes from the compose file.   Use this to deploy application updates, apply configuration changes, or refresh container images to their latest versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\VPSDockerManagerApi(config: $config);
$virtualMachineId = 1268054; // int | Virtual Machine ID
$projectName = my-docker-project; // string | Docker Compose project name using alphanumeric characters, dashes, and underscores only

try {
    $result = $apiInstance->updateProjectV1($virtualMachineId, $projectName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VPSDockerManagerApi->updateProjectV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **virtualMachineId** | **int**| Virtual Machine ID | |
| **projectName** | **string**| Docker Compose project name using alphanumeric characters, dashes, and underscores only | |

### Return type

[**\Hostinger\Model\VPSV1ActionActionResource**](../Model/VPSV1ActionActionResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
