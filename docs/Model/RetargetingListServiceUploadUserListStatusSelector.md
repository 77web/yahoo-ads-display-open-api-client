# # RetargetingListServiceUploadUserListStatusSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
**target_list_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;カスタムオーディエンスのターゲットリストIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Target list ID of custom audience.&lt;/div&gt; |
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 10]
**upload_job_ids** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アップロードジョブIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Upload job ID.&lt;/div&gt; | [optional]
**job_statues** | [**\YahooAdsDisplayApi\Client\Model\RetargetingListServiceJobStatus[]**](RetargetingListServiceJobStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
