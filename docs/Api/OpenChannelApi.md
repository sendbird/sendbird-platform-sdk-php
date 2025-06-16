# Sendbird\OpenChannelApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAnOpenChannel()**](OpenChannelApi.md#createAnOpenChannel) | **POST** /v3/open_channels | Create an open channel
[**deleteAnOpenChannel()**](OpenChannelApi.md#deleteAnOpenChannel) | **DELETE** /v3/open_channels/{channel_url} | Delete an open channel
[**getAnOpenChannel()**](OpenChannelApi.md#getAnOpenChannel) | **GET** /v3/open_channels/{channel_url} | Get an open channel
[**listChannelOperators()**](OpenChannelApi.md#listChannelOperators) | **GET** /v3/open_channels/{channel_url}/operators | List operators of an open channel
[**listOpenChannels()**](OpenChannelApi.md#listOpenChannels) | **GET** /v3/open_channels | List open channels
[**registerOperators()**](OpenChannelApi.md#registerOperators) | **POST** /v3/open_channels/{channel_url}/operators | Register operators to an open channel
[**unregisterOperators()**](OpenChannelApi.md#unregisterOperators) | **DELETE** /v3/open_channels/{channel_url}/operators | Unregister operators from an open channel
[**updateAnOpenChannel()**](OpenChannelApi.md#updateAnOpenChannel) | **PUT** /v3/open_channels/{channel_url} | Update an open channel


## `createAnOpenChannel()`

```php
createAnOpenChannel($api_token, $create_an_open_channel_request): \Sendbird\Model\SendbirdOpenChannel
```

Create an open channel

## Create an open channel  You can create an [open channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel) that facilitates conversations for millions of users. Open channels allow a seamless chat experience possible for all participants by using [dynamic partitioning](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-how-dynamic-partitioning-works) which creates subchannels that each handle up to tens of thousands of participants.  Because users don't need invitations to join open channels, short-lived live events like concerts or live streams that don't require a sustained membership are good use cases for open channels.  [https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel](https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_an_open_channel_request'] = new \Sendbird\Model\CreateAnOpenChannelRequest(); // \Sendbird\Model\CreateAnOpenChannelRequest

try {
    $result = $apiInstance->createAnOpenChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->createAnOpenChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **create_an_open_channel_request** | [**\Sendbird\Model\CreateAnOpenChannelRequest**](../Model/CreateAnOpenChannelRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdOpenChannel**](../Model/SendbirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnOpenChannel()`

```php
deleteAnOpenChannel($channel_url, $api_token): object
```

Delete an open channel

## Delete an open channel  You can delete an open channel using this API. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-an-open-channel#1-delete-an-open-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAnOpenChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->deleteAnOpenChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
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

## `getAnOpenChannel()`

```php
getAnOpenChannel($channel_url, $api_token, $include_operators): \Sendbird\Model\SendbirdOpenChannel
```

Get an open channel

## Get an open channel  This action retrieves information about a specific [open channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel).  [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-an-open-channel#1-get-an-open-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-an-open-channel#1-get-an-open-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['include_operators'] = True; // bool | Determines whether to include a list of operators in the response. (Default: false)

try {
    $result = $apiInstance->getAnOpenChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->getAnOpenChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **include_operators** | **bool**| Determines whether to include a list of operators in the response. (Default: false) | [optional]

### Return type

[**\Sendbird\Model\SendbirdOpenChannel**](../Model/SendbirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChannelOperators()`

```php
listChannelOperators($channel_url, $token, $limit, $api_token): \Sendbird\Model\ListOperatorsResponse
```

List operators of an open channel

## List operators of an open channel  You can retrieve a list of operators of an open channel using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/list-operators-of-an-open-channel#1-list-operators-of-an-open-channel  `channel_url`   Type: string   Description: Specifies the URL of the channel to retrieve a list of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listChannelOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->listChannelOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListOperatorsResponse**](../Model/ListOperatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOpenChannels()`

```php
listOpenChannels($token, $channel_urls, $limit, $custom_types, $name_contains, $url_contains, $show_frozen, $show_metadata, $api_token): \Sendbird\Model\ListOpenChannelsResponse
```

List open channels

## List open channels  This action retrieves a list of [open channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel). You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.  [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-open-channels#1-list-open-channels](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-open-channels#1-list-open-channels)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['token'] = 'token_example'; // string
$associate_array['channel_urls'] = 'channel_urls_example'; // string | Specifies a comma-separated string of one or more open channel URLs to restrict the search scope. URL encoding each channel URL is recommended.
$associate_array['limit'] = 56; // int
$associate_array['custom_types'] = 'custom_types_example'; // string | Specifies a comma-separated string of one or more custom types to filter open channels. Urlencoding each type is recommended (for example, ?custom_types=urlencoded_type_1,urlencoded_type_2). If not specified, all channels are returned, regardless of their custom type.
$associate_array['name_contains'] = 'name_contains_example'; // string
$associate_array['url_contains'] = 'url_contains_example'; // string
$associate_array['show_frozen'] = True; // bool | Determines whether to include frozen channels in the response. Frozen channels are channels where only channel operators are allowed to send messages. (Default: true)
$associate_array['show_metadata'] = True; // bool | Determines whether to include channel metadata in the response. (Default: false)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listOpenChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->listOpenChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **channel_urls** | **string**| Specifies a comma-separated string of one or more open channel URLs to restrict the search scope. URL encoding each channel URL is recommended. | [optional]
 **limit** | **int**|  | [optional]
 **custom_types** | **string**| Specifies a comma-separated string of one or more custom types to filter open channels. Urlencoding each type is recommended (for example, ?custom_types&#x3D;urlencoded_type_1,urlencoded_type_2). If not specified, all channels are returned, regardless of their custom type. | [optional]
 **name_contains** | **string**|  | [optional]
 **url_contains** | **string**|  | [optional]
 **show_frozen** | **bool**| Determines whether to include frozen channels in the response. Frozen channels are channels where only channel operators are allowed to send messages. (Default: true) | [optional]
 **show_metadata** | **bool**| Determines whether to include channel metadata in the response. (Default: false) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListOpenChannelsResponse**](../Model/ListOpenChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerOperators()`

```php
registerOperators($channel_url, $api_token, $register_operators_to_a_group_channel_request): object
```

Register operators to an open channel

## Register operators to an open channel  You can register one or more operators to an open channel using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/register-operators-to-an-open-channel#1-register-operators-to-an-open-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['register_operators_to_a_group_channel_request'] = new \Sendbird\Model\RegisterOperatorsToAGroupChannelRequest(); // \Sendbird\Model\RegisterOperatorsToAGroupChannelRequest

try {
    $result = $apiInstance->registerOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->registerOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **register_operators_to_a_group_channel_request** | [**\Sendbird\Model\RegisterOperatorsToAGroupChannelRequest**](../Model/RegisterOperatorsToAGroupChannelRequest.md)|  | [optional]

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

## `unregisterOperators()`

```php
unregisterOperators($channel_url, $operator_ids, $delete_all, $api_token): object
```

Unregister operators from an open channel

## Unregister operators from an open channel  You can unregister operators in an open channel but keep them in the channel as participants using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/unregister-operators-from-an-open-channel#1-unregister-operators-from-an-open-channel  `channel_url`   Type: string   Description: Specifies the URL of the channel to cancel the registration of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['operator_ids'] = 'operator_ids_example'; // string | Specifies an array of one or more operator IDs to unregister from the channel. The operators in this array remain as participants of the channel after losing their operational roles. Urlencoding each operator ID is recommended. An example of a Urlencoded array would be ?operator_ids=urlencoded_id_1,urlencoded_id_2.
$associate_array['delete_all'] = True; // bool | Determines whether to unregister all operators and leave them as the participants of the channel. When this is set to true, the operator_ids property isn't effective and doesn't need to be specified in the request. (Default: false)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->unregisterOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->unregisterOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **operator_ids** | **string**| Specifies an array of one or more operator IDs to unregister from the channel. The operators in this array remain as participants of the channel after losing their operational roles. Urlencoding each operator ID is recommended. An example of a Urlencoded array would be ?operator_ids&#x3D;urlencoded_id_1,urlencoded_id_2. |
 **delete_all** | **bool**| Determines whether to unregister all operators and leave them as the participants of the channel. When this is set to true, the operator_ids property isn&#39;t effective and doesn&#39;t need to be specified in the request. (Default: false) | [optional]
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

## `updateAnOpenChannel()`

```php
updateAnOpenChannel($channel_url, $api_token, $update_an_open_channel_request): \Sendbird\Model\SendbirdOpenChannel
```

Update an open channel

## Update an open channel  You can update information about an open channel using this API. You can add a cover image to a channel to better identify the channel or specify a custom channel type for grouping channels by custom type. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-an-open-channel#1-update-an-open-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_an_open_channel_request'] = new \Sendbird\Model\UpdateAnOpenChannelRequest(); // \Sendbird\Model\UpdateAnOpenChannelRequest

try {
    $result = $apiInstance->updateAnOpenChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->updateAnOpenChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_an_open_channel_request** | [**\Sendbird\Model\UpdateAnOpenChannelRequest**](../Model/UpdateAnOpenChannelRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdOpenChannel**](../Model/SendbirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
