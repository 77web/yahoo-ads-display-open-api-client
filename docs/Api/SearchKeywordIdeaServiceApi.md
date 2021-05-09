# YahooAdsDisplayApi\Client\SearchKeywordIdeaServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchKeywordIdeaServiceGetPost()**](SearchKeywordIdeaServiceApi.md#searchKeywordIdeaServiceGetPost) | **POST** /SearchKeywordIdeaService/get | 


## `searchKeywordIdeaServiceGetPost()`

```php
searchKeywordIdeaServiceGetPost($search_keyword_idea_service_selector): \YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceGetResponse
```



<div lang=\"ja\">サーチターゲティング対象キーワードを取得します。</div> <div lang=\"en\">Retrieves the keyword for seach targeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\SearchKeywordIdeaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_keyword_idea_service_selector = new \YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceSelector(); // \YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceSelector

try {
    $result = $apiInstance->searchKeywordIdeaServiceGetPost($search_keyword_idea_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchKeywordIdeaServiceApi->searchKeywordIdeaServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_keyword_idea_service_selector** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceSelector**](../Model/SearchKeywordIdeaServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceGetResponse**](../Model/SearchKeywordIdeaServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
