# OpenAPI\Client\GuaranteedPreviewServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedPreviewServiceGetPost()**](GuaranteedPreviewServiceApi.md#guaranteedPreviewServiceGetPost) | **POST** /GuaranteedPreviewService/get | 


## `guaranteedPreviewServiceGetPost()`

```php
guaranteedPreviewServiceGetPost($guaranteed_preview_service_selector): \OpenAPI\Client\Model\GuaranteedPreviewServiceGetResponse
```



<div lang=\"ja\">予約型キャンペーンのプレビューに関する情報を取得します。</div> <div lang=\"en\">Returns the preview of guaranteed campaign.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedPreviewServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_preview_service_selector = new \OpenAPI\Client\Model\GuaranteedPreviewServiceSelector(); // \OpenAPI\Client\Model\GuaranteedPreviewServiceSelector

try {
    $result = $apiInstance->guaranteedPreviewServiceGetPost($guaranteed_preview_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedPreviewServiceApi->guaranteedPreviewServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_preview_service_selector** | [**\OpenAPI\Client\Model\GuaranteedPreviewServiceSelector**](../Model/GuaranteedPreviewServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedPreviewServiceGetResponse**](../Model/GuaranteedPreviewServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
