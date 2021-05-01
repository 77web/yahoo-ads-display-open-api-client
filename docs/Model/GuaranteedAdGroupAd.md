# # GuaranteedAdGroupAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceAd**](GuaranteedAdGroupAdServiceAd.md) |  | [optional]
**ad_group_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**ad_group_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループ名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告IDです。&lt;br&gt; このフィールドは、SET時は必須となり、ADD時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad ID.&lt;br&gt; This field is required in SET operation, and will be optional in ADD operation. &lt;/div&gt; | [optional]
**ad_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告名です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad name.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**ad_style** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceAdStyle**](GuaranteedAdGroupAdServiceAdStyle.md) |  | [optional]
**approval_status** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceApprovalStatus**](GuaranteedAdGroupAdServiceApprovalStatus.md) |  | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**disapproval_reason_codes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 掲載拒否の理由です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reject reason on editorial review.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**disapproval_reason_description** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 掲載拒否の理由詳細です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Reject reason details on editorial review.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**impression_beacon_urls** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; インプレッションビーコンURLです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Impression beacon URL.&lt;br&gt; &lt;/div&gt; | [optional]
**is_remove_impression_beacon_urls** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg**](GuaranteedAdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**labels** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceLabel[]**](GuaranteedAdGroupAdServiceLabel.md) |  | [optional]
**media_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; メディアIDです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID.&lt;br&gt; &lt;/div&gt; | [optional]
**third_party_tracking_script_url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 第三者計測スクリプトURLです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Third party tracking script URL.&lt;br&gt; &lt;/div&gt; | [optional]
**is_remove_beacon_urls** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg**](GuaranteedAdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_third_party_tracking_script_url** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg**](GuaranteedAdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**third_party_tracking_vendor** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 第三者計測ベンダー（ReadOnly）です。&lt;br&gt; thirdPartyTrackingScriptUrlのドメインに基づく第三者計測ベンダーが設定されます。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Third party tracking vendor (Read only).&lt;br&gt; Third party tracking vendor based on domain of thirdPartyTrackingScriptUrl is set.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**user_status** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceUserStatus**](GuaranteedAdGroupAdServiceUserStatus.md) |  | [optional]
**landing_page_status** | [**\OpenAPI\Client\Model\GuaranteedAdGroupAdLandingPageStatus**](GuaranteedAdGroupAdLandingPageStatus.md) |  | [optional]
**pre_approval_id** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 事前承認IDです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Pre-approval ID.&lt;br&gt; &lt;/div&gt; | [optional]
**landing_page_update_scheduled_time** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; リンク先更新予定日時です。&lt;br&gt; ※フォーマット：yyyyMMddHHmm&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The scheduled update date and time for the landing page.&lt;br&gt; *format: yyyyMMddHHmm&lt;br&gt; &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
