# YahooAdsDisplayApi\Client\AccountLinkServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountLinkServiceGetPost()**](AccountLinkServiceApi.md#accountLinkServiceGetPost) | **POST** /AccountLinkService/get | 


## `accountLinkServiceGetPost()`

```php
accountLinkServiceGetPost($account_link_service_selector): \YahooAdsDisplayApi\Client\Model\AccountLinkServiceGetResponse
```



<div lang=\"ja\">アカウントリンクの情報を取得します。<br> 既に承認済みのアカウントリンク情報のみが取得できます。</div> <div lang=\"en\">Get account link information.<br> Only account link information that has already been approved can be obtained.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AccountLinkServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_link_service_selector = new \YahooAdsDisplayApi\Client\Model\AccountLinkServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AccountLinkServiceSelector

try {
    $result = $apiInstance->accountLinkServiceGetPost($account_link_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountLinkServiceApi->accountLinkServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_link_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AccountLinkServiceSelector**](../Model/AccountLinkServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AccountLinkServiceGetResponse**](../Model/AccountLinkServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
