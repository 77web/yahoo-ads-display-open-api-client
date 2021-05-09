# YahooAdsDisplayApi\Client\GuaranteedSimulationServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedSimulationServiceAddPost()**](GuaranteedSimulationServiceApi.md#guaranteedSimulationServiceAddPost) | **POST** /GuaranteedSimulationService/add | 
[**guaranteedSimulationServiceGetAdCategoryPost()**](GuaranteedSimulationServiceApi.md#guaranteedSimulationServiceGetAdCategoryPost) | **POST** /GuaranteedSimulationService/getAdCategory | 
[**guaranteedSimulationServiceGetPackagePost()**](GuaranteedSimulationServiceApi.md#guaranteedSimulationServiceGetPackagePost) | **POST** /GuaranteedSimulationService/getPackage | 
[**guaranteedSimulationServiceGetPost()**](GuaranteedSimulationServiceApi.md#guaranteedSimulationServiceGetPost) | **POST** /GuaranteedSimulationService/get | 


## `guaranteedSimulationServiceAddPost()`

```php
guaranteedSimulationServiceAddPost($guaranteed_simulation_service_operation): \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceMutateResponse
```



<div lang=\"ja\">   予約型キャンペーンの配信シミュレーションに関する情報を追加します。<br>   ※GuaranteedSimulationService/addによる配信シミュレーションの実施は、一部の利用者向けの限定機能となります。<br>   ※リクエスト制限は「最大5件/秒」固定です。サービス種別「campaign」とは別にカウントされます。 </div> <div lang=\"en\">   Adds information about the delivery simulation of the guaranteed campaign.<br>   * The delivery simulation implementation via GuaranteedSimulationService/add is a limited function for some users.<br>   * Request restrictions is a maximum of \"5 requests per second\". It counts separately from the service type \"campaign\". </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedSimulationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_simulation_service_operation = new \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceOperation(); // \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceOperation

try {
    $result = $apiInstance->guaranteedSimulationServiceAddPost($guaranteed_simulation_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedSimulationServiceApi->guaranteedSimulationServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_simulation_service_operation** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceOperation**](../Model/GuaranteedSimulationServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceMutateResponse**](../Model/GuaranteedSimulationServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedSimulationServiceGetAdCategoryPost()`

```php
guaranteedSimulationServiceGetAdCategoryPost($body): \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetAdCategoryResponse
```



<div lang=\"ja\">予約型キャンペーンの配信シミュレーションにおける広告カテゴリー一覧を取得します。</div> <div lang=\"en\">Returns the list of ad categories in the delivery simulation of the guaranteed campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedSimulationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object

try {
    $result = $apiInstance->guaranteedSimulationServiceGetAdCategoryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedSimulationServiceApi->guaranteedSimulationServiceGetAdCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetAdCategoryResponse**](../Model/GuaranteedSimulationServiceGetAdCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedSimulationServiceGetPackagePost()`

```php
guaranteedSimulationServiceGetPackagePost($guaranteed_simulation_service_package_selector): \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetPackageResponse
```



<div lang=\"ja\">予約型キャンペーンの配信シミュレーションのための商品一覧を取得します。</div> <div lang=\"en\">Gets the package list for the delivery simulation of the guaranteed campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedSimulationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_simulation_service_package_selector = new \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackageSelector(); // \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackageSelector

try {
    $result = $apiInstance->guaranteedSimulationServiceGetPackagePost($guaranteed_simulation_service_package_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedSimulationServiceApi->guaranteedSimulationServiceGetPackagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_simulation_service_package_selector** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackageSelector**](../Model/GuaranteedSimulationServicePackageSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetPackageResponse**](../Model/GuaranteedSimulationServiceGetPackageResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedSimulationServiceGetPost()`

```php
guaranteedSimulationServiceGetPost($guaranteed_simulation_service_selector): \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetResponse
```



<div lang=\"ja\">予約型キャンペーンの配信シミュレーション結果に関する情報を取得します。</div> <div lang=\"en\">Returns the information about delivery simulation results of the guaranteed campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedSimulationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_simulation_service_selector = new \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceSelector(); // \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceSelector

try {
    $result = $apiInstance->guaranteedSimulationServiceGetPost($guaranteed_simulation_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedSimulationServiceApi->guaranteedSimulationServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_simulation_service_selector** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceSelector**](../Model/GuaranteedSimulationServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceGetResponse**](../Model/GuaranteedSimulationServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
