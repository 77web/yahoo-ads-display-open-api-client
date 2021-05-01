# # AdGroupTarget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad_group_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**bid_multiplier** | **double** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 入札価格調整率です。&lt;br&gt; このフィールドは、ADD、SETおよびREPLACE時は省略可能となり、REMOVE時は無視されます。&lt;br&gt; ※入札価格調整率が設定できないターゲティングの場合は返却されません。&lt;br&gt; ※広告グループのターゲティングにSITE_RETARGETING、SEARCH_TARGET、PLACEMENT_TARGETのいずれかを指定し、かつその広告グループがYDNキャンペーンに紐づいている場合にbidMultiplierを指定しなかった時は、nullが代入されます。&lt;br&gt; ※その他の場合でbidMultiplierを指定しなかった時は1.0が代入されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Bid adjustment.&lt;br&gt; This field is optional in ADD, SET and REPLACE operation, and will be ignored in REMOVE operation.&lt;br&gt; ∗If bid adjustment is unable to set targeting, not returned.&lt;br&gt; *If bidMultiplier is not specified when SITE_RETARGETING, SEARCH_TARGET, or PLACEMENT_TARGET is specified for the targeting of the ad group and the ad group is linked to the YDN campaign, null will be assigned for this field.&lt;br&gt; *If bidMultiplier is not specified in other cases, 1.0 will be assigned for this field. &lt;/div&gt; | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**target** | [**\OpenAPI\Client\Model\AdGroupTargetServiceTarget**](AdGroupTargetServiceTarget.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
