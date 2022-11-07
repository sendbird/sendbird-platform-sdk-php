# Sendbird\WebhookApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chooseWhichEventsToSubscribeTo()**](WebhookApi.md#chooseWhichEventsToSubscribeTo) | **PUT** /v3/applications/settings/webhook | Choose which events to subscribe to
[**retrieveListOfSubscribedEvents()**](WebhookApi.md#retrieveListOfSubscribedEvents) | **GET** /v3/applications/settings/webhook | Retrieve a list of subscribed events


## `chooseWhichEventsToSubscribeTo()`

```php
chooseWhichEventsToSubscribeTo($api_token, $choose_which_events_to_subscribe_to_data): \Sendbird\Model\ChooseWhichEventsToSubscribeToResponse
```

Choose which events to subscribe to

## Choose which events to subscribe to  Chooses which events for your webhook server to receive payloads for. By subscribing to specific events based on your own needs, you can control the number of HTTP requests to your webhook server.  https://sendbird.com/docs/chat/v3/platform-api/guides/webhooks#2-choose-which-events-to-subscribe-to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['choose_which_events_to_subscribe_to_data'] = new \Sendbird\Model\ChooseWhichEventsToSubscribeToData(); // \Sendbird\Model\ChooseWhichEventsToSubscribeToData

try {
    $result = $apiInstance->chooseWhichEventsToSubscribeTo($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->chooseWhichEventsToSubscribeTo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **choose_which_events_to_subscribe_to_data** | [**\Sendbird\Model\ChooseWhichEventsToSubscribeToData**](../Model/ChooseWhichEventsToSubscribeToData.md)|  | [optional]

### Return type

[**\Sendbird\Model\ChooseWhichEventsToSubscribeToResponse**](../Model/ChooseWhichEventsToSubscribeToResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveListOfSubscribedEvents()`

```php
retrieveListOfSubscribedEvents($api_token, $display_all_webhook_categories): \Sendbird\Model\RetrieveListOfSubscribedEventsResponse
```

Retrieve a list of subscribed events

## Retrieve a list of subscribed events  Retrieves a list of events for your webhook server to receive payloads for.  https://sendbird.com/docs/chat/v3/platform-api/guides/webhooks#2-retrieve-a-list-of-subscribed-events ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['display_all_webhook_categories'] = True; // bool

try {
    $result = $apiInstance->retrieveListOfSubscribedEvents($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->retrieveListOfSubscribedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **display_all_webhook_categories** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\RetrieveListOfSubscribedEventsResponse**](../Model/RetrieveListOfSubscribedEventsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
