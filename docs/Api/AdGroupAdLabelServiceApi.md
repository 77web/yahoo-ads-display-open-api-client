# OpenAPI\Client\AdGroupAdLabelServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdLabelServiceAddPost()**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceAddPost) | **POST** /AdGroupAdLabelService/add | 
[**adGroupAdLabelServiceRemovePost()**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceRemovePost) | **POST** /AdGroupAdLabelService/remove | 


## `adGroupAdLabelServiceAddPost()`

```php
adGroupAdLabelServiceAddPost($ad_group_ad_label_service_operation): \OpenAPI\Client\Model\AdGroupAdLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルと広告の紐付けを登録します。</div> <div lang=\"en\">Add informations of related ad and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_label_service_operation = new \OpenAPI\Client\Model\AdGroupAdLabelServiceOperation(); // \OpenAPI\Client\Model\AdGroupAdLabelServiceOperation

try {
    $result = $apiInstance->adGroupAdLabelServiceAddPost($ad_group_ad_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_label_service_operation** | [**\OpenAPI\Client\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adGroupAdLabelServiceRemovePost()`

```php
adGroupAdLabelServiceRemovePost($ad_group_ad_label_service_operation): \OpenAPI\Client\Model\AdGroupAdLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルと広告グループの紐付けを削除します。</div> <div lang=\"en\">Remove informations of related ad and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_label_service_operation = new \OpenAPI\Client\Model\AdGroupAdLabelServiceOperation(); // \OpenAPI\Client\Model\AdGroupAdLabelServiceOperation

try {
    $result = $apiInstance->adGroupAdLabelServiceRemovePost($ad_group_ad_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_label_service_operation** | [**\OpenAPI\Client\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
