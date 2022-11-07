# Sendbird\ApplicationApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApnsPushConfiguration()**](ApplicationApi.md#addApnsPushConfiguration) | **POST** /v3/applications/push/apns | Add an APNs push configuration
[**addFcmPushConfiguration()**](ApplicationApi.md#addFcmPushConfiguration) | **POST** /v3/applications/push/fcm | Add a FCM push configuration
[**addHmsPushConfiguration()**](ApplicationApi.md#addHmsPushConfiguration) | **POST** /v3/applications/push/hms | Add an HMS push configuration
[**addIpToWhitelist()**](ApplicationApi.md#addIpToWhitelist) | **PUT** /v3/applications/settings/ip_whitelist | Add an IP to a whitelist
[**banUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#banUsersInChannelsWithCustomChannelType) | **POST** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | Ban users in channels with a custom channel type
[**configureAutoEventMessages()**](ApplicationApi.md#configureAutoEventMessages) | **PUT** /v3/applications/settings/auto_event_message | Configure auto event message settings
[**deleteAllowedIpsFromWhitelist()**](ApplicationApi.md#deleteAllowedIpsFromWhitelist) | **DELETE** /v3/applications/settings/ip_whitelist | Delete allowed IPs from a whitelist
[**deleteApnsCertificateById()**](ApplicationApi.md#deleteApnsCertificateById) | **DELETE** /v3/applications/push/apns/cert/{provider_id} | Delete an APNs certificate
[**generateSecondaryApiToken()**](ApplicationApi.md#generateSecondaryApiToken) | **POST** /v3/applications/api_tokens | Generate a secondary API token
[**listAutoEventMessages()**](ApplicationApi.md#listAutoEventMessages) | **GET** /v3/applications/settings/auto_event_message | List auto event messages
[**listBannedUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#listBannedUsersInChannelsWithCustomChannelType) | **GET** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | List banned users in channels with a custom channel type
[**listMutedUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#listMutedUsersInChannelsWithCustomChannelType) | **GET** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | List muted users in channels with a custom channel type
[**listPushConfigurations()**](ApplicationApi.md#listPushConfigurations) | **GET** /v3/applications/push/{push_type} | List push configurations
[**listPushNotificationContentTemplates()**](ApplicationApi.md#listPushNotificationContentTemplates) | **GET** /v3/applications/push/message_templates | List push notification content templates
[**listSecondaryApiTokens()**](ApplicationApi.md#listSecondaryApiTokens) | **GET** /v3/applications/api_tokens | List secondary API tokens
[**muteUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#muteUsersInChannelsWithCustomChannelType) | **POST** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | Mute users in channels with a custom channel type
[**removePushConfigurationById()**](ApplicationApi.md#removePushConfigurationById) | **DELETE** /v3/applications/push/{push_type}/{provider_id} | Remove a push configuration
[**retrieveIpWhitelist()**](ApplicationApi.md#retrieveIpWhitelist) | **GET** /v3/applications/settings/ip_whitelist | Retrieve an IP whitelist
[**revokeSecondaryApiTokenByToken()**](ApplicationApi.md#revokeSecondaryApiTokenByToken) | **DELETE** /v3/applications/api_tokens/{api_token} | Revoke a secondary API token
[**setDomainFilter()**](ApplicationApi.md#setDomainFilter) | **PUT** /v3/applications/settings_global/{custom_type} | Message moderation
[**unbanUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#unbanUsersInChannelsWithCustomChannelType) | **DELETE** /v3/applications/settings_by_channel_custom_type/{custom_type}/ban | Unban users in channels with a custom channel type
[**unmuteUsersInChannelsWithCustomChannelType()**](ApplicationApi.md#unmuteUsersInChannelsWithCustomChannelType) | **DELETE** /v3/applications/settings_by_channel_custom_type/{custom_type}/mute | Unmute users in channels with a custom channel type
[**updateApnsPushConfigurationById()**](ApplicationApi.md#updateApnsPushConfigurationById) | **PUT** /v3/applications/push/apns/{provider_id} | Update an APNs push configuration
[**updateDefaultChannelInvitationPreference()**](ApplicationApi.md#updateDefaultChannelInvitationPreference) | **PUT** /v3/applications/default_channel_invitation_preference | Update default channel invitation preference
[**updateFcmPushConfigurationById()**](ApplicationApi.md#updateFcmPushConfigurationById) | **PUT** /v3/applications/push/fcm/{provider_id} | Update a FCM push configuration
[**updateHmsPushConfigurationById()**](ApplicationApi.md#updateHmsPushConfigurationById) | **PUT** /v3/applications/push/hms/{provider_id} | Update an HMS push configuration
[**updatePushNotificationContentTemplate()**](ApplicationApi.md#updatePushNotificationContentTemplate) | **PUT** /v3/applications/push/message_templates/{template_name} | Update a push notification content template
[**viewDefaultChannelInvitationPreference()**](ApplicationApi.md#viewDefaultChannelInvitationPreference) | **GET** /v3/applications/default_channel_invitation_preference | View default channel invitation preference
[**viewPushConfigurationById()**](ApplicationApi.md#viewPushConfigurationById) | **GET** /v3/applications/push/{push_type}/{provider_id} | View a push configuration
[**viewPushNotificationContentTemplate()**](ApplicationApi.md#viewPushNotificationContentTemplate) | **GET** /v3/applications/push/message_templates/{template_name} | View a push notification content template
[**viewSecondaryApiTokenByToken()**](ApplicationApi.md#viewSecondaryApiTokenByToken) | **GET** /v3/applications/api_tokens/{api_token} | View a secondary API token


## `addApnsPushConfiguration()`

```php
addApnsPushConfiguration($api_token, $add_apns_push_configuration_data): \Sendbird\Model\AddApnsPushConfigurationResponse
```

Add an APNs push configuration

## Add an APNs push configuration  Registers an APNs (Apple Push Notification service) push configuration for your client app. To send push notifications to iOS devices, your should first register the APNs push configuration. You can also register the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  > __Note__: To upload a [.p12](https://sendbird.com/docs/chat/v3/ios/guides/push-notifications#2-step-3-export-a-p12-file-and-upload-to-sendbird-dashboard) certificate file to Sendbird server, you should send a [Multipart request](https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api#2-headers-3-multipart-requests).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-add-an-apns-push-configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_apns_push_configuration_data'] = new \Sendbird\Model\AddApnsPushConfigurationData(); // \Sendbird\Model\AddApnsPushConfigurationData

try {
    $result = $apiInstance->addApnsPushConfiguration($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addApnsPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **add_apns_push_configuration_data** | [**\Sendbird\Model\AddApnsPushConfigurationData**](../Model/AddApnsPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddApnsPushConfigurationResponse**](../Model/AddApnsPushConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addFcmPushConfiguration()`

```php
addFcmPushConfiguration($api_token, $add_fcm_push_configuration_data): \Sendbird\Model\AddFcmPushConfigurationResponse
```

Add a FCM push configuration

## Add a FCM push configuration  Registers a FCM (Firebase Cloud Messaging) push configuration for your client app. To send push notifications to Android devices, you should first register the FCM push configuration. You can also register the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-add-a-fcm-push-configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_fcm_push_configuration_data'] = new \Sendbird\Model\AddFcmPushConfigurationData(); // \Sendbird\Model\AddFcmPushConfigurationData

try {
    $result = $apiInstance->addFcmPushConfiguration($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addFcmPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **add_fcm_push_configuration_data** | [**\Sendbird\Model\AddFcmPushConfigurationData**](../Model/AddFcmPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddFcmPushConfigurationResponse**](../Model/AddFcmPushConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addHmsPushConfiguration()`

```php
addHmsPushConfiguration($api_token, $add_hms_push_configuration_data): \Sendbird\Model\AddHmsPushConfigurationResponse
```

Add an HMS push configuration

## Add an HMS push configuration  Registers an HMS (Huawei Mobile Services) push configuration for your client app. To send push notifications to Android devices for HMS, you should first register the HMS push configuration. You can also register the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-add-an-hms-push-configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_hms_push_configuration_data'] = new \Sendbird\Model\AddHmsPushConfigurationData(); // \Sendbird\Model\AddHmsPushConfigurationData

try {
    $result = $apiInstance->addHmsPushConfiguration($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addHmsPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **add_hms_push_configuration_data** | [**\Sendbird\Model\AddHmsPushConfigurationData**](../Model/AddHmsPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddHmsPushConfigurationResponse**](../Model/AddHmsPushConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addIpToWhitelist()`

```php
addIpToWhitelist($api_token, $add_ip_to_whitelist_data): \Sendbird\Model\AddIpToWhitelistResponse
```

Add an IP to a whitelist

## Add an IP to a whitelist  Adds IP addresses and ranges to your Sendbird application settings. Both currently added and any previously added IPs are granted API access. You can configure the IP whitelist under Settings > Security > Allowed IPs in the [Sendbird Dashboard](https://dashboard.sendbird.com).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-add-an-ip-to-a-whitelist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['add_ip_to_whitelist_data'] = new \Sendbird\Model\AddIpToWhitelistData(); // \Sendbird\Model\AddIpToWhitelistData

try {
    $result = $apiInstance->addIpToWhitelist($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addIpToWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **add_ip_to_whitelist_data** | [**\Sendbird\Model\AddIpToWhitelistData**](../Model/AddIpToWhitelistData.md)|  | [optional]

### Return type

[**\Sendbird\Model\AddIpToWhitelistResponse**](../Model/AddIpToWhitelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `banUsersInChannelsWithCustomChannelType()`

```php
banUsersInChannelsWithCustomChannelType($api_token, $custom_type, $ban_users_in_channels_with_custom_channel_type_data): object
```

Ban users in channels with a custom channel type

## Ban specified users in channels with a custom channel type at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['ban_users_in_channels_with_custom_channel_type_data'] = new \Sendbird\Model\BanUsersInChannelsWithCustomChannelTypeData(); // \Sendbird\Model\BanUsersInChannelsWithCustomChannelTypeData

try {
    $result = $apiInstance->banUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->banUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **ban_users_in_channels_with_custom_channel_type_data** | [**\Sendbird\Model\BanUsersInChannelsWithCustomChannelTypeData**](../Model/BanUsersInChannelsWithCustomChannelTypeData.md)|  | [optional]

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

## `configureAutoEventMessages()`

```php
configureAutoEventMessages($api_token, $configure_auto_event_data): \Sendbird\Model\SendBirdAutoEventMessageSettings
```

Configure auto event message settings

## Configure auto event message settings  Determines whether to automatically send event messages to group channels when events take place in an application. You can choose which auto event message to receive on the Sendbird Dashboard  https://sendbird.com/docs/chat/v3/platform-api/application/managing-auto-event-messages/configure-auto-event-message-settings ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['configure_auto_event_data'] = new \Sendbird\Model\ConfigureAutoEventData(); // \Sendbird\Model\ConfigureAutoEventData

try {
    $result = $apiInstance->configureAutoEventMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->configureAutoEventMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **configure_auto_event_data** | [**\Sendbird\Model\ConfigureAutoEventData**](../Model/ConfigureAutoEventData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdAutoEventMessageSettings**](../Model/SendBirdAutoEventMessageSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllowedIpsFromWhitelist()`

```php
deleteAllowedIpsFromWhitelist($api_token, $ip_whitelist_addresses): \Sendbird\Model\DeleteAllowedIpsFromWhitelistResponse
```

Delete allowed IPs from a whitelist

## Delete allowed IPs from a whitelist  Deletes allowed IPs from the whitelist by specifying their IP addresses or ranges. You can configure the IP whitelist under Settings > Security > Allowed IPs in the [Sendbird Dashboard](https://dashboard.sendbird.com).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-delete-allowed-ips-from-a-whitelist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['ip_whitelist_addresses'] = array('ip_whitelist_addresses_example'); // string[]

try {
    $result = $apiInstance->deleteAllowedIpsFromWhitelist($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->deleteAllowedIpsFromWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **ip_whitelist_addresses** | [**string[]**](../Model/string.md)|  |

### Return type

[**\Sendbird\Model\DeleteAllowedIpsFromWhitelistResponse**](../Model/DeleteAllowedIpsFromWhitelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApnsCertificateById()`

```php
deleteApnsCertificateById($api_token, $provider_id): \Sendbird\Model\DeleteApnsCertificateByIdResponse
```

Delete an APNs certificate

## Delete an APNs certificate  Deletes a specific APNs certificate.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-delete-an-apns-certificate ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['provider_id'] = 'provider_id_example'; // string

try {
    $result = $apiInstance->deleteApnsCertificateById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->deleteApnsCertificateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **provider_id** | **string**|  |

### Return type

[**\Sendbird\Model\DeleteApnsCertificateByIdResponse**](../Model/DeleteApnsCertificateByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSecondaryApiToken()`

```php
generateSecondaryApiToken($api_token, $generate_secondary_api_token_data): \Sendbird\Model\GenerateSecondaryApiTokenResponse
```

Generate a secondary API token

## Generate a secondary API token  Generates a new secondary API token.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-generate-a-secondary-api-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['generate_secondary_api_token_data'] = new \Sendbird\Model\GenerateSecondaryApiTokenData(); // \Sendbird\Model\GenerateSecondaryApiTokenData

try {
    $result = $apiInstance->generateSecondaryApiToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->generateSecondaryApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **generate_secondary_api_token_data** | [**\Sendbird\Model\GenerateSecondaryApiTokenData**](../Model/GenerateSecondaryApiTokenData.md)|  | [optional]

### Return type

[**\Sendbird\Model\GenerateSecondaryApiTokenResponse**](../Model/GenerateSecondaryApiTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutoEventMessages()`

```php
listAutoEventMessages($api_token): \Sendbird\Model\SendBirdAutoEventMessageSettings
```

List auto event messages

## List auto event messages  Retrieves a list of auto event messages that are sent in a specified application and indicates which ones are in use. Auto event messages are Admin messages that are automatically generated when a specific event occurs.  https://sendbird.com/docs/chat/v3/platform-api/application/managing-auto-event-messages/list-auto-event-messages ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listAutoEventMessages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listAutoEventMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\SendBirdAutoEventMessageSettings**](../Model/SendBirdAutoEventMessageSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBannedUsersInChannelsWithCustomChannelType()`

```php
listBannedUsersInChannelsWithCustomChannelType($api_token, $custom_type, $token, $limit): \Sendbird\Model\CustomTypeListBannedUsersResponse
```

List banned users in channels with a custom channel type

## Retrieves a list of users banned from channels with the specified custom channel type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listBannedUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listBannedUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\CustomTypeListBannedUsersResponse**](../Model/CustomTypeListBannedUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMutedUsersInChannelsWithCustomChannelType()`

```php
listMutedUsersInChannelsWithCustomChannelType($api_token, $custom_type, $token, $limit): \Sendbird\Model\ListMutedUsersInChannelsWithCustomChannelType200Response
```

List muted users in channels with a custom channel type

## Retrieves a list of the muted users in channels with a custom channel type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listMutedUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listMutedUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListMutedUsersInChannelsWithCustomChannelType200Response**](../Model/ListMutedUsersInChannelsWithCustomChannelType200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushConfigurations()`

```php
listPushConfigurations($api_token, $push_type): \Sendbird\Model\ListPushConfigurationsResponse
```

List push configurations

## List push configurations  Retrieves a list of an application's registered push configurations.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-list-push-configurations ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['push_type'] = 'push_type_example'; // string

try {
    $result = $apiInstance->listPushConfigurations($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listPushConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **push_type** | **string**|  |

### Return type

[**\Sendbird\Model\ListPushConfigurationsResponse**](../Model/ListPushConfigurationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushNotificationContentTemplates()`

```php
listPushNotificationContentTemplates($api_token): \Sendbird\Model\ListPushNotificationContentTemplatesResponse
```

List push notification content templates

## List push notification content templates  Retrieves a list of push notification content templates of an application.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-list-push-notification-content-templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listPushNotificationContentTemplates($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listPushNotificationContentTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ListPushNotificationContentTemplatesResponse**](../Model/ListPushNotificationContentTemplatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSecondaryApiTokens()`

```php
listSecondaryApiTokens($api_token): \Sendbird\Model\ListSecondaryApiTokensResponse
```

List secondary API tokens

## List secondary API tokens  Retrieves a list of secondary API tokens.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-list-secondary-api-tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listSecondaryApiTokens($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listSecondaryApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ListSecondaryApiTokensResponse**](../Model/ListSecondaryApiTokensResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `muteUsersInChannelsWithCustomChannelType()`

```php
muteUsersInChannelsWithCustomChannelType($api_token, $custom_type, $mute_users_in_channels_with_custom_channel_type_data): object
```

Mute users in channels with a custom channel type

## Mutes specified users in channels with a custom channel type at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['mute_users_in_channels_with_custom_channel_type_data'] = new \Sendbird\Model\MuteUsersInChannelsWithCustomChannelTypeData(); // \Sendbird\Model\MuteUsersInChannelsWithCustomChannelTypeData

try {
    $result = $apiInstance->muteUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->muteUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **mute_users_in_channels_with_custom_channel_type_data** | [**\Sendbird\Model\MuteUsersInChannelsWithCustomChannelTypeData**](../Model/MuteUsersInChannelsWithCustomChannelTypeData.md)|  | [optional]

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

## `removePushConfigurationById()`

```php
removePushConfigurationById($api_token, $push_type, $provider_id): \Sendbird\Model\RemovePushConfigurationByIdResponse
```

Remove a push configuration

## Remove a push configuration  Removes a specific push configuration from an application. The type of a push configuration is either `fcm`, `huawei`, or `apns`.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-remove-a-push-configuration ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['push_type'] = 'push_type_example'; // string
$associate_array['provider_id'] = 'provider_id_example'; // string

try {
    $result = $apiInstance->removePushConfigurationById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->removePushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **push_type** | **string**|  |
 **provider_id** | **string**|  |

### Return type

[**\Sendbird\Model\RemovePushConfigurationByIdResponse**](../Model/RemovePushConfigurationByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveIpWhitelist()`

```php
retrieveIpWhitelist($api_token): \Sendbird\Model\RetrieveIpWhitelistResponse
```

Retrieve an IP whitelist

## Retrieve an IP whitelist  Retrieves a list of all the IP ranges and addresses that have access to your Sendbird application. This list is called an IP whitelist and its addresses are granted API access when the IP whitelist API enables [CIDR](https://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing) notations.  If you specify which IP addresses or ranges to include in the whitelist, any unlisted foreign IP addresses will be denied access. If you don't specify any IP address or range to include in the whitelist, all IP addresses will be granted API access. You can configure the IP whitelist under Settings > Security > Allowed IPs in the [Sendbird Dashboard](https://dashboard.sendbird.com).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-retrieve-an-ip-whitelist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->retrieveIpWhitelist($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->retrieveIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\RetrieveIpWhitelistResponse**](../Model/RetrieveIpWhitelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeSecondaryApiTokenByToken()`

```php
revokeSecondaryApiTokenByToken($api_token, $api_token2): \Sendbird\Model\RevokeSecondaryApiTokenByTokenResponse
```

Revoke a secondary API token

## Revoke a secondary API token  Revokes a secondary API token.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-revoke-a-secondary-api-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['api_token2'] = 'api_token_example'; // string

try {
    $result = $apiInstance->revokeSecondaryApiTokenByToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->revokeSecondaryApiTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **api_token2** | **string**|  |

### Return type

[**\Sendbird\Model\RevokeSecondaryApiTokenByTokenResponse**](../Model/RevokeSecondaryApiTokenByTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDomainFilter()`

```php
setDomainFilter($api_token, $custom_type, $set_domain_filter_data): \Sendbird\Model\SendBirdChannelResponse
```

Message moderation

##

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['set_domain_filter_data'] = new \Sendbird\Model\SetDomainFilterData(); // \Sendbird\Model\SetDomainFilterData

try {
    $result = $apiInstance->setDomainFilter($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->setDomainFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **set_domain_filter_data** | [**\Sendbird\Model\SetDomainFilterData**](../Model/SetDomainFilterData.md)|  | [optional]

### Return type

[**\Sendbird\Model\SendBirdChannelResponse**](../Model/SendBirdChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unbanUsersInChannelsWithCustomChannelType()`

```php
unbanUsersInChannelsWithCustomChannelType($api_token, $custom_type, $user_ids): object
```

Unban users in channels with a custom channel type

## Unban specified users in channels with a custom channel type at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['user_ids'] = array('user_ids_example'); // string[]

try {
    $result = $apiInstance->unbanUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->unbanUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **user_ids** | [**string[]**](../Model/string.md)|  |

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

## `unmuteUsersInChannelsWithCustomChannelType()`

```php
unmuteUsersInChannelsWithCustomChannelType($api_token, $custom_type, $user_ids): object
```

Unmute users in channels with a custom channel type

## Unmute specified users in channels with a custom channel type at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['custom_type'] = 'custom_type_example'; // string
$associate_array['user_ids'] = array('user_ids_example'); // string[]

try {
    $result = $apiInstance->unmuteUsersInChannelsWithCustomChannelType($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->unmuteUsersInChannelsWithCustomChannelType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **custom_type** | **string**|  |
 **user_ids** | [**string[]**](../Model/string.md)|  |

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

## `updateApnsPushConfigurationById()`

```php
updateApnsPushConfigurationById($api_token, $provider_id, $update_apns_push_configuration_by_id_data): \Sendbird\Model\UpdateApnsPushConfigurationByIdResponse
```

Update an APNs push configuration

## Update an APNs push configuration  Updates a specific APNs (Apple Push Notification service) push configuration for your client app. You can also register the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  > __Note__: If your HTTP request body contains a [.p12](https://sendbird.com/docs/chat/v3/ios/guides/push-notifications#2-step-3-export-a-p12-file-and-upload-to-sendbird-dashboard) certificate file to upload to Sendbird server, you should send a [Multipart request](https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api#2-headers-3-multipart-requests) .  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-an-apns-push-configuration ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['provider_id'] = 'provider_id_example'; // string
$associate_array['update_apns_push_configuration_by_id_data'] = new \Sendbird\Model\UpdateApnsPushConfigurationByIdData(); // \Sendbird\Model\UpdateApnsPushConfigurationByIdData

try {
    $result = $apiInstance->updateApnsPushConfigurationById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateApnsPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **provider_id** | **string**|  |
 **update_apns_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateApnsPushConfigurationByIdData**](../Model/UpdateApnsPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateApnsPushConfigurationByIdResponse**](../Model/UpdateApnsPushConfigurationByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultChannelInvitationPreference()`

```php
updateDefaultChannelInvitationPreference($api_token, $update_default_channel_invitation_preference_data): \Sendbird\Model\UpdateDefaultChannelInvitationPreferenceResponse
```

Update default channel invitation preference

## Update default channel invitation preference  Updates the default channel invitation preference of an application.  > __Note__: Using the [update channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-update-channel-invitation-preference) action, you can update the value of a specific user's channel invitation preference, which can be set individually by user.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-default-channel-invitation-preference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['update_default_channel_invitation_preference_data'] = new \Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData(); // \Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData

try {
    $result = $apiInstance->updateDefaultChannelInvitationPreference($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateDefaultChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **update_default_channel_invitation_preference_data** | [**\Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData**](../Model/UpdateDefaultChannelInvitationPreferenceData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateDefaultChannelInvitationPreferenceResponse**](../Model/UpdateDefaultChannelInvitationPreferenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFcmPushConfigurationById()`

```php
updateFcmPushConfigurationById($api_token, $provider_id, $update_fcm_push_configuration_by_id_data): \Sendbird\Model\UpdateFcmPushConfigurationByIdResponse
```

Update a FCM push configuration

## Update a FCM push configuration  Updates a specific FCM (Firebase Cloud Messaging) push configuration for your client app. You can also update the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-a-fcm-push-configuration ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['provider_id'] = 'provider_id_example'; // string
$associate_array['update_fcm_push_configuration_by_id_data'] = new \Sendbird\Model\UpdateFcmPushConfigurationByIdData(); // \Sendbird\Model\UpdateFcmPushConfigurationByIdData

try {
    $result = $apiInstance->updateFcmPushConfigurationById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateFcmPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **provider_id** | **string**|  |
 **update_fcm_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateFcmPushConfigurationByIdData**](../Model/UpdateFcmPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateFcmPushConfigurationByIdResponse**](../Model/UpdateFcmPushConfigurationByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHmsPushConfigurationById()`

```php
updateHmsPushConfigurationById($api_token, $provider_id, $update_hms_push_configuration_by_id_data): \Sendbird\Model\UpdateHmsPushConfigurationByIdResponse
```

Update an HMS push configuration

## Update an HMS push configuration  Updates a specific HMS (Huawei Mobile Services) push configuration for your client app. You can also update the configurations in your [dashboard](https://dashboard.sendbird.com) under Settings > Application > Notifications.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-an-hms-push-configuration ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['provider_id'] = 'provider_id_example'; // string
$associate_array['update_hms_push_configuration_by_id_data'] = new \Sendbird\Model\UpdateHmsPushConfigurationByIdData(); // \Sendbird\Model\UpdateHmsPushConfigurationByIdData

try {
    $result = $apiInstance->updateHmsPushConfigurationById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateHmsPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **provider_id** | **string**|  |
 **update_hms_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateHmsPushConfigurationByIdData**](../Model/UpdateHmsPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdateHmsPushConfigurationByIdResponse**](../Model/UpdateHmsPushConfigurationByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePushNotificationContentTemplate()`

```php
updatePushNotificationContentTemplate($api_token, $template_name, $update_push_notification_content_template_data): \Sendbird\Model\UpdatePushNotificationContentTemplateResponse
```

Update a push notification content template

## Update a push notification content template  Updates a specific push notification content template of an application. The name of a content template is either `default` or `alternative`.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-update-a-push-notification-content-template ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['template_name'] = 'template_name_example'; // string
$associate_array['update_push_notification_content_template_data'] = new \Sendbird\Model\UpdatePushNotificationContentTemplateData(); // \Sendbird\Model\UpdatePushNotificationContentTemplateData

try {
    $result = $apiInstance->updatePushNotificationContentTemplate($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updatePushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **template_name** | **string**|  |
 **update_push_notification_content_template_data** | [**\Sendbird\Model\UpdatePushNotificationContentTemplateData**](../Model/UpdatePushNotificationContentTemplateData.md)|  | [optional]

### Return type

[**\Sendbird\Model\UpdatePushNotificationContentTemplateResponse**](../Model/UpdatePushNotificationContentTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewDefaultChannelInvitationPreference()`

```php
viewDefaultChannelInvitationPreference($api_token): \Sendbird\Model\ViewDefaultChannelInvitationPreferenceResponse
```

View default channel invitation preference

## View default channel invitation preference  Retrieves the default channel invitation preference of an application.  > __Note__: Using the [view channel invitation preference](https://sendbird.com/docs/chat/v3/platform-api/guides/user#2-view-channel-invitation-preference) action, you can retrieve the value of a specific user's channel invitation preference, which can be set individually by user.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-default-channel-invitation-preference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewDefaultChannelInvitationPreference($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewDefaultChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |

### Return type

[**\Sendbird\Model\ViewDefaultChannelInvitationPreferenceResponse**](../Model/ViewDefaultChannelInvitationPreferenceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPushConfigurationById()`

```php
viewPushConfigurationById($api_token, $push_type, $provider_id): \Sendbird\Model\ViewPushConfigurationByIdResponse
```

View a push configuration

## View a push configuration  Retrieves a specific push configuration of an application. The type of a push configuration is either `fcm`, `huawei`, or `apns`.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-a-push-configuration ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['push_type'] = 'push_type_example'; // string
$associate_array['provider_id'] = 'provider_id_example'; // string

try {
    $result = $apiInstance->viewPushConfigurationById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **push_type** | **string**|  |
 **provider_id** | **string**|  |

### Return type

[**\Sendbird\Model\ViewPushConfigurationByIdResponse**](../Model/ViewPushConfigurationByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewPushNotificationContentTemplate()`

```php
viewPushNotificationContentTemplate($api_token, $template_name): \Sendbird\Model\ViewPushNotificationContentTemplateResponse
```

View a push notification content template

## View a push notification content template  Retrieves information on a specific push notification content templates of an application. The name of a content template is either `default` or `alternative`.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-a-push-notification-content-template ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['template_name'] = 'template_name_example'; // string

try {
    $result = $apiInstance->viewPushNotificationContentTemplate($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewPushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **template_name** | **string**|  |

### Return type

[**\Sendbird\Model\ViewPushNotificationContentTemplateResponse**](../Model/ViewPushNotificationContentTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewSecondaryApiTokenByToken()`

```php
viewSecondaryApiTokenByToken($api_token, $api_token2): \Sendbird\Model\ViewSecondaryApiTokenByTokenResponse
```

View a secondary API token

## View a secondary API token  Retrieves the information on a secondary API token.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-a-secondary-api-token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['api_token2'] = 'api_token_example'; // string

try {
    $result = $apiInstance->viewSecondaryApiTokenByToken($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewSecondaryApiTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **api_token2** | **string**|  |

### Return type

[**\Sendbird\Model\ViewSecondaryApiTokenByTokenResponse**](../Model/ViewSecondaryApiTokenByTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
