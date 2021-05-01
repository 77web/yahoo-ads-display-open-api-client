# # AuditLogServiceJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; アカウントIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Account ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**audit_log_job_end_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 操作履歴ダウンロードジョブの終了日時です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The job end date (YYYY-MM-DDTHH:MI:SS+9:00).&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**audit_log_job_id** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 操作履歴のダウンロードジョブIDです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The operation history job ID.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**audit_log_job_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 操作履歴のダウンロードジョブ名です。&lt;br&gt; このフィールドは、リクエストの場合は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The operation history job name.&lt;br&gt; This field is optional in requests. &lt;/div&gt; | [optional]
**audit_log_job_start_date** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 操作履歴ダウンロードジョブの開始日時です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The job start date (YYYY-MM-DDTHH:MI:SS+9:00).&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**audit_log_job_user_name** | **string** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 操作履歴ダウンロードジョブの実行ユーザー名です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; The user name who executes the operation history job.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**campaign_ids** | **int[]** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; ダウンロード対象のキャンペーンIDです。&lt;br&gt; このフィールドは、リクエストの場合は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Campaign ID of the download object.&lt;br&gt; This field is optional in requests. &lt;/div&gt; | [optional]
**date_range** | [**\OpenAPI\Client\Model\AuditLogServiceDateRange**](AuditLogServiceDateRange.md) |  | [optional]
**job_status** | [**\OpenAPI\Client\Model\AuditLogServiceJobStatus**](AuditLogServiceJobStatus.md) |  | [optional]
**lang** | [**\OpenAPI\Client\Model\AuditLogServiceLang**](AuditLogServiceLang.md) |  | [optional]
**progress** | **int** | &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 処理進捗です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; Displays progress in integers from 1 to 100.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; | [optional]
**update_source** | [**\OpenAPI\Client\Model\AuditLogServiceUpdateSource**](AuditLogServiceUpdateSource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
