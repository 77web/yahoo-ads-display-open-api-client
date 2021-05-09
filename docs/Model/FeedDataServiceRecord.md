# # FeedDataServiceRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; | [optional]
**complete_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;取り込み完了日(yyyyMMdd)&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Complete date.&lt;br&gt; Format: yyyyMMdd &lt;/div&gt; | [optional]
**error_count** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;不備がある商品情報の件数&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Number of item list with error.&lt;/div&gt; | [optional]
**error_rate** | **double** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;エラー率&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Error rate.&lt;/div&gt; | [optional]
**feed_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Feedを識別するId&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed ID.&lt;/div&gt; | [optional]
**file_upload_src** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceFileUploadSrc**](FeedDataServiceFileUploadSrc.md) |  | [optional]
**file_upload_status** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceFileUploadStatus**](FeedDataServiceFileUploadStatus.md) |  | [optional]
**is_debug** | **bool** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;trueはデバッグモードでの実行を意味します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;true&amp;#34; means to run in debug mode.&lt;/div&gt; | [optional]
**item_list_upload_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アップロードした商品情報を識別するID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Uploaded item list ID.&lt;/div&gt; | [optional]
**item_list_upload_type** | [**\YahooAdsDisplayApi\Client\Model\FeedDataServiceItemListUploadType**](FeedDataServiceItemListUploadType.md) |  | [optional]
**upload_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アップロード日(yyyyMMdd)&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Upload date.&lt;br&gt; Format: yyyyMMdd &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
