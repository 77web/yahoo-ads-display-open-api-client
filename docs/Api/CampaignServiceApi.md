# OpenAPI\Client\CampaignServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignServiceAddPost()**](CampaignServiceApi.md#campaignServiceAddPost) | **POST** /CampaignService/add | 
[**campaignServiceGetPost()**](CampaignServiceApi.md#campaignServiceGetPost) | **POST** /CampaignService/get | 
[**campaignServiceRemovePost()**](CampaignServiceApi.md#campaignServiceRemovePost) | **POST** /CampaignService/remove | 
[**campaignServiceSetPost()**](CampaignServiceApi.md#campaignServiceSetPost) | **POST** /CampaignService/set | 


## `campaignServiceAddPost()`

```php
campaignServiceAddPost($campaign_service_operation): \OpenAPI\Client\Model\CampaignServiceMutateResponse
```



<div lang=\"ja\">キャンペーン情報を追加します。</div> <div lang=\"en\">Adds campaign information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \OpenAPI\Client\Model\CampaignServiceOperation(); // \OpenAPI\Client\Model\CampaignServiceOperation

try {
    $result = $apiInstance->campaignServiceAddPost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\OpenAPI\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignServiceGetPost()`

```php
campaignServiceGetPost($campaign_service_selector): \OpenAPI\Client\Model\CampaignServiceGetResponse
```



<div lang=\"ja\">キャンペーン情報を取得します。</div> <div lang=\"en\">Gets information related to campaigns.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_selector = new \OpenAPI\Client\Model\CampaignServiceSelector(); // \OpenAPI\Client\Model\CampaignServiceSelector

try {
    $result = $apiInstance->campaignServiceGetPost($campaign_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_selector** | [**\OpenAPI\Client\Model\CampaignServiceSelector**](../Model/CampaignServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignServiceGetResponse**](../Model/CampaignServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignServiceRemovePost()`

```php
campaignServiceRemovePost($campaign_service_operation): \OpenAPI\Client\Model\CampaignServiceMutateResponse
```



<div lang=\"ja\">キャンペーン情報を削除します。</div> <div lang=\"en\">Deletes campaign information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \OpenAPI\Client\Model\CampaignServiceOperation(); // \OpenAPI\Client\Model\CampaignServiceOperation

try {
    $result = $apiInstance->campaignServiceRemovePost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\OpenAPI\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignServiceSetPost()`

```php
campaignServiceSetPost($campaign_service_operation): \OpenAPI\Client\Model\CampaignServiceMutateResponse
```



<div lang=\"ja\">キャンペーン情報を更新します。</div> <div lang=\"en\">Updates campaign information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \OpenAPI\Client\Model\CampaignServiceOperation(); // \OpenAPI\Client\Model\CampaignServiceOperation

try {
    $result = $apiInstance->campaignServiceSetPost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\OpenAPI\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
