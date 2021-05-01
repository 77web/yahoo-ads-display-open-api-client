# # GuaranteedAdGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad_group_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**ad_group_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループ名です。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group name.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt; | [optional]
**campaign_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**campaign_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;br&gt; *ADD時、このフィールドは返却されません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign name.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input.&lt;br&gt; *This field will not be returned in ADD operation. &lt;/div&gt; | [optional]
**device** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceDeviceType[]**](GuaranteedAdGroupServiceDeviceType.md) |  | [optional]
**device_app** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceDeviceAppType[]**](GuaranteedAdGroupServiceDeviceAppType.md) |  | [optional]
**device_os** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceDeviceOsType[]**](GuaranteedAdGroupServiceDeviceOsType.md) |  | [optional]
**labels** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceLabel[]**](GuaranteedAdGroupServiceLabel.md) |  | [optional]
**user_status** | [**\OpenAPI\Client\Model\GuaranteedAdGroupServiceUserStatus**](GuaranteedAdGroupServiceUserStatus.md) |  | [optional]
**ad_group_targets** | [**\OpenAPI\Client\Model\AdGroupTarget[]**](AdGroupTarget.md) |  | [optional]
**is_creative_profile** | **bool** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; trueの場合、クリエイティブプロファイルで追加された広告グループであることを示します。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; If the value of this field is true, it indicates that the ad group was added using a creative profile.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
