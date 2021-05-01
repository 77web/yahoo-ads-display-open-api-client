# OpenAPI\Client\CampaignMigrationServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignMigrationServiceDownloadErrorFilePost()**](CampaignMigrationServiceApi.md#campaignMigrationServiceDownloadErrorFilePost) | **POST** /CampaignMigrationService/downloadErrorFile | 
[**campaignMigrationServiceDownloadOriginalFilePost()**](CampaignMigrationServiceApi.md#campaignMigrationServiceDownloadOriginalFilePost) | **POST** /CampaignMigrationService/downloadOriginalFile | 
[**campaignMigrationServiceDownloadPost()**](CampaignMigrationServiceApi.md#campaignMigrationServiceDownloadPost) | **POST** /CampaignMigrationService/download | 
[**campaignMigrationServiceGetPost()**](CampaignMigrationServiceApi.md#campaignMigrationServiceGetPost) | **POST** /CampaignMigrationService/get | 
[**campaignMigrationServiceUploadPost()**](CampaignMigrationServiceApi.md#campaignMigrationServiceUploadPost) | **POST** /CampaignMigrationService/upload | 


## `campaignMigrationServiceDownloadErrorFilePost()`

```php
campaignMigrationServiceDownloadErrorFilePost($campaign_migration_service_download_file_selector): \SplFileObject
```



<div lang=\"ja\">エラーが発生したキャンペーン一覧のcsvファイルをダウンロードします。</div> <div lang=\"en\">Download the campaign list csv file with error.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignMigrationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_migration_service_download_file_selector = new \OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector(); // \OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector

try {
    $result = $apiInstance->campaignMigrationServiceDownloadErrorFilePost($campaign_migration_service_download_file_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignMigrationServiceApi->campaignMigrationServiceDownloadErrorFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_migration_service_download_file_selector** | [**\OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector**](../Model/CampaignMigrationServiceDownloadFileSelector.md)|  | [optional]

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

## `campaignMigrationServiceDownloadOriginalFilePost()`

```php
campaignMigrationServiceDownloadOriginalFilePost($campaign_migration_service_download_file_selector): \SplFileObject
```



<div lang=\"ja\">アップロードしたオリジナルcsvファイルをダウンロードします。</div> <div lang=\"en\">Download the uploaded original csv file.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignMigrationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_migration_service_download_file_selector = new \OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector(); // \OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector

try {
    $result = $apiInstance->campaignMigrationServiceDownloadOriginalFilePost($campaign_migration_service_download_file_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignMigrationServiceApi->campaignMigrationServiceDownloadOriginalFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_migration_service_download_file_selector** | [**\OpenAPI\Client\Model\CampaignMigrationServiceDownloadFileSelector**](../Model/CampaignMigrationServiceDownloadFileSelector.md)|  | [optional]

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

## `campaignMigrationServiceDownloadPost()`

```php
campaignMigrationServiceDownloadPost($campaign_migration_service_download_selector): \SplFileObject
```



<div lang=\"ja\">マイグレーション対象のキャンペーン一覧をダウンロードします。</div> <div lang=\"en\">Download the list of campaigns targeted for migration.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignMigrationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_migration_service_download_selector = new \OpenAPI\Client\Model\CampaignMigrationServiceDownloadSelector(); // \OpenAPI\Client\Model\CampaignMigrationServiceDownloadSelector

try {
    $result = $apiInstance->campaignMigrationServiceDownloadPost($campaign_migration_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignMigrationServiceApi->campaignMigrationServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_migration_service_download_selector** | [**\OpenAPI\Client\Model\CampaignMigrationServiceDownloadSelector**](../Model/CampaignMigrationServiceDownloadSelector.md)|  | [optional]

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

## `campaignMigrationServiceGetPost()`

```php
campaignMigrationServiceGetPost($campaign_migration_service_selector): \OpenAPI\Client\Model\CampaignMigrationServiceGetResponse
```



<div lang=\"ja\">マイグレーション状況を取得します。</div> <div lang=\"en\">Get the migration status.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignMigrationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_migration_service_selector = new \OpenAPI\Client\Model\CampaignMigrationServiceSelector(); // \OpenAPI\Client\Model\CampaignMigrationServiceSelector

try {
    $result = $apiInstance->campaignMigrationServiceGetPost($campaign_migration_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignMigrationServiceApi->campaignMigrationServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_migration_service_selector** | [**\OpenAPI\Client\Model\CampaignMigrationServiceSelector**](../Model/CampaignMigrationServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignMigrationServiceGetResponse**](../Model/CampaignMigrationServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `campaignMigrationServiceUploadPost()`

```php
campaignMigrationServiceUploadPost($account_id, $file): \OpenAPI\Client\Model\CampaignMigrationServiceUploadResponse
```



<div lang=\"ja\">マイグレーション用csvファイルのアップロード処理を実施します。</div> <div lang=\"en\">Upload csv files for migration.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CampaignMigrationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->campaignMigrationServiceUploadPost($account_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignMigrationServiceApi->campaignMigrationServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CampaignMigrationServiceUploadResponse**](../Model/CampaignMigrationServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
