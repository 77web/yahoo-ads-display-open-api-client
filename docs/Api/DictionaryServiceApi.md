# YahooAdsDisplayApi\Client\DictionaryServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**dictionaryServiceGetAudienceCategoryPost()**](DictionaryServiceApi.md#dictionaryServiceGetAudienceCategoryPost) | **POST** /DictionaryService/getAudienceCategory | 
[**dictionaryServiceGetBusinessCategoryPost()**](DictionaryServiceApi.md#dictionaryServiceGetBusinessCategoryPost) | **POST** /DictionaryService/getBusinessCategory | 
[**dictionaryServiceGetDisapprovalReasonPost()**](DictionaryServiceApi.md#dictionaryServiceGetDisapprovalReasonPost) | **POST** /DictionaryService/getDisapprovalReason | 
[**dictionaryServiceGetFeedItemGoogleProductCategoryPost()**](DictionaryServiceApi.md#dictionaryServiceGetFeedItemGoogleProductCategoryPost) | **POST** /DictionaryService/getFeedItemGoogleProductCategory | 
[**dictionaryServiceGetGeographicLocationPost()**](DictionaryServiceApi.md#dictionaryServiceGetGeographicLocationPost) | **POST** /DictionaryService/getGeographicLocation | 
[**dictionaryServiceGetInterestCategoryPost()**](DictionaryServiceApi.md#dictionaryServiceGetInterestCategoryPost) | **POST** /DictionaryService/getInterestCategory | 
[**dictionaryServiceGetMediaAdFormatPost()**](DictionaryServiceApi.md#dictionaryServiceGetMediaAdFormatPost) | **POST** /DictionaryService/getMediaAdFormat | 
[**dictionaryServiceGetOsVersionPost()**](DictionaryServiceApi.md#dictionaryServiceGetOsVersionPost) | **POST** /DictionaryService/getOsVersion | 
[**dictionaryServiceGetSiteCategoryPost()**](DictionaryServiceApi.md#dictionaryServiceGetSiteCategoryPost) | **POST** /DictionaryService/getSiteCategory | 
[**dictionaryServiceGetThirdPartyTrackingDomainPost()**](DictionaryServiceApi.md#dictionaryServiceGetThirdPartyTrackingDomainPost) | **POST** /DictionaryService/getThirdPartyTrackingDomain | 


## `dictionaryServiceGetAudienceCategoryPost()`

```php
dictionaryServiceGetAudienceCategoryPost($dictionary_service_category_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetAudienceCategoryResponse
```



<div lang=\"ja\">オーディエンスカテゴリーリストを取得します。</div> <div lang=\"en\">Obtains list of audience category.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_category_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector

try {
    $result = $apiInstance->dictionaryServiceGetAudienceCategoryPost($dictionary_service_category_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetAudienceCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_category_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector**](../Model/DictionaryServiceCategorySelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetAudienceCategoryResponse**](../Model/DictionaryServiceGetAudienceCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetBusinessCategoryPost()`

```php
dictionaryServiceGetBusinessCategoryPost($body): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetBusinessCategoryResponse
```



<div lang=\"ja\">ビジネスカテゴリ一覧を取得します。</div> <div lang=\"en\">Retrieves the list of bussiness category.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object

try {
    $result = $apiInstance->dictionaryServiceGetBusinessCategoryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetBusinessCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetBusinessCategoryResponse**](../Model/DictionaryServiceGetBusinessCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetDisapprovalReasonPost()`

```php
dictionaryServiceGetDisapprovalReasonPost($dictionary_service_disapproval_reason_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetDisapprovalReasonResponse
```



<div lang=\"ja\">EditorialReasonと推奨する対応方法の一覧を取得します。</div> <div lang=\"en\">Retrieves the list of response from recommendation with EditorialReason.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_disapproval_reason_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceDisapprovalReasonSelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceDisapprovalReasonSelector

try {
    $result = $apiInstance->dictionaryServiceGetDisapprovalReasonPost($dictionary_service_disapproval_reason_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetDisapprovalReasonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_disapproval_reason_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceDisapprovalReasonSelector**](../Model/DictionaryServiceDisapprovalReasonSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetDisapprovalReasonResponse**](../Model/DictionaryServiceGetDisapprovalReasonResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetFeedItemGoogleProductCategoryPost()`

```php
dictionaryServiceGetFeedItemGoogleProductCategoryPost($dictionary_service_feed_item_google_product_category_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetFeedItemGoogleProductCategoryResponse
```



<div lang=\"ja\">Feedの商品情報で設定可能なGoogle商品カテゴリを取得します。</div> <div lang=\"en\">Obtains Google product category that can be specified for Feed item information.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_feed_item_google_product_category_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceFeedItemGoogleProductCategorySelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceFeedItemGoogleProductCategorySelector

try {
    $result = $apiInstance->dictionaryServiceGetFeedItemGoogleProductCategoryPost($dictionary_service_feed_item_google_product_category_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetFeedItemGoogleProductCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_feed_item_google_product_category_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceFeedItemGoogleProductCategorySelector**](../Model/DictionaryServiceFeedItemGoogleProductCategorySelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetFeedItemGoogleProductCategoryResponse**](../Model/DictionaryServiceGetFeedItemGoogleProductCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetGeographicLocationPost()`

```php
dictionaryServiceGetGeographicLocationPost($dictionary_service_geographic_location_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetGeographicLocationResponse
```



<div lang=\"ja\">地域情報の一覧を取得します。</div> <div lang=\"en\">Retrieves the information list of geo targeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_geographic_location_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceGeographicLocationSelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceGeographicLocationSelector

try {
    $result = $apiInstance->dictionaryServiceGetGeographicLocationPost($dictionary_service_geographic_location_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetGeographicLocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_geographic_location_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGeographicLocationSelector**](../Model/DictionaryServiceGeographicLocationSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetGeographicLocationResponse**](../Model/DictionaryServiceGetGeographicLocationResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetInterestCategoryPost()`

```php
dictionaryServiceGetInterestCategoryPost($dictionary_service_category_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetInterestCategoryResponse
```



<div lang=\"ja\">インタレストカテゴリーリストを取得します。</div> <div lang=\"en\">Retrieves the list of interest category.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_category_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector

try {
    $result = $apiInstance->dictionaryServiceGetInterestCategoryPost($dictionary_service_category_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetInterestCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_category_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector**](../Model/DictionaryServiceCategorySelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetInterestCategoryResponse**](../Model/DictionaryServiceGetInterestCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetMediaAdFormatPost()`

```php
dictionaryServiceGetMediaAdFormatPost($body): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetMediaAdFormatResponse
```



<div lang=\"ja\">入稿可能な画像の形式(MediaAdFormat)を照会します。</div> <div lang=\"en\">Queries acceptable format (MediaAdFormat) of ad creatives.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object

try {
    $result = $apiInstance->dictionaryServiceGetMediaAdFormatPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetMediaAdFormatPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetMediaAdFormatResponse**](../Model/DictionaryServiceGetMediaAdFormatResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetOsVersionPost()`

```php
dictionaryServiceGetOsVersionPost($dictionary_service_os_version_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetOsVersionResponse
```



<div lang=\"ja\">OSのバージョンを取得します。</div> <div lang=\"en\">Retrieves the version of OS.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_os_version_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceOsVersionSelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceOsVersionSelector

try {
    $result = $apiInstance->dictionaryServiceGetOsVersionPost($dictionary_service_os_version_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetOsVersionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_os_version_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceOsVersionSelector**](../Model/DictionaryServiceOsVersionSelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetOsVersionResponse**](../Model/DictionaryServiceGetOsVersionResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetSiteCategoryPost()`

```php
dictionaryServiceGetSiteCategoryPost($dictionary_service_category_selector): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetSiteCategoryResponse
```



<div lang=\"ja\">サイトトカテゴリーリストを取得します。</div> <div lang=\"en\">Retrieves the list of site category.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_category_selector = new \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector(); // \YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector

try {
    $result = $apiInstance->dictionaryServiceGetSiteCategoryPost($dictionary_service_category_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetSiteCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_category_selector** | [**\YahooAdsDisplayApi\Client\Model\DictionaryServiceCategorySelector**](../Model/DictionaryServiceCategorySelector.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetSiteCategoryResponse**](../Model/DictionaryServiceGetSiteCategoryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dictionaryServiceGetThirdPartyTrackingDomainPost()`

```php
dictionaryServiceGetThirdPartyTrackingDomainPost($body): \YahooAdsDisplayApi\Client\Model\DictionaryServiceGetThirdPartyTrackingDomainResponse
```



<div lang=\"ja\">第三者計測スクリプトURLで指定可能なドメインとベンダー名を照会します。</div> <div lang=\"en\">Indicates domain and vendor name that can be specified for the third party scripting URL.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object

try {
    $result = $apiInstance->dictionaryServiceGetThirdPartyTrackingDomainPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetThirdPartyTrackingDomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\DictionaryServiceGetThirdPartyTrackingDomainResponse**](../Model/DictionaryServiceGetThirdPartyTrackingDomainResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
