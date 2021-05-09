# YahooAdsDisplayApi\Client\ReportDefinitionServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportDefinitionServiceAddPost()**](ReportDefinitionServiceApi.md#reportDefinitionServiceAddPost) | **POST** /ReportDefinitionService/add | 
[**reportDefinitionServiceDownloadPost()**](ReportDefinitionServiceApi.md#reportDefinitionServiceDownloadPost) | **POST** /ReportDefinitionService/download | 
[**reportDefinitionServiceGetPost()**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetPost) | **POST** /ReportDefinitionService/get | 
[**reportDefinitionServiceGetReportFieldsPost()**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetReportFieldsPost) | **POST** /ReportDefinitionService/getReportFields | 
[**reportDefinitionServiceRemovePost()**](ReportDefinitionServiceApi.md#reportDefinitionServiceRemovePost) | **POST** /ReportDefinitionService/remove | 


## `reportDefinitionServiceAddPost()`

```php
reportDefinitionServiceAddPost($report_definition_service_operation): \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceMutateResponse
```



<div lang=\"ja\">レポート定義を追加します。</div> <div lang=\"en\">Adds report definitions.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_operation = new \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation(); // \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation

try {
    $result = $apiInstance->reportDefinitionServiceAddPost($report_definition_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_operation** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportDefinitionServiceDownloadPost()`

```php
reportDefinitionServiceDownloadPost($report_definition_service_download_selector): \SplFileObject
```



<div lang=\"ja\">レポート定義に関する情報をダウンロードします。</div> <div lang=\"en\">Downloads the report definition.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_download_selector = new \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDownloadSelector(); // \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDownloadSelector

try {
    $result = $apiInstance->reportDefinitionServiceDownloadPost($report_definition_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_download_selector** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDownloadSelector**](../Model/ReportDefinitionServiceDownloadSelector.md)|  | [optional]

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

## `reportDefinitionServiceGetPost()`

```php
reportDefinitionServiceGetPost($report_definition_service_selector): \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetResponse
```



<div lang=\"ja\">レポート定義に関する情報を取得します。</div> <div lang=\"en\">Get information related to report definition.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_selector = new \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceSelector(); // \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceSelector

try {
    $result = $apiInstance->reportDefinitionServiceGetPost($report_definition_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_selector** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceSelector**](../Model/ReportDefinitionServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetResponse**](../Model/ReportDefinitionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportDefinitionServiceGetReportFieldsPost()`

```php
reportDefinitionServiceGetReportFieldsPost($report_definition_service_get_report_fields): \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetReportFieldsResponse
```



<div lang=\"ja\">レポートタイプに対して使用可能なレポートのフィールドを返します。</div> <div lang=\"en\">Returns the available report fields for a given report type.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_get_report_fields = new \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetReportFields(); // \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetReportFields

try {
    $result = $apiInstance->reportDefinitionServiceGetReportFieldsPost($report_definition_service_get_report_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetReportFieldsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_get_report_fields** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetReportFields**](../Model/ReportDefinitionServiceGetReportFields.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceGetReportFieldsResponse**](../Model/ReportDefinitionServiceGetReportFieldsResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportDefinitionServiceRemovePost()`

```php
reportDefinitionServiceRemovePost($report_definition_service_operation): \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceMutateResponse
```



<div lang=\"ja\">レポート定義を削除します。</div> <div lang=\"en\">Removes the report definition.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_operation = new \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation(); // \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation

try {
    $result = $apiInstance->reportDefinitionServiceRemovePost($report_definition_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_operation** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
