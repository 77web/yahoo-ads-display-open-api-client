# # MediaServiceRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**approval_status** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceApprovalStatus**](MediaServiceApprovalStatus.md) |  | [optional]
**campaign_banner_flg** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceCampaignBannerFlg**](MediaServiceCampaignBannerFlg.md) |  | [optional]
**creation_time** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;入稿日時です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Date and time of creation.&lt;/div&gt; | [optional]
**disapproval_reason_codes** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;掲載拒否の理由です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Reason code why it&amp;#39;s disapproved on the review.&lt;/div&gt; | [optional]
**logo_flg** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceLogoFlg**](MediaServiceLogoFlg.md) |  | [optional]
**image_media** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceImageMedia**](MediaServiceImageMedia.md) |  | [optional]
**media_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;画像IDです。&lt;br&gt; このフィールドは、SETおよびREMOVE時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Media ID (image ID). &lt;br&gt; This field is required in SET and REMOVE operation. &lt;/div&gt; | [optional]
**media_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 実ファイル名です。&lt;br&gt; このフィールドは、ADD時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;File name. &lt;br&gt; This field is required in ADD operation. &lt;/div&gt; | [optional]
**media_title** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;画像名です。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Image name. &lt;br&gt; This field is required in ADD operation, and is optional in SET operation. &lt;/div&gt; | [optional]
**thumbnail_flg** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceThumbnailFlg**](MediaServiceThumbnailFlg.md) |  | [optional]
**user_status** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceUserStatus**](MediaServiceUserStatus.md) |  | [optional]
**media_rich_format_flg** | [**\YahooAdsDisplayApi\Client\Model\MediaServiceRichFormatFlg**](MediaServiceRichFormatFlg.md) |  | [optional]
**created_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;データが作成された日です。&lt;br&gt;※フォーマット：yyyyMMdd&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Date of Media made.&lt;br&gt;* Format: yyyyMMdd&lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
