<?php
/**
 * GuaranteedSimulationServiceInstreamDurationType
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
 * GuaranteedSimulationServiceInstreamDurationType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;GuaranteedSimulationServiceInstreamDurationTypeは、インストリーム広告の尺の種類を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;GuaranteedSimulationServiceInstreamDurationType describes the duration type of in-stream ads.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MAX_6_SECONDS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;最大6秒です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Max 6 seconds.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MAX_15_SECONDS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;最大15秒です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Max 15 seconds.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MAX_30_SECONDS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;最大30秒です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Max 30 seconds.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNLIMITED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;上限なしです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;No upper limit.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GuaranteedSimulationServiceInstreamDurationType
{
    /**
     * Possible values of this enum
     */
    const MAX_6_SECONDS = 'MAX_6_SECONDS';
    const MAX_15_SECONDS = 'MAX_15_SECONDS';
    const MAX_30_SECONDS = 'MAX_30_SECONDS';
    const UNLIMITED = 'UNLIMITED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MAX_6_SECONDS,
            self::MAX_15_SECONDS,
            self::MAX_30_SECONDS,
            self::UNLIMITED,
            self::UNKNOWN,
        ];
    }
}


