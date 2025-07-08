# Sendbird\GroupChannelApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptAnInvitation()**](GroupChannelApi.md#acceptAnInvitation) | **PUT** /v3/group_channels/{channel_url}/accept | Accept an invitation
[**cancelTheRegistrationOfOperators()**](GroupChannelApi.md#cancelTheRegistrationOfOperators) | **DELETE** /v3/group_channels/{channel_url}/operators | Cancel the registration of operators
[**checkIfMember()**](GroupChannelApi.md#checkIfMember) | **GET** /v3/group_channels/{channel_url}/members/{user_id} | Check if member
[**createAGroupChannel()**](GroupChannelApi.md#createAGroupChannel) | **POST** /v3/group_channels | Create a group channel
[**deleteAGroupChannel()**](GroupChannelApi.md#deleteAGroupChannel) | **DELETE** /v3/group_channels/{channel_url} | Delete a group channel
[**getAGroupChannel()**](GroupChannelApi.md#getAGroupChannel) | **GET** /v3/group_channels/{channel_url} | Get a group channel
[**hideAChannel()**](GroupChannelApi.md#hideAChannel) | **PUT** /v3/group_channels/{channel_url}/hide | Hide a channel
[**inviteAsMembers()**](GroupChannelApi.md#inviteAsMembers) | **POST** /v3/group_channels/{channel_url}/invite | Invite as members
[**joinAChannel()**](GroupChannelApi.md#joinAChannel) | **PUT** /v3/group_channels/{channel_url}/join | Join a channel
[**leaveAChannel()**](GroupChannelApi.md#leaveAChannel) | **PUT** /v3/group_channels/{channel_url}/leave | Leave a channel
[**listChannels()**](GroupChannelApi.md#listChannels) | **GET** /v3/group_channels | List channels
[**listMembers()**](GroupChannelApi.md#listMembers) | **GET** /v3/group_channels/{channel_url}/members | List members
[**listOperators()**](GroupChannelApi.md#listOperators) | **GET** /v3/group_channels/{channel_url}/operators | List operators
[**registerOperatorsToAGroupChannel()**](GroupChannelApi.md#registerOperatorsToAGroupChannel) | **POST** /v3/group_channels/{channel_url}/operators | Register operators to a group channel
[**resetChatHistory()**](GroupChannelApi.md#resetChatHistory) | **PUT** /v3/group_channels/{channel_url}/reset_user_history | Reset chat history
[**startTypingIndicators()**](GroupChannelApi.md#startTypingIndicators) | **POST** /v3/group_channels/{channel_url}/typing | Start typing indicators
[**stopTypingIndicators()**](GroupChannelApi.md#stopTypingIndicators) | **DELETE** /v3/group_channels/{channel_url}/typing | Stop typing indicators
[**unhideAChannel()**](GroupChannelApi.md#unhideAChannel) | **DELETE** /v3/group_channels/{channel_url}/hide | Unhide a channel
[**updateAGroupChannel()**](GroupChannelApi.md#updateAGroupChannel) | **PUT** /v3/group_channels/{channel_url} | Update a group channel


## `acceptAnInvitation()`

```php
acceptAnInvitation($channel_url, $api_token, $accept_an_invitation_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Accept an invitation

## Accept an invitation  Accepts an invitation from a group channel for a user to join. A single user may join up to 2,000 group channels, and any invitation to a user who is at capacity will be automatically canceled. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  > **Note**: This action is only available when the `auto_accept` property of an application is set to **false**. You can change the value of the property using the [update default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/update-default-invitation-preference) action, or the [update channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-channel-invitation-preference) action.      [https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/accept-an-invitation-channel#1-accept-an-invitation](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/accept-an-invitation-channel#1-accept-an-invitation)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['accept_an_invitation_request'] = new \Sendbird\Model\AcceptAnInvitationRequest(); // \Sendbird\Model\AcceptAnInvitationRequest

try {
    $result = $apiInstance->acceptAnInvitation($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->acceptAnInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **accept_an_invitation_request** | [**\Sendbird\Model\AcceptAnInvitationRequest**](../Model/AcceptAnInvitationRequest.md)|  | [optional]

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

## `cancelTheRegistrationOfOperators()`

```php
cancelTheRegistrationOfOperators($channel_url, $operator_ids, $delete_all, $api_token): object
```

Cancel the registration of operators

## Unregister operators from a group channel  You can unregister operators in a group channel but keep them in the channel as members using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/unregister-operators-from-a-group-channel#1-unregister-operators-from-a-group-channel  `channel_url`   Type: string   Description: Specifies the URL of the channel to cancel the registration of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['operator_ids'] = 'operator_ids_example'; // string | Specifies an array of one or more operator IDs to unregister from the channel. The operators in this array remain as participants of the channel after losing their operational roles. Urlencoding each operator ID is recommended. An example of a Urlencoded array would be ?operator_ids=urlencoded_id_1,urlencoded_id_2.
$associate_array['delete_all'] = True; // bool
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->cancelTheRegistrationOfOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->cancelTheRegistrationOfOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **operator_ids** | **string**| Specifies an array of one or more operator IDs to unregister from the channel. The operators in this array remain as participants of the channel after losing their operational roles. Urlencoding each operator ID is recommended. An example of a Urlencoded array would be ?operator_ids&#x3D;urlencoded_id_1,urlencoded_id_2. |
 **delete_all** | **bool**|  | [optional]
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

## `checkIfMember()`

```php
checkIfMember($channel_url, $user_id, $api_token): \Sendbird\Model\CheckIfMemberResponse
```

Check if member

## Check if user is a member  Checks if a user is a member of a group channel.  > **Note**: See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.      [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/check-if-user-is-a-member#1-check-if-user-is-a-member](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/check-if-user-is-a-member#1-check-if-user-is-a-member)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->checkIfMember($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->checkIfMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **user_id** | **string**| (Required) |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\CheckIfMemberResponse**](../Model/CheckIfMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAGroupChannel()`

```php
createAGroupChannel($api_token, $create_a_group_channel_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Create a group channel

## Create a group channel  You can create a group channel for 1-to-1 and 1-to-N conversations. By default, group channels are used for conversations between up to 100 members. This number can stretch up to tens of thousands in Supergroup channels. Group channels can either be private and invite only, or public. They support typing indicators, unread count and read receipts, allowing for an interactive chat experience. A user can join up to 2000 group channels, and higher numbers would negatively impact the performance for the end user. The Chat history is turned off by default and its settings can be changed on Sendbird Dashboard by going to Settings > Chat > Channels > Group channels > Chat history. To learn more about group channels, see Channel Overview.  > If you are seeing the error message Maximum \"channel join\" count reached., then consider deleting channels that are no longer used. For situations where an agent connects with many customers such as support, delivery logistics or sales, we recommend using Sendbird Desk.  https://sendbird.com/docs/chat/platform-api/v3/channel/creating-a-channel/create-a-group-channel#1-create-a-group-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['create_a_group_channel_request'] = new \Sendbird\Model\CreateAGroupChannelRequest(); // \Sendbird\Model\CreateAGroupChannelRequest

try {
    $result = $apiInstance->createAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->createAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **create_a_group_channel_request** | [**\Sendbird\Model\CreateAGroupChannelRequest**](../Model/CreateAGroupChannelRequest.md)|  | [optional]

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

## `deleteAGroupChannel()`

```php
deleteAGroupChannel($channel_url, $api_token): object
```

Delete a group channel

## Delete a group channel  You can delete a group channel or a Supergroup channel using this API. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-a-group-channel#1-delete-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/delete-a-group-channel#1-delete-a-group-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->deleteAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
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

## `getAGroupChannel()`

```php
getAGroupChannel($channel_url, $show_delivery_receipt, $show_read_receipt, $show_member, $member_active_mode, $user_id, $api_token): \Sendbird\Model\GetAGroupChannelResponse
```

Get a group channel

## Get a group channel  This action retrieves information about a specific [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel). You can use the optional query parameters to determine whether to include delivery receipt, read receipt, or member information in the response.  https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/get-a-group-channel#1-get-a-group-channel  `channel_url`   Type: string   Description: Specifies the URL of the channel to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['show_delivery_receipt'] = True; // bool
$associate_array['show_read_receipt'] = True; // bool
$associate_array['show_member'] = True; // bool
$associate_array['member_active_mode'] = 'member_active_mode_example'; // string | Restricts the member list to members who are activated or deactivated in the channel. This parameter is only effective if the parameter show_member is true. Acceptable values are all, activated, and deactivated. (default: all)
$associate_array['user_id'] = 'user_id_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->getAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->getAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **show_member** | **bool**|  | [optional]
 **member_active_mode** | **string**| Restricts the member list to members who are activated or deactivated in the channel. This parameter is only effective if the parameter show_member is true. Acceptable values are all, activated, and deactivated. (default: all) | [optional]
 **user_id** | **string**|  | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GetAGroupChannelResponse**](../Model/GetAGroupChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideAChannel()`

```php
hideAChannel($channel_url, $api_token, $hide_a_channel_request): object
```

Hide a channel

## Hide a channel  This action allows you to hide a [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) from a user's channel list. Hiding a channel gives users the ability to archive channels so that they can focus on channels that need the most attention.  With this API, you can allow users to hide a channel from themselves or from all channel members. You can also determine whether to have the channel remain hidden when a new message is sent to the channel. Note that only group channels can be hidden.  [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/hide-a-channel#1-hide-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/hide-a-channel#1-hide-a-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['hide_a_channel_request'] = new \Sendbird\Model\HideAChannelRequest(); // \Sendbird\Model\HideAChannelRequest

try {
    $result = $apiInstance->hideAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->hideAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **hide_a_channel_request** | [**\Sendbird\Model\HideAChannelRequest**](../Model/HideAChannelRequest.md)|  | [optional]

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

## `inviteAsMembers()`

```php
inviteAsMembers($channel_url, $api_token, $invite_as_members_request): \Sendbird\Model\InviteAsMembersResponse
```

Invite as members

## Invite as members  Invites one or more users as members to a group channel. Users can join a group channel immediately after receiving an invitation, without having to accept it. To give users an option to accept or decline an invitation, see [update default channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/setting-up-channels/update-default-invitation-preference) or [update channel invitation preference](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-channel-invitation-preference). See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  > **Note**: By default, [blocked users](https://sendbird.com/docs/chat/platform-api/v3/moderation/blocking-users/block-users) are included when sending invitations. If you wish to exclude blocked users, [contact our sales team](https://get.sendbird.com/talk-to-sales.html).      [https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel#1-invite-as-members](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel#1-invite-as-members)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['invite_as_members_request'] = new \Sendbird\Model\InviteAsMembersRequest(); // \Sendbird\Model\InviteAsMembersRequest

try {
    $result = $apiInstance->inviteAsMembers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->inviteAsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **invite_as_members_request** | [**\Sendbird\Model\InviteAsMembersRequest**](../Model/InviteAsMembersRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\InviteAsMembersResponse**](../Model/InviteAsMembersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `joinAChannel()`

```php
joinAChannel($channel_url, $api_token, $join_a_channel_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Join a channel

## Join a channel  This API allows a user to join a [public](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-group-channel-types) group channel. Users can only join public group channels where the `is_public` property is set to `true` using this API. A single user can join up to 2,000 group channels, and a user who reaches the capacity can’t join a new channel. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/join-a-channel#1-join-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/join-a-channel#1-join-a-channel)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['join_a_channel_request'] = new \Sendbird\Model\JoinAChannelRequest(); // \Sendbird\Model\JoinAChannelRequest

try {
    $result = $apiInstance->joinAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->joinAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **join_a_channel_request** | [**\Sendbird\Model\JoinAChannelRequest**](../Model/JoinAChannelRequest.md)|  | [optional]

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

## `leaveAChannel()`

```php
leaveAChannel($channel_url, $api_token, $leave_a_channel_request): object
```

Leave a channel

## Leave a channel  Makes one or more members leave a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-leave-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['leave_a_channel_request'] = new \Sendbird\Model\LeaveAChannelRequest(); // \Sendbird\Model\LeaveAChannelRequest

try {
    $result = $apiInstance->leaveAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->leaveAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **leave_a_channel_request** | [**\Sendbird\Model\LeaveAChannelRequest**](../Model/LeaveAChannelRequest.md)|  | [optional]

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

## `listChannels()`

```php
listChannels($api_token, $token, $limit, $distinct_mode, $public_mode, $super_mode, $created_after, $created_before, $show_empty, $show_member, $show_delivery_receipt, $show_read_receipt, $show_metadata, $show_frozen, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $include_sorted_metaarray_in_last_message): \Sendbird\Model\GroupChatListChannelsResponse
```

List channels

## List group channels  This action retrieves a list of [group channels](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel). You can use various query parameters to determine the search scope and select what kind of information you want to receive about the queried channels.  If you want to retrieve a list of group channels that a specific user has joined, use the [list group channels by user](https://sendbird.com/docs/chat/platform-api/v3/user/managing-joined-group-channels/list-group-channels-by-user) action under the User section.  https://sendbird.com/docs/chat/platform-api/v3/channel/listing-channels-in-an-application/list-group-channels#1-list-group-channels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
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

try {
    $result = $apiInstance->listChannels($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->listChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

### Return type

[**\Sendbird\Model\GroupChatListChannelsResponse**](../Model/GroupChatListChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMembers()`

```php
listMembers($channel_url, $token, $limit, $user_id, $show_delivery_receipt, $show_read_receipt, $show_member_is_muted, $order, $operator_filter, $member_state_filter, $muted_member_filter, $member_active_mode_filter, $nickname_startswith, $include_push_preference, $api_token): \Sendbird\Model\GroupChannelListMembersResponse
```

List members

## List members  Retrieves a list of members of a group channel.  > **Note**: See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.      [https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/list-members-of-a-group-channel#1-list-members-of-a-group-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/listing-users/list-members-of-a-group-channel#1-list-members-of-a-group-channel)  `channel_url`   Type: string   Description: Specifies the URL of the channel to retrieve a list of members of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int | Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10)
$associate_array['user_id'] = 'user_id_example'; // string | Specifies the unique ID of a user. If `user_id` is provided, the response will include two additional boolean properties about each user in the members list. - `is_blocking_me`: Indicates whether the listed user is blocking the user specified in the user_id parameter. - `is_blocked_by_me`: Indicates whether the listed user is blocked by the user specified in the user_id parameter.
$associate_array['show_delivery_receipt'] = True; // bool
$associate_array['show_read_receipt'] = True; // bool
$associate_array['show_member_is_muted'] = True; // bool
$associate_array['order'] = 'order_example'; // string | Specifies the method to sort a list of results. Acceptable values are the following: - `member_nickname_alphabetical` (default): sorts by the member nicknames in alphabetical order. - `operator_then_member_alphabetical`: sorts by the operational role and member nickname in alphabetical order where channel operators are listed before channel members.
$associate_array['operator_filter'] = 'operator_filter_example'; // string | Restricts the search scope to only retrieve operators or non-operator members of the channel. Acceptable values are the following: - `all` (default): no filter is applied to the list. - `operator`: only channel operators are retrieved. - `nonoperator`: all channel members, except channel operators, are retrieved.
$associate_array['member_state_filter'] = 'member_state_filter_example'; // string | Restricts the search scope to retrieve members based on if they have accepted an invitation or if they were invited by a friend. Acceptable values are `invited_only`, `joined_only`, `invited_by_friend`, `invited_by_non_friend`, and `all`. (Default: `all`)
$associate_array['muted_member_filter'] = 'muted_member_filter_example'; // string | Restricts the search scope to retrieve members who are muted or unmuted in the channel. Acceptable values are `all`, `muted`, and `unmuted`. (Default: `all`)
$associate_array['member_active_mode_filter'] = 'member_active_mode_filter_example'; // string | Restricts the search scope to retrieve members who are activated or deactivated in the channel. Acceptable values are `all`, `activated`, and `deactivated`. (default: `activated`)
$associate_array['nickname_startswith'] = 'nickname_startswith_example'; // string | Searches for members whose nicknames start with the specified value. Urlencoding the value is recommended.
$associate_array['include_push_preference'] = True; // bool | Determines whether to include information about the push preference of each member, such as `push_enabled`, `push_trigger_option`, and `do_not_disturb`. (Default: `false`)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listMembers($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **token** | **string**|  | [optional]
 **limit** | **int**| Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10) | [optional]
 **user_id** | **string**| Specifies the unique ID of a user. If &#x60;user_id&#x60; is provided, the response will include two additional boolean properties about each user in the members list. - &#x60;is_blocking_me&#x60;: Indicates whether the listed user is blocking the user specified in the user_id parameter. - &#x60;is_blocked_by_me&#x60;: Indicates whether the listed user is blocked by the user specified in the user_id parameter. | [optional]
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **show_member_is_muted** | **bool**|  | [optional]
 **order** | **string**| Specifies the method to sort a list of results. Acceptable values are the following: - &#x60;member_nickname_alphabetical&#x60; (default): sorts by the member nicknames in alphabetical order. - &#x60;operator_then_member_alphabetical&#x60;: sorts by the operational role and member nickname in alphabetical order where channel operators are listed before channel members. | [optional]
 **operator_filter** | **string**| Restricts the search scope to only retrieve operators or non-operator members of the channel. Acceptable values are the following: - &#x60;all&#x60; (default): no filter is applied to the list. - &#x60;operator&#x60;: only channel operators are retrieved. - &#x60;nonoperator&#x60;: all channel members, except channel operators, are retrieved. | [optional]
 **member_state_filter** | **string**| Restricts the search scope to retrieve members based on if they have accepted an invitation or if they were invited by a friend. Acceptable values are &#x60;invited_only&#x60;, &#x60;joined_only&#x60;, &#x60;invited_by_friend&#x60;, &#x60;invited_by_non_friend&#x60;, and &#x60;all&#x60;. (Default: &#x60;all&#x60;) | [optional]
 **muted_member_filter** | **string**| Restricts the search scope to retrieve members who are muted or unmuted in the channel. Acceptable values are &#x60;all&#x60;, &#x60;muted&#x60;, and &#x60;unmuted&#x60;. (Default: &#x60;all&#x60;) | [optional]
 **member_active_mode_filter** | **string**| Restricts the search scope to retrieve members who are activated or deactivated in the channel. Acceptable values are &#x60;all&#x60;, &#x60;activated&#x60;, and &#x60;deactivated&#x60;. (default: &#x60;activated&#x60;) | [optional]
 **nickname_startswith** | **string**| Searches for members whose nicknames start with the specified value. Urlencoding the value is recommended. | [optional]
 **include_push_preference** | **bool**| Determines whether to include information about the push preference of each member, such as &#x60;push_enabled&#x60;, &#x60;push_trigger_option&#x60;, and &#x60;do_not_disturb&#x60;. (Default: &#x60;false&#x60;) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GroupChannelListMembersResponse**](../Model/GroupChannelListMembersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOperators()`

```php
listOperators($channel_url, $token, $limit, $api_token): \Sendbird\Model\ListOperatorsResponse
```

List operators

## List operators  You can retrieve a list of operators of a group channel using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/list-operators-of-a-group-channel#1-list-operators-of-a-group-channel  `channel_url`   Type: string   Description: Specifies the URL of the channel to retrieve a list of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int | Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10)
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listOperators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->listOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **token** | **string**|  | [optional]
 **limit** | **int**| Specifies the number of results to return per page. Acceptable values are 1 to 100, inclusive. (Default: 10) | [optional]
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\ListOperatorsResponse**](../Model/ListOperatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerOperatorsToAGroupChannel()`

```php
registerOperatorsToAGroupChannel($channel_url, $api_token, $register_operators_to_a_group_channel_request): object
```

Register operators to a group channel

## Register operators to a group channel  You can register one or more operators to a group channel using this API.  https://sendbird.com/docs/chat/platform-api/v3/user/assigning-a-user-role/register-operators-to-a-group-channel#1-register-operators-to-a-group-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['register_operators_to_a_group_channel_request'] = new \Sendbird\Model\RegisterOperatorsToAGroupChannelRequest(); // \Sendbird\Model\RegisterOperatorsToAGroupChannelRequest

try {
    $result = $apiInstance->registerOperatorsToAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->registerOperatorsToAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **register_operators_to_a_group_channel_request** | [**\Sendbird\Model\RegisterOperatorsToAGroupChannelRequest**](../Model/RegisterOperatorsToAGroupChannelRequest.md)|  | [optional]

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

## `resetChatHistory()`

```php
resetChatHistory($channel_url, $api_token, $reset_chat_history_request): \Sendbird\Model\ResetChatHistoryResponse
```

Reset chat history

## Reset chat history  This action resets the properties related to a specific user's chat history in a [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel), clearing existing messages in a channel from only the specified user's end. Because this action doesn't delete messages from the Sendbird database, other members in the channel can still retrieve and see the messages.  This action clears the messages for the specified user by updating the `last_message` and `read_receipt` properties of the [group channel resource](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#4-list-of-properties-for-group-channels) in addition to other internally managed data such as the count of a user's unread messages.  Using the `reset_all` property, you can also reset the properties related to the chat history of all members in a group channel.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/reset-chat-history#1-reset-chat-history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['reset_chat_history_request'] = new \Sendbird\Model\ResetChatHistoryRequest(); // \Sendbird\Model\ResetChatHistoryRequest

try {
    $result = $apiInstance->resetChatHistory($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->resetChatHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **reset_chat_history_request** | [**\Sendbird\Model\ResetChatHistoryRequest**](../Model/ResetChatHistoryRequest.md)|  | [optional]

### Return type

[**\Sendbird\Model\ResetChatHistoryResponse**](../Model/ResetChatHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startTypingIndicators()`

```php
startTypingIndicators($channel_url, $api_token, $start_typing_indicators_request): object
```

Start typing indicators

## Start typing indicators  You can start showing a typing indicator using this API. Seeing whether other users are typing can help a more interactive conversation environment by showing real-time engagement of other users.  If you're looking for an easy way to show typing indicators on your app, check out Sendbird UIKit for a ready-to-use UI feature that can be customized to fit your needs.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-typing-indicators/start-typing-indicators#1-start-typing-indicators  `channel_url`   Type: string   Description: Specifies the URL of the channel to set typing indicators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['start_typing_indicators_request'] = new \Sendbird\Model\StartTypingIndicatorsRequest(); // \Sendbird\Model\StartTypingIndicatorsRequest

try {
    $result = $apiInstance->startTypingIndicators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->startTypingIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **start_typing_indicators_request** | [**\Sendbird\Model\StartTypingIndicatorsRequest**](../Model/StartTypingIndicatorsRequest.md)|  | [optional]

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

## `stopTypingIndicators()`

```php
stopTypingIndicators($channel_url, $api_token, $start_typing_indicators_request): object
```

Stop typing indicators

## Stop typing indicators  You can stop showing a typing indicator using this API. To signal that a user is no longer typing, you can let the indicator disappear when the user sends a message or completely deletes the message text.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-typing-indicators/stop-typing-indicators#1-stop-typing-indicators  `channel_url`   Type: string   Description: Specifies the URL of the channel to set typing indicators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['start_typing_indicators_request'] = new \Sendbird\Model\StartTypingIndicatorsRequest(); // \Sendbird\Model\StartTypingIndicatorsRequest

try {
    $result = $apiInstance->stopTypingIndicators($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->stopTypingIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **api_token** | **string**|  | [optional]
 **start_typing_indicators_request** | [**\Sendbird\Model\StartTypingIndicatorsRequest**](../Model/StartTypingIndicatorsRequest.md)|  | [optional]

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

## `unhideAChannel()`

```php
unhideAChannel($channel_url, $user_id, $should_unhide_all, $api_token): object
```

Unhide a channel

## Unhide a channel  This action lets a hidden [group channel](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-group-channel) reappear on the channel list of a specific user or every member in the group channel. Hiding or unhiding a channel lets users organize their channel list based on those that require the most attention. Note that only group channels can be hidden or unhidden.  [https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/unhide-a-channel#1-unhide-a-channel](https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/unhide-a-channel#1-unhide-a-channel)  `channel_url`   Type: string   Description: Specifies the URL of the channel to unhide or unarchive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string | (Required)
$associate_array['user_id'] = 'user_id_example'; // string | (Required)
$associate_array['should_unhide_all'] = True; // bool
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->unhideAChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->unhideAChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**| (Required) |
 **user_id** | **string**| (Required) |
 **should_unhide_all** | **bool**|  | [optional]
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

## `updateAGroupChannel()`

```php
updateAGroupChannel($channel_url, $api_token, $update_a_group_channel_request): \Sendbird\Model\SendbirdGroupChannelDetail
```

Update a group channel

## Update a group channel  You can update information about a group channel or a Supergroup channel using this API. You can't make any changes to the members of a channel with this API. To change members, see [invite as members](https://sendbird.com/docs/chat/platform-api/v3/channel/inviting-a-user/invite-as-members-channel) instead. See [this page](https://sendbird.com/docs/chat/platform-api/v3/channel/channel-overview#2-channel-types-3-open-channel-vs-group-channel-vs-supergroup-channel) to learn more about channel types.  https://sendbird.com/docs/chat/platform-api/v3/channel/managing-a-channel/update-a-group-channel#1-update-a-group-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['channel_url'] = 'channel_url_example'; // string
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_a_group_channel_request'] = new \Sendbird\Model\UpdateAGroupChannelRequest(); // \Sendbird\Model\UpdateAGroupChannelRequest

try {
    $result = $apiInstance->updateAGroupChannel($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->updateAGroupChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_a_group_channel_request** | [**\Sendbird\Model\UpdateAGroupChannelRequest**](../Model/UpdateAGroupChannelRequest.md)|  | [optional]

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
