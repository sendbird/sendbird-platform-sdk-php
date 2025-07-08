# Sendbird\UserApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addARegistrationOrDeviceToken()**](UserApi.md#addARegistrationOrDeviceToken) | **POST** /v3/users/{user_id}/push/{token_type} | Add a registration or device token
[**chooseAPushNotificationContentTemplate()**](UserApi.md#chooseAPushNotificationContentTemplate) | **PUT** /v3/users/{user_id}/push/template | Choose a push notification content template
[**createAUser()**](UserApi.md#createAUser) | **POST** /v3/users | Create a user
[**createUserToken()**](UserApi.md#createUserToken) | **POST** /v3/users/{user_id}/token | Create user token
[**deleteAUser()**](UserApi.md#deleteAUser) | **DELETE** /v3/users/{user_id} | Delete a user
[**getChannelInvitationPreference()**](UserApi.md#getChannelInvitationPreference) | **GET** /v3/users/{user_id}/channel_invitation_preference | Get channel invitation preference
[**leaveMyGroupChannels()**](UserApi.md#leaveMyGroupChannels) | **PUT** /v3/users/{user_id}/my_group_channels/leave | Leave my group channels
[**listMyGroupChannels()**](UserApi.md#listMyGroupChannels) | **GET** /v3/users/{user_id}/my_group_channels | List my group channels
[**listRegistrationOrDeviceTokens()**](UserApi.md#listRegistrationOrDeviceTokens) | **GET** /v3/users/{user_id}/push/{token_type} | List registration or device tokens
[**listUsers()**](UserApi.md#listUsers) | **GET** /v3/users | List users
[**markAllMessagesAsRead()**](UserApi.md#markAllMessagesAsRead) | **PUT** /v3/users/{user_id}/mark_as_read_all | Mark all messages as read
[**removeARegistrationOrDeviceToken()**](UserApi.md#removeARegistrationOrDeviceToken) | **DELETE** /v3/users/{user_id}/push/{token_type}/{token} | Remove a registration or device token - When unregistering a specific token
[**removeARegistrationOrDeviceTokenFromAnOwner()**](UserApi.md#removeARegistrationOrDeviceTokenFromAnOwner) | **DELETE** /v3/push/device_tokens/{token_type}/{token} | Remove a registration or device token from an owner
[**removeAllRegistrationOrDeviceToken()**](UserApi.md#removeAllRegistrationOrDeviceToken) | **DELETE** /v3/users/{user_id}/push | Remove a registration or device token - When unregistering all device tokens
[**resetPushPreferences()**](UserApi.md#resetPushPreferences) | **DELETE** /v3/users/{user_id}/push_preference | Reset push preferences
[**updateAUser()**](UserApi.md#updateAUser) | **PUT** /v3/users/{user_id} | Update a user
[**updateChannelInvitationPreference()**](UserApi.md#updateChannelInvitationPreference) | **PUT** /v3/users/{user_id}/channel_invitation_preference | Update channel invitation preference
[**updateCountPreferenceOfAChannel()**](UserApi.md#updateCountPreferenceOfAChannel) | **PUT** /v3/users/{user_id}/count_preference/{channel_url} | Update count preference of a channel
[**updatePushPreferences()**](UserApi.md#updatePushPreferences) | **PUT** /v3/users/{user_id}/push_preference | Update push preferences
[**updatePushPreferencesForAChannel()**](UserApi.md#updatePushPreferencesForAChannel) | **PUT** /v3/users/{user_id}/push_preference/{channel_url} | Update push preferences for a channel
[**viewAUser()**](UserApi.md#viewAUser) | **GET** /v3/users/{user_id} | View a user
[**viewCountPreferenceOfAChannel()**](UserApi.md#viewCountPreferenceOfAChannel) | **GET** /v3/users/{user_id}/count_preference/{channel_url} | View count preference of a channel
[**viewNumberOfChannelsWithUnreadMessages()**](UserApi.md#viewNumberOfChannelsWithUnreadMessages) | **GET** /v3/users/{user_id}/unread_channel_count | View number of channels with unread messages
[**viewNumberOfUnreadMessages()**](UserApi.md#viewNumberOfUnreadMessages) | **GET** /v3/users/{user_id}/unread_message_count | View number of unread messages
[**viewPushPreferences()**](UserApi.md#viewPushPreferences) | **GET** /v3/users/{user_id}/push_preference | View push preferences
[**viewPushPreferencesForAChannel()**](UserApi.md#viewPushPreferencesForAChannel) | **GET** /v3/users/{user_id}/push_preference/{channel_url} | View push preferences for a channel
[**viewWhoOwnsARegistrationOrDeviceToken()**](UserApi.md#viewWhoOwnsARegistrationOrDeviceToken) | **GET** /v3/push/device_tokens/{token_type}/{token} | View who owns a registration or device token


## `addARegistrationOrDeviceToken()`

```php
addARegistrationOrDeviceToken($user_id, $token_type, $api_token, $add_a_registration_or_device_token_request): \Sendbird\Model\AddARegistrationOrDeviceTokenResponse
```

Add a registration or device token

## Add a registration or device token  > __Note__: A user can have up to 20 FCM registration tokens, 20 HMS device tokens, and 20 APNs device tokens each. The oldest token will be deleted before a new token is added for a user who already has 20 registration or device tokens. Only the 20 newest tokens will be maintained for users who already have more than 20 of each token type.  To send notification requests to push notification services on behalf of your server, adds a specific user's FCM registration token, HMS device token, or APNs device token to Sendbird server. Depending on which push service you are using, you can pass one of two values in `token_type`: `gcm`, `huawei`, or `apns`.  A FCM registration token and an APNs device token allow identification of each client app instance on each device, and are generated and registered by Android and iOS apps through the corresponding SDKs. Use this method if you need to register a token via your own server.  > __Note__: For more information on the registration token and device token, visit the Google's [FCM](https://firebase.google.com/docs/auth/admin/verify-id-tokens) page, Huawei's [Push kit](https://developer.huawei.com/consumer/en/doc/development/HMSCore-Guides/service-introduction-0000001050040060) and Apple's [APNs](https://developer.apple.com/library/content/documentation/NetworkingInternet/Conceptual/RemoteNotificationsPG/APNSOverview.html) page.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-add-a-registration-or-device-token ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['token_type'] = 'token_type_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_a_registration_or_device_token_request'] = new \Sendbird\Model\AddARegistrationOrDeviceTokenRequest(); // \Sendbird\Model\AddARegistrationOrDeviceTokenRequest

try {
    $result = $apiInstance->addARegistrationOrDeviceToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addARegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **token_type** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **add_a_registration_or_device_token_request** | [**\Sendbird\Model\AddARegistrationOrDeviceTokenRequest**](../Model/AddARegistrationOrDeviceTokenRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddARegistrationOrDeviceTokenResponse**](../Model/AddARegistrationOrDeviceTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chooseAPushNotificationContentTemplate()`

```php
chooseAPushNotificationContentTemplate($user_id, $api_token, $choose_a_push_notification_content_template_request): \Sendbird\Model\ChooseAPushNotificationContentTemplateResponse
```

Choose a push notification content template

## Choose a push notification content template  Users can choose a template to determine how push notifications appear to them. Push notification content templates are pre-formatted forms that can be customized to display your own push notification messages on a user's device. Sendbird provides two types: `default` and `alternative`. Go to **Settings** > **Chat** > **Push notifications** > **Push notification content templates** on [Sendbird Dashboard](https://dashboard.sendbird.com/auth/signin) to customize the templates.  If the `push_message_template` property is specified when [sending a message](https://sendbird.com/docs/chat/platform-api/v3/message/messaging-basics/send-a-message), the content template customized for the message takes precedence over the user's choice.  > **Note**: Push notifications are only available for group channels.      https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/choose-a-push-notification-content-template#1-choose-a-push-notification-content-template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['choose_a_push_notification_content_template_request'] = new \Sendbird\Model\ChooseAPushNotificationContentTemplateRequest(); // \Sendbird\Model\ChooseAPushNotificationContentTemplateRequest

try {
    $result = $apiInstance->chooseAPushNotificationContentTemplate($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->chooseAPushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **choose_a_push_notification_content_template_request** | [**\Sendbird\Model\ChooseAPushNotificationContentTemplateRequest**](../Model/ChooseAPushNotificationContentTemplateRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\ChooseAPushNotificationContentTemplateResponse**](../Model/ChooseAPushNotificationContentTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAUser()`

```php
createAUser($api_token, $create_a_user_request): \Sendbird\Model\SendbirdUser
```

Create a user

## Create a user  You should create a user in your Sendbird application to initiate conversations in channels. A user is identified by its unique user ID, and additionally have a changeable nickname, profile image, and so on. Users are at the core of all conversations. Sendbird applications are made up of users who chat in either Open Channels or Group Channels. Using this API, it is possible to have fine grained control over your users and what those users can do. To learn more about users, see [User overview](https://sendbird.com/docs/chat/platform-api/v3/user/user-overview#2-resource-representation).  https://sendbird.com/docs/chat/platform-api/v3/user/creating-users/create-a-user#1-create-a-user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_a_user_request'] = new \Sendbird\Model\CreateAUserRequest(); // \Sendbird\Model\CreateAUserRequest

try {
    $result = $apiInstance->createAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **create_a_user_request** | [**\Sendbird\Model\CreateAUserRequest**](../Model/CreateAUserRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdUser**](../Model/SendbirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserToken()`

```php
createUserToken($user_id, $api_token, $create_user_token_request): \Sendbird\Model\CreateUserTokenResponse
```

Create user token

## Create user token  This action issues a session token for user authentication. Session tokens provide an efficient stateless authentication method by not storing the tokens in the Sendbird database, and thus improving the server's performance. See [access token vs. session token](https://sendbird.com/docs/chat/platform-api/v3/user/creating-users/create-a-user#2-access-token-vs-session-token) to learn more about authenticating users.  > **Note**: The endpoint `/users/{user_id}` is deprecated. Use `/users/{user_id}/token` for greater efficiency.      https://sendbird.com/docs/chat/platform-api/v3/user/managing-session-tokens/issue-a-session-token#1-issue-a-session-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_user_token_request'] = new \Sendbird\Model\CreateUserTokenRequest(); // \Sendbird\Model\CreateUserTokenRequest

try {
    $result = $apiInstance->createUserToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **create_user_token_request** | [**\Sendbird\Model\CreateUserTokenRequest**](../Model/CreateUserTokenRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\CreateUserTokenResponse**](../Model/CreateUserTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAUser()`

```php
deleteAUser($user_id, $api_token): object
```

Delete a user

## Delete a user  You can delete a user from your Sendbird application using this API.  > **Note**: This API deletes user data and metadata, except for their messages. If you wish to delete user data including their messages, use the [GDPR request](https://sendbird.com/docs/chat/platform-api/v3/privacy/privacy-overview).      [https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/delete-a-user#1-delete-a-user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/delete-a-user#1-delete-a-user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
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

## `getChannelInvitationPreference()`

```php
getChannelInvitationPreference($user_id, $api_token): \Sendbird\Model\GetChannelInvitationPreferenceResponse
```

Get channel invitation preference

## Get channel invitation preference  This action retrieves a user's [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) invitation preference. Users are subject to both user-specific and application-wide invitation preferences. Of the two, the invitation preference set for a specific user takes precedence over [the default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/get-default-invitation-preference).  [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/get-channel-invitation-preference#1-get-channel-invitation-preference](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/get-channel-invitation-preference#1-get-channel-invitation-preference)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getChannelInvitationPreference($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GetChannelInvitationPreferenceResponse**](../Model/GetChannelInvitationPreferenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveMyGroupChannels()`

```php
leaveMyGroupChannels($user_id, $api_token, $leave_my_group_channels_request): object
```

Leave my group channels

## Leave my group channels  This action allows a user to leave all group channels or channels with a specific custom type. This API is useful if you want to let a user leave a set of channels at once. To let a user leave only one of their group channels, use the [leave a channel API](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/leave-a-channel) instead.  Since this API can't be called for a deactivated user, ensure that the [<code>leave_all_when_deactivated</code>](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#2-request-body) property of the user is set to its default value of `true` to let the user leave all joined group channels upon deactivation.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/leave-group-channels#1-leave-group-channels  `user_id`   Type: string   Description: Specifies the unique ID of the user to leave all joined group channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['leave_my_group_channels_request'] = new \Sendbird\Model\LeaveMyGroupChannelsRequest(); // \Sendbird\Model\LeaveMyGroupChannelsRequest

try {
    $result = $apiInstance->leaveMyGroupChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->leaveMyGroupChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **leave_my_group_channels_request** | [**\Sendbird\Model\LeaveMyGroupChannelsRequest**](../Model/LeaveMyGroupChannelsRequest.md)|  | [optional]

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

## `listMyGroupChannels()`

```php
listMyGroupChannels($user_id, $api_token, $token, $limit, $distinct_mode, $public_mode, $super_mode, $created_after, $created_before, $show_empty, $show_member, $show_delivery_receipt, $show_read_receipt, $show_metadata, $show_frozen, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $members_nickname_startswith, $search_query, $search_fields, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $include_sorted_metaarray_in_last_message, $hidden_mode, $unread_filter, $member_state_filter): \Sendbird\Model\ListMyGroupChannelsResponse
```

List my group channels

## List my group channels  This action retrieves a list of [group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) that a specific user has joined. You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.  If you're looking to retrieve a list of group channels in a specific application, visit the [list group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-group-channels) page under the Channel section.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/list-group-channels-by-user#1-list-group-channels-by-user  `user_id`   Type: string   Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['token'] = 'token_example'; // string | Specifies a page token that indicates the starting index of a chunk of results. If not specified, the index is set as 0.
$associate_array['limit'] = 10; // int | Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10)
$associate_array['distinct_mode'] = all; // string
$associate_array['public_mode'] = all; // string
$associate_array['super_mode'] = all; // string
$associate_array['created_after'] = 1234567890123; // int | Restricts the search scope to only retrieve group channels which have been created after the specified time, in Unix milliseconds format.
$associate_array['created_before'] = 1234567890123; // int | Restricts the search scope to only retrieve group channels which have been created before the specified time, in Unix milliseconds format.
$associate_array['show_empty'] = false; // bool
$associate_array['show_member'] = false; // bool
$associate_array['show_delivery_receipt'] = false; // bool
$associate_array['show_read_receipt'] = false; // bool
$associate_array['show_metadata'] = false; // bool
$associate_array['show_frozen'] = false; // bool
$associate_array['order'] = 'order_example'; // string
$associate_array['metadata_order_key'] = 'metadata_order_key_example'; // string | Specifies the key of an item in metadata. When a value of the order parameter is set to metadata_value_alphabetical, the results are alphabetically sorted by the value of the item specified by the key.
$associate_array['custom_types'] = 'custom_types_example'; // string | Specifies a comma-separated string of one or more custom types to filter group channels. URL encoding each type is recommended. If not specified, all channels are returned, regardless of their custom type.
$associate_array['custom_type_startswith'] = 'custom_type_startswith_example'; // string | Searches for group channels with the custom type which starts with the specified value. URL encoding the value is recommended.
$associate_array['channel_urls'] = 'channel_urls_example'; // string | Specifies a comma-separated string of one or more group channel URLs to restrict the search scope. URL encoding each channel URL is recommended.
$associate_array['name'] = 'name_example'; // string | Specifies one or more group channel names.
$associate_array['name_contains'] = 'name_contains_example'; // string | Searches for group channels whose names contain the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended.
$associate_array['name_startswith'] = 'name_startswith_example'; // string | Searches for group channels whose names start with the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended.
$associate_array['members_exactly_in'] = 'members_exactly_in_example'; // string | Searches for group channels with all the specified users as members. The parameter value should consist of user IDs separated by commas.  Only user IDs that match those of existing users are used for channel search. URL encoding each ID is recommended.
$associate_array['members_include_in'] = 'members_include_in_example'; // string | Searches for group channels that include one or more users as members among the specified users. The value should consist of user IDs separated by commas or %2C. You can specify up to 60 user IDs.  Only user IDs that match those of existing users are used for channel search. URL encoding each ID is recommended.
$associate_array['query_type'] = 'query_type_example'; // string | Specifies a logical condition applied to the members_include_in parameter. Acceptable values are either AND or OR. For example, if you specify three members, A, B, and C, in members_include_in, the value of AND returns all channels that include every one of {A. B, C} as members. The value of OR returns channels that include {A}, plus those that include {B}, plus those that include {C}. (Default: AND)
$associate_array['members_nickname'] = 'members_nickname_example'; // string | Searches for group channels with members whose nicknames match the specified value. URL encoding the value is recommended.
$associate_array['members_nickname_contains'] = 'members_nickname_contains_example'; // string | Searches for group channels with members whose nicknames contain the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended.  * We recommend using at least three characters for the parameter value for better search efficiency when you design and implement related features. If you would like to allow one or two characters for searching, use members_nickname instead to prevent performance issues.
$associate_array['members_nickname_startswith'] = 'members_nickname_startswith_example'; // string | Searches for group channels with members whose nicknames begin with the specified value. This parameter isn't case-sensitive. URL encoding the value is recommended.
$associate_array['search_query'] = 'search_query_example'; // string | Searches for group channels where the specified query string matches the channel name or the nickname of the member. This parameter isn't case-sensitive and should be specified in conjunction with the search_fields parameter below. URL encoding the value is recommended.
$associate_array['search_fields'] = 'search_fields_example'; // string | Specifies a comma-separated string of one or more search fields to apply to the query, which restricts the results within the specified fields (OR search condition). Acceptable values are channel_name and member_nickname. This is effective only when the search_query parameter above is specified. (Default: channel_name, member_nickname together)
$associate_array['metadata_key'] = 'metadata_key_example'; // string | Searches for group channels with metadata containing an item with the specified value as its key. To use this parameter, either the metadata_values parameter or the metadata_value_startswith parameter should be specified.
$associate_array['metadata_values'] = 'metadata_values_example'; // string | Searches for group channels with metadata containing an item with the key specified by the metadata_key parameter, and the value of that item matches one or more values specified by this parameter. The string should be specified with multiple values separated by commas. URL encoding each value is recommended. To use this parameter, the metadata_key parameter should be specified.
$associate_array['metadata_value_startswith'] = 'metadata_value_startswith_example'; // string | Searches for group channels with metadata containing an item with the key specified by the metadata_key parameter, and the values of that item that start with the specified value of this parameter. URL encoding the value is recommended. To use this parameter, the metadata_key parameter should be specified.
$associate_array['metacounter_key'] = 'metacounter_key_example'; // string | Searches for group channels with metacounter containing an item with the specified value as its key. To use this parameter, either the metacounter_values parameter or one of the metacounter_value_gt, metacounter_value_gte, metacounter_value_lt, and metacounter_value_lte parameters should be specified.
$associate_array['metacounter_values'] = 'metacounter_values_example'; // string | Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is equal to one or more values specified by this parameter. The string should be specified with multiple values separated by commas. To use this parameter, the metacounter_key parameter should be specified.
$associate_array['metacounter_value_gt'] = 'metacounter_value_gt_example'; // string | Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is greater than the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified.
$associate_array['metacounter_value_gte'] = 'metacounter_value_gte_example'; // string | Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is greater than or equal to the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified.
$associate_array['metacounter_value_lt'] = 'metacounter_value_lt_example'; // string | Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is lower than the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified.
$associate_array['metacounter_value_lte'] = 'metacounter_value_lte_example'; // string | Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is lower than or equal to the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified.
$associate_array['include_sorted_metaarray_in_last_message'] = false; // bool | Determines whether to include the sorted_metaarray as one of the last_message’s properties in the response.
$associate_array['hidden_mode'] = 'hidden_mode_example'; // string | Restricts the search scope to group channels that match a specific hidden_status and operating behavior
$associate_array['unread_filter'] = 'unread_filter_example'; // string | Restricts the search scope to only retrieve group channels with one or more unread messages. This filter doesn't support Supergroup channels. Acceptable values are all and unread_message. (Default: all)
$associate_array['member_state_filter'] = 'member_state_filter_example'; // string

try {
    $result = $apiInstance->listMyGroupChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listMyGroupChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  |
 **token** | **string**| Specifies a page token that indicates the starting index of a chunk of results. If not specified, the index is set as 0. | [optional]
 **limit** | **int**| Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10) | [optional]
 **distinct_mode** | **string**|  | [optional]
 **public_mode** | **string**|  | [optional]
 **super_mode** | **string**|  | [optional]
 **created_after** | **int**| Restricts the search scope to only retrieve group channels which have been created after the specified time, in Unix milliseconds format. | [optional]
 **created_before** | **int**| Restricts the search scope to only retrieve group channels which have been created before the specified time, in Unix milliseconds format. | [optional]
 **show_empty** | **bool**|  | [optional]
 **show_member** | **bool**|  | [optional]
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **show_metadata** | **bool**|  | [optional]
 **show_frozen** | **bool**|  | [optional]
 **order** | **string**|  | [optional]
 **metadata_order_key** | **string**| Specifies the key of an item in metadata. When a value of the order parameter is set to metadata_value_alphabetical, the results are alphabetically sorted by the value of the item specified by the key. | [optional]
 **custom_types** | **string**| Specifies a comma-separated string of one or more custom types to filter group channels. URL encoding each type is recommended. If not specified, all channels are returned, regardless of their custom type. | [optional]
 **custom_type_startswith** | **string**| Searches for group channels with the custom type which starts with the specified value. URL encoding the value is recommended. | [optional]
 **channel_urls** | **string**| Specifies a comma-separated string of one or more group channel URLs to restrict the search scope. URL encoding each channel URL is recommended. | [optional]
 **name** | **string**| Specifies one or more group channel names. | [optional]
 **name_contains** | **string**| Searches for group channels whose names contain the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended. | [optional]
 **name_startswith** | **string**| Searches for group channels whose names start with the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended. | [optional]
 **members_exactly_in** | **string**| Searches for group channels with all the specified users as members. The parameter value should consist of user IDs separated by commas.  Only user IDs that match those of existing users are used for channel search. URL encoding each ID is recommended. | [optional]
 **members_include_in** | **string**| Searches for group channels that include one or more users as members among the specified users. The value should consist of user IDs separated by commas or %2C. You can specify up to 60 user IDs.  Only user IDs that match those of existing users are used for channel search. URL encoding each ID is recommended. | [optional]
 **query_type** | **string**| Specifies a logical condition applied to the members_include_in parameter. Acceptable values are either AND or OR. For example, if you specify three members, A, B, and C, in members_include_in, the value of AND returns all channels that include every one of {A. B, C} as members. The value of OR returns channels that include {A}, plus those that include {B}, plus those that include {C}. (Default: AND) | [optional]
 **members_nickname** | **string**| Searches for group channels with members whose nicknames match the specified value. URL encoding the value is recommended. | [optional]
 **members_nickname_contains** | **string**| Searches for group channels with members whose nicknames contain the specified value. Note that this parameter is case-insensitive. URL encoding the value is recommended.  * We recommend using at least three characters for the parameter value for better search efficiency when you design and implement related features. If you would like to allow one or two characters for searching, use members_nickname instead to prevent performance issues. | [optional]
 **members_nickname_startswith** | **string**| Searches for group channels with members whose nicknames begin with the specified value. This parameter isn&#39;t case-sensitive. URL encoding the value is recommended. | [optional]
 **search_query** | **string**| Searches for group channels where the specified query string matches the channel name or the nickname of the member. This parameter isn&#39;t case-sensitive and should be specified in conjunction with the search_fields parameter below. URL encoding the value is recommended. | [optional]
 **search_fields** | **string**| Specifies a comma-separated string of one or more search fields to apply to the query, which restricts the results within the specified fields (OR search condition). Acceptable values are channel_name and member_nickname. This is effective only when the search_query parameter above is specified. (Default: channel_name, member_nickname together) | [optional]
 **metadata_key** | **string**| Searches for group channels with metadata containing an item with the specified value as its key. To use this parameter, either the metadata_values parameter or the metadata_value_startswith parameter should be specified. | [optional]
 **metadata_values** | **string**| Searches for group channels with metadata containing an item with the key specified by the metadata_key parameter, and the value of that item matches one or more values specified by this parameter. The string should be specified with multiple values separated by commas. URL encoding each value is recommended. To use this parameter, the metadata_key parameter should be specified. | [optional]
 **metadata_value_startswith** | **string**| Searches for group channels with metadata containing an item with the key specified by the metadata_key parameter, and the values of that item that start with the specified value of this parameter. URL encoding the value is recommended. To use this parameter, the metadata_key parameter should be specified. | [optional]
 **metacounter_key** | **string**| Searches for group channels with metacounter containing an item with the specified value as its key. To use this parameter, either the metacounter_values parameter or one of the metacounter_value_gt, metacounter_value_gte, metacounter_value_lt, and metacounter_value_lte parameters should be specified. | [optional]
 **metacounter_values** | **string**| Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is equal to one or more values specified by this parameter. The string should be specified with multiple values separated by commas. To use this parameter, the metacounter_key parameter should be specified. | [optional]
 **metacounter_value_gt** | **string**| Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is greater than the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified. | [optional]
 **metacounter_value_gte** | **string**| Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is greater than or equal to the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified. | [optional]
 **metacounter_value_lt** | **string**| Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is lower than the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified. | [optional]
 **metacounter_value_lte** | **string**| Searches for group channels with metacounter containing an item with the key specified by the metadata_key parameter, where the value of that item is lower than or equal to the value specified by this parameter. To use this parameter, the metacounter_key parameter should be specified. | [optional]
 **include_sorted_metaarray_in_last_message** | **bool**| Determines whether to include the sorted_metaarray as one of the last_message’s properties in the response. | [optional]
 **hidden_mode** | **string**| Restricts the search scope to group channels that match a specific hidden_status and operating behavior | [optional]
 **unread_filter** | **string**| Restricts the search scope to only retrieve group channels with one or more unread messages. This filter doesn&#39;t support Supergroup channels. Acceptable values are all and unread_message. (Default: all) | [optional]
 **member_state_filter** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListMyGroupChannelsResponse**](../Model/ListMyGroupChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRegistrationOrDeviceTokens()`

```php
listRegistrationOrDeviceTokens($user_id, $token_type, $api_token): \Sendbird\Model\ListRegistrationOrDeviceTokensResponse
```

List registration or device tokens

## List registration or device tokens  Retrieves a list of a user's registration or device tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/list-registration-or-device-tokens#1-list-registration-or-device-tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['token_type'] = 'token_type_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listRegistrationOrDeviceTokens($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listRegistrationOrDeviceTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **token_type** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListRegistrationOrDeviceTokensResponse**](../Model/ListRegistrationOrDeviceTokensResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($token, $limit, $active_mode, $show_bot, $user_ids, $nickname, $nickname_startswith, $metadatakey, $metadatavalues_in, $api_token): \Sendbird\Model\ListUsersResponse
```

List users

## List users  You can retrieve a list of users in your Sendbird application using this API. You can generate a customized list using various parameter combinations.  https://sendbird.com/docs/chat/platform-api/v3/user/listing-users/list-users#1-list-users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int
$associate_array['active_mode'] = 'active_mode_example'; // string | Specifies the activation status of the users in the list. Acceptable values are `activated`, `deactivated`, and `all`. (Default: `activated`)
$associate_array['show_bot'] = True; // bool | Determines whether to include bots in the list. (Default: true)
$associate_array['user_ids'] = 'user_ids_example'; // string | Specifies the user IDs. The value should be a comma-separated string that consists of multiple urlencoded user IDs. An example of a urlencoded string is ?user_ids=urlencoded_id_1,urlencoded_id_2. * The maximum number of user IDs in this parameter is 250. If you exceed the maximum number, your request may receive an HTTP 414 error indicating that the request URL is longer than what Sendbird server can interpret.
$associate_array['nickname'] = 'nickname_example'; // string
$associate_array['nickname_startswith'] = 'nickname_startswith_example'; // string
$associate_array['metadatakey'] = 'metadatakey_example'; // string
$associate_array['metadatavalues_in'] = 'metadatavalues_in_example'; // string | Searches for blocked users with metadata containing an item with the key specified by the metadatakey parameter above, and the value of that item matches one or more values specified by this parameter. The string should be specified with multiple urlencoded metadata values separated by commas (for example, `?metadatavalues_in=urlencoded_value_1, urlencoded_value_2`). This parameter should be specified in conjunction with the `metadatakey` above.
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listUsers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **active_mode** | **string**| Specifies the activation status of the users in the list. Acceptable values are &#x60;activated&#x60;, &#x60;deactivated&#x60;, and &#x60;all&#x60;. (Default: &#x60;activated&#x60;) | [optional]
 **show_bot** | **bool**| Determines whether to include bots in the list. (Default: true) | [optional]
 **user_ids** | **string**| Specifies the user IDs. The value should be a comma-separated string that consists of multiple urlencoded user IDs. An example of a urlencoded string is ?user_ids&#x3D;urlencoded_id_1,urlencoded_id_2. * The maximum number of user IDs in this parameter is 250. If you exceed the maximum number, your request may receive an HTTP 414 error indicating that the request URL is longer than what Sendbird server can interpret. | [optional]
 **nickname** | **string**|  | [optional]
 **nickname_startswith** | **string**|  | [optional]
 **metadatakey** | **string**|  | [optional]
 **metadatavalues_in** | **string**| Searches for blocked users with metadata containing an item with the key specified by the metadatakey parameter above, and the value of that item matches one or more values specified by this parameter. The string should be specified with multiple urlencoded metadata values separated by commas (for example, &#x60;?metadatavalues_in&#x3D;urlencoded_value_1, urlencoded_value_2&#x60;). This parameter should be specified in conjunction with the &#x60;metadatakey&#x60; above. | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListUsersResponse**](../Model/ListUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markAllMessagesAsRead()`

```php
markAllMessagesAsRead($user_id, $api_token, $mark_all_messages_as_read_request): object
```

Mark all messages as read

## Mark all messages as read  This action marks all of a user's unread messages as read in certain group channels. If channels aren't specified, the user's unread messages in all group channels are marked as read.  https://sendbird.com/docs/chat/platform-api/v3/user/marking-messages-as-read/mark-all-of-a-users-messages-as-read#1-mark-all-of-a-user-s-messages-as-read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['mark_all_messages_as_read_request'] = new \Sendbird\Model\MarkAllMessagesAsReadRequest(); // \Sendbird\Model\MarkAllMessagesAsReadRequest

try {
    $result = $apiInstance->markAllMessagesAsRead($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->markAllMessagesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **mark_all_messages_as_read_request** | [**\Sendbird\Model\MarkAllMessagesAsReadRequest**](../Model/MarkAllMessagesAsReadRequest.md)|  | [optional]

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

## `removeARegistrationOrDeviceToken()`

```php
removeARegistrationOrDeviceToken($user_id, $token_type, $token, $api_token): \Sendbird\Model\RemoveARegistrationOrDeviceTokenResponse
```

Remove a registration or device token - When unregistering a specific token

## Remove a registration or device token  Removes a user's specific registration or device token or all tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token#1-remove-a-registration-or-device-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['token_type'] = 'token_type_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->removeARegistrationOrDeviceToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeARegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **token_type** | **string**| (Required) |
 **token** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\RemoveARegistrationOrDeviceTokenResponse**](../Model/RemoveARegistrationOrDeviceTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeARegistrationOrDeviceTokenFromAnOwner()`

```php
removeARegistrationOrDeviceTokenFromAnOwner($token_type, $token, $api_token): \Sendbird\Model\MarkChannelMessagesAsReadRequest[]
```

Remove a registration or device token from an owner

## Remove a registration or device token from an owner  Removes a registration or device token from a user who is the owner of the token. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token-from-an-owner#1-remove-a-registration-or-device-token-from-an-owner

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['token_type'] = 'token_type_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->removeARegistrationOrDeviceTokenFromAnOwner($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeARegistrationOrDeviceTokenFromAnOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_type** | **string**| (Required) |
 **token** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\MarkChannelMessagesAsReadRequest[]**](../Model/MarkChannelMessagesAsReadRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAllRegistrationOrDeviceToken()`

```php
removeAllRegistrationOrDeviceToken($user_id, $api_token): \Sendbird\Model\RemoveAllRegistrationOrDeviceTokenResponse
```

Remove a registration or device token - When unregistering all device tokens

## Remove a registration or device token  Removes a user's specific registration or device token or all tokens. You can pass `gcm`, `huawei`, or `apns` for FCM registration token, HMS device token, or APNs device token, respectively, in the `token_type` parameter for the push notification service you are using.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-device-tokens/remove-a-registration-or-device-token#1-remove-a-registration-or-device-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->removeAllRegistrationOrDeviceToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeAllRegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\RemoveAllRegistrationOrDeviceTokenResponse**](../Model/RemoveAllRegistrationOrDeviceTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPushPreferences()`

```php
resetPushPreferences($user_id, $api_token): object
```

Reset push preferences

## Reset push preferences  You can reset a user's notifications preferences. The values are reset to the default as the following.  - The values for the `do_not_disturb` and `snooze_enabled` properties are set to `false`.      - The values of the parameters associated with the time frame are all set to `0`.      - The value for the `timezone` property is set to `UTC`.      - The value for the `push_sound` property is set to `default`.       > **Note**: Push notifications are only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/reset-push-notification-preferences#1-reset-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/reset-push-notification-preferences#1-reset-push-notification-preferences)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->resetPushPreferences($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
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

## `updateAUser()`

```php
updateAUser($user_id, $api_token, $update_a_user_request): \Sendbird\Model\SendbirdUser
```

Update a user

## Update a user  You can update information about a user using this API. In addition to changing a user's nickname or profile image, you can issue a new access token for the user. The new access token replaces the previous one as the necessary token for authentication.  You can also deactivate or reactivate a user using this API request. If the `leave_all_when_deactivated` is set to `true`, a user leaves all joined group channels and becomes deactivated.  > **Note**: Issuing session tokens through the `/users/{user_id}` endpoint is now deprecated and it&apos;s replaced with [&lt;code&gt;/users/{user_id}/token&lt;/code&gt;](https://sendbird.com/docs/chat/platform-api/v3/user/managing-session-tokens/issue-a-session-token) endpoint for greater efficiency. For those who are currently using the old endpoint, you can start issuing tokens using the new endpoint.      [https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#1-update-a-user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-users/update-a-user#1-update-a-user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_a_user_request'] = new \Sendbird\Model\UpdateAUserRequest(); // \Sendbird\Model\UpdateAUserRequest

try {
    $result = $apiInstance->updateAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_a_user_request** | [**\Sendbird\Model\UpdateAUserRequest**](../Model/UpdateAUserRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdUser**](../Model/SendbirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelInvitationPreference()`

```php
updateChannelInvitationPreference($user_id, $api_token, $update_channel_invitation_preference_request): \Sendbird\Model\UpdateChannelInvitationPreferenceResponse
```

Update channel invitation preference

## Update channel invitation preference  This action updates a user's [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) invitation preference. Updating the [application's default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/update-default-invitation-preference) won't override existing users' individual channel invitation preferences. The changed preference only affects the users created after the update.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-channel-invitation-preference#1-update-channel-invitation-preference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_channel_invitation_preference_request'] = new \Sendbird\Model\UpdateChannelInvitationPreferenceRequest(); // \Sendbird\Model\UpdateChannelInvitationPreferenceRequest

try {
    $result = $apiInstance->updateChannelInvitationPreference($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_channel_invitation_preference_request** | [**\Sendbird\Model\UpdateChannelInvitationPreferenceRequest**](../Model/UpdateChannelInvitationPreferenceRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateChannelInvitationPreferenceResponse**](../Model/UpdateChannelInvitationPreferenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCountPreferenceOfAChannel()`

```php
updateCountPreferenceOfAChannel($user_id, $channel_url, $api_token, $update_count_preference_of_a_channel_request): \Sendbird\Model\UpdateCountPreferenceOfChannelByUrlResponse
```

Update count preference of a channel

## Update count preference of a channel  This action updates a user's count preference of a specific group channel. The count preference allows a user to either update the number of unread messages or the number of unread mentioned messages, or both in a specific group channel.  If you want to retrieve the total number count of a specific group channel, go to the [get count preference of a channel](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-count-preference-of-a-channel) page.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/update-count-preference-of-a-channel#1-update-count-preference-of-a-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_count_preference_of_a_channel_request'] = new \Sendbird\Model\UpdateCountPreferenceOfAChannelRequest(); // \Sendbird\Model\UpdateCountPreferenceOfAChannelRequest

try {
    $result = $apiInstance->updateCountPreferenceOfAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateCountPreferenceOfAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_count_preference_of_a_channel_request** | [**\Sendbird\Model\UpdateCountPreferenceOfAChannelRequest**](../Model/UpdateCountPreferenceOfAChannelRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateCountPreferenceOfChannelByUrlResponse**](../Model/UpdateCountPreferenceOfChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushPreferences()`

```php
updatePushPreferences($user_id, $api_token, $update_push_preferences_request): \Sendbird\Model\UpdatePushPreferencesResponse
```

Update push preferences

## Update push preferences  You can update a user's notifications preferences. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.  > **Note**: Push notifications are only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences#1-update-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences#1-update-push-notification-preferences)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_push_preferences_request'] = new \Sendbird\Model\UpdatePushPreferencesRequest(); // \Sendbird\Model\UpdatePushPreferencesRequest

try {
    $result = $apiInstance->updatePushPreferences($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_push_preferences_request** | [**\Sendbird\Model\UpdatePushPreferencesRequest**](../Model/UpdatePushPreferencesRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdatePushPreferencesResponse**](../Model/UpdatePushPreferencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushPreferencesForAChannel()`

```php
updatePushPreferencesForAChannel($user_id, $channel_url, $api_token, $update_push_preferences_for_a_channel_request): \Sendbird\Model\UpdatePushPreferencesForAChannelResponse
```

Update push preferences for a channel

## Update push preferences for a channel  You can update a user's notifications preferences for a specific channel. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.  > **Note**: Push notifications are only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences-for-a-channel#1-update-push-notification-preferences-for-a-channel](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/update-push-notification-preferences-for-a-channel#1-update-push-notification-preferences-for-a-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_push_preferences_for_a_channel_request'] = new \Sendbird\Model\UpdatePushPreferencesForAChannelRequest(); // \Sendbird\Model\UpdatePushPreferencesForAChannelRequest

try {
    $result = $apiInstance->updatePushPreferencesForAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePushPreferencesForAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **update_push_preferences_for_a_channel_request** | [**\Sendbird\Model\UpdatePushPreferencesForAChannelRequest**](../Model/UpdatePushPreferencesForAChannelRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdatePushPreferencesForAChannelResponse**](../Model/UpdatePushPreferencesForAChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewAUser()`

```php
viewAUser($user_id, $include_unread_count, $custom_types, $super_mode, $api_token): \Sendbird\Model\SendbirdUser
```

View a user

## View a user  You can retrieve information about a user using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/listing-users/get-a-user#1-get-a-user  `user_id`   Type: string   Description: Specifies the unique ID of the user to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['include_unread_count'] = True; // bool
$associate_array['custom_types'] = 'custom_types_example'; // string
$associate_array['super_mode'] = 'super_mode_example'; // string | Restricts the search scope to retrieve only Supergroup or non-Supergroup channels. Acceptable values are `all`, `super`, and `nonsuper`. This parameter should be specified in conjunction with `include_unread_count` above. (Default: `all`)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewAUser($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewAUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **include_unread_count** | **bool**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **super_mode** | **string**| Restricts the search scope to retrieve only Supergroup or non-Supergroup channels. Acceptable values are &#x60;all&#x60;, &#x60;super&#x60;, and &#x60;nonsuper&#x60;. This parameter should be specified in conjunction with &#x60;include_unread_count&#x60; above. (Default: &#x60;all&#x60;) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\SendbirdUser**](../Model/SendbirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewCountPreferenceOfAChannel()`

```php
viewCountPreferenceOfAChannel($user_id, $channel_url, $api_token): \Sendbird\Model\ViewCountPreferenceOfAChannelResponse
```

View count preference of a channel

## View count preference of a channel  This action retrieves a user's count preference of a specific group channel. The count preference allows a user to either retrieve the number of unread messages or unread mentioned messages, or both in a specific group channel.  If you want to update the total number count of a specific group channel, visit the [update count preference of a channel](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/update-count-preference-of-a-channel).  https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-count-preference-of-a-channel#1-get-count-preference-of-a-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewCountPreferenceOfAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewCountPreferenceOfAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewCountPreferenceOfAChannelResponse**](../Model/ViewCountPreferenceOfAChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfChannelsWithUnreadMessages()`

```php
viewNumberOfChannelsWithUnreadMessages($user_id, $custom_types, $super_mode, $api_token): \Sendbird\Model\ViewNumberOfChannelsWithUnreadMessagesResponse
```

View number of channels with unread messages

## View number of channels with unread messages  This action retrieves the total number of group channels in which a user has unread messages. You can use various query parameters to determine the search scope of group channels.  https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-channels-with-unread-messages#1-get-number-of-channels-with-unread-messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['custom_types'] = 'custom_types_example'; // string
$associate_array['super_mode'] = 'super_mode_example'; // string | Restricts the search scope to either Supergroup channels or non-Supergroup channels or both. Acceptable values are all, super, and nonsuper. (Default: all)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfChannelsWithUnreadMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfChannelsWithUnreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **custom_types** | **string**|  | [optional]
 **super_mode** | **string**| Restricts the search scope to either Supergroup channels or non-Supergroup channels or both. Acceptable values are all, super, and nonsuper. (Default: all) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfChannelsWithUnreadMessagesResponse**](../Model/ViewNumberOfChannelsWithUnreadMessagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfUnreadMessages()`

```php
viewNumberOfUnreadMessages($user_id, $custom_types, $super_mode, $api_token): \Sendbird\Model\ViewNumberOfUnreadMessagesResponse
```

View number of unread messages

## View number of unread messages  This action retrieves a user's total number of unread messages in group channels.  > **Note**: The unread count feature is only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-unread-messages#1-get-number-of-unread-messages](https://sendbird.com/docs/chat/platform-api/v3/user/managing-unread-count/get-number-of-unread-messages#1-get-number-of-unread-messages)  `user_id`   Type: string   Description: Specifies the unique ID of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['custom_types'] = 'custom_types_example'; // string | Specifies a comma-separated string of one or more custom types to filter group channels. URL encoding each type is recommended. If not specified, all channels are returned, regardless of their custom type.
$associate_array['super_mode'] = 'super_mode_example'; // string | Restricts the search scope to either Supergroup channels or non-Supergroup channels or both. Acceptable values are `all`, `super`, and `nonsuper`. (Default: `all`)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfUnreadMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfUnreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **custom_types** | **string**| Specifies a comma-separated string of one or more custom types to filter group channels. URL encoding each type is recommended. If not specified, all channels are returned, regardless of their custom type. | [optional]
 **super_mode** | **string**| Restricts the search scope to either Supergroup channels or non-Supergroup channels or both. Acceptable values are &#x60;all&#x60;, &#x60;super&#x60;, and &#x60;nonsuper&#x60;. (Default: &#x60;all&#x60;) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfUnreadMessagesResponse**](../Model/ViewNumberOfUnreadMessagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPushPreferences()`

```php
viewPushPreferences($user_id, $api_token): \Sendbird\Model\ViewPushPreferencesResponse
```

View push preferences

## View push preferences  You can retrieves a user's notifications preferences. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background.  > **Note**: Push notifications are only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences#1-get-push-notification-preferences](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences#1-get-push-notification-preferences)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewPushPreferences($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewPushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewPushPreferencesResponse**](../Model/ViewPushPreferencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPushPreferencesForAChannel()`

```php
viewPushPreferencesForAChannel($user_id, $channel_url, $api_token): \Sendbird\Model\ViewPushPreferencesForAChannelResponse
```

View push preferences for a channel

## View push preferences for a channel  You can retrieve a user's notifications preferences for a specific channel. A push notification is a message that is immediately delivered to a user's device when the device is either idle or running the client app in the background. These notifications preferences can be configured.  > **Note**: Push notifications are only available for group channels.      [https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences-for-a-channel#1-get-push-notification-preferences-for-a-channel](https://sendbird.com/docs/chat/platform-api/v3/user/configuring-notification-preferences/get-push-notification-preferences-for-a-channel#1-get-push-notification-preferences-for-a-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewPushPreferencesForAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewPushPreferencesForAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| (Required) |
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewPushPreferencesForAChannelResponse**](../Model/ViewPushPreferencesForAChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewWhoOwnsARegistrationOrDeviceToken()`

```php
viewWhoOwnsARegistrationOrDeviceToken($token_type, $token, $api_token): \Sendbird\Model\MarkChannelMessagesAsReadRequest[]
```

View who owns a registration or device token

## View who owns a registration or device token  Retrieves a user who owns a FCM registration token, HMS device token, or APNs device token. You can pass one of two values in `token_type`: `gcm`, `huawei`, or `apns`, depending on which push service you are using.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-who-owns-a-registration-or-device-token ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['token_type'] = 'token_type_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewWhoOwnsARegistrationOrDeviceToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewWhoOwnsARegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_type** | **string**| (Required) |
 **token** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\MarkChannelMessagesAsReadRequest[]**](../Model/MarkChannelMessagesAsReadRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
