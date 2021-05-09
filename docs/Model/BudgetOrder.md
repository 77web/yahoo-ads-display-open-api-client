# # BudgetOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; SET時、このフィールドは必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in SET operation. &lt;/div&gt; | [optional]
**account_type** | [**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceAccountType**](BudgetOrderServiceAccountType.md) |  | [optional]
**amount** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントの広告予算金額です。&lt;br&gt; SET時、このフィールドは省略可能となります。 月額予算は、accountTypeが&lt;code&gt;INVOICE&lt;/code&gt;の場合のみ変更可能です。 また、予算額は1000円単位で指定する必要があります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Amount of budget.&lt;br&gt; This field is optional in SET operation. The monthly budget can be changed only when accountType is &lt;code&gt;INVOICE&lt;/code&gt;. In addition, the budget amount must be specified in units of 1000 yen. &lt;/div&gt; | [optional]
**limit_charge_type** | [**\YahooAdsDisplayApi\Client\Model\BudgetOrderServiceLimitChargeType**](BudgetOrderServiceLimitChargeType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
