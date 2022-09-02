# Sendbird\MessageApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEmojiCategories()**](MessageApi.md#addEmojiCategories) | **POST** /v3/emoji_categories | Add emoji categories
[**addEmojis()**](MessageApi.md#addEmojis) | **POST** /v3/emojis | Add emojis
[**addExtraDataToMessage()**](MessageApi.md#addExtraDataToMessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Add extra data to a message
[**addReactionToAMessage()**](MessageApi.md#addReactionToAMessage) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Add a reaction to a message
[**deleteEmojiByKey()**](MessageApi.md#deleteEmojiByKey) | **DELETE** /v3/emojis/{emoji_key} | Delete an emoji
[**deleteEmojiCategoryById()**](MessageApi.md#deleteEmojiCategoryById) | **DELETE** /v3/emoji_categories/{emoji_category_id} | Delete an emoji category
[**deleteMessageById()**](MessageApi.md#deleteMessageById) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id} | Delete a message
[**enableReactions()**](MessageApi.md#enableReactions) | **PUT** /v3/applications/settings/reactions | Enable reactions
[**gcMarkAllMessagesAsDelivered()**](MessageApi.md#gcMarkAllMessagesAsDelivered) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_delivered | Mark all messages as delivered
[**gcMarkAllMessagesAsRead()**](MessageApi.md#gcMarkAllMessagesAsRead) | **PUT** /v3/group_channels/{channel_url}/messages/mark_as_read | Mark all messages as read
[**gcViewNumberOfEachMembersUnreadMessages()**](MessageApi.md#gcViewNumberOfEachMembersUnreadMessages) | **GET** /v3/group_channels/{channel_url}/messages/unread_count | View number of each member&#39;s unread messages
[**getEmojiByKey()**](MessageApi.md#getEmojiByKey) | **GET** /v3/emojis/{emoji_key} | Get an emoji
[**getEmojiCategoryById()**](MessageApi.md#getEmojiCategoryById) | **GET** /v3/emoji_categories/{emoji_category_id} | Get an emoji category
[**getStatistics()**](MessageApi.md#getStatistics) | **GET** /v3/announcement_stats/weekly | Get statistics - weekly
[**getStatisticsDaily()**](MessageApi.md#getStatisticsDaily) | **GET** /v3/announcement_stats/daily | Get statistics - daily
[**getStatisticsMonthly()**](MessageApi.md#getStatisticsMonthly) | **GET** /v3/announcement_stats/monthly | Get statistics - monthly
[**listAllEmojisAndEmojiCategories()**](MessageApi.md#listAllEmojisAndEmojiCategories) | **GET** /v3/emoji_categories | List all emojis and emoji categories
[**listAnnouncementGroups()**](MessageApi.md#listAnnouncementGroups) | **GET** /v3/announcement_group | List announcement groups
[**listAnnouncements()**](MessageApi.md#listAnnouncements) | **GET** /v3/announcements | List announcements
[**listEmojis()**](MessageApi.md#listEmojis) | **GET** /v3/emojis | List emojis
[**listMessages()**](MessageApi.md#listMessages) | **GET** /v3/{channel_type}/{channel_url}/messages | List messages
[**listReactionsOfMessage()**](MessageApi.md#listReactionsOfMessage) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | List reactions of a message
[**migrateMessagesByUrl()**](MessageApi.md#migrateMessagesByUrl) | **POST** /v3/migration/{target_channel_url} | Migrate messages
[**removeExtraDataFromMessage()**](MessageApi.md#removeExtraDataFromMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Remove extra data from a message
[**removeReactionFromAMessage()**](MessageApi.md#removeReactionFromAMessage) | **DELETE** /v3/{channel_type}/{channel_url}/messages/{message_id}/reactions | Remove a reaction from a message
[**scheduleAnnouncement()**](MessageApi.md#scheduleAnnouncement) | **POST** /v3/announcements | Schedule an announcement
[**sendMessage()**](MessageApi.md#sendMessage) | **POST** /v3/{channel_type}/{channel_url}/messages | Send a message
[**translateMessageIntoOtherLanguages()**](MessageApi.md#translateMessageIntoOtherLanguages) | **POST** /v3/{channel_type}/{channel_url}/messages/{message_id}/translation | Translate a message into other languages
[**updateAnnouncementById()**](MessageApi.md#updateAnnouncementById) | **PUT** /v3/announcements/{unique_id} | Update an announcement
[**updateEmojiCategoryUrlById()**](MessageApi.md#updateEmojiCategoryUrlById) | **PUT** /v3/emoji_categories/{emoji_category_id} | Update an emoji category URL
[**updateEmojiUrlByKey()**](MessageApi.md#updateEmojiUrlByKey) | **PUT** /v3/emojis/{emoji_key} | Update an emoji URL
[**updateExtraDataInMessage()**](MessageApi.md#updateExtraDataInMessage) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id}/sorted_metaarray | Update extra data in a message
[**updateMessageById()**](MessageApi.md#updateMessageById) | **PUT** /v3/{channel_type}/{channel_url}/messages/{message_id} | Update a message
[**useDefaultEmojis()**](MessageApi.md#useDefaultEmojis) | **PUT** /v3/applications/settings/use_default_emoji | Use default emojis
[**viewMessageById()**](MessageApi.md#viewMessageById) | **GET** /v3/{channel_type}/{channel_url}/messages/{message_id} | View a message
[**viewTotalNumberOfMessagesInChannel()**](MessageApi.md#viewTotalNumberOfMessagesInChannel) | **GET** /v3/{channel_type}/{channel_url}/messages/total_count | View total number of messages in a channel


## `addEmojiCategories()`

```php
addEmojiCategories($api_token, $body): \Sendbird\Model\AddEmojiCategoriesResponse
```

Add emoji categories

## Add emoji categories  Adds a list of one or more new emoji categories to the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-add-emoji-categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->addEmojiCategories($api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->addEmojiCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

[**\Sendbird\Model\AddEmojiCategoriesResponse**](../Model/AddEmojiCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addEmojis()`

```php
addEmojis($api_token, $add_emojis_data): \Sendbird\Model\AddEmojisResponse
```

Add emojis

## Add emojis  Adds a list of one or more new emojis to the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-add-emojis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$add_emojis_data = new \Sendbird\Model\AddEmojisData(); // \Sendbird\Model\AddEmojisData

try {
    $result = $apiInstance->addEmojis($api_token, $add_emojis_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->addEmojis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **add_emojis_data** | [**\Sendbird\Model\AddEmojisData**](../Model/AddEmojisData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddEmojisResponse**](../Model/AddEmojisResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->addExtraDataToMessage: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->addReactionToAMessage: ', $e->getMessage(), PHP_EOL;
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

## `deleteEmojiByKey()`

```php
deleteEmojiByKey($api_token, $emoji_key)
```

Delete an emoji

## Delete an emoji  Deletes an emoji from the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-delete-an-emoji ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_key = 'emoji_key_example'; // string

try {
    $apiInstance->deleteEmojiByKey($api_token, $emoji_key);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deleteEmojiByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_key** | **string**|  |

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

## `deleteEmojiCategoryById()`

```php
deleteEmojiCategoryById($api_token, $emoji_category_id): object
```

Delete an emoji category

## Delete an emoji category  Deletes an emoji category with the specified ID.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-delete-an-emoji-category ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_category_id = 'emoji_category_id_example'; // string

try {
    $result = $apiInstance->deleteEmojiCategoryById($api_token, $emoji_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deleteEmojiCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_category_id** | **string**|  |

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

## `deleteMessageById()`

```php
deleteMessageById($api_token, $channel_type, $channel_url, $message_id): object
```

Delete a message

## Delete a message  Deletes a message from a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-delete-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->deleteMessageById($api_token, $channel_type, $channel_url, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deleteMessageById: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableReactions()`

```php
enableReactions($api_token, $enable_reactions_data): \Sendbird\Model\EnableReactionsResponse
```

Enable reactions

## Enable reactions  Turn on or off reactions in a Sendbird application.  > __Note__: This action also allows reactions in UIKit.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-enable-reactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$enable_reactions_data = new \Sendbird\Model\EnableReactionsData(); // \Sendbird\Model\EnableReactionsData

try {
    $result = $apiInstance->enableReactions($api_token, $enable_reactions_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->enableReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **enable_reactions_data** | [**\Sendbird\Model\EnableReactionsData**](../Model/EnableReactionsData.md)|  | [optional]

### Return type

[**\Sendbird\Model\EnableReactionsResponse**](../Model/EnableReactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->gcMarkAllMessagesAsDelivered: ', $e->getMessage(), PHP_EOL;
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
gcMarkAllMessagesAsRead($api_token, $channel_url, $gc_mark_all_messages_as_read_data): object
```

Mark all messages as read

## Mark all messages as read  Marks all messages in a group channel as read for a given user. This action is only applicable for users in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-mark-all-messages-as-read ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_mark_all_messages_as_read_data = new \Sendbird\Model\GcMarkAllMessagesAsReadData(); // \Sendbird\Model\GcMarkAllMessagesAsReadData

try {
    $result = $apiInstance->gcMarkAllMessagesAsRead($api_token, $channel_url, $gc_mark_all_messages_as_read_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->gcMarkAllMessagesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_mark_all_messages_as_read_data** | [**\Sendbird\Model\GcMarkAllMessagesAsReadData**](../Model/GcMarkAllMessagesAsReadData.md)|  | [optional]

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->gcViewNumberOfEachMembersUnreadMessages: ', $e->getMessage(), PHP_EOL;
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

## `getEmojiByKey()`

```php
getEmojiByKey($api_token, $emoji_key): \Sendbird\Model\SendBirdEmoji
```

Get an emoji

## Get an emoji  Retrieves an emoji with the specified key.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-get-an-emoji ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_key = 'emoji_key_example'; // string

try {
    $result = $apiInstance->getEmojiByKey($api_token, $emoji_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getEmojiByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_key** | **string**|  |

### Return type

[**\Sendbird\Model\SendBirdEmoji**](../Model/SendBirdEmoji.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmojiCategoryById()`

```php
getEmojiCategoryById($api_token, $emoji_category_id): \Sendbird\Model\SendBirdEmojiCategory
```

Get an emoji category

## Get an emoji category  Retrieves an emoji category with the specified ID, including its emojis.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-get-an-emoji-category ----------------------------   `emoji_category_id`      Type: int      Description: Specifies the unique ID of the emoji category to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_category_id = 'emoji_category_id_example'; // string

try {
    $result = $apiInstance->getEmojiCategoryById($api_token, $emoji_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getEmojiCategoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_category_id** | **string**|  |

### Return type

[**\Sendbird\Model\SendBirdEmojiCategory**](../Model/SendBirdEmojiCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatistics()`

```php
getStatistics($api_token): \Sendbird\Model\GetStatisticsResponse
```

Get statistics - weekly

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getStatistics($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\GetStatisticsResponse**](../Model/GetStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatisticsDaily()`

```php
getStatisticsDaily($api_token, $start_date, $end_date, $start_week, $end_week, $start_month, $end_month, $announcement_group): \Sendbird\Model\GetStatisticsDailyResponse
```

Get statistics - daily

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$start_week = 'start_week_example'; // string
$end_week = 'end_week_example'; // string
$start_month = 'start_month_example'; // string
$end_month = 'end_month_example'; // string
$announcement_group = 'announcement_group_example'; // string

try {
    $result = $apiInstance->getStatisticsDaily($api_token, $start_date, $end_date, $start_week, $end_week, $start_month, $end_month, $announcement_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getStatisticsDaily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **start_date** | **string**|  |
 **end_date** | **string**|  |
 **start_week** | **string**|  |
 **end_week** | **string**|  |
 **start_month** | **string**|  |
 **end_month** | **string**|  |
 **announcement_group** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GetStatisticsDailyResponse**](../Model/GetStatisticsDailyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatisticsMonthly()`

```php
getStatisticsMonthly($api_token): \Sendbird\Model\GetStatisticsMonthlyResponse
```

Get statistics - monthly

## Get statistics  Retrieves the daily, weekly or monthly statistics of an announcement or an announcement group.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-get-statistics ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getStatisticsMonthly($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getStatisticsMonthly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\GetStatisticsMonthlyResponse**](../Model/GetStatisticsMonthlyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllEmojisAndEmojiCategories()`

```php
listAllEmojisAndEmojiCategories($api_token): \Sendbird\Model\ListAllEmojisAndEmojiCategoriesResponse
```

List all emojis and emoji categories

## List all emojis and emoji categories  Retrieves a list of all emoji categories registered to the application, including their emojis.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-list-all-emojis-and-emoji-categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listAllEmojisAndEmojiCategories($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->listAllEmojisAndEmojiCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ListAllEmojisAndEmojiCategoriesResponse**](../Model/ListAllEmojisAndEmojiCategoriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAnnouncementGroups()`

```php
listAnnouncementGroups($api_token, $token, $limit): \Sendbird\Model\ListAnnouncementGroupsResponse
```

List announcement groups

## List announcement groups  Retrieves a list of announcement groups.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-list-announcement-groups ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listAnnouncementGroups($api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->listAnnouncementGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListAnnouncementGroupsResponse**](../Model/ListAnnouncementGroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAnnouncements()`

```php
listAnnouncements($api_token, $token, $limit, $order, $status, $announcement_group): \Sendbird\Model\ListAnnouncementsResponse
```

List announcements

## List announcements  Retrieves a list of announcements.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-list-announcements ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int
$order = 'order_example'; // string
$status = 'status_example'; // string
$announcement_group = 'announcement_group_example'; // string

try {
    $result = $apiInstance->listAnnouncements($api_token, $token, $limit, $order, $status, $announcement_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->listAnnouncements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **order** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **announcement_group** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListAnnouncementsResponse**](../Model/ListAnnouncementsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmojis()`

```php
listEmojis($api_token): \Sendbird\Model\ListEmojisResponse
```

List emojis

## List emojis  Retrieves a list of all emojis registered to the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-list-emojis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listEmojis($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->listEmojis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ListEmojisResponse**](../Model/ListEmojisResponse.md)

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



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_ts = 'message_ts_example'; // string
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
    echo 'Exception when calling MessageApi->listMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_ts** | **string**|  | [optional]
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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->listReactionsOfMessage: ', $e->getMessage(), PHP_EOL;
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

## `migrateMessagesByUrl()`

```php
migrateMessagesByUrl($api_token, $target_channel_url, $body)
```

Migrate messages

## Migrate messages  Using our migration API, you can migrate the messages from another system into a Sendbird system's [channel](https://sendbird.com/docs/chat/v3/platform-api/guides/channel-types) which consists of users, messages, and other chat-related data.  > To turn on this feature, [contact our support team](https://dashboard.sendbird.com/settings/contact_us).  There are three things to do in advance before the migration. Follow the instructions below:  1. Register the users of your current chat solution to your Sendbird application. You can migrate the users into the Sendbird system using the [user creation API](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-create-a-user). 2. Create either an [open](https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel) or a [group](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-create-a-channel) channel to migrate the messages of your chat solution. The Sendbird system doesn't create a channel for your migration automatically. 3. The maximum number of migrated messages per call is 100. To avoid the failure during your migration, you must adjust the number of messages to process at once via the API.  https://sendbird.com/docs/chat/v3/platform-api/guides/migration#2-migrate-messages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$target_channel_url = 'target_channel_url_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->migrateMessagesByUrl($api_token, $target_channel_url, $body);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->migrateMessagesByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **target_channel_url** | **string**|  |
 **body** | **object**|  | [optional]

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

## `removeExtraDataFromMessage()`

```php
removeExtraDataFromMessage($api_token, $channel_type, $channel_url, $message_id, $keys): object
```

Remove extra data from a message

## Remove extra data from a message  Removes specific items from a message by their keys.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-remove-extra-data-from-a-message ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
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
    $result = $apiInstance->removeExtraDataFromMessage($api_token, $channel_type, $channel_url, $message_id, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->removeExtraDataFromMessage: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->removeReactionFromAMessage: ', $e->getMessage(), PHP_EOL;
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

## `scheduleAnnouncement()`

```php
scheduleAnnouncement($api_token, $schedule_announcement_data): \Sendbird\Model\ScheduleAnnouncementResponse
```

Schedule an announcement

## Schedule an announcement  Schedules a new announcement. You can also schedule an announcement in the [Sendbird Dashboard](https://dashboard.sendbird.com).  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-schedule-an-announcement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$schedule_announcement_data = new \Sendbird\Model\ScheduleAnnouncementData(); // \Sendbird\Model\ScheduleAnnouncementData

try {
    $result = $apiInstance->scheduleAnnouncement($api_token, $schedule_announcement_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->scheduleAnnouncement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **schedule_announcement_data** | [**\Sendbird\Model\ScheduleAnnouncementData**](../Model/ScheduleAnnouncementData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ScheduleAnnouncementResponse**](../Model/ScheduleAnnouncementResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->sendMessage: ', $e->getMessage(), PHP_EOL;
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
translateMessageIntoOtherLanguages($api_token, $channel_type, $channel_url, $message_id, $translate_message_into_other_languages_data): \Sendbird\Model\SendBirdMessageResponse
```

Translate a message into other languages

## Translate a message into other languages  Translates a message into specific languages. Only text messages of which type is MESG can be translated into other languages.  > __Note__: Message translation is powered by [Google Cloud Translation API recognition engine](https://cloud.google.com/translate/). Find language codes supported by the engine in the [Miscellaneous](https://sendbird.com/docs/chat/v3/platform-api/guides/Miscellaneous) page or visit the [Language Support](https://cloud.google.com/translate/docs/languages) for Google Cloud Translation.  https://sendbird.com/docs/chat/v3/platform-api/guides/messages#2-translate-a-message-into-other-languages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$message_id = 'message_id_example'; // string
$translate_message_into_other_languages_data = new \Sendbird\Model\TranslateMessageIntoOtherLanguagesData(); // \Sendbird\Model\TranslateMessageIntoOtherLanguagesData

try {
    $result = $apiInstance->translateMessageIntoOtherLanguages($api_token, $channel_type, $channel_url, $message_id, $translate_message_into_other_languages_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->translateMessageIntoOtherLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **message_id** | **string**|  |
 **translate_message_into_other_languages_data** | [**\Sendbird\Model\TranslateMessageIntoOtherLanguagesData**](../Model/TranslateMessageIntoOtherLanguagesData.md)|  | [optional]

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

## `updateAnnouncementById()`

```php
updateAnnouncementById($api_token, $unique_id, $update_announcement_by_id_data): \Sendbird\Model\UpdateAnnouncementByIdResponse
```

Update an announcement

## Update an announcement  Updates information of a specific announcement before it starts or changes the status of a specific announcement after it starts. For the 2 different applications, refer to the request body below.  >__Note__: Updating information of an announcement is possible only when the announcement status is scheduled, indicating it hasn't started yet.  https://sendbird.com/docs/chat/v3/platform-api/guides/announcements#2-update-an-announcement ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$unique_id = 'unique_id_example'; // string
$update_announcement_by_id_data = new \Sendbird\Model\UpdateAnnouncementByIdData(); // \Sendbird\Model\UpdateAnnouncementByIdData

try {
    $result = $apiInstance->updateAnnouncementById($api_token, $unique_id, $update_announcement_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->updateAnnouncementById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **unique_id** | **string**|  |
 **update_announcement_by_id_data** | [**\Sendbird\Model\UpdateAnnouncementByIdData**](../Model/UpdateAnnouncementByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateAnnouncementByIdResponse**](../Model/UpdateAnnouncementByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmojiCategoryUrlById()`

```php
updateEmojiCategoryUrlById($api_token, $emoji_category_id, $update_emoji_category_url_by_id_data): \Sendbird\Model\SendBirdEmojiCategory
```

Update an emoji category URL

## Update an emoji category URL  Updates the URL of an emoji category with the specified ID.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-update-an-emoji-category-url ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_category_id = 'emoji_category_id_example'; // string
$update_emoji_category_url_by_id_data = new \Sendbird\Model\UpdateEmojiCategoryUrlByIdData(); // \Sendbird\Model\UpdateEmojiCategoryUrlByIdData

try {
    $result = $apiInstance->updateEmojiCategoryUrlById($api_token, $emoji_category_id, $update_emoji_category_url_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->updateEmojiCategoryUrlById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_category_id** | **string**|  |
 **update_emoji_category_url_by_id_data** | [**\Sendbird\Model\UpdateEmojiCategoryUrlByIdData**](../Model/UpdateEmojiCategoryUrlByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdEmojiCategory**](../Model/SendBirdEmojiCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmojiUrlByKey()`

```php
updateEmojiUrlByKey($api_token, $emoji_key, $update_emoji_url_by_key_data): \Sendbird\Model\SendBirdEmoji
```

Update an emoji URL

## Update an emoji URL  Updates the image URL of an emoji with the specified key.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-update-an-emoji-url ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_key = 'emoji_key_example'; // string
$update_emoji_url_by_key_data = new \Sendbird\Model\UpdateEmojiUrlByKeyData(); // \Sendbird\Model\UpdateEmojiUrlByKeyData

try {
    $result = $apiInstance->updateEmojiUrlByKey($api_token, $emoji_key, $update_emoji_url_by_key_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->updateEmojiUrlByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **emoji_key** | **string**|  |
 **update_emoji_url_by_key_data** | [**\Sendbird\Model\UpdateEmojiUrlByKeyData**](../Model/UpdateEmojiUrlByKeyData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdEmoji**](../Model/SendBirdEmoji.md)

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->updateExtraDataInMessage: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->updateMessageById: ', $e->getMessage(), PHP_EOL;
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

## `useDefaultEmojis()`

```php
useDefaultEmojis($api_token, $use_default_emojis_data): \Sendbird\Model\UseDefaultEmojisResponse
```

Use default emojis

## Use default emojis  Determines whether to use the 7 default emojis initially provided.  https://sendbird.com/docs/chat/v3/platform-api/guides/emojis#2-use-default-emojis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$use_default_emojis_data = new \Sendbird\Model\UseDefaultEmojisData(); // \Sendbird\Model\UseDefaultEmojisData

try {
    $result = $apiInstance->useDefaultEmojis($api_token, $use_default_emojis_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->useDefaultEmojis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **use_default_emojis_data** | [**\Sendbird\Model\UseDefaultEmojisData**](../Model/UseDefaultEmojisData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UseDefaultEmojisResponse**](../Model/UseDefaultEmojisResponse.md)

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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->viewMessageById: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\MessageApi(
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
    echo 'Exception when calling MessageApi->viewTotalNumberOfMessagesInChannel: ', $e->getMessage(), PHP_EOL;
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
