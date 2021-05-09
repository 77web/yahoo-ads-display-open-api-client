# YahooAdsDisplayApi\Client\RetargetingTagServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retargetingTagServiceAddPost()**](RetargetingTagServiceApi.md#retargetingTagServiceAddPost) | **POST** /RetargetingTagService/add | 
[**retargetingTagServiceGetPost()**](RetargetingTagServiceApi.md#retargetingTagServiceGetPost) | **POST** /RetargetingTagService/get | 


## `retargetingTagServiceAddPost()`

```php
retargetingTagServiceAddPost($retargeting_tag_service_operation): \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse
```



<div lang=\"ja\">サイトリターゲティングのタグに関する情報を作成します。</div> <div lang=\"en\">Create an tag for site retargeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\RetargetingTagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_tag_service_operation = new \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation(); // \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation

try {
    $result = $apiInstance->retargetingTagServiceAddPost($retargeting_tag_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingTagServiceApi->retargetingTagServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_tag_service_operation** | [**\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceOperation**](../Model/RetargetingTagServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceMutateResponse**](../Model/RetargetingTagServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingTagServiceGetPost()`

```php
retargetingTagServiceGetPost($retargeting_tag_service_selector): \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse
```



<div lang=\"ja\">サイトリターゲティングのタグに関する情報の取得を行います。</div> <div lang=\"en\">RetargetingTagService retrieves the site retargeting tag information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\RetargetingTagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_tag_service_selector = new \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector(); // \YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector

try {
    $result = $apiInstance->retargetingTagServiceGetPost($retargeting_tag_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingTagServiceApi->retargetingTagServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_tag_service_selector** | [**\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceSelector**](../Model/RetargetingTagServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\RetargetingTagServiceGetResponse**](../Model/RetargetingTagServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
