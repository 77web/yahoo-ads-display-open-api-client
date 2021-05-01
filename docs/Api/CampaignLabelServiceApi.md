# OpenAPI\Client\CampaignLabelServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignLabelServiceAddPost()**](CampaignLabelServiceApi.md#campaignLabelServiceAddPost) | **POST** /CampaignLabelService/add | 
[**campaignLabelServiceRemovePost()**](CampaignLabelServiceApi.md#campaignLabelServiceRemovePost) | **POST** /CampaignLabelService/remove | 


## `campaignLabelServiceAddPost()`

```php
campaignLabelServiceAddPost($campaign_label_service_operation): \OpenAPI\Client\Model\CampaignLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルとキャンペーンの紐付けを登録します。</div> <div lang=\"en\">Add informations of related campaign and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_label_service_operation = new \OpenAPI\Client\Model\CampaignLabelServiceOperation(); // \OpenAPI\Client\Model\CampaignLabelServiceOperation

try {
    $result = $apiInstance->campaignLabelServiceAddPost($campaign_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_label_service_operation** | [**\OpenAPI\Client\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignLabelServiceRemovePost()`

```php
campaignLabelServiceRemovePost($campaign_label_service_operation): \OpenAPI\Client\Model\CampaignLabelServiceMutateResponse
```



<div lang=\"ja\">ラベルとキャンペーンの紐付けを削除します。</div> <div lang=\"en\">Remove informations of related campaign and label.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_label_service_operation = new \OpenAPI\Client\Model\CampaignLabelServiceOperation(); // \OpenAPI\Client\Model\CampaignLabelServiceOperation

try {
    $result = $apiInstance->campaignLabelServiceRemovePost($campaign_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_label_service_operation** | [**\OpenAPI\Client\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
