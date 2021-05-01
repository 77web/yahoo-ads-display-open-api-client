# # AccountManagement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**account_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウント名です。&lt;br&gt;このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account Name.&lt;br&gt;This field is required in ADD operation, and will be optional in SET operation.&lt;/div&gt; | [optional]
**account_payment** | [**\OpenAPI\Client\Model\AccountManagementServicePayment**](AccountManagementServicePayment.md) |  | [optional]
**agency_person_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 代理店担当者名です。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Agency Person Name.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**agency_prefecture_code** | [**\OpenAPI\Client\Model\AccountManagementServicePrefectureCode**](AccountManagementServicePrefectureCode.md) |  | [optional]
**auth_type** | [**\OpenAPI\Client\Model\AccountManagementServiceAuthType**](AccountManagementServiceAuthType.md) |  | [optional]
**auto_tagging_enabled** | [**\OpenAPI\Client\Model\AccountManagementServiceAutoTaggingEnabled**](AccountManagementServiceAutoTaggingEnabled.md) |  | [optional]
**client** | [**\OpenAPI\Client\Model\AccountManagementServiceClient**](AccountManagementServiceClient.md) |  | [optional]
**client_type** | [**\OpenAPI\Client\Model\AccountManagementServiceClientType**](AccountManagementServiceClientType.md) |  | [optional]
**contact_biz_id** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウント管理者のYahoo! JAPANビジネスIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Contact Business ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**delivery_status** | [**\OpenAPI\Client\Model\AccountManagementServiceDeliveryStatus**](AccountManagementServiceDeliveryStatus.md) |  | [optional]
**end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 終了日&lt;br&gt; YYYYMMDD形式で指定 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; End Date&lt;br&gt; YYYYMMDD &lt;/div&gt; | [optional]
**is_test_account** | [**\OpenAPI\Client\Model\AccountManagementServiceIsTestAccount**](AccountManagementServiceIsTestAccount.md) |  | [optional]
**start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 開始日（YYYYMMDD形式）&lt;br&gt; 自動でADD時の日付が登録される。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Start Date&lt;br&gt; YYYYMMDD&lt;br&gt; This field is automatically regisetered in ADD operation &lt;/div&gt; | [optional]
**status** | [**\OpenAPI\Client\Model\AccountManagementServiceStatus**](AccountManagementServiceStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
