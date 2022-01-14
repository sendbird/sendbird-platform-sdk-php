# OpenAPI\Client\UserChannelMetadataApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannelMetacounter()**](UserChannelMetadataApi.md#createChannelMetacounter) | **POST** /v3/{channel_type}/{channel_url}/metacounter | Create a channel metacounter
[**createChannelMetadata()**](UserChannelMetadataApi.md#createChannelMetadata) | **POST** /v3/{channel_type}/{channel_url}/metadata | Create a channel metadata
[**createUserMetadata()**](UserChannelMetadataApi.md#createUserMetadata) | **POST** /v3/users/{user_id}/metadata | Create a user metadata
[**deleteChannelMetacounter()**](UserChannelMetadataApi.md#deleteChannelMetacounter) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter | Delete a channel metacounter - When deleting all items of a channel metacounter
[**deleteChannelMetacounterByKey()**](UserChannelMetadataApi.md#deleteChannelMetacounterByKey) | **DELETE** /v3/{channel_type}/{channel_url}/metacounter/{key} | Delete a channel metacounter - When deleting a specific item of a channel metacounter by its key
[**deleteChannelMetadata()**](UserChannelMetadataApi.md#deleteChannelMetadata) | **DELETE** /v3/{channel_type}/{channel_url}/metadata | Delete a channel metadata - When deleting all items of a channel metadata
[**deleteChannelMetadataByKey()**](UserChannelMetadataApi.md#deleteChannelMetadataByKey) | **DELETE** /v3/{channel_type}/{channel_url}/metadata/{key} | Delete a channel metadata - When deleting a specific item of a channel metadata by its key
[**deleteUserMetadata()**](UserChannelMetadataApi.md#deleteUserMetadata) | **DELETE** /v3/users/{user_id}/metadata | Delete a user metadata - When deleting all items of a user metadata
[**deleteUserMetadataByKey()**](UserChannelMetadataApi.md#deleteUserMetadataByKey) | **DELETE** /v3/users/{user_id}/metadata/{key} | Delete a user metadata - When deleting a specific item of a user metadata by its key
[**updateChannelMetacounter()**](UserChannelMetadataApi.md#updateChannelMetacounter) | **PUT** /v3/{channel_type}/{channel_url}/metacounter | Update a channel metacounter - When updating existing items of a channel metacounter by their keys or adding new items to the metacounter
[**updateChannelMetacounterByKey()**](UserChannelMetadataApi.md#updateChannelMetacounterByKey) | **PUT** /v3/{channel_type}/{channel_url}/metacounter/{key} | Update a channel metacounter - When updating a specific item of a channel metacounter by its key
[**updateChannelMetadata()**](UserChannelMetadataApi.md#updateChannelMetadata) | **PUT** /v3/{channel_type}/{channel_url}/metadata | Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata
[**updateChannelMetadataByKey()**](UserChannelMetadataApi.md#updateChannelMetadataByKey) | **PUT** /v3/{channel_type}/{channel_url}/metadata/{key} | Update a channel metadata - When updating a specific item of a channel metadata by its key
[**updateUserMetadata()**](UserChannelMetadataApi.md#updateUserMetadata) | **PUT** /v3/users/{user_id}/metadata | Update a user metadata - When updating existing items of a user metadata by their keys or adding new items to the metadata
[**updateUserMetadataByKey()**](UserChannelMetadataApi.md#updateUserMetadataByKey) | **PUT** /v3/users/{user_id}/metadata/{key} | Update a user metadata - When updating a specific item of a user metadata by its key
[**viewChannelMetacounter()**](UserChannelMetadataApi.md#viewChannelMetacounter) | **GET** /v3/{channel_type}/{channel_url}/metacounter | View a channel metacounter - When retrieving all items of a channel metacounter
[**viewChannelMetacounterByKey()**](UserChannelMetadataApi.md#viewChannelMetacounterByKey) | **GET** /v3/{channel_type}/{channel_url}/metacounter/{key} | View a channel metacounter - When retrieving a specific item of a channel metacounter by its key
[**viewChannelMetadata()**](UserChannelMetadataApi.md#viewChannelMetadata) | **GET** /v3/{channel_type}/{channel_url}/metadata | View a channel metadata - When retrieving all items of a channel metadata
[**viewChannelMetadataByKey()**](UserChannelMetadataApi.md#viewChannelMetadataByKey) | **GET** /v3/{channel_type}/{channel_url}/metadata/{key} | View a channel metadata - When retrieving a specific item of a channel metadata by its key
[**viewUserMetadata()**](UserChannelMetadataApi.md#viewUserMetadata) | **GET** /v3/users/{user_id}/metadata | View a user metadata - When retrieving all items of a user metadata
[**viewUserMetadataByKey()**](UserChannelMetadataApi.md#viewUserMetadataByKey) | **GET** /v3/users/{user_id}/metadata/{key} | View a user metadata - When retrieving a specific item of a user metadata by its key


## `createChannelMetacounter()`

```php
createChannelMetacounter($channel_type, $channel_url, $api_token, $create_channel_metacounter_data): array<string,AnyOfStringNumber>
```

Create a channel metacounter

## Create a channel metacounter  Creates a channel metacounter's items to store in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-create-a-channel-metacounter ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$create_channel_metacounter_data = new \OpenAPI\Client\Model\CreateChannelMetacounterData(); // \OpenAPI\Client\Model\CreateChannelMetacounterData

try {
    $result = $apiInstance->createChannelMetacounter($channel_type, $channel_url, $api_token, $create_channel_metacounter_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->createChannelMetacounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **create_channel_metacounter_data** | [**\OpenAPI\Client\Model\CreateChannelMetacounterData**](../Model/CreateChannelMetacounterData.md)|  | [optional]

### Return type

[**array<string,AnyOfStringNumber>**](../Model/AnyOfStringNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChannelMetadata()`

```php
createChannelMetadata($channel_type, $channel_url, $api_token, $create_channel_metadata_data): \OpenAPI\Client\Model\InlineResponse20062
```

Create a channel metadata

## Create a channel metadata  Creates a channel metadata's items to store in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-create-a-channel-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$create_channel_metadata_data = new \OpenAPI\Client\Model\CreateChannelMetadataData(); // \OpenAPI\Client\Model\CreateChannelMetadataData

try {
    $result = $apiInstance->createChannelMetadata($channel_type, $channel_url, $api_token, $create_channel_metadata_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->createChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **create_channel_metadata_data** | [**\OpenAPI\Client\Model\CreateChannelMetadataData**](../Model/CreateChannelMetadataData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserMetadata()`

```php
createUserMetadata($user_id, $api_token, $create_user_metadata_data): \OpenAPI\Client\Model\InlineResponse20048UserMetadata
```

Create a user metadata

## Create a user metadata  Creates a user metadata's items to store in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-create-a-user-metadata ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$create_user_metadata_data = new \OpenAPI\Client\Model\CreateUserMetadataData(); // \OpenAPI\Client\Model\CreateUserMetadataData

try {
    $result = $apiInstance->createUserMetadata($user_id, $api_token, $create_user_metadata_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->createUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **create_user_metadata_data** | [**\OpenAPI\Client\Model\CreateUserMetadataData**](../Model/CreateUserMetadataData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20048UserMetadata**](../Model/InlineResponse20048UserMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannelMetacounter()`

```php
deleteChannelMetacounter($channel_type, $channel_url, $api_token)
```

Delete a channel metacounter - When deleting all items of a channel metacounter

## Delete a channel metacounter  Deletes a channel metacounter's item that is stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which has the metacounter to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->deleteChannelMetacounter($channel_type, $channel_url, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteChannelMetacounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
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

## `deleteChannelMetacounterByKey()`

```php
deleteChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token)
```

Delete a channel metacounter - When deleting a specific item of a channel metacounter by its key

## Delete a channel metacounter  Deletes a channel metacounter's item that is stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which has the metacounter to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->deleteChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteChannelMetacounterByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
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

## `deleteChannelMetadata()`

```php
deleteChannelMetadata($channel_type, $channel_url, $api_token, $key)
```

Delete a channel metadata - When deleting all items of a channel metadata

## Delete a channel metadata  Deletes a channel metadata's one or all items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which has the metadata to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$key = 'key_example'; // string

try {
    $apiInstance->deleteChannelMetadata($channel_type, $channel_url, $api_token, $key);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **key** | **string**|  | [optional]

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

## `deleteChannelMetadataByKey()`

```php
deleteChannelMetadataByKey($channel_type, $channel_url, $key, $api_token)
```

Delete a channel metadata - When deleting a specific item of a channel metadata by its key

## Delete a channel metadata  Deletes a channel metadata's one or all items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the channel which has the metadata to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->deleteChannelMetadataByKey($channel_type, $channel_url, $key, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteChannelMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
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

## `deleteUserMetadata()`

```php
deleteUserMetadata($user_id, $api_token, $key)
```

Delete a user metadata - When deleting all items of a user metadata

## Delete a user metadata  Deletes a user metadata's one or all items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user who has the metadata to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$key = 'key_example'; // string

try {
    $apiInstance->deleteUserMetadata($user_id, $api_token, $key);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **key** | **string**|  | [optional]

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

## `deleteUserMetadataByKey()`

```php
deleteUserMetadataByKey($user_id, $key, $api_token)
```

Delete a user metadata - When deleting a specific item of a user metadata by its key

## Delete a user metadata  Deletes a user metadata's one or all items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-delete-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user who has the metadata to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->deleteUserMetadataByKey($user_id, $key, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->deleteUserMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **key** | **string**|  |
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

## `updateChannelMetacounter()`

```php
updateChannelMetacounter($channel_type, $channel_url, $api_token, $update_channel_metacounter_data): array<string,AnyOfStringNumber>
```

Update a channel metacounter - When updating existing items of a channel metacounter by their keys or adding new items to the metacounter

## Update a channel metacounter  Updates existing items of a channel metacounter by their keys, or adds new items to the metacounter.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_channel_metacounter_data = new \OpenAPI\Client\Model\UpdateChannelMetacounterData(); // \OpenAPI\Client\Model\UpdateChannelMetacounterData

try {
    $result = $apiInstance->updateChannelMetacounter($channel_type, $channel_url, $api_token, $update_channel_metacounter_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateChannelMetacounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_channel_metacounter_data** | [**\OpenAPI\Client\Model\UpdateChannelMetacounterData**](../Model/UpdateChannelMetacounterData.md)|  | [optional]

### Return type

[**array<string,AnyOfStringNumber>**](../Model/AnyOfStringNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelMetacounterByKey()`

```php
updateChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token, $body): array<string,string>
```

Update a channel metacounter - When updating a specific item of a channel metacounter by its key

## Update a channel metacounter  Updates existing items of a channel metacounter by their keys, or adds new items to the metacounter.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateChannelMetacounterByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]
 **body** | **object**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelMetadata()`

```php
updateChannelMetadata($channel_type, $channel_url, $api_token, $update_channel_metadata_data): array<string,string>
```

Update a channel metadata - When updating existing items of a channel metadata by their keys or adding new items to the metadata

## Update a channel metadata  Updates existing items of a channel metadata by their keys, or adds new items to the metadata.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_channel_metadata_data = new \OpenAPI\Client\Model\UpdateChannelMetadataData(); // \OpenAPI\Client\Model\UpdateChannelMetadataData

try {
    $result = $apiInstance->updateChannelMetadata($channel_type, $channel_url, $api_token, $update_channel_metadata_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_channel_metadata_data** | [**\OpenAPI\Client\Model\UpdateChannelMetadataData**](../Model/UpdateChannelMetadataData.md)|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelMetadataByKey()`

```php
updateChannelMetadataByKey($channel_type, $channel_url, $key, $api_token, $body): array<string,string>
```

Update a channel metadata - When updating a specific item of a channel metadata by its key

## Update a channel metadata  Updates existing items of a channel metadata by their keys, or adds new items to the metadata.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateChannelMetadataByKey($channel_type, $channel_url, $key, $api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateChannelMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]
 **body** | **object**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserMetadata()`

```php
updateUserMetadata($user_id, $api_token, $update_user_metadata_data): \OpenAPI\Client\Model\InlineResponse20061
```

Update a user metadata - When updating existing items of a user metadata by their keys or adding new items to the metadata

## Update a user metadata  Updates existing items of a user metadata by their keys, or adds new items to the metadata.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to update the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_user_metadata_data = new \OpenAPI\Client\Model\UpdateUserMetadataData(); // \OpenAPI\Client\Model\UpdateUserMetadataData

try {
    $result = $apiInstance->updateUserMetadata($user_id, $api_token, $update_user_metadata_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_user_metadata_data** | [**\OpenAPI\Client\Model\UpdateUserMetadataData**](../Model/UpdateUserMetadataData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserMetadataByKey()`

```php
updateUserMetadataByKey($user_id, $key, $api_token, $body): array<string,string>
```

Update a user metadata - When updating a specific item of a user metadata by its key

## Update a user metadata  Updates existing items of a user metadata by their keys, or adds new items to the metadata.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-update-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to update the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateUserMetadataByKey($user_id, $key, $api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->updateUserMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]
 **body** | **object**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetacounter()`

```php
viewChannelMetacounter($channel_type, $channel_url, $api_token, $key, $keys): array<string,AnyOfStringNumber>
```

View a channel metacounter - When retrieving all items of a channel metacounter

## View a channel metacounter  Retrieves channel metacounter's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewChannelMetacounter($channel_type, $channel_url, $api_token, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewChannelMetacounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**array<string,AnyOfStringNumber>**](../Model/AnyOfStringNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetacounterByKey()`

```php
viewChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token): array<string,AnyOfStringNumber>
```

View a channel metacounter - When retrieving a specific item of a channel metacounter by its key

## View a channel metacounter  Retrieves channel metacounter's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metacounter ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewChannelMetacounterByKey($channel_type, $channel_url, $key, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewChannelMetacounterByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**array<string,AnyOfStringNumber>**](../Model/AnyOfStringNumber.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetadata()`

```php
viewChannelMetadata($channel_type, $channel_url, $api_token, $key, $keys): array<string,string>
```

View a channel metadata - When retrieving all items of a channel metadata

## View a channel metadata  Retrieves a channel metadata's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$api_token = {{API_TOKEN}}; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewChannelMetadata($channel_type, $channel_url, $api_token, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewChannelMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **api_token** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewChannelMetadataByKey()`

```php
viewChannelMetadataByKey($channel_type, $channel_url, $key, $api_token): array<string,string>
```

View a channel metadata - When retrieving a specific item of a channel metadata by its key

## View a channel metadata  Retrieves a channel metadata's one or more items that are stored in a channel.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-channel-metadata ----------------------------   `channel_type`      Type: string      Description: Specifies the type of the channel. Either open_channels or group_channels.  `channel_url`      Type: string      Description: Specifies the URL of the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channel_type = 'channel_type_example'; // string
$channel_url = 'channel_url_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewChannelMetadataByKey($channel_type, $channel_url, $key, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewChannelMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_type** | **string**|  |
 **channel_url** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewUserMetadata()`

```php
viewUserMetadata($user_id, $api_token, $key, $keys): \OpenAPI\Client\Model\InlineResponse20048UserMetadata
```

View a user metadata - When retrieving all items of a user metadata

## View a user metadata  Retrieves a user metadata's one or more items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to retrieve the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$key = 'key_example'; // string
$keys = array('keys_example'); // string[]

try {
    $result = $apiInstance->viewUserMetadata($user_id, $api_token, $key, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewUserMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **key** | **string**|  | [optional]
 **keys** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20048UserMetadata**](../Model/InlineResponse20048UserMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewUserMetadataByKey()`

```php
viewUserMetadataByKey($user_id, $key, $api_token): array<string,string>
```

View a user metadata - When retrieving a specific item of a user metadata by its key

## View a user metadata  Retrieves a user metadata's one or more items that are stored in a user.  https://sendbird.com/docs/chat/v3/platform-api/guides/user-and-channel-metadata#2-view-a-user-metadata ----------------------------   `user_id`      Type: string      Description: Specifies the ID of the user to retrieve the metadata in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserChannelMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$key = 'key_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewUserMetadataByKey($user_id, $key, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserChannelMetadataApi->viewUserMetadataByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **key** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
