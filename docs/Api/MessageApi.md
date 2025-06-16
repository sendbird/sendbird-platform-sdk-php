# Sendbird\MessageApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExtraDataToAMessage()**](MessageApi.md#addExtraDataToAMessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Add extra data to a message
[**deleteAMessage()**](MessageApi.md#deleteAMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id} | Delete a message
[**getAMessage()**](MessageApi.md#getAMessage) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id} | Get a message
[**getTotalNumberOfMessagesInAChannel()**](MessageApi.md#getTotalNumberOfMessagesInAChannel) | **GET** /v3/{channel_type}/{channel_url}/messages/total_count | Get total number of messages in a channel
[**listMessages()**](MessageApi.md#listMessages) | **GET** /v3/{channel_type}/{channel_url}/messages | List messages
[**markChannelMessagesAsRead()**](MessageApi.md#markChannelMessagesAsRead) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_read | Mark all messages as read
[**migrateMessages()**](MessageApi.md#migrateMessages) | **POST** /v3/migration/{target_channel_url} | Migrate messages
[**removeExtraDataFromAMessage()**](MessageApi.md#removeExtraDataFromAMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Remove extra data from a message
[**sendAMessage()**](MessageApi.md#sendAMessage) | **POST** /v3/{channel_type}/{channel_url}/messages | Send a message
[**updateAMessage()**](MessageApi.md#updateAMessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id} | Update a message
[**updateExtraDataInAMessage()**](MessageApi.md#updateExtraDataInAMessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Update extra data in a message


## `addExtraDataToAMessage()`

```php
addExtraDataToAMessage($channel_type, $channel_url, $message_id, $api_token, $add_extra_data_to_a_message_request): \Sendbird\Model\AddExtraDataToAMessageResponse
```

Add extra data to a message

## Add extra data to a message  Adds one or more key-values items which store additional information for a message.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-add-metadata#1-add-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_extra_data_to_a_message_request'] = new \Sendbird\Model\AddExtraDataToAMessageRequest(); // \Sendbird\Model\AddExtraDataToAMessageRequest

try {
    $result = $apiInstance->addExtraDataToAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->addExtraDataToAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **add_extra_data_to_a_message_request** | [**\Sendbird\Model\AddExtraDataToAMessageRequest**](../Model/AddExtraDataToAMessageRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddExtraDataToAMessageResponse**](../Model/AddExtraDataToAMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAMessage()`

```php
deleteAMessage($channel_type, $channel_url, $message_id, $api_token): object
```

Delete a message

## Delete a message  Deletes a message from a channel.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/delete-a-message#1-delete-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deleteAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
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

## `getAMessage()`

```php
getAMessage($channel_type, $channel_url, $message_id, $include_reactions, $include_thread_info, $include_parent_message_info, $include_poll_details, $with_sorted_meta_array, $api_token): \Sendbird\Model\SendbirdMessageResponse
```

Get a message

## Get a message  Retrieves information on a specific message.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/get-a-message#1-get-a-message ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.  `message_id`      Type: long      Description: Specifies the unique ID of the message to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['include_reactions'] = True; // bool
$associate_array['include_thread_info'] = True; // bool
$associate_array['include_parent_message_info'] = True; // bool
$associate_array['include_poll_details'] = True; // bool | Determines whether to include all properties of a poll resource with a full list of options in the results. If set to false, a selection of poll resource properties consisting of id, title, close_at, created_at, updated_at, status, and message_id are returned. (Default: false) * To use this property, the polls feature should be turned on in Settings > Chat > Features on Sendbird Dashboard.
$associate_array['with_sorted_meta_array'] = True; // bool
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
 **include_reactions** | **bool**|  | [optional]
 **include_thread_info** | **bool**|  | [optional]
 **include_parent_message_info** | **bool**|  | [optional]
 **include_poll_details** | **bool**| Determines whether to include all properties of a poll resource with a full list of options in the results. If set to false, a selection of poll resource properties consisting of id, title, close_at, created_at, updated_at, status, and message_id are returned. (Default: false) * To use this property, the polls feature should be turned on in Settings &gt; Chat &gt; Features on Sendbird Dashboard. | [optional]
 **with_sorted_meta_array** | **bool**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdMessageResponse**](../Model/SendbirdMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTotalNumberOfMessagesInAChannel()`

```php
getTotalNumberOfMessagesInAChannel($channel_type, $channel_url, $api_token): \Sendbird\Model\GetTotalNumberOfMessagesInAChannelResponse
```

Get total number of messages in a channel

## Get total number of messages in a channel  Retrieves the total number of messages in a specific channel.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/get-total-number-of-messages-in-a-channel#1-get-total-number-of-messages-in-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getTotalNumberOfMessagesInAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getTotalNumberOfMessagesInAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GetTotalNumberOfMessagesInAChannelResponse**](../Model/GetTotalNumberOfMessagesInAChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMessages()`

```php
listMessages($channel_type, $channel_url, $message_ts, $message_id, $prev_limit, $next_limit, $include, $reverse, $sender_id, $sender_ids, $operator_filter, $custom_types, $message_type, $including_removed, $include_reactions, $include_reply_type, $include_parent_message_info, $include_thread_info, $include_poll_details, $with_sorted_meta_array, $show_subchannel_messages_only, $user_id, $api_token): \Sendbird\Model\ListMessagesResponse
```

List messages

## List messages  You can retrieve a list of past messages of a specific channel with this API.  By default, this action returns a list of messages in the order they were created. Replies in threaded messages are also listed in the chronological order of their creation like other messages, not grouped with their parent messages.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/list-messages#1-list-messages  `channel_type`   Type: string   Description: Specifies the type of the channel. Either open_channels or group_channels.   `channel_url`   Type: string   Description: Specifies the URL of the channel to retrieve a list of past messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_ts'] = 56; // int | Specifies the timestamp to be the reference point of the query in Unix milliseconds. Either this or the message_id parameter below should be specified in your query URL to retrieve a list. It fetches messages that were sent prior to and after the specified message_ts and the default value for both prev_limit and next_limit is 15.
$associate_array['message_id'] = 56; // int | Specifies the unique ID of the message to be the reference point of the query. Either this or the message_ts parameter above should be specified in your query URL to retrieve a list. It fetches messages that were sent prior to and after the specified message_id and the default value for both prev_limit and next_limit is 15.
$associate_array['prev_limit'] = 56; // int | Specifies the number of previously sent messages to retrieve before message_ts. For example, if message_ts=1484202848298, then prev_limit=50 returns 50 messages sent by 1484202848297 (message_ts - 1). Acceptable values range from 0 to 200. (Default: 15)
$associate_array['next_limit'] = 56; // int | Specifies the number of sent messages to retrieve after message_ts. For example, if message_ts=1484202848298, then next_limit=50 returns 50 messages sent from 1484202848299 (message_ts + 1). Acceptable values range from 0 to 200. (Default: 15)
$associate_array['include'] = True; // bool | Determines whether to include messages sent exactly on the specified message_ts in the results. (Default: true)
$associate_array['reverse'] = True; // bool | Determines whether to sort the results in reverse chronological order. If set to true, messages appear in reverse chronological order where the newest comes first and the oldest last. (Default: false)
$associate_array['sender_id'] = 'sender_id_example'; // string | Restricts the search scope to only retrieve messages sent by the user with the specified ID.
$associate_array['sender_ids'] = 'sender_ids_example'; // string | Restricts the search scope to only retrieve messages sent by one or more users with the specified IDs listed in a comma-separated string.
$associate_array['operator_filter'] = 'operator_filter_example'; // string
$associate_array['custom_types'] = 'custom_types_example'; // string | Specifies a comma-separated string of one or more custom message types to retrieve. The value set to this parameter can serve as a filter as follows: - A string of specific custom types: Messages with the corresponding custom types are returned. - Empty like &custom_types=&...: Messages whose custom_type property is empty or has a value of null are returned. - An asterisk (\\*) (default): All messages are returned regardless of their custom_type.
$associate_array['message_type'] = 'message_type_example'; // string
$associate_array['including_removed'] = True; // bool
$associate_array['include_reactions'] = True; // bool
$associate_array['include_reply_type'] = 'include_reply_type_example'; // string | One of following values: NONE, ALL, ONLY_REPLY_TO_CHANNEL
$associate_array['include_parent_message_info'] = True; // bool
$associate_array['include_thread_info'] = True; // bool
$associate_array['include_poll_details'] = True; // bool | Determines whether to include all properties of a poll resource with a full list of options in the results. If set to false, a selection of poll resource properties consisting of id, title, close_at, created_at, updated_at, status, and message_id are returned. (Default: false) * To use this property, the polls feature should be turned on in Settings > Chat > Features on Sendbird Dashboard.
$associate_array['with_sorted_meta_array'] = True; // bool | Determines whether to include the sorted_metaarray property in the response. (Default: false)
$associate_array['show_subchannel_messages_only'] = True; // bool
$associate_array['user_id'] = 'user_id_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->listMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_ts** | **int**| Specifies the timestamp to be the reference point of the query in Unix milliseconds. Either this or the message_id parameter below should be specified in your query URL to retrieve a list. It fetches messages that were sent prior to and after the specified message_ts and the default value for both prev_limit and next_limit is 15. |
 **message_id** | **int**| Specifies the unique ID of the message to be the reference point of the query. Either this or the message_ts parameter above should be specified in your query URL to retrieve a list. It fetches messages that were sent prior to and after the specified message_id and the default value for both prev_limit and next_limit is 15. |
 **prev_limit** | **int**| Specifies the number of previously sent messages to retrieve before message_ts. For example, if message_ts&#x3D;1484202848298, then prev_limit&#x3D;50 returns 50 messages sent by 1484202848297 (message_ts - 1). Acceptable values range from 0 to 200. (Default: 15) | [optional]
 **next_limit** | **int**| Specifies the number of sent messages to retrieve after message_ts. For example, if message_ts&#x3D;1484202848298, then next_limit&#x3D;50 returns 50 messages sent from 1484202848299 (message_ts + 1). Acceptable values range from 0 to 200. (Default: 15) | [optional]
 **include** | **bool**| Determines whether to include messages sent exactly on the specified message_ts in the results. (Default: true) | [optional]
 **reverse** | **bool**| Determines whether to sort the results in reverse chronological order. If set to true, messages appear in reverse chronological order where the newest comes first and the oldest last. (Default: false) | [optional]
 **sender_id** | **string**| Restricts the search scope to only retrieve messages sent by the user with the specified ID. | [optional]
 **sender_ids** | **string**| Restricts the search scope to only retrieve messages sent by one or more users with the specified IDs listed in a comma-separated string. | [optional]
 **operator_filter** | **string**|  | [optional]
 **custom_types** | **string**| Specifies a comma-separated string of one or more custom message types to retrieve. The value set to this parameter can serve as a filter as follows: - A string of specific custom types: Messages with the corresponding custom types are returned. - Empty like &amp;custom_types&#x3D;&amp;...: Messages whose custom_type property is empty or has a value of null are returned. - An asterisk (\\*) (default): All messages are returned regardless of their custom_type. | [optional]
 **message_type** | **string**|  | [optional]
 **including_removed** | **bool**|  | [optional]
 **include_reactions** | **bool**|  | [optional]
 **include_reply_type** | **string**| One of following values: NONE, ALL, ONLY_REPLY_TO_CHANNEL | [optional]
 **include_parent_message_info** | **bool**|  | [optional]
 **include_thread_info** | **bool**|  | [optional]
 **include_poll_details** | **bool**| Determines whether to include all properties of a poll resource with a full list of options in the results. If set to false, a selection of poll resource properties consisting of id, title, close_at, created_at, updated_at, status, and message_id are returned. (Default: false) * To use this property, the polls feature should be turned on in Settings &gt; Chat &gt; Features on Sendbird Dashboard. | [optional]
 **with_sorted_meta_array** | **bool**| Determines whether to include the sorted_metaarray property in the response. (Default: false) | [optional]
 **show_subchannel_messages_only** | **bool**|  | [optional]
 **user_id** | **string**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListMessagesResponse**](../Model/ListMessagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markChannelMessagesAsRead()`

```php
markChannelMessagesAsRead($channel_url, $api_token, $mark_channel_messages_as_read_request): object
```

Mark all messages as read

## Mark all messages as read  Marks all messages in a group channel as read for a specific user. This action is only applicable for users in a group channel.  https://sendbird.com/docs/chat/platform-api/v3/message/read-receipts/mark-all-messages-as-read-message#1-mark-all-messages-as-read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['mark_channel_messages_as_read_request'] = new \Sendbird\Model\MarkChannelMessagesAsReadRequest(); // \Sendbird\Model\MarkChannelMessagesAsReadRequest

try {
    $result = $apiInstance->markChannelMessagesAsRead($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->markChannelMessagesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **mark_channel_messages_as_read_request** | [**\Sendbird\Model\MarkChannelMessagesAsReadRequest**](../Model/MarkChannelMessagesAsReadRequest.md)|  | [optional]

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

## `migrateMessages()`

```php
migrateMessages($target_channel_url, $api_token, $migrate_messages_request): object
```

Migrate messages

## Migrate messages  Using our migration API, you can migrate the messages from another system into a Sendbird system's [channel](https://sendbird.com/docs/chat/v3/platform-api/guides/channel-types) which consists of users, messages, and other chat-related data.  > To turn on this feature, [contact our support team](https://dashboard.sendbird.com/settings/contact_us).      There are three things to do in advance before the migration. Follow the instructions below:  1. Register the users of your current chat solution to your Sendbird application. You can migrate the users into the Sendbird system using the [user creation API](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-create-a-user).      2. Create either an [open](https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel) or a [group](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-create-a-channel) channel to migrate the messages of your chat solution. The Sendbird system doesn't create a channel for your migration automatically.      3. The maximum number of migrated messages per call is 100. To avoid the failure during your migration, you must adjust the number of messages to process at once via the API.       https://sendbird.com/docs/chat/platform-api/v3/message/migration/migrate-messages#1-migrate-messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['target_channel_url'] = 'target_channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['migrate_messages_request'] = new \Sendbird\Model\MigrateMessagesRequest(); // \Sendbird\Model\MigrateMessagesRequest

try {
    $result = $apiInstance->migrateMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->migrateMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **migrate_messages_request** | [**\Sendbird\Model\MigrateMessagesRequest**](../Model/MigrateMessagesRequest.md)|  | [optional]

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

## `removeExtraDataFromAMessage()`

```php
removeExtraDataFromAMessage($channel_type, $channel_url, $message_id, $keys, $api_token): object
```

Remove extra data from a message

## Remove extra data from a message  Removes specific items from a message by their keys.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-remove-metadata#1-remove-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['keys'] = 'keys_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->removeExtraDataFromAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->removeExtraDataFromAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
 **keys** | **string**|  | [optional]
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

## `sendAMessage()`

```php
sendAMessage($channel_type, $channel_url, $api_token, $send_a_message_request): \Sendbird\Model\SendbirdMessageResponse
```

Send a message

## Send a message  You can use this action to send a text message, a file message, or an admin message to a specific channel. Sendbird Chat SDKs and the platform API allows you to upload any type of files in messages to the Sendbird server. See [Message Overview](https://sendbird.com/docs/chat/platform-api/v3/message/message-overview) for more information on each message type. Messages are sent between client devices running the Sendbird Chat SDK or UIKit as well as programmatically from businesses to their customers. For instance, a delivery app can automatically send a message like \"Arriving in one minute!\" on behalf of a delivery driver.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/send-a-message#1-send-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['send_a_message_request'] = new \Sendbird\Model\SendAMessageRequest(); // \Sendbird\Model\SendAMessageRequest

try {
    $result = $apiInstance->sendAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->sendAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **send_a_message_request** | [**\Sendbird\Model\SendAMessageRequest**](../Model/SendAMessageRequest.md)|  | [optional]

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

## `updateAMessage()`

```php
updateAMessage($channel_type, $channel_url, $message_id, $api_token, $update_a_message_request): \Sendbird\Model\SendbirdMessageResponse
```

Update a message

## Update a message  Updates specific information on a message.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/update-a-message#1-update-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_a_message_request'] = new \Sendbird\Model\UpdateAMessageRequest(); // \Sendbird\Model\UpdateAMessageRequest

try {
    $result = $apiInstance->updateAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->updateAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_a_message_request** | [**\Sendbird\Model\UpdateAMessageRequest**](../Model/UpdateAMessageRequest.md)|  | [optional]

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

## `updateExtraDataInAMessage()`

```php
updateExtraDataInAMessage($channel_type, $channel_url, $message_id, $api_token, $update_extra_data_in_a_message_request): \Sendbird\Model\UpdateExtraDataInAMessageResponse
```

Update extra data in a message

## Update extra data in a message  Updates the values of specific items by their keys.  https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/message-update-metadata#1-update-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_type'] = 'channel_type_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['message_id'] = 'message_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_extra_data_in_a_message_request'] = new \Sendbird\Model\UpdateExtraDataInAMessageRequest(); // \Sendbird\Model\UpdateExtraDataInAMessageRequest

try {
    $result = $apiInstance->updateExtraDataInAMessage($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->updateExtraDataInAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **message_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_extra_data_in_a_message_request** | [**\Sendbird\Model\UpdateExtraDataInAMessageRequest**](../Model/UpdateExtraDataInAMessageRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateExtraDataInAMessageResponse**](../Model/UpdateExtraDataInAMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
