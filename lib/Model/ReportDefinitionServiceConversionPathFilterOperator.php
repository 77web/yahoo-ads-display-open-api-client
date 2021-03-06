<?php
/**
 * ReportDefinitionServiceConversionPathFilterOperator
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
 * ReportDefinitionServiceConversionPathFilterOperator Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   ReportDefinitionServiceConversionPathFilterOperatorは、コンバージョン経路レポートにおけるフィルター条件の項目を示します。&lt;br&gt;   このフィールドは、ADD時に省略可能となり、REMOVE時に無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   ReportDefinitionServiceConversionPathFilterOperator indicates the filter condition item of Conversion Path Report. &lt;br&gt;    This field is optional in ADD operation, and will be ignored in REMOVE operation.  &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;EQUALS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;完全一致する対象を含む経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that includes an exact match target.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NOT_EQUALS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;完全一致する対象を含まない経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that does not include an exact match target.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONTAINS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;部分一致する対象を含む経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that includes a broad match target.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NOT_CONTAINS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;部分一致する対象を含まない経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that does not include a broad match target.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;START_WITH&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;前方一致する対象を含む経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that includes prefix match target.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;END_WITH&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;後方一致する対象を含む経路です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;A path that includes backward match target. &lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceConversionPathFilterOperator
{
    /**
     * Possible values of this enum
     */
    const EQUALS = 'EQUALS';
    const NOT_EQUALS = 'NOT_EQUALS';
    const CONTAINS = 'CONTAINS';
    const NOT_CONTAINS = 'NOT_CONTAINS';
    const START_WITH = 'START_WITH';
    const END_WITH = 'END_WITH';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EQUALS,
            self::NOT_EQUALS,
            self::CONTAINS,
            self::NOT_CONTAINS,
            self::START_WITH,
            self::END_WITH,
            self::UNKNOWN,
        ];
    }
}


