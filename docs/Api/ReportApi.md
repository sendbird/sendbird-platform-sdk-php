# Sendbird\ReportApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listReports()**](ReportApi.md#listReports) | **GET** /v3/report | List reports
[**listReportsOnChannelByUrl()**](ReportApi.md#listReportsOnChannelByUrl) | **GET** /v3/report/{channel_type}/{channel_url} | List reports on a channel
[**listReportsOnMessageById()**](ReportApi.md#listReportsOnMessageById) | **GET** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | List reports on a message
[**listReportsOnUserById()**](ReportApi.md#listReportsOnUserById) | **GET** /v3/report/users/{offending_user_id} | List reports on a user
[**reportChannelByUrl()**](ReportApi.md#reportChannelByUrl) | **POST** /v3/report/{channel_type}/{channel_url} | Report a channel
[**reportMessageById()**](ReportApi.md#reportMessageById) | **POST** /v3/report/{channel_type}/{channel_url}/messages/{message_id} | Report a message
[**reportUserById()**](ReportApi.md#reportUserById) | **POST** /v3/report/users/{offending_user_id} | Report a user
[**viewModeratedMessageById()**](ReportApi.md#viewModeratedMessageById) | **GET** /v3/report/{channel_type}/{channel_url}/profanity_messages/{message_id} | View a moderated message


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



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['start_ts'] = 56; // int
$associate_array['end_ts'] = 56; // int

try {
    $result = $apiInstance->listReports($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->listReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
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
listReportsOnChannelByUrl($api_token, $channel_type, $channel_url, $token, $limit): \Sendbird\Model\ListReportsOnChannelByUrlResponse
```

List reports on a channel

## List reports on a channel  Retrieves a list of reports on a channel that has offensive messages or abusive activities.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-channel ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which is reported for offensive messages or inappropriate activities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['channel_type'] = 'channel_type_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listReportsOnChannelByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->listReportsOnChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
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
listReportsOnMessageById($api_token, $channel_type, $channel_url, $message_id, $token, $limit): \Sendbird\Model\ListReportsOnMessageByIdResponse
```

List reports on a message

## List reports on a message  Retrieves a list of reports on a message which contains suspicious, harassing, or inappropriate content.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-message ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel where the reported message is in.  `message_id`      Type: string      Description: Specifies the unique ID of the reported message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['channel_type'] = 'channel_type_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['message_id'] = 'message_id_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listReportsOnMessageById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->listReportsOnMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
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
listReportsOnUserById($api_token, $offending_user_id, $token, $limit): \Sendbird\Model\ListReportsOnUserByIdResponse
```

List reports on a user

## List reports on a user  Retrieves a list of reports on a user who sends an offensive message.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-list-reports-on-a-user ----------------------------   `offending_user_id`      Type: string      Description: Specifies the unique ID of the user who has sent the message to report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['offending_user_id'] = 'offending_user_id_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listReportsOnUserById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->listReportsOnUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **offending_user_id** | **string**|  |
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
reportChannelByUrl($api_token, $channel_type, $channel_url, $report_channel_by_url_data): \Sendbird\Model\ReportChannelByUrlResponse
```

Report a channel

## Report a channel  Reports a channel that has offensive messages or abusive activities.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['channel_type'] = 'channel_type_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['report_channel_by_url_data'] = new \Sendbird\Model\ReportChannelByUrlData(); // \Sendbird\Model\ReportChannelByUrlData

try {
    $result = $apiInstance->reportChannelByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
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
reportMessageById($api_token, $channel_type, $channel_url, $message_id, $report_message_by_id_data): \Sendbird\Model\ReportMessageByIdResponse
```

Report a message

## Report a message  Reports a message which contains suspicious, harassing, or inappropriate content.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['channel_type'] = 'channel_type_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['message_id'] = 'message_id_example'; // string
$associate_array['report_message_by_id_data'] = new \Sendbird\Model\ReportMessageByIdData(); // \Sendbird\Model\ReportMessageByIdData

try {
    $result = $apiInstance->reportMessageById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
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
reportUserById($api_token, $offending_user_id, $report_user_by_id_data): \Sendbird\Model\ReportUserByIdResponse
```

Report a user

## Report a user  Reports a user who sends an offensive message in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-report-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['offending_user_id'] = 'offending_user_id_example'; // string
$associate_array['report_user_by_id_data'] = new \Sendbird\Model\ReportUserByIdData(); // \Sendbird\Model\ReportUserByIdData

try {
    $result = $apiInstance->reportUserById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **offending_user_id** | **string**|  |
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
viewModeratedMessageById($api_token, $channel_type, $channel_url, $message_id): object
```

View a moderated message

## View a moderated message  Retrieves information on a message that has been moderated by the [profanity filter](https://sendbird.com/docs/chat/v3/platform-api/guides/filter-and-moderation#2-profanity-filter).  https://sendbird.com/docs/chat/v3/platform-api/guides/report-content-and-subject#2-view-a-moderated-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['channel_type'] = 'channel_type_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['message_id'] = 'message_id_example'; // string

try {
    $result = $apiInstance->viewModeratedMessageById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->viewModeratedMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
