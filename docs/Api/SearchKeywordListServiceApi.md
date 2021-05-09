# YahooAdsDisplayApi\Client\SearchKeywordListServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchKeywordListServiceAddPost()**](SearchKeywordListServiceApi.md#searchKeywordListServiceAddPost) | **POST** /SearchKeywordListService/add | 
[**searchKeywordListServiceGetPost()**](SearchKeywordListServiceApi.md#searchKeywordListServiceGetPost) | **POST** /SearchKeywordListService/get | 
[**searchKeywordListServiceRemovePost()**](SearchKeywordListServiceApi.md#searchKeywordListServiceRemovePost) | **POST** /SearchKeywordListService/remove | 
[**searchKeywordListServiceSetPost()**](SearchKeywordListServiceApi.md#searchKeywordListServiceSetPost) | **POST** /SearchKeywordListService/set | 


## `searchKeywordListServiceAddPost()`

```php
searchKeywordListServiceAddPost($search_keyword_list_service_operation): \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse
```



<div lang=\"ja\">サーチキーワードリストを追加します。</div> <div lang=\"en\">Add the search keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\SearchKeywordListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_keyword_list_service_operation = new \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation

try {
    $result = $apiInstance->searchKeywordListServiceAddPost($search_keyword_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchKeywordListServiceApi->searchKeywordListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_keyword_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation**](../Model/SearchKeywordListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse**](../Model/SearchKeywordListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchKeywordListServiceGetPost()`

```php
searchKeywordListServiceGetPost($search_keyword_list_service_selector): \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceGetResponse
```



<div lang=\"ja\">サーチキーワードリストを取得します。</div> <div lang=\"en\">Retrieces the search keyeord list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\SearchKeywordListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_keyword_list_service_selector = new \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSelector(); // \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSelector

try {
    $result = $apiInstance->searchKeywordListServiceGetPost($search_keyword_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchKeywordListServiceApi->searchKeywordListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_keyword_list_service_selector** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSelector**](../Model/SearchKeywordListServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceGetResponse**](../Model/SearchKeywordListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchKeywordListServiceRemovePost()`

```php
searchKeywordListServiceRemovePost($search_keyword_list_service_operation): \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse
```



<div lang=\"ja\">サーチキーワードリストを削除します。</div> <div lang=\"en\">Removes the search keyword list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\SearchKeywordListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_keyword_list_service_operation = new \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation

try {
    $result = $apiInstance->searchKeywordListServiceRemovePost($search_keyword_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchKeywordListServiceApi->searchKeywordListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_keyword_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation**](../Model/SearchKeywordListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse**](../Model/SearchKeywordListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchKeywordListServiceSetPost()`

```php
searchKeywordListServiceSetPost($search_keyword_list_service_operation): \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse
```



<div lang=\"ja\">変更対象のサーチキーワードリストを設定します。</div> <div lang=\"en\">Set the search keyword list to be updated.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\SearchKeywordListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_keyword_list_service_operation = new \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation

try {
    $result = $apiInstance->searchKeywordListServiceSetPost($search_keyword_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchKeywordListServiceApi->searchKeywordListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_keyword_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceOperation**](../Model/SearchKeywordListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceMutateResponse**](../Model/SearchKeywordListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
