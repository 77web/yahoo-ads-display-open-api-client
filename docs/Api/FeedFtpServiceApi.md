# OpenAPI\Client\FeedFtpServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedFtpServiceAddPost()**](FeedFtpServiceApi.md#feedFtpServiceAddPost) | **POST** /FeedFtpService/add | 
[**feedFtpServiceGetPost()**](FeedFtpServiceApi.md#feedFtpServiceGetPost) | **POST** /FeedFtpService/get | 
[**feedFtpServiceSetPost()**](FeedFtpServiceApi.md#feedFtpServiceSetPost) | **POST** /FeedFtpService/set | 


## `feedFtpServiceAddPost()`

```php
feedFtpServiceAddPost($feed_ftp_service_operation): \OpenAPI\Client\Model\FeedFtpServiceMutateResponse
```



<div lang=\"ja\">FTP設定情報を新規登録します。</div> <div lang=\"en\">Add the FTP setting information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedFtpServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_ftp_service_operation = new \OpenAPI\Client\Model\FeedFtpServiceOperation(); // \OpenAPI\Client\Model\FeedFtpServiceOperation

try {
    $result = $apiInstance->feedFtpServiceAddPost($feed_ftp_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedFtpServiceApi->feedFtpServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_ftp_service_operation** | [**\OpenAPI\Client\Model\FeedFtpServiceOperation**](../Model/FeedFtpServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedFtpServiceMutateResponse**](../Model/FeedFtpServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedFtpServiceGetPost()`

```php
feedFtpServiceGetPost($feed_ftp_service_selector): \OpenAPI\Client\Model\FeedFtpServiceGetResponse
```



<div lang=\"ja\">FTP設定情報を取得します。</div> <div lang=\"en\">Returns FTP setting information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedFtpServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_ftp_service_selector = new \OpenAPI\Client\Model\FeedFtpServiceSelector(); // \OpenAPI\Client\Model\FeedFtpServiceSelector

try {
    $result = $apiInstance->feedFtpServiceGetPost($feed_ftp_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedFtpServiceApi->feedFtpServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_ftp_service_selector** | [**\OpenAPI\Client\Model\FeedFtpServiceSelector**](../Model/FeedFtpServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedFtpServiceGetResponse**](../Model/FeedFtpServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedFtpServiceSetPost()`

```php
feedFtpServiceSetPost($feed_ftp_service_operation): \OpenAPI\Client\Model\FeedFtpServiceMutateResponse
```



<div lang=\"ja\">FTP設定情報を更新します。</div> <div lang=\"en\">Update the FTP setting information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedFtpServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_ftp_service_operation = new \OpenAPI\Client\Model\FeedFtpServiceOperation(); // \OpenAPI\Client\Model\FeedFtpServiceOperation

try {
    $result = $apiInstance->feedFtpServiceSetPost($feed_ftp_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedFtpServiceApi->feedFtpServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_ftp_service_operation** | [**\OpenAPI\Client\Model\FeedFtpServiceOperation**](../Model/FeedFtpServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedFtpServiceMutateResponse**](../Model/FeedFtpServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
