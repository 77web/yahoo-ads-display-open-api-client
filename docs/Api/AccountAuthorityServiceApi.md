# OpenAPI\Client\AccountAuthorityServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAuthorityServiceGetPost()**](AccountAuthorityServiceApi.md#accountAuthorityServiceGetPost) | **POST** /AccountAuthorityService/get | 


## `accountAuthorityServiceGetPost()`

```php
accountAuthorityServiceGetPost($account_authority_service_selector): \OpenAPI\Client\Model\AccountAuthorityServiceGetResponse
```



<div lang=\"ja\">アカウント権限の情報を取得します。</div> <div lang=\"en\">Acquires account authority information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountAuthorityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_authority_service_selector = new \OpenAPI\Client\Model\AccountAuthorityServiceSelector(); // \OpenAPI\Client\Model\AccountAuthorityServiceSelector

try {
    $result = $apiInstance->accountAuthorityServiceGetPost($account_authority_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAuthorityServiceApi->accountAuthorityServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_authority_service_selector** | [**\OpenAPI\Client\Model\AccountAuthorityServiceSelector**](../Model/AccountAuthorityServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountAuthorityServiceGetResponse**](../Model/AccountAuthorityServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
