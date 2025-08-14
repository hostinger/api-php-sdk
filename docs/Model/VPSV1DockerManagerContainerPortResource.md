# # VPSV1DockerManagerContainerPortResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Port mapping type - published (accessible from host), exposed (only internal), or range variants |
**protocol** | **string** | Network protocol used for communication |
**hostIp** | **string** | IP address on host where port is bound (null for exposed-only ports) |
**hostPort** | **int** | Port number on host machine (null for exposed-only or range ports) |
**containerPort** | **int** | Port number inside container (null for range ports) |
**hostPortStart** | **int** | Starting port number in host port range (null for single ports) |
**hostPortEnd** | **int** | Ending port number in host port range (null for single ports) |
**containerPortStart** | **int** | Starting port number in container port range (null for single ports) |
**containerPortEnd** | **int** | Ending port number in container port range (null for single ports) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
