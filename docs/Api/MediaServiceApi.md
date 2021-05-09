# YahooAdsDisplayApi\Client\MediaServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaServiceAddPost()**](MediaServiceApi.md#mediaServiceAddPost) | **POST** /MediaService/add | 
[**mediaServiceDownloadPost()**](MediaServiceApi.md#mediaServiceDownloadPost) | **POST** /MediaService/download | 
[**mediaServiceGetPost()**](MediaServiceApi.md#mediaServiceGetPost) | **POST** /MediaService/get | 
[**mediaServiceRemovePost()**](MediaServiceApi.md#mediaServiceRemovePost) | **POST** /MediaService/remove | 
[**mediaServiceSetPost()**](MediaServiceApi.md#mediaServiceSetPost) | **POST** /MediaService/set | 


## `mediaServiceAddPost()`

```php
mediaServiceAddPost($media_service_operation): \YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse
```



<div lang=\"ja\">画像のアップロードを行います（最大1件）。</div> <div lang=\"en\">Uploads the media (maximum of 1 media).</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\MediaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_service_operation = new \YahooAdsDisplayApi\Client\Model\MediaServiceOperation(); // \YahooAdsDisplayApi\Client\Model\MediaServiceOperation

try {
    $result = $apiInstance->mediaServiceAddPost($media_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaServiceApi->mediaServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_service_operation** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceOperation**](../Model/MediaServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse**](../Model/MediaServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaServiceDownloadPost()`

```php
mediaServiceDownloadPost($media_service_download_selector): \SplFileObject
```



<div lang=\"ja\">入稿済みのメディアファイルをダウンロードします。</div> <div lang=\"en\">Download the submitted media file.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\MediaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_service_download_selector = new \YahooAdsDisplayApi\Client\Model\MediaServiceDownloadSelector(); // \YahooAdsDisplayApi\Client\Model\MediaServiceDownloadSelector

try {
    $result = $apiInstance->mediaServiceDownloadPost($media_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaServiceApi->mediaServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_service_download_selector** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceDownloadSelector**](../Model/MediaServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaServiceGetPost()`

```php
mediaServiceGetPost($media_service_selector): \YahooAdsDisplayApi\Client\Model\MediaServiceGetResponse
```



<div lang=\"ja\">入稿済の画像の一覧を条件を指定して取得します。</div> <div lang=\"en\">Retrieves the list of submitted media from specified condition.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\MediaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_service_selector = new \YahooAdsDisplayApi\Client\Model\MediaServiceSelector(); // \YahooAdsDisplayApi\Client\Model\MediaServiceSelector

try {
    $result = $apiInstance->mediaServiceGetPost($media_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaServiceApi->mediaServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_service_selector** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceSelector**](../Model/MediaServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\MediaServiceGetResponse**](../Model/MediaServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaServiceRemovePost()`

```php
mediaServiceRemovePost($media_service_operation): \YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse
```



<div lang=\"ja\">入稿済みの画像を削除します。</div> <div lang=\"en\">Delete the submitted media.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\MediaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_service_operation = new \YahooAdsDisplayApi\Client\Model\MediaServiceOperation(); // \YahooAdsDisplayApi\Client\Model\MediaServiceOperation

try {
    $result = $apiInstance->mediaServiceRemovePost($media_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaServiceApi->mediaServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_service_operation** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceOperation**](../Model/MediaServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse**](../Model/MediaServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mediaServiceSetPost()`

```php
mediaServiceSetPost($media_service_operation): \YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse
```



<div lang=\"ja\">入稿済の画像のステータス（配信設定）の変更を行います。</div> <div lang=\"en\">Change the status (delivery settings) of the submitted media.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\MediaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_service_operation = new \YahooAdsDisplayApi\Client\Model\MediaServiceOperation(); // \YahooAdsDisplayApi\Client\Model\MediaServiceOperation

try {
    $result = $apiInstance->mediaServiceSetPost($media_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaServiceApi->mediaServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_service_operation** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceOperation**](../Model/MediaServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\MediaServiceMutateResponse**](../Model/MediaServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
