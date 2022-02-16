# Sendbird\UserApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRegistrationOrDeviceToken()**](UserApi.md#addRegistrationOrDeviceToken) | **POST** /v3/users/{user_id}/push/{token_type} | Add a registration or device token
[**banFromChannelsWithCustomChannelTypes()**](UserApi.md#banFromChannelsWithCustomChannelTypes) | **POST** /v3/users/{user_id}/banned_channel_custom_types | Ban from channels with custom channel types
[**blockUser()**](UserApi.md#blockUser) | **POST** /v3/users/{user_id}/block | Block a user
[**choosePushNotificationContentTemplate()**](UserApi.md#choosePushNotificationContentTemplate) | **PUT** /v3/users/{user_id}/push/template | Choose a push notification content template
[**createUser()**](UserApi.md#createUser) | **POST** /v3/users | Create a user
[**deleteUserById()**](UserApi.md#deleteUserById) | **DELETE** /v3/users/{user_id} | Delete a user
[**leaveMyGroupChannels()**](UserApi.md#leaveMyGroupChannels) | **PUT** /v3/users/{user_id}/my_group_channels/leave | Leave my group channels
[**listBannedChannels()**](UserApi.md#listBannedChannels) | **GET** /v3/users/{user_id}/ban | List banned channels
[**listBlockedUsers()**](UserApi.md#listBlockedUsers) | **GET** /v3/users/{user_id}/block | List blocked users
[**listMutedChannels()**](UserApi.md#listMutedChannels) | **GET** /v3/users/{user_id}/mute | List muted channels
[**listMyGroupChannels()**](UserApi.md#listMyGroupChannels) | **GET** /v3/users/{user_id}/my_group_channels | List my group channels
[**listRegistrationOrDeviceTokens()**](UserApi.md#listRegistrationOrDeviceTokens) | **GET** /v3/users/{user_id}/push/{token_type} | List registration or device tokens
[**listUsers()**](UserApi.md#listUsers) | **GET** /v3/users | List users
[**markAllMessagesAsRead()**](UserApi.md#markAllMessagesAsRead) | **PUT** /v3/users/{user_id}/mark_as_read_all | Mark all messages as read
[**muteInChannelsWithCustomChannelTypes()**](UserApi.md#muteInChannelsWithCustomChannelTypes) | **POST** /v3/users/{user_id}/muted_channel_custom_types | Mute in channels with custom channel types
[**registerAsOperatorToChannelsWithCustomChannelTypes()**](UserApi.md#registerAsOperatorToChannelsWithCustomChannelTypes) | **POST** /v3/users/{user_id}/operating_channel_custom_types | Register as an operator to channels with custom channel types
[**removeRegistrationOrDeviceToken()**](UserApi.md#removeRegistrationOrDeviceToken) | **DELETE** /v3/users/{user_id}/push | Remove a registration or device token - When unregistering all device tokens
[**removeRegistrationOrDeviceTokenByToken()**](UserApi.md#removeRegistrationOrDeviceTokenByToken) | **DELETE** /v3/users/{user_id}/push/{token_type}/{token} | Remove a registration or device token - When unregistering a specific token
[**removeRegistrationOrDeviceTokenFromOwnerByToken()**](UserApi.md#removeRegistrationOrDeviceTokenFromOwnerByToken) | **DELETE** /v3/push/device_tokens/{token_type}/{token} | Remove a registration or device token from an owner
[**resetPushPreferences()**](UserApi.md#resetPushPreferences) | **DELETE** /v3/users/{user_id}/push_preference | Reset push preferences
[**unblockUserById()**](UserApi.md#unblockUserById) | **DELETE** /v3/users/{user_id}/block/{target_id} | Unblock a user
[**updateChannelInvitationPreference()**](UserApi.md#updateChannelInvitationPreference) | **PUT** /v3/users/{user_id}/channel_invitation_preference | Update channel invitation preference
[**updateCountPreferenceOfChannelByUrl()**](UserApi.md#updateCountPreferenceOfChannelByUrl) | **PUT** /v3/users/{user_id}/count_preference/{channel_url} | Update count preference of a channel
[**updatePushPreferences()**](UserApi.md#updatePushPreferences) | **PUT** /v3/users/{user_id}/push_preference | Update push preferences
[**updatePushPreferencesForChannelByUrl()**](UserApi.md#updatePushPreferencesForChannelByUrl) | **PUT** /v3/users/{user_id}/push_preference/{channel_url} | Update push preferences for a channel
[**updateUserById()**](UserApi.md#updateUserById) | **PUT** /v3/users/{user_id} | Update a user
[**viewChannelInvitationPreference()**](UserApi.md#viewChannelInvitationPreference) | **GET** /v3/users/{user_id}/channel_invitation_preference | View channel invitation preference
[**viewCountPreferenceOfChannelByUrl()**](UserApi.md#viewCountPreferenceOfChannelByUrl) | **GET** /v3/users/{user_id}/count_preference/{channel_url} | View count preference of a channel
[**viewNumberOfChannelsByJoinStatus()**](UserApi.md#viewNumberOfChannelsByJoinStatus) | **GET** /v3/users/{user_id}/group_channel_count | View number of channels by join status
[**viewNumberOfChannelsWithUnreadMessages()**](UserApi.md#viewNumberOfChannelsWithUnreadMessages) | **GET** /v3/users/{user_id}/unread_channel_count | View number of channels with unread messages
[**viewNumberOfUnreadItems()**](UserApi.md#viewNumberOfUnreadItems) | **GET** /v3/users/{user_id}/unread_item_count | View number of unread items
[**viewNumberOfUnreadMessages()**](UserApi.md#viewNumberOfUnreadMessages) | **GET** /v3/users/{user_id}/unread_message_count | View number of unread messages
[**viewPushPreferences()**](UserApi.md#viewPushPreferences) | **GET** /v3/users/{user_id}/push_preference | View push preferences
[**viewPushPreferencesForChannelByUrl()**](UserApi.md#viewPushPreferencesForChannelByUrl) | **GET** /v3/users/{user_id}/push_preference/{channel_url} | View push preferences for a channel
[**viewUserById()**](UserApi.md#viewUserById) | **GET** /v3/users/{user_id} | View a user
[**viewWhoOwnsRegistrationOrDeviceTokenByToken()**](UserApi.md#viewWhoOwnsRegistrationOrDeviceTokenByToken) | **GET** /v3/push/device_tokens/{token_type}/{token} | View who owns a registration or device token


## `addRegistrationOrDeviceToken()`

```php
addRegistrationOrDeviceToken($api_token, $user_id, $token_type, $add_registration_or_device_token_data): \Sendbird\Model\AddRegistrationOrDeviceTokenResponse
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
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token_type = 'token_type_example'; // string
$add_registration_or_device_token_data = new \Sendbird\Model\AddRegistrationOrDeviceTokenData(); // \Sendbird\Model\AddRegistrationOrDeviceTokenData

try {
    $result = $apiInstance->addRegistrationOrDeviceToken($api_token, $user_id, $token_type, $add_registration_or_device_token_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token_type** | **string**|  |
 **add_registration_or_device_token_data** | [**\Sendbird\Model\AddRegistrationOrDeviceTokenData**](../Model/AddRegistrationOrDeviceTokenData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddRegistrationOrDeviceTokenResponse**](../Model/AddRegistrationOrDeviceTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banFromChannelsWithCustomChannelTypes()`

```php
banFromChannelsWithCustomChannelTypes($api_token, $user_id, $ban_from_channels_with_custom_channel_types_data)
```

Ban from channels with custom channel types

## Ban from channels with custom channel types  Bans a user from channels with particular custom channel types.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-ban-from-channels-with-custom-channel-types ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$ban_from_channels_with_custom_channel_types_data = new \Sendbird\Model\BanFromChannelsWithCustomChannelTypesData(); // \Sendbird\Model\BanFromChannelsWithCustomChannelTypesData

try {
    $apiInstance->banFromChannelsWithCustomChannelTypes($api_token, $user_id, $ban_from_channels_with_custom_channel_types_data);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->banFromChannelsWithCustomChannelTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **ban_from_channels_with_custom_channel_types_data** | [**\Sendbird\Model\BanFromChannelsWithCustomChannelTypesData**](../Model/BanFromChannelsWithCustomChannelTypesData.md)|  | [optional]

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

## `blockUser()`

```php
blockUser($api_token, $user_id, $block_user_data): \Sendbird\Model\SendBirdUser
```

Block a user

## Block a user  Allows a user to block another user. A user doesn't receive messages from someone they have blocked anymore. Also, blocking someone doesn't alert them that they have been blocked. Blocked users still can send messages as normal in the channel: however, they can't receive any messages from the users who have blocked them.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-block-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$block_user_data = new \Sendbird\Model\BlockUserData(); // \Sendbird\Model\BlockUserData

try {
    $result = $apiInstance->blockUser($api_token, $user_id, $block_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->blockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **block_user_data** | [**\Sendbird\Model\BlockUserData**](../Model/BlockUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `choosePushNotificationContentTemplate()`

```php
choosePushNotificationContentTemplate($api_token, $user_id, $body): \Sendbird\Model\ChoosePushNotificationContentTemplateResponse
```

Choose a push notification content template

## Choose a push notification content template  Chooses a push notification content template of a user's own. The push notifications feature is only available for group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-choose-a-push-notification-content-template ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->choosePushNotificationContentTemplate($api_token, $user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->choosePushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **body** | **object**|  | [optional]

### Return type

[**\Sendbird\Model\ChoosePushNotificationContentTemplateResponse**](../Model/ChoosePushNotificationContentTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($api_token, $create_user_data): \Sendbird\Model\SendBirdUser
```

Create a user

## Create a user  Creates a new user in the application. A user is identified by its unique user ID, and additionally have a changeable nickname, profile image, and so on.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-create-a-user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$create_user_data = new \Sendbird\Model\CreateUserData(); // \Sendbird\Model\CreateUserData

try {
    $result = $apiInstance->createUser($api_token, $create_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **create_user_data** | [**\Sendbird\Model\CreateUserData**](../Model/CreateUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserById()`

```php
deleteUserById($api_token, $user_id)
```

Delete a user

## Delete a user  Deletes a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-delete-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->deleteUserById($api_token, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |

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

## `leaveMyGroupChannels()`

```php
leaveMyGroupChannels($api_token, $user_id, $leave_my_group_channels_data)
```

Leave my group channels

## Leave my group channels  Makes a user leave all joined group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-leave-my-group-channels ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the user to leave all joined group channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$leave_my_group_channels_data = new \Sendbird\Model\LeaveMyGroupChannelsData(); // \Sendbird\Model\LeaveMyGroupChannelsData

try {
    $apiInstance->leaveMyGroupChannels($api_token, $user_id, $leave_my_group_channels_data);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->leaveMyGroupChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **leave_my_group_channels_data** | [**\Sendbird\Model\LeaveMyGroupChannelsData**](../Model/LeaveMyGroupChannelsData.md)|  | [optional]

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

## `listBannedChannels()`

```php
listBannedChannels($api_token, $user_id, $token, $limit): \Sendbird\Model\ListBannedChannelsResponse
```

List banned channels

## List banned channels  Retrieves a list of open and group channels with additional information where a user is banned.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-banned-channels ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listBannedChannels($api_token, $user_id, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listBannedChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListBannedChannelsResponse**](../Model/ListBannedChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBlockedUsers()`

```php
listBlockedUsers($api_token, $user_id, $token, $limit, $user_ids, $metadatakey, $metadatavalues_in): \Sendbird\Model\ListBlockedUsersResponse
```

List blocked users

## List blocked users  Retrieves a list of other users that a user has blocked.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-blocked-users ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token = 'token_example'; // string
$limit = 56; // int
$user_ids = 'user_ids_example'; // string
$metadatakey = 'metadatakey_example'; // string
$metadatavalues_in = 'metadatavalues_in_example'; // string

try {
    $result = $apiInstance->listBlockedUsers($api_token, $user_id, $token, $limit, $user_ids, $metadatakey, $metadatavalues_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listBlockedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **user_ids** | **string**|  | [optional]
 **metadatakey** | **string**|  | [optional]
 **metadatavalues_in** | **string**|  | [optional]

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

## `listMutedChannels()`

```php
listMutedChannels($api_token, $user_id, $token, $limit): \Sendbird\Model\ListMutedChannelsResponse
```

List muted channels

## List muted channels  Retrieves a list of open and group channels with additional information where a user is muted.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-muted-channels ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listMutedChannels($api_token, $user_id, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listMutedChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListMutedChannelsResponse**](../Model/ListMutedChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMyGroupChannels()`

```php
listMyGroupChannels($api_token, $user_id, $token, $limit, $distinct_mode, $public_mode, $super_mode, $hidden_mode, $member_state_filter, $unread_filter, $created_after, $created_before, $show_empty, $show_frozen, $show_member, $show_delivery_receipt, $show_read_receipt, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $search_query, $search_fields, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $custom_type): \Sendbird\Model\ListMyGroupChannelsResponse
```

List my group channels

## List my group channels  Retrieves all group channels that the user has joined. You can create a request based on various query parameters.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-my-group-channels ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the target user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token = 'token_example'; // string
$limit = 56; // int
$distinct_mode = 'distinct_mode_example'; // string
$public_mode = 'public_mode_example'; // string
$super_mode = 'super_mode_example'; // string
$hidden_mode = 'hidden_mode_example'; // string
$member_state_filter = 'member_state_filter_example'; // string
$unread_filter = 'unread_filter_example'; // string
$created_after = 56; // int
$created_before = 56; // int
$show_empty = True; // bool
$show_frozen = True; // bool
$show_member = True; // bool
$show_delivery_receipt = True; // bool
$show_read_receipt = True; // bool
$order = 'order_example'; // string
$metadata_order_key = 'metadata_order_key_example'; // string
$custom_types = 'custom_types_example'; // string
$custom_type_startswith = 'custom_type_startswith_example'; // string
$channel_urls = 'channel_urls_example'; // string
$name = 'name_example'; // string
$name_contains = 'name_contains_example'; // string
$name_startswith = 'name_startswith_example'; // string
$members_exactly_in = 'members_exactly_in_example'; // string
$members_include_in = 'members_include_in_example'; // string
$query_type = 'query_type_example'; // string
$members_nickname = 'members_nickname_example'; // string
$members_nickname_contains = 'members_nickname_contains_example'; // string
$search_query = 'search_query_example'; // string
$search_fields = 'search_fields_example'; // string
$metadata_key = 'metadata_key_example'; // string
$metadata_values = 'metadata_values_example'; // string
$metadata_value_startswith = 'metadata_value_startswith_example'; // string
$metacounter_key = 'metacounter_key_example'; // string
$metacounter_values = 'metacounter_values_example'; // string
$metacounter_value_gt = 'metacounter_value_gt_example'; // string
$metacounter_value_gte = 'metacounter_value_gte_example'; // string
$metacounter_value_lt = 'metacounter_value_lt_example'; // string
$metacounter_value_lte = 'metacounter_value_lte_example'; // string
$custom_type = 'custom_type_example'; // string

try {
    $result = $apiInstance->listMyGroupChannels($api_token, $user_id, $token, $limit, $distinct_mode, $public_mode, $super_mode, $hidden_mode, $member_state_filter, $unread_filter, $created_after, $created_before, $show_empty, $show_frozen, $show_member, $show_delivery_receipt, $show_read_receipt, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $search_query, $search_fields, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $custom_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listMyGroupChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **distinct_mode** | **string**|  | [optional]
 **public_mode** | **string**|  | [optional]
 **super_mode** | **string**|  | [optional]
 **hidden_mode** | **string**|  | [optional]
 **member_state_filter** | **string**|  | [optional]
 **unread_filter** | **string**|  | [optional]
 **created_after** | **int**|  | [optional]
 **created_before** | **int**|  | [optional]
 **show_empty** | **bool**|  | [optional]
 **show_frozen** | **bool**|  | [optional]
 **show_member** | **bool**|  | [optional]
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **order** | **string**|  | [optional]
 **metadata_order_key** | **string**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **custom_type_startswith** | **string**|  | [optional]
 **channel_urls** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **name_contains** | **string**|  | [optional]
 **name_startswith** | **string**|  | [optional]
 **members_exactly_in** | **string**|  | [optional]
 **members_include_in** | **string**|  | [optional]
 **query_type** | **string**|  | [optional]
 **members_nickname** | **string**|  | [optional]
 **members_nickname_contains** | **string**|  | [optional]
 **search_query** | **string**|  | [optional]
 **search_fields** | **string**|  | [optional]
 **metadata_key** | **string**|  | [optional]
 **metadata_values** | **string**|  | [optional]
 **metadata_value_startswith** | **string**|  | [optional]
 **metacounter_key** | **string**|  | [optional]
 **metacounter_values** | **string**|  | [optional]
 **metacounter_value_gt** | **string**|  | [optional]
 **metacounter_value_gte** | **string**|  | [optional]
 **metacounter_value_lt** | **string**|  | [optional]
 **metacounter_value_lte** | **string**|  | [optional]
 **custom_type** | **string**|  | [optional]

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
listRegistrationOrDeviceTokens($api_token, $user_id, $token_type): \Sendbird\Model\ListRegistrationOrDeviceTokensResponse
```

List registration or device tokens

## List registration or device tokens  Retrieves a list of a specific user's FCM registration tokens, HMS device tokens, or APNs device tokens. You can specify either `gcm`, `huawei`, or `apns` in the `token_type` parameter, depending on which push notification service you are using.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-registration-or-device-tokens ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token_type = 'token_type_example'; // string

try {
    $result = $apiInstance->listRegistrationOrDeviceTokens($api_token, $user_id, $token_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listRegistrationOrDeviceTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token_type** | **string**|  |

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
listUsers($api_token, $token, $limit, $active_mode, $show_bot, $user_ids, $nickname, $nickname_startswith, $metadatakey, $metadatavalues_in): \Sendbird\Model\ListUsersResponse
```

List users

## List users  Retrieves a list of users in your application. You can query the list using various parameters.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-users ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int
$active_mode = 'active_mode_example'; // string
$show_bot = True; // bool
$user_ids = 'user_ids_example'; // string
$nickname = 'nickname_example'; // string
$nickname_startswith = 'nickname_startswith_example'; // string
$metadatakey = 'metadatakey_example'; // string
$metadatavalues_in = 'metadatavalues_in_example'; // string

try {
    $result = $apiInstance->listUsers($api_token, $token, $limit, $active_mode, $show_bot, $user_ids, $nickname, $nickname_startswith, $metadatakey, $metadatavalues_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **active_mode** | **string**|  | [optional]
 **show_bot** | **bool**|  | [optional]
 **user_ids** | **string**|  | [optional]
 **nickname** | **string**|  | [optional]
 **nickname_startswith** | **string**|  | [optional]
 **metadatakey** | **string**|  | [optional]
 **metadatavalues_in** | **string**|  | [optional]

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
markAllMessagesAsRead($api_token, $user_id, $mark_all_messages_as_read_data)
```

Mark all messages as read

## Mark all messages as read  Marks all of a user's unread messages as read in the joined group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-mark-all-messages-as-read ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$mark_all_messages_as_read_data = new \Sendbird\Model\MarkAllMessagesAsReadData(); // \Sendbird\Model\MarkAllMessagesAsReadData

try {
    $apiInstance->markAllMessagesAsRead($api_token, $user_id, $mark_all_messages_as_read_data);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->markAllMessagesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **mark_all_messages_as_read_data** | [**\Sendbird\Model\MarkAllMessagesAsReadData**](../Model/MarkAllMessagesAsReadData.md)|  | [optional]

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

## `muteInChannelsWithCustomChannelTypes()`

```php
muteInChannelsWithCustomChannelTypes($api_token, $user_id, $mute_in_channels_with_custom_channel_types_data)
```

Mute in channels with custom channel types

## Mute in channels with custom channel types  Mutes a user in channels with particular custom channel types.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-mute-in-channels-with-custom-channel-types ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$mute_in_channels_with_custom_channel_types_data = new \Sendbird\Model\MuteInChannelsWithCustomChannelTypesData(); // \Sendbird\Model\MuteInChannelsWithCustomChannelTypesData

try {
    $apiInstance->muteInChannelsWithCustomChannelTypes($api_token, $user_id, $mute_in_channels_with_custom_channel_types_data);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->muteInChannelsWithCustomChannelTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **mute_in_channels_with_custom_channel_types_data** | [**\Sendbird\Model\MuteInChannelsWithCustomChannelTypesData**](../Model/MuteInChannelsWithCustomChannelTypesData.md)|  | [optional]

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

## `registerAsOperatorToChannelsWithCustomChannelTypes()`

```php
registerAsOperatorToChannelsWithCustomChannelTypes($api_token, $user_id, $register_as_operator_to_channels_with_custom_channel_types_data)
```

Register as an operator to channels with custom channel types

## Register as an operator to channels with custom channel types  Registers a user as an operator to channels with particular custom channel types.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-register-as-an-operator-to-channels-with-custom-channel-types ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$register_as_operator_to_channels_with_custom_channel_types_data = new \Sendbird\Model\RegisterAsOperatorToChannelsWithCustomChannelTypesData(); // \Sendbird\Model\RegisterAsOperatorToChannelsWithCustomChannelTypesData

try {
    $apiInstance->registerAsOperatorToChannelsWithCustomChannelTypes($api_token, $user_id, $register_as_operator_to_channels_with_custom_channel_types_data);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->registerAsOperatorToChannelsWithCustomChannelTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **register_as_operator_to_channels_with_custom_channel_types_data** | [**\Sendbird\Model\RegisterAsOperatorToChannelsWithCustomChannelTypesData**](../Model/RegisterAsOperatorToChannelsWithCustomChannelTypesData.md)|  | [optional]

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

## `removeRegistrationOrDeviceToken()`

```php
removeRegistrationOrDeviceToken($api_token, $user_id): \Sendbird\Model\RemoveRegistrationOrDeviceTokenResponse
```

Remove a registration or device token - When unregistering all device tokens

## Remove a registration or device token  Removes a specific user's one or more FCM registration tokens, HMS device tokens, or APNs device tokens.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-remove-a-registration-or-device-token ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->removeRegistrationOrDeviceToken($api_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeRegistrationOrDeviceToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\Sendbird\Model\RemoveRegistrationOrDeviceTokenResponse**](../Model/RemoveRegistrationOrDeviceTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRegistrationOrDeviceTokenByToken()`

```php
removeRegistrationOrDeviceTokenByToken($api_token, $user_id, $token_type, $token): \Sendbird\Model\RemoveRegistrationOrDeviceTokenByTokenResponse
```

Remove a registration or device token - When unregistering a specific token

## Remove a registration or device token  Removes a specific user's one or more FCM registration tokens, HMS device tokens, or APNs device tokens.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-remove-a-registration-or-device-token ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$token_type = 'token_type_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->removeRegistrationOrDeviceTokenByToken($api_token, $user_id, $token_type, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeRegistrationOrDeviceTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **token_type** | **string**|  |
 **token** | **string**|  |

### Return type

[**\Sendbird\Model\RemoveRegistrationOrDeviceTokenByTokenResponse**](../Model/RemoveRegistrationOrDeviceTokenByTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeRegistrationOrDeviceTokenFromOwnerByToken()`

```php
removeRegistrationOrDeviceTokenFromOwnerByToken($api_token, $token_type, $token): \Sendbird\Model\RemoveRegistrationOrDeviceTokenFromOwnerByTokenResponse
```

Remove a registration or device token from an owner

## Remove a registration or device token from an owner  Removes a registration or device token from a user who owns it. You can pass one of two values in `token_type`: `gcm`, `huawei`, or `apns`, depending on which push service you are using.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-remove-a-registration-or-device-token-from-an-owner ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token_type = 'token_type_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->removeRegistrationOrDeviceTokenFromOwnerByToken($api_token, $token_type, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeRegistrationOrDeviceTokenFromOwnerByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token_type** | **string**|  |
 **token** | **string**|  |

### Return type

[**\Sendbird\Model\RemoveRegistrationOrDeviceTokenFromOwnerByTokenResponse**](../Model/RemoveRegistrationOrDeviceTokenFromOwnerByTokenResponse.md)

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
resetPushPreferences($api_token, $user_id)
```

Reset push preferences

## Reset push preferences  Resets a user's push preferences. After performing this action,   `do_not_disturb` and `snooze_enabled` are set to false.  The values of the parameters associated with the time frame are all set to 0.  `timezone` is reset to `UTC`.  `push_sound` is reset to `default`.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-reset-push-preferences ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string

try {
    $apiInstance->resetPushPreferences($api_token, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |

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

## `unblockUserById()`

```php
unblockUserById($api_token, $user_id, $target_id)
```

Unblock a user

## Unblock a user  Unblocks the user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-unblock-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$target_id = 'target_id_example'; // string

try {
    $apiInstance->unblockUserById($api_token, $user_id, $target_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->unblockUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **target_id** | **string**|  |

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

## `updateChannelInvitationPreference()`

```php
updateChannelInvitationPreference($api_token, $user_id, $update_channel_invitation_preference_data): \Sendbird\Model\UpdateChannelInvitationPreferenceResponse
```

Update channel invitation preference

## Update channel invitation preference  Updates the channel invitation preference for a user's [private](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#-3-private-vs-public) group channels.  > __Note__: Using the [update default channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-default-channel-invitation-preference) action, you can update the value of channel invitation preference which is globally applied to all users within the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-channel-invitation-preference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$update_channel_invitation_preference_data = new \Sendbird\Model\UpdateChannelInvitationPreferenceData(); // \Sendbird\Model\UpdateChannelInvitationPreferenceData

try {
    $result = $apiInstance->updateChannelInvitationPreference($api_token, $user_id, $update_channel_invitation_preference_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **update_channel_invitation_preference_data** | [**\Sendbird\Model\UpdateChannelInvitationPreferenceData**](../Model/UpdateChannelInvitationPreferenceData.md)|  | [optional]

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

## `updateCountPreferenceOfChannelByUrl()`

```php
updateCountPreferenceOfChannelByUrl($api_token, $user_id, $channel_url, $update_count_preference_of_channel_by_url_data): \Sendbird\Model\UpdateCountPreferenceOfChannelByUrlResponse
```

Update count preference of a channel

## Update count preference of a channel  Updates count preference of a specific group channel of a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-count-preference-of-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$channel_url = 'channel_url_example'; // string
$update_count_preference_of_channel_by_url_data = new \Sendbird\Model\UpdateCountPreferenceOfChannelByUrlData(); // \Sendbird\Model\UpdateCountPreferenceOfChannelByUrlData

try {
    $result = $apiInstance->updateCountPreferenceOfChannelByUrl($api_token, $user_id, $channel_url, $update_count_preference_of_channel_by_url_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateCountPreferenceOfChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **channel_url** | **string**|  |
 **update_count_preference_of_channel_by_url_data** | [**\Sendbird\Model\UpdateCountPreferenceOfChannelByUrlData**](../Model/UpdateCountPreferenceOfChannelByUrlData.md)|  | [optional]

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
updatePushPreferences($api_token, $user_id, $update_push_preferences_data): \Sendbird\Model\UpdatePushPreferencesResponse
```

Update push preferences

## Update push preferences  Updates a user's push preferences. Through this action, you can set `do_not_disturb` for a user, and update the time frame in which the setting applies.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-push-preferences ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$update_push_preferences_data = new \Sendbird\Model\UpdatePushPreferencesData(); // \Sendbird\Model\UpdatePushPreferencesData

try {
    $result = $apiInstance->updatePushPreferences($api_token, $user_id, $update_push_preferences_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **update_push_preferences_data** | [**\Sendbird\Model\UpdatePushPreferencesData**](../Model/UpdatePushPreferencesData.md)|  | [optional]

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

## `updatePushPreferencesForChannelByUrl()`

```php
updatePushPreferencesForChannelByUrl($api_token, $user_id, $channel_url, $update_push_preferences_for_channel_by_url_data): \Sendbird\Model\UpdatePushPreferencesForChannelByUrlResponse
```

Update push preferences for a channel

## Update push preferences for a channel  Updates push preferences for a user's specific group channel. The push notifications feature is only available for group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-push-preferences-for-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$channel_url = 'channel_url_example'; // string
$update_push_preferences_for_channel_by_url_data = new \Sendbird\Model\UpdatePushPreferencesForChannelByUrlData(); // \Sendbird\Model\UpdatePushPreferencesForChannelByUrlData

try {
    $result = $apiInstance->updatePushPreferencesForChannelByUrl($api_token, $user_id, $channel_url, $update_push_preferences_for_channel_by_url_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updatePushPreferencesForChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **channel_url** | **string**|  |
 **update_push_preferences_for_channel_by_url_data** | [**\Sendbird\Model\UpdatePushPreferencesForChannelByUrlData**](../Model/UpdatePushPreferencesForChannelByUrlData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdatePushPreferencesForChannelByUrlResponse**](../Model/UpdatePushPreferencesForChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserById()`

```php
updateUserById($api_token, $user_id, $update_user_by_id_data): \Sendbird\Model\SendBirdUser
```

Update a user

## Update a user  Updates information on a user. In addition to changing a user's nickname or profile image, you can issue a new access token for the user. The new access token replaces the previous one as the necessary token for authentication.  You can also deactivate or reactivate a user. If the `leave_all_when_deactivated` is true (which it is by default), a user leaves all joined group channels when deactivated.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$update_user_by_id_data = new \Sendbird\Model\UpdateUserByIdData(); // \Sendbird\Model\UpdateUserByIdData

try {
    $result = $apiInstance->updateUserById($api_token, $user_id, $update_user_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **update_user_by_id_data** | [**\Sendbird\Model\UpdateUserByIdData**](../Model/UpdateUserByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelInvitationPreference()`

```php
viewChannelInvitationPreference($api_token, $user_id): \Sendbird\Model\ViewChannelInvitationPreferenceResponse
```

View channel invitation preference

## View channel invitation preference  Retrieves channel invitation preference for a user's [private](https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#-3-private-vs-public) group channels.  > __Note__: Using the [view default channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-default-channel-invitation-preference) action, you can retrieve the value of channel invitation preference which is globally applied to all users within the application.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-channel-invitation-preference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->viewChannelInvitationPreference($api_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\Sendbird\Model\ViewChannelInvitationPreferenceResponse**](../Model/ViewChannelInvitationPreferenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewCountPreferenceOfChannelByUrl()`

```php
viewCountPreferenceOfChannelByUrl($api_token, $user_id, $channel_url): \Sendbird\Model\ViewCountPreferenceOfChannelByUrlResponse
```

View count preference of a channel

## View count preference of a channel  Retrieves count preference of a specific group channel of a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-count-preference-of-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$channel_url = 'channel_url_example'; // string

try {
    $result = $apiInstance->viewCountPreferenceOfChannelByUrl($api_token, $user_id, $channel_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewCountPreferenceOfChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\ViewCountPreferenceOfChannelByUrlResponse**](../Model/ViewCountPreferenceOfChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfChannelsByJoinStatus()`

```php
viewNumberOfChannelsByJoinStatus($api_token, $user_id, $state): \Sendbird\Model\ViewNumberOfChannelsByJoinStatusResponse
```

View number of channels by join status

## View number of channels by join status  Retrieves the number of a user's group channels by their join status.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-number-of-channels-by-join-status ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the user to retrieve the number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$state = 'state_example'; // string

try {
    $result = $apiInstance->viewNumberOfChannelsByJoinStatus($api_token, $user_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfChannelsByJoinStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **state** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfChannelsByJoinStatusResponse**](../Model/ViewNumberOfChannelsByJoinStatusResponse.md)

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
viewNumberOfChannelsWithUnreadMessages($api_token, $user_id, $custom_types, $super_mode): \Sendbird\Model\ViewNumberOfChannelsWithUnreadMessagesResponse
```

View number of channels with unread messages

## View number of channels with unread messages  Retrieves the total number of a user's group channels with unread messages.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-number-of-channels-with-unread-messages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$custom_types = array('custom_types_example'); // string[]
$super_mode = 'super_mode_example'; // string

try {
    $result = $apiInstance->viewNumberOfChannelsWithUnreadMessages($api_token, $user_id, $custom_types, $super_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfChannelsWithUnreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **custom_types** | [**string[]**](../Model/string.md)|  | [optional]
 **super_mode** | **string**|  | [optional]

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

## `viewNumberOfUnreadItems()`

```php
viewNumberOfUnreadItems($api_token, $user_id, $custom_type, $item_keys): \Sendbird\Model\ViewNumberOfUnreadItemsResponse
```

View number of unread items

## View number of unread items  Retrieves a set of total numbers of a user's unread messages, unread mentioned messages, or received invitations in either super or non-super group channels. This action is only available for the group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-number-of-unread-items ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$custom_type = 'custom_type_example'; // string
$item_keys = 'item_keys_example'; // string

try {
    $result = $apiInstance->viewNumberOfUnreadItems($api_token, $user_id, $custom_type, $item_keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfUnreadItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **custom_type** | **string**|  | [optional]
 **item_keys** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ViewNumberOfUnreadItemsResponse**](../Model/ViewNumberOfUnreadItemsResponse.md)

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
viewNumberOfUnreadMessages($api_token, $user_id, $custom_types, $super_mode): \Sendbird\Model\ViewNumberOfUnreadMessagesResponse
```

View number of unread messages

## View number of unread messages  Retrieves the total number of a user's currently unread messages in the group channels. The unread counts feature is only available for the group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-number-of-unread-messages ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the user to retrieve the number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$custom_types = 'custom_types_example'; // string
$super_mode = 'super_mode_example'; // string

try {
    $result = $apiInstance->viewNumberOfUnreadMessages($api_token, $user_id, $custom_types, $super_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewNumberOfUnreadMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **custom_types** | **string**|  | [optional]
 **super_mode** | **string**|  | [optional]

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
viewPushPreferences($api_token, $user_id): \Sendbird\Model\ViewPushPreferencesResponse
```

View push preferences

## View push preferences  Retrieves a user's push preferences about whether the user has set `do_not_disturb` to pause notifications for a certain period of time, and the time frame in which the user has applied the setting.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-push-preferences ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->viewPushPreferences($api_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewPushPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |

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

## `viewPushPreferencesForChannelByUrl()`

```php
viewPushPreferencesForChannelByUrl($api_token, $user_id, $channel_url): \Sendbird\Model\ViewPushPreferencesForChannelByUrlResponse
```

View push preferences for a channel

## View push preferences for a channel  Retrieves whether a user has turned on notification messages for a specific channel. The push notifications feature is only available for group channels.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-push-preferences-for-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$channel_url = 'channel_url_example'; // string

try {
    $result = $apiInstance->viewPushPreferencesForChannelByUrl($api_token, $user_id, $channel_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewPushPreferencesForChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\ViewPushPreferencesForChannelByUrlResponse**](../Model/ViewPushPreferencesForChannelByUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewUserById()`

```php
viewUserById($api_token, $user_id, $include_unread_count, $custom_types, $super_mode): \Sendbird\Model\SendBirdUser
```

View a user

## View a user  Retrieves information on a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-a-user ----------------------------   `user_id`      Type: string      Description: Specifies the unique ID of the user to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$include_unread_count = True; // bool
$custom_types = 'custom_types_example'; // string
$super_mode = 'super_mode_example'; // string

try {
    $result = $apiInstance->viewUserById($api_token, $user_id, $include_unread_count, $custom_types, $super_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **include_unread_count** | **bool**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **super_mode** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewWhoOwnsRegistrationOrDeviceTokenByToken()`

```php
viewWhoOwnsRegistrationOrDeviceTokenByToken($api_token, $token_type, $token): \Sendbird\Model\ViewWhoOwnsRegistrationOrDeviceTokenByTokenResponse
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
$api_token = {{API_TOKEN}}; // string
$token_type = 'token_type_example'; // string
$token = 'token_example'; // string

try {
    $result = $apiInstance->viewWhoOwnsRegistrationOrDeviceTokenByToken($api_token, $token_type, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->viewWhoOwnsRegistrationOrDeviceTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token_type** | **string**|  |
 **token** | **string**|  |

### Return type

[**\Sendbird\Model\ViewWhoOwnsRegistrationOrDeviceTokenByTokenResponse**](../Model/ViewWhoOwnsRegistrationOrDeviceTokenByTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
