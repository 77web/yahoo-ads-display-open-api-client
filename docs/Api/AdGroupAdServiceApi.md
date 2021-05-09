# YahooAdsDisplayApi\Client\AdGroupAdServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdServiceAddPost()**](AdGroupAdServiceApi.md#adGroupAdServiceAddPost) | **POST** /AdGroupAdService/add | 
[**adGroupAdServiceGetPost()**](AdGroupAdServiceApi.md#adGroupAdServiceGetPost) | **POST** /AdGroupAdService/get | 
[**adGroupAdServiceRemovePost()**](AdGroupAdServiceApi.md#adGroupAdServiceRemovePost) | **POST** /AdGroupAdService/remove | 
[**adGroupAdServiceSetPost()**](AdGroupAdServiceApi.md#adGroupAdServiceSetPost) | **POST** /AdGroupAdService/set | 


## `adGroupAdServiceAddPost()`

```php
adGroupAdServiceAddPost($ad_group_ad_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse
```



<div lang=\"ja\">広告を追加します。</div> <div lang=\"en\">Adds an ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation

try {
    $result = $apiInstance->adGroupAdServiceAddPost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupAdServiceGetPost()`

```php
adGroupAdServiceGetPost($ad_group_ad_service_selector): \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceGetResponse
```



<div lang=\"ja\">広告の情報を取得します。</div> <div lang=\"en\">Retrieves ad information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_selector = new \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceSelector

try {
    $result = $apiInstance->adGroupAdServiceGetPost($ad_group_ad_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceSelector**](../Model/AdGroupAdServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceGetResponse**](../Model/AdGroupAdServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupAdServiceRemovePost()`

```php
adGroupAdServiceRemovePost($ad_group_ad_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse
```



<div lang=\"ja\">広告を削除します。</div> <div lang=\"en\">Removes an ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation

try {
    $result = $apiInstance->adGroupAdServiceRemovePost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupAdServiceSetPost()`

```php
adGroupAdServiceSetPost($ad_group_ad_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse
```



<div lang=\"ja\">広告を変更します。</div> <div lang=\"en\">Updates an ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation

try {
    $result = $apiInstance->adGroupAdServiceSetPost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
