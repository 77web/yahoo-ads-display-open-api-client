# YahooAdsDisplayApi\Client\GuaranteedReservationServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**guaranteedReservationServiceAddPost()**](GuaranteedReservationServiceApi.md#guaranteedReservationServiceAddPost) | **POST** /GuaranteedReservationService/add | 


## `guaranteedReservationServiceAddPost()`

```php
guaranteedReservationServiceAddPost($guaranteed_reservation_service_operation): \YahooAdsDisplayApi\Client\Model\GuaranteedReservationServiceMutateResponse
```



<div lang=\"ja\">シミュレーション結果に基づいて配信を予約します。予約を確定すると、シミュレーション時に指定した条件で予約型のキャンペーン、予約型の広告グループが自動的に作成されます。</div> <div lang=\"en\">Reserves the delivery based on simulation result. If the reservation is confirmed, guaranteed campaign or guaranteed ad group will be automatically created based on the specified condition during simulation.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsDisplayApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsDisplayApi\Client\Api\GuaranteedReservationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guaranteed_reservation_service_operation = new \YahooAdsDisplayApi\Client\Model\GuaranteedReservationServiceOperation(); // \YahooAdsDisplayApi\Client\Model\GuaranteedReservationServiceOperation

try {
    $result = $apiInstance->guaranteedReservationServiceAddPost($guaranteed_reservation_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuaranteedReservationServiceApi->guaranteedReservationServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guaranteed_reservation_service_operation** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedReservationServiceOperation**](../Model/GuaranteedReservationServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsDisplayApi\Client\Model\GuaranteedReservationServiceMutateResponse**](../Model/GuaranteedReservationServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
