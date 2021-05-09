# # CampaignServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Account ID&lt;/div&gt; |
**campaign_goal_filter_type** | [**\YahooAdsDisplayApi\Client\Model\CampaignServiceGoalFilterType**](CampaignServiceGoalFilterType.md) |  | [optional]
**campaign_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : キャンペーンID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Campaign ID&lt;/div&gt; | [optional]
**campaign_type** | [**\YahooAdsDisplayApi\Client\Model\CampaignServiceType**](CampaignServiceType.md) |  | [optional]
**contains_label_id_flg** | **bool** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ラベルID取得フラグ&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Flag of contains label ID&lt;/div&gt; | [optional]
**feed_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : フィードID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Feed ID&lt;/div&gt; | [optional]
**label_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : ラベルID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Label ID&lt;/div&gt; | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**user_statuses** | [**\YahooAdsDisplayApi\Client\Model\CampaignServiceUserStatus[]**](CampaignServiceUserStatus.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : 取得範囲&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Delivery status of user settings&lt;/div&gt; | [optional]
**created_date_range** | [**\YahooAdsDisplayApi\Client\Model\CampaignServiceCreatedDateRange**](CampaignServiceCreatedDateRange.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
