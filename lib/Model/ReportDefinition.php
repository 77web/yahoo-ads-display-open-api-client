<?php
/**
 * ReportDefinition
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 ディスプレイ広告 API リファレンス / Yahoo! JAPAN Ads Display Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 ディスプレイ広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Display Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/design/v4/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v4
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YahooAdsDisplayApi\Client\Model;

use \ArrayAccess;
use \YahooAdsDisplayApi\Client\ObjectSerializer;

/**
 * ReportDefinition Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ReportDefinitionオブジェクトは、レポート定義を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The ReportDefinition object serves report definitions.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'complete_time' => 'string',
        'date_range' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDateRange',
        'fields' => 'string[]',
        'filters' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceFilter[]',
        'report_compress_type' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportCompressType',
        'report_date_range_type' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDateRangeType',
        'report_download_encode' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadEncode',
        'report_download_format' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadFormat',
        'report_job_status' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportJobStatus',
        'report_job_error_detail' => 'string',
        'report_job_id' => 'int',
        'report_language' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportLanguage',
        'report_name' => 'string',
        'request_time' => 'string',
        'report_skip_column_header' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipColumnHeader',
        'report_skip_report_summary' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipReportSummary',
        'report_decimal_part_display_type' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDecimalPartDisplayType',
        'report_type_condition' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportTypeCondition',
        'sort_fields' => '\YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSortField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'complete_time' => null,
        'date_range' => null,
        'fields' => null,
        'filters' => null,
        'report_compress_type' => null,
        'report_date_range_type' => null,
        'report_download_encode' => null,
        'report_download_format' => null,
        'report_job_status' => null,
        'report_job_error_detail' => null,
        'report_job_id' => 'int64',
        'report_language' => null,
        'report_name' => null,
        'request_time' => null,
        'report_skip_column_header' => null,
        'report_skip_report_summary' => null,
        'report_decimal_part_display_type' => null,
        'report_type_condition' => null,
        'sort_fields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'accountId',
        'complete_time' => 'completeTime',
        'date_range' => 'dateRange',
        'fields' => 'fields',
        'filters' => 'filters',
        'report_compress_type' => 'reportCompressType',
        'report_date_range_type' => 'reportDateRangeType',
        'report_download_encode' => 'reportDownloadEncode',
        'report_download_format' => 'reportDownloadFormat',
        'report_job_status' => 'reportJobStatus',
        'report_job_error_detail' => 'reportJobErrorDetail',
        'report_job_id' => 'reportJobId',
        'report_language' => 'reportLanguage',
        'report_name' => 'reportName',
        'request_time' => 'requestTime',
        'report_skip_column_header' => 'reportSkipColumnHeader',
        'report_skip_report_summary' => 'reportSkipReportSummary',
        'report_decimal_part_display_type' => 'reportDecimalPartDisplayType',
        'report_type_condition' => 'reportTypeCondition',
        'sort_fields' => 'sortFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'complete_time' => 'setCompleteTime',
        'date_range' => 'setDateRange',
        'fields' => 'setFields',
        'filters' => 'setFilters',
        'report_compress_type' => 'setReportCompressType',
        'report_date_range_type' => 'setReportDateRangeType',
        'report_download_encode' => 'setReportDownloadEncode',
        'report_download_format' => 'setReportDownloadFormat',
        'report_job_status' => 'setReportJobStatus',
        'report_job_error_detail' => 'setReportJobErrorDetail',
        'report_job_id' => 'setReportJobId',
        'report_language' => 'setReportLanguage',
        'report_name' => 'setReportName',
        'request_time' => 'setRequestTime',
        'report_skip_column_header' => 'setReportSkipColumnHeader',
        'report_skip_report_summary' => 'setReportSkipReportSummary',
        'report_decimal_part_display_type' => 'setReportDecimalPartDisplayType',
        'report_type_condition' => 'setReportTypeCondition',
        'sort_fields' => 'setSortFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'complete_time' => 'getCompleteTime',
        'date_range' => 'getDateRange',
        'fields' => 'getFields',
        'filters' => 'getFilters',
        'report_compress_type' => 'getReportCompressType',
        'report_date_range_type' => 'getReportDateRangeType',
        'report_download_encode' => 'getReportDownloadEncode',
        'report_download_format' => 'getReportDownloadFormat',
        'report_job_status' => 'getReportJobStatus',
        'report_job_error_detail' => 'getReportJobErrorDetail',
        'report_job_id' => 'getReportJobId',
        'report_language' => 'getReportLanguage',
        'report_name' => 'getReportName',
        'request_time' => 'getRequestTime',
        'report_skip_column_header' => 'getReportSkipColumnHeader',
        'report_skip_report_summary' => 'getReportSkipReportSummary',
        'report_decimal_part_display_type' => 'getReportDecimalPartDisplayType',
        'report_type_condition' => 'getReportTypeCondition',
        'sort_fields' => 'getSortFields'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['complete_time'] = $data['complete_time'] ?? null;
        $this->container['date_range'] = $data['date_range'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
        $this->container['report_compress_type'] = $data['report_compress_type'] ?? null;
        $this->container['report_date_range_type'] = $data['report_date_range_type'] ?? null;
        $this->container['report_download_encode'] = $data['report_download_encode'] ?? null;
        $this->container['report_download_format'] = $data['report_download_format'] ?? null;
        $this->container['report_job_status'] = $data['report_job_status'] ?? null;
        $this->container['report_job_error_detail'] = $data['report_job_error_detail'] ?? null;
        $this->container['report_job_id'] = $data['report_job_id'] ?? null;
        $this->container['report_language'] = $data['report_language'] ?? null;
        $this->container['report_name'] = $data['report_name'] ?? null;
        $this->container['request_time'] = $data['request_time'] ?? null;
        $this->container['report_skip_column_header'] = $data['report_skip_column_header'] ?? null;
        $this->container['report_skip_report_summary'] = $data['report_skip_report_summary'] ?? null;
        $this->container['report_decimal_part_display_type'] = $data['report_decimal_part_display_type'] ?? null;
        $this->container['report_type_condition'] = $data['report_type_condition'] ?? null;
        $this->container['sort_fields'] = $data['sort_fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sort_fields']) && (count($this->container['sort_fields']) > 5)) {
            $invalidProperties[] = "invalid value for 'sort_fields', number of items must be less than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id <div lang=\"ja\"> アカウントIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Account ID. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets complete_time
     *
     * @return string|null
     */
    public function getCompleteTime()
    {
        return $this->container['complete_time'];
    }

    /**
     * Sets complete_time
     *
     * @param string|null $complete_time <div lang=\"ja\"> ジョブ完了日時です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> The date and time of Job completion. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setCompleteTime($complete_time)
    {
        $this->container['complete_time'] = $complete_time;

        return $this;
    }

    /**
     * Gets date_range
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDateRange|null
     */
    public function getDateRange()
    {
        return $this->container['date_range'];
    }

    /**
     * Sets date_range
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceDateRange|null $date_range date_range
     *
     * @return self
     */
    public function setDateRange($date_range)
    {
        $this->container['date_range'] = $date_range;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields <div lang=\"ja\"> 表示項目です。<br> このフィールドは、ADD時に必須となり、REMOVE時に無視されます。<br> 指定可能な値は、ReportDefinitionServiceのgetReportFieldsで取得されるfieldNameをご確認ください。 </div> <div lang=\"en\"> Select the fields. <br> This field is required in ADD operation, and will be ignored in REMOVE operation.<br> * Available values can be referred to fieldName field of fields object obtained by getReportFields operation of ReportDefinitionService. </div>
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceFilter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceFilter[]|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets report_compress_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportCompressType|null
     */
    public function getReportCompressType()
    {
        return $this->container['report_compress_type'];
    }

    /**
     * Sets report_compress_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportCompressType|null $report_compress_type report_compress_type
     *
     * @return self
     */
    public function setReportCompressType($report_compress_type)
    {
        $this->container['report_compress_type'] = $report_compress_type;

        return $this;
    }

    /**
     * Gets report_date_range_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDateRangeType|null
     */
    public function getReportDateRangeType()
    {
        return $this->container['report_date_range_type'];
    }

    /**
     * Sets report_date_range_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDateRangeType|null $report_date_range_type report_date_range_type
     *
     * @return self
     */
    public function setReportDateRangeType($report_date_range_type)
    {
        $this->container['report_date_range_type'] = $report_date_range_type;

        return $this;
    }

    /**
     * Gets report_download_encode
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadEncode|null
     */
    public function getReportDownloadEncode()
    {
        return $this->container['report_download_encode'];
    }

    /**
     * Sets report_download_encode
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadEncode|null $report_download_encode report_download_encode
     *
     * @return self
     */
    public function setReportDownloadEncode($report_download_encode)
    {
        $this->container['report_download_encode'] = $report_download_encode;

        return $this;
    }

    /**
     * Gets report_download_format
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadFormat|null
     */
    public function getReportDownloadFormat()
    {
        return $this->container['report_download_format'];
    }

    /**
     * Sets report_download_format
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDownloadFormat|null $report_download_format report_download_format
     *
     * @return self
     */
    public function setReportDownloadFormat($report_download_format)
    {
        $this->container['report_download_format'] = $report_download_format;

        return $this;
    }

    /**
     * Gets report_job_status
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportJobStatus|null
     */
    public function getReportJobStatus()
    {
        return $this->container['report_job_status'];
    }

    /**
     * Sets report_job_status
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportJobStatus|null $report_job_status report_job_status
     *
     * @return self
     */
    public function setReportJobStatus($report_job_status)
    {
        $this->container['report_job_status'] = $report_job_status;

        return $this;
    }

    /**
     * Gets report_job_error_detail
     *
     * @return string|null
     */
    public function getReportJobErrorDetail()
    {
        return $this->container['report_job_error_detail'];
    }

    /**
     * Sets report_job_error_detail
     *
     * @param string|null $report_job_error_detail <div lang=\"ja\"> ジョブエラー詳細です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。<br> 「Over limit of file size.」が返される場合は、レポートのサイズが小さくなるようにレポート作成時の条件を変更してください。 </div> <div lang=\"en\"> Job Error Detail. <br> Although this field will be returned in the response, it will be ignored on input.<br> If the message \"Over limit of file size.\" is returned, change the report creation conditions to reduce the size of the report. </div>
     *
     * @return self
     */
    public function setReportJobErrorDetail($report_job_error_detail)
    {
        $this->container['report_job_error_detail'] = $report_job_error_detail;

        return $this;
    }

    /**
     * Gets report_job_id
     *
     * @return int|null
     */
    public function getReportJobId()
    {
        return $this->container['report_job_id'];
    }

    /**
     * Sets report_job_id
     *
     * @param int|null $report_job_id <div lang=\"ja\"> レポートジョブIDです。<br> このフィールドは、REMOVE時に必須となり、ADD時に無視されます。 </div> <div lang=\"en\"> Report Job Id. <br> This field is required in REMOVE operation, and will be ignored in ADD operation. </div>
     *
     * @return self
     */
    public function setReportJobId($report_job_id)
    {
        $this->container['report_job_id'] = $report_job_id;

        return $this;
    }

    /**
     * Gets report_language
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportLanguage|null
     */
    public function getReportLanguage()
    {
        return $this->container['report_language'];
    }

    /**
     * Sets report_language
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportLanguage|null $report_language report_language
     *
     * @return self
     */
    public function setReportLanguage($report_language)
    {
        $this->container['report_language'] = $report_language;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string|null $report_name <div lang=\"ja\"> レポート名です。<br> このフィールドは、ADD時に省略可能となり、REMOVE時に無視されます。 </div> <div lang=\"en\"> Report name. <br> This field is optional in ADD operation, and will be ignored in REMOVE operation. </div>
     *
     * @return self
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets request_time
     *
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->container['request_time'];
    }

    /**
     * Sets request_time
     *
     * @param string|null $request_time <div lang=\"ja\"> ジョブ依頼日時です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> The date and time of Job request. <br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setRequestTime($request_time)
    {
        $this->container['request_time'] = $request_time;

        return $this;
    }

    /**
     * Gets report_skip_column_header
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipColumnHeader|null
     */
    public function getReportSkipColumnHeader()
    {
        return $this->container['report_skip_column_header'];
    }

    /**
     * Sets report_skip_column_header
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipColumnHeader|null $report_skip_column_header report_skip_column_header
     *
     * @return self
     */
    public function setReportSkipColumnHeader($report_skip_column_header)
    {
        $this->container['report_skip_column_header'] = $report_skip_column_header;

        return $this;
    }

    /**
     * Gets report_skip_report_summary
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipReportSummary|null
     */
    public function getReportSkipReportSummary()
    {
        return $this->container['report_skip_report_summary'];
    }

    /**
     * Sets report_skip_report_summary
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSkipReportSummary|null $report_skip_report_summary report_skip_report_summary
     *
     * @return self
     */
    public function setReportSkipReportSummary($report_skip_report_summary)
    {
        $this->container['report_skip_report_summary'] = $report_skip_report_summary;

        return $this;
    }

    /**
     * Gets report_decimal_part_display_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDecimalPartDisplayType|null
     */
    public function getReportDecimalPartDisplayType()
    {
        return $this->container['report_decimal_part_display_type'];
    }

    /**
     * Sets report_decimal_part_display_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportDecimalPartDisplayType|null $report_decimal_part_display_type report_decimal_part_display_type
     *
     * @return self
     */
    public function setReportDecimalPartDisplayType($report_decimal_part_display_type)
    {
        $this->container['report_decimal_part_display_type'] = $report_decimal_part_display_type;

        return $this;
    }

    /**
     * Gets report_type_condition
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportTypeCondition|null
     */
    public function getReportTypeCondition()
    {
        return $this->container['report_type_condition'];
    }

    /**
     * Sets report_type_condition
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportTypeCondition|null $report_type_condition report_type_condition
     *
     * @return self
     */
    public function setReportTypeCondition($report_type_condition)
    {
        $this->container['report_type_condition'] = $report_type_condition;

        return $this;
    }

    /**
     * Gets sort_fields
     *
     * @return \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSortField[]|null
     */
    public function getSortFields()
    {
        return $this->container['sort_fields'];
    }

    /**
     * Sets sort_fields
     *
     * @param \YahooAdsDisplayApi\Client\Model\ReportDefinitionServiceReportSortField[]|null $sort_fields sort_fields
     *
     * @return self
     */
    public function setSortFields($sort_fields)
    {

        if (!is_null($sort_fields) && (count($sort_fields) > 5)) {
            throw new \InvalidArgumentException('invalid value for $sort_fields when calling ReportDefinition., number of items must be less than or equal to 5.');
        }
        $this->container['sort_fields'] = $sort_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


