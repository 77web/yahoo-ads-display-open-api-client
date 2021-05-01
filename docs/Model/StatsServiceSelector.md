# # StatsServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントID&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
**campaign_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンID&lt;br&gt; typeで「CAMPAIGN」または「ADGROUP」または「AD」または「TARGET」を指定した場合のみ有効です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID.&lt;br&gt; Available only when &amp;#34;CAMPAIGN&amp;#34; or &amp;#34;ADGROUP&amp;#34; or &amp;#34;AD&amp;#34; or &amp;#34;TARGET&amp;#34; is specified for type. &lt;/div&gt; | [optional]
**ad_group_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告グループID&lt;br&gt; typeで「ADGROUP」または「AD」または「TARGET」を指定した場合のみ有効です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad group ID.&lt;br&gt; Available only when &amp;#34;ADGROUP&amp;#34; or &amp;#34;AD&amp;#34; or &amp;#34;TARGET&amp;#34; is specified for type. &lt;/div&gt; | [optional]
**ad_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告ID&lt;br&gt; typeで「AD」を指定した場合のみ有効です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad ID.&lt;br&gt; Available only when &amp;#34;AD&amp;#34; is specified for type. &lt;/div&gt; | [optional]
**media_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 画像ID&lt;br&gt; typeで「MEDIA」を指定した場合のみ有効です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Media ID.&lt;br&gt; Available only when &amp;#34;MEDIA&amp;#34; is specified for type. &lt;/div&gt; | [optional]
**stats_period** | [**\OpenAPI\Client\Model\StatsServiceStatsPeriod**](StatsServiceStatsPeriod.md) |  | [optional]
**period_custom_date** | [**\OpenAPI\Client\Model\StatsServicePeriodCustomDate**](StatsServicePeriodCustomDate.md) |  | [optional]
**target_types** | [**\OpenAPI\Client\Model\StatsServiceTargetType[]**](StatsServiceTargetType.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\StatsServiceType**](StatsServiceType.md) |  | [optional]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
