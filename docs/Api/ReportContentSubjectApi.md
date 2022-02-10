# Sendbird\ReportContentSubjectApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listReports()**](ReportContentSubjectApi.md#listReports) | **GET** /v3/report | List reports
[**listReportsOnChannelByUrl()**](ReportContentSubjectApi.md#listReportsOnChannelByUrl) | **GET** /v3/report/{channel_type}/{channel_url} | List reports on a channel
[**listReportsOnMessageById()**](ReportContentSubjectApi.md#listReportsOnMessageById) | **GET** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | List reports on a message
[**listReportsOnUserById()**](ReportContentSubjectApi.md#listReportsOnUserById) | **GET** /v3/report/users/{offending_user_id} | List reports on a user
[**reportChannelByUrl()**](ReportContentSubjectApi.md#reportChannelByUrl) | **POST** /v3/report/{channel_type}/{channel_url} | Report a channel
[**reportMessageById()**](ReportContentSubjectApi.md#reportMessageById) | **POST** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | Report a message
[**reportUserById()**](ReportContentSubjectApi.md#reportUserById) | **POST** /v3/report/users/{offending_user_id} | Report a user
[**viewModeratedMessageById()**](ReportContentSubjectApi.md#viewModeratedMessageById) | **GET** /v3/report/{channel_type}/{channel_url}/profanity_messages/{message_id} | View a moderated message


## `listReports()`

```php
listReports($api_token, $token, $limit, $start_ts, $end_ts): \Sendbird\Model\ListReportsResponse
```

List reports

## List reports  Retrieves a list of reports within an application regardless of object types.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int
$start_ts = 56; // int
$end_ts = 56; // int

try {
    $result = $apiInstance->listReports($api_token, $token, $limit, $start_ts, $end_ts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->listReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **start_ts** | **int**|  | [optional]
 **end_ts** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListReportsResponse**](../Model/ListReportsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReportsOnChannelByUrl()`

```php
listReportsOnChannelByUrl($channel_type, $channel_url, $api_token, $token, $limit): \Sendbird\Model\ListReportsOnChannelByUrlResponse
```

List reports on a channel

## List reports on a channel  Retrieves a list of reports on a channel that has offensive messages or abusive activities.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-channel ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which is reported for offensive messages or inappropriate activities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listReportsOnChannelByUrl($channel_type, $channel_url, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->listReportsOnChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListReportsOnChannelByUrlResponse**](../Model/ListReportsOnChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReportsOnMessageById()`

```php
listReportsOnMessageById($channel_type, $channel_url, $message_id, $api_token, $token, $limit): \Sendbird\Model\ListReportsOnMessageByIdResponse
```

List reports on a message

## List reports on a message  Retrieves a list of reports on a message which contains suspicious, harassing, or inappropriate content.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-message ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel where the reported message is in.  `message_id`      Type: string      Description: Specifies the unique ID of the reported message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listReportsOnMessageById($channel_type, $channel_url, $message_id, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->listReportsOnMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListReportsOnMessageByIdResponse**](../Model/ListReportsOnMessageByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listReportsOnUserById()`

```php
listReportsOnUserById($offending_user_id, $api_token, $token, $limit): \Sendbird\Model\ListReportsOnUserByIdResponse
```

List reports on a user

## List reports on a user  Retrieves a list of reports on a user who sends an offensive message.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-user ----------------------------   `offending_user_id`      Type: string      Description: Specifies the unique ID of the user who has sent the message to report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offending_user_id = 'offending_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listReportsOnUserById($offending_user_id, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->listReportsOnUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offending_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListReportsOnUserByIdResponse**](../Model/ListReportsOnUserByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportChannelByUrl()`

```php
reportChannelByUrl($channel_type, $channel_url, $api_token, $report_channel_by_url_data): \Sendbird\Model\ReportChannelByUrlResponse
```

Report a channel

## Report a channel  Reports a channel that has offensive messages or abusive activities.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$report_channel_by_url_data = new \Sendbird\Model\ReportChannelByUrlData(); // \Sendbird\Model\ReportChannelByUrlData

try {
    $result = $apiInstance->reportChannelByUrl($channel_type, $channel_url, $api_token, $report_channel_by_url_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->reportChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **report_channel_by_url_data** | [**\Sendbird\Model\ReportChannelByUrlData**](../Model/ReportChannelByUrlData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ReportChannelByUrlResponse**](../Model/ReportChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportMessageById()`

```php
reportMessageById($channel_type, $channel_url, $message_id, $api_token, $report_message_by_id_data): \Sendbird\Model\ReportMessageByIdResponse
```

Report a message

## Report a message  Reports a message which contains suspicious, harassing, or inappropriate content.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$report_message_by_id_data = new \Sendbird\Model\ReportMessageByIdData(); // \Sendbird\Model\ReportMessageByIdData

try {
    $result = $apiInstance->reportMessageById($channel_type, $channel_url, $message_id, $api_token, $report_message_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->reportMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **report_message_by_id_data** | [**\Sendbird\Model\ReportMessageByIdData**](../Model/ReportMessageByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ReportMessageByIdResponse**](../Model/ReportMessageByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportUserById()`

```php
reportUserById($offending_user_id, $api_token, $report_user_by_id_data): \Sendbird\Model\ReportUserByIdResponse
```

Report a user

## Report a user  Reports a user who sends an offensive message in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offending_user_id = 'offending_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$report_user_by_id_data = new \Sendbird\Model\ReportUserByIdData(); // \Sendbird\Model\ReportUserByIdData

try {
    $result = $apiInstance->reportUserById($offending_user_id, $api_token, $report_user_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->reportUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offending_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **report_user_by_id_data** | [**\Sendbird\Model\ReportUserByIdData**](../Model/ReportUserByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ReportUserByIdResponse**](../Model/ReportUserByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewModeratedMessageById()`

```php
viewModeratedMessageById($channel_type, $channel_url, $message_id, $api_token): array<string,string>
```

View a moderated message

## View a moderated message  Retrieves information on a message that has been moderated by the [profanity filter](https://sendbird.com/docs/chat/v3/platform-api/guides/filter-and-moderation#2-profanity-filter).  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-view-a-moderated-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportContentSubjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewModeratedMessageById($channel_type, $channel_url, $message_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportContentSubjectApi->viewModeratedMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
