# OpenAPI\Client\FeedSetServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedSetServiceAddPost()**](FeedSetServiceApi.md#feedSetServiceAddPost) | **POST** /FeedSetService/add | 
[**feedSetServiceGetPost()**](FeedSetServiceApi.md#feedSetServiceGetPost) | **POST** /FeedSetService/get | 
[**feedSetServiceRemovePost()**](FeedSetServiceApi.md#feedSetServiceRemovePost) | **POST** /FeedSetService/remove | 


## `feedSetServiceAddPost()`

```php
feedSetServiceAddPost($feed_set_service_operation): \OpenAPI\Client\Model\FeedSetServiceMutateResponse
```



<div lang=\"ja\">FeedSet情報を新規登録します</div> <div lang=\"en\">Add the FeedSet information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_set_service_operation = new \OpenAPI\Client\Model\FeedSetServiceOperation(); // \OpenAPI\Client\Model\FeedSetServiceOperation

try {
    $result = $apiInstance->feedSetServiceAddPost($feed_set_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedSetServiceApi->feedSetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_set_service_operation** | [**\OpenAPI\Client\Model\FeedSetServiceOperation**](../Model/FeedSetServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedSetServiceMutateResponse**](../Model/FeedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedSetServiceGetPost()`

```php
feedSetServiceGetPost($feed_set_service_selector): \OpenAPI\Client\Model\FeedSetServiceGetResponse
```



<div lang=\"ja\">FeedSet情報を取得します。</div> <div lang=\"en\">Returns FeedSet information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_set_service_selector = new \OpenAPI\Client\Model\FeedSetServiceSelector(); // \OpenAPI\Client\Model\FeedSetServiceSelector

try {
    $result = $apiInstance->feedSetServiceGetPost($feed_set_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedSetServiceApi->feedSetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_set_service_selector** | [**\OpenAPI\Client\Model\FeedSetServiceSelector**](../Model/FeedSetServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedSetServiceGetResponse**](../Model/FeedSetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedSetServiceRemovePost()`

```php
feedSetServiceRemovePost($feed_set_service_operation): \OpenAPI\Client\Model\FeedSetServiceMutateResponse
```



<div lang=\"ja\">FeedSet情報を削除します</div> <div lang=\"en\">Remove the FeedSet information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_set_service_operation = new \OpenAPI\Client\Model\FeedSetServiceOperation(); // \OpenAPI\Client\Model\FeedSetServiceOperation

try {
    $result = $apiInstance->feedSetServiceRemovePost($feed_set_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedSetServiceApi->feedSetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_set_service_operation** | [**\OpenAPI\Client\Model\FeedSetServiceOperation**](../Model/FeedSetServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedSetServiceMutateResponse**](../Model/FeedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
