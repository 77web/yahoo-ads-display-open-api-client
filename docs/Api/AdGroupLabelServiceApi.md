# YahooAdsDisplayApi\Client\AdGroupLabelServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupLabelServiceAddPost()**](AdGroupLabelServiceApi.md#adGroupLabelServiceAddPost) | **POST** /AdGroupLabelService/add | 
[**adGroupLabelServiceRemovePost()**](AdGroupLabelServiceApi.md#adGroupLabelServiceRemovePost) | **POST** /AdGroupLabelService/remove | 


## `adGroupLabelServiceAddPost()`

```php
adGroupLabelServiceAddPost($ad_group_label_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルと広告グループの紐付けを登録します。</div> <div lang=\"en\">Add informations of related ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_label_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation

try {
    $result = $apiInstance->adGroupLabelServiceAddPost($ad_group_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_label_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupLabelServiceRemovePost()`

```php
adGroupLabelServiceRemovePost($ad_group_label_service_operation): \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルと広告グループの紐付けを削除します。</div> <div lang=\"en\">Remove informations of related ad group and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_label_service_operation = new \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation

try {
    $result = $apiInstance->adGroupLabelServiceRemovePost($ad_group_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_label_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
