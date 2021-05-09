# YahooAdsDisplayApi\Client\AdGroupTargetServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupTargetServiceAddPost()**](AdGroupTargetServiceApi.md#adGroupTargetServiceAddPost) | **POST** /AdGroupTargetService/add | 
[**adGroupTargetServiceGetPost()**](AdGroupTargetServiceApi.md#adGroupTargetServiceGetPost) | **POST** /AdGroupTargetService/get | 
[**adGroupTargetServiceRemovePost()**](AdGroupTargetServiceApi.md#adGroupTargetServiceRemovePost) | **POST** /AdGroupTargetService/remove | 
[**adGroupTargetServiceReplacePost()**](AdGroupTargetServiceApi.md#adGroupTargetServiceReplacePost) | **POST** /AdGroupTargetService/replace | 
[**adGroupTargetServiceSetPost()**](AdGroupTargetServiceApi.md#adGroupTargetServiceSetPost) | **POST** /AdGroupTargetService/set | 


## `adGroupTargetServiceAddPost()`

```php
adGroupTargetServiceAddPost($ad_group_target_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse
```



<div lang=\"ja\">広告グループにおけるターゲティングの設定情報を追加します。</div> <div lang=\"en\">Adds targeting information for an ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_target_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation

try {
    $result = $apiInstance->adGroupTargetServiceAddPost($ad_group_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupTargetServiceApi->adGroupTargetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_target_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation**](../Model/AdGroupTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse**](../Model/AdGroupTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupTargetServiceGetPost()`

```php
adGroupTargetServiceGetPost($ad_group_target_service_selector): \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceGetResponse
```



<div lang=\"ja\">広告グループにおけるターゲティングの設定情報を取得します。</div> <div lang=\"en\">Gets target settings related for ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_target_service_selector = new \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceSelector

try {
    $result = $apiInstance->adGroupTargetServiceGetPost($ad_group_target_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupTargetServiceApi->adGroupTargetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_target_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceSelector**](../Model/AdGroupTargetServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceGetResponse**](../Model/AdGroupTargetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupTargetServiceRemovePost()`

```php
adGroupTargetServiceRemovePost($ad_group_target_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse
```



<div lang=\"ja\">広告グループにおけるターゲティングの設定情報を削除します。</div> <div lang=\"en\">Removes targeting information for an ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_target_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation

try {
    $result = $apiInstance->adGroupTargetServiceRemovePost($ad_group_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupTargetServiceApi->adGroupTargetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_target_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation**](../Model/AdGroupTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse**](../Model/AdGroupTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupTargetServiceReplacePost()`

```php
adGroupTargetServiceReplacePost($ad_group_target_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse
```



<div lang=\"ja\">広告グループにおけるターゲティングの設定情報を置換（削除して追加）します。</div> <div lang=\"en\">Replaces (deletes and adds) targeting information for an ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_target_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation

try {
    $result = $apiInstance->adGroupTargetServiceReplacePost($ad_group_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupTargetServiceApi->adGroupTargetServiceReplacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_target_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation**](../Model/AdGroupTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse**](../Model/AdGroupTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupTargetServiceSetPost()`

```php
adGroupTargetServiceSetPost($ad_group_target_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse
```



<div lang=\"ja\">広告グループにおけるターゲティングの設定情報を更新します。</div> <div lang=\"en\">Updates targeting information for an ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_target_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation

try {
    $result = $apiInstance->adGroupTargetServiceSetPost($ad_group_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupTargetServiceApi->adGroupTargetServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_target_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceOperation**](../Model/AdGroupTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupTargetServiceMutateResponse**](../Model/AdGroupTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
