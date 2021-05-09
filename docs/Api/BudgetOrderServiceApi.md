# YahooAdsDisplayApi\Client\BudgetOrderServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**budgetOrderServiceGetPost()**](BudgetOrderServiceApi.md#budgetOrderServiceGetPost) | **POST** /BudgetOrderService/get | 
[**budgetOrderServiceSetPost()**](BudgetOrderServiceApi.md#budgetOrderServiceSetPost) | **POST** /BudgetOrderService/set | 


## `budgetOrderServiceGetPost()`

```php
budgetOrderServiceGetPost($budget_order_service_selector): \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceGetResponse
```



<div lang=\"ja\">アカウントの予算情報を取得します。</div> <div lang=\"en\">Get budget information for the account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\BudgetOrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_order_service_selector = new \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceSelector(); // \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceSelector

try {
    $result = $apiInstance->budgetOrderServiceGetPost($budget_order_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetOrderServiceApi->budgetOrderServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_order_service_selector** | [**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceSelector**](../Model/BudgetOrderServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceGetResponse**](../Model/BudgetOrderServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `budgetOrderServiceSetPost()`

```php
budgetOrderServiceSetPost($budget_order_service_operation): \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceMutateResponse
```



<div lang=\"ja\">アカウントの予算情報を操作します。</div> <div lang=\"en\">Operates budget information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\BudgetOrderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_order_service_operation = new \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceOperation(); // \YahooAdsDisplayApi\Client\Model\BudgetOrderServiceOperation

try {
    $result = $apiInstance->budgetOrderServiceSetPost($budget_order_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetOrderServiceApi->budgetOrderServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_order_service_operation** | [**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceOperation**](../Model/BudgetOrderServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceMutateResponse**](../Model/BudgetOrderServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
