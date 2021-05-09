<?php
/**
 * AccountManagementServiceEnterpriseType
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
 * AccountManagementServiceEnterpriseType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AccountManagementServiceEnterpriseTypeは、企業形態を表します。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は無視されます。&lt;br&gt; ※clientTypeがSELFの場合は、ADD時、SET時ともに無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AccountManagementServiceEnterpriseType object describes type of enterprise.&lt;br&gt; This field is required in ADD operation, and will be ignored in SET operation.&lt;br&gt; * When clientType is \&quot;SELF\&quot;, this field will be ignored in ADD and SET operations. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;KABUSHIKI&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;株式会社&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;KABUSHIKI&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;YUGEN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;有限会社&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;YUGEN&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GOSI&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;合資会社&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;GOSI&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;ZAIDAN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;財団法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;ZAIDAN&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SYADAN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;社団法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;SYADAN&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SYUKYO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;宗教法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;SYUKYO&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GAKKO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;学校法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;GAKKO&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;KOJIN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;個人事業主&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;KOJIN&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;OTHER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;その他法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;OTHER&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GOMEI&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;合名会社&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;GOMEI&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;HIEIRI&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;特定非営利活動法人&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;HIEIRI&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;GODO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;合同会社&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;GODO&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;KYODO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;協同組合&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;KYODO&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountManagementServiceEnterpriseType
{
    /**
     * Possible values of this enum
     */
    const KABUSHIKI = 'KABUSHIKI';
    const YUGEN = 'YUGEN';
    const GOSI = 'GOSI';
    const ZAIDAN = 'ZAIDAN';
    const SYADAN = 'SYADAN';
    const SYUKYO = 'SYUKYO';
    const GAKKO = 'GAKKO';
    const KOJIN = 'KOJIN';
    const OTHER = 'OTHER';
    const GOMEI = 'GOMEI';
    const HIEIRI = 'HIEIRI';
    const GODO = 'GODO';
    const KYODO = 'KYODO';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::KABUSHIKI,
            self::YUGEN,
            self::GOSI,
            self::ZAIDAN,
            self::SYADAN,
            self::SYUKYO,
            self::GAKKO,
            self::KOJIN,
            self::OTHER,
            self::GOMEI,
            self::HIEIRI,
            self::GODO,
            self::KYODO,
            self::UNKNOWN,
        ];
    }
}


