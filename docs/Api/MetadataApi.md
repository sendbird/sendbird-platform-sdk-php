# Sendbird\MetadataApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewChannelMetacounter()**](MetadataApi.md#viewChannelMetacounter) | **GET** /v3/{channel_type}/{channel_url}/metacounter | View a channel metacounter - When retrieving all items of a channel metacounter
[**viewChannelMetacounterByKey()**](MetadataApi.md#viewChannelMetacounterByKey) | **GET** /v3/{channel_type}/{channel_url}/metacounter/{key} | View a channel metacounter - When retrieving a specific item of a channel metacounter by its key
[**viewChannelMetadata()**](MetadataApi.md#viewChannelMetadata) | **GET** /v3/{channel_type}/{channel_url}/metadata | View a channel metadata - When retrieving all items of a channel metadata
[**viewChannelMetadataByKey()**](MetadataApi.md#viewChannelMetadataByKey) | **GET** /v3/{channel_type}/{channel_url}/metadata/{key} | View a channel metadata - When retrieving a specific item of a channel metadata by its key
[**viewUserMetadata()**](MetadataApi.md#viewUserMetadata) | **GET** /v3/users/{user_id}/metadata | View a user metadata - When retrieving all items of a user metadata
[**viewUserMetadataByKey()**](MetadataApi.md#viewUserMetadataByKey) | **GET** /v3/users/{user_id}/metadata/{key} | View a user metadata - When retrieving a specific item of a user metadata by its key


## `viewChannelMetacounter()`

```php
viewChannelMetacounter($api_token, $channel_type, $channel_url, $key, $keys): array<string,\Sendbird\Model\SendBirdAdditionalProperties>
```

View a channel metacounter - When retrieving all items of a channel metacounter

## View a channel metacounter  Retrieves channel metacounter's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewChannelMetacounter($api_token, $channel_type, $channel_url, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewChannelMetacounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**array<string,\Sendbird\Model\SendBirdAdditionalProperties>**](../Model/SendBirdAdditionalProperties.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetacounterByKey()`

```php
viewChannelMetacounterByKey($api_token, $channel_type, $channel_url, $key): array<string,\Sendbird\Model\SendBirdAdditionalProperties>
```

View a channel metacounter - When retrieving a specific item of a channel metacounter by its key

## View a channel metacounter  Retrieves channel metacounter's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->viewChannelMetacounterByKey($api_token, $channel_type, $channel_url, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewChannelMetacounterByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |

### Return type

[**array<string,\Sendbird\Model\SendBirdAdditionalProperties>**](../Model/SendBirdAdditionalProperties.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetadata()`

```php
viewChannelMetadata($api_token, $channel_type, $channel_url, $key, $keys): array<string,string>
```

View a channel metadata - When retrieving all items of a channel metadata

## View a channel metadata  Retrieves a channel metadata's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewChannelMetadata($api_token, $channel_type, $channel_url, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

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

## `viewChannelMetadataByKey()`

```php
viewChannelMetadataByKey($api_token, $channel_type, $channel_url, $key): array<string,string>
```

View a channel metadata - When retrieving a specific item of a channel metadata by its key

## View a channel metadata  Retrieves a channel metadata's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->viewChannelMetadataByKey($api_token, $channel_type, $channel_url, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewChannelMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |

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

## `viewUserMetadata()`

```php
viewUserMetadata($api_token, $user_id, $key, $keys): \Sendbird\Model\ViewUserMetadataResponse
```

View a user metadata - When retrieving all items of a user metadata

## View a user metadata  Retrieves a user metadata's one or more items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to retrieve the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewUserMetadata($api_token, $user_id, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Sendbird\Model\ViewUserMetadataResponse**](../Model/ViewUserMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewUserMetadataByKey()`

```php
viewUserMetadataByKey($api_token, $user_id, $key): array<string,string>
```

View a user metadata - When retrieving a specific item of a user metadata by its key

## View a user metadata  Retrieves a user metadata's one or more items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to retrieve the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->viewUserMetadataByKey($api_token, $user_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->viewUserMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **key** | **string**|  |

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
