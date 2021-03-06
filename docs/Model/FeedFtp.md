# # FeedFtp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**active_status** | [**\YahooAdsDisplayApi\Client\Model\FeedFtpServiceActiveStatus**](FeedFtpServiceActiveStatus.md) |  | [optional]
**feed_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; Feedを識別するIdです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Feed ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**feed_url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 商品リストファイルのURLです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; URL of item list file.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**item_list_upload_type** | [**\YahooAdsDisplayApi\Client\Model\FeedFtpServiceItemListUploadType**](FeedFtpServiceItemListUploadType.md) |  | [optional]
**schedule** | [**\YahooAdsDisplayApi\Client\Model\FeedFtpServiceSchedule**](FeedFtpServiceSchedule.md) |  | [optional]
**user_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ユーザー名です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; User name.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**user_password** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; パスワードです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Password.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
