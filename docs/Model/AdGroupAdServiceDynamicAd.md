# # AdGroupAdServiceDynamicAd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand_color** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ブランドカラーです。&lt;br&gt; ※RGB、HEX指定です。&lt;br&gt; 設定例：#FFFFFF&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Brand color.&lt;br&gt; Format :RGB or HEX&lt;br&gt; e.g.：#FFFFFF&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**button_text** | [**\OpenAPI\Client\Model\AdGroupAdServiceButtonText**](AdGroupAdServiceButtonText.md) |  | [optional]
**campaign_banner_media_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンバナー画像のメディアIDです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign banner media ID.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**campaign_banner_media_id2** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンバナー画像のメディアID 2です。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign banner media ID 2.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**campaign_banner_media_id3** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンバナー画像のメディアID 3です。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign banner media ID 3.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**campaign_banner_media_id4** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンバナー画像のメディアID 4です。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign banner media ID 4.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**campaign_banner_url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンバナーURLです。&lt;br&gt; このフィールドは省略可能となります。&lt;br&gt; ADD時、設定する場合は以下のいずれかの指定が必要となります。&lt;br&gt; - campaignBannerMediaId&lt;br&gt; - campaignBannerMediaId2&lt;br&gt; - campaignBannerMediaId3&lt;br&gt; - campaignBannerMediaId4 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign banner URL.&lt;br&gt; This field is optional.&lt;br&gt; For setting in ADD operation, one of the following is required:&lt;br&gt; - campaignBannerMediaId&lt;br&gt; - campaignBannerMediaId2&lt;br&gt; - campaignBannerMediaId3&lt;br&gt; - campaignBannerMediaId4 &lt;/div&gt; | [optional]
**display_url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 表示URLです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Display URL.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**is_remove_campaign_banner_media_id** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_campaign_banner_media_id2** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_campaign_banner_media_id3** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_campaign_banner_media_id4** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_campaign_banner_url** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**logo_media_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ロゴ画像のメディアIDです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID of logo image.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**logo_media_id2** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ロゴ画像のメディアID 2です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID of logo image 2.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**logo_media_id3** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ロゴ画像のメディアID 3です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID of logo image 3.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**prefix** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; プレフィックスです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Prefix.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**principal** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告の主体者表記です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Advertiser Indication.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**suffix** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; サフィックスです。&lt;br&gt; ADDおよびSET時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Suffix.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**url** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; リンク先URLです。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Destination URL.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**is_remove_prefix** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_suffix** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]
**is_remove_brand_color** | [**\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg**](AdGroupAdServiceIsRemoveFlg.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
