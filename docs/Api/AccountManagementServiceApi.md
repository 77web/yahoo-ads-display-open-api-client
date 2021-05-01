# OpenAPI\Client\AccountManagementServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountManagementServiceAddPost()**](AccountManagementServiceApi.md#accountManagementServiceAddPost) | **POST** /AccountManagementService/add | 
[**accountManagementServiceGetPost()**](AccountManagementServiceApi.md#accountManagementServiceGetPost) | **POST** /AccountManagementService/get | 
[**accountManagementServiceSetPost()**](AccountManagementServiceApi.md#accountManagementServiceSetPost) | **POST** /AccountManagementService/set | 


## `accountManagementServiceAddPost()`

```php
accountManagementServiceAddPost($account_management_service_operation): \OpenAPI\Client\Model\AccountManagementServiceMutateResponse
```



<div lang=\"ja\">後請求のアカウントに関する情報を追加します。</div><div lang=\"en\">Adds the information related to the invoice account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountManagementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_management_service_operation = new \OpenAPI\Client\Model\AccountManagementServiceOperation(); // \OpenAPI\Client\Model\AccountManagementServiceOperation

try {
    $result = $apiInstance->accountManagementServiceAddPost($account_management_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementServiceApi->accountManagementServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_management_service_operation** | [**\OpenAPI\Client\Model\AccountManagementServiceOperation**](../Model/AccountManagementServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountManagementServiceMutateResponse**](../Model/AccountManagementServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountManagementServiceGetPost()`

```php
accountManagementServiceGetPost($account_management_service_selector): \OpenAPI\Client\Model\AccountManagementServiceGetResponse
```



<div lang=\"ja\">アカウントに関する情報を取得します。契約状況などのフィルタ条件を設定することが可能です。</div><div lang=\"en\">Returns the account information. Enable to set the filter condition, such as the account Type.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountManagementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_management_service_selector = new \OpenAPI\Client\Model\AccountManagementServiceSelector(); // \OpenAPI\Client\Model\AccountManagementServiceSelector

try {
    $result = $apiInstance->accountManagementServiceGetPost($account_management_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementServiceApi->accountManagementServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_management_service_selector** | [**\OpenAPI\Client\Model\AccountManagementServiceSelector**](../Model/AccountManagementServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountManagementServiceGetResponse**](../Model/AccountManagementServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountManagementServiceSetPost()`

```php
accountManagementServiceSetPost($account_management_service_operation): \OpenAPI\Client\Model\AccountManagementServiceMutateResponse
```



<div lang=\"ja\">アカウントに関する情報を更新します。</div><div lang=\"en\">Updates the information related to the account.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountManagementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_management_service_operation = new \OpenAPI\Client\Model\AccountManagementServiceOperation(); // \OpenAPI\Client\Model\AccountManagementServiceOperation

try {
    $result = $apiInstance->accountManagementServiceSetPost($account_management_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementServiceApi->accountManagementServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_management_service_operation** | [**\OpenAPI\Client\Model\AccountManagementServiceOperation**](../Model/AccountManagementServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountManagementServiceMutateResponse**](../Model/AccountManagementServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
