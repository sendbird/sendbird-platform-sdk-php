# Sendbird\DataExportApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDataExportsByMessageChannelOrUser()**](DataExportApi.md#listDataExportsByMessageChannelOrUser) | **GET** /v3/export/{data_type} | List data exports by message, channel, or user
[**registerAndScheduleDataExport()**](DataExportApi.md#registerAndScheduleDataExport) | **POST** /v3/export/{data_type} | Register and schedule a data export
[**viewDataExportById()**](DataExportApi.md#viewDataExportById) | **GET** /v3/export/{data_type}/{request_id} | View a data export


## `listDataExportsByMessageChannelOrUser()`

```php
listDataExportsByMessageChannelOrUser($api_token, $data_type, $token, $limit): \Sendbird\Model\ListDataExportsByMessageChannelOrUserResponse
```

List data exports by message, channel, or user

## List data exports by message, channel, or user  Retrieves a list of message, channel or user data exports  https://sendbird.com/docs/chat/v3/platform-api/guides/data-export#2-list-data-exports-by-message,-channel,-or-user ----------------------------   `data_type`      Type: string      Description: Specifies the type of a data export to retrieve. Acceptable values are messages, channels, users, and failed_webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\DataExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['data_type'] = 'data_type_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listDataExportsByMessageChannelOrUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportApi->listDataExportsByMessageChannelOrUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **data_type** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListDataExportsByMessageChannelOrUserResponse**](../Model/ListDataExportsByMessageChannelOrUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerAndScheduleDataExport()`

```php
registerAndScheduleDataExport($api_token, $data_type, $register_and_schedule_data_export_data): \Sendbird\Model\RegisterAndScheduleDataExportResponse
```

Register and schedule a data export

## Register and schedule a data export  Registers and schedules a message, channel, or user data export.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-export#2-register-and-schedule-a-data-export ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\DataExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['data_type'] = 'data_type_example'; // string
$associate_array['register_and_schedule_data_export_data'] = new \Sendbird\Model\RegisterAndScheduleDataExportData(); // \Sendbird\Model\RegisterAndScheduleDataExportData

try {
    $result = $apiInstance->registerAndScheduleDataExport($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportApi->registerAndScheduleDataExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **data_type** | **string**|  |
 **register_and_schedule_data_export_data** | [**\Sendbird\Model\RegisterAndScheduleDataExportData**](../Model/RegisterAndScheduleDataExportData.md)|  | [optional]

### Return type

[**\Sendbird\Model\RegisterAndScheduleDataExportResponse**](../Model/RegisterAndScheduleDataExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewDataExportById()`

```php
viewDataExportById($api_token, $data_type, $request_id): \Sendbird\Model\ViewDataExportByIdResponse
```

View a data export

## View a data export  Retrieves information on a message, channel or user data export.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-export#2-view-a-data-export ----------------------------   `data_type`      Type: string      Description: Specifies the type of a targeted data export. Acceptable values are messages, channels,  users, and failed_webhooks.  `request_id`      Type: string      Description: Specifies the unique ID of a data export to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\DataExportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['data_type'] = 'data_type_example'; // string
$associate_array['request_id'] = 'request_id_example'; // string

try {
    $result = $apiInstance->viewDataExportById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportApi->viewDataExportById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **data_type** | **string**|  |
 **request_id** | **string**|  |

### Return type

[**\Sendbird\Model\ViewDataExportByIdResponse**](../Model/ViewDataExportByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
