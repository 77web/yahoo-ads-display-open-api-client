# # PlacementUrlList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; |
**description** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; urlリストの説明です。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Url List Description.&lt;br&gt; This field is optional in ADD and SET operation. &lt;/div&gt; | [optional]
**is_remove_description** | [**\OpenAPI\Client\Model\PlacementUrlListServiceIsRemoveFlg**](PlacementUrlListServiceIsRemoveFlg.md) |  | [optional]
**unknown_domain_flg** | [**\OpenAPI\Client\Model\PlacementUrlListServiceUnknownDomainFlg**](PlacementUrlListServiceUnknownDomainFlg.md) |  | [optional]
**url_list_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; urlリストIDです。&lt;br&gt; このフィールドは、SETおよびREMOVE時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Url List ID. &lt;br&gt; This field is required in SET and REMOVE operation. &lt;/div&gt; | [optional]
**url_list_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; urlリスト名です。&lt;br&gt; このフィールドは、ADD時に必須となり、SET時に省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Url List Name. &lt;br&gt; This field is required in ADD operation, and is optional in SET operation. &lt;/div&gt; | [optional]
**brand_safety_deny_list_flg** | **bool** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 除外専用リストかどうかのフラグです。&lt;br&gt; 除外専用リストには下記の制約があります。&lt;br&gt; ・１アカウントにつき1つ作成が可能です。&lt;br&gt; ・除外にのみ紐付け可能です。&lt;br&gt; ・YDNキャンペーンには紐付けできません。&lt;br&gt; このフィールドは、ADD時に省略可能(デフォルトの値はFALSE)、SET時に指定不可となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; A flag that indicates whether it is an exclusion list. &lt;br&gt; Exclusion list includes the following restrictions: &lt;br&gt; *Only one list can be created per account. &lt;br&gt; *Can be linked only to exclusion. &lt;br&gt; *Cannot be linked with YDN campaign. &lt;br&gt; This field is optional in ADD operation (default value will be FALSE), and cannot be specified in SET operation. &lt;/div&gt; &lt;hr&gt; &lt;p&gt;* &lt;code&gt;TRUE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;除外専用リストです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Exclusion list.&lt;/span&gt;&lt;/p&gt; &lt;p&gt;* &lt;code&gt;FALSE&lt;/code&gt; - &lt;span lang&#x3D;\&quot;ja\&quot;&gt;通常のurlリストです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Standard URL list.&lt;/span&gt;&lt;/p&gt; | [optional]
**urls** | [**\OpenAPI\Client\Model\PlacementUrlListServiceUrlList[]**](PlacementUrlListServiceUrlList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
