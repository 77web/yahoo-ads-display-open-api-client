<?php
/**
 * RetargetingListServiceTargetListSize
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
 * RetargetingListServiceTargetListSize Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; RetargetingListServiceTargetListSizeは、類似ターゲットリストのサイズを表します。&lt;br&gt; similarityTargetList配下では、ADD時およびSET時に省略可能となり、REMOVE時に無視されます。&lt;br&gt; ※ADD時のデフォルト設定値はRATE_10となります。&lt;br&gt; targetListSizeReaches配下では、このフィールドはレスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; RetargetingListServiceTargetListSize serves target list size of similarity target list. &lt;br&gt; Under similaritytargetList, this field is optional in ADD and SET operation, and will be ignored in REMOVE operation. &lt;br&gt; *The default value in ADD operation will be RATE_10. &lt;br&gt; Under targetListSizeReaches, although this field will be returned in the response, it will be ignored on input. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_1&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.1&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.1&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_2&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.2&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.2&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_3&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.3&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.3&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_4&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.4&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.4&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_5&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.5&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.5&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_6&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.6&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.6&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_7&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.7&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.7&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_8&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.8&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.8&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_9&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値0.9&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 0.9&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RATE_10&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;類似度：閾値1.0&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Similarity: Threshold 1.0&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceTargetListSize
{
    /**
     * Possible values of this enum
     */
    const RATE_1 = 'RATE_1';
    const RATE_2 = 'RATE_2';
    const RATE_3 = 'RATE_3';
    const RATE_4 = 'RATE_4';
    const RATE_5 = 'RATE_5';
    const RATE_6 = 'RATE_6';
    const RATE_7 = 'RATE_7';
    const RATE_8 = 'RATE_8';
    const RATE_9 = 'RATE_9';
    const RATE_10 = 'RATE_10';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RATE_1,
            self::RATE_2,
            self::RATE_3,
            self::RATE_4,
            self::RATE_5,
            self::RATE_6,
            self::RATE_7,
            self::RATE_8,
            self::RATE_9,
            self::RATE_10,
            self::UNKNOWN,
        ];
    }
}


