# Sendbird\StatisticsApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewNumberOfDailyActiveUsers()**](StatisticsApi.md#viewNumberOfDailyActiveUsers) | **GET** /v3/applications/dau | View number of daily active users
[**viewNumberOfMonthlyActiveUsers()**](StatisticsApi.md#viewNumberOfMonthlyActiveUsers) | **GET** /v3/applications/mau | View number of monthly active users


## `viewNumberOfDailyActiveUsers()`

```php
viewNumberOfDailyActiveUsers($date, $api_token): \Sendbird\Model\ViewNumberOfDailyActiveUsersResponse
```

View number of daily active users

## View number of daily active users  Retrieves the number of daily active users of an application.  > **Note**: This metric is scheduled to be calculated every 30 minutes, starting at 00:00 UTC, with the first update at 00:30 UTC.      [https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-daily-active-users#1-get-number-of-daily-active-users](https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-daily-active-users#1-get-number-of-daily-active-users)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['date'] = 'date_example'; // string | YYYY-MM-DD
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfDailyActiveUsers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfDailyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| YYYY-MM-DD | [optional]
 **api_token** | **string**|  | [optional]

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
viewNumberOfMonthlyActiveUsers($date, $api_token): \Sendbird\Model\ViewNumberOfMonthlyActiveUsersResponse
```

View number of monthly active users

## View number of monthly active users  Retrieves the number of monthly active users of an application.  > **Note**: This metric is scheduled to be calculated every 30 minutes, starting at 00:00 UTC, with the first update at 00:30 UTC.      [https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-monthly-active-users#1-get-number-of-monthly-active-users](https://sendbird.com/docs/chat/platform-api/v3/statistics/daus-and-maus/get-number-of-monthly-active-users#1-get-number-of-monthly-active-users)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['date'] = 'date_example'; // string | YYYY-MM-DD
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfMonthlyActiveUsers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->viewNumberOfMonthlyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| YYYY-MM-DD | [optional]
 **api_token** | **string**|  | [optional]

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
