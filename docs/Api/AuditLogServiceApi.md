# YahooAdsDisplayApi\Client\AuditLogServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditLogServiceAddPost()**](AuditLogServiceApi.md#auditLogServiceAddPost) | **POST** /AuditLogService/add | 
[**auditLogServiceDownloadPost()**](AuditLogServiceApi.md#auditLogServiceDownloadPost) | **POST** /AuditLogService/download | 
[**auditLogServiceGetPost()**](AuditLogServiceApi.md#auditLogServiceGetPost) | **POST** /AuditLogService/get | 


## `auditLogServiceAddPost()`

```php
auditLogServiceAddPost($audit_log_service_operation): \YahooAdsDisplayApi\Client\Model\AuditLogServiceMutateResponse
```



<div lang=\"ja\">操作履歴ファイルをダウンロードするためのジョブを登録します。</div> <div lang=\"en\">Add a job to download operation history data file.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_operation = new \YahooAdsDisplayApi\Client\Model\AuditLogServiceOperation(); // \YahooAdsDisplayApi\Client\Model\AuditLogServiceOperation

try {
    $result = $apiInstance->auditLogServiceAddPost($audit_log_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_operation** | [**\YahooAdsDisplayApi\Client\Model\AuditLogServiceOperation**](../Model/AuditLogServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AuditLogServiceMutateResponse**](../Model/AuditLogServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `auditLogServiceDownloadPost()`

```php
auditLogServiceDownloadPost($audit_log_service_download_selector): \SplFileObject
```



<div lang=\"ja\">操作履歴をダウンロードします。</div> <div lang=\"en\">Download the data of user operation history.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_download_selector = new \YahooAdsDisplayApi\Client\Model\AuditLogServiceDownloadSelector(); // \YahooAdsDisplayApi\Client\Model\AuditLogServiceDownloadSelector

try {
    $result = $apiInstance->auditLogServiceDownloadPost($audit_log_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_download_selector** | [**\YahooAdsDisplayApi\Client\Model\AuditLogServiceDownloadSelector**](../Model/AuditLogServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `auditLogServiceGetPost()`

```php
auditLogServiceGetPost($audit_log_service_selector): \YahooAdsDisplayApi\Client\Model\AuditLogServiceGetResponse
```



<div lang=\"ja\">操作履歴のダウンロード実行結果情報を取得します。</div> <div lang=\"en\">Retrieves the download result information of operation history</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_selector = new \YahooAdsDisplayApi\Client\Model\AuditLogServiceSelector(); // \YahooAdsDisplayApi\Client\Model\AuditLogServiceSelector

try {
    $result = $apiInstance->auditLogServiceGetPost($audit_log_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_selector** | [**\YahooAdsDisplayApi\Client\Model\AuditLogServiceSelector**](../Model/AuditLogServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\AuditLogServiceGetResponse**](../Model/AuditLogServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
