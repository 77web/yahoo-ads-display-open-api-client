# YahooAdsDisplayApi\Client\BalanceServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**balanceServiceGetPost()**](BalanceServiceApi.md#balanceServiceGetPost) | **POST** /BalanceService/get | 


## `balanceServiceGetPost()`

```php
balanceServiceGetPost($balance_service_selector): \YahooAdsDisplayApi\Client\Model\BalanceServiceGetResponse
```



<div lang=\"ja\">予算取得の対象を定義します。</div> <div lang=\"en\">Defines a budget acquisition target.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\BalanceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_service_selector = new \YahooAdsDisplayApi\Client\Model\BalanceServiceSelector(); // \YahooAdsDisplayApi\Client\Model\BalanceServiceSelector

try {
    $result = $apiInstance->balanceServiceGetPost($balance_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceServiceApi->balanceServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_service_selector** | [**\YahooAdsDisplayApi\Client\Model\BalanceServiceSelector**](../Model/BalanceServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\BalanceServiceGetResponse**](../Model/BalanceServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
