<?php
/**
 * BrandLiftServiceGoal
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
 * BrandLiftServiceGoal Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; BrandLiftServiceGoalは、調査目的を表します。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; BrandLiftServiceGoal describes the survey goal. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;AD_RECALL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;広告想起です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ads recall.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BRAND_AWARENESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ブランド認知です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Brand awareness.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MESSAGE_ASSOCIATION&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;メッセージ連想です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Message association.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;PURCHASE_INTENTION&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;購入意向です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Purchase intention.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FAVOR&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;好意度です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Favorableness.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;COMPARISON&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;比較検討です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Comparative consideration.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BrandLiftServiceGoal
{
    /**
     * Possible values of this enum
     */
    const AD_RECALL = 'AD_RECALL';
    const BRAND_AWARENESS = 'BRAND_AWARENESS';
    const MESSAGE_ASSOCIATION = 'MESSAGE_ASSOCIATION';
    const PURCHASE_INTENTION = 'PURCHASE_INTENTION';
    const FAVOR = 'FAVOR';
    const COMPARISON = 'COMPARISON';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD_RECALL,
            self::BRAND_AWARENESS,
            self::MESSAGE_ASSOCIATION,
            self::PURCHASE_INTENTION,
            self::FAVOR,
            self::COMPARISON,
            self::UNKNOWN,
        ];
    }
}


