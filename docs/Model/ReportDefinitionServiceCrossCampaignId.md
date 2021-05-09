# # ReportDefinitionServiceCrossCampaignId

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceAccount**](ReportDefinitionServiceAccount.md) |  | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   横断リーチレポートの組み合わせの対象となるキャンペーンIDです。&lt;br&gt;   このフィールドは、ADD時に省略可能となり、REMOVE時に無視されます。&lt;br&gt;   ※ADD時、crossCampaignReachTypeが&lt;code&gt;CAMPAIGN_ID&lt;/code&gt;の場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Campaign ID that is subject to combination of Cross-campaign Reach Report. &lt;br&gt;   This field is optional in ADD operation, and will be ignored in REMOVE operation. &lt;br&gt;   *If crossCampaignReachType is &lt;code&gt;CAMPAIGN_ID&lt;/code&gt;, this field is required in ADD operation. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
