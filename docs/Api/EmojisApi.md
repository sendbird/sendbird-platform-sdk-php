# Sendbird\EmojisApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEmojiCategories()**](EmojisApi.md#addEmojiCategories) | **POST** /v3/emoji_categories | Add emoji categories
[**addEmojis()**](EmojisApi.md#addEmojis) | **POST** /v3/emojis | Add emojis
[**deleteEmojiByKey()**](EmojisApi.md#deleteEmojiByKey) | **DELETE** /v3/emojis/{emoji_key} | Delete an emoji
[**deleteEmojiCategoryById()**](EmojisApi.md#deleteEmojiCategoryById) | **DELETE** /v3/emoji_categories/{emoji_category_id} | Delete an emoji category
[**enableReactions()**](EmojisApi.md#enableReactions) | **PUT** /v3/applications/settings/reactions | Enable reactions
[**getEmojiByKey()**](EmojisApi.md#getEmojiByKey) | **GET** /v3/emojis/{emoji_key} | Get an emoji
[**getEmojiCategoryById()**](EmojisApi.md#getEmojiCategoryById) | **GET** /v3/emoji_categories/{emoji_category_id} | Get an emoji category
[**listAllEmojisAndEmojiCategories()**](EmojisApi.md#listAllEmojisAndEmojiCategories) | **GET** /v3/emoji_categories | List all emojis and emoji categories
[**listEmojis()**](EmojisApi.md#listEmojis) | **GET** /v3/emojis | List emojis
[**updateEmojiCategoryUrlById()**](EmojisApi.md#updateEmojiCategoryUrlById) | **PUT** /v3/emoji_categories/{emoji_category_id} | Update an emoji category URL
[**updateEmojiUrlByKey()**](EmojisApi.md#updateEmojiUrlByKey) | **PUT** /v3/emojis/{emoji_key} | Update an emoji URL
[**useDefaultEmojis()**](EmojisApi.md#useDefaultEmojis) | **PUT** /v3/applications/settings/use_default_emoji | Use default emojis


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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->addEmojiCategories: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->addEmojis: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$emoji_key = 'emoji_key_example'; // string

try {
    $apiInstance->deleteEmojiByKey($api_token, $emoji_key);
} catch (Exception $e) {
    echo 'Exception when calling EmojisApi->deleteEmojiByKey: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->deleteEmojiCategoryById: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->enableReactions: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->getEmojiByKey: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->getEmojiCategoryById: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listAllEmojisAndEmojiCategories($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmojisApi->listAllEmojisAndEmojiCategories: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listEmojis($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmojisApi->listEmojis: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->updateEmojiCategoryUrlById: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->updateEmojiUrlByKey: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Sendbird\Api\EmojisApi(
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
    echo 'Exception when calling EmojisApi->useDefaultEmojis: ', $e->getMessage(), PHP_EOL;
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
