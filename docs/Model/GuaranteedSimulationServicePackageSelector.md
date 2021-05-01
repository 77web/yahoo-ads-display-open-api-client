# # GuaranteedSimulationServicePackageSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Account ID&lt;/div&gt; |
**package_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : 商品名&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Package name&lt;/div&gt; | [optional]
**package_ids** | **int[]** |  | [optional]
**ad_place_types** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdPlaceType[]**](GuaranteedSimulationServiceAdPlaceType.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : 掲載面&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Ad placements&lt;/div&gt; | [optional]
**device_types** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceDeviceType[]**](GuaranteedSimulationServiceDeviceType.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : 配信先デバイス&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Devices&lt;/div&gt; | [optional]
**ad_types** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdType[]**](GuaranteedSimulationServiceAdType.md) | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;検索条件 : 広告タイプ&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Search Condition: Ad Types&lt;/div&gt; | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 10]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
