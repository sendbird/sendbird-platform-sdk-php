# Sendbird\ApplicationApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApnsPushConfiguration()**](ApplicationApi.md#addApnsPushConfiguration) | **POST** /v3/applications/push/apns | Add an APNs push configuration
[**addFcmPushConfiguration()**](ApplicationApi.md#addFcmPushConfiguration) | **POST** /v3/applications/push/fcm | Add a FCM push configuration
[**addHmsPushConfiguration()**](ApplicationApi.md#addHmsPushConfiguration) | **POST** /v3/applications/push/hms | Add an HMS push configuration
[**addIpToWhitelist()**](ApplicationApi.md#addIpToWhitelist) | **PUT** /v3/applications/settings/ip_whitelist | Add an IP to a whitelist
[**deleteAllowedIpsFromWhitelist()**](ApplicationApi.md#deleteAllowedIpsFromWhitelist) | **DELETE** /v3/applications/settings/ip_whitelist | Delete allowed IPs from a whitelist
[**deleteApnsCertificateById()**](ApplicationApi.md#deleteApnsCertificateById) | **DELETE** /v3/applications/push/apns/cert/{provider_id} | Delete an APNs certificate
[**generateSecondaryApiToken()**](ApplicationApi.md#generateSecondaryApiToken) | **POST** /v3/applications/api_tokens | Generate a secondary API token
[**listPushConfigurations()**](ApplicationApi.md#listPushConfigurations) | **GET** /v3/applications/push/{push_type} | List push configurations
[**listPushNotificationContentTemplates()**](ApplicationApi.md#listPushNotificationContentTemplates) | **GET** /v3/applications/push/message_templates | List push notification content templates
[**listSecondaryApiTokens()**](ApplicationApi.md#listSecondaryApiTokens) | **GET** /v3/applications/api_tokens | List secondary API tokens
[**removePushConfigurationById()**](ApplicationApi.md#removePushConfigurationById) | **DELETE** /v3/applications/push/{push_type}/{provider_id} | Remove a push configuration
[**retrieveIpWhitelist()**](ApplicationApi.md#retrieveIpWhitelist) | **GET** /v3/applications/settings/ip_whitelist | Retrieve an IP whitelist
[**revokeSecondaryApiTokenByToken()**](ApplicationApi.md#revokeSecondaryApiTokenByToken) | **DELETE** /v3/applications/api_tokens/{api_token} | Revoke a secondary API token
[**updateApnsPushConfigurationById()**](ApplicationApi.md#updateApnsPushConfigurationById) | **PUT** /v3/applications/push/apns/{provider_id} | Update an APNs push configuration
[**updateDefaultChannelInvitationPreference()**](ApplicationApi.md#updateDefaultChannelInvitationPreference) | **PUT** /v3/applications/default_channel_invitation_preference | Update default channel invitation preference
[**updateFcmPushConfigurationById()**](ApplicationApi.md#updateFcmPushConfigurationById) | **PUT** /v3/applications/push/fcm/{provider_id} | Update a FCM push configuration
[**updateHmsPushConfigurationById()**](ApplicationApi.md#updateHmsPushConfigurationById) | **PUT** /v3/applications/push/hms/{provider_id} | Update an HMS push configuration
[**updatePushNotificationContentTemplate()**](ApplicationApi.md#updatePushNotificationContentTemplate) | **PUT** /v3/applications/push/message_templates/{template_name} | Update a push notification content template
[**viewDefaultChannelInvitationPreference()**](ApplicationApi.md#viewDefaultChannelInvitationPreference) | **GET** /v3/applications/default_channel_invitation_preference | View default channel invitation preference
[**viewNumberOfConcurrentConnections()**](ApplicationApi.md#viewNumberOfConcurrentConnections) | **GET** /v3/applications/ccu | View number of concurrent connections
[**viewNumberOfDailyActiveUsers()**](ApplicationApi.md#viewNumberOfDailyActiveUsers) | **GET** /v3/applications/dau | View number of daily active users
[**viewNumberOfMonthlyActiveUsers()**](ApplicationApi.md#viewNumberOfMonthlyActiveUsers) | **GET** /v3/applications/mau | View number of monthly active users
[**viewNumberOfPeakConnections()**](ApplicationApi.md#viewNumberOfPeakConnections) | **GET** /v3/applications/peak_connections | View number of peak connections
[**viewPushConfigurationById()**](ApplicationApi.md#viewPushConfigurationById) | **GET** /v3/applications/push/{push_type}/{provider_id} | View a push configuration
[**viewPushNotificationContentTemplate()**](ApplicationApi.md#viewPushNotificationContentTemplate) | **GET** /v3/applications/push/message_templates/{template_name} | View a push notification content template
[**viewSecondaryApiTokenByToken()**](ApplicationApi.md#viewSecondaryApiTokenByToken) | **GET** /v3/applications/api_tokens/{api_token} | View a secondary API token


## `addApnsPushConfiguration()`

```php
addApnsPushConfiguration($api_token, $add_apns_push_configuration_data): \Sendbird\Model\InlineResponse2003
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
$api_token = {{API_TOKEN}}; // string
$add_apns_push_configuration_data = new \Sendbird\Model\AddApnsPushConfigurationData(); // \Sendbird\Model\AddApnsPushConfigurationData

try {
    $result = $apiInstance->addApnsPushConfiguration($api_token, $add_apns_push_configuration_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addApnsPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **add_apns_push_configuration_data** | [**\Sendbird\Model\AddApnsPushConfigurationData**](../Model/AddApnsPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

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
addFcmPushConfiguration($api_token, $add_fcm_push_configuration_data): \Sendbird\Model\InlineResponse2001
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
$api_token = {{API_TOKEN}}; // string
$add_fcm_push_configuration_data = new \Sendbird\Model\AddFcmPushConfigurationData(); // \Sendbird\Model\AddFcmPushConfigurationData

try {
    $result = $apiInstance->addFcmPushConfiguration($api_token, $add_fcm_push_configuration_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addFcmPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **add_fcm_push_configuration_data** | [**\Sendbird\Model\AddFcmPushConfigurationData**](../Model/AddFcmPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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
addHmsPushConfiguration($api_token, $add_hms_push_configuration_data): \Sendbird\Model\InlineResponse2002
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
$api_token = {{API_TOKEN}}; // string
$add_hms_push_configuration_data = new \Sendbird\Model\AddHmsPushConfigurationData(); // \Sendbird\Model\AddHmsPushConfigurationData

try {
    $result = $apiInstance->addHmsPushConfiguration($api_token, $add_hms_push_configuration_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addHmsPushConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **add_hms_push_configuration_data** | [**\Sendbird\Model\AddHmsPushConfigurationData**](../Model/AddHmsPushConfigurationData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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
addIpToWhitelist($api_token, $add_ip_to_whitelist_data): \Sendbird\Model\InlineResponse2006
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
$api_token = {{API_TOKEN}}; // string
$add_ip_to_whitelist_data = new \Sendbird\Model\AddIpToWhitelistData(); // \Sendbird\Model\AddIpToWhitelistData

try {
    $result = $apiInstance->addIpToWhitelist($api_token, $add_ip_to_whitelist_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->addIpToWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **add_ip_to_whitelist_data** | [**\Sendbird\Model\AddIpToWhitelistData**](../Model/AddIpToWhitelistData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

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
deleteAllowedIpsFromWhitelist($ip_whitelist_addresses, $api_token): \Sendbird\Model\InlineResponse2006
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
$ip_whitelist_addresses = array('ip_whitelist_addresses_example'); // string[]
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteAllowedIpsFromWhitelist($ip_whitelist_addresses, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->deleteAllowedIpsFromWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_whitelist_addresses** | [**string[]**](../Model/string.md)|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

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
deleteApnsCertificateById($provider_id, $api_token): \Sendbird\Model\InlineResponse20013
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
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->deleteApnsCertificateById($provider_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->deleteApnsCertificateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

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
generateSecondaryApiToken($api_token, $generate_secondary_api_token_data): \Sendbird\Model\InlineResponse2007
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
$api_token = {{API_TOKEN}}; // string
$generate_secondary_api_token_data = new \Sendbird\Model\GenerateSecondaryApiTokenData(); // \Sendbird\Model\GenerateSecondaryApiTokenData

try {
    $result = $apiInstance->generateSecondaryApiToken($api_token, $generate_secondary_api_token_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->generateSecondaryApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **generate_secondary_api_token_data** | [**\Sendbird\Model\GenerateSecondaryApiTokenData**](../Model/GenerateSecondaryApiTokenData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPushConfigurations()`

```php
listPushConfigurations($push_type, $api_token): \Sendbird\Model\InlineResponse20012
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
$push_type = 'push_type_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listPushConfigurations($push_type, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listPushConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_type** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

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
listPushNotificationContentTemplates($api_token): \Sendbird\Model\InlineResponse2004
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
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listPushNotificationContentTemplates($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listPushNotificationContentTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

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
listSecondaryApiTokens($api_token): \Sendbird\Model\InlineResponse2008
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
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->listSecondaryApiTokens($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->listSecondaryApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePushConfigurationById()`

```php
removePushConfigurationById($push_type, $provider_id, $api_token): \Sendbird\Model\InlineResponse20013
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
$push_type = 'push_type_example'; // string
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->removePushConfigurationById($push_type, $provider_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->removePushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_type** | **string**|  |
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

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
retrieveIpWhitelist($api_token): \Sendbird\Model\InlineResponse2006
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
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->retrieveIpWhitelist($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->retrieveIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

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
revokeSecondaryApiTokenByToken($api_token2, $api_token): \Sendbird\Model\InlineResponse2007
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
$api_token2 = 'api_token_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->revokeSecondaryApiTokenByToken($api_token2, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->revokeSecondaryApiTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token2** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

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
updateApnsPushConfigurationById($provider_id, $api_token, $update_apns_push_configuration_by_id_data): \Sendbird\Model\InlineResponse20014
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
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_apns_push_configuration_by_id_data = new \Sendbird\Model\UpdateApnsPushConfigurationByIdData(); // \Sendbird\Model\UpdateApnsPushConfigurationByIdData

try {
    $result = $apiInstance->updateApnsPushConfigurationById($provider_id, $api_token, $update_apns_push_configuration_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateApnsPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_apns_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateApnsPushConfigurationByIdData**](../Model/UpdateApnsPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

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
updateDefaultChannelInvitationPreference($api_token, $update_default_channel_invitation_preference_data): \Sendbird\Model\InlineResponse2005
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
$api_token = {{API_TOKEN}}; // string
$update_default_channel_invitation_preference_data = new \Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData(); // \Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData

try {
    $result = $apiInstance->updateDefaultChannelInvitationPreference($api_token, $update_default_channel_invitation_preference_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateDefaultChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **update_default_channel_invitation_preference_data** | [**\Sendbird\Model\UpdateDefaultChannelInvitationPreferenceData**](../Model/UpdateDefaultChannelInvitationPreferenceData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

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
updateFcmPushConfigurationById($provider_id, $api_token, $update_fcm_push_configuration_by_id_data): \Sendbird\Model\InlineResponse20014
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
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_fcm_push_configuration_by_id_data = new \Sendbird\Model\UpdateFcmPushConfigurationByIdData(); // \Sendbird\Model\UpdateFcmPushConfigurationByIdData

try {
    $result = $apiInstance->updateFcmPushConfigurationById($provider_id, $api_token, $update_fcm_push_configuration_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateFcmPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_fcm_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateFcmPushConfigurationByIdData**](../Model/UpdateFcmPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

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
updateHmsPushConfigurationById($provider_id, $api_token, $update_hms_push_configuration_by_id_data): \Sendbird\Model\InlineResponse20014
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
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_hms_push_configuration_by_id_data = new \Sendbird\Model\UpdateHmsPushConfigurationByIdData(); // \Sendbird\Model\UpdateHmsPushConfigurationByIdData

try {
    $result = $apiInstance->updateHmsPushConfigurationById($provider_id, $api_token, $update_hms_push_configuration_by_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updateHmsPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_hms_push_configuration_by_id_data** | [**\Sendbird\Model\UpdateHmsPushConfigurationByIdData**](../Model/UpdateHmsPushConfigurationByIdData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

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
updatePushNotificationContentTemplate($template_name, $api_token, $update_push_notification_content_template_data): \Sendbird\Model\InlineResponse20015
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
$template_name = 'template_name_example'; // string
$api_token = {{API_TOKEN}}; // string
$update_push_notification_content_template_data = new \Sendbird\Model\UpdatePushNotificationContentTemplateData(); // \Sendbird\Model\UpdatePushNotificationContentTemplateData

try {
    $result = $apiInstance->updatePushNotificationContentTemplate($template_name, $api_token, $update_push_notification_content_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->updatePushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_name** | **string**|  |
 **api_token** | **string**|  | [optional]
 **update_push_notification_content_template_data** | [**\Sendbird\Model\UpdatePushNotificationContentTemplateData**](../Model/UpdatePushNotificationContentTemplateData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

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
viewDefaultChannelInvitationPreference($api_token): \Sendbird\Model\InlineResponse2005
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
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewDefaultChannelInvitationPreference($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewDefaultChannelInvitationPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfConcurrentConnections()`

```php
viewNumberOfConcurrentConnections($api_token): \Sendbird\Model\InlineResponse200
```

View number of concurrent connections

## View number of concurrent connections  Retrieves the number of devices and opened browser tabs which are currently connected to Sendbird server.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-concurrent-connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewNumberOfConcurrentConnections($api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewNumberOfConcurrentConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfDailyActiveUsers()`

```php
viewNumberOfDailyActiveUsers($api_token, $date): \Sendbird\Model\InlineResponse20011
```

View number of daily active users

## View number of daily active users  Retrieves the number of daily active users of the application (DAU).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-daily-active-users ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$date = 'date_example'; // string

try {
    $result = $apiInstance->viewNumberOfDailyActiveUsers($api_token, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewNumberOfDailyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **date** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfMonthlyActiveUsers()`

```php
viewNumberOfMonthlyActiveUsers($api_token, $date): \Sendbird\Model\InlineResponse20010
```

View number of monthly active users

## View number of monthly active users  Retrieves the number of monthly active users of the application (MAU).  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-monthly-active-users ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$date = 'date_example'; // string

try {
    $result = $apiInstance->viewNumberOfMonthlyActiveUsers($api_token, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewNumberOfMonthlyActiveUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **date** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewNumberOfPeakConnections()`

```php
viewNumberOfPeakConnections($time_dimension, $start_year, $start_month, $end_year, $end_month, $api_token, $start_day, $end_day): \Sendbird\Model\InlineResponse2009
```

View number of peak connections

## View number of peak connections  Retrieves the number of concurrently connected devices to Sendbird server during the requested time period.  https://sendbird.com/docs/chat/v3/platform-api/guides/application#2-view-number-of-peak-connections ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\ApplicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time_dimension = 'time_dimension_example'; // string
$start_year = 56; // int
$start_month = 56; // int
$end_year = 56; // int
$end_month = 56; // int
$api_token = {{API_TOKEN}}; // string
$start_day = 56; // int
$end_day = 56; // int

try {
    $result = $apiInstance->viewNumberOfPeakConnections($time_dimension, $start_year, $start_month, $end_year, $end_month, $api_token, $start_day, $end_day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewNumberOfPeakConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_dimension** | **string**|  |
 **start_year** | **int**|  |
 **start_month** | **int**|  |
 **end_year** | **int**|  |
 **end_month** | **int**|  |
 **api_token** | **string**|  | [optional]
 **start_day** | **int**|  | [optional]
 **end_day** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

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
viewPushConfigurationById($push_type, $provider_id, $api_token): \Sendbird\Model\InlineResponse20012
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
$push_type = 'push_type_example'; // string
$provider_id = 'provider_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewPushConfigurationById($push_type, $provider_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewPushConfigurationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_type** | **string**|  |
 **provider_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

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
viewPushNotificationContentTemplate($template_name, $api_token): \Sendbird\Model\InlineResponse20015
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
$template_name = 'template_name_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewPushNotificationContentTemplate($template_name, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewPushNotificationContentTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_name** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

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
viewSecondaryApiTokenByToken($api_token2, $api_token): \Sendbird\Model\InlineResponse2007
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
$api_token2 = 'api_token_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewSecondaryApiTokenByToken($api_token2, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationApi->viewSecondaryApiTokenByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token2** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)