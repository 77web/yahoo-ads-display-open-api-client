# YahooAdsDisplayApi\Client\AccountServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountServiceGetPost()**](AccountServiceApi.md#accountServiceGetPost) | **POST** /AccountService/get | 
[**accountServiceSetPost()**](AccountServiceApi.md#accountServiceSetPost) | **POST** /AccountService/set | 


## `accountServiceGetPost()`

```php
accountServiceGetPost($account_service_selector): \YahooAdsDisplayApi\Client\Model\AccountServiceGetResponse
```



<div lang=\"ja\">アカウントの情報を取得します。</div> <div lang=\"en\">Acquires account information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_service_selector = new \YahooAdsDisplayApi\Client\Model\AccountServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AccountServiceSelector

try {
    $result = $apiInstance->accountServiceGetPost($account_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AccountServiceSelector**](../Model/AccountServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AccountServiceGetResponse**](../Model/AccountServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountServiceSetPost()`

```php
accountServiceSetPost($account_service_operation): \YahooAdsDisplayApi\Client\Model\AccountServiceMutateResponse
```



<div lang=\"ja\">アカウントの情報を操作します。</div> <div lang=\"en\">Operates account information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_service_operation = new \YahooAdsDisplayApi\Client\Model\AccountServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AccountServiceOperation

try {
    $result = $apiInstance->accountServiceSetPost($account_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AccountServiceOperation**](../Model/AccountServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AccountServiceMutateResponse**](../Model/AccountServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
