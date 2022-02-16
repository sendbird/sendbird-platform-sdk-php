# Sendbird\MessagesApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExtraDataToMessage()**](MessagesApi.md#addExtraDataToMessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Add extra data to a message
[**addReactionToAMessage()**](MessagesApi.md#addReactionToAMessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Add a reaction to a message
[**deleteMessageById()**](MessagesApi.md#deleteMessageById) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id} | Delete a message
[**gcMarkAllMessagesAsDelivered()**](MessagesApi.md#gcMarkAllMessagesAsDelivered) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_delivered | Mark all messages as delivered
[**gcMarkAllMessagesAsRead()**](MessagesApi.md#gcMarkAllMessagesAsRead) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_read | Mark all messages as read
[**gcViewNumberOfEachMembersUnreadMessages()**](MessagesApi.md#gcViewNumberOfEachMembersUnreadMessages) | **GET** /v3/group_channels/{channel_url}/messages/unread_count | View number of each member&#39;s unread messages
[**listMessages()**](MessagesApi.md#listMessages) | **GET** /v3/{channel_type}/{channel_url}/messages | List messages
[**listReactionsOfMessage()**](MessagesApi.md#listReactionsOfMessage) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | List reactions of a message
[**removeExtraDataFromMessage()**](MessagesApi.md#removeExtraDataFromMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Remove extra data from a message
[**removeReactionFromAMessage()**](MessagesApi.md#removeReactionFromAMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Remove a reaction from a message
[**sendMessage()**](MessagesApi.md#sendMessage) | **POST** /v3/{channel_type}/{channel_url}/messages | Send a message
[**translateMessageIntoOtherLanguages()**](MessagesApi.md#translateMessageIntoOtherLanguages) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/translation | Translate a message into other languages
[**updateExtraDataInMessage()**](MessagesApi.md#updateExtraDataInMessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Update extra data in a message
[**updateMessageById()**](MessagesApi.md#updateMessageById) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id} | Update a message
[**viewMessageById()**](MessagesApi.md#viewMessageById) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id} | View a message
[**viewTotalNumberOfMessagesInChannel()**](MessagesApi.md#viewTotalNumberOfMessagesInChannel) | **GET** /v3/{channel_type}/{channel_url}/messages/total_count | View total number of messages in a channel


## `addExtraDataToMessage()`

```php
addExtraDataToMessage($api_token, $channel_type, $channel_url, $message_id, $add_extra_data_to_message_data): \Sendbird\Model\AddExtraDataToMessageResponse
```

Add extra data to a message

## Add extra data to a message  Adds one or more key-values items which store additional information for a message.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-add-extra-data-to-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$add_extra_data_to_message_data = new \Sendbird\Model\AddExtraDataToMessageData(); // \Sendbird\Model\AddExtraDataToMessageData

try {
    $result = $apiInstance->addExtraDataToMessage($api_token, $channel_type, $channel_url, $message_id, $add_extra_data_to_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->addExtraDataToMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **add_extra_data_to_message_data** | [**\Sendbird\Model\AddExtraDataToMessageData**](../Model/AddExtraDataToMessageData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddExtraDataToMessageResponse**](../Model/AddExtraDataToMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addReactionToAMessage()`

```php
addReactionToAMessage($api_token, $channel_type, $channel_url, $message_id, $add_reaction_to_a_message_data): \Sendbird\Model\AddReactionToAMessageResponse
```

Add a reaction to a message

## Add a reaction to a message  Adds a specific reaction to a message.  > __Note__: Currently, this action is only available in group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-add-a-reaction-to-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$add_reaction_to_a_message_data = new \Sendbird\Model\AddReactionToAMessageData(); // \Sendbird\Model\AddReactionToAMessageData

try {
    $result = $apiInstance->addReactionToAMessage($api_token, $channel_type, $channel_url, $message_id, $add_reaction_to_a_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->addReactionToAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **add_reaction_to_a_message_data** | [**\Sendbird\Model\AddReactionToAMessageData**](../Model/AddReactionToAMessageData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddReactionToAMessageResponse**](../Model/AddReactionToAMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessageById()`

```php
deleteMessageById($api_token, $channel_type, $channel_url, $message_id)
```

Delete a message

## Delete a message  Deletes a message from a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-delete-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string

try {
    $apiInstance->deleteMessageById($api_token, $channel_type, $channel_url, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |

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

## `gcMarkAllMessagesAsDelivered()`

```php
gcMarkAllMessagesAsDelivered($api_token, $channel_url, $gc_mark_all_messages_as_delivered_data): \Sendbird\Model\GcMarkAllMessagesAsDeliveredResponse
```

Mark all messages as delivered

## Mark all messages as delivered  Marks all messages in a group channel as delivered for a given user. This action is only applicable for users in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-mark-all-messages-as-delivered ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_mark_all_messages_as_delivered_data = new \Sendbird\Model\GcMarkAllMessagesAsDeliveredData(); // \Sendbird\Model\GcMarkAllMessagesAsDeliveredData

try {
    $result = $apiInstance->gcMarkAllMessagesAsDelivered($api_token, $channel_url, $gc_mark_all_messages_as_delivered_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->gcMarkAllMessagesAsDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_mark_all_messages_as_delivered_data** | [**\Sendbird\Model\GcMarkAllMessagesAsDeliveredData**](../Model/GcMarkAllMessagesAsDeliveredData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GcMarkAllMessagesAsDeliveredResponse**](../Model/GcMarkAllMessagesAsDeliveredResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcMarkAllMessagesAsRead()`

```php
gcMarkAllMessagesAsRead($api_token, $channel_url, $gc_mark_all_messages_as_read_data)
```

Mark all messages as read

## Mark all messages as read  Marks all messages in a group channel as read for a given user. This action is only applicable for users in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-mark-all-messages-as-read ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_mark_all_messages_as_read_data = new \Sendbird\Model\GcMarkAllMessagesAsReadData(); // \Sendbird\Model\GcMarkAllMessagesAsReadData

try {
    $apiInstance->gcMarkAllMessagesAsRead($api_token, $channel_url, $gc_mark_all_messages_as_read_data);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->gcMarkAllMessagesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_mark_all_messages_as_read_data** | [**\Sendbird\Model\GcMarkAllMessagesAsReadData**](../Model/GcMarkAllMessagesAsReadData.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcViewNumberOfEachMembersUnreadMessages()`

```php
gcViewNumberOfEachMembersUnreadMessages($api_token, $channel_url, $user_ids): \Sendbird\Model\GcViewNumberOfEachMembersUnreadMessagesResponse
```

View number of each member's unread messages

## View number of each member's unread messages  Retrieves the total number of each member's unread messages in a group channel. This action is only applicable for users in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-view-number-of-each-member-s-unread-messages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$user_ids = 'user_ids_example'; // string

try {
    $result = $apiInstance->gcViewNumberOfEachMembersUnreadMessages($api_token, $channel_url, $user_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->gcViewNumberOfEachMembersUnreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **user_ids** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GcViewNumberOfEachMembersUnreadMessagesResponse**](../Model/GcViewNumberOfEachMembersUnreadMessagesResponse.md)

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
listMessages($api_token, $channel_type, $channel_url, $message_ts, $message_id, $prev_limit, $next_limit, $include, $reverse, $sender_id, $sender_ids, $operator_filter, $custom_types, $message_type, $including_removed, $include_reactions, $with_sorted_meta_array, $show_subchannel_messages_only, $user_id, $custom_type, $with_meta_array): \Sendbird\Model\ListMessagesResponse
```

List messages

## List messages  Retrieves a list of past messages of a channel.  > This message retrieval is one of Sendbird's [premium features](https://sendbird.com/docs/chat/v3/platform-api/guides/application#-3-sendbird-s-premium-features). Contact our [sales team](https://get.sendbird.com/talk-to-sales.html) for further assistance.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-list-messages ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of past messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_ts = 56; // int
$message_id = 56; // int
$prev_limit = 56; // int
$next_limit = 56; // int
$include = True; // bool
$reverse = True; // bool
$sender_id = 'sender_id_example'; // string
$sender_ids = 'sender_ids_example'; // string
$operator_filter = 'operator_filter_example'; // string
$custom_types = 'custom_types_example'; // string
$message_type = 'message_type_example'; // string
$including_removed = True; // bool
$include_reactions = True; // bool
$with_sorted_meta_array = True; // bool
$show_subchannel_messages_only = True; // bool
$user_id = 'user_id_example'; // string
$custom_type = 'custom_type_example'; // string
$with_meta_array = True; // bool

try {
    $result = $apiInstance->listMessages($api_token, $channel_type, $channel_url, $message_ts, $message_id, $prev_limit, $next_limit, $include, $reverse, $sender_id, $sender_ids, $operator_filter, $custom_types, $message_type, $including_removed, $include_reactions, $with_sorted_meta_array, $show_subchannel_messages_only, $user_id, $custom_type, $with_meta_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->listMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_ts** | **int**|  | [optional]
 **message_id** | **int**|  | [optional]
 **prev_limit** | **int**|  | [optional]
 **next_limit** | **int**|  | [optional]
 **include** | **bool**|  | [optional]
 **reverse** | **bool**|  | [optional]
 **sender_id** | **string**|  | [optional]
 **sender_ids** | **string**|  | [optional]
 **operator_filter** | **string**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **message_type** | **string**|  | [optional]
 **including_removed** | **bool**|  | [optional]
 **include_reactions** | **bool**|  | [optional]
 **with_sorted_meta_array** | **bool**|  | [optional]
 **show_subchannel_messages_only** | **bool**|  | [optional]
 **user_id** | **string**|  | [optional]
 **custom_type** | **string**|  | [optional]
 **with_meta_array** | **bool**|  | [optional]

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

## `listReactionsOfMessage()`

```php
listReactionsOfMessage($api_token, $channel_type, $channel_url, $message_id, $list_users): \Sendbird\Model\ListReactionsOfMessageResponse
```

List reactions of a message

## List reactions of a message  Retrieves a list of reactions made to a message.  > __Note__: Currently, this action is only available in group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-list-reactions-of-a-message ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.  `message_id`      Type: long      Description: Specifies the unique ID of the message to add a reaction to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$list_users = True; // bool

try {
    $result = $apiInstance->listReactionsOfMessage($api_token, $channel_type, $channel_url, $message_id, $list_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->listReactionsOfMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **list_users** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\ListReactionsOfMessageResponse**](../Model/ListReactionsOfMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeExtraDataFromMessage()`

```php
removeExtraDataFromMessage($api_token, $channel_type, $channel_url, $message_id, $keys)
```

Remove extra data from a message

## Remove extra data from a message  Removes specific items from a message by their keys.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-remove-extra-data-from-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$keys = array('keys_example'); // string[]

try {
    $apiInstance->removeExtraDataFromMessage($api_token, $channel_type, $channel_url, $message_id, $keys);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->removeExtraDataFromMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

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

## `removeReactionFromAMessage()`

```php
removeReactionFromAMessage($api_token, $channel_type, $channel_url, $message_id, $user_id, $reaction): \Sendbird\Model\RemoveReactionFromAMessageResponse
```

Remove a reaction from a message

## Remove a reaction from a message  Removes a specific reaction from a message.  > __Note__: Currently, this action is only available in group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-remove-a-reaction-from-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$user_id = 'user_id_example'; // string
$reaction = 'reaction_example'; // string

try {
    $result = $apiInstance->removeReactionFromAMessage($api_token, $channel_type, $channel_url, $message_id, $user_id, $reaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->removeReactionFromAMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **user_id** | **string**|  | [optional]
 **reaction** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\RemoveReactionFromAMessageResponse**](../Model/RemoveReactionFromAMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessage()`

```php
sendMessage($api_token, $channel_type, $channel_url, $send_message_data): \Sendbird\Model\SendBirdMessageResponse
```

Send a message

## Send a message  Sends a message to a channel. You can send a text message, a file message, and an admin message.  >__Note__: With Sendbird Chat SDKs and the platform API, any type of files in messages can be uploaded to Sendbird server.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-send-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$send_message_data = new \Sendbird\Model\SendMessageData(); // \Sendbird\Model\SendMessageData

try {
    $result = $apiInstance->sendMessage($api_token, $channel_type, $channel_url, $send_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **send_message_data** | [**\Sendbird\Model\SendMessageData**](../Model/SendMessageData.md)|  | [optional]

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

## `translateMessageIntoOtherLanguages()`

```php
translateMessageIntoOtherLanguages($api_token, $channel_type, $channel_url, $message_id, $body): \Sendbird\Model\SendBirdMessageResponse
```

Translate a message into other languages

## Translate a message into other languages  Translates a message into specific languages. Only text messages of which type is MESG can be translated into other languages.  > __Note__: Message translation is powered by [Google Cloud Translation API recognition engine](https://cloud.google.com/translate/). Find language codes supported by the engine in the [Miscellaneous](https://sendbird.com/docs/chat/v3/platform-api/guides/Miscellaneous) page or visit the [Language Support](https://cloud.google.com/translate/docs/languages) for Google Cloud Translation.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-translate-a-message-into-other-languages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->translateMessageIntoOtherLanguages($api_token, $channel_type, $channel_url, $message_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->translateMessageIntoOtherLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **body** | **object**|  | [optional]

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

## `updateExtraDataInMessage()`

```php
updateExtraDataInMessage($api_token, $channel_type, $channel_url, $message_id, $update_extra_data_in_message_data): \Sendbird\Model\UpdateExtraDataInMessageResponse
```

Update extra data in a message

## Update extra data in a message  Updates the values of specific items by their keys.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-update-extra-data-in-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$update_extra_data_in_message_data = new \Sendbird\Model\UpdateExtraDataInMessageData(); // \Sendbird\Model\UpdateExtraDataInMessageData

try {
    $result = $apiInstance->updateExtraDataInMessage($api_token, $channel_type, $channel_url, $message_id, $update_extra_data_in_message_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateExtraDataInMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **update_extra_data_in_message_data** | [**\Sendbird\Model\UpdateExtraDataInMessageData**](../Model/UpdateExtraDataInMessageData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateExtraDataInMessageResponse**](../Model/UpdateExtraDataInMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMessageById()`

```php
updateMessageById($api_token, $channel_type, $channel_url, $message_id, $update_message_by_id_data): \Sendbird\Model\SendBirdMessageResponse
```

Update a message

## Update a message  Updates information on a message in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-update-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$update_message_by_id_data = new \Sendbird\Model\UpdateMessageByIdData(); // \Sendbird\Model\UpdateMessageByIdData

try {
    $result = $apiInstance->updateMessageById($api_token, $channel_type, $channel_url, $message_id, $update_message_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **update_message_by_id_data** | [**\Sendbird\Model\UpdateMessageByIdData**](../Model/UpdateMessageByIdData.md)|  | [optional]

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

## `viewMessageById()`

```php
viewMessageById($api_token, $channel_type, $channel_url, $message_id, $with_sorted_meta_array, $with_meta_array): \Sendbird\Model\SendBirdMessageResponse
```

View a message

## View a message  Retrieves information on a message.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-view-a-message ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.  `message_id`      Type: long      Description: Specifies the unique ID of the message to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$with_sorted_meta_array = True; // bool
$with_meta_array = True; // bool

try {
    $result = $apiInstance->viewMessageById($api_token, $channel_type, $channel_url, $message_id, $with_sorted_meta_array, $with_meta_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->viewMessageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **with_sorted_meta_array** | **bool**|  | [optional]
 **with_meta_array** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdMessageResponse**](../Model/SendBirdMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewTotalNumberOfMessagesInChannel()`

```php
viewTotalNumberOfMessagesInChannel($api_token, $channel_type, $channel_url): \Sendbird\Model\ViewTotalNumberOfMessagesInChannelResponse
```

View total number of messages in a channel

## View total number of messages in a channel  Retrieves the total number of messages in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-view-total-number-of-messages-in-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string

try {
    $result = $apiInstance->viewTotalNumberOfMessagesInChannel($api_token, $channel_type, $channel_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->viewTotalNumberOfMessagesInChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\ViewTotalNumberOfMessagesInChannelResponse**](../Model/ViewTotalNumberOfMessagesInChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
