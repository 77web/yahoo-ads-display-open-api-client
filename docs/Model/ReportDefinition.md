# # ReportDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**complete_time** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ジョブ完了日時です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The date and time of Job completion. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**date_range** | [**\OpenAPI\Client\Model\ReportDefinitionServiceDateRange**](ReportDefinitionServiceDateRange.md) |  | [optional]
**fields** | **string[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 表示項目です。&lt;br&gt; このフィールドは、ADD時に必須となり、REMOVE時に無視されます。&lt;br&gt; 指定可能な値は、ReportDefinitionServiceのgetReportFieldsで取得されるfieldNameをご確認ください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Select the fields. &lt;br&gt; This field is required in ADD operation, and will be ignored in REMOVE operation.&lt;br&gt; * Available values can be referred to fieldName field of fields object obtained by getReportFields operation of ReportDefinitionService. &lt;/div&gt; | [optional]
**filters** | [**\OpenAPI\Client\Model\ReportDefinitionServiceFilter[]**](ReportDefinitionServiceFilter.md) |  | [optional]
**report_compress_type** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportCompressType**](ReportDefinitionServiceReportCompressType.md) |  | [optional]
**report_date_range_type** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportDateRangeType**](ReportDefinitionServiceReportDateRangeType.md) |  | [optional]
**report_download_encode** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportDownloadEncode**](ReportDefinitionServiceReportDownloadEncode.md) |  | [optional]
**report_download_format** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportDownloadFormat**](ReportDefinitionServiceReportDownloadFormat.md) |  | [optional]
**report_job_status** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportJobStatus**](ReportDefinitionServiceReportJobStatus.md) |  | [optional]
**report_job_error_detail** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ジョブエラー詳細です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;br&gt; 「Over limit of file size.」が返される場合は、レポートのサイズが小さくなるようにレポート作成時の条件を変更してください。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Job Error Detail. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input.&lt;br&gt; If the message \&quot;Over limit of file size.\&quot; is returned, change the report creation conditions to reduce the size of the report. &lt;/div&gt; | [optional]
**report_job_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; レポートジョブIDです。&lt;br&gt; このフィールドは、REMOVE時に必須となり、ADD時に無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Report Job Id. &lt;br&gt; This field is required in REMOVE operation, and will be ignored in ADD operation. &lt;/div&gt; | [optional]
**report_language** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportLanguage**](ReportDefinitionServiceReportLanguage.md) |  | [optional]
**report_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; レポート名です。&lt;br&gt; このフィールドは、ADD時に省略可能となり、REMOVE時に無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Report name. &lt;br&gt; This field is optional in ADD operation, and will be ignored in REMOVE operation. &lt;/div&gt; | [optional]
**request_time** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ジョブ依頼日時です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The date and time of Job request. &lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**report_skip_column_header** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportSkipColumnHeader**](ReportDefinitionServiceReportSkipColumnHeader.md) |  | [optional]
**report_skip_report_summary** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportSkipReportSummary**](ReportDefinitionServiceReportSkipReportSummary.md) |  | [optional]
**report_decimal_part_display_type** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportDecimalPartDisplayType**](ReportDefinitionServiceReportDecimalPartDisplayType.md) |  | [optional]
**report_type_condition** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportTypeCondition**](ReportDefinitionServiceReportTypeCondition.md) |  | [optional]
**sort_fields** | [**\OpenAPI\Client\Model\ReportDefinitionServiceReportSortField[]**](ReportDefinitionServiceReportSortField.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
