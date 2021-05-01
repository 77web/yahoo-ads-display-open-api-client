# # AccountManagementServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account IDs.&lt;/div&gt; | [optional]
**account_statuses** | [**\OpenAPI\Client\Model\AccountManagementServiceStatus[]**](AccountManagementServiceStatus.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントステータス&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account Statuses.&lt;/div&gt; | [optional]
**account_types** | [**\OpenAPI\Client\Model\AccountManagementServicePaymentType[]**](AccountManagementServicePaymentType.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件：アカウントの料金支払い種別&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account Payment Types.&lt;/div&gt; | [optional]
**auth_type** | [**\OpenAPI\Client\Model\AccountManagementServiceAuthType**](AccountManagementServiceAuthType.md) |  | [optional]
**include_test_account** | [**\OpenAPI\Client\Model\AccountManagementServiceIncludeTestAccount**](AccountManagementServiceIncludeTestAccount.md) |  | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 200]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
