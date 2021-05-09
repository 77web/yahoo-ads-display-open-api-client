# YahooAdsDisplayApi\Client\PlacementUrlIdeaServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**placementUrlIdeaServiceGetPost()**](PlacementUrlIdeaServiceApi.md#placementUrlIdeaServiceGetPost) | **POST** /PlacementUrlIdeaService/get | 


## `placementUrlIdeaServiceGetPost()`

```php
placementUrlIdeaServiceGetPost($placement_url_idea_service_selector): \YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceGetResponse
```



<div lang=\"ja\">URL候補を取得します。</div> <div lang=\"en\">Can retrieve candidate URL.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\PlacementUrlIdeaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placement_url_idea_service_selector = new \YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceSelector(); // \YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceSelector

try {
    $result = $apiInstance->placementUrlIdeaServiceGetPost($placement_url_idea_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementUrlIdeaServiceApi->placementUrlIdeaServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **placement_url_idea_service_selector** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceSelector**](../Model/PlacementUrlIdeaServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceGetResponse**](../Model/PlacementUrlIdeaServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
