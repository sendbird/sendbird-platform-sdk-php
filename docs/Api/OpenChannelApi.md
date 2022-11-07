# Sendbird\OpenChannelApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ocCancelTheRegistrationOfOperators()**](OpenChannelApi.md#ocCancelTheRegistrationOfOperators) | **DELETE** /v3/open_channels/{channel_url}/operators | Cancel the registration of operators
[**ocCreateChannel()**](OpenChannelApi.md#ocCreateChannel) | **POST** /v3/open_channels | Create a channel
[**ocDeleteChannelByUrl()**](OpenChannelApi.md#ocDeleteChannelByUrl) | **DELETE** /v3/open_channels/{channel_url} | Delete a channel
[**ocListChannels()**](OpenChannelApi.md#ocListChannels) | **GET** /v3/open_channels | List channels
[**ocListOperators()**](OpenChannelApi.md#ocListOperators) | **GET** /v3/open_channels/{channel_url}/operators | List operators
[**ocListParticipants()**](OpenChannelApi.md#ocListParticipants) | **GET** /v3/open_channels/{channel_url}/participants | List participants
[**ocRegisterOperators()**](OpenChannelApi.md#ocRegisterOperators) | **POST** /v3/open_channels/{channel_url}/operators | Register operators
[**ocUpdateChannelByUrl()**](OpenChannelApi.md#ocUpdateChannelByUrl) | **PUT** /v3/open_channels/{channel_url} | Update a channel
[**ocViewChannelByUrl()**](OpenChannelApi.md#ocViewChannelByUrl) | **GET** /v3/open_channels/{channel_url} | View a channel


## `ocCancelTheRegistrationOfOperators()`

```php
ocCancelTheRegistrationOfOperators($api_token, $channel_url, $operator_ids, $delete_all)
```

Cancel the registration of operators

## Cancel the registration of operators  Cancels the registration of operators from an open channel but leave them as participants.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-cancel-the-registration-of-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to cancel the registration of operators.

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
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['operator_ids'] = array('operator_ids_example'); // string[]
$associate_array['delete_all'] = True; // bool

try {
    $apiInstance->ocCancelTheRegistrationOfOperators($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocCancelTheRegistrationOfOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **operator_ids** | [**string[]**](../Model/string.md)|  |
 **delete_all** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocCreateChannel()`

```php
ocCreateChannel($api_token, $oc_create_channel_data): \Sendbird\Model\SendBirdOpenChannel
```

Create a channel

## Create a channel  Creates an open channel.  >__Note__: Classic open channels created before the deprecation date of March 2021 will maintain their original form and functions. However, new applications created after December 15, 2020, will be able to create dynamic partitioning open channels only.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel

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
$associate_array['oc_create_channel_data'] = new \Sendbird\Model\OcCreateChannelData(); // \Sendbird\Model\OcCreateChannelData

try {
    $result = $apiInstance->ocCreateChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocCreateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **oc_create_channel_data** | [**\Sendbird\Model\OcCreateChannelData**](../Model/OcCreateChannelData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocDeleteChannelByUrl()`

```php
ocDeleteChannelByUrl($api_token, $channel_url): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Delete a channel

## Delete a channel  Deletes an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-delete-a-channel ----------------------------

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
$associate_array['channel_url'] = 'channel_url_example'; // string

try {
    $result = $apiInstance->ocDeleteChannelByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocDeleteChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListChannels()`

```php
ocListChannels($api_token, $token, $limit, $custom_types, $name_contains, $url_contains, $show_frozen, $show_metadata, $custom_type): \Sendbird\Model\OcListChannelsResponse
```

List channels

## List channels  Retrieves a list of open channels. You can query the list using various parameters.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-channels ----------------------------

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
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['custom_types'] = 'custom_types_example'; // string
$associate_array['name_contains'] = 'name_contains_example'; // string
$associate_array['url_contains'] = 'url_contains_example'; // string
$associate_array['show_frozen'] = True; // bool
$associate_array['show_metadata'] = True; // bool
$associate_array['custom_type'] = 'custom_type_example'; // string

try {
    $result = $apiInstance->ocListChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **name_contains** | **string**|  | [optional]
 **url_contains** | **string**|  | [optional]
 **show_frozen** | **bool**|  | [optional]
 **show_metadata** | **bool**|  | [optional]
 **custom_type** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\OcListChannelsResponse**](../Model/OcListChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListOperators()`

```php
ocListOperators($api_token, $channel_url, $token, $limit): \Sendbird\Model\OcListOperatorsResponse
```

List operators

## List operators  Retrieves a list of operators of an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of operators.

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
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->ocListOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\OcListOperatorsResponse**](../Model/OcListOperatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListParticipants()`

```php
ocListParticipants($api_token, $channel_url, $token, $limit): \Sendbird\Model\OcListParticipantsResponse
```

List participants

## List participants  Retrieves a list of the participants of an open channel. A participant refers to a user who has entered the open channel and is currently online.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-participants ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of participants in.

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
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->ocListParticipants($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\OcListParticipantsResponse**](../Model/OcListParticipantsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocRegisterOperators()`

```php
ocRegisterOperators($api_token, $channel_url, $oc_register_operators_data): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Register operators

## Register operators  Registers one or more operators to an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-register-operators ----------------------------

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
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['oc_register_operators_data'] = new \Sendbird\Model\OcRegisterOperatorsData(); // \Sendbird\Model\OcRegisterOperatorsData

try {
    $result = $apiInstance->ocRegisterOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocRegisterOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **oc_register_operators_data** | [**\Sendbird\Model\OcRegisterOperatorsData**](../Model/OcRegisterOperatorsData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocUpdateChannelByUrl()`

```php
ocUpdateChannelByUrl($api_token, $channel_url, $oc_update_channel_by_url_data): \Sendbird\Model\SendBirdOpenChannel
```

Update a channel

## Update a channel  Updates information on an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-update-a-channel ----------------------------

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
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['oc_update_channel_by_url_data'] = new \Sendbird\Model\OcUpdateChannelByUrlData(); // \Sendbird\Model\OcUpdateChannelByUrlData

try {
    $result = $apiInstance->ocUpdateChannelByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocUpdateChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **oc_update_channel_by_url_data** | [**\Sendbird\Model\OcUpdateChannelByUrlData**](../Model/OcUpdateChannelByUrlData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocViewChannelByUrl()`

```php
ocViewChannelByUrl($api_token, $channel_url): \Sendbird\Model\SendBirdOpenChannel
```

View a channel

## View a channel  Retrieves information on a specific open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-channel ----------------------------

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
$associate_array['channel_url'] = 'channel_url_example'; // string

try {
    $result = $apiInstance->ocViewChannelByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocViewChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
