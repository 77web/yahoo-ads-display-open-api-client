# # GuaranteedSimulationServiceAdRequirement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_type** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdType**](GuaranteedSimulationServiceAdType.md) |  | [optional]
**media_ad_format** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; メディアのフォーマットです。&lt;br&gt; ADD時、このフィールドは必須となります。&lt;br&gt; ※指定可能な値は、DictionaryServiceのgetMediaAdFormatで取得されるDictionaryServiceMediaAdFormatのadFormatフィールドをご確認ください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media format.&lt;br&gt; In ADD operation, this field will be required.&lt;br&gt; *Refer to the adFormat field of DictionaryServiceMediaAdFormat which can be obtained via getMediaAdFormat in DictionaryService, to check the values that can be specified in this field. &lt;/div&gt; | [optional]
**aspect_ratio** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アスペクト比の種類です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Aspect ratio type.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
