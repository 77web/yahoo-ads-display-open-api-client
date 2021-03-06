# # MediaServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The account ID.&lt;/div&gt; |
**approval_statuses** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceApprovalStatus[]**](MediaServiceApprovalStatus.md) |  | [optional]
**media_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;画像IDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The media ID.&lt;/div&gt; | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**user_statuses** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceUserStatus[]**](MediaServiceUserStatus.md) |  | [optional]
**created_date_range** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceCreatedDateRange**](MediaServiceCreatedDateRange.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
