# OpenAPI\Client\RetargetingListServiceApi

All URIs are relative to https://ads-display.yahooapis.jp/api/v4.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retargetingListServiceAddPost()**](RetargetingListServiceApi.md#retargetingListServiceAddPost) | **POST** /RetargetingListService/add | 
[**retargetingListServiceGetPost()**](RetargetingListServiceApi.md#retargetingListServiceGetPost) | **POST** /RetargetingListService/get | 
[**retargetingListServiceGetUploadUserListStatusPost()**](RetargetingListServiceApi.md#retargetingListServiceGetUploadUserListStatusPost) | **POST** /RetargetingListService/getUploadUserListStatus | 
[**retargetingListServiceRemovePost()**](RetargetingListServiceApi.md#retargetingListServiceRemovePost) | **POST** /RetargetingListService/remove | 
[**retargetingListServiceSetPost()**](RetargetingListServiceApi.md#retargetingListServiceSetPost) | **POST** /RetargetingListService/set | 
[**retargetingListServiceUploadUserListPost()**](RetargetingListServiceApi.md#retargetingListServiceUploadUserListPost) | **POST** /RetargetingListService/uploadUserList | 


## `retargetingListServiceAddPost()`

```php
retargetingListServiceAddPost($retargeting_list_service_operation): \OpenAPI\Client\Model\RetargetingListServiceMutateResponse
```



<div lang=\"ja\">サイトリターゲティングのターゲットリストを作成します。</div> <div lang=\"en\">Create the target list for site retargeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_operation = new \OpenAPI\Client\Model\RetargetingListServiceOperation(); // \OpenAPI\Client\Model\RetargetingListServiceOperation

try {
    $result = $apiInstance->retargetingListServiceAddPost($retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_operation** | [**\OpenAPI\Client\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingListServiceGetPost()`

```php
retargetingListServiceGetPost($retargeting_list_service_selector): \OpenAPI\Client\Model\RetargetingListServiceGetResponse
```



<div lang=\"ja\">サイトリターゲティングのターゲットリストを取得します。</div> <div lang=\"en\">Retrieve target list information for site retargeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_selector = new \OpenAPI\Client\Model\RetargetingListServiceSelector(); // \OpenAPI\Client\Model\RetargetingListServiceSelector

try {
    $result = $apiInstance->retargetingListServiceGetPost($retargeting_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_selector** | [**\OpenAPI\Client\Model\RetargetingListServiceSelector**](../Model/RetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceGetResponse**](../Model/RetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingListServiceGetUploadUserListStatusPost()`

```php
retargetingListServiceGetUploadUserListStatusPost($retargeting_list_service_upload_user_list_status_selector): \OpenAPI\Client\Model\RetargetingListServiceGetUploadUserListResponse
```



<div lang=\"ja\">ユーザリストのアップロード状況を取得します。</div> <div lang=\"en\">This acquires the upload status of the user list.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_upload_user_list_status_selector = new \OpenAPI\Client\Model\RetargetingListServiceUploadUserListStatusSelector(); // \OpenAPI\Client\Model\RetargetingListServiceUploadUserListStatusSelector

try {
    $result = $apiInstance->retargetingListServiceGetUploadUserListStatusPost($retargeting_list_service_upload_user_list_status_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetUploadUserListStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_upload_user_list_status_selector** | [**\OpenAPI\Client\Model\RetargetingListServiceUploadUserListStatusSelector**](../Model/RetargetingListServiceUploadUserListStatusSelector.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceGetUploadUserListResponse**](../Model/RetargetingListServiceGetUploadUserListResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingListServiceRemovePost()`

```php
retargetingListServiceRemovePost($retargeting_list_service_operation): \OpenAPI\Client\Model\RetargetingListServiceMutateResponse
```



<div lang=\"ja\">サイトリターゲティングのターゲットリストを削除します。</div> <div lang=\"en\">Deletes target list for site retargeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_operation = new \OpenAPI\Client\Model\RetargetingListServiceOperation(); // \OpenAPI\Client\Model\RetargetingListServiceOperation

try {
    $result = $apiInstance->retargetingListServiceRemovePost($retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_operation** | [**\OpenAPI\Client\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingListServiceSetPost()`

```php
retargetingListServiceSetPost($retargeting_list_service_operation): \OpenAPI\Client\Model\RetargetingListServiceMutateResponse
```



<div lang=\"ja\">サイトリターゲティングのターゲットリストを更新します。</div> <div lang=\"en\">Updates target list for site retargeting.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_operation = new \OpenAPI\Client\Model\RetargetingListServiceOperation(); // \OpenAPI\Client\Model\RetargetingListServiceOperation

try {
    $result = $apiInstance->retargetingListServiceSetPost($retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_operation** | [**\OpenAPI\Client\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retargetingListServiceUploadUserListPost()`

```php
retargetingListServiceUploadUserListPost($account_id, $retargeting_tag_id, $target_list_id, $upload_type, $compress_type, $custom_user_id, $body): \OpenAPI\Client\Model\RetargetingListServiceUploadUserListResponse
```



<div lang=\"ja\">   カスタムリストのユーザリストファイルをアップロードします。<br/>   アップロードリクエストでは以下を指定します。   <ul>     <li>・Content-Type: application/octet-stream（非圧縮形式の場合はtext/plain指定も可能）</li>     <li>・Content-Length: アップロード対象のファイルのバイト数</li>     <li>・Request body: アップロードするユーザーリストのファイル本体</li>   </ul>   Transfer-encoding: chunkedを指定してのアップロードには対応していません。<br/>   また、アップロードするファイルの制限は下記の通りです。   <ul>     <li>・UTF8、BOMなし、正規化形式</li>     <li>・ユーザーIDごとに改行</li>     <li>・改行コードLF</li>     <li>・ファイルサイズ上限1GB(1,073,741,824 byte)</li>   </ul> </div> <div lang=\"en\">   Upload the user list file for the custom list.<br/>   Specify the following in the upload request.   <ul>     <li>* Content-Type: application/octet-stream (text/plain can also be specified for uncompressed format)</li>     <li>* Content-Length: Number of bytes in the file to be uploaded</li>     <li>* Request body: File body of the user list to upload</li>   </ul>   Uploading with chunked specified for Transfer-encoding is not supported.<br/>   The following is the file upload limit.   <ul>     <li>* UTF8, no BOM, canonicalized form.</li>     <li>* Line break for each user ID</li>     <li>* Line feed code LF</li>     <li>* File size upper limit 1GB(1,073,741,824 byte)</li>   </ul> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
$retargeting_tag_id = 'retargeting_tag_id_example'; // string | <div lang=\"ja\">サイトリターゲティングのタグIDです。</div> <div lang=\"en\">Tag ID for site retargeting.</div>
$target_list_id = 56; // int | <div lang=\"ja\">カスタムオーディエンスのターゲットリストIDです。</div> <div lang=\"en\">Target list ID for the custom audience.</div>
$upload_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType(); // \OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType | <div lang=\"ja\">   RetargetingListServiceUploadUserListUploadTypeは、アップロードする方法の種類を表します。<br>   ハッシュ化メールアドレスの詳細については、<a href=\"https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan=ja&aid=69234\">ヘルプ</a>をご参照ください。 </div> <div lang=\"en\">   RetargetingListServiceUploadUserListUploadType displays kind of upload method.<br>   Refer to <a href=\"https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan=en&aid=37704\">Help page</a> for more details about hashed Email Address. </div> </div> <dl class=term>   <dt class=\"term__item\"><code>IDFA</dt>   <dd class=\"term__desc\"><span lang=\"ja\">iOS端末用広告識別子です。</span><span lang=\"en\">Ad identifier for iOS devices.</span></dd>   <dt class=\"term__item\"><code>AAID</dt>   <dd class=\"term__desc\"><span lang=\"ja\">Android端末用広告識別子です。</span><span lang=\"en\">Ad identifier for Android devices.</span></dd>   <dt class=\"term__item\"><code>MAIL_ADDRESS</dt>   <dd class=\"term__desc\"><span lang=\"ja\">ハッシュ化メールアドレスです。</span><span lang=\"en\">Hashed email address.</span></dd>   <dt class=\"term__item\"><code>UNKNOWN</dt>   <dd class=\"term__desc\"><span lang=\"ja\">未知の値です。</span><span lang=\"en\">Unknown Value</span></dd> </dl>
$compress_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RetargetingListServiceUploadUserListCompressType(); // \OpenAPI\Client\Model\RetargetingListServiceUploadUserListCompressType | <div lang=\"ja\">RetargetingListServiceUploadUserListCompressTypeは、アップロードするファイルの圧縮形式を表します。</div> <div lang=\"en\">RetargetingListServiceUploadUserListCompressType displays kind of compress type of upload file.</div> <dl class=term>   <dt class=\"term__item\"><code>NONE</dt>   <dd class=\"term__desc\"><span lang=\"ja\">非圧縮形式です。</span><span lang=\"en\">Uncompressed format.</span></dd>   <dt class=\"term__item\"><code>ZIP</dt>   <dd class=\"term__desc\"><span lang=\"ja\">ZIP形式です。</span><span lang=\"en\">ZIP format. </span></dd>   <dt class=\"term__item\"><code>GZIP</dt>   <dd class=\"term__desc\"><span lang=\"ja\">GZIP形式です。</span><span lang=\"en\">GZIP format.</span></dd>   <dt class=\"term__item\"><code>UNKNOWN</dt>   <dd class=\"term__desc\"><span lang=\"ja\">未知の値です。</span><span lang=\"en\">Unknown Value</span></dd> </dl>
$custom_user_id = 'custom_user_id_example'; // string | <div lang=\"ja\">   customUserIdの指定は、一部の利用者向けの限定機能となります。 </div> <div lang=\"en\">   Specifying customUserId is a limited function for some users. </div>
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->retargetingListServiceUploadUserListPost($account_id, $retargeting_tag_id, $target_list_id, $upload_type, $compress_type, $custom_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceUploadUserListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
 **retargeting_tag_id** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;サイトリターゲティングのタグIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Tag ID for site retargeting.&lt;/div&gt; |
 **target_list_id** | **int**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;カスタムオーディエンスのターゲットリストIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Target list ID for the custom audience.&lt;/div&gt; |
 **upload_type** | [**\OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType**](../Model/.md)| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   RetargetingListServiceUploadUserListUploadTypeは、アップロードする方法の種類を表します。&lt;br&gt;   ハッシュ化メールアドレスの詳細については、&lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan&#x3D;ja&amp;aid&#x3D;69234\&quot;&gt;ヘルプ&lt;/a&gt;をご参照ください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   RetargetingListServiceUploadUserListUploadType displays kind of upload method.&lt;br&gt;   Refer to &lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/display/articledetail?lan&#x3D;en&amp;aid&#x3D;37704\&quot;&gt;Help page&lt;/a&gt; for more details about hashed Email Address. &lt;/div&gt; &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;IDFA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;iOS端末用広告識別子です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad identifier for iOS devices.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;AAID&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;Android端末用広告識別子です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad identifier for Android devices.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;MAIL_ADDRESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ハッシュ化メールアドレスです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Hashed email address.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt; |
 **compress_type** | [**\OpenAPI\Client\Model\RetargetingListServiceUploadUserListCompressType**](../Model/.md)| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListServiceUploadUserListCompressTypeは、アップロードするファイルの圧縮形式を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingListServiceUploadUserListCompressType displays kind of compress type of upload file.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;NONE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;非圧縮形式です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Uncompressed format.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;ZIP&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ZIP形式です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;ZIP format. &lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;GZIP&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;GZIP形式です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;GZIP format.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;&lt;code&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt; |
 **custom_user_id** | **string**| &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   customUserIdの指定は、一部の利用者向けの限定機能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Specifying customUserId is a limited function for some users. &lt;/div&gt; | [optional]
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RetargetingListServiceUploadUserListResponse**](../Model/RetargetingListServiceUploadUserListResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
