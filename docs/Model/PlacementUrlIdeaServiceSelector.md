# # PlacementUrlIdeaServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyword** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 検索キーワードの配列です。&lt;br&gt; ・URLを検索するためのキーワードです。&lt;br&gt; ・部分一致です。&lt;br&gt; ・スペース区切りでAND検索です。&lt;br&gt; ・最大文字数250です。&lt;br&gt; ・スペース区切りでの単語数は最大10個です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Array of Search keyword.&lt;br&gt; ・Keyword to search the URL&lt;br&gt; ・Broad match&lt;br&gt; ・Search all keywords (AND), separated by spaces&lt;br&gt; ・Maximum of 250 characters&lt;br&gt; ・Maximum of 10 spaces to separate the words &lt;/div&gt; | [optional]
**site_categories** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; カテゴリの配列です。&lt;br&gt; ・URLのカテゴリです。&lt;br&gt; ・完全一致です。&lt;br&gt; ・複数指定でOR検索です。&lt;br&gt; ・TC-SC-xxxxxxで現される規定値です。&lt;br&gt; ・DicitonaryServiceから返ってくるTC-SC-xxxxxxをそのまま指定です。&lt;br&gt; ・最大50件です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Array of categories.&lt;br&gt; ・Category of URL&lt;br&gt; ・Exact match&lt;br&gt; ・Search multiple specific keywords (OR)&lt;br&gt; ・From value: TC-SC-xxxxxx&lt;br&gt; ・Choose the TC-SC-xxxxxx value from DictionaryService&lt;br&gt; ・Maximum of 50 cases &lt;/div&gt; | [optional]
**ad_formats** | [**\YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceAdFormatConditions[]**](PlacementUrlIdeaServiceAdFormatConditions.md) |  | [optional]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
