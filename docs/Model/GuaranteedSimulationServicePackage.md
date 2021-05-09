# # GuaranteedSimulationServicePackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;商品IDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Package ID.&lt;/div&gt; | [optional]
**package_history_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;商品履歴IDです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Package history ID.&lt;/div&gt; | [optional]
**package_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;商品名です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Package name.&lt;/div&gt; | [optional]
**selling_start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   商品開始日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Start date of the package.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**selling_end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   商品終了日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   End date of the package.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**ad_delivery_duration_start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   広告の掲載有効期間の開始日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Start date of the ad delivery validity period.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**reservation_start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   予約期間開始日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   Start date of reservation period.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**reservation_end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   予約期間終了日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   End date of reservation period.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**ad_delivery_duration_end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   掲載有効期間の終了日です。&lt;br&gt;   ※フォーマット：yyyyMMdd &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   End date of the ad delivery validity period.&lt;br&gt;   Format: yyyyMMdd &lt;/div&gt; | [optional]
**buying_term** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceBuyingTerm**](GuaranteedSimulationServiceBuyingTerm.md) |  | [optional]
**pricing_package** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePricingPackage**](GuaranteedSimulationServicePricingPackage.md) |  | [optional]
**package_public_level** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePublicLevel**](GuaranteedSimulationServicePackagePublicLevel.md) |  | [optional]
**sales_document** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceSalesDocument**](GuaranteedSimulationServiceSalesDocument.md) |  | [optional]
**promotional_document** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePromotionalDocument**](GuaranteedSimulationServicePromotionalDocument.md) |  | [optional]
**related_document** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceRelatedDocument**](GuaranteedSimulationServiceRelatedDocument.md) |  | [optional]
**ad_type_permission** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermissionType**](GuaranteedSimulationServicePackagePermissionType.md) |  | [optional]
**ad_requirements** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdRequirement[]**](GuaranteedSimulationServiceAdRequirement.md) |  | [optional]
**action_after_video_ad_tap** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap**](GuaranteedSimulationServiceActionAfterVideoAdTap.md) |  | [optional]
**instream_duration_type** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceInstreamDurationType**](GuaranteedSimulationServiceInstreamDurationType.md) |  | [optional]
**remarks** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;備考です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Remarks.&lt;/div&gt; | [optional]
**package_permitted_viewable_frequency_cap** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedViewableFrequencyCap**](GuaranteedSimulationServicePackagePermittedViewableFrequencyCap.md) |  | [optional]
**package_permitted_ad_place_types** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedAdPlaceTypes**](GuaranteedSimulationServicePackagePermittedAdPlaceTypes.md) |  | [optional]
**package_permitted_gender_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedGenderTarget**](GuaranteedSimulationServicePackagePermittedGenderTarget.md) |  | [optional]
**package_permitted_age_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedAgeTarget**](GuaranteedSimulationServicePackagePermittedAgeTarget.md) |  | [optional]
**package_permitted_audience_category_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget**](GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget.md) |  | [optional]
**package_permitted_geo_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedGeoTarget**](GuaranteedSimulationServicePackagePermittedGeoTarget.md) |  | [optional]
**package_permitted_ad_schedule_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedAdScheduleTarget**](GuaranteedSimulationServicePackagePermittedAdScheduleTarget.md) |  | [optional]
**package_permitted_device_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedDeviceTarget**](GuaranteedSimulationServicePackagePermittedDeviceTarget.md) |  | [optional]
**package_permitted_os_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedOsTarget**](GuaranteedSimulationServicePackagePermittedOsTarget.md) |  | [optional]
**package_permitted_app_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedAppTarget**](GuaranteedSimulationServicePackagePermittedAppTarget.md) |  | [optional]
**package_permitted_placement_category_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget**](GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget.md) |  | [optional]
**package_permitted_position_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedPositionTarget**](GuaranteedSimulationServicePackagePermittedPositionTarget.md) |  | [optional]
**package_permitted_site_retargeting_target** | [**\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget**](GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
