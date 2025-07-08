# Sendbird\AnnouncementApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**scheduleAnAnnouncement()**](AnnouncementApi.md#scheduleAnAnnouncement) | **POST** /v3/announcements | Schedule an announcement


## `scheduleAnAnnouncement()`

```php
scheduleAnAnnouncement($api_token, $schedule_an_announcement_request): \Sendbird\Model\ScheduleAnAnnouncementResponse
```

Schedule an announcement

## Schedule an announcement  Creates an announcement. You can also schedule an announcement in the [Sendbird Dashboard](https://dashboard.sendbird.com).  [https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement](https://sendbird.com/docs/chat/platform-api/v3/message/announcements/create-an-announcement#1-create-an-announcement)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\AnnouncementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['schedule_an_announcement_request'] = new \Sendbird\Model\ScheduleAnAnnouncementRequest(); // \Sendbird\Model\ScheduleAnAnnouncementRequest

try {
    $result = $apiInstance->scheduleAnAnnouncement($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementApi->scheduleAnAnnouncement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **schedule_an_announcement_request** | [**\Sendbird\Model\ScheduleAnAnnouncementRequest**](../Model/ScheduleAnAnnouncementRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\ScheduleAnAnnouncementResponse**](../Model/ScheduleAnAnnouncementResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
