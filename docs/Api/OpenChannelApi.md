# OpenAPI\Client\OpenChannelApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ocBanUser()**](OpenChannelApi.md#ocBanUser) | **POST** /v3/open_channels/{channel_url}/ban | Ban a user
[**ocCancelTheRegistrationOfOperators()**](OpenChannelApi.md#ocCancelTheRegistrationOfOperators) | **DELETE** /v3/open_channels/{channel_url}/operators | Cancel the registration of operators
[**ocCreateChannel()**](OpenChannelApi.md#ocCreateChannel) | **POST** /v3/open_channels | Create a channel
[**ocDeleteChannelByUrl()**](OpenChannelApi.md#ocDeleteChannelByUrl) | **DELETE** /v3/open_channels/{channel_url} | Delete a channel
[**ocFreezeChannel()**](OpenChannelApi.md#ocFreezeChannel) | **PUT** /v3/open_channels/{channel_url}/freeze | Freeze a channel
[**ocListBannedUsers()**](OpenChannelApi.md#ocListBannedUsers) | **GET** /v3/open_channels/{channel_url}/ban | List banned users
[**ocListChannels()**](OpenChannelApi.md#ocListChannels) | **GET** /v3/open_channels | List channels
[**ocListMutedUsers()**](OpenChannelApi.md#ocListMutedUsers) | **GET** /v3/open_channels/{channel_url}/mute | List muted users
[**ocListOperators()**](OpenChannelApi.md#ocListOperators) | **GET** /v3/open_channels/{channel_url}/operators | List operators
[**ocListParticipants()**](OpenChannelApi.md#ocListParticipants) | **GET** /v3/open_channels/{channel_url}/participants | List participants
[**ocMuteUser()**](OpenChannelApi.md#ocMuteUser) | **POST** /v3/open_channels/{channel_url}/mute | Mute a user
[**ocRegisterOperators()**](OpenChannelApi.md#ocRegisterOperators) | **POST** /v3/open_channels/{channel_url}/operators | Register operators
[**ocUnbanUserById()**](OpenChannelApi.md#ocUnbanUserById) | **DELETE** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Unban a user
[**ocUnmuteUserById()**](OpenChannelApi.md#ocUnmuteUserById) | **DELETE** /v3/open_channels/{channel_url}/mute/{muted_user_id} | Unmute a user
[**ocUpdateBanById()**](OpenChannelApi.md#ocUpdateBanById) | **PUT** /v3/open_channels/{channel_url}/ban/{banned_user_id} | Update a ban
[**ocUpdateChannelByUrl()**](OpenChannelApi.md#ocUpdateChannelByUrl) | **PUT** /v3/open_channels/{channel_url} | Update a channel
[**ocViewBanById()**](OpenChannelApi.md#ocViewBanById) | **GET** /v3/open_channels/{channel_url}/ban/{banned_user_id} | View a ban
[**ocViewChannelByUrl()**](OpenChannelApi.md#ocViewChannelByUrl) | **GET** /v3/open_channels/{channel_url} | View a channel
[**ocViewMuteById()**](OpenChannelApi.md#ocViewMuteById) | **GET** /v3/open_channels/{channel_url}/mute/{muted_user_id} | View a mute


## `ocBanUser()`

```php
ocBanUser($channel_url, $api_token, $oc_ban_user_data): \OpenAPI\Client\Model\InlineResponse20034BannedList
```

Ban a user

## Ban a user  Bans a user from an open channel. A banned user is immediately expelled from a channel and allowed to participate in the channel again after a set time period.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-ban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_ban_user_data = new \OpenAPI\Client\Model\OcBanUserData(); // \OpenAPI\Client\Model\OcBanUserData

try {
    $result = $apiInstance->ocBanUser($channel_url, $api_token, $oc_ban_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocBanUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_ban_user_data** | [**\OpenAPI\Client\Model\OcBanUserData**](../Model/OcBanUserData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20034BannedList**](../Model/InlineResponse20034BannedList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocCancelTheRegistrationOfOperators()`

```php
ocCancelTheRegistrationOfOperators($channel_url, $operator_ids, $api_token, $delete_all)
```

Cancel the registration of operators

## Cancel the registration of operators  Cancels the registration of operators from an open channel but leave them as participants.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-cancel-the-registration-of-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to cancel the registration of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$operator_ids = array('operator_ids_example'); // string[]
$api_token = {{API_TOKEN}}; // string
$delete_all = True; // bool

try {
    $apiInstance->ocCancelTheRegistrationOfOperators($channel_url, $operator_ids, $api_token, $delete_all);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocCancelTheRegistrationOfOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **operator_ids** | [**string[]**](../Model/string.md)|  |
 **api_token** | **string**|  | [optional]
 **delete_all** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocCreateChannel()`

```php
ocCreateChannel($api_token, $oc_create_channel_data): \OpenAPI\Client\Model\SendBirdOpenChannel
```

Create a channel

## Create a channel  Creates an open channel.  >__Note__: Classic open channels created before the deprecation date of March 2021 will maintain their original form and functions. However, new applications created after December 15, 2020, will be able to create dynamic partitioning open channels only.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-create-a-channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$oc_create_channel_data = new \OpenAPI\Client\Model\OcCreateChannelData(); // \OpenAPI\Client\Model\OcCreateChannelData

try {
    $result = $apiInstance->ocCreateChannel($api_token, $oc_create_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocCreateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **oc_create_channel_data** | [**\OpenAPI\Client\Model\OcCreateChannelData**](../Model/OcCreateChannelData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocDeleteChannelByUrl()`

```php
ocDeleteChannelByUrl($channel_url, $api_token)
```

Delete a channel

## Delete a channel  Deletes an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-delete-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->ocDeleteChannelByUrl($channel_url, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocDeleteChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocFreezeChannel()`

```php
ocFreezeChannel($channel_url, $api_token, $oc_freeze_channel_data): \OpenAPI\Client\Model\SendBirdOpenChannel
```

Freeze a channel

## Freeze a channel  Freezes or unfreezes an open channel.  > __Note__: Only users designated as channel operators are allowed to talk when a channel is frozen.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-freeze-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_freeze_channel_data = new \OpenAPI\Client\Model\OcFreezeChannelData(); // \OpenAPI\Client\Model\OcFreezeChannelData

try {
    $result = $apiInstance->ocFreezeChannel($channel_url, $api_token, $oc_freeze_channel_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocFreezeChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_freeze_channel_data** | [**\OpenAPI\Client\Model\OcFreezeChannelData**](../Model/OcFreezeChannelData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

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
ocListBannedUsers($channel_url, $api_token, $token, $limit): \OpenAPI\Client\Model\InlineResponse20034
```

List banned users

## List banned users  Retrieves a list of banned users from a specific open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-banned-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel where to retrieve a list of banned users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListBannedUsers($channel_url, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListBannedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListChannels()`

```php
ocListChannels($api_token, $token, $limit, $custom_types, $name_contains, $url_contains, $show_frozen, $show_metadata, $custom_type): \OpenAPI\Client\Model\InlineResponse20031
```

List channels

## List channels  Retrieves a list of open channels. You can query the list using various parameters.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-channels ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int
$custom_types = 'custom_types_example'; // string
$name_contains = 'name_contains_example'; // string
$url_contains = 'url_contains_example'; // string
$show_frozen = True; // bool
$show_metadata = True; // bool
$custom_type = 'custom_type_example'; // string

try {
    $result = $apiInstance->ocListChannels($api_token, $token, $limit, $custom_types, $name_contains, $url_contains, $show_frozen, $show_metadata, $custom_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **custom_types** | **string**|  | [optional]
 **name_contains** | **string**|  | [optional]
 **url_contains** | **string**|  | [optional]
 **show_frozen** | **bool**|  | [optional]
 **show_metadata** | **bool**|  | [optional]
 **custom_type** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

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
ocListMutedUsers($channel_url, $api_token, $token, $limit): \OpenAPI\Client\Model\InlineResponse20032
```

List muted users

## List muted users  Retrieves a list of muted users in the channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-muted-users ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of muted users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListMutedUsers($channel_url, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListMutedUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListOperators()`

```php
ocListOperators($channel_url, $api_token, $token, $limit): \OpenAPI\Client\Model\InlineResponse20035
```

List operators

## List operators  Retrieves a list of operators of an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-operators ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of operators.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListOperators($channel_url, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocListParticipants()`

```php
ocListParticipants($channel_url, $api_token, $token, $limit): \OpenAPI\Client\Model\InlineResponse20033
```

List participants

## List participants  Retrieves a list of the participants of an open channel. A participant refers to a user who has entered the open channel and is currently online.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-list-participants ----------------------------   `channel_url`      Type: string      Description: Specifies the URL of the channel to retrieve a list of participants in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->ocListParticipants($channel_url, $api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocListParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

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
ocMuteUser($channel_url, $api_token, $oc_mute_user_data): \OpenAPI\Client\Model\SendBirdOpenChannel
```

Mute a user

## Mute a user  Mutes a user in the channel. A muted user remains in the channel and is allowed to view the messages, but can't send any messages until unmuted.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-mute-a-user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_mute_user_data = new \OpenAPI\Client\Model\OcMuteUserData(); // \OpenAPI\Client\Model\OcMuteUserData

try {
    $result = $apiInstance->ocMuteUser($channel_url, $api_token, $oc_mute_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocMuteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_mute_user_data** | [**\OpenAPI\Client\Model\OcMuteUserData**](../Model/OcMuteUserData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocRegisterOperators()`

```php
ocRegisterOperators($channel_url, $api_token, $oc_register_operators_data)
```

Register operators

## Register operators  Registers one or more operators to an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-register-operators ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_register_operators_data = new \OpenAPI\Client\Model\OcRegisterOperatorsData(); // \OpenAPI\Client\Model\OcRegisterOperatorsData

try {
    $apiInstance->ocRegisterOperators($channel_url, $api_token, $oc_register_operators_data);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocRegisterOperators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_register_operators_data** | [**\OpenAPI\Client\Model\OcRegisterOperatorsData**](../Model/OcRegisterOperatorsData.md)|  | [optional]

### Return type

void (empty response body)

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
ocUnbanUserById($channel_url, $banned_user_id, $api_token)
```

Unban a user

## Unban a user  Unbans a user from an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-unban-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->ocUnbanUserById($channel_url, $banned_user_id, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocUnbanUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

void (empty response body)

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
ocUnmuteUserById($channel_url, $muted_user_id, $api_token)
```

Unmute a user

## Unmute a user  Unmutes a user from an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-unmute-a-user ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->ocUnmuteUserById($channel_url, $muted_user_id, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocUnmuteUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

void (empty response body)

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
ocUpdateBanById($channel_url, $banned_user_id, $api_token, $oc_update_ban_by_id_data): \OpenAPI\Client\Model\SendBirdUser
```

Update a ban

## Update a ban  Updates details of a ban imposed on a user. You can change the length of a ban with this action, and also provide an updated description.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-update-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_update_ban_by_id_data = new \OpenAPI\Client\Model\OcUpdateBanByIdData(); // \OpenAPI\Client\Model\OcUpdateBanByIdData

try {
    $result = $apiInstance->ocUpdateBanById($channel_url, $banned_user_id, $api_token, $oc_update_ban_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocUpdateBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_update_ban_by_id_data** | [**\OpenAPI\Client\Model\OcUpdateBanByIdData**](../Model/OcUpdateBanByIdData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocUpdateChannelByUrl()`

```php
ocUpdateChannelByUrl($channel_url, $api_token, $oc_update_channel_by_url_data): \OpenAPI\Client\Model\SendBirdOpenChannel
```

Update a channel

## Update a channel  Updates information on an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-update-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$oc_update_channel_by_url_data = new \OpenAPI\Client\Model\OcUpdateChannelByUrlData(); // \OpenAPI\Client\Model\OcUpdateChannelByUrlData

try {
    $result = $apiInstance->ocUpdateChannelByUrl($channel_url, $api_token, $oc_update_channel_by_url_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocUpdateChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **oc_update_channel_by_url_data** | [**\OpenAPI\Client\Model\OcUpdateChannelByUrlData**](../Model/OcUpdateChannelByUrlData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

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
ocViewBanById($channel_url, $banned_user_id, $api_token): \OpenAPI\Client\Model\SendBirdUser
```

View a ban

## View a ban  Retrieves details of a ban imposed on a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-ban ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$banned_user_id = 'banned_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->ocViewBanById($channel_url, $banned_user_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocViewBanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **banned_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdUser**](../Model/SendBirdUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ocViewChannelByUrl()`

```php
ocViewChannelByUrl($channel_url, $api_token): \OpenAPI\Client\Model\SendBirdOpenChannel
```

View a channel

## View a channel  Retrieves information on a specific open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-channel ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->ocViewChannelByUrl($channel_url, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocViewChannelByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SendBirdOpenChannel**](../Model/SendBirdOpenChannel.md)

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
ocViewMuteById($channel_url, $muted_user_id, $api_token): \OpenAPI\Client\Model\InlineResponse20036
```

View a mute

## View a mute  Checks if a user is muted in an open channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/open-channel#2-view-a-mute ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OpenChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_url = 'channel_url_example'; // string
$muted_user_id = 'muted_user_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->ocViewMuteById($channel_url, $muted_user_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenChannelApi->ocViewMuteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_url** | **string**|  |
 **muted_user_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
