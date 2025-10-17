# Sendbird\BotApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createABot()**](BotApi.md#createABot) | **POST** /v3/bots | Create a bot
[**deleteBotById()**](BotApi.md#deleteBotById) | **DELETE** /v3/bots/{bot_userid} | Delete a bot
[**joinChannels()**](BotApi.md#joinChannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
[**leaveAGroupChannel()**](BotApi.md#leaveAGroupChannel) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a specific channel
[**leaveGroupChannels()**](BotApi.md#leaveGroupChannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
[**listBots()**](BotApi.md#listBots) | **GET** /v3/bots | List bots
[**sendABotMessage()**](BotApi.md#sendABotMessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message
[**updateBotById()**](BotApi.md#updateBotById) | **PUT** /v3/bots/{bot_userid} | Update a bot
[**viewBotById()**](BotApi.md#viewBotById) | **GET** /v3/bots/{bot_userid} | View a bot


## `createABot()`

```php
createABot($api_token, $create_a_bot_request): \Sendbird\Model\CreateABotResponse
```

Create a bot

## Create a bot  Creates a new bot within an application. Creating a bot is similar to creating a normal user, except a callback URL should be specified for a bot to receive events.  > **Note**: The bot must first [join a group channel](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels) to interact with users. In group channels, you can also invite a bot through the [invite as members](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel) action.      [https://sendbird.com/docs/chat/platform-api/v3/bot/creating-a-bot/create-a-bot#1-create-a-bot](https://sendbird.com/docs/chat/platform-api/v3/bot/creating-a-bot/create-a-bot#1-create-a-bot)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_a_bot_request'] = new \Sendbird\Model\CreateABotRequest(); // \Sendbird\Model\CreateABotRequest

try {
    $result = $apiInstance->createABot($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->createABot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **create_a_bot_request** | [**\Sendbird\Model\CreateABotRequest**](../Model/CreateABotRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\CreateABotResponse**](../Model/CreateABotResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBotById()`

```php
deleteBotById($bot_userid, $api_token): object
```

Delete a bot

## Delete a bot  Deletes a bot from an application.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-delete-a-bot ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteBotById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->deleteBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**|  |
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

## `joinChannels()`

```php
joinChannels($bot_userid, $api_token, $join_channels_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Join channels

## Join channels  Makes a bot join one or more group channels.  [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/join-channels#1-join-channels)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['join_channels_request'] = new \Sendbird\Model\JoinChannelsRequest(); // \Sendbird\Model\JoinChannelsRequest

try {
    $result = $apiInstance->joinChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->joinChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **join_channels_request** | [**\Sendbird\Model\JoinChannelsRequest**](../Model/JoinChannelsRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdGroupChannelDetail**](../Model/SendbirdGroupChannelDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveAGroupChannel()`

```php
leaveAGroupChannel($channel_url, $bot_userid, $api_token): object
```

Leave channels - When leaving a specific channel

## Leave channels  Makes a bot leave a specific channel  [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['bot_userid'] = 'bot_userid_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->leaveAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->leaveAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **bot_userid** | **string**| (Required) |
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

## `leaveGroupChannels()`

```php
leaveGroupChannels($bot_userid, $api_token): object
```

Leave channels - When leaving all channels

## Leave channels  Makes a bot leave all group channels.  [https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels](https://sendbird.com/docs/chat/platform-api/v3/bot/managing-a-bot/leave-channels#1-leave-channels)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->leaveGroupChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->leaveGroupChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**| (Required) |
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

## `listBots()`

```php
listBots($token, $limit, $api_token): \Sendbird\Model\ListBotsResponse
```

List bots

## List bots  Retrieves a list of all bots within an application.  https://sendbird.com/docs/chat/platform-api/v3/bot/listing-bots/list-bots#1-list-bots

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listBots($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->listBots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListBotsResponse**](../Model/ListBotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendABotMessage()`

```php
sendABotMessage($bot_userid, $message_type, $channel_url, $api_token, $message, $mentioned, $extended_message_payload, $file, $require_auth, $mention_type, $mentioned_user_ids, $is_silent, $sorted_metaarray, $apns_bundle_id, $apple_critical_alert_options, $sound, $volume, $created_at, $custom_type, $data, $dedup_id, $mark_as_read, $send_push): \Sendbird\Model\SendABotMessageResponse
```

Send a bot's message

## Send a bot message  Sends a bot message to a group channel.  [https://sendbird.com/docs/chat/platform-api/v3/bot/sending-a-bot-message/send-a-bot-message#1-send-a-bot-message](https://sendbird.com/docs/chat/platform-api/v3/bot/sending-a-bot-message/send-a-bot-message#1-send-a-bot-message)  `bot_userid`   Type: string   Description: Specifies the ID of the bot to send a message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string | (Required)
$associate_array['message_type'] = 'message_type_example'; // string | Specifies the type of message to send. MESG for text message, FILE for file message.
$associate_array['channel_url'] = 'channel_url_example'; // string | Specifies the URL of the channel to send the message to.
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['message'] = 'message_example'; // string | Specifies the content of the message. * This property is required when message_type is MESG.
$associate_array['mentioned'] = array('mentioned_example'); // string[] | * This property is available when message_type is MESG.
$associate_array['extended_message_payload'] = new \Sendbird\Model\SendbirdExtendedMessagePayload(); // \Sendbird\Model\SendbirdExtendedMessagePayload
$associate_array['file'] = "/path/to/file.txt"; // \SplFileObject | When sending a single file with a message, specifies the data of the file to upload to the Sendbird server in raw binary format. When sending a request containing a file, change the value of the content-type header to multipart/form-data;boundary={your_unique_boundary_string} in the request. * This property is required when message_type is FILE. * This doesn't allow a converted base64-encoded string from a file as its value.
$associate_array['require_auth'] = True; // bool | Determines whether to require an authentication key to verify if the file is being properly accessed. Only the user who uploaded the file or users who are in the channel where the file was uploaded should have access. The authentication key managed internally by the Sendbird system is generated every time a user logs in to the Sendbird server and is valid for three days starting from the last login. If set to false, Sendbird tries to access a file without any key. To access encrypted files, such as the files in the Sendbird server which are by default encrypted, the property must be set to true. (Default: false) The require_auth parameter only works if the file or URL is managed by Sendbird, which means that when you upload files using multipart format or provide URLs that point to the files hosted on the Sendbird server. However, if the file is hosted on a server or service that is not managed by Sendbird, access control and authentication for the file should be handled by the respective server or service hosting the file. * This property is available when message_type is FILE.
$associate_array['mention_type'] = 'mention_type_example'; // string | * This property is available when message_type is FILE.
$associate_array['mentioned_user_ids'] = array('mentioned_user_ids_example'); // string[] | * This property is available when message_type is FILE.
$associate_array['is_silent'] = True; // bool | * This property is available when message_type is FILE.
$associate_array['sorted_metaarray'] = array(new \Sendbird\Model\\Sendbird\Model\SendbirdSortedMetaarrayInner()); // \Sendbird\Model\SendbirdSortedMetaarrayInner[]
$associate_array['apns_bundle_id'] = 'apns_bundle_id_example'; // string | * This property is available when message_type is FILE.
$associate_array['apple_critical_alert_options'] = array('key' => new \stdClass); // object | * This property is available when message_type is FILE.
$associate_array['sound'] = 'sound_example'; // string | * This property is available when message_type is FILE.
$associate_array['volume'] = 3.4; // float | * This property is available when message_type is FILE.
$associate_array['created_at'] = 56; // int
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['data'] = 'data_example'; // string
$associate_array['dedup_id'] = 'dedup_id_example'; // string
$associate_array['mark_as_read'] = True; // bool
$associate_array['send_push'] = True; // bool

try {
    $result = $apiInstance->sendABotMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->sendABotMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**| (Required) |
 **message_type** | **string**| Specifies the type of message to send. MESG for text message, FILE for file message. |
 **channel_url** | **string**| Specifies the URL of the channel to send the message to. |
 **api_token** | **string**|  | [optional]
 **message** | **string**| Specifies the content of the message. * This property is required when message_type is MESG. | [optional]
 **mentioned** | [**string[]**](../Model/string.md)| * This property is available when message_type is MESG. | [optional]
 **extended_message_payload** | [**\Sendbird\Model\SendbirdExtendedMessagePayload**](../Model/SendbirdExtendedMessagePayload.md)|  | [optional]
 **file** | **\SplFileObject****\SplFileObject**| When sending a single file with a message, specifies the data of the file to upload to the Sendbird server in raw binary format. When sending a request containing a file, change the value of the content-type header to multipart/form-data;boundary&#x3D;{your_unique_boundary_string} in the request. * This property is required when message_type is FILE. * This doesn&#39;t allow a converted base64-encoded string from a file as its value. | [optional]
 **require_auth** | **bool**| Determines whether to require an authentication key to verify if the file is being properly accessed. Only the user who uploaded the file or users who are in the channel where the file was uploaded should have access. The authentication key managed internally by the Sendbird system is generated every time a user logs in to the Sendbird server and is valid for three days starting from the last login. If set to false, Sendbird tries to access a file without any key. To access encrypted files, such as the files in the Sendbird server which are by default encrypted, the property must be set to true. (Default: false) The require_auth parameter only works if the file or URL is managed by Sendbird, which means that when you upload files using multipart format or provide URLs that point to the files hosted on the Sendbird server. However, if the file is hosted on a server or service that is not managed by Sendbird, access control and authentication for the file should be handled by the respective server or service hosting the file. * This property is available when message_type is FILE. | [optional]
 **mention_type** | **string**| * This property is available when message_type is FILE. | [optional]
 **mentioned_user_ids** | [**string[]**](../Model/string.md)| * This property is available when message_type is FILE. | [optional]
 **is_silent** | **bool**| * This property is available when message_type is FILE. | [optional]
 **sorted_metaarray** | [**\Sendbird\Model\SendbirdSortedMetaarrayInner[]**](../Model/\Sendbird\Model\SendbirdSortedMetaarrayInner.md)|  | [optional]
 **apns_bundle_id** | **string**| * This property is available when message_type is FILE. | [optional]
 **apple_critical_alert_options** | [**object**](../Model/object.md)| * This property is available when message_type is FILE. | [optional]
 **sound** | **string**| * This property is available when message_type is FILE. | [optional]
 **volume** | **float**| * This property is available when message_type is FILE. | [optional]
 **created_at** | **int**|  | [optional]
 **custom_type** | **string**|  | [optional]
 **data** | **string**|  | [optional]
 **dedup_id** | **string**|  | [optional]
 **mark_as_read** | **bool**|  | [optional]
 **send_push** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\SendABotMessageResponse**](../Model/SendABotMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBotById()`

```php
updateBotById($bot_userid, $api_token, $update_bot_by_id_data): \Sendbird\Model\UpdateBotByIdResponse
```

Update a bot

## Update a bot  Updates information on a bot.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-update-a-bot ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_bot_by_id_data'] = new \Sendbird\Model\UpdateBotByIdData(); // \Sendbird\Model\UpdateBotByIdData

try {
    $result = $apiInstance->updateBotById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->updateBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_bot_by_id_data** | [**\Sendbird\Model\UpdateBotByIdData**](../Model/UpdateBotByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateBotByIdResponse**](../Model/UpdateBotByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewBotById()`

```php
viewBotById($bot_userid, $api_token): \Sendbird\Model\ViewBotByIdResponse
```

View a bot

## View a bot  Retrieves information on a bot.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-view-a-bot ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\BotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewBotById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->viewBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bot_userid** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewBotByIdResponse**](../Model/ViewBotByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
