# Sendbird\AnnouncementApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDetailedOpenRateOfAnnouncementGroup()**](AnnouncementApi.md#getDetailedOpenRateOfAnnouncementGroup) | **GET** /v3/announcement_open_rate_by_group/{announcement_group} | Get detailed open rate of an announcement group
[**getStatistics()**](AnnouncementApi.md#getStatistics) | **GET** /v3/announcement_stats/weekly | Get statistics - weekly
[**getStatisticsDaily()**](AnnouncementApi.md#getStatisticsDaily) | **GET** /v3/announcement_stats/daily | Get statistics - daily
[**getStatisticsMonthly()**](AnnouncementApi.md#getStatisticsMonthly) | **GET** /v3/announcement_stats/monthly | Get statistics - monthly
[**listAnnouncementGroups()**](AnnouncementApi.md#listAnnouncementGroups) | **GET** /v3/announcement_group | List announcement groups
[**scheduleAnnouncement()**](AnnouncementApi.md#scheduleAnnouncement) | **POST** /v3/announcements | Schedule an announcement
[**updateAnnouncementById()**](AnnouncementApi.md#updateAnnouncementById) | **PUT** /v3/announcements/{unique_id} | Update an announcement
[**viewAnnouncementById()**](AnnouncementApi.md#viewAnnouncementById) | **GET** /v3/announcements/{unique_id} | View an announcement


## `getDetailedOpenRateOfAnnouncementGroup()`

```php
getDetailedOpenRateOfAnnouncementGroup($api_token, $announcement_group): \Sendbird\Model\GetDetailedOpenRateOfAnnouncementGroupResponse
```

Get detailed open rate of an announcement group

## Get detailed open rate of an announcement group  Retrieves the detailed open rate information of an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-detailed-open-rate-of-an-announcement-group ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$announcement_group = 'announcement_group_example'; // string

try {
    $result = $apiInstance->getDetailedOpenRateOfAnnouncementGroup($api_token, $announcement_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->getDetailedOpenRateOfAnnouncementGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **announcement_group** | **string**|  |

### Return type

[**\Sendbird\Model\GetDetailedOpenRateOfAnnouncementGroupResponse**](../Model/GetDetailedOpenRateOfAnnouncementGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatistics()`

```php
getStatistics($api_token): \Sendbird\Model\GetStatisticsResponse
```

Get statistics - weekly

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getStatistics($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\GetStatisticsResponse**](../Model/GetStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatisticsDaily()`

```php
getStatisticsDaily($api_token, $start_date, $end_date, $start_week, $end_week, $start_month, $end_month, $announcement_group): \Sendbird\Model\GetStatisticsDailyResponse
```

Get statistics - daily

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$start_week = 'start_week_example'; // string
$end_week = 'end_week_example'; // string
$start_month = 'start_month_example'; // string
$end_month = 'end_month_example'; // string
$announcement_group = 'announcement_group_example'; // string

try {
    $result = $apiInstance->getStatisticsDaily($api_token, $start_date, $end_date, $start_week, $end_week, $start_month, $end_month, $announcement_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->getStatisticsDaily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **start_date** | **string**|  |
 **end_date** | **string**|  |
 **start_week** | **string**|  |
 **end_week** | **string**|  |
 **start_month** | **string**|  |
 **end_month** | **string**|  |
 **announcement_group** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GetStatisticsDailyResponse**](../Model/GetStatisticsDailyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatisticsMonthly()`

```php
getStatisticsMonthly($api_token): \Sendbird\Model\GetStatisticsMonthlyResponse
```

Get statistics - monthly

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getStatisticsMonthly($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->getStatisticsMonthly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\GetStatisticsMonthlyResponse**](../Model/GetStatisticsMonthlyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAnnouncementGroups()`

```php
listAnnouncementGroups($api_token, $token, $limit): \Sendbird\Model\ListAnnouncementGroupsResponse
```

List announcement groups

## List announcement groups  Retrieves a list of announcement groups.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-list-announcement-groups ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listAnnouncementGroups($api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->listAnnouncementGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListAnnouncementGroupsResponse**](../Model/ListAnnouncementGroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleAnnouncement()`

```php
scheduleAnnouncement($api_token, $schedule_announcement_data): \Sendbird\Model\ScheduleAnnouncementResponse
```

Schedule an announcement

## Schedule an announcement  Schedules a new announcement. You can also schedule an announcement in the [Sendbird Dashboard](https://dashboard.sendbird.com).  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-schedule-an-announcement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$schedule_announcement_data = new \Sendbird\Model\ScheduleAnnouncementData(); // \Sendbird\Model\ScheduleAnnouncementData

try {
    $result = $apiInstance->scheduleAnnouncement($api_token, $schedule_announcement_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->scheduleAnnouncement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **schedule_announcement_data** | [**\Sendbird\Model\ScheduleAnnouncementData**](../Model/ScheduleAnnouncementData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ScheduleAnnouncementResponse**](../Model/ScheduleAnnouncementResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnnouncementById()`

```php
updateAnnouncementById($api_token, $unique_id, $update_announcement_by_id_data): \Sendbird\Model\UpdateAnnouncementByIdResponse
```

Update an announcement

## Update an announcement  Updates information of a specific announcement before it starts or changes the status of a specific announcement after it starts. For the 2 different applications, refer to the request body below.  >__Note__: Updating information of an announcement is possible only when the announcement status is scheduled, indicating it hasn't started yet.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-update-an-announcement ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string
$update_announcement_by_id_data = new \Sendbird\Model\UpdateAnnouncementByIdData(); // \Sendbird\Model\UpdateAnnouncementByIdData

try {
    $result = $apiInstance->updateAnnouncementById($api_token, $unique_id, $update_announcement_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->updateAnnouncementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **unique_id** | **string**|  |
 **update_announcement_by_id_data** | [**\Sendbird\Model\UpdateAnnouncementByIdData**](../Model/UpdateAnnouncementByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateAnnouncementByIdResponse**](../Model/UpdateAnnouncementByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewAnnouncementById()`

```php
viewAnnouncementById($api_token, $unique_id): \Sendbird\Model\ViewAnnouncementByIdResponse
```

View an announcement

## View an announcement  Retrieves information on a specific announcement.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-view-an-announcement ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string

try {
    $result = $apiInstance->viewAnnouncementById($api_token, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->viewAnnouncementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **unique_id** | **string**|  |

### Return type

[**\Sendbird\Model\ViewAnnouncementByIdResponse**](../Model/ViewAnnouncementByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
