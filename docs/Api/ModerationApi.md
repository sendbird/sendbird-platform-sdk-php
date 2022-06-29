# Sendbird\ModerationApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**banFromChannelsWithCustomChannelTypes()**](ModerationApi.md#banFromChannelsWithCustomChannelTypes) | **POST** /v3/users/{user_id}/banned_channel_custom_types | Ban from channels with custom channel types
[**blockUser()**](ModerationApi.md#blockUser) | **POST** /v3/users/{user_id}/block | Block a user
[**gcBanUser()**](ModerationApi.md#gcBanUser) | **POST** /v3/group_channels/{channel_url}/ban | Ban a user
[**gcFreezeChannel()**](ModerationApi.md#gcFreezeChannel) | **PUT** /v3/group_channels/{channel_url}/freeze | Freeze a channel
[**gcListBannedUsers()**](ModerationApi.md#gcListBannedUsers) | **GET** /v3/group_channels/{channel_url}/ban | List banned users
[**gcListMutedUsers()**](ModerationApi.md#gcListMutedUsers) | **GET** /v3/group_channels/{channel_url}/mute | List muted users
[**gcMuteUser()**](ModerationApi.md#gcMuteUser) | **POST** /v3/group_channels/{channel_url}/mute | Mute a user
[**gcUnbanUserById()**](ModerationApi.md#gcUnbanUserById) | **DELETE** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Unban a user
[**gcUnmuteUserById()**](ModerationApi.md#gcUnmuteUserById) | **DELETE** /v3/group_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
[**gcUpdateBanById()**](ModerationApi.md#gcUpdateBanById) | **PUT** /v3/group_channels/{channel_url}/ban/{banned_user_id} | Update a ban
[**gcViewBanById()**](ModerationApi.md#gcViewBanById) | **GET** /v3/group_channels/{channel_url}/ban/{banned_user_id} | View a ban
[**gcViewMuteById()**](ModerationApi.md#gcViewMuteById) | **GET** /v3/group_channels/{channel_url}/mute/{muted_user_id} | View a mute
[**listBannedChannels()**](ModerationApi.md#listBannedChannels) | **GET** /v3/users/{user_id}/ban | List banned channels
[**listBlockedUsers()**](ModerationApi.md#listBlockedUsers) | **GET** /v3/users/{user_id}/block | List blocked users
[**listMutedChannels()**](ModerationApi.md#listMutedChannels) | **GET** /v3/users/{user_id}/mute | List muted channels
[**muteInChannelsWithCustomChannelTypes()**](ModerationApi.md#muteInChannelsWithCustomChannelTypes) | **POST** /v3/users/{user_id}/muted_channel_custom_types | Mute in channels with custom channel types
[**ocBanUser()**](ModerationApi.md#ocBanUser) | **POST** /v3/open_channels/{channel_url}/ban | Ban a user
[**ocFreezeChannel()**](ModerationApi.md#ocFreezeChannel) | **PUT** /v3/open_channels/{channel_url}/freeze | Freeze a channel
[**ocListBannedUsers()**](ModerationApi.md#ocListBannedUsers) | **GET** /v3/open_channels/{channel_url}/ban | List banned users
[**ocListMutedUsers()**](ModerationApi.md#ocListMutedUsers) | **GET** /v3/open_channels/{channel_url}/mute | List muted users
[**ocMuteUser()**](ModerationApi.md#ocMuteUser) | **POST** /v3/open_channels/{channel_url}/mute | Mute a user
[**ocUnbanUserById()**](ModerationApi.md#ocUnbanUserById) | **DELETE** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Unban a user
[**ocUnmuteUserById()**](ModerationApi.md#ocUnmuteUserById) | **DELETE** /v3/open_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
[**ocUpdateBanById()**](ModerationApi.md#ocUpdateBanById) | **PUT** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Update a ban
[**ocViewBanById()**](ModerationApi.md#ocViewBanById) | **GET** /v3/open_channels/{channel_url}/ban/{banned_user_id} | View a ban
[**ocViewMuteById()**](ModerationApi.md#ocViewMuteById) | **GET** /v3/open_channels/{channel_url}/mute/{muted_user_id} | View a mute
[**unblockUserById()**](ModerationApi.md#unblockUserById) | **DELETE** /v3/users/{user_id}/block/{target_id} | Unblock a user


## `banFromChannelsWithCustomChannelTypes()`

```php
banFromChannelsWithCustomChannelTypes($api_token, $user_id, $ban_from_channels_with_custom_channel_types_data): object
```

Ban from channels with custom channel types

## Ban from channels with custom channel types  Bans a user from channels with particular custom channel types.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-ban-from-channels-with-custom-channel-types ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$ban_from_channels_with_custom_channel_types_data = new \Sendbird\Model\BanFromChannelsWithCustomChannelTypesData(); // \Sendbird\Model\BanFromChannelsWithCustomChannelTypesData

try {
    $result = $apiInstance->banFromChannelsWithCustomChannelTypes($api_token, $user_id, $ban_from_channels_with_custom_channel_types_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->banFromChannelsWithCustomChannelTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **ban_from_channels_with_custom_channel_types_data** | [**\Sendbird\Model\BanFromChannelsWithCustomChannelTypesData**](../Model/BanFromChannelsWithCustomChannelTypesData.md)|  | [optional]

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

## `blockUser()`

```php
blockUser($api_token, $user_id, $block_user_data): \Sendbird\Model\BlockUserResponse
```

Block a user

## Block a user  Allows a user to block another user. A user doesn't receive messages from someone they have blocked anymore. Also, blocking someone doesn't alert them that they have been blocked. Blocked users still can send messages as normal in the channel: however, they can't receive any messages from the users who have blocked them.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-block-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
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
    echo 'Exception when calling ModerationApi->blockUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **block_user_data** | [**\Sendbird\Model\BlockUserData**](../Model/BlockUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\BlockUserResponse**](../Model/BlockUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcBanUser()`

```php
gcBanUser($api_token, $channel_url, $gc_ban_user_data): \Sendbird\Model\GcBanUserResponse
```

Ban a user

## Ban a user  Bans a user from a group channel. A banned user is immediately expelled from a channel and allowed to join the channel again after a set time period.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-ban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_ban_user_data = new \Sendbird\Model\GcBanUserData(); // \Sendbird\Model\GcBanUserData

try {
    $result = $apiInstance->gcBanUser($api_token, $channel_url, $gc_ban_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcBanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_ban_user_data** | [**\Sendbird\Model\GcBanUserData**](../Model/GcBanUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GcBanUserResponse**](../Model/GcBanUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcFreezeChannel()`

```php
gcFreezeChannel($api_token, $channel_url, $gc_freeze_channel_data): \Sendbird\Model\SendBirdGroupChannel
```

Freeze a channel

## Freeze a channel  Freezes or unfreezes a group channel.  > __Note__: Only users designated as channel operators are allowed to talk when a channel is frozen.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-freeze-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_freeze_channel_data = new \Sendbird\Model\GcFreezeChannelData(); // \Sendbird\Model\GcFreezeChannelData

try {
    $result = $apiInstance->gcFreezeChannel($api_token, $channel_url, $gc_freeze_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcFreezeChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_freeze_channel_data** | [**\Sendbird\Model\GcFreezeChannelData**](../Model/GcFreezeChannelData.md)|  | [optional]

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

## `gcListBannedUsers()`

```php
gcListBannedUsers($api_token, $channel_url, $token, $limit): \Sendbird\Model\GcListBannedUsersResponse
```

List banned users

## List banned users  Retrieves a list of the banned users from a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-list-banned-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel where to retrieve a list of banned users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->gcListBannedUsers($api_token, $channel_url, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcListBannedUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Sendbird\Model\GcListBannedUsersResponse**](../Model/GcListBannedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcListMutedUsers()`

```php
gcListMutedUsers($api_token, $channel_url, $token, $limit): \Sendbird\Model\GcListMutedUsersResponse
```

List muted users

## List muted users  Retrieves a list of the muted users in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-list-muted-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of muted users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->gcListMutedUsers($api_token, $channel_url, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcListMutedUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Sendbird\Model\GcListMutedUsersResponse**](../Model/GcListMutedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcMuteUser()`

```php
gcMuteUser($api_token, $channel_url, $gc_mute_user_data): \Sendbird\Model\SendBirdGroupChannel
```

Mute a user

## Mute a user  Mutes a user in a group channel. A muted user remains in the channel and is allowed to view the messages, but can't send any messages until unmuted.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-mute-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$gc_mute_user_data = new \Sendbird\Model\GcMuteUserData(); // \Sendbird\Model\GcMuteUserData

try {
    $result = $apiInstance->gcMuteUser($api_token, $channel_url, $gc_mute_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcMuteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **gc_mute_user_data** | [**\Sendbird\Model\GcMuteUserData**](../Model/GcMuteUserData.md)|  | [optional]

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

## `gcUnbanUserById()`

```php
gcUnbanUserById($api_token, $channel_url, $banned_user_id): \Sendbird\Model\InlineResponse2001
```

Unban a user

## Unban a user  Unbans a user from a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-unban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string

try {
    $result = $apiInstance->gcUnbanUserById($api_token, $channel_url, $banned_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcUnbanUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcUnmuteUserById()`

```php
gcUnmuteUserById($api_token, $channel_url, $muted_user_id): \Sendbird\Model\InlineResponse2001
```

Unmute a user

## Unmute a user  Unmutes a user within a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-unmute-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string

try {
    $result = $apiInstance->gcUnmuteUserById($api_token, $channel_url, $muted_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcUnmuteUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcUpdateBanById()`

```php
gcUpdateBanById($api_token, $channel_url, $banned_user_id, $gc_update_ban_by_id_data): \Sendbird\Model\GcUpdateBanByIdResponse
```

Update a ban

## Update a ban  Updates details of a ban imposed on a user. You can change the length of the ban with this action, and also provide an updated description.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-update-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string
$gc_update_ban_by_id_data = new \Sendbird\Model\GcUpdateBanByIdData(); // \Sendbird\Model\GcUpdateBanByIdData

try {
    $result = $apiInstance->gcUpdateBanById($api_token, $channel_url, $banned_user_id, $gc_update_ban_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcUpdateBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |
 **gc_update_ban_by_id_data** | [**\Sendbird\Model\GcUpdateBanByIdData**](../Model/GcUpdateBanByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GcUpdateBanByIdResponse**](../Model/GcUpdateBanByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcViewBanById()`

```php
gcViewBanById($api_token, $channel_url, $banned_user_id): \Sendbird\Model\GcViewBanByIdResponse
```

View a ban

## View a ban  Retrieves details of a ban imposed on a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-view-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string

try {
    $result = $apiInstance->gcViewBanById($api_token, $channel_url, $banned_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcViewBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\GcViewBanByIdResponse**](../Model/GcViewBanByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcViewMuteById()`

```php
gcViewMuteById($api_token, $channel_url, $muted_user_id): \Sendbird\Model\GcViewMuteByIdResponse
```

View a mute

## View a mute  Checks if a user is muted in a group channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/group-channel#2-view-a-mute ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string

try {
    $result = $apiInstance->gcViewMuteById($api_token, $channel_url, $muted_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->gcViewMuteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\GcViewMuteByIdResponse**](../Model/GcViewMuteByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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



$apiInstance = new Sendbird\Api\ModerationApi(
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
    echo 'Exception when calling ModerationApi->listBannedChannels: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\ModerationApi(
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
    echo 'Exception when calling ModerationApi->listBlockedUsers: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\ModerationApi(
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
    echo 'Exception when calling ModerationApi->listMutedChannels: ', $e->getMessage(), PHP_EOL;
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

## `muteInChannelsWithCustomChannelTypes()`

```php
muteInChannelsWithCustomChannelTypes($api_token, $user_id, $mute_in_channels_with_custom_channel_types_data): object
```

Mute in channels with custom channel types

## Mute in channels with custom channel types  Mutes a user in channels with particular custom channel types.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-mute-in-channels-with-custom-channel-types ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$mute_in_channels_with_custom_channel_types_data = new \Sendbird\Model\MuteInChannelsWithCustomChannelTypesData(); // \Sendbird\Model\MuteInChannelsWithCustomChannelTypesData

try {
    $result = $apiInstance->muteInChannelsWithCustomChannelTypes($api_token, $user_id, $mute_in_channels_with_custom_channel_types_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->muteInChannelsWithCustomChannelTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **mute_in_channels_with_custom_channel_types_data** | [**\Sendbird\Model\MuteInChannelsWithCustomChannelTypesData**](../Model/MuteInChannelsWithCustomChannelTypesData.md)|  | [optional]

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

## `ocBanUser()`

```php
ocBanUser($api_token, $channel_url, $oc_ban_user_data): \Sendbird\Model\OcBanUserResponse
```

Ban a user

## Ban a user  Bans a user from an open channel. A banned user is immediately expelled from a channel and allowed to participate in the channel again after a set time period.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-ban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$oc_ban_user_data = new \Sendbird\Model\OcBanUserData(); // \Sendbird\Model\OcBanUserData

try {
    $result = $apiInstance->ocBanUser($api_token, $channel_url, $oc_ban_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocBanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **oc_ban_user_data** | [**\Sendbird\Model\OcBanUserData**](../Model/OcBanUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcBanUserResponse**](../Model/OcBanUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocFreezeChannel()`

```php
ocFreezeChannel($api_token, $channel_url, $oc_freeze_channel_data): \Sendbird\Model\SendBirdOpenChannel
```

Freeze a channel

## Freeze a channel  Freezes or unfreezes an open channel.  > __Note__: Only users designated as channel operators are allowed to talk when a channel is frozen.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-freeze-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$oc_freeze_channel_data = new \Sendbird\Model\OcFreezeChannelData(); // \Sendbird\Model\OcFreezeChannelData

try {
    $result = $apiInstance->ocFreezeChannel($api_token, $channel_url, $oc_freeze_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocFreezeChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **oc_freeze_channel_data** | [**\Sendbird\Model\OcFreezeChannelData**](../Model/OcFreezeChannelData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListBannedUsers()`

```php
ocListBannedUsers($api_token, $channel_url, $token, $limit): \Sendbird\Model\OcListBannedUsersResponse
```

List banned users

## List banned users  Retrieves a list of banned users from a specific open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-banned-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel where to retrieve a list of banned users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListBannedUsers($api_token, $channel_url, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocListBannedUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Sendbird\Model\OcListBannedUsersResponse**](../Model/OcListBannedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListMutedUsers()`

```php
ocListMutedUsers($api_token, $channel_url, $token, $limit): \Sendbird\Model\OcListMutedUsersResponse
```

List muted users

## List muted users  Retrieves a list of muted users in the channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-muted-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of muted users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListMutedUsers($api_token, $channel_url, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocListMutedUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Sendbird\Model\OcListMutedUsersResponse**](../Model/OcListMutedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocMuteUser()`

```php
ocMuteUser($api_token, $channel_url, $oc_mute_user_data): \Sendbird\Model\SendBirdOpenChannel
```

Mute a user

## Mute a user  Mutes a user in the channel. A muted user remains in the channel and is allowed to view the messages, but can't send any messages until unmuted.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-mute-a-user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$oc_mute_user_data = new \Sendbird\Model\OcMuteUserData(); // \Sendbird\Model\OcMuteUserData

try {
    $result = $apiInstance->ocMuteUser($api_token, $channel_url, $oc_mute_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocMuteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **oc_mute_user_data** | [**\Sendbird\Model\OcMuteUserData**](../Model/OcMuteUserData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocUnbanUserById()`

```php
ocUnbanUserById($api_token, $channel_url, $banned_user_id): \Sendbird\Model\InlineResponse2001
```

Unban a user

## Unban a user  Unbans a user from an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-unban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string

try {
    $result = $apiInstance->ocUnbanUserById($api_token, $channel_url, $banned_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocUnbanUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocUnmuteUserById()`

```php
ocUnmuteUserById($api_token, $channel_url, $muted_user_id): \Sendbird\Model\InlineResponse2001
```

Unmute a user

## Unmute a user  Unmutes a user from an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-unmute-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string

try {
    $result = $apiInstance->ocUnmuteUserById($api_token, $channel_url, $muted_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocUnmuteUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocUpdateBanById()`

```php
ocUpdateBanById($api_token, $channel_url, $banned_user_id, $oc_update_ban_by_id_data): \Sendbird\Model\OcUpdateBanByIdResponse
```

Update a ban

## Update a ban  Updates details of a ban imposed on a user. You can change the length of a ban with this action, and also provide an updated description.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-update-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string
$oc_update_ban_by_id_data = new \Sendbird\Model\OcUpdateBanByIdData(); // \Sendbird\Model\OcUpdateBanByIdData

try {
    $result = $apiInstance->ocUpdateBanById($api_token, $channel_url, $banned_user_id, $oc_update_ban_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocUpdateBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |
 **oc_update_ban_by_id_data** | [**\Sendbird\Model\OcUpdateBanByIdData**](../Model/OcUpdateBanByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\OcUpdateBanByIdResponse**](../Model/OcUpdateBanByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocViewBanById()`

```php
ocViewBanById($api_token, $channel_url, $banned_user_id): \Sendbird\Model\OcViewBanByIdResponse
```

View a ban

## View a ban  Retrieves details of a ban imposed on a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string

try {
    $result = $apiInstance->ocViewBanById($api_token, $channel_url, $banned_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocViewBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\OcViewBanByIdResponse**](../Model/OcViewBanByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocViewMuteById()`

```php
ocViewMuteById($api_token, $channel_url, $muted_user_id): \Sendbird\Model\OcViewMuteByIdResponse
```

View a mute

## View a mute  Checks if a user is muted in an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-mute ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string

try {
    $result = $apiInstance->ocViewMuteById($api_token, $channel_url, $muted_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->ocViewMuteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |

### Return type

[**\Sendbird\Model\OcViewMuteByIdResponse**](../Model/OcViewMuteByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unblockUserById()`

```php
unblockUserById($api_token, $user_id, $target_id): object
```

Unblock a user

## Unblock a user  Unblocks the user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-unblock-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$user_id = 'user_id_example'; // string
$target_id = 'target_id_example'; // string

try {
    $result = $apiInstance->unblockUserById($api_token, $user_id, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->unblockUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **user_id** | **string**|  |
 **target_id** | **string**|  |

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
