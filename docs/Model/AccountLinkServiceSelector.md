# # AccountLinkServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manager_account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;MCCアカウントIDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;MCC Account ID.&lt;/div&gt; |
**account_statuses** | [**\OpenAPI\Client\Model\AccountLinkServiceAccountStatus[]**](AccountLinkServiceAccountStatus.md) |  | [optional]
**retargeting_list_sharing_enabled** | [**\OpenAPI\Client\Model\AccountLinkServiceRetargetingListSharingEnabled**](AccountLinkServiceRetargetingListSharingEnabled.md) |  | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
