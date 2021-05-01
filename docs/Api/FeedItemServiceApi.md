# OpenAPI\Client\FeedItemServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedItemServiceSetPost()**](FeedItemServiceApi.md#feedItemServiceSetPost) | **POST** /FeedItemService/set | 


## `feedItemServiceSetPost()`

```php
feedItemServiceSetPost($feed_item_service_operation): \OpenAPI\Client\Model\FeedItemServiceMutateResponse
```



<div lang=\"ja\">FeedItemServiceは商品情報の操作を提供します。</div> <div lang=\"en\">FeedItemService provides the operation about item information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_operation = new \OpenAPI\Client\Model\FeedItemServiceOperation(); // \OpenAPI\Client\Model\FeedItemServiceOperation

try {
    $result = $apiInstance->feedItemServiceSetPost($feed_item_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_operation** | [**\OpenAPI\Client\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
