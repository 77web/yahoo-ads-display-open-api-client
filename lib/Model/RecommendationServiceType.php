<?php
/**
 * RecommendationServiceType
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
 * RecommendationServiceType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; RecommendationServiceTypeは、最適化提案の種別です。&lt;br&gt; このフィールドは、リクエストの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; RecommendationServiceType is a type of Recommendations.&lt;br&gt; This field is required in requests. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DAILY_BUDGET_OVER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;1日の予算上限に達したキャンペーンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaigns that reached the daily budget.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;IMPRESSION_SHARE_BUDGET_LOSS_OVER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;インプレッションシェア損失率（予算）が大きいキャンペーンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaigns that have a large lost impression share (budget).&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BID_STRATEGY_TO_TARGET_CPA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;自動入札（コンバージョン単価の目標値）に適しているキャンペーンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaigns that are suitable for using autobidding (target CPA).&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MIGRATE_TO_YDA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;ディスプレイ広告（運用型）形式への変換が必要なキャンペーンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaigns that are required to convert to Display Ads (Auction).&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SEARCH_KEYWORD_LIST_IDEA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;追加を推奨するサーチキーワードです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Recommended search keywords to add.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RecommendationServiceType
{
    /**
     * Possible values of this enum
     */
    const DAILY_BUDGET_OVER = 'DAILY_BUDGET_OVER';
    const IMPRESSION_SHARE_BUDGET_LOSS_OVER = 'IMPRESSION_SHARE_BUDGET_LOSS_OVER';
    const BID_STRATEGY_TO_TARGET_CPA = 'BID_STRATEGY_TO_TARGET_CPA';
    const MIGRATE_TO_YDA = 'MIGRATE_TO_YDA';
    const SEARCH_KEYWORD_LIST_IDEA = 'SEARCH_KEYWORD_LIST_IDEA';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAILY_BUDGET_OVER,
            self::IMPRESSION_SHARE_BUDGET_LOSS_OVER,
            self::BID_STRATEGY_TO_TARGET_CPA,
            self::MIGRATE_TO_YDA,
            self::SEARCH_KEYWORD_LIST_IDEA,
            self::UNKNOWN,
        ];
    }
}


