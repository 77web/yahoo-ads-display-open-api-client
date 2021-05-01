# OpenAPI\Client\SearchLiftServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchLiftServiceGetPost()**](SearchLiftServiceApi.md#searchLiftServiceGetPost) | **POST** /SearchLiftService/get | 


## `searchLiftServiceGetPost()`

```php
searchLiftServiceGetPost($search_lift_service_selector): \OpenAPI\Client\Model\SearchLiftServiceGetResponse
```



<div lang=\"ja\">サーチリフト情報を取得します。</div> <div lang=\"en\">Returns SearchLift information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SearchLiftServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_lift_service_selector = new \OpenAPI\Client\Model\SearchLiftServiceSelector(); // \OpenAPI\Client\Model\SearchLiftServiceSelector

try {
    $result = $apiInstance->searchLiftServiceGetPost($search_lift_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchLiftServiceApi->searchLiftServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_lift_service_selector** | [**\OpenAPI\Client\Model\SearchLiftServiceSelector**](../Model/SearchLiftServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SearchLiftServiceGetResponse**](../Model/SearchLiftServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
