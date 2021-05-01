# OpenAPI\Client\FeedServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedServiceAddPost()**](FeedServiceApi.md#feedServiceAddPost) | **POST** /FeedService/add | 
[**feedServiceDownloadDisApprovalReasonListPost()**](FeedServiceApi.md#feedServiceDownloadDisApprovalReasonListPost) | **POST** /FeedService/downloadDisApprovalReasonList | 
[**feedServiceGetPost()**](FeedServiceApi.md#feedServiceGetPost) | **POST** /FeedService/get | 
[**feedServiceRemovePost()**](FeedServiceApi.md#feedServiceRemovePost) | **POST** /FeedService/remove | 
[**feedServiceSetPost()**](FeedServiceApi.md#feedServiceSetPost) | **POST** /FeedService/set | 


## `feedServiceAddPost()`

```php
feedServiceAddPost($feed_service_operation): \OpenAPI\Client\Model\FeedServiceMutateResponse
```



<div lang=\"ja\">Feed情報を新規登録します</div> <div lang=\"en\">Add the Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \OpenAPI\Client\Model\FeedServiceOperation(); // \OpenAPI\Client\Model\FeedServiceOperation

try {
    $result = $apiInstance->feedServiceAddPost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\OpenAPI\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedServiceDownloadDisApprovalReasonListPost()`

```php
feedServiceDownloadDisApprovalReasonListPost($feed_service_download_dis_approval_reason_list_selector): \SplFileObject
```



<div lang=\"ja\">Feed情報の審査否認理由をダウンロードします。</div> <div lang=\"en\">Downloads the disapproval reason list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_download_dis_approval_reason_list_selector = new \OpenAPI\Client\Model\FeedServiceDownloadDisApprovalReasonListSelector(); // \OpenAPI\Client\Model\FeedServiceDownloadDisApprovalReasonListSelector

try {
    $result = $apiInstance->feedServiceDownloadDisApprovalReasonListPost($feed_service_download_dis_approval_reason_list_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceDownloadDisApprovalReasonListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_download_dis_approval_reason_list_selector** | [**\OpenAPI\Client\Model\FeedServiceDownloadDisApprovalReasonListSelector**](../Model/FeedServiceDownloadDisApprovalReasonListSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedServiceGetPost()`

```php
feedServiceGetPost($feed_service_selector): \OpenAPI\Client\Model\FeedServiceGetResponse
```



<div lang=\"ja\">Feed情報を取得します。</div> <div lang=\"en\">Returns Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_selector = new \OpenAPI\Client\Model\FeedServiceSelector(); // \OpenAPI\Client\Model\FeedServiceSelector

try {
    $result = $apiInstance->feedServiceGetPost($feed_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_selector** | [**\OpenAPI\Client\Model\FeedServiceSelector**](../Model/FeedServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedServiceGetResponse**](../Model/FeedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedServiceRemovePost()`

```php
feedServiceRemovePost($feed_service_operation): \OpenAPI\Client\Model\FeedServiceMutateResponse
```



<div lang=\"ja\">Feed情報を削除します</div> <div lang=\"en\">Remove the Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \OpenAPI\Client\Model\FeedServiceOperation(); // \OpenAPI\Client\Model\FeedServiceOperation

try {
    $result = $apiInstance->feedServiceRemovePost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\OpenAPI\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedServiceSetPost()`

```php
feedServiceSetPost($feed_service_operation): \OpenAPI\Client\Model\FeedServiceMutateResponse
```



<div lang=\"ja\">Feed情報を更新します</div> <div lang=\"en\">Update the Feed information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \OpenAPI\Client\Model\FeedServiceOperation(); // \OpenAPI\Client\Model\FeedServiceOperation

try {
    $result = $apiInstance->feedServiceSetPost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\OpenAPI\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
