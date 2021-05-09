<?php
/**
 * GuaranteedSimulationServiceAdPlaceType
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
 * GuaranteedSimulationServiceAdPlaceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedSimulationServiceAdPlaceTypeは、広告の掲載面を表します。&lt;br&gt; このフィールドは、ADD時は必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedSimulationServiceAdPlaceType describes the ad placements.&lt;br&gt; This field is required in ADD operation. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;YAHOO_JAPAN_TOP&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「Yahoo! JAPANトップページ」です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Top page of \&quot;Yahoo! Japan\&quot;.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;YAHOO_JAPAN_ALL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「Yahoo! JAPAN全て」です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;All of \&quot;Yahoo! Japan\&quot;.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;YAHOO_JAPAN_EXCLUSION_OF_TOP&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「Yahoo! JAPANトップページ以外」です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;All of \&quot;Yahoo! Japan\&quot; except the top page.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GuaranteedSimulationServiceAdPlaceType
{
    /**
     * Possible values of this enum
     */
    const YAHOO_JAPAN_TOP = 'YAHOO_JAPAN_TOP';
    const YAHOO_JAPAN_ALL = 'YAHOO_JAPAN_ALL';
    const YAHOO_JAPAN_EXCLUSION_OF_TOP = 'YAHOO_JAPAN_EXCLUSION_OF_TOP';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::YAHOO_JAPAN_TOP,
            self::YAHOO_JAPAN_ALL,
            self::YAHOO_JAPAN_EXCLUSION_OF_TOP,
            self::UNKNOWN,
        ];
    }
}


