# Sendbird\GroupChannelApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**gcAcceptInvitation()**](GroupChannelApi.md#gcAcceptInvitation) | **PUT** /v3/group_channels/{channel_url}/accept | Accept an invitation
[**gcCancelTheRegistrationOfOperators()**](GroupChannelApi.md#gcCancelTheRegistrationOfOperators) | **DELETE** /v3/group_channels/{channel_url}/operators | Cancel the registration of operators
[**gcCheckIfMemberById()**](GroupChannelApi.md#gcCheckIfMemberById) | **GET** /v3/group_channels/{channel_url}/members/{user_id} | Check if member
[**gcCreateChannel()**](GroupChannelApi.md#gcCreateChannel) | **POST** /v3/group_channels | Create a channel
[**gcDeclineInvitation()**](GroupChannelApi.md#gcDeclineInvitation) | **PUT** /v3/group_channels/{channel_url}/decline | Decline an invitation
[**gcDeleteChannelByUrl()**](GroupChannelApi.md#gcDeleteChannelByUrl) | **DELETE** /v3/group_channels/{channel_url} | Delete a channel
[**gcHideOrArchiveChannel()**](GroupChannelApi.md#gcHideOrArchiveChannel) | **PUT** /v3/group_channels/{channel_url}/hide | Hide or archive a channel
[**gcInviteAsMembers()**](GroupChannelApi.md#gcInviteAsMembers) | **POST** /v3/group_channels/{channel_url}/invite | Invite as members
[**gcJoinChannel()**](GroupChannelApi.md#gcJoinChannel) | **PUT** /v3/group_channels/{channel_url}/join | Join a channel
[**gcLeaveChannel()**](GroupChannelApi.md#gcLeaveChannel) | **PUT** /v3/group_channels/{channel_url}/leave | Leave a channel
[**gcListChannels()**](GroupChannelApi.md#gcListChannels) | **GET** /v3/group_channels | List channels
[**gcListMembers()**](GroupChannelApi.md#gcListMembers) | **GET** /v3/group_channels/{channel_url}/members | List members
[**gcListOperators()**](GroupChannelApi.md#gcListOperators) | **GET** /v3/group_channels/{channel_url}/operators | List operators
[**gcRegisterOperators()**](GroupChannelApi.md#gcRegisterOperators) | **POST** /v3/group_channels/{channel_url}/operators | Register operators
[**gcResetChatHistory()**](GroupChannelApi.md#gcResetChatHistory) | **PUT** /v3/group_channels/{channel_url}/reset_user_history | Reset chat history
[**gcUnhideOrUnarchiveChannel()**](GroupChannelApi.md#gcUnhideOrUnarchiveChannel) | **DELETE** /v3/group_channels/{channel_url}/hide | Unhide or unarchive a channel
[**gcUpdateChannelByUrl()**](GroupChannelApi.md#gcUpdateChannelByUrl) | **PUT** /v3/group_channels/{channel_url} | Update a channel
[**gcViewChannelByUrl()**](GroupChannelApi.md#gcViewChannelByUrl) | **GET** /v3/group_channels/{channel_url} | View a channel


## `gcAcceptInvitation()`

```php
gcAcceptInvitation($api_token, $channel_url, $gc_accept_invitation_data): \Sendbird\Model\SendBirdGroupChannel
```

Accept an invitation

## Accept an invitation  Accepts an invitation from a [private](#4-private-vs-public) group channel for a user to join. Since a user is allowed to join up to 2,000 group channels, the invitation to a user who already belongs to a maximum number of group channels will be canceled automatically.  > __Note__: This action is effective only when the `auto_accept` property of an application is set to false. You can change the value of the property using the [update default channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-default-channel-invitation-preference) action, or [update a user's channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-channel-invitation-preference) action.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-accept-an-invitation ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_accept_invitation_data = new \Sendbird\Model\GcAcceptInvitationData(); // \Sendbird\Model\GcAcceptInvitationData

try {
    $result = $apiInstance->gcAcceptInvitation($api_token, $channel_url, $gc_accept_invitation_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcAcceptInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_accept_invitation_data** | [**\Sendbird\Model\GcAcceptInvitationData**](../Model/GcAcceptInvitationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdGroupChannel**](../Model/SendBirdGroupChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcCancelTheRegistrationOfOperators()`

```php
gcCancelTheRegistrationOfOperators($api_token, $channel_url, $operator_ids, $delete_all): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Cancel the registration of operators

## Cancel the registration of operators  Cancels the registration of operators from a group channel but leave them as members.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-cancel-the-registration-of-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to cancel the registration of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$operator_ids = array('operator_ids_example'); // string[]
$delete_all = True; // bool

try {
    $result = $apiInstance->gcCancelTheRegistrationOfOperators($api_token, $channel_url, $operator_ids, $delete_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcCancelTheRegistrationOfOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **operator_ids** | [**string[]**](../Model/string.md)|  |
 **delete_all** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcCheckIfMemberById()`

```php
gcCheckIfMemberById($api_token, $channel_url, $user_id): \Sendbird\Model\GcCheckIfMemberByIdResponse
```

Check if member

## Check if member  Checks whether the user is a member of the group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-check-if-member ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->gcCheckIfMemberById($api_token, $channel_url, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcCheckIfMemberById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\Sendbird\Model\GcCheckIfMemberByIdResponse**](../Model/GcCheckIfMemberByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcCreateChannel()`

```php
gcCreateChannel($api_token, $gc_create_channel_data): \Sendbird\Model\SendBirdGroupChannel
```

Create a channel

## Create a channel  Creates a new group channel.  > If you are creating a 1-on-1 direct messaging channel for a user, it is recommended that you turn on the `distinct` property. If the property is turned off, a user can create a new channel even if they have had the previous chat between them, and therefore can't see previously sent messages or data in the new channel. On the other hand, if the `distinct` property is turned on, every 1-on-1 conversation between the same two users occurs within the same channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-create-a-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$gc_create_channel_data = new \Sendbird\Model\GcCreateChannelData(); // \Sendbird\Model\GcCreateChannelData

try {
    $result = $apiInstance->gcCreateChannel($api_token, $gc_create_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcCreateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **gc_create_channel_data** | [**\Sendbird\Model\GcCreateChannelData**](../Model/GcCreateChannelData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdGroupChannel**](../Model/SendBirdGroupChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcDeclineInvitation()`

```php
gcDeclineInvitation($api_token, $channel_url, $gc_decline_invitation_data): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Decline an invitation

## Decline an invitation  Declines an invitation for a user to not join a [private](#4-private-vs-public) group channel.  > __Note__: This action is effective only when the `auto_accept` property of an application is set to false. You can change the value of the property using the [update default channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-default-channel-invitation-preference) action, or [update a user's channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-channel-invitation-preference) action.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-decline-an-invitation ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_decline_invitation_data = new \Sendbird\Model\GcDeclineInvitationData(); // \Sendbird\Model\GcDeclineInvitationData

try {
    $result = $apiInstance->gcDeclineInvitation($api_token, $channel_url, $gc_decline_invitation_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcDeclineInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_decline_invitation_data** | [**\Sendbird\Model\GcDeclineInvitationData**](../Model/GcDeclineInvitationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcDeleteChannelByUrl()`

```php
gcDeleteChannelByUrl($api_token, $channel_url): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Delete a channel

## Delete a channel  Deletes a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-delete-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string

try {
    $result = $apiInstance->gcDeleteChannelByUrl($api_token, $channel_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcDeleteChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcHideOrArchiveChannel()`

```php
gcHideOrArchiveChannel($api_token, $channel_url, $gc_hide_or_archive_channel_data): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Hide or archive a channel

## Hide or archive a channel  Hides or archives a channel from the channel list of either a specific user or entire channel members. Normally, a hidden channel comes back and shows up in the channel list when a member in the channel sends a new message. This automatically-triggered behavior is intended for users who want to temporarily remove a channel from their list because [leaving the channel](#2-leave-the-channel) would delete all the past messages and stored data.  You can also leave out a channel from the list and archive the channel. The channel doesn't appear even when receiving a new message from other member.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-hide-or-archive-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_hide_or_archive_channel_data = new \Sendbird\Model\GcHideOrArchiveChannelData(); // \Sendbird\Model\GcHideOrArchiveChannelData

try {
    $result = $apiInstance->gcHideOrArchiveChannel($api_token, $channel_url, $gc_hide_or_archive_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcHideOrArchiveChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_hide_or_archive_channel_data** | [**\Sendbird\Model\GcHideOrArchiveChannelData**](../Model/GcHideOrArchiveChannelData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcInviteAsMembers()`

```php
gcInviteAsMembers($api_token, $channel_url, $gc_invite_as_members_data): \Sendbird\Model\SendBirdGroupChannel
```

Invite as members

## Invite as members  Invites one or more users as members into the group channel.  > __Note__: By default, users in your application automatically join a [private](#4-private-vs-public) group channel promptly from an invitation without having to accept it. If you want to give them the option to decide whether to accept or decline an invitation, you should set the value of channel invitation preference to false through the [update default channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-default-channel-invitation-preference) action. Or using the [update a user's channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-channel-invitation-preference) action, you can also allow the option individually by user.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-invite-as-members ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_invite_as_members_data = new \Sendbird\Model\GcInviteAsMembersData(); // \Sendbird\Model\GcInviteAsMembersData

try {
    $result = $apiInstance->gcInviteAsMembers($api_token, $channel_url, $gc_invite_as_members_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcInviteAsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_invite_as_members_data** | [**\Sendbird\Model\GcInviteAsMembersData**](../Model/GcInviteAsMembersData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdGroupChannel**](../Model/SendBirdGroupChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcJoinChannel()`

```php
gcJoinChannel($api_token, $channel_url, $gc_join_channel_data)
```

Join a channel

## Join a channel  Allows a user to join a [public](#4-private-vs-public) group channel. Since a user is allowed to join up to 2,000 group channels, a user who already belongs to a maximum number of group channels can't join a new channel.  > __Note__: This action is only permitted for public group channels where the `is_public` property is true.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-join-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_join_channel_data = new \Sendbird\Model\GcJoinChannelData(); // \Sendbird\Model\GcJoinChannelData

try {
    $apiInstance->gcJoinChannel($api_token, $channel_url, $gc_join_channel_data);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcJoinChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_join_channel_data** | [**\Sendbird\Model\GcJoinChannelData**](../Model/GcJoinChannelData.md)|  | [optional]

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

## `gcLeaveChannel()`

```php
gcLeaveChannel($api_token, $channel_url, $gc_leave_channel_data): \Sendbird\Model\OcDeleteChannelByUrl200Response
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
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_leave_channel_data = new \Sendbird\Model\GcLeaveChannelData(); // \Sendbird\Model\GcLeaveChannelData

try {
    $result = $apiInstance->gcLeaveChannel($api_token, $channel_url, $gc_leave_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcLeaveChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_leave_channel_data** | [**\Sendbird\Model\GcLeaveChannelData**](../Model/GcLeaveChannelData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcListChannels()`

```php
gcListChannels($api_token, $token, $limit, $distinct_mode, $public_mode, $super_mode, $created_after, $created_before, $show_empty, $show_member, $show_delivery_receipt, $show_read_receipt, $show_metadata, $show_frozen, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $include_sorted_metaarray_in_last_message, $custom_type, $read_receipt, $member, $is_distinct, $members_in, $user_id): \Sendbird\Model\GcListChannelsResponse
```

List channels

## List channels  Retrieves a list of group channels in the application.  > __Note__: If you want to get a list of a specific user's group channels, use the [list my group channels](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-list-my-group-channels) action instead.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-list-channels ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int
$distinct_mode = 'distinct_mode_example'; // string
$public_mode = 'public_mode_example'; // string
$super_mode = 'super_mode_example'; // string
$created_after = 56; // int
$created_before = 56; // int
$show_empty = True; // bool
$show_member = True; // bool
$show_delivery_receipt = True; // bool
$show_read_receipt = True; // bool
$show_metadata = True; // bool
$show_frozen = True; // bool
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
$metadata_key = 'metadata_key_example'; // string
$metadata_values = 'metadata_values_example'; // string
$metadata_value_startswith = 'metadata_value_startswith_example'; // string
$metacounter_key = 'metacounter_key_example'; // string
$metacounter_values = 'metacounter_values_example'; // string
$metacounter_value_gt = 'metacounter_value_gt_example'; // string
$metacounter_value_gte = 'metacounter_value_gte_example'; // string
$metacounter_value_lt = 'metacounter_value_lt_example'; // string
$metacounter_value_lte = 'metacounter_value_lte_example'; // string
$include_sorted_metaarray_in_last_message = True; // bool
$custom_type = 'custom_type_example'; // string
$read_receipt = True; // bool
$member = True; // bool
$is_distinct = True; // bool
$members_in = 'members_in_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->gcListChannels($api_token, $token, $limit, $distinct_mode, $public_mode, $super_mode, $created_after, $created_before, $show_empty, $show_member, $show_delivery_receipt, $show_read_receipt, $show_metadata, $show_frozen, $order, $metadata_order_key, $custom_types, $custom_type_startswith, $channel_urls, $name, $name_contains, $name_startswith, $members_exactly_in, $members_include_in, $query_type, $members_nickname, $members_nickname_contains, $metadata_key, $metadata_values, $metadata_value_startswith, $metacounter_key, $metacounter_values, $metacounter_value_gt, $metacounter_value_gte, $metacounter_value_lt, $metacounter_value_lte, $include_sorted_metaarray_in_last_message, $custom_type, $read_receipt, $member, $is_distinct, $members_in, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcListChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **distinct_mode** | **string**|  | [optional]
 **public_mode** | **string**|  | [optional]
 **super_mode** | **string**|  | [optional]
 **created_after** | **int**|  | [optional]
 **created_before** | **int**|  | [optional]
 **show_empty** | **bool**|  | [optional]
 **show_member** | **bool**|  | [optional]
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **show_metadata** | **bool**|  | [optional]
 **show_frozen** | **bool**|  | [optional]
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
 **metadata_key** | **string**|  | [optional]
 **metadata_values** | **string**|  | [optional]
 **metadata_value_startswith** | **string**|  | [optional]
 **metacounter_key** | **string**|  | [optional]
 **metacounter_values** | **string**|  | [optional]
 **metacounter_value_gt** | **string**|  | [optional]
 **metacounter_value_gte** | **string**|  | [optional]
 **metacounter_value_lt** | **string**|  | [optional]
 **metacounter_value_lte** | **string**|  | [optional]
 **include_sorted_metaarray_in_last_message** | **bool**|  | [optional]
 **custom_type** | **string**|  | [optional]
 **read_receipt** | **bool**|  | [optional]
 **member** | **bool**|  | [optional]
 **is_distinct** | **bool**|  | [optional]
 **members_in** | **string**|  | [optional]
 **user_id** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GcListChannelsResponse**](../Model/GcListChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcListMembers()`

```php
gcListMembers($api_token, $channel_url, $token, $limit, $show_delivery_receipt, $show_read_receipt, $order, $operator_filter, $member_state_filter, $muted_member_filter, $nickname_startswith): \Sendbird\Model\GcListMembersResponse
```

List members

## List members  Retrieves a list of members of a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-list-members ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of members of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int
$show_delivery_receipt = True; // bool
$show_read_receipt = True; // bool
$order = 'order_example'; // string
$operator_filter = 'operator_filter_example'; // string
$member_state_filter = 'member_state_filter_example'; // string
$muted_member_filter = 'muted_member_filter_example'; // string
$nickname_startswith = 'nickname_startswith_example'; // string

try {
    $result = $apiInstance->gcListMembers($api_token, $channel_url, $token, $limit, $show_delivery_receipt, $show_read_receipt, $order, $operator_filter, $member_state_filter, $muted_member_filter, $nickname_startswith);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcListMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **order** | **string**|  | [optional]
 **operator_filter** | **string**|  | [optional]
 **member_state_filter** | **string**|  | [optional]
 **muted_member_filter** | **string**|  | [optional]
 **nickname_startswith** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\GcListMembersResponse**](../Model/GcListMembersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcListOperators()`

```php
gcListOperators($api_token, $channel_url, $token, $limit): \Sendbird\Model\GcListOperatorsResponse
```

List operators

## List operators  Retrieves a list of operators of a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-list-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->gcListOperators($api_token, $channel_url, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcListOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\GcListOperatorsResponse**](../Model/GcListOperatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcRegisterOperators()`

```php
gcRegisterOperators($api_token, $channel_url, $gc_register_operators_data): \Sendbird\Model\GcRegisterOperatorsResponse
```

Register operators

## Register operators  Registers one or more operators to a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-register-operators ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_register_operators_data = new \Sendbird\Model\GcRegisterOperatorsData(); // \Sendbird\Model\GcRegisterOperatorsData

try {
    $result = $apiInstance->gcRegisterOperators($api_token, $channel_url, $gc_register_operators_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcRegisterOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_register_operators_data** | [**\Sendbird\Model\GcRegisterOperatorsData**](../Model/GcRegisterOperatorsData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GcRegisterOperatorsResponse**](../Model/GcRegisterOperatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcResetChatHistory()`

```php
gcResetChatHistory($api_token, $channel_url, $gc_reset_chat_history_data): \Sendbird\Model\GcResetChatHistoryResponse
```

Reset chat history

## Reset chat history  Resets the properties related to a user's chat history in a group channel, then clears the existing messages in the channel on the user's side only. A user can no longer see the messages in a group channel once this action is called, but those messages are not deleted from the database of the Sendbird system. All other members in the channel can retrieve and see the messages.  This action simply clears the messages for the user by updating the `last_message` and `read_receipt` properties of the [channel](#2-types-of-a-channel-3-resource-representation) resource in addition to other internally managed data such as the number of the user's unread message.  Using the `reset_all` property, you can also reset the properties related to all users' chat history in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-reset-chat-history ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_reset_chat_history_data = new \Sendbird\Model\GcResetChatHistoryData(); // \Sendbird\Model\GcResetChatHistoryData

try {
    $result = $apiInstance->gcResetChatHistory($api_token, $channel_url, $gc_reset_chat_history_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcResetChatHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_reset_chat_history_data** | [**\Sendbird\Model\GcResetChatHistoryData**](../Model/GcResetChatHistoryData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GcResetChatHistoryResponse**](../Model/GcResetChatHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcUnhideOrUnarchiveChannel()`

```php
gcUnhideOrUnarchiveChannel($api_token, $channel_url, $user_id, $should_unhide_all): \Sendbird\Model\OcDeleteChannelByUrl200Response
```

Unhide or unarchive a channel

## Unhide or unarchive a channel  Makes a hidden or archived channel reappear in the channel list of either a specific user or entire channel members.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-unhide-or-unarchive-a-channel ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to unhide or unarchive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$user_id = 'user_id_example'; // string
$should_unhide_all = True; // bool

try {
    $result = $apiInstance->gcUnhideOrUnarchiveChannel($api_token, $channel_url, $user_id, $should_unhide_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcUnhideOrUnarchiveChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **user_id** | **string**|  |
 **should_unhide_all** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\OcDeleteChannelByUrl200Response**](../Model/OcDeleteChannelByUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcUpdateChannelByUrl()`

```php
gcUpdateChannelByUrl($api_token, $channel_url, $gc_update_channel_by_url_data): \Sendbird\Model\SendBirdGroupChannel
```

Update a channel

## Update a channel  Updates information on a group channel.  > __Note__: You can't change the members of the channel here. To do so, see [invite as members](#2-invite-as-members) action below.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-update-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_update_channel_by_url_data = new \Sendbird\Model\GcUpdateChannelByUrlData(); // \Sendbird\Model\GcUpdateChannelByUrlData

try {
    $result = $apiInstance->gcUpdateChannelByUrl($api_token, $channel_url, $gc_update_channel_by_url_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcUpdateChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_update_channel_by_url_data** | [**\Sendbird\Model\GcUpdateChannelByUrlData**](../Model/GcUpdateChannelByUrlData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdGroupChannel**](../Model/SendBirdGroupChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcViewChannelByUrl()`

```php
gcViewChannelByUrl($api_token, $channel_url, $show_delivery_receipt, $show_read_receipt, $show_member, $read_receipt, $member): \Sendbird\Model\SendBirdGroupChannel
```

View a channel

## View a channel  Retrieves information on a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-view-a-channel ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\GroupChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$show_delivery_receipt = True; // bool
$show_read_receipt = True; // bool
$show_member = True; // bool
$read_receipt = True; // bool
$member = True; // bool

try {
    $result = $apiInstance->gcViewChannelByUrl($api_token, $channel_url, $show_delivery_receipt, $show_read_receipt, $show_member, $read_receipt, $member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupChannelApi->gcViewChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **show_delivery_receipt** | **bool**|  | [optional]
 **show_read_receipt** | **bool**|  | [optional]
 **show_member** | **bool**|  | [optional]
 **read_receipt** | **bool**|  | [optional]
 **member** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdGroupChannel**](../Model/SendBirdGroupChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
