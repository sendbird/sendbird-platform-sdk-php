# Sendbird\PrivacyApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTheRegistrationOfGdprRequestById()**](PrivacyApi.md#cancelTheRegistrationOfGdprRequestById) | **DELETE** /v3/privacy/gdpr/{request_id} | Cancel the registration of a GDPR request
[**listGdprRequests()**](PrivacyApi.md#listGdprRequests) | **GET** /v3/privacy/gdpr | List GDPR requests
[**registerGdprRequest()**](PrivacyApi.md#registerGdprRequest) | **POST** /v3/privacy/gdpr | Register a GDPR request
[**viewGdprRequestById()**](PrivacyApi.md#viewGdprRequestById) | **GET** /v3/privacy/gdpr/{request_id} | View a GDPR request


## `cancelTheRegistrationOfGdprRequestById()`

```php
cancelTheRegistrationOfGdprRequestById($api_token, $request_id)
```

Cancel the registration of a GDPR request

## Cancel the registration of a GDPR request  Cancels the registration of a specific GDPR request.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-cancel-the-registration-of-a-gdpr-request ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['request_id'] = 'request_id_example'; // string

try {
    $apiInstance->cancelTheRegistrationOfGdprRequestById($associate_array);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->cancelTheRegistrationOfGdprRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **request_id** | **string**|  |

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

## `listGdprRequests()`

```php
listGdprRequests($api_token, $token, $limit): \Sendbird\Model\ListGdprRequestsResponse
```

List GDPR requests

## List GDPR requests  Retrieves a list of GDPR requests of all types.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-list-gdpr-requests ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['token'] = 'token_example'; // string
$associate_array['limit'] = 56; // int

try {
    $result = $apiInstance->listGdprRequests($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->listGdprRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **token** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\Sendbird\Model\ListGdprRequestsResponse**](../Model/ListGdprRequestsResponse.md)

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
registerGdprRequest($api_token, $register_gdpr_request_data): \Sendbird\Model\RegisterGdprRequestResponse
```

Register a GDPR request

## Register a GDPR request  Registers a specific type of GDPR request to meet the GDPR's requirements.  > __Note__: Currently, only delete and access of the user data are supported. The features for the [right to restriction of processing](https://gdpr-info.eu/art-18-gdpr/) and [right to object](https://gdpr-info.eu/art-21-gdpr/) will be available soon.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-register-a-gdpr-request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['register_gdpr_request_data'] = new \Sendbird\Model\RegisterGdprRequestData(); // \Sendbird\Model\RegisterGdprRequestData

try {
    $result = $apiInstance->registerGdprRequest($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->registerGdprRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **register_gdpr_request_data** | [**\Sendbird\Model\RegisterGdprRequestData**](../Model/RegisterGdprRequestData.md)|  | [optional]

### Return type

[**\Sendbird\Model\RegisterGdprRequestResponse**](../Model/RegisterGdprRequestResponse.md)

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
viewGdprRequestById($api_token, $request_id): \Sendbird\Model\ViewGdprRequestByIdResponse
```

View a GDPR request

## View a GDPR request  Retrieves a specific GDPR request.  https://sendbird.com/docs/chat/v3/platform-api/guides/data-privacy#2-view-a-gdpr-request ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Sendbird\Api\PrivacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['api_token'] = {{API_TOKEN}}; // string
$associate_array['request_id'] = 'request_id_example'; // string

try {
    $result = $apiInstance->viewGdprRequestById($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivacyApi->viewGdprRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_token** | **string**|  |
 **request_id** | **string**|  |

### Return type

[**\Sendbird\Model\ViewGdprRequestByIdResponse**](../Model/ViewGdprRequestByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
