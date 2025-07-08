# Sendbird\ModerationApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**blockAUser()**](ModerationApi.md#blockAUser) | **POST** /v3/users/{user_id}/block | Block a user
[**freezeAGroupChannel()**](ModerationApi.md#freezeAGroupChannel) | **PUT** /v3/group_channels/{channel_url}/freeze | Freeze a group channel
[**freezeAnOpenChannel()**](ModerationApi.md#freezeAnOpenChannel) | **PUT** /v3/open_channels/{channel_url}/freeze | Freeze an open channel
[**listBlockedUsers()**](ModerationApi.md#listBlockedUsers) | **GET** /v3/users/{user_id}/block | List blocked users
[**unblockAUser()**](ModerationApi.md#unblockAUser) | **DELETE** /v3/users/{user_id}/block/{target_id} | Unblock a user


## `blockAUser()`

```php
blockAUser($user_id, $api_token, $block_a_user_request): \Sendbird\Model\BlockAUserResponse
```

Block a user

## Block a user  A user can block another user if the user doesn't wish to receive any messages or notifications from the blocked user in a 1-to-1 group channel. In a 1-to-N group channel, the user can still receive messages from the blocked user, but this depends on the UI settings of the chat view. In any case, notifications from the blocked user won't be delivered to the 1-to-N group channel. You can choose whether or not the user can view [which users are blocked](https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users) in the channel UI.  Sendbird application provides two blocking options: include or exclude blocked users when sending invitations, and turn on or off notifications from blocked users. [Explicit and classic block modes](https://sendbird.com/docs/chat/platform-api/v3/deprecated#2-explicit-and-classic-block-modes) have been deprecated and are only supported for customers who started using them before they were deprecated.  - **Include or exclude blocked users when sending invitations**: Determines whether or not to automatically filter out blocked users when a user invites a group of users to a new group channel. By default, blocked users are included when sending invitations. The value of this option can be changed by Sendbird if your Sendbird application isn't integrated to the client app. If you want to change the value, [contact our sales team](https://get.sendbird.com/talk-to-sales.html).      - **Turn on or off notifications from blocked users**: Determines whether or not to receive message notifications from the blocked user in a specific 1-to-N group channel where they are both members. By default, a user doesn't receive notifications from blocked users. The value of this option can be set individually per channel. If you want to use this option, [contact our sales team](https://get.sendbird.com/talk-to-sales.html).       > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).      The following tables explain what happens to a user's chat experience when the user blocks another user in a 1-to-1 or 1-to-N group channel. In the case of a 1-to-1 group channel, the block mode is only maintained with the original members. If other than the original members are added, the rules for 1-to-N group channel begin to apply.  [https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/block-users#1-block-users](https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/block-users#1-block-users)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['block_a_user_request'] = new \Sendbird\Model\BlockAUserRequest(); // \Sendbird\Model\BlockAUserRequest

try {
    $result = $apiInstance->blockAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->blockAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **block_a_user_request** | [**\Sendbird\Model\BlockAUserRequest**](../Model/BlockAUserRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\BlockAUserResponse**](../Model/BlockAUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `freezeAGroupChannel()`

```php
freezeAGroupChannel($channel_url, $api_token, $freeze_a_group_channel_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Freeze a group channel

## Freeze a group channel  Freezes or unfreezes a group channel.  > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).      [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-a-group-channel#1-freeze-a-group-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['freeze_a_group_channel_request'] = new \Sendbird\Model\FreezeAGroupChannelRequest(); // \Sendbird\Model\FreezeAGroupChannelRequest

try {
    $result = $apiInstance->freezeAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->freezeAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **freeze_a_group_channel_request** | [**\Sendbird\Model\FreezeAGroupChannelRequest**](../Model/FreezeAGroupChannelRequest.md)|  | [optional]

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

## `freezeAnOpenChannel()`

```php
freezeAnOpenChannel($channel_url, $api_token, $freeze_an_open_channel_request): \Sendbird\Model\SendbirdOpenChannel
```

Freeze an open channel

## Freeze an open channel  Freezes or unfreezes an open channel.  > **Note**: To learn more about other available moderation tools, see [Moderation Overview](https://sendbird.com/docs/chat/platform-api/v3/moderation/moderation-overview#2-actions).      [https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel](https://sendbird.com/docs/chat/platform-api/v3/moderation/freezing-a-channel/freeze-an-open-channel#1-freeze-an-open-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['freeze_an_open_channel_request'] = new \Sendbird\Model\FreezeAnOpenChannelRequest(); // \Sendbird\Model\FreezeAnOpenChannelRequest

try {
    $result = $apiInstance->freezeAnOpenChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->freezeAnOpenChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **freeze_an_open_channel_request** | [**\Sendbird\Model\FreezeAnOpenChannelRequest**](../Model/FreezeAnOpenChannelRequest.md)|  | [optional]

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

## `listBlockedUsers()`

```php
listBlockedUsers($user_id, $list, $token, $limit, $user_ids, $metadatakey, $metadatavalues_in, $api_token): \Sendbird\Model\ListBlockedUsersResponse
```

List blocked users

## List blocked by and blocking users  This action retrieves a list of users who are either blocked by a specific user or a list of users who are blocking a specific user.  [https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users#1-list-blocked-by-and-blocking-users](https://sendbird.com/docs/chat/platform-api/v3/moderation/listing-blocked-and-blocking-users/list-blocked-and-blocking-users#1-list-blocked-by-and-blocking-users)  `user_id`   Type: string   Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['list'] = 'list_example'; // string | Specifies whether to retrieve a list of users who are blocked by the specified user or a list of users who are blocking the specified user. Acceptable values are blocked_by_me and blocking_me. The `me` in the values refers to the user specified in the parameter. (Default: blocked_by_me)
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['user_ids'] = 'user_ids_example'; // string | Specifies the user IDs of the blocked or blocking users to search for. The value should be a comma-separated string that consists of multiple URL encoded user IDs.
$associate_array['metadatakey'] = 'metadatakey_example'; // string
$associate_array['metadatavalues_in'] = 'metadatavalues_in_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listBlockedUsers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->listBlockedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **list** | **string**| Specifies whether to retrieve a list of users who are blocked by the specified user or a list of users who are blocking the specified user. Acceptable values are blocked_by_me and blocking_me. The &#x60;me&#x60; in the values refers to the user specified in the parameter. (Default: blocked_by_me) | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **user_ids** | **string**| Specifies the user IDs of the blocked or blocking users to search for. The value should be a comma-separated string that consists of multiple URL encoded user IDs. | [optional]
 **metadatakey** | **string**|  | [optional]
 **metadatavalues_in** | **string**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListBlockedUsersResponse**](../Model/ListBlockedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockAUser()`

```php
unblockAUser($user_id, $target_id, $api_token): object
```

Unblock a user

## Unblock a user  Unblocks the user.  https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/unblock-a-user#1-unblock-a-user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['target_id'] = 'target_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->unblockAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->unblockAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **target_id** | **string**| (Required) |
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
