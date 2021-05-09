# # CampaignServiceBudget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンの一日あたりの予算（一日単位の利用金額）です。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時は無視されます。&lt;br&gt; budgetDeliveryMethodがSTANDARDの場合はADDおよびSET時に必須です。&lt;br&gt; ※目的ありの場合、ADD時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The daily budget. &lt;br&gt; This field is optional in ADD and SET operation, and will be ignored in REMOVE operation. &lt;br&gt; This field is required in ADD and SET operation if budgetDeliveryMethod is STANDARD.&lt;br&gt; *For campaigns with campaign goal, this field is required in ADD operation. &lt;/div&gt; | [optional]
**budget_delivery_method** | [**\YahooAdsDisplayApi\Client\Model\CampaignServiceBudgetDeliveryMethod**](CampaignServiceBudgetDeliveryMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
