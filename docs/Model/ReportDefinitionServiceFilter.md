# # ReportDefinitionServiceFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; フィルター対象となるフィールドです。&lt;br&gt; このフィールドは、ADD時に必須となります。&lt;br&gt; ※getReportFieldsのレスポンスで「filterable&#x3D;true」のフィールドのみ指定可能です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Field to be filtered.&lt;br&gt; This field is required in ADD operation.&lt;br&gt; ※Can be specified for the field with &amp;#34;filterable&#x3D;true&amp;#34; on the response of getReportFields. &lt;/div&gt; | [optional]
**filter_operator** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceFilterOperator**](ReportDefinitionServiceFilterOperator.md) |  | [optional]
**values** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 条件値です。&lt;br&gt; このフィールドは、ADD時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Value for condition. &lt;br&gt; This field is required in ADD operation. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
