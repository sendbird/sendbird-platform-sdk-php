# OpenAPI\Client\OrganizationAPIApi

All URIs are relative to https://api-APP_ID.sendbird.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApplication()**](OrganizationAPIApi.md#createApplication) | **POST** /api/v2/applications | Create an application
[**deleteApplicationById()**](OrganizationAPIApi.md#deleteApplicationById) | **DELETE** /api/v2/applications/{app_id} | Delete an application
[**listApplications()**](OrganizationAPIApi.md#listApplications) | **GET** /api/v2/applications | List applications
[**viewApplicationById()**](OrganizationAPIApi.md#viewApplicationById) | **GET** /api/v2/applications/{app_id} | View an application


## `createApplication()`

```php
createApplication($sendbirdorganizationapitoken, $body): \OpenAPI\Client\Model\InlineResponse200Results
```

Create an application

## Create an application  Creates a new application under your organization.  https://sendbird.com/docs/chat/v3/platform-api/guides/organization-api#2-create-an-application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sendbirdorganizationapitoken = {{ORG_API_TOKEN}}; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->createApplication($sendbirdorganizationapitoken, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAPIApi->createApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendbirdorganizationapitoken** | **string**|  | [optional]
 **body** | **object**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200Results**](../Model/InlineResponse200Results.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationById()`

```php
deleteApplicationById($app_id, $sendbirdorganizationapitoken)
```

Delete an application

## Delete an application  Deletes the specified application.  https://sendbird.com/docs/chat/v3/platform-api/guides/organization-api#2-delete-an-application ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$sendbirdorganizationapitoken = {{ORG_API_TOKEN}}; // string

try {
    $apiInstance->deleteApplicationById($app_id, $sendbirdorganizationapitoken);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAPIApi->deleteApplicationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **sendbirdorganizationapitoken** | **string**|  | [optional]

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

## `listApplications()`

```php
listApplications($sendbirdorganizationapitoken): \OpenAPI\Client\Model\InlineResponse200
```

List applications

## List applications  Retrieves a list of applications of your organization.  https://sendbird.com/docs/chat/v3/platform-api/guides/organization-api#2-list-applications ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sendbirdorganizationapitoken = {{ORG_API_TOKEN}}; // string

try {
    $result = $apiInstance->listApplications($sendbirdorganizationapitoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAPIApi->listApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sendbirdorganizationapitoken** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewApplicationById()`

```php
viewApplicationById($app_id, $sendbirdorganizationapitoken): \OpenAPI\Client\Model\InlineResponse200Results
```

View an application

## View an application  Retrieves information about an application with a specified application ID.  https://sendbird.com/docs/chat/v3/platform-api/guides/organization-api#2-view-an-application ----------------------------

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrganizationAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string
$sendbirdorganizationapitoken = {{ORG_API_TOKEN}}; // string

try {
    $result = $apiInstance->viewApplicationById($app_id, $sendbirdorganizationapitoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAPIApi->viewApplicationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **sendbirdorganizationapitoken** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200Results**](../Model/InlineResponse200Results.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
