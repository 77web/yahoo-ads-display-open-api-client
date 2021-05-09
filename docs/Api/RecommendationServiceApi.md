# YahooAdsDisplayApi\Client\RecommendationServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**recommendationServiceGetPost()**](RecommendationServiceApi.md#recommendationServiceGetPost) | **POST** /RecommendationService/get | 


## `recommendationServiceGetPost()`

```php
recommendationServiceGetPost($recommendation_service_selector): \YahooAdsDisplayApi\Client\Model\RecommendationServiceGetResponse
```



<div lang=\"ja\">最適化提案の情報を取得します。</div> <div lang=\"en\">Gets Recommendations information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\RecommendationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommendation_service_selector = new \YahooAdsDisplayApi\Client\Model\RecommendationServiceSelector(); // \YahooAdsDisplayApi\Client\Model\RecommendationServiceSelector

try {
    $result = $apiInstance->recommendationServiceGetPost($recommendation_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationServiceApi->recommendationServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommendation_service_selector** | [**\YahooAdsDisplayApi\Client\Model\RecommendationServiceSelector**](../Model/RecommendationServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\RecommendationServiceGetResponse**](../Model/RecommendationServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
