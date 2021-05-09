# # VideoServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
**approval_statuses** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceApprovalStatus[]**](VideoServiceApprovalStatus.md) |  | [optional]
**media_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;メディアIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Media ID.&lt;/div&gt; | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**process_statuses** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceProcessStatus[]**](VideoServiceProcessStatus.md) |  | [optional]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**user_statuses** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceUserStatus[]**](VideoServiceUserStatus.md) |  | [optional]
**created_date_range** | [**\YahooAdsDisplayApi\Client\Model\VideoServiceCreatedDateRange**](VideoServiceCreatedDateRange.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
