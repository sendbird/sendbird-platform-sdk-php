# Sendbird\MetadataApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAChannelMetadata()**](MetadataApi.md#createAChannelMetadata) | **POST** /v3/{channel_type}/{channel_url}/metadata | Create a channel metadata
[**deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata()**](MetadataApi.md#deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata) | **DELETE** /v3/{channel_type}/{channel_url}/metadata | Delete a channel metadata - When deleting all items of a channel metadata
[**updateAChannelMetadata()**](MetadataApi.md#updateAChannelMetadata) | **PUT** /v3/{channel_type}/{channel_url}/metadata | Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata
[**viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata()**](MetadataApi.md#viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata) | **GET** /v3/{channel_type}/{channel_url}/metadata | View a channel metadata - When retrieving all items of a channel metadata


## `createAChannelMetadata()`

```php
createAChannelMetadata($channel_type, $channel_url, $api_token, $create_a_channel_metadata_request): \Sendbird\Model\CreateAChannelMetadataResponse
```

Create a channel metadata

## Create a channel metadata  Creates a channel metadata's items to store in a channel.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-create-metadata#1-create-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_a_channel_metadata_request'] = new \Sendbird\Model\CreateAChannelMetadataRequest(); // \Sendbird\Model\CreateAChannelMetadataRequest

try {
    $result = $apiInstance->createAChannelMetadata($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->createAChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **create_a_channel_metadata_request** | [**\Sendbird\Model\CreateAChannelMetadataRequest**](../Model/CreateAChannelMetadataRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\CreateAChannelMetadataResponse**](../Model/CreateAChannelMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata()`

```php
deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata($channel_type, $channel_url, $key, $api_token): object
```

Delete a channel metadata - When deleting all items of a channel metadata

## Delete a channel metadata  Deletes a channel metadata's one or all items that are stored in a channel.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-delete-metadata#1-delete-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which has the metadata to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['key'] = 'key_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->deleteAChannelMetadataWhenDeletingAllItemsOfAChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **key** | **string**|  | [optional]
 **api_token** | **string**|  | [optional]

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

## `updateAChannelMetadata()`

```php
updateAChannelMetadata($channel_type, $channel_url, $api_token, $update_a_channel_metadata_request): object
```

Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata

## Update a channel metadata  Updates existing items of a channel metadata by their keys, or adds new items to the metadata.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-update-metadata#1-update-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_a_channel_metadata_request'] = new \Sendbird\Model\UpdateAChannelMetadataRequest(); // \Sendbird\Model\UpdateAChannelMetadataRequest

try {
    $result = $apiInstance->updateAChannelMetadata($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->updateAChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_a_channel_metadata_request** | [**\Sendbird\Model\UpdateAChannelMetadataRequest**](../Model/UpdateAChannelMetadataRequest.md)|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata()`

```php
viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata($channel_type, $channel_url, $key, $keys, $api_token): object
```

View a channel metadata - When retrieving all items of a channel metadata

## View a channel metadata  Retrieves a channel metadata's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-metadata/channel-get-metadata#1-get-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['key'] = 'key_example'; // string
$associate_array['keys'] = 'keys_example'; // string | In a query string, specifies an array of one or more keys of the metadata items. If not specified, all items of the metadata are returned. If specified, only the items that match the parameter values are returned. URL encoding each key is recommended.
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewAChannelMetadataWhenRetrievingAllItemsOfAChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **key** | **string**|  | [optional]
 **keys** | **string**| In a query string, specifies an array of one or more keys of the metadata items. If not specified, all items of the metadata are returned. If specified, only the items that match the parameter values are returned. URL encoding each key is recommended. | [optional]
 **api_token** | **string**|  | [optional]

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
