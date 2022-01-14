# OpenAPI\Client\DataPrivacyApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTheRegistrationOfGdprRequestById()**](DataPrivacyApi.md#cancelTheRegistrationOfGdprRequestById) | **DELETE** /v3/privacy/gdpr/{request_id} | Cancel the registration of a GDPR request
[**listGdprRequests()**](DataPrivacyApi.md#listGdprRequests) | **GET** /v3/privacy/gdpr | List GDPR requests
[**registerGdprRequest()**](DataPrivacyApi.md#registerGdprRequest) | **POST** /v3/privacy/gdpr | Register a GDPR request
[**viewGdprRequestById()**](DataPrivacyApi.md#viewGdprRequestById) | **GET** /v3/privacy/gdpr/{request_id} | View a GDPR request


## `cancelTheRegistrationOfGdprRequestById()`

```php
cancelTheRegistrationOfGdprRequestById($request_id, $api_token)
```

Cancel the registration of a GDPR request

## Cancel the registration of a GDPR request  Cancels the registration of a specific GDPR request.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-cancel-the-registration-of-a-gdpr-request ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DataPrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $apiInstance->cancelTheRegistrationOfGdprRequestById($request_id, $api_token);
} catch (Exception $e) {
    echo 'Exception when calling DataPrivacyApi->cancelTheRegistrationOfGdprRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**|  |
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

## `listGdprRequests()`

```php
listGdprRequests($api_token, $token, $limit): \OpenAPI\Client\Model\InlineResponse20069
```

List GDPR requests

## List GDPR requests  Retrieves a list of GDPR requests of all types.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-list-gdpr-requests ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DataPrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$token = 'token_example'; // string
$limit = 56; // int

try {
    $result = $apiInstance->listGdprRequests($api_token, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataPrivacyApi->listGdprRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerGdprRequest()`

```php
registerGdprRequest($api_token, $register_gdpr_request_data): \OpenAPI\Client\Model\InlineResponse20070
```

Register a GDPR request

## Register a GDPR request  Registers a specific type of GDPR request to meet the GDPR's requirements.  > __Note__: Currently, only delete and access of the user data are supported. The features for the [right to restriction of processing](https://gdpr-info.eu/art-18-gdpr/) and [right to object](https://gdpr-info.eu/art-21-gdpr/) will be available soon.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-register-a-gdpr-request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DataPrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_token = {{API_TOKEN}}; // string
$register_gdpr_request_data = new \OpenAPI\Client\Model\RegisterGdprRequestData(); // \OpenAPI\Client\Model\RegisterGdprRequestData

try {
    $result = $apiInstance->registerGdprRequest($api_token, $register_gdpr_request_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataPrivacyApi->registerGdprRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  | [optional]
 **register_gdpr_request_data** | [**\OpenAPI\Client\Model\RegisterGdprRequestData**](../Model/RegisterGdprRequestData.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewGdprRequestById()`

```php
viewGdprRequestById($request_id, $api_token): \OpenAPI\Client\Model\InlineResponse20069Requests
```

View a GDPR request

## View a GDPR request  Retrieves a specific GDPR request.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-view-a-gdpr-request ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DataPrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string
$api_token = {{API_TOKEN}}; // string

try {
    $result = $apiInstance->viewGdprRequestById($request_id, $api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataPrivacyApi->viewGdprRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**|  |
 **api_token** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse20069Requests**](../Model/InlineResponse20069Requests.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
