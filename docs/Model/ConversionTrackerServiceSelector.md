# # ConversionTrackerServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アカウントID。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Account ID.&lt;/div&gt; |
**app_conversion_platform** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceAppConversionPlatform**](ConversionTrackerServiceAppConversionPlatform.md) |  | [optional]
**app_ids** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;アプリID。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;App ID.&lt;/div&gt; | [optional]
**categories** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCategory[]**](ConversionTrackerServiceCategory.md) |  | [optional]
**conversion_tracker_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;コンバージョントラッカーのID。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Conversion Tracker ID.&lt;/div&gt; | [optional]
**conversion_tracker_types** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceType[]**](ConversionTrackerServiceType.md) |  | [optional]
**counting_type** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCountingType**](ConversionTrackerServiceCountingType.md) |  | [optional]
**exclude_from_bidding** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceExcludeFromBidding**](ConversionTrackerServiceExcludeFromBidding.md) |  | [optional]
**number_results** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.&lt;/div&gt; | [optional] [default to 500]
**start_index** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Index of the first result to return in this page. This field must be greater than or equal to 1.&lt;/div&gt; | [optional] [default to 1]
**stats_period** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriod**](ConversionTrackerServiceStatsPeriod.md) |  | [optional]
**stats_period_custom_date** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate**](ConversionTrackerServiceStatsPeriodCustomDate.md) |  | [optional]
**statuses** | [**\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatus[]**](ConversionTrackerServiceStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
