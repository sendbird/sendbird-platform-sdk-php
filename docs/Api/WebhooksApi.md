# Sendbird\WebhooksApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chooseWhichEventsToSubscribeTo()**](WebhooksApi.md#chooseWhichEventsToSubscribeTo) | **PUT** /v3/applications/settings/webhook | Choose which events to subscribe to
[**retrieveListOfSubscribedEvents()**](WebhooksApi.md#retrieveListOfSubscribedEvents) | **GET** /v3/applications/settings/webhook | Retrieve a list of subscribed events


## `chooseWhichEventsToSubscribeTo()`

```php
chooseWhichEventsToSubscribeTo($api_token, $choose_which_events_to_subscribe_to_data): \Sendbird\Model\InlineResponse20067
```

Choose which events to subscribe to

## Choose which events to subscribe to  Chooses which events for your webhook server to receive payloads for. By subscribing to specific events based on your own needs, you can control the number of HTTP requests to your webhook server.  https://sendbird.com/docs/chat/v3/platform-api/guides/webhooks#2-choose-which-events-to-subscribe-to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$choose_which_events_to_subscribe_to_data = new \Sendbird\Model\ChooseWhichEventsToSubscribeToData(); // \Sendbird\Model\ChooseWhichEventsToSubscribeToData

try {
    $result = $apiInstance->chooseWhichEventsToSubscribeTo($api_token, $choose_which_events_to_subscribe_to_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->chooseWhichEventsToSubscribeTo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **choose_which_events_to_subscribe_to_data** | [**\Sendbird\Model\ChooseWhichEventsToSubscribeToData**](../Model/ChooseWhichEventsToSubscribeToData.md)|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

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
retrieveListOfSubscribedEvents($api_token, $display_all_webhook_categories): \Sendbird\Model\InlineResponse20066
```

Retrieve a list of subscribed events

## Retrieve a list of subscribed events  Retrieves a list of events for your webhook server to receive payloads for.  https://sendbird.com/docs/chat/v3/platform-api/guides/webhooks#2-retrieve-a-list-of-subscribed-events ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$display_all_webhook_categories = True; // bool

try {
    $result = $apiInstance->retrieveListOfSubscribedEvents($api_token, $display_all_webhook_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->retrieveListOfSubscribedEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **display_all_webhook_categories** | **bool**|  | [optional]

### Return type

[**\Sendbird\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
