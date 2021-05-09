# YahooAdsDisplayApi\Client\FeedDataServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedDataServiceDownloadErrorFilePost()**](FeedDataServiceApi.md#feedDataServiceDownloadErrorFilePost) | **POST** /FeedDataService/downloadErrorFile | 
[**feedDataServiceGetPost()**](FeedDataServiceApi.md#feedDataServiceGetPost) | **POST** /FeedDataService/get | 
[**feedDataServiceUploadPost()**](FeedDataServiceApi.md#feedDataServiceUploadPost) | **POST** /FeedDataService/upload | 


## `feedDataServiceDownloadErrorFilePost()`

```php
feedDataServiceDownloadErrorFilePost($feed_data_service_download_error_file_selector): \SplFileObject
```



<div lang=\"ja\">商品情報のエラーファイルダウンロード処理を実施します。</div> <div lang=\"en\">Downloads error file.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\FeedDataServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_data_service_download_error_file_selector = new \YahooAdsDisplayApi\Client\Model\FeedDataServiceDownloadErrorFileSelector(); // \YahooAdsDisplayApi\Client\Model\FeedDataServiceDownloadErrorFileSelector

try {
    $result = $apiInstance->feedDataServiceDownloadErrorFilePost($feed_data_service_download_error_file_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedDataServiceApi->feedDataServiceDownloadErrorFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_data_service_download_error_file_selector** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceDownloadErrorFileSelector**](../Model/FeedDataServiceDownloadErrorFileSelector.md)|  | [optional]

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

## `feedDataServiceGetPost()`

```php
feedDataServiceGetPost($feed_data_service_selector): \YahooAdsDisplayApi\Client\Model\FeedDataServiceGetResponse
```



<div lang=\"ja\">アップロードした商品情報の処理状況を照会します。</div> <div lang=\"en\">Returns status of uploaded item list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\FeedDataServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_data_service_selector = new \YahooAdsDisplayApi\Client\Model\FeedDataServiceSelector(); // \YahooAdsDisplayApi\Client\Model\FeedDataServiceSelector

try {
    $result = $apiInstance->feedDataServiceGetPost($feed_data_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedDataServiceApi->feedDataServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_data_service_selector** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceSelector**](../Model/FeedDataServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\FeedDataServiceGetResponse**](../Model/FeedDataServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feedDataServiceUploadPost()`

```php
feedDataServiceUploadPost($account_id, $feed_id, $upload_type, $is_debug, $file): \YahooAdsDisplayApi\Client\Model\FeedDataServiceUploadResponse
```



<div lang=\"ja\">商品情報のアップロード処理を実施します。</div> <div lang=\"en\">Executes upload item list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\FeedDataServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
$feed_id = 56; // int | <div lang=\"ja\">フィードIDです。</div> <div lang=\"en\">Feed ID.</div>
$upload_type = new \YahooAdsDisplayApi\Client\Model\\YahooAdsDisplayApi\Client\Model\FeedDataServiceItemListUploadType(); // \YahooAdsDisplayApi\Client\Model\FeedDataServiceItemListUploadType | <div lang=\"ja\">商品リストファイルアップロード時の取り込み種別です。</div> <div lang=\"en\">FeedDataServiceItemListUploadType object displays upload type of item list.</div>
$is_debug = True; // bool | <div lang=\"ja\">trueはデバッグモードでの実行を意味します。</div> <div lang=\"en\">true means to run in debug mode.</div>
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->feedDataServiceUploadPost($account_id, $feed_id, $upload_type, $is_debug, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedDataServiceApi->feedDataServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **feed_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID.&lt;/div&gt; |
 **upload_type** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceItemListUploadType**](../Model/.md)| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;商品リストファイルアップロード時の取り込み種別です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedDataServiceItemListUploadType object displays upload type of item list.&lt;/div&gt; |
 **is_debug** | **bool**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;trueはデバッグモードでの実行を意味します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;true means to run in debug mode.&lt;/div&gt; |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\FeedDataServiceUploadResponse**](../Model/FeedDataServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
