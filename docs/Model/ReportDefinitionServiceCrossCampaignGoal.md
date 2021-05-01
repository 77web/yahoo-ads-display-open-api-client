# # ReportDefinitionServiceCrossCampaignGoal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\OpenAPI\Client\Model\ReportDefinitionServiceAccount**](ReportDefinitionServiceAccount.md) |  | [optional]
**campaign_goal** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   横断リーチレポートの組み合わせの対象となるキャンペーン目的です。&lt;br&gt;   このフィールドは、ADD時に省略可能となり、REMOVE時に無視されます。&lt;br&gt;   ※ADD時、crossCampaignReachTypeが&lt;code&gt;CAMPAIGN_GOAL&lt;/code&gt;の場合は必須です。&lt;br&gt;   ※BRAND_AWARENESSを指定すると「運用型：ブランド認知」と「予約型：ブランド認知」の両方が対象になります。&lt;br&gt;   ※BRAND_AWARENESS_GUARANTEEDは指定できません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Campaign goal that is subject to combination of Cross-campaign Reach Report. &lt;br&gt;   This field is optional in ADD operation, and will be ignored in REMOVE operation. &lt;br&gt;   *If crossCampaignReachType is &lt;code&gt;CAMPAIGN_GOAL&lt;/code&gt;, this field is required in ADD operation.&lt;br&gt;   *If you specify BRAND_AWARENESS, \&quot;Auction: Brand awareness\&quot; and \&quot;Guaranteed: Brand awareness\&quot; will be targeted. &lt;br&gt;   *BRAND_AWARENESS_GUARANTEED cannot be specified. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
