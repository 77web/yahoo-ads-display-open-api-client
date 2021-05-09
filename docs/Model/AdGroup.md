# # AdGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**ad_group_bidding_strategy** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceBiddingStrategy**](AdGroupServiceBiddingStrategy.md) |  | [optional]
**ad_group_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループIDです。&lt;br&gt; このフィールドは、ADD時は無視され、SETおよびREMOVE時は必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; This field will be ignored in ADD operation, and will be required in SET and REMOVE operation. &lt;/div&gt; | [optional]
**ad_group_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループ名です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group name.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**bid** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceBid**](AdGroupServiceBid.md) |  | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**conversion_optimizer** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceConversionOptimizer**](AdGroupServiceConversionOptimizer.md) |  | [optional]
**device** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceDeviceType[]**](AdGroupServiceDeviceType.md) |  | [optional]
**device_app** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceDeviceAppType[]**](AdGroupServiceDeviceAppType.md) |  | [optional]
**device_os** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceDeviceOsType[]**](AdGroupServiceDeviceOsType.md) |  | [optional]
**device_os_version** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; OSバージョンです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt; ※設定を解除する場合は、NONEを設定してください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; OS version.&lt;br&gt; ∗To cancel the setting, specify &amp;#34;NONE&amp;#34;.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**dynamic_image_extensions** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceDynamicImageExtensions**](AdGroupServiceDynamicImageExtensions.md) |  | [optional]
**feed_set_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 商品セットIDです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。&lt;br&gt; *ADD時に未指定の場合、デフォルトセットを自動で関連付けます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Feed set ID.&lt;br&gt; This field is optional in ADD and SET operation.&lt;br&gt; * If feedSetId is not specified in ADD operation, the default set is associated automatically. &lt;/div&gt; | [optional]
**labels** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceLabel[]**](AdGroupServiceLabel.md) |  | [optional]
**smart_device_carriers** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceSmartDeviceCarrier[]**](AdGroupServiceSmartDeviceCarrier.md) |  | [optional]
**user_status** | [**\YahooAdsDisplayApi\Client\Model\AdGroupServiceUserStatus**](AdGroupServiceUserStatus.md) |  | [optional]
**created_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告グループが作成された日時です。&lt;br&gt;※フォーマット：yyyyMMdd&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Date of Ad Group made.&lt;br&gt;* Format: yyyyMMdd&lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
