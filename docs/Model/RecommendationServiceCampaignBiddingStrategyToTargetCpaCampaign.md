# # RecommendationServiceCampaignBiddingStrategyToTargetCpaCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recommendation_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 最適化提案IDです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Recommendation ID.&lt;br&gt; &lt;/div&gt; | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign Name.&lt;br&gt; &lt;/div&gt; | [optional]
**current_budget** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 現在のキャンペーン予算です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Current campaign budget. &lt;/div&gt; | [optional]
**current_campaign_bidding_strategy_type** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 現在のキャンペーン入札戦略タイプです。&lt;br&gt; 現在は\&quot;MAX_CPC\&quot;のみ返却します。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Current campaign bidding strategy type.&lt;br&gt; Currently, only \&quot;MAX_CPC\&quot; will be returned. &lt;/div&gt; | [optional]
**current_max_cpc_bid_value** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 現在のキャンペーン最大入札単価(CPC)です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Current max bid of campaign (CPC). &lt;/div&gt; | [optional]
**recommended_campaign_bidding_strategy_type** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 推奨するキャンペーン入札戦略タイプです。&lt;br&gt; 現在は\&quot;AUTO\&quot;のみ返却します。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Recommended campaign bidding strategy type.&lt;br&gt; Currently, only \&quot;AUTO\&quot; will be returned. &lt;/div&gt; | [optional]
**recommended_target_cpa_bid_value** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 推奨するキャンペーン目標単価(tCPA)です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Recommended target bid of campaign (tCPA). &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
