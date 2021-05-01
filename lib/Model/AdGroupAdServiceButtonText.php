<?php
/**
 * AdGroupAdServiceButtonText
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
 * AdGroupAdServiceButtonText Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupAdServiceButtonTextはボタンテキストを表します。&lt;br&gt; このフィールドは、dynamicAd、responsiveImageAdおよびresponsiveVideoAd配下では省略可能となります。その際、dynamicAd配下では、ADD時のデフォルト設定値はFOR_MORE_INFOとなります。&lt;br&gt; また、staticFrameAd配下では、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupAdServiceButtonText displays the button text.&lt;br&gt; This field will be optional under dynamicAd, responsiveImageAd, and responsiveVideoAd. In these cases, under dynamicAd, the default value in ADD operation will be FOR_MORE_INFO.&lt;br&gt; Under staticFrameAd, although this field will be returned in the response,it will be ignored on input. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;INSTALL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「インストール」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Install.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;MORE_DETAIL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「詳しくはこちら」ボタンです。（デフォルト値です）&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;More detail.&amp;#34; button.（Default）&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONFIRM_PROPERTY&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「物件を見る」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Confirm property.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DOWNLOAD&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「ダウンロード」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Download.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;REGISTER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「ご登録はこちら」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Register here.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;PURCHASE_NOW&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「今すぐ購入」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Buy now.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;REQUEST_INFO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「資料請求」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Request information.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RESERVE_NOW&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「今すぐ予約」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Reserve now.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;REGISTER_NOW&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「今すぐ登録」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Register now.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;EXPERIENCE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「体験する」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Experience.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;RESERVE_HERE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「ご予約はこちら」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Reserve here.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;APPLY_NOW&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「今すぐ申込む」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Apply now.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;FOR_MORE_INFO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「もっとみる」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;More information.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;PURCHASE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「ご購入はこちら」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Buy here.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONTACT_US&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「お問い合わせ」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Contact us.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONFIRM_NOW&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「今すぐチェック」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Check now.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;APPLY_HERE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;「お申込みはこちら」ボタンです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;&amp;#34;Click here to apply.&amp;#34; button.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceButtonText
{
    /**
     * Possible values of this enum
     */
    const FOR_MORE_INFO = 'FOR_MORE_INFO';
    const CONFIRM_NOW = 'CONFIRM_NOW';
    const APPLY_HERE = 'APPLY_HERE';
    const PURCHASE = 'PURCHASE';
    const EXPERIENCE = 'EXPERIENCE';
    const CONFIRM_PROPERTY = 'CONFIRM_PROPERTY';
    const REQUEST_INFO = 'REQUEST_INFO';
    const DOWNLOAD = 'DOWNLOAD';
    const INSTALL = 'INSTALL';
    const MORE_DETAIL = 'MORE_DETAIL';
    const RESERVE_HERE = 'RESERVE_HERE';
    const REGISTER = 'REGISTER';
    const APPLY_NOW = 'APPLY_NOW';
    const PURCHASE_NOW = 'PURCHASE_NOW';
    const RESERVE_NOW = 'RESERVE_NOW';
    const REGISTER_NOW = 'REGISTER_NOW';
    const CONTACT_US = 'CONTACT_US';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FOR_MORE_INFO,
            self::CONFIRM_NOW,
            self::APPLY_HERE,
            self::PURCHASE,
            self::EXPERIENCE,
            self::CONFIRM_PROPERTY,
            self::REQUEST_INFO,
            self::DOWNLOAD,
            self::INSTALL,
            self::MORE_DETAIL,
            self::RESERVE_HERE,
            self::REGISTER,
            self::APPLY_NOW,
            self::PURCHASE_NOW,
            self::RESERVE_NOW,
            self::REGISTER_NOW,
            self::CONTACT_US,
            self::UNKNOWN,
        ];
    }
}


