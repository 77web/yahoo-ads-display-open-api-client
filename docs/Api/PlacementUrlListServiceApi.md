# YahooAdsDisplayApi\Client\PlacementUrlListServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**placementUrlListServiceAddPost()**](PlacementUrlListServiceApi.md#placementUrlListServiceAddPost) | **POST** /PlacementUrlListService/add | 
[**placementUrlListServiceGetPost()**](PlacementUrlListServiceApi.md#placementUrlListServiceGetPost) | **POST** /PlacementUrlListService/get | 
[**placementUrlListServiceRemovePost()**](PlacementUrlListServiceApi.md#placementUrlListServiceRemovePost) | **POST** /PlacementUrlListService/remove | 
[**placementUrlListServiceSetPost()**](PlacementUrlListServiceApi.md#placementUrlListServiceSetPost) | **POST** /PlacementUrlListService/set | 


## `placementUrlListServiceAddPost()`

```php
placementUrlListServiceAddPost($placement_url_list_service_operation): \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse
```



<div lang=\"ja\">プレイスメントURLリストを追加します。</div> <div lang=\"en\">Adds placement URL list information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\PlacementUrlListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placement_url_list_service_operation = new \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation

try {
    $result = $apiInstance->placementUrlListServiceAddPost($placement_url_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementUrlListServiceApi->placementUrlListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **placement_url_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation**](../Model/PlacementUrlListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse**](../Model/PlacementUrlListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placementUrlListServiceGetPost()`

```php
placementUrlListServiceGetPost($placement_url_list_service_selector): \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceGetResponse
```



<div lang=\"ja\">プレイスメントURLリストを取得します。</div> <div lang=\"en\">Gets information related to placement URL lists.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\PlacementUrlListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placement_url_list_service_selector = new \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceSelector(); // \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceSelector

try {
    $result = $apiInstance->placementUrlListServiceGetPost($placement_url_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementUrlListServiceApi->placementUrlListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **placement_url_list_service_selector** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceSelector**](../Model/PlacementUrlListServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceGetResponse**](../Model/PlacementUrlListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placementUrlListServiceRemovePost()`

```php
placementUrlListServiceRemovePost($placement_url_list_service_operation): \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse
```



<div lang=\"ja\">プレイスメントURLリストを削除します。</div> <div lang=\"en\">Removes the inforamtion related to placement URL lists.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\PlacementUrlListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placement_url_list_service_operation = new \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation

try {
    $result = $apiInstance->placementUrlListServiceRemovePost($placement_url_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementUrlListServiceApi->placementUrlListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **placement_url_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation**](../Model/PlacementUrlListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse**](../Model/PlacementUrlListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placementUrlListServiceSetPost()`

```php
placementUrlListServiceSetPost($placement_url_list_service_operation): \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse
```



<div lang=\"ja\">プレイスメントURLリストを更新します。</div> <div lang=\"en\">Updates the information related to placement URL lists.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\PlacementUrlListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placement_url_list_service_operation = new \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation(); // \YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation

try {
    $result = $apiInstance->placementUrlListServiceSetPost($placement_url_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementUrlListServiceApi->placementUrlListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **placement_url_list_service_operation** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceOperation**](../Model/PlacementUrlListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\PlacementUrlListServiceMutateResponse**](../Model/PlacementUrlListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
