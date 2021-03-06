# # AdGroupAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**ad** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceAd**](AdGroupAdServiceAd.md) |  | [optional]
**ad_group_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**ad_group_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループ名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告IDです。&lt;br&gt; このフィールドは、ADD時は無視され、SETおよびREMOVE時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad ID.&lt;br&gt; This field will be ignored in ADD operation, and will be required in SET and REMOVE operation. &lt;/div&gt; | [optional]
**ad_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告名です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad name.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**ad_style** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceAdStyle**](AdGroupAdServiceAdStyle.md) |  | [optional]
**approval_status** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceApprovalStatus**](AdGroupAdServiceApprovalStatus.md) |  | [optional]
**bid** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceBid**](AdGroupAdServiceBid.md) |  | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**disapproval_reason_codes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 掲載拒否の理由です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reject reason on editorial review.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**impression_beacon_urls** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; インプレッションビーコンURLです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Impression beacon URL.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**is_remove_beacon_urls** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_third_party_tracking_script_url** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**labels** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceLabel[]**](AdGroupAdServiceLabel.md) |  | [optional]
**media_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; メディアIDです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**third_party_tracking_script_url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 第三者計測スクリプトURLです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Third party tracking script URL.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**third_party_tracking_vendor** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 第三者計測ベンダー（ReadOnly）です。&lt;br&gt; thirdPartyTrackingScriptUrlのドメインに基づく第三者計測ベンダーが設定されます。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Third party tracking vendor (Read only).&lt;br&gt; Third party tracking vendor based on domain of thirdPartyTrackingScriptUrl is set.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**user_status** | [**\YahooAdsDisplayApi\Client\Model\AdGroupAdServiceUserStatus**](AdGroupAdServiceUserStatus.md) |  | [optional]
**created_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;広告が作成された日時です。&lt;br&gt;※フォーマット：yyyyMMdd&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Date of Ad made.&lt;br&gt;* Format: yyyyMMdd&lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
