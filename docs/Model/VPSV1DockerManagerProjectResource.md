# # VPSV1DockerManagerProjectResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Docker Compose project name (derived from directory name or compose file) |
**status** | **string** | Raw output from docker compose ps command showing service count and states |
**state** | **string** | Derived project state parsed from the raw docker compose status |
**path** | **string** | Full filesystem path to the docker-compose.yml file |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
