# Hostinger\DomainsMoveApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptIncomingDomainMoveV1()**](DomainsMoveApi.md#acceptIncomingDomainMoveV1) | **PUT** /api/domains/v1/move/incoming/{domain} | Accept incoming domain move |
| [**cancelOutgoingDomainMoveV1()**](DomainsMoveApi.md#cancelOutgoingDomainMoveV1) | **DELETE** /api/domains/v1/move/outgoing/{domain} | Cancel outgoing domain move |
| [**getIncomingDomainMoveListV1()**](DomainsMoveApi.md#getIncomingDomainMoveListV1) | **GET** /api/domains/v1/move/incoming | Get incoming domain move list |
| [**getIncomingDomainMoveV1()**](DomainsMoveApi.md#getIncomingDomainMoveV1) | **GET** /api/domains/v1/move/incoming/{domain} | Get incoming domain move |
| [**getOutgoingDomainMoveListV1()**](DomainsMoveApi.md#getOutgoingDomainMoveListV1) | **GET** /api/domains/v1/move/outgoing | Get outgoing domain move list |
| [**getOutgoingDomainMoveV1()**](DomainsMoveApi.md#getOutgoingDomainMoveV1) | **GET** /api/domains/v1/move/outgoing/{domain} | Get outgoing domain move |
| [**rejectIncomingDomainMoveV1()**](DomainsMoveApi.md#rejectIncomingDomainMoveV1) | **DELETE** /api/domains/v1/move/incoming/{domain} | Reject incoming domain move |
| [**startOutgoingDomainMoveV1()**](DomainsMoveApi.md#startOutgoingDomainMoveV1) | **POST** /api/domains/v1/move/outgoing/{domain} | Start outgoing domain move |


## `acceptIncomingDomainMoveV1()`

```php
acceptIncomingDomainMoveV1($domain, $domainsV1MoveIncomingUpdateRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Accept incoming domain move

Accept an incoming move for a specified domain.  The provided WHOIS profiles become the contacts of the domain, so they must belong to your account and satisfy the requirements of the TLD. Only the contact types the domain actually uses are applied, but all four profile IDs have to be provided.  The move has to still be waiting for your decision, already accepted moves cannot be accepted again.  Accepting does not complete the move. A confirmation email is sent to the email address of the new owner contact, and the domain changes hands only after the change is confirmed from it. Until then the move stays in the `activating` status, which can be followed with the [incoming move endpoint](#tag/domains-move).  Use this endpoint to take ownership of a domain offered to you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$domainsV1MoveIncomingUpdateRequest = new \Hostinger\Model\DomainsV1MoveIncomingUpdateRequest(); // \Hostinger\Model\DomainsV1MoveIncomingUpdateRequest

try {
    $result = $apiInstance->acceptIncomingDomainMoveV1($domain, $domainsV1MoveIncomingUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->acceptIncomingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **domainsV1MoveIncomingUpdateRequest** | [**\Hostinger\Model\DomainsV1MoveIncomingUpdateRequest**](../Model/DomainsV1MoveIncomingUpdateRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOutgoingDomainMoveV1()`

```php
cancelOutgoingDomainMoveV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Cancel outgoing domain move

Cancel an outgoing move for a specified domain.  The move can only be cancelled while the receiving account has not accepted it yet. The domain stays in your account.  Use this endpoint to withdraw a move you no longer want to complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->cancelOutgoingDomainMoveV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->cancelOutgoingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingDomainMoveListV1()`

```php
getIncomingDomainMoveListV1(): \Hostinger\Model\DomainsV1MoveMoveResource[]
```

Get incoming domain move list

Retrieve all domains other Hostinger accounts are moving to your account.  Moves of every status are returned, including the ones which already completed.  Use this endpoint to find domains waiting for you to accept them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);

try {
    $result = $apiInstance->getIncomingDomainMoveListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->getIncomingDomainMoveListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\DomainsV1MoveMoveResource[]**](../Model/DomainsV1MoveMoveResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomingDomainMoveV1()`

```php
getIncomingDomainMoveV1($domain, $forceSync): \Hostinger\Model\DomainsV1MoveMoveResource
```

Get incoming domain move

Retrieve the incoming move for a specified domain.  Returns 404 when no account is moving this domain to you.  Use this endpoint to check whether a domain addressed to you is still waiting to be accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$forceSync = true; // bool | Re-check the move against the registry before responding. Only has an effect while the move is in the `activating` status.

try {
    $result = $apiInstance->getIncomingDomainMoveV1($domain, $forceSync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->getIncomingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **forceSync** | **bool**| Re-check the move against the registry before responding. Only has an effect while the move is in the &#x60;activating&#x60; status. | [optional] [default to false] |

### Return type

[**\Hostinger\Model\DomainsV1MoveMoveResource**](../Model/DomainsV1MoveMoveResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutgoingDomainMoveListV1()`

```php
getOutgoingDomainMoveListV1(): \Hostinger\Model\DomainsV1MoveMoveResource[]
```

Get outgoing domain move list

Retrieve all domains you are moving to other Hostinger accounts.  Only moves which have not completed yet are returned.  Use this endpoint to track moves you have initiated and the accounts they are addressed to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);

try {
    $result = $apiInstance->getOutgoingDomainMoveListV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->getOutgoingDomainMoveListV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Hostinger\Model\DomainsV1MoveMoveResource[]**](../Model/DomainsV1MoveMoveResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutgoingDomainMoveV1()`

```php
getOutgoingDomainMoveV1($domain): \Hostinger\Model\DomainsV1MoveMoveResource
```

Get outgoing domain move

Retrieve the outgoing move for a specified domain.  Returns 404 when the domain has no move in progress.  Use this endpoint to track the status of a move you have initiated for a single domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->getOutgoingDomainMoveV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->getOutgoingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\DomainsV1MoveMoveResource**](../Model/DomainsV1MoveMoveResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectIncomingDomainMoveV1()`

```php
rejectIncomingDomainMoveV1($domain): \Hostinger\Model\CommonSuccessEmptyResource
```

Reject incoming domain move

Reject an incoming move for a specified domain.  The domain stays in the account which initiated the move. Moves you have already accepted cannot be rejected anymore.  Use this endpoint to decline a domain you do not want to take over.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name

try {
    $result = $apiInstance->rejectIncomingDomainMoveV1($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->rejectIncomingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startOutgoingDomainMoveV1()`

```php
startOutgoingDomainMoveV1($domain, $domainsV1MoveOutgoingStoreRequest): \Hostinger\Model\CommonSuccessEmptyResource
```

Start outgoing domain move

Initiate a move of a specified domain to another Hostinger account.  The receiving account has to already exist and accept the move before the domain changes hands.  The domain must be active. The subscription it belongs to is resolved automatically, and the request is rejected with a 404 status code when the domain has no domain subscription of its own.  Domains protected by premium protection require an additional verification step, such requests are rejected with a 428 status code.  Use this endpoint to hand a domain over to another Hostinger user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\DomainsMoveApi(config: $config);
$domain = mydomain.tld; // string | Domain name
$domainsV1MoveOutgoingStoreRequest = new \Hostinger\Model\DomainsV1MoveOutgoingStoreRequest(); // \Hostinger\Model\DomainsV1MoveOutgoingStoreRequest

try {
    $result = $apiInstance->startOutgoingDomainMoveV1($domain, $domainsV1MoveOutgoingStoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsMoveApi->startOutgoingDomainMoveV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain name | |
| **domainsV1MoveOutgoingStoreRequest** | [**\Hostinger\Model\DomainsV1MoveOutgoingStoreRequest**](../Model/DomainsV1MoveOutgoingStoreRequest.md)|  | |

### Return type

[**\Hostinger\Model\CommonSuccessEmptyResource**](../Model/CommonSuccessEmptyResource.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
