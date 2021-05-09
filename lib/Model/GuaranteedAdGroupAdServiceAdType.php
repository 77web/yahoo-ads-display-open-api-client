<?php
/**
 * GuaranteedAdGroupAdServiceAdType
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
 * GuaranteedAdGroupAdServiceAdType Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedAdGroupAdServiceAdTypeは、広告タイプを表します。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。&lt;br&gt; なお、選択した配信先デバイスにより、指定可能な広告の文字数は異なる場合があります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedAdGroupAdServiceAdType describes the type of ad.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation.&lt;br&gt; In addition, the number of available characters of ad creatives vary with selected devices. &lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BANNER_VIDEO_AD&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;動画で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad composed of video.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BANNER_IMAGE_AD&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Ad composed of image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BRANDPANEL_QUINTIE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：16:9の縮小機能付き画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 16:9 image with reduction function.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BRANDPANEL_QUINTIE_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：16:9の縮小機能付き動画で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 16:9 video with reduction function.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BRANDPANEL_PANORAMA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：4:1の縮小機能付き画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 4:1 video with reduction function.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;BRANDPANEL_PANORAMA_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：4:1の縮小機能付き動画で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 4:1 video with reduction function.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_SQUARE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの1:1の画像と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 1:1 image, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_SQUARE_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの1:1の動画と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 1:1 video, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_QUINTIE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの16:9の縮小機能付き画像と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 16:9 image with reduction function, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_QUINTIE_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの16:9の縮小機能付き動画と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 16:9 video with reduction function, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PANORAMA&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの4:1の縮小機能付き画像と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 4:1 image with reduction function, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PANORAMA_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの4:1の縮小機能付き動画と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 4:1 video with reduction function, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PANORAMA_SIDE_VISION_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：16:9の縮小機能付き動画で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 16:9 video with reduction function.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PANORAMA_SIDE_SWITCH_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの4:1の縮小機能付き動画と、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 4:1 video with reduction function, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_THEATER_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの16:9の動画と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 16:9 video, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_SQUARE_SPECIAL&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの1:1の画像と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 1:1 image, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_SQUARE_SPECIAL_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの1:1の動画と、センター画像、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 1:1 video, the center image, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PRIME_DISPLAY_DOUBLE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの2:1の画像と、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 2:1 video, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;TOP_IMPACT_PRIME_DISPLAY_DOUBLE_VIDEO&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：メインの2:1の動画と、右サイド画像、左サイド画像で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of the main 2:1 video, the right side image, and the left side image.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;INSTREAM_VIDEO_AD&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;予約型専用広告：16:9の動画で構成される広告です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Guaranteed ad composed of 16:9 video.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value.&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GuaranteedAdGroupAdServiceAdType
{
    /**
     * Possible values of this enum
     */
    const BANNER_VIDEO_AD = 'BANNER_VIDEO_AD';
    const BANNER_IMAGE_AD = 'BANNER_IMAGE_AD';
    const BRANDPANEL_QUINTIE = 'BRANDPANEL_QUINTIE';
    const BRANDPANEL_QUINTIE_VIDEO = 'BRANDPANEL_QUINTIE_VIDEO';
    const BRANDPANEL_PANORAMA = 'BRANDPANEL_PANORAMA';
    const BRANDPANEL_PANORAMA_VIDEO = 'BRANDPANEL_PANORAMA_VIDEO';
    const TOP_IMPACT_SQUARE = 'TOP_IMPACT_SQUARE';
    const TOP_IMPACT_SQUARE_VIDEO = 'TOP_IMPACT_SQUARE_VIDEO';
    const TOP_IMPACT_QUINTIE = 'TOP_IMPACT_QUINTIE';
    const TOP_IMPACT_QUINTIE_VIDEO = 'TOP_IMPACT_QUINTIE_VIDEO';
    const TOP_IMPACT_PANORAMA = 'TOP_IMPACT_PANORAMA';
    const TOP_IMPACT_PANORAMA_VIDEO = 'TOP_IMPACT_PANORAMA_VIDEO';
    const TOP_IMPACT_PANORAMA_SIDE_VISION_VIDEO = 'TOP_IMPACT_PANORAMA_SIDE_VISION_VIDEO';
    const TOP_IMPACT_PANORAMA_SIDE_SWITCH_VIDEO = 'TOP_IMPACT_PANORAMA_SIDE_SWITCH_VIDEO';
    const TOP_IMPACT_THEATER_VIDEO = 'TOP_IMPACT_THEATER_VIDEO';
    const TOP_IMPACT_SQUARE_SPECIAL = 'TOP_IMPACT_SQUARE_SPECIAL';
    const TOP_IMPACT_SQUARE_SPECIAL_VIDEO = 'TOP_IMPACT_SQUARE_SPECIAL_VIDEO';
    const TOP_IMPACT_PRIME_DISPLAY_DOUBLE = 'TOP_IMPACT_PRIME_DISPLAY_DOUBLE';
    const TOP_IMPACT_PRIME_DISPLAY_DOUBLE_VIDEO = 'TOP_IMPACT_PRIME_DISPLAY_DOUBLE_VIDEO';
    const INSTREAM_VIDEO_AD = 'INSTREAM_VIDEO_AD';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANNER_VIDEO_AD,
            self::BANNER_IMAGE_AD,
            self::BRANDPANEL_QUINTIE,
            self::BRANDPANEL_QUINTIE_VIDEO,
            self::BRANDPANEL_PANORAMA,
            self::BRANDPANEL_PANORAMA_VIDEO,
            self::TOP_IMPACT_SQUARE,
            self::TOP_IMPACT_SQUARE_VIDEO,
            self::TOP_IMPACT_QUINTIE,
            self::TOP_IMPACT_QUINTIE_VIDEO,
            self::TOP_IMPACT_PANORAMA,
            self::TOP_IMPACT_PANORAMA_VIDEO,
            self::TOP_IMPACT_PANORAMA_SIDE_VISION_VIDEO,
            self::TOP_IMPACT_PANORAMA_SIDE_SWITCH_VIDEO,
            self::TOP_IMPACT_THEATER_VIDEO,
            self::TOP_IMPACT_SQUARE_SPECIAL,
            self::TOP_IMPACT_SQUARE_SPECIAL_VIDEO,
            self::TOP_IMPACT_PRIME_DISPLAY_DOUBLE,
            self::TOP_IMPACT_PRIME_DISPLAY_DOUBLE_VIDEO,
            self::INSTREAM_VIDEO_AD,
            self::UNKNOWN,
        ];
    }
}


