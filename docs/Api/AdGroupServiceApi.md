# OpenAPI\Client\AdGroupServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupServiceAddPost()**](AdGroupServiceApi.md#adGroupServiceAddPost) | **POST** /AdGroupService/add | 
[**adGroupServiceGetPost()**](AdGroupServiceApi.md#adGroupServiceGetPost) | **POST** /AdGroupService/get | 
[**adGroupServiceRemovePost()**](AdGroupServiceApi.md#adGroupServiceRemovePost) | **POST** /AdGroupService/remove | 
[**adGroupServiceSetPost()**](AdGroupServiceApi.md#adGroupServiceSetPost) | **POST** /AdGroupService/set | 


## `adGroupServiceAddPost()`

```php
adGroupServiceAddPost($ad_group_service_operation): \OpenAPI\Client\Model\AdGroupServiceMutateResponse
```



<div lang=\"ja\">広告グループを追加します。</div> <div lang=\"en\">Add ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \OpenAPI\Client\Model\AdGroupServiceOperation(); // \OpenAPI\Client\Model\AdGroupServiceOperation

try {
    $result = $apiInstance->adGroupServiceAddPost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\OpenAPI\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupServiceGetPost()`

```php
adGroupServiceGetPost($ad_group_service_selector): \OpenAPI\Client\Model\AdGroupServiceGetResponse
```



<div lang=\"ja\">広告グループの情報を取得します。</div> <div lang=\"en\">Retrieves ad group information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_selector = new \OpenAPI\Client\Model\AdGroupServiceSelector(); // \OpenAPI\Client\Model\AdGroupServiceSelector

try {
    $result = $apiInstance->adGroupServiceGetPost($ad_group_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_selector** | [**\OpenAPI\Client\Model\AdGroupServiceSelector**](../Model/AdGroupServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupServiceGetResponse**](../Model/AdGroupServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupServiceRemovePost()`

```php
adGroupServiceRemovePost($ad_group_service_operation): \OpenAPI\Client\Model\AdGroupServiceMutateResponse
```



<div lang=\"ja\">広告グループを削除します。</div> <div lang=\"en\">Removes ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \OpenAPI\Client\Model\AdGroupServiceOperation(); // \OpenAPI\Client\Model\AdGroupServiceOperation

try {
    $result = $apiInstance->adGroupServiceRemovePost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\OpenAPI\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupServiceSetPost()`

```php
adGroupServiceSetPost($ad_group_service_operation): \OpenAPI\Client\Model\AdGroupServiceMutateResponse
```



<div lang=\"ja\">広告グループを変更します。</div> <div lang=\"en\">Updates information of ad group.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \OpenAPI\Client\Model\AdGroupServiceOperation(); // \OpenAPI\Client\Model\AdGroupServiceOperation

try {
    $result = $apiInstance->adGroupServiceSetPost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\OpenAPI\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
