# Sendbird\StatisticsApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDetailedOpenRateOfAnnouncementById()**](StatisticsApi.md#getDetailedOpenRateOfAnnouncementById) | **GET** /v3/announcement_open_rate/{unique_id} | Get detailed open rate of an announcement
[**getDetailedOpenStatusOfAnnouncementById()**](StatisticsApi.md#getDetailedOpenStatusOfAnnouncementById) | **GET** /v3/announcement_open_status/{unique_id} | Get detailed open status of an announcement
[**retrieveAdvancedAnalyticsMetrics()**](StatisticsApi.md#retrieveAdvancedAnalyticsMetrics) | **GET** /v3/statistics/metric | Retrieve Advanced analytics metrics
[**viewNumberOfConcurrentConnections()**](StatisticsApi.md#viewNumberOfConcurrentConnections) | **GET** /v3/applications/ccu | View number of concurrent connections
[**viewNumberOfDailyActiveUsers()**](StatisticsApi.md#viewNumberOfDailyActiveUsers) | **GET** /v3/applications/dau | View number of daily active users
[**viewNumberOfMonthlyActiveUsers()**](StatisticsApi.md#viewNumberOfMonthlyActiveUsers) | **GET** /v3/applications/mau | View number of monthly active users
[**viewNumberOfPeakConnections()**](StatisticsApi.md#viewNumberOfPeakConnections) | **GET** /v3/applications/peak_connections | View number of peak connections


## `getDetailedOpenRateOfAnnouncementById()`

```php
getDetailedOpenRateOfAnnouncementById($api_token, $unique_id): \Sendbird\Model\GetDetailedOpenRateOfAnnouncementByIdResponse
```

Get detailed open rate of an announcement

## Get detailed open rate of an announcement  Retrieves the detailed open rate information of an announcement.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-detailed-open-rate-of-an-announcement ----------------------------   `unique_id`      Type: string      Description: Specifies the unique ID of the announcement to get its open rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string

try {
    $result = $apiInstance->getDetailedOpenRateOfAnnouncementById($api_token, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getDetailedOpenRateOfAnnouncementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **unique_id** | **string**|  |

### Return type

[**\Sendbird\Model\GetDetailedOpenRateOfAnnouncementByIdResponse**](../Model/GetDetailedOpenRateOfAnnouncementByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDetailedOpenStatusOfAnnouncementById()`

```php
getDetailedOpenStatusOfAnnouncementById($api_token, $unique_id, $limit, $next, $unique_ids, $channel_urls, $has_opened): \Sendbird\Model\GetDetailedOpenStatusOfAnnouncementByIdResponse
```

Get detailed open status of an announcement

## Get detailed open status of an announcement  Retrieves the detailed open status information of a specific announcement.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-detailed-open-status-of-an-announcement ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string
$limit = 56; // int
$next = 'next_example'; // string
$unique_ids = array('unique_ids_example'); // string[]
$channel_urls = array('channel_urls_example'); // string[]
$has_opened = True; // bool

try {
    $result = $apiInstance->getDetailedOpenStatusOfAnnouncementById($api_token, $unique_id, $limit, $next, $unique_ids, $channel_urls, $has_opened);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getDetailedOpenStatusOfAnnouncementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **unique_id** | **string**|  |
 **limit** | **int**|  | [optional]
 **next** | **string**|  | [optional]
 **unique_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **channel_urls** | [**string[]**](../Model/string.md)|  | [optional]
 **has_opened** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\GetDetailedOpenStatusOfAnnouncementByIdResponse**](../Model/GetDetailedOpenStatusOfAnnouncementByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAdvancedAnalyticsMetrics()`

```php
retrieveAdvancedAnalyticsMetrics($api_token): \Sendbird\Model\RetrieveAdvancedAnalyticsMetricsResponse
```

Retrieve Advanced analytics metrics

## Retrieve Advanced analytics metrics  Retrieves Advanced analytics metrics based on the specified parameters. You can retrieve either daily or monthly metrics using the time_dimension parameter.  >__Note__: Daily metrics are calculated and updated every three hours, starting at 1 a.m. in UTC. Meanwhile, monthly metrics are calculated after the last day of the month.  https://sendbird.com/docs/chat/v3/platform-api/guides/advanced-analytics#2-retrieve-advanced-analytics-metrics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->retrieveAdvancedAnalyticsMetrics($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->retrieveAdvancedAnalyticsMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\RetrieveAdvancedAnalyticsMetricsResponse**](../Model/RetrieveAdvancedAnalyticsMetricsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfConcurrentConnections()`

```php
viewNumberOfConcurrentConnections($api_token): \Sendbird\Model\ViewNumberOfConcurrentConnectionsResponse
```

View number of concurrent connections

## View number of concurrent connections  Retrieves the number of devices and opened browser tabs which are currently connected to Sendbird server.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-concurrent-connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfConcurrentConnections($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfConcurrentConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ViewNumberOfConcurrentConnectionsResponse**](../Model/ViewNumberOfConcurrentConnectionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfDailyActiveUsers()`

```php
viewNumberOfDailyActiveUsers($api_token, $date): \Sendbird\Model\ViewNumberOfDailyActiveUsersResponse
```

View number of daily active users

## View number of daily active users  Retrieves the number of daily active users of the application (DAU).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-daily-active-users ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$date = 'date_example'; // string

try {
    $result = $apiInstance->viewNumberOfDailyActiveUsers($api_token, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfDailyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **date** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfDailyActiveUsersResponse**](../Model/ViewNumberOfDailyActiveUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfMonthlyActiveUsers()`

```php
viewNumberOfMonthlyActiveUsers($api_token, $date): \Sendbird\Model\ViewNumberOfMonthlyActiveUsersResponse
```

View number of monthly active users

## View number of monthly active users  Retrieves the number of monthly active users of the application (MAU).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-monthly-active-users ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$date = 'date_example'; // string

try {
    $result = $apiInstance->viewNumberOfMonthlyActiveUsers($api_token, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfMonthlyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **date** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfMonthlyActiveUsersResponse**](../Model/ViewNumberOfMonthlyActiveUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfPeakConnections()`

```php
viewNumberOfPeakConnections($api_token, $time_dimension, $start_year, $start_month, $end_year, $end_month, $start_day, $end_day): \Sendbird\Model\ViewNumberOfPeakConnectionsResponse
```

View number of peak connections

## View number of peak connections  Retrieves the number of concurrently connected devices to Sendbird server during the requested time period.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-peak-connections ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$time_dimension = 'time_dimension_example'; // string
$start_year = 56; // int
$start_month = 56; // int
$end_year = 56; // int
$end_month = 56; // int
$start_day = 56; // int
$end_day = 56; // int

try {
    $result = $apiInstance->viewNumberOfPeakConnections($api_token, $time_dimension, $start_year, $start_month, $end_year, $end_month, $start_day, $end_day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfPeakConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **time_dimension** | **string**|  |
 **start_year** | **int**|  |
 **start_month** | **int**|  |
 **end_year** | **int**|  |
 **end_month** | **int**|  |
 **start_day** | **int**|  | [optional]
 **end_day** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfPeakConnectionsResponse**](../Model/ViewNumberOfPeakConnectionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
