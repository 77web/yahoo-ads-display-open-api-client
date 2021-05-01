# # RetargetingListServiceRuleTargetList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_open** | [**\OpenAPI\Client\Model\RetargetingListServiceIsOpen**](RetargetingListServiceIsOpen.md) |  | [optional]
**is_preset** | [**\OpenAPI\Client\Model\RetargetingListServiceIsPreset**](RetargetingListServiceIsPreset.md) |  | [optional]
**reach_period** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; リーチの蓄積期間（1日～540日）です。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Cookies validation period. (1 - 540 days) &lt;br&gt; This field is required in ADD operation, and is optional in SET operation. &lt;/div&gt; | [optional]
**retargeting_tag_id** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; リターゲティングタグIDです。&lt;br&gt; このフィールドは、ADD時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; ID of Retargeting Tag. &lt;br&gt; This field is required in ADD operation. &lt;/div&gt; | [optional]
**rules** | [**\OpenAPI\Client\Model\RetargetingListServiceRule[]**](RetargetingListServiceRule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
