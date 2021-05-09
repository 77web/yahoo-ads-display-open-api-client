# YahooAdsDisplayApi\Client\AccountAdProductServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAdProductServiceGetPost()**](AccountAdProductServiceApi.md#accountAdProductServiceGetPost) | **POST** /AccountAdProductService/get | 


## `accountAdProductServiceGetPost()`

```php
accountAdProductServiceGetPost($account_ad_product_service_selector): \YahooAdsDisplayApi\Client\Model\AccountAdProductServiceGetResponse
```



<div lang=\"ja\">アカウントで利用できる広告掲載方式を取得します。</div> <div lang=\"en\">Gets the ad display method that is available from account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AccountAdProductServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ad_product_service_selector = new \YahooAdsDisplayApi\Client\Model\AccountAdProductServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AccountAdProductServiceSelector

try {
    $result = $apiInstance->accountAdProductServiceGetPost($account_ad_product_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAdProductServiceApi->accountAdProductServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_ad_product_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AccountAdProductServiceSelector**](../Model/AccountAdProductServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AccountAdProductServiceGetResponse**](../Model/AccountAdProductServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
