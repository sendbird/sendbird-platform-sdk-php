# Sendbird\AnnouncementApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDetailedOpenRateOfAnnouncementById()**](AnnouncementApi.md#getDetailedOpenRateOfAnnouncementById) | **GET** /v3/announcement_open_rate/{unique_id} | Get detailed open rate of an announcement
[**getDetailedOpenRateOfAnnouncementGroup()**](AnnouncementApi.md#getDetailedOpenRateOfAnnouncementGroup) | **GET** /v3/announcement_open_rate_by_group/{announcement_group} | Get detailed open rate of an announcement group
[**getDetailedOpenStatusOfAnnouncementById()**](AnnouncementApi.md#getDetailedOpenStatusOfAnnouncementById) | **GET** /v3/announcement_open_status/{unique_id} | Get detailed open status of an announcement
[**viewAnnouncementById()**](AnnouncementApi.md#viewAnnouncementById) | **GET** /v3/announcements/{unique_id} | View an announcement


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



$apiInstance = new Sendbird\Api\AnnouncementApi(
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
    echo 'Exception when calling AnnouncementApi->getDetailedOpenRateOfAnnouncementById: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\AnnouncementApi(
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
    echo 'Exception when calling AnnouncementApi->getDetailedOpenStatusOfAnnouncementById: ', $e->getMessage(), PHP_EOL;
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
