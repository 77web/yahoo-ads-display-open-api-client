<?php
/**
 * StatsServiceTargetType
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
 * StatsServiceTargetType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;StatsServiceTargetTypeは、ターゲティングの種別を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;StatsServiceTargetType stands for types of target.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;AD_SCHEDULE_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;時間帯ターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Days of Week/Hour Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GEO_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;地域ターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Geographic Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;AGE_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;年齢ターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Age Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GENDER_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;性別ターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Gender Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;INTEREST_CATEGORY&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;インタレストカテゴリターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Interest Category Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SITE_CATEGORY&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;サイトカテゴリターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Site Category Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SITE_RETARGETING&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;サイトリターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Site Retargeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SEARCH_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;サーチターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Search Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;PLACEMENT_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;プレイスメントターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Placement Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DEVICE_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;デバイスターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Device Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CARRIER_TARGET&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;キャリアターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Carrier Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;AUDIENCE_CATEGORY&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;オーディエンスカテゴリーターゲティング&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Audience Category Targeting&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatsServiceTargetType
{
    /**
     * Possible values of this enum
     */
    const AD_SCHEDULE_TARGET = 'AD_SCHEDULE_TARGET';
    const GEO_TARGET = 'GEO_TARGET';
    const AGE_TARGET = 'AGE_TARGET';
    const GENDER_TARGET = 'GENDER_TARGET';
    const INTEREST_CATEGORY = 'INTEREST_CATEGORY';
    const SITE_CATEGORY = 'SITE_CATEGORY';
    const SITE_RETARGETING = 'SITE_RETARGETING';
    const SEARCH_TARGET = 'SEARCH_TARGET';
    const PLACEMENT_TARGET = 'PLACEMENT_TARGET';
    const DEVICE_TARGET = 'DEVICE_TARGET';
    const CARRIER_TARGET = 'CARRIER_TARGET';
    const AUDIENCE_CATEGORY = 'AUDIENCE_CATEGORY';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD_SCHEDULE_TARGET,
            self::GEO_TARGET,
            self::AGE_TARGET,
            self::GENDER_TARGET,
            self::INTEREST_CATEGORY,
            self::SITE_CATEGORY,
            self::SITE_RETARGETING,
            self::SEARCH_TARGET,
            self::PLACEMENT_TARGET,
            self::DEVICE_TARGET,
            self::CARRIER_TARGET,
            self::AUDIENCE_CATEGORY,
            self::UNKNOWN,
        ];
    }
}


