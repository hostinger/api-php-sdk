# Hostinger\MailLogsApi

All URIs are relative to https://developers.hostinger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAccessLogsV1()**](MailLogsApi.md#listAccessLogsV1) | **GET** /api/mail/v1/orders/{orderId}/logs/access | List access logs |
| [**listActionLogsV1()**](MailLogsApi.md#listActionLogsV1) | **GET** /api/mail/v1/orders/{orderId}/logs/action | List action logs |
| [**listInboundLogsV1()**](MailLogsApi.md#listInboundLogsV1) | **GET** /api/mail/v1/orders/{orderId}/logs/inbound | List inbound logs |
| [**listMailboxActionLogsV1()**](MailLogsApi.md#listMailboxActionLogsV1) | **GET** /api/mail/v1/orders/{orderId}/logs/mailbox-actions | List mailbox action logs |
| [**listOutboundLogsV1()**](MailLogsApi.md#listOutboundLogsV1) | **GET** /api/mail/v1/orders/{orderId}/logs/outbound | List outbound logs |


## `listAccessLogsV1()`

```php
listAccessLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $protocol, $hasDeletions, $page, $perPage): \Hostinger\Model\MailListAccessLogsV1200Response
```

List access logs

Retrieve paginated access logs for the domain attached to the given mail order. Supports filtering by account, date range, protocol, status, and deletion flag. Results are sorted by timestamp descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailLogsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$account = user@example.com; // string | Filter log entries by a specific email account
$date = Mon Mar 16 00:00:00 UTC 2026; // \DateTime | Exact date filter (YYYY-MM-DD). Takes precedence over `from_date`/`to_date` when both are given.
$fromDate = 2026-03-01T00:00Z; // \DateTime | Date range start (RFC 3339)
$toDate = 2026-03-31T23:59:59Z; // \DateTime | Date range end (RFC 3339)
$status = Successful; // string | Filter log entries by status
$protocol = imap; // string | Filter access log entries by protocol
$hasDeletions = false; // bool | Filter access log entries by whether the session had deletions
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listAccessLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $protocol, $hasDeletions, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailLogsApi->listAccessLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **account** | **string**| Filter log entries by a specific email account | [optional] |
| **date** | **\DateTime**| Exact date filter (YYYY-MM-DD). Takes precedence over &#x60;from_date&#x60;/&#x60;to_date&#x60; when both are given. | [optional] |
| **fromDate** | **\DateTime**| Date range start (RFC 3339) | [optional] |
| **toDate** | **\DateTime**| Date range end (RFC 3339) | [optional] |
| **status** | **string**| Filter log entries by status | [optional] |
| **protocol** | **string**| Filter access log entries by protocol | [optional] |
| **hasDeletions** | **bool**| Filter access log entries by whether the session had deletions | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListAccessLogsV1200Response**](../Model/MailListAccessLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActionLogsV1()`

```php
listActionLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $page, $perPage): \Hostinger\Model\MailListActionLogsV1200Response
```

List action logs

Retrieve paginated account action logs (administrative and user actions) for the given mail order. Supports filtering by account, date range, and status. Results are sorted by timestamp descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailLogsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$account = user@example.com; // string | Filter log entries by a specific email account
$date = Mon Mar 16 00:00:00 UTC 2026; // \DateTime | Exact date filter (YYYY-MM-DD). Takes precedence over `from_date`/`to_date` when both are given.
$fromDate = 2026-03-01T00:00Z; // \DateTime | Date range start (RFC 3339)
$toDate = 2026-03-31T23:59:59Z; // \DateTime | Date range end (RFC 3339)
$status = Successful; // string | Filter log entries by status
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listActionLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailLogsApi->listActionLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **account** | **string**| Filter log entries by a specific email account | [optional] |
| **date** | **\DateTime**| Exact date filter (YYYY-MM-DD). Takes precedence over &#x60;from_date&#x60;/&#x60;to_date&#x60; when both are given. | [optional] |
| **fromDate** | **\DateTime**| Date range start (RFC 3339) | [optional] |
| **toDate** | **\DateTime**| Date range end (RFC 3339) | [optional] |
| **status** | **string**| Filter log entries by status | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListActionLogsV1200Response**](../Model/MailListActionLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboundLogsV1()`

```php
listInboundLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $sender, $recipient, $page, $perPage): \Hostinger\Model\MailListInboundLogsV1200Response
```

List inbound logs

Retrieve paginated inbound (received mail) delivery logs for the domain attached to the given mail order. Supports filtering by account, date range, status, sender, and recipient. Results are sorted by timestamp descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailLogsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$account = user@example.com; // string | Filter log entries by a specific email account
$date = Mon Mar 16 00:00:00 UTC 2026; // \DateTime | Exact date filter (YYYY-MM-DD). Takes precedence over `from_date`/`to_date` when both are given.
$fromDate = 2026-03-01T00:00Z; // \DateTime | Date range start (RFC 3339)
$toDate = 2026-03-31T23:59:59Z; // \DateTime | Date range end (RFC 3339)
$status = Successful; // string | Filter log entries by status
$sender = user@example.com; // string | Filter log entries by sender. Accepts a full email address or a domain.
$recipient = recipient.com; // string | Filter log entries by recipient. Accepts a full email address or a domain.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listInboundLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $sender, $recipient, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailLogsApi->listInboundLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **account** | **string**| Filter log entries by a specific email account | [optional] |
| **date** | **\DateTime**| Exact date filter (YYYY-MM-DD). Takes precedence over &#x60;from_date&#x60;/&#x60;to_date&#x60; when both are given. | [optional] |
| **fromDate** | **\DateTime**| Date range start (RFC 3339) | [optional] |
| **toDate** | **\DateTime**| Date range end (RFC 3339) | [optional] |
| **status** | **string**| Filter log entries by status | [optional] |
| **sender** | **string**| Filter log entries by sender. Accepts a full email address or a domain. | [optional] |
| **recipient** | **string**| Filter log entries by recipient. Accepts a full email address or a domain. | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListInboundLogsV1200Response**](../Model/MailListInboundLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMailboxActionLogsV1()`

```php
listMailboxActionLogsV1($orderId, $email, $date, $fromDate, $toDate, $event, $page, $perPage): \Hostinger\Model\MailListMailboxActionLogsV1200Response
```

List mailbox action logs

Retrieve paginated mailbox action logs (message and mailbox events) for a mailbox in the given mail order. The mailbox email must belong to the order's domain. Supports date range and event type filters. Results are sorted by timestamp descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailLogsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$email = user@example.com; // string | Mailbox email address. Must belong to the order's domain.
$date = Mon Mar 16 00:00:00 UTC 2026; // \DateTime | Exact date filter (YYYY-MM-DD). Takes precedence over `from_date`/`to_date` when both are given.
$fromDate = 2026-03-01T00:00Z; // \DateTime | Date range start (RFC 3339)
$toDate = 2026-03-31T23:59:59Z; // \DateTime | Date range end (RFC 3339)
$event = MessageNew; // string | Filter mailbox action log entries by event type
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listMailboxActionLogsV1($orderId, $email, $date, $fromDate, $toDate, $event, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailLogsApi->listMailboxActionLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **email** | **string**| Mailbox email address. Must belong to the order&#39;s domain. | |
| **date** | **\DateTime**| Exact date filter (YYYY-MM-DD). Takes precedence over &#x60;from_date&#x60;/&#x60;to_date&#x60; when both are given. | [optional] |
| **fromDate** | **\DateTime**| Date range start (RFC 3339) | [optional] |
| **toDate** | **\DateTime**| Date range end (RFC 3339) | [optional] |
| **event** | **string**| Filter mailbox action log entries by event type | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListMailboxActionLogsV1200Response**](../Model/MailListMailboxActionLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOutboundLogsV1()`

```php
listOutboundLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $sender, $recipient, $page, $perPage): \Hostinger\Model\MailListInboundLogsV1200Response
```

List outbound logs

Retrieve paginated outbound (sent mail) delivery logs for the domain attached to the given mail order. Supports filtering by account, date range, status, sender, and recipient. Results are sorted by timestamp descending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\MailLogsApi(config: $config);
$orderId = OR1a2b3c4d5e6f7g; // string | Order resource ID
$account = user@example.com; // string | Filter log entries by a specific email account
$date = Mon Mar 16 00:00:00 UTC 2026; // \DateTime | Exact date filter (YYYY-MM-DD). Takes precedence over `from_date`/`to_date` when both are given.
$fromDate = 2026-03-01T00:00Z; // \DateTime | Date range start (RFC 3339)
$toDate = 2026-03-31T23:59:59Z; // \DateTime | Date range end (RFC 3339)
$status = Successful; // string | Filter log entries by status
$sender = user@example.com; // string | Filter log entries by sender. Accepts a full email address or a domain.
$recipient = recipient.com; // string | Filter log entries by recipient. Accepts a full email address or a domain.
$page = 1; // int | Page number
$perPage = 25; // int | Number of items per page

try {
    $result = $apiInstance->listOutboundLogsV1($orderId, $account, $date, $fromDate, $toDate, $status, $sender, $recipient, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailLogsApi->listOutboundLogsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Order resource ID | |
| **account** | **string**| Filter log entries by a specific email account | [optional] |
| **date** | **\DateTime**| Exact date filter (YYYY-MM-DD). Takes precedence over &#x60;from_date&#x60;/&#x60;to_date&#x60; when both are given. | [optional] |
| **fromDate** | **\DateTime**| Date range start (RFC 3339) | [optional] |
| **toDate** | **\DateTime**| Date range end (RFC 3339) | [optional] |
| **status** | **string**| Filter log entries by status | [optional] |
| **sender** | **string**| Filter log entries by sender. Accepts a full email address or a domain. | [optional] |
| **recipient** | **string**| Filter log entries by recipient. Accepts a full email address or a domain. | [optional] |
| **page** | **int**| Page number | [optional] |
| **perPage** | **int**| Number of items per page | [optional] [default to 25] |

### Return type

[**\Hostinger\Model\MailListInboundLogsV1200Response**](../Model/MailListInboundLogsV1200Response.md)

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
