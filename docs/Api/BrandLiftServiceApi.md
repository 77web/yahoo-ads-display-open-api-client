# YahooAdsDisplayApi\Client\BrandLiftServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**brandLiftServiceGetPost()**](BrandLiftServiceApi.md#brandLiftServiceGetPost) | **POST** /BrandLiftService/get | 


## `brandLiftServiceGetPost()`

```php
brandLiftServiceGetPost($brand_lift_service_selector): \YahooAdsDisplayApi\Client\Model\BrandLiftServiceGetResponse
```



<div lang=\"ja\">ブランドリフト情報を取得します。</div> <div lang=\"en\">Returns BrandLift information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\BrandLiftServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_lift_service_selector = new \YahooAdsDisplayApi\Client\Model\BrandLiftServiceSelector(); // \YahooAdsDisplayApi\Client\Model\BrandLiftServiceSelector

try {
    $result = $apiInstance->brandLiftServiceGetPost($brand_lift_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandLiftServiceApi->brandLiftServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_lift_service_selector** | [**\YahooAdsDisplayApi\Client\Model\BrandLiftServiceSelector**](../Model/BrandLiftServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\BrandLiftServiceGetResponse**](../Model/BrandLiftServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
