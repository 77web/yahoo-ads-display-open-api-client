# # GuaranteedSimulation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; This field is required in requests. &lt;/div&gt; | [optional]
**guaranteed_simulation_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; シミュレーションIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Simulation ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**lifetime_budget** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーンの通期予算額です。&lt;br&gt; ※この「通期予算」は、キャンペーンの全期間を通じて消費される予算を意味します。&lt;br&gt; ADD時、このフィールドは省略可能となります。&lt;br&gt; ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; An amount of campaign&#39;s lifetime budget.&lt;br&gt; * \&quot;lifetime budget\&quot; means the total budget that is spent throughout the entire duration of the campaign.&lt;br&gt; This field is optional in ADD operation.&lt;br&gt; *lifetimeBudget, reach, vImps and slots cannot be set at the same time. &lt;/div&gt; | [optional]
**reach** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; リーチ数です。&lt;br&gt; ADD時、このフィールドは省略可能となります。&lt;br&gt; ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Number of reaches.&lt;br&gt; This field is optional in ADD operation.&lt;br&gt; *lifetimeBudget, reach, vImps and slots cannot be set at the same time. &lt;/div&gt; | [optional]
**v_imps** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ビューアブルインプレッションです。&lt;br&gt; ADD時、このフィールドは省略可能となります。&lt;br&gt; ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Viewable impressions.&lt;br&gt; This field is optional in ADD operation.&lt;br&gt; *lifetimeBudget, reach, vImps and slots cannot be set at the same time. &lt;/div&gt; | [optional]
**sov_rate** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; SOV（1%〜100%）です。&lt;br&gt; ADD時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; SOV (1% to 100%).&lt;br&gt; This field is optional in ADD operation. &lt;/div&gt; | [optional]
**slots** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 購入枠数です。&lt;br&gt; ADD時、このフィールドは省略可能となります。&lt;br&gt; ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Number of buying slots.&lt;br&gt; This field is optional in ADD operation.&lt;br&gt; *lifetimeBudget, reach, vImps and slots cannot be set at the same time. &lt;/div&gt; | [optional]
**campaign_goal** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; キャンペーン目的です。&lt;br&gt; ADD時、このフィールドは必須となります。&lt;br&gt; ※指定可能な値は、AccountAuthorityServiceのGET操作で得られるAccountAuthorityのauthoritiesフィールドをご確認ください。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign goal.&lt;br&gt; In ADD operation, this field will be required.&lt;br&gt; * Available values can be referred to authorities field of AccountAuthority object obtained by GET operation of AccountAuthorityService.&lt;br&gt; &lt;/div&gt; | [optional]
**start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 開始日です。&lt;br&gt; ADD時、このフィールドは必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Start date.&lt;br&gt; In ADD operation, this field will be required. &lt;/div&gt; Format: yyyyMMdd | [optional]
**end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 終了日です。&lt;br&gt; ADD時、このフィールドは必須となります。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; End date.&lt;br&gt; In ADD operation, this field will be required.&lt;br&gt; &lt;/div&gt; Format: yyyyMMdd | [optional]
**viewable_frequency_cap** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceViewableFrequencyCap**](GuaranteedSimulationServiceViewableFrequencyCap.md) |  | [optional]
**max_v_imps** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 最大ビューアブルインプレッション数です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Maximum number of ad viewable impressions to same user.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**max_reach** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 最大リーチ数です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Maximum number of reaches.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**lower_budget_limit** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 予約可能な下限通期予算です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Minimum reservable lifetime budget.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**upper_budget_limit** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 予約可能な上限通期予算です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Maximum reservable lifetime budget.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**reservation_status** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceReservationStatus**](GuaranteedSimulationServiceReservationStatus.md) |  | [optional]
**unreservable_reason** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceUnreservableReason**](GuaranteedSimulationServiceUnreservableReason.md) |  | [optional]
**ad_requirements** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdRequirement[]**](GuaranteedSimulationServiceAdRequirement.md) |  | [optional]
**targets** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdGroupTarget[]**](GuaranteedSimulationServiceAdGroupTarget.md) |  | [optional]
**ad_place_type** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceAdPlaceType**](GuaranteedSimulationServiceAdPlaceType.md) |  | [optional]
**prediction** | [**\OpenAPI\Client\Model\GuaranteedSimulationServicePrediction**](GuaranteedSimulationServicePrediction.md) |  | [optional]
**ad_category_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 広告カテゴリーIDです。&lt;br&gt; 広告カテゴリーは、配信する広告内容に該当するものを正確に指定して下さい。内容に応じて広告掲載量が変わるため、正確なシミュレーション結果の算出に必要です。&lt;br&gt; 詳細は&lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/guideline/articledetail?lan&#x3D;ja&amp;aid&#x3D;50308\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ヘルプ&lt;/a&gt;を参照してください。&lt;br&gt; なお、ここで指定した広告カテゴリーと異なる広告が入稿された場合は、入稿した広告内容の修正が必要な旨をメールでご連絡します。&lt;br&gt; ※指定した広告カテゴリーと広告タイプの組み合わせによっては、予約のキャンセルが必要な場合があります。その場合はキャンセル料が発生します。&lt;br&gt; 指定可能な値は、GuaranteedSimulationService/getAdCategoryで取得されるGuaranteedSimulationServiceAdCategoryオブジェクトのadCategoryIdフィールドをご参照ください。&lt;br&gt; ADD時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Ad category ID.&lt;br&gt; To get an accurate simulated result, specify the restricted contents correctly. The ad volume depends on the contents.&lt;br&gt; &lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/guideline/articledetail?lan&#x3D;en&amp;aid&#x3D;28259\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Learn more&lt;/a&gt;&lt;br&gt; If you add ads that have a content different from the one you specified, you will receive an email to fix them.&lt;br&gt; You may need to cancel your ad depending on the combination of content and ad type you specified. Pay a cancellation fee in that case.&lt;br&gt; Available values can be referred to adCategoryId field of GuaranteedSimulationServiceAdCategory object obtained by getAdCategory operation of GuaranteedSimulationService.&lt;br&gt; This field is optional in ADD operation. &lt;/div&gt; | [optional]
**package_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 商品IDです。&lt;br&gt; ADD時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Package ID.&lt;br&gt; This field is optional in ADD operation. &lt;/div&gt; | [optional]
**package_history_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 商品履歴IDです。&lt;br&gt; ADD時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Package history ID.&lt;br&gt; This field is optional in ADD operation. &lt;/div&gt; | [optional]
**action_after_video_ad_tap** | [**\OpenAPI\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap**](GuaranteedSimulationServiceActionAfterVideoAdTap.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)