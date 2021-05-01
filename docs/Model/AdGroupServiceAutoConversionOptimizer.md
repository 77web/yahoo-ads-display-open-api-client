# # AdGroupServiceAutoConversionOptimizer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eligibility_flg** | [**\OpenAPI\Client\Model\AdGroupServiceEligibilityFlg**](AdGroupServiceEligibilityFlg.md) |  | [optional]
**target_cpa** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; コンバージョン単価の目標値です。&lt;br&gt; SET時、このフィールドは省略可能となります。&lt;br&gt; ADD時、このフィールドは指定できません。&lt;br&gt; ※設定範囲は1 - 9,999,999,999です。&lt;br&gt; ※コンバージョン最適化機能が動作している場合には、手動で設定されている入札設定は無効になります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Target cost per conversion.&lt;br&gt; This field is optional in SET operation.&lt;br&gt; In ADD operation, this field can not be set.&lt;br&gt; ∗Settable range is 1 - 9,999,999,999.&lt;br&gt; ∗If function of conversion optimization is running, manual bid settings is invalid. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
