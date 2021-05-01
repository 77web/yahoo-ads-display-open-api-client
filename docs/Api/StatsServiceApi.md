# OpenAPI\Client\StatsServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**statsServiceGetPost()**](StatsServiceApi.md#statsServiceGetPost) | **POST** /StatsService/get | 


## `statsServiceGetPost()`

```php
statsServiceGetPost($stats_service_selector): \OpenAPI\Client\Model\StatsServiceGetResponse
```



<div lang=\"ja\">キャンペーン、広告グループ、広告、画像、動画の単位で統計情報の取得を行います。</div> <div lang=\"en\">Retrieves the stats information of each campaign, ad group, ad, image and video.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StatsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stats_service_selector = new \OpenAPI\Client\Model\StatsServiceSelector(); // \OpenAPI\Client\Model\StatsServiceSelector

try {
    $result = $apiInstance->statsServiceGetPost($stats_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsServiceApi->statsServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stats_service_selector** | [**\OpenAPI\Client\Model\StatsServiceSelector**](../Model/StatsServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\StatsServiceGetResponse**](../Model/StatsServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
