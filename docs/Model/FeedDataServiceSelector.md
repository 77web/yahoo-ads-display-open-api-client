# # FeedDataServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID&lt;/div&gt; |
**feed_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;フィードID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedID&lt;/div&gt; | [optional]
**file_upload_date_range** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceFileUploadDateRange**](FeedDataServiceFileUploadDateRange.md) |  | [optional]
**item_list_upload_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アップロードした商品情報ID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Uploaded item list ID.&lt;/div&gt; | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 20]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**upload_statuses** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceFileUploadStatus[]**](FeedDataServiceFileUploadStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
