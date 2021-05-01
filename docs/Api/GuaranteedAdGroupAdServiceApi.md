# OpenAPI\Client\GuaranteedAdGroupAdServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedAdGroupAdServiceAddPost()**](GuaranteedAdGroupAdServiceApi.md#guaranteedAdGroupAdServiceAddPost) | **POST** /GuaranteedAdGroupAdService/add | 
[**guaranteedAdGroupAdServiceGetPost()**](GuaranteedAdGroupAdServiceApi.md#guaranteedAdGroupAdServiceGetPost) | **POST** /GuaranteedAdGroupAdService/get | 
[**guaranteedAdGroupAdServiceSetPost()**](GuaranteedAdGroupAdServiceApi.md#guaranteedAdGroupAdServiceSetPost) | **POST** /GuaranteedAdGroupAdService/set | 


## `guaranteedAdGroupAdServiceAddPost()`

```php
guaranteedAdGroupAdServiceAddPost($guaranteed_ad_group_ad_service_operation): \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceMutateResponse
```



<div lang=\"ja\">予約型の広告を追加します。</div> <div lang=\"en\">Adds guaranteed ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_ad_service_operation = new \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation(); // \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation

try {
    $result = $apiInstance->guaranteedAdGroupAdServiceAddPost($guaranteed_ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupAdServiceApi->guaranteedAdGroupAdServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_ad_service_operation** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation**](../Model/GuaranteedAdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceMutateResponse**](../Model/GuaranteedAdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedAdGroupAdServiceGetPost()`

```php
guaranteedAdGroupAdServiceGetPost($guaranteed_ad_group_ad_service_selector): \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceGetResponse
```



<div lang=\"ja\">予約型の広告に関する情報を取得します。</div> <div lang=\"en\">Returns the guaranteed ad information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_ad_service_selector = new \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceSelector(); // \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceSelector

try {
    $result = $apiInstance->guaranteedAdGroupAdServiceGetPost($guaranteed_ad_group_ad_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupAdServiceApi->guaranteedAdGroupAdServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_ad_service_selector** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceSelector**](../Model/GuaranteedAdGroupAdServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceGetResponse**](../Model/GuaranteedAdGroupAdServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedAdGroupAdServiceSetPost()`

```php
guaranteedAdGroupAdServiceSetPost($guaranteed_ad_group_ad_service_operation): \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceMutateResponse
```



<div lang=\"ja\">予約型の広告を変更します。</div> <div lang=\"en\">Updates guaranteed ad.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_ad_service_operation = new \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation(); // \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation

try {
    $result = $apiInstance->guaranteedAdGroupAdServiceSetPost($guaranteed_ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupAdServiceApi->guaranteedAdGroupAdServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_ad_service_operation** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceOperation**](../Model/GuaranteedAdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceMutateResponse**](../Model/GuaranteedAdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
