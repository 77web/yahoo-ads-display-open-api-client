# YahooAdsDisplayApi\Client\GuaranteedCampaignServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedCampaignServiceGetPost()**](GuaranteedCampaignServiceApi.md#guaranteedCampaignServiceGetPost) | **POST** /GuaranteedCampaignService/get | 
[**guaranteedCampaignServiceSetPost()**](GuaranteedCampaignServiceApi.md#guaranteedCampaignServiceSetPost) | **POST** /GuaranteedCampaignService/set | 


## `guaranteedCampaignServiceGetPost()`

```php
guaranteedCampaignServiceGetPost($guaranteed_campaign_service_selector): \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceGetResponse
```



<div lang=\"ja\">予約型のキャンペーンに関する情報を取得します。</div> <div lang=\"en\">Returns the guaranteed campaign information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedCampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_campaign_service_selector = new \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceSelector(); // \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceSelector

try {
    $result = $apiInstance->guaranteedCampaignServiceGetPost($guaranteed_campaign_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedCampaignServiceApi->guaranteedCampaignServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_campaign_service_selector** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceSelector**](../Model/GuaranteedCampaignServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceGetResponse**](../Model/GuaranteedCampaignServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedCampaignServiceSetPost()`

```php
guaranteedCampaignServiceSetPost($guaranteed_campaign_service_operation): \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceMutateResponse
```



<div lang=\"ja\">キャンペーン情報を更新します。</div> <div lang=\"en\">Updates campaign information. </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedCampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_campaign_service_operation = new \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceOperation(); // \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceOperation

try {
    $result = $apiInstance->guaranteedCampaignServiceSetPost($guaranteed_campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedCampaignServiceApi->guaranteedCampaignServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_campaign_service_operation** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceOperation**](../Model/GuaranteedCampaignServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceMutateResponse**](../Model/GuaranteedCampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
