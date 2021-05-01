<?php
/**
 * FeedServiceSourceType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FeedServiceSourceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedServiceSourceTypeは、ファイルアップロード実施ツールの種別を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedServiceSourceType serves file upload tool type.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FTP_SCHEDULE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;FTP(スケジュール)によるアップロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload by FTP(SCHEDULE).&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FTP_DIRECT&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;FTP(即時)によるアップロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload by FTP(DIRECT).&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;API&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;APIによるアップロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload by API.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FTP_AND_API&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;FTP+APIによるアップロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload by FTP and API.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CAMPAIGN_MANAGEMENT_TOOL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告管理ツールによるアップロードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Upload by Campaign Management Tool.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedServiceSourceType
{
    /**
     * Possible values of this enum
     */
    const FTP_SCHEDULE = 'FTP_SCHEDULE';
    const FTP_DIRECT = 'FTP_DIRECT';
    const API = 'API';
    const FTP_AND_API = 'FTP_AND_API';
    const CAMPAIGN_MANAGEMENT_TOOL = 'CAMPAIGN_MANAGEMENT_TOOL';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FTP_SCHEDULE,
            self::FTP_DIRECT,
            self::API,
            self::FTP_AND_API,
            self::CAMPAIGN_MANAGEMENT_TOOL,
            self::UNKNOWN,
        ];
    }
}

