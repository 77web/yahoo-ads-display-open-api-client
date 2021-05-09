# YahooAdsDisplayApi\Client\VideoServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoServiceDownloadPost()**](VideoServiceApi.md#videoServiceDownloadPost) | **POST** /VideoService/download | 
[**videoServiceGetPost()**](VideoServiceApi.md#videoServiceGetPost) | **POST** /VideoService/get | 
[**videoServiceRemovePost()**](VideoServiceApi.md#videoServiceRemovePost) | **POST** /VideoService/remove | 
[**videoServiceSetPost()**](VideoServiceApi.md#videoServiceSetPost) | **POST** /VideoService/set | 
[**videoServiceUploadPost()**](VideoServiceApi.md#videoServiceUploadPost) | **POST** /VideoService/upload | 


## `videoServiceDownloadPost()`

```php
videoServiceDownloadPost($video_service_download_selector): \SplFileObject
```



<div lang=\"ja\">入稿済の動画をダウンロードします。</div> <div lang=\"en\">Downloads the added video.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\VideoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_service_download_selector = new \YahooAdsDisplayApi\Client\Model\VideoServiceDownloadSelector(); // \YahooAdsDisplayApi\Client\Model\VideoServiceDownloadSelector

try {
    $result = $apiInstance->videoServiceDownloadPost($video_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoServiceApi->videoServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_service_download_selector** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceDownloadSelector**](../Model/VideoServiceDownloadSelector.md)|  | [optional]

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

## `videoServiceGetPost()`

```php
videoServiceGetPost($video_service_selector): \YahooAdsDisplayApi\Client\Model\VideoServiceGetResponse
```



<div lang=\"ja\">入稿済の動画の情報を取得します。</div> <div lang=\"en\">Retrieves the added video information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\VideoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_service_selector = new \YahooAdsDisplayApi\Client\Model\VideoServiceSelector(); // \YahooAdsDisplayApi\Client\Model\VideoServiceSelector

try {
    $result = $apiInstance->videoServiceGetPost($video_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoServiceApi->videoServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_service_selector** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceSelector**](../Model/VideoServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\VideoServiceGetResponse**](../Model/VideoServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `videoServiceRemovePost()`

```php
videoServiceRemovePost($video_service_operation): \YahooAdsDisplayApi\Client\Model\VideoServiceMutateResponse
```



<div lang=\"ja\">入稿済みの動画を削除します。</div> <div lang=\"en\">Removes the added videos.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\VideoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_service_operation = new \YahooAdsDisplayApi\Client\Model\VideoServiceOperation(); // \YahooAdsDisplayApi\Client\Model\VideoServiceOperation

try {
    $result = $apiInstance->videoServiceRemovePost($video_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoServiceApi->videoServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_service_operation** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceOperation**](../Model/VideoServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\VideoServiceMutateResponse**](../Model/VideoServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `videoServiceSetPost()`

```php
videoServiceSetPost($video_service_operation): \YahooAdsDisplayApi\Client\Model\VideoServiceMutateResponse
```



<div lang=\"ja\">入稿済の動画の情報（動画名、配信状況）を変更します。</div> <div lang=\"en\">Updates information (Video Name and Display Status) of added videos.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\VideoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_service_operation = new \YahooAdsDisplayApi\Client\Model\VideoServiceOperation(); // \YahooAdsDisplayApi\Client\Model\VideoServiceOperation

try {
    $result = $apiInstance->videoServiceSetPost($video_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoServiceApi->videoServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_service_operation** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceOperation**](../Model/VideoServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\VideoServiceMutateResponse**](../Model/VideoServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `videoServiceUploadPost()`

```php
videoServiceUploadPost($account_id, $video_name, $video_title, $user_status, $file): \YahooAdsDisplayApi\Client\Model\VideoServiceUploadResponse
```



<div lang=\"ja\">動画ファイルのアップロード処理を実施します。</div> <div lang=\"en\">Upload process of video files can be operated.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\VideoServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
$video_name = 'video_name_example'; // string | <div lang=\"ja\">動画のファイル名です。</div> <div lang=\"en\">Video file name.</div>
$video_title = 'video_title_example'; // string | <div lang=\"ja\">動画名です。</div> <div lang=\"en\">Video name.</div>
$user_status = new \YahooAdsDisplayApi\Client\Model\\YahooAdsDisplayApi\Client\Model\VideoServiceUserStatus(); // \YahooAdsDisplayApi\Client\Model\VideoServiceUserStatus | <div lang=\"ja\">ユーザーにより広告配信の有無を調整できる設定です。</div> <div lang=\"en\">Ad delivery status that can be set by an user is served.</div>
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->videoServiceUploadPost($account_id, $video_name, $video_title, $user_status, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoServiceApi->videoServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **video_name** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;動画のファイル名です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Video file name.&lt;/div&gt; |
 **video_title** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;動画名です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Video name.&lt;/div&gt; |
 **user_status** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceUserStatus**](../Model/.md)| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ユーザーにより広告配信の有無を調整できる設定です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Ad delivery status that can be set by an user is served.&lt;/div&gt; |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\VideoServiceUploadResponse**](../Model/VideoServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
