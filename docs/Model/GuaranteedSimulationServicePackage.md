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
**buying_term** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceBuyingTerm**](GuaranteedSimulationServiceBuyingTerm.md) |  | [optional]
**pricing_package** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePricingPackage**](GuaranteedSimulationServicePricingPackage.md) |  | [optional]
**package_public_level** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePublicLevel**](GuaranteedSimulationServicePackagePublicLevel.md) |  | [optional]
**sales_document** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceSalesDocument**](GuaranteedSimulationServiceSalesDocument.md) |  | [optional]
**promotional_document** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePromotionalDocument**](GuaranteedSimulationServicePromotionalDocument.md) |  | [optional]
**related_document** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceRelatedDocument**](GuaranteedSimulationServiceRelatedDocument.md) |  | [optional]
**ad_type_permission** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermissionType**](GuaranteedSimulationServicePackagePermissionType.md) |  | [optional]
**ad_requirements** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdRequirement[]**](GuaranteedSimulationServiceAdRequirement.md) |  | [optional]
**action_after_video_ad_tap** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap**](GuaranteedSimulationServiceActionAfterVideoAdTap.md) |  | [optional]
**instream_duration_type** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceInstreamDurationType**](GuaranteedSimulationServiceInstreamDurationType.md) |  | [optional]
**remarks** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt;備考です。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Remarks.&lt;/div&gt; | [optional]
**package_permitted_viewable_frequency_cap** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedViewableFrequencyCap**](GuaranteedSimulationServicePackagePermittedViewableFrequencyCap.md) |  | [optional]
**package_permitted_ad_place_types** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedAdPlaceTypes**](GuaranteedSimulationServicePackagePermittedAdPlaceTypes.md) |  | [optional]
**package_permitted_gender_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedGenderTarget**](GuaranteedSimulationServicePackagePermittedGenderTarget.md) |  | [optional]
**package_permitted_age_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedAgeTarget**](GuaranteedSimulationServicePackagePermittedAgeTarget.md) |  | [optional]
**package_permitted_audience_category_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget**](GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget.md) |  | [optional]
**package_permitted_geo_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedGeoTarget**](GuaranteedSimulationServicePackagePermittedGeoTarget.md) |  | [optional]
**package_permitted_ad_schedule_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedAdScheduleTarget**](GuaranteedSimulationServicePackagePermittedAdScheduleTarget.md) |  | [optional]
**package_permitted_device_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedDeviceTarget**](GuaranteedSimulationServicePackagePermittedDeviceTarget.md) |  | [optional]
**package_permitted_os_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedOsTarget**](GuaranteedSimulationServicePackagePermittedOsTarget.md) |  | [optional]
**package_permitted_app_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedAppTarget**](GuaranteedSimulationServicePackagePermittedAppTarget.md) |  | [optional]
**package_permitted_placement_category_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget**](GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget.md) |  | [optional]
**package_permitted_position_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedPositionTarget**](GuaranteedSimulationServicePackagePermittedPositionTarget.md) |  | [optional]
**package_permitted_site_retargeting_target** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget**](GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
