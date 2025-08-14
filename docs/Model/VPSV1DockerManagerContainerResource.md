# # VPSV1DockerManagerContainerResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique container identifier (short form of Docker container ID) |
**name** | **string** | Container name as defined in docker-compose or assigned by Docker |
**image** | **string** | Docker image name and tag used to create this container |
**command** | **string** | Command being executed inside the container (may be truncated with ...) |
**status** | **string** | Human-readable container status including uptime, exit codes, or error information |
**state** | **string** | Programmatic container lifecycle state for automated processing |
**ports** | [**\Hostinger\Model\VPSV1DockerManagerContainerPortCollection**](VPSV1DockerManagerContainerPortCollection.md) |  |
**stats** | [**\Hostinger\Model\VPSV1DockerManagerContainerStatsResource**](VPSV1DockerManagerContainerStatsResource.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
