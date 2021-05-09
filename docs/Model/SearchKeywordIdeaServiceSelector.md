# # SearchKeywordIdeaServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyword_frequency** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceKeywordFrequency**](SearchKeywordIdeaServiceKeywordFrequency.md) |  | [optional]
**keyword_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 検索条件：キーワードID&lt;br&gt; ※キーワード検索用&lt;br&gt; ※キーワード、キーワードIDの同時指定はできません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search condition : Keyword ID.&lt;br&gt; *Keyword for searching.&lt;br&gt; *Can not specify Keyword and Keyword ID at the same time. &lt;/div&gt; | [optional]
**keyword_recency** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceKeywordRecency**](SearchKeywordIdeaServiceKeywordRecency.md) |  | [optional]
**keywords** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 検索条件：キーワード&lt;br&gt; ※キーワード提案用&lt;br&gt; ※キーワード、キーワードIDの同時指定はできません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Search condition : Keyword.&lt;br&gt; *Keyword for suggesting.&lt;br&gt; *Can not specify Keyword and Keyword ID at the same time. &lt;/div&gt; | [optional]
**match_type** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceMatchType**](SearchKeywordIdeaServiceMatchType.md) |  | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 1000]
**sort_field** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceSortField**](SearchKeywordIdeaServiceSortField.md) |  | [optional]
**sort_type** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceSortType**](SearchKeywordIdeaServiceSortType.md) |  | [optional]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**availability_status** | [**\YahooAdsDisplayApi\Client\Model\SearchKeywordIdeaServiceAvailabilityStatus**](SearchKeywordIdeaServiceAvailabilityStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
