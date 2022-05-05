# Sendbird\BotInterfaceApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBot()**](BotInterfaceApi.md#createBot) | **POST** /v3/bots | Create a bot
[**deleteBotById()**](BotInterfaceApi.md#deleteBotById) | **DELETE** /v3/bots/{bot_userid} | Delete a bot
[**joinChannels()**](BotInterfaceApi.md#joinChannels) | **POST** /v3/bots/{bot_userid}/channels | Join channels
[**leaveChannels()**](BotInterfaceApi.md#leaveChannels) | **DELETE** /v3/bots/{bot_userid}/channels | Leave channels - When leaving all channels
[**leaveChannelsByUrl()**](BotInterfaceApi.md#leaveChannelsByUrl) | **DELETE** /v3/bots/{bot_userid}/channels/{channel_url} | Leave channels - When leaving a channel by its channel URL
[**listBots()**](BotInterfaceApi.md#listBots) | **GET** /v3/bots | List bots
[**sendBotsMessage()**](BotInterfaceApi.md#sendBotsMessage) | **POST** /v3/bots/{bot_userid}/send | Send a bot&#39;s message
[**updateBotById()**](BotInterfaceApi.md#updateBotById) | **PUT** /v3/bots/{bot_userid} | Update a bot
[**viewBotById()**](BotInterfaceApi.md#viewBotById) | **GET** /v3/bots/{bot_userid} | View a bot


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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$create_bot_data = new \Sendbird\Model\CreateBotData(); // \Sendbird\Model\CreateBotData

try {
    $result = $apiInstance->createBot($api_token, $create_bot_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->createBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string

try {
    $result = $apiInstance->deleteBotById($api_token, $bot_userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->deleteBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string
$join_channels_data = new \Sendbird\Model\JoinChannelsData(); // \Sendbird\Model\JoinChannelsData

try {
    $result = $apiInstance->joinChannels($api_token, $bot_userid, $join_channels_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->joinChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string
$channel_url = 'channel_url_example'; // string

try {
    $apiInstance->leaveChannels($api_token, $bot_userid, $channel_url);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->leaveChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string
$channel_url = 'channel_url_example'; // string

try {
    $result = $apiInstance->leaveChannelsByUrl($api_token, $bot_userid, $channel_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->leaveChannelsByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listBots($api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->listBots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string
$send_bot_s_message_data = new \Sendbird\Model\SendBotSMessageData(); // \Sendbird\Model\SendBotSMessageData

try {
    $result = $apiInstance->sendBotsMessage($api_token, $bot_userid, $send_bot_s_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->sendBotsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string
$update_bot_by_id_data = new \Sendbird\Model\UpdateBotByIdData(); // \Sendbird\Model\UpdateBotByIdData

try {
    $result = $apiInstance->updateBotById($api_token, $bot_userid, $update_bot_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->updateBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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



$apiInstance = new Sendbird\Api\BotInterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$bot_userid = 'bot_userid_example'; // string

try {
    $result = $apiInstance->viewBotById($api_token, $bot_userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotInterfaceApi->viewBotById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

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
