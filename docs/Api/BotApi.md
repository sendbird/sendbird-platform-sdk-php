# Sendbird\BotApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createABot()**](BotApi.md#createABot) | **POST** /v3/bots | Create a bot
[**joinChannels()**](BotApi.md#joinChannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
[**leaveAGroupChannel()**](BotApi.md#leaveAGroupChannel) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a specific channel
[**leaveGroupChannels()**](BotApi.md#leaveGroupChannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
[**listBots()**](BotApi.md#listBots) | **GET** /v3/bots | List bots
[**sendABotMessage()**](BotApi.md#sendABotMessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message


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
sendABotMessage($bot_userid, $api_token, $send_a_bot_message_request): \Sendbird\Model\SendbirdMessageResponse
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
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['send_a_bot_message_request'] = new \Sendbird\Model\SendABotMessageRequest(); // \Sendbird\Model\SendABotMessageRequest

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
 **api_token** | **string**|  | [optional]
 **send_a_bot_message_request** | [**\Sendbird\Model\SendABotMessageRequest**](../Model/SendABotMessageRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdMessageResponse**](../Model/SendbirdMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
