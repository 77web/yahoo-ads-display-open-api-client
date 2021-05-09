# # ReportDefinitionServiceConversionPathReportCondition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lookback_window** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   ルックバック期間（日数）です。&lt;br&gt;   指定できる値の下限は0、上限は90です。&lt;br&gt;   このフィールドは、ADDに必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Look back period (number of days). &lt;br&gt;   The lower limit of the value that can be specified is 0, and the upper limit is 90.&lt;br&gt;   This field is required in ADD operation.  &lt;/div&gt; | [optional]
**include_view_interaction** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceIncludeViewInteractionFlg**](ReportDefinitionServiceIncludeViewInteractionFlg.md) |  | [optional]
**conversion_path_filters** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceConversionPathFilter[]**](ReportDefinitionServiceConversionPathFilter.md) |  | [optional]
**conversion_path_account_setting** | [**\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceConversionPathAccountSetting**](ReportDefinitionServiceConversionPathAccountSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
