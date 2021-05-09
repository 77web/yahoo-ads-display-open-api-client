# YahooAdsDisplayApi\Client\ConversionTrackerServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionTrackerServiceAddPost()**](ConversionTrackerServiceApi.md#conversionTrackerServiceAddPost) | **POST** /ConversionTrackerService/add | 
[**conversionTrackerServiceGetPost()**](ConversionTrackerServiceApi.md#conversionTrackerServiceGetPost) | **POST** /ConversionTrackerService/get | 
[**conversionTrackerServiceSetPost()**](ConversionTrackerServiceApi.md#conversionTrackerServiceSetPost) | **POST** /ConversionTrackerService/set | 


## `conversionTrackerServiceAddPost()`

```php
conversionTrackerServiceAddPost($conversion_tracker_service_operation): \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceMutateResponse
```



<div lang=\"ja\">コンバージョントラッカー情報を追加します。</div> <div lang=\"en\">Add Conversion Tracker information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_operation = new \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation(); // \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation

try {
    $result = $apiInstance->conversionTrackerServiceAddPost($conversion_tracker_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_operation** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversionTrackerServiceGetPost()`

```php
conversionTrackerServiceGetPost($conversion_tracker_service_selector): \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceGetResponse
```



<div lang=\"ja\">指定アカウントのコンバージョントラッカー情報を取得します。</div> <div lang=\"en\">Get ConversionTracker information of specified account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_selector = new \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceSelector(); // \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceSelector

try {
    $result = $apiInstance->conversionTrackerServiceGetPost($conversion_tracker_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_selector** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceSelector**](../Model/ConversionTrackerServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceGetResponse**](../Model/ConversionTrackerServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conversionTrackerServiceSetPost()`

```php
conversionTrackerServiceSetPost($conversion_tracker_service_operation): \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceMutateResponse
```



<div lang=\"ja\">コンバージョントラッカー情報を更新します。</div> <div lang=\"en\">Update Conversion Tracker information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_operation = new \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation(); // \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation

try {
    $result = $apiInstance->conversionTrackerServiceSetPost($conversion_tracker_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_operation** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
