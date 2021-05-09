# YahooAdsDisplayApi\Client\FeedFtpRequestServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedFtpRequestServiceAddPost()**](FeedFtpRequestServiceApi.md#feedFtpRequestServiceAddPost) | **POST** /FeedFtpRequestService/add | 


## `feedFtpRequestServiceAddPost()`

```php
feedFtpRequestServiceAddPost($feed_ftp_request_service_operation): \YahooAdsDisplayApi\Client\Model\FeedFtpRequestServiceMutateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\FeedFtpRequestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_ftp_request_service_operation = new \YahooAdsDisplayApi\Client\Model\FeedFtpRequestServiceOperation(); // \YahooAdsDisplayApi\Client\Model\FeedFtpRequestServiceOperation

try {
    $result = $apiInstance->feedFtpRequestServiceAddPost($feed_ftp_request_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedFtpRequestServiceApi->feedFtpRequestServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_ftp_request_service_operation** | [**\YahooAdsDisplayApi\Client\Model\FeedFtpRequestServiceOperation**](../Model/FeedFtpRequestServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\FeedFtpRequestServiceMutateResponse**](../Model/FeedFtpRequestServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
