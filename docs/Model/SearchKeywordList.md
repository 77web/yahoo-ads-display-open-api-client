# # SearchKeywordList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**delivery_status** | [**\OpenAPI\Client\Model\SearchKeywordListServiceDeliveryStatus**](SearchKeywordListServiceDeliveryStatus.md) |  | [optional]
**keyword_frequency** | [**\OpenAPI\Client\Model\SearchKeywordListServiceKeywordFrequency**](SearchKeywordListServiceKeywordFrequency.md) |  | [optional]
**keyword_recency** | [**\OpenAPI\Client\Model\SearchKeywordListServiceKeywordRecency**](SearchKeywordListServiceKeywordRecency.md) |  | [optional]
**search_keyword** | [**\OpenAPI\Client\Model\SearchKeywordListServiceSearchKeyword[]**](SearchKeywordListServiceSearchKeyword.md) |  | [optional]
**search_keyword_list_description** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; サーチキーワードリストの説明文です。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Description of Search keyword list.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**is_remove_search_keyword_list_description** | [**\OpenAPI\Client\Model\SearchKeywordListServiceIsRemoveFlg**](SearchKeywordListServiceIsRemoveFlg.md) |  | [optional]
**search_keyword_list_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; サーチキーワードリストIDです。&lt;br&gt; このフィールドは、SETおよびREMOVE時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Search keyword list ID.&lt;br&gt; This field is required in SET and REMOVE operation. &lt;/div&gt; | [optional]
**search_keyword_list_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; サーチキーワードリスト名です。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Name of Search keyword list.&lt;br&gt; This field is required in ADD operation, and is optional in SET operation. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
