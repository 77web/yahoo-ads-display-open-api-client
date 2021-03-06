<?php
/**
 * CampaignMigrationServiceJobStatus
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
use \YahooAdsDisplayApi\Client\ObjectSerializer;

/**
 * CampaignMigrationServiceJobStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignMigrationServiceJobStatusはマイグレーションジョブの状態を示します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignMigrationServiceJobStatus object indicates migration job status.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NOT_STARTED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未処理&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unprocessed&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;IN_PROGRESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;処理中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;In progress&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COMPLETED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;正常終了&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Completed&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FILE_FORMAT_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ファイルフォーマットエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;File format error&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;INVALID_CSV_VALUE_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;異常なCSVの値&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Abnormal CSV value&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN_CSV_FIELD_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知のCSVフィールドエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown CSV field error&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SYSTEM_ERROR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;システムエラー&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;System error&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignMigrationServiceJobStatus
{
    /**
     * Possible values of this enum
     */
    const NOT_STARTED = 'NOT_STARTED';
    const IN_PROGRESS = 'IN_PROGRESS';
    const COMPLETED = 'COMPLETED';
    const FILE_FORMAT_ERROR = 'FILE_FORMAT_ERROR';
    const INVALID_CSV_VALUE_ERROR = 'INVALID_CSV_VALUE_ERROR';
    const UNKNOWN_CSV_FIELD_ERROR = 'UNKNOWN_CSV_FIELD_ERROR';
    const SYSTEM_ERROR = 'SYSTEM_ERROR';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_STARTED,
            self::IN_PROGRESS,
            self::COMPLETED,
            self::FILE_FORMAT_ERROR,
            self::INVALID_CSV_VALUE_ERROR,
            self::UNKNOWN_CSV_FIELD_ERROR,
            self::SYSTEM_ERROR,
            self::UNKNOWN,
        ];
    }
}


