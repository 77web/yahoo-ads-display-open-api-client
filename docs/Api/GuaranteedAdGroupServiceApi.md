# OpenAPI\Client\GuaranteedAdGroupServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedAdGroupServiceAddPost()**](GuaranteedAdGroupServiceApi.md#guaranteedAdGroupServiceAddPost) | **POST** /GuaranteedAdGroupService/add | 
[**guaranteedAdGroupServiceGetPost()**](GuaranteedAdGroupServiceApi.md#guaranteedAdGroupServiceGetPost) | **POST** /GuaranteedAdGroupService/get | 
[**guaranteedAdGroupServiceSetPost()**](GuaranteedAdGroupServiceApi.md#guaranteedAdGroupServiceSetPost) | **POST** /GuaranteedAdGroupService/set | 


## `guaranteedAdGroupServiceAddPost()`

```php
guaranteedAdGroupServiceAddPost($guaranteed_ad_group_service_operation): \OpenAPI\Client\Model\GuaranteedAdGroupServiceMutateResponse
```



<div lang=\"ja\">予約型の広告グループを追加します。</div> <div lang=\"en\">Adds guaranteed ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_service_operation = new \OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation(); // \OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation

try {
    $result = $apiInstance->guaranteedAdGroupServiceAddPost($guaranteed_ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupServiceApi->guaranteedAdGroupServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_service_operation** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation**](../Model/GuaranteedAdGroupServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupServiceMutateResponse**](../Model/GuaranteedAdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedAdGroupServiceGetPost()`

```php
guaranteedAdGroupServiceGetPost($guaranteed_ad_group_service_selector): \OpenAPI\Client\Model\GuaranteedAdGroupServiceGetResponse
```



<div lang=\"ja\">予約型の広告グループに関する情報を取得します。</div> <div lang=\"en\">Returns the guaranteed ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_service_selector = new \OpenAPI\Client\Model\GuaranteedAdGroupServiceSelector(); // \OpenAPI\Client\Model\GuaranteedAdGroupServiceSelector

try {
    $result = $apiInstance->guaranteedAdGroupServiceGetPost($guaranteed_ad_group_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupServiceApi->guaranteedAdGroupServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_service_selector** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceSelector**](../Model/GuaranteedAdGroupServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupServiceGetResponse**](../Model/GuaranteedAdGroupServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `guaranteedAdGroupServiceSetPost()`

```php
guaranteedAdGroupServiceSetPost($guaranteed_ad_group_service_operation): \OpenAPI\Client\Model\GuaranteedAdGroupServiceMutateResponse
```



<div lang=\"ja\">予約型の広告グループを変更します。</div> <div lang=\"en\">Updates guaranteed ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GuaranteedAdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_ad_group_service_operation = new \OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation(); // \OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation

try {
    $result = $apiInstance->guaranteedAdGroupServiceSetPost($guaranteed_ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedAdGroupServiceApi->guaranteedAdGroupServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_ad_group_service_operation** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceOperation**](../Model/GuaranteedAdGroupServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuaranteedAdGroupServiceMutateResponse**](../Model/GuaranteedAdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
