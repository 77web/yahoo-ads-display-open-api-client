# # GuaranteedCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID. &lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**lifetime_budget** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceLifetimeBudget**](GuaranteedCampaignServiceLifetimeBudget.md) |  | [optional]
**campaign_bidding_strategy** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceCampaignBiddingStrategy**](GuaranteedCampaignServiceCampaignBiddingStrategy.md) |  | [optional]
**campaign_goal** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン目的です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign goal.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドはSET時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in SET operation. &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign Name. &lt;/div&gt; | [optional]
**end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 終了日です。&lt;br&gt; ※フォーマット：yyyyMMdd&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; End date.&lt;br&gt; ∗ Format: yyyyMMdd&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**labels** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceLabel[]**](GuaranteedCampaignServiceLabel.md) |  | [optional]
**serving_status** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceServingStatus**](GuaranteedCampaignServiceServingStatus.md) |  | [optional]
**start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 開始日です。&lt;br&gt; ※フォーマット：yyyyMMdd&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Start date.&lt;br&gt; ∗ Format: yyyyMMdd&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**user_status** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceUserStatus**](GuaranteedCampaignServiceUserStatus.md) |  | [optional]
**viewable_frequency_cap** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceViewableFrequencyCap**](GuaranteedCampaignServiceViewableFrequencyCap.md) |  | [optional]
**guaranteed_simulation_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; シミュレーションIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Simulation ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**notification_email_address** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 連絡先メールアドレスです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Email address to send notifications.&lt;br&gt; &lt;/div&gt; | [optional]
**ad_category_status** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceAdCategoryStatus**](GuaranteedCampaignServiceAdCategoryStatus.md) |  | [optional]
**campaign_canceled_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 予約型のキャンペーンをキャンセルした日時です。&lt;br&gt; ※フォーマット：yyyyMMddHHmmss&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; A date and time which the guaranteed campaign is cancelled.&lt;br&gt; ∗ Format: yyyyMMddHHmmss&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**package** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServicePackage**](GuaranteedCampaignServicePackage.md) |  | [optional]
**brand_tracking** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceBrandTracking**](GuaranteedCampaignServiceBrandTracking.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
