# Sendbird\BotApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBot()**](BotApi.md#createBot) | **POST** /v3/bots | Create a bot
[**deleteBotById()**](BotApi.md#deleteBotById) | **DELETE** /v3/bots/{bot_userid} | Delete a bot
[**joinChannels()**](BotApi.md#joinChannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
[**leaveChannels()**](BotApi.md#leaveChannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
[**leaveChannelsByUrl()**](BotApi.md#leaveChannelsByUrl) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a channel by its channel URL
[**listBots()**](BotApi.md#listBots) | **GET** /v3/bots | List bots
[**sendBotsMessage()**](BotApi.md#sendBotsMessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message
[**updateBotById()**](BotApi.md#updateBotById) | **PUT** /v3/bots/{bot_userid} | Update a bot
[**viewBotById()**](BotApi.md#viewBotById) | **GET** /v3/bots/{bot_userid} | View a bot


## `createBot()`

```php
createBot($api_token, $create_bot_data): \Sendbird\Model\CreateBotResponse
```

Create a bot

## Create a bot  Creates a new bot within the application. Creating a bot is similar to creating a normal user, except that a callback URL is specified in order for the bot to receive events.  > __Note__: The bot must [join](#2-join-channels) a group channel first to interact with users. In group channels, you can invite a bot through the [invite as members](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-invite-as-members) action instead.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-create-a-bot

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
$associate_array['create_bot_data'] = new \Sendbird\Model\CreateBotData(); // \Sendbird\Model\CreateBotData

try {
    $result = $apiInstance->createBot($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->createBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **create_bot_data** | [**\Sendbird\Model\CreateBotData**](../Model/CreateBotData.md)|  | [optional]

### Return type

[**\Sendbird\Model\CreateBotResponse**](../Model/CreateBotResponse.md)

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
deleteBotById($api_token, $bot_userid): object
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
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['bot_userid'] = 'bot_userid_example'; // string

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
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |

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
joinChannels($api_token, $bot_userid, $join_channels_data): \Sendbird\Model\JoinChannelsResponse
```

Join channels

## Join channels  Makes a bot join one or more channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-join-channels ----------------------------

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
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['join_channels_data'] = new \Sendbird\Model\JoinChannelsData(); // \Sendbird\Model\JoinChannelsData

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
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |
 **join_channels_data** | [**\Sendbird\Model\JoinChannelsData**](../Model/JoinChannelsData.md)|  | [optional]

### Return type

[**\Sendbird\Model\JoinChannelsResponse**](../Model/JoinChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveChannels()`

```php
leaveChannels($api_token, $bot_userid, $channel_url)
```

Leave channels - When leaving all channels

## Leave channels  Makes a bot leave one or more group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-leave-channels ----------------------------

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
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string

try {
    $apiInstance->leaveChannels($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->leaveChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |
 **channel_url** | **string**|  | [optional]

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

## `leaveChannelsByUrl()`

```php
leaveChannelsByUrl($api_token, $bot_userid, $channel_url): object
```

Leave channels - When leaving a channel by its channel URL

## Leave channels  Makes a bot leave one or more group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-leave-channels ----------------------------

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
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['channel_url'] = 'channel_url_example'; // string

try {
    $result = $apiInstance->leaveChannelsByUrl($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->leaveChannelsByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |
 **channel_url** | **string**|  |

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
listBots($api_token, $token, $limit): \Sendbird\Model\ListBotsResponse
```

List bots

## List bots  Retrieves a list of all bots within an application.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-list-bots ----------------------------

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
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

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
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

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

## `sendBotsMessage()`

```php
sendBotsMessage($api_token, $bot_userid, $send_bot_s_message_data): \Sendbird\Model\SendBirdMessageResponse
```

Send a bot's message

## Send a bot's message  Sends a bot's message to a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/bot-interface#2-send-a-bot-s-message ----------------------------   `bot_userid`      Type: string      Description: Specifies the ID of the bot to send a message.

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
$associate_array['bot_userid'] = 'bot_userid_example'; // string
$associate_array['send_bot_s_message_data'] = new \Sendbird\Model\SendBotSMessageData(); // \Sendbird\Model\SendBotSMessageData

try {
    $result = $apiInstance->sendBotsMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotApi->sendBotsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |
 **send_bot_s_message_data** | [**\Sendbird\Model\SendBotSMessageData**](../Model/SendBotSMessageData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdMessageResponse**](../Model/SendBirdMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBotById()`

```php
updateBotById($api_token, $bot_userid, $update_bot_by_id_data): \Sendbird\Model\UpdateBotByIdResponse
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
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['bot_userid'] = 'bot_userid_example'; // string
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
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |
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
viewBotById($api_token, $bot_userid): \Sendbird\Model\ViewBotByIdResponse
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
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['bot_userid'] = 'bot_userid_example'; // string

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
 **api_token** | **string**|  |
 **bot_userid** | **string**|  |

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
