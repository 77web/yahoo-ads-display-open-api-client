# YahooAdsDisplayApi\Client\LabelServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelServiceAddPost()**](LabelServiceApi.md#labelServiceAddPost) | **POST** /LabelService/add | 
[**labelServiceGetPost()**](LabelServiceApi.md#labelServiceGetPost) | **POST** /LabelService/get | 
[**labelServiceRemovePost()**](LabelServiceApi.md#labelServiceRemovePost) | **POST** /LabelService/remove | 
[**labelServiceSetPost()**](LabelServiceApi.md#labelServiceSetPost) | **POST** /LabelService/set | 


## `labelServiceAddPost()`

```php
labelServiceAddPost($label_service_operation): \YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse
```



<div lang=\"ja\">ラベルを追加します。</div> <div lang=\"en\">Add label information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsDisplayApi\Client\Model\LabelServiceOperation(); // \YahooAdsDisplayApi\Client\Model\LabelServiceOperation

try {
    $result = $apiInstance->labelServiceAddPost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsDisplayApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `labelServiceGetPost()`

```php
labelServiceGetPost($label_service_selector): \YahooAdsDisplayApi\Client\Model\LabelServiceGetResponse
```



<div lang=\"ja\">ラベルに関する情報を取得します。</div> <div lang=\"en\">Gets information related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_selector = new \YahooAdsDisplayApi\Client\Model\LabelServiceSelector(); // \YahooAdsDisplayApi\Client\Model\LabelServiceSelector

try {
    $result = $apiInstance->labelServiceGetPost($label_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_selector** | [**\YahooAdsDisplayApi\Client\Model\LabelServiceSelector**](../Model/LabelServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\LabelServiceGetResponse**](../Model/LabelServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `labelServiceRemovePost()`

```php
labelServiceRemovePost($label_service_operation): \YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse
```



<div lang=\"ja\">ラベルを削除します。</div> <div lang=\"en\">Removes the inforamtion related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsDisplayApi\Client\Model\LabelServiceOperation(); // \YahooAdsDisplayApi\Client\Model\LabelServiceOperation

try {
    $result = $apiInstance->labelServiceRemovePost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsDisplayApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `labelServiceSetPost()`

```php
labelServiceSetPost($label_service_operation): \YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse
```



<div lang=\"ja\">ラベルを更新します。</div> <div lang=\"en\">Updates the information related to labels.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsDisplayApi\Client\Model\LabelServiceOperation(); // \YahooAdsDisplayApi\Client\Model\LabelServiceOperation

try {
    $result = $apiInstance->labelServiceSetPost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsDisplayApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
