# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; SET時、このフィールドは必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in SET operation. &lt;/div&gt; | [optional]
**account_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウント名です。&lt;br&gt; SET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account name.&lt;br&gt; This field is optional in SET operation. &lt;/div&gt; | [optional]
**account_status** | [**\OpenAPI\Client\Model\AccountServiceStatus**](AccountServiceStatus.md) |  | [optional]
**account_type** | [**\OpenAPI\Client\Model\AccountServiceType**](AccountServiceType.md) |  | [optional]
**auth_type** | [**\OpenAPI\Client\Model\AccountServiceAuthType**](AccountServiceAuthType.md) |  | [optional]
**auto_tagging_enabled** | [**\OpenAPI\Client\Model\AccountServiceAutoTaggingEnabled**](AccountServiceAutoTaggingEnabled.md) |  | [optional]
**delivery_status** | [**\OpenAPI\Client\Model\AccountServiceDeliveryStatus**](AccountServiceDeliveryStatus.md) |  | [optional]
**is_test_account** | [**\OpenAPI\Client\Model\AccountServiceIsTestAccount**](AccountServiceIsTestAccount.md) |  | [optional]
**start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 掲載開始日です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Start date of ad serving.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 掲載終了日です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; End date of ad serving.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**is_manager_account** | [**\OpenAPI\Client\Model\AccountServiceIsManagerAccount**](AccountServiceIsManagerAccount.md) |  | [optional]
**contact_biz_id** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウント管理者のYahoo! JAPANビジネスIDです。&lt;br&gt; MCCアカウントの場合、このフィールドは返却されず、リクエストの際も無視されます。&lt;br&gt; テストアカウントの場合、このフィールドは更新できません。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Contact Business ID.&lt;br&gt; If isManagerAccount is \&quot;TRUE\&quot;, this field will not be returned and will be ignored on request.&lt;br&gt; If isTestAccount is \&quot;TRUE\&quot;, this field cannot be updated.&lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
