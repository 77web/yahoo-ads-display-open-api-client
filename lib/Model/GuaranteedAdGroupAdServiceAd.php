<?php
/**
 * GuaranteedAdGroupAdServiceAd
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

use \ArrayAccess;
use \YahooAdsDisplayApi\Client\ObjectSerializer;

/**
 * GuaranteedAdGroupAdServiceAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedAdGroupAdServiceAdオブジェクトは、広告を格納するコンテナです。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedAdGroupAdServiceAd object is a container for storing ads.&lt;br&gt; &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedAdGroupAdServiceAd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedAdGroupAdServiceAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_type' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceAdType',
        'banner_image_ad' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerImageAd',
        'banner_video_ad' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerVideoAd',
        'brand_panel_quintie' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintie',
        'brand_panel_panorama' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanorama',
        'brand_panel_panorama_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanoramaVideo',
        'brand_panel_quintie_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintieVideo',
        'top_impact_square' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquare',
        'top_impact_square_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareVideo',
        'top_impact_quintie' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintie',
        'top_impact_quintie_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintieVideo',
        'top_impact_panorama' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanorama',
        'top_impact_panorama_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaVideo',
        'top_impact_panorama_side_vision_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideVisionVideo',
        'top_impact_panorama_side_switch_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideSwitchVideo',
        'top_impact_theater_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactTheaterVideo',
        'top_impact_square_special' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecial',
        'top_impact_square_special_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecialVideo',
        'top_impact_prime_display_double' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDouble',
        'top_impact_prime_display_double_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDoubleVideo',
        'instream_video' => '\YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceInstreamVideoAd'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ad_type' => null,
        'banner_image_ad' => null,
        'banner_video_ad' => null,
        'brand_panel_quintie' => null,
        'brand_panel_panorama' => null,
        'brand_panel_panorama_video' => null,
        'brand_panel_quintie_video' => null,
        'top_impact_square' => null,
        'top_impact_square_video' => null,
        'top_impact_quintie' => null,
        'top_impact_quintie_video' => null,
        'top_impact_panorama' => null,
        'top_impact_panorama_video' => null,
        'top_impact_panorama_side_vision_video' => null,
        'top_impact_panorama_side_switch_video' => null,
        'top_impact_theater_video' => null,
        'top_impact_square_special' => null,
        'top_impact_square_special_video' => null,
        'top_impact_prime_display_double' => null,
        'top_impact_prime_display_double_video' => null,
        'instream_video' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ad_type' => 'adType',
        'banner_image_ad' => 'bannerImageAd',
        'banner_video_ad' => 'bannerVideoAd',
        'brand_panel_quintie' => 'brandPanelQuintie',
        'brand_panel_panorama' => 'brandPanelPanorama',
        'brand_panel_panorama_video' => 'brandPanelPanoramaVideo',
        'brand_panel_quintie_video' => 'brandPanelQuintieVideo',
        'top_impact_square' => 'topImpactSquare',
        'top_impact_square_video' => 'topImpactSquareVideo',
        'top_impact_quintie' => 'topImpactQuintie',
        'top_impact_quintie_video' => 'topImpactQuintieVideo',
        'top_impact_panorama' => 'topImpactPanorama',
        'top_impact_panorama_video' => 'topImpactPanoramaVideo',
        'top_impact_panorama_side_vision_video' => 'topImpactPanoramaSideVisionVideo',
        'top_impact_panorama_side_switch_video' => 'topImpactPanoramaSideSwitchVideo',
        'top_impact_theater_video' => 'topImpactTheaterVideo',
        'top_impact_square_special' => 'topImpactSquareSpecial',
        'top_impact_square_special_video' => 'topImpactSquareSpecialVideo',
        'top_impact_prime_display_double' => 'topImpactPrimeDisplayDouble',
        'top_impact_prime_display_double_video' => 'topImpactPrimeDisplayDoubleVideo',
        'instream_video' => 'instreamVideo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_type' => 'setAdType',
        'banner_image_ad' => 'setBannerImageAd',
        'banner_video_ad' => 'setBannerVideoAd',
        'brand_panel_quintie' => 'setBrandPanelQuintie',
        'brand_panel_panorama' => 'setBrandPanelPanorama',
        'brand_panel_panorama_video' => 'setBrandPanelPanoramaVideo',
        'brand_panel_quintie_video' => 'setBrandPanelQuintieVideo',
        'top_impact_square' => 'setTopImpactSquare',
        'top_impact_square_video' => 'setTopImpactSquareVideo',
        'top_impact_quintie' => 'setTopImpactQuintie',
        'top_impact_quintie_video' => 'setTopImpactQuintieVideo',
        'top_impact_panorama' => 'setTopImpactPanorama',
        'top_impact_panorama_video' => 'setTopImpactPanoramaVideo',
        'top_impact_panorama_side_vision_video' => 'setTopImpactPanoramaSideVisionVideo',
        'top_impact_panorama_side_switch_video' => 'setTopImpactPanoramaSideSwitchVideo',
        'top_impact_theater_video' => 'setTopImpactTheaterVideo',
        'top_impact_square_special' => 'setTopImpactSquareSpecial',
        'top_impact_square_special_video' => 'setTopImpactSquareSpecialVideo',
        'top_impact_prime_display_double' => 'setTopImpactPrimeDisplayDouble',
        'top_impact_prime_display_double_video' => 'setTopImpactPrimeDisplayDoubleVideo',
        'instream_video' => 'setInstreamVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_type' => 'getAdType',
        'banner_image_ad' => 'getBannerImageAd',
        'banner_video_ad' => 'getBannerVideoAd',
        'brand_panel_quintie' => 'getBrandPanelQuintie',
        'brand_panel_panorama' => 'getBrandPanelPanorama',
        'brand_panel_panorama_video' => 'getBrandPanelPanoramaVideo',
        'brand_panel_quintie_video' => 'getBrandPanelQuintieVideo',
        'top_impact_square' => 'getTopImpactSquare',
        'top_impact_square_video' => 'getTopImpactSquareVideo',
        'top_impact_quintie' => 'getTopImpactQuintie',
        'top_impact_quintie_video' => 'getTopImpactQuintieVideo',
        'top_impact_panorama' => 'getTopImpactPanorama',
        'top_impact_panorama_video' => 'getTopImpactPanoramaVideo',
        'top_impact_panorama_side_vision_video' => 'getTopImpactPanoramaSideVisionVideo',
        'top_impact_panorama_side_switch_video' => 'getTopImpactPanoramaSideSwitchVideo',
        'top_impact_theater_video' => 'getTopImpactTheaterVideo',
        'top_impact_square_special' => 'getTopImpactSquareSpecial',
        'top_impact_square_special_video' => 'getTopImpactSquareSpecialVideo',
        'top_impact_prime_display_double' => 'getTopImpactPrimeDisplayDouble',
        'top_impact_prime_display_double_video' => 'getTopImpactPrimeDisplayDoubleVideo',
        'instream_video' => 'getInstreamVideo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ad_type'] = $data['ad_type'] ?? null;
        $this->container['banner_image_ad'] = $data['banner_image_ad'] ?? null;
        $this->container['banner_video_ad'] = $data['banner_video_ad'] ?? null;
        $this->container['brand_panel_quintie'] = $data['brand_panel_quintie'] ?? null;
        $this->container['brand_panel_panorama'] = $data['brand_panel_panorama'] ?? null;
        $this->container['brand_panel_panorama_video'] = $data['brand_panel_panorama_video'] ?? null;
        $this->container['brand_panel_quintie_video'] = $data['brand_panel_quintie_video'] ?? null;
        $this->container['top_impact_square'] = $data['top_impact_square'] ?? null;
        $this->container['top_impact_square_video'] = $data['top_impact_square_video'] ?? null;
        $this->container['top_impact_quintie'] = $data['top_impact_quintie'] ?? null;
        $this->container['top_impact_quintie_video'] = $data['top_impact_quintie_video'] ?? null;
        $this->container['top_impact_panorama'] = $data['top_impact_panorama'] ?? null;
        $this->container['top_impact_panorama_video'] = $data['top_impact_panorama_video'] ?? null;
        $this->container['top_impact_panorama_side_vision_video'] = $data['top_impact_panorama_side_vision_video'] ?? null;
        $this->container['top_impact_panorama_side_switch_video'] = $data['top_impact_panorama_side_switch_video'] ?? null;
        $this->container['top_impact_theater_video'] = $data['top_impact_theater_video'] ?? null;
        $this->container['top_impact_square_special'] = $data['top_impact_square_special'] ?? null;
        $this->container['top_impact_square_special_video'] = $data['top_impact_square_special_video'] ?? null;
        $this->container['top_impact_prime_display_double'] = $data['top_impact_prime_display_double'] ?? null;
        $this->container['top_impact_prime_display_double_video'] = $data['top_impact_prime_display_double_video'] ?? null;
        $this->container['instream_video'] = $data['instream_video'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ad_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceAdType|null
     */
    public function getAdType()
    {
        return $this->container['ad_type'];
    }

    /**
     * Sets ad_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceAdType|null $ad_type ad_type
     *
     * @return self
     */
    public function setAdType($ad_type)
    {
        $this->container['ad_type'] = $ad_type;

        return $this;
    }

    /**
     * Gets banner_image_ad
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerImageAd|null
     */
    public function getBannerImageAd()
    {
        return $this->container['banner_image_ad'];
    }

    /**
     * Sets banner_image_ad
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerImageAd|null $banner_image_ad banner_image_ad
     *
     * @return self
     */
    public function setBannerImageAd($banner_image_ad)
    {
        $this->container['banner_image_ad'] = $banner_image_ad;

        return $this;
    }

    /**
     * Gets banner_video_ad
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerVideoAd|null
     */
    public function getBannerVideoAd()
    {
        return $this->container['banner_video_ad'];
    }

    /**
     * Sets banner_video_ad
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBannerVideoAd|null $banner_video_ad banner_video_ad
     *
     * @return self
     */
    public function setBannerVideoAd($banner_video_ad)
    {
        $this->container['banner_video_ad'] = $banner_video_ad;

        return $this;
    }

    /**
     * Gets brand_panel_quintie
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintie|null
     */
    public function getBrandPanelQuintie()
    {
        return $this->container['brand_panel_quintie'];
    }

    /**
     * Sets brand_panel_quintie
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintie|null $brand_panel_quintie brand_panel_quintie
     *
     * @return self
     */
    public function setBrandPanelQuintie($brand_panel_quintie)
    {
        $this->container['brand_panel_quintie'] = $brand_panel_quintie;

        return $this;
    }

    /**
     * Gets brand_panel_panorama
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanorama|null
     */
    public function getBrandPanelPanorama()
    {
        return $this->container['brand_panel_panorama'];
    }

    /**
     * Sets brand_panel_panorama
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanorama|null $brand_panel_panorama brand_panel_panorama
     *
     * @return self
     */
    public function setBrandPanelPanorama($brand_panel_panorama)
    {
        $this->container['brand_panel_panorama'] = $brand_panel_panorama;

        return $this;
    }

    /**
     * Gets brand_panel_panorama_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanoramaVideo|null
     */
    public function getBrandPanelPanoramaVideo()
    {
        return $this->container['brand_panel_panorama_video'];
    }

    /**
     * Sets brand_panel_panorama_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelPanoramaVideo|null $brand_panel_panorama_video brand_panel_panorama_video
     *
     * @return self
     */
    public function setBrandPanelPanoramaVideo($brand_panel_panorama_video)
    {
        $this->container['brand_panel_panorama_video'] = $brand_panel_panorama_video;

        return $this;
    }

    /**
     * Gets brand_panel_quintie_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintieVideo|null
     */
    public function getBrandPanelQuintieVideo()
    {
        return $this->container['brand_panel_quintie_video'];
    }

    /**
     * Sets brand_panel_quintie_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceBrandPanelQuintieVideo|null $brand_panel_quintie_video brand_panel_quintie_video
     *
     * @return self
     */
    public function setBrandPanelQuintieVideo($brand_panel_quintie_video)
    {
        $this->container['brand_panel_quintie_video'] = $brand_panel_quintie_video;

        return $this;
    }

    /**
     * Gets top_impact_square
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquare|null
     */
    public function getTopImpactSquare()
    {
        return $this->container['top_impact_square'];
    }

    /**
     * Sets top_impact_square
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquare|null $top_impact_square top_impact_square
     *
     * @return self
     */
    public function setTopImpactSquare($top_impact_square)
    {
        $this->container['top_impact_square'] = $top_impact_square;

        return $this;
    }

    /**
     * Gets top_impact_square_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareVideo|null
     */
    public function getTopImpactSquareVideo()
    {
        return $this->container['top_impact_square_video'];
    }

    /**
     * Sets top_impact_square_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareVideo|null $top_impact_square_video top_impact_square_video
     *
     * @return self
     */
    public function setTopImpactSquareVideo($top_impact_square_video)
    {
        $this->container['top_impact_square_video'] = $top_impact_square_video;

        return $this;
    }

    /**
     * Gets top_impact_quintie
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintie|null
     */
    public function getTopImpactQuintie()
    {
        return $this->container['top_impact_quintie'];
    }

    /**
     * Sets top_impact_quintie
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintie|null $top_impact_quintie top_impact_quintie
     *
     * @return self
     */
    public function setTopImpactQuintie($top_impact_quintie)
    {
        $this->container['top_impact_quintie'] = $top_impact_quintie;

        return $this;
    }

    /**
     * Gets top_impact_quintie_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintieVideo|null
     */
    public function getTopImpactQuintieVideo()
    {
        return $this->container['top_impact_quintie_video'];
    }

    /**
     * Sets top_impact_quintie_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactQuintieVideo|null $top_impact_quintie_video top_impact_quintie_video
     *
     * @return self
     */
    public function setTopImpactQuintieVideo($top_impact_quintie_video)
    {
        $this->container['top_impact_quintie_video'] = $top_impact_quintie_video;

        return $this;
    }

    /**
     * Gets top_impact_panorama
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanorama|null
     */
    public function getTopImpactPanorama()
    {
        return $this->container['top_impact_panorama'];
    }

    /**
     * Sets top_impact_panorama
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanorama|null $top_impact_panorama top_impact_panorama
     *
     * @return self
     */
    public function setTopImpactPanorama($top_impact_panorama)
    {
        $this->container['top_impact_panorama'] = $top_impact_panorama;

        return $this;
    }

    /**
     * Gets top_impact_panorama_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaVideo|null
     */
    public function getTopImpactPanoramaVideo()
    {
        return $this->container['top_impact_panorama_video'];
    }

    /**
     * Sets top_impact_panorama_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaVideo|null $top_impact_panorama_video top_impact_panorama_video
     *
     * @return self
     */
    public function setTopImpactPanoramaVideo($top_impact_panorama_video)
    {
        $this->container['top_impact_panorama_video'] = $top_impact_panorama_video;

        return $this;
    }

    /**
     * Gets top_impact_panorama_side_vision_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideVisionVideo|null
     */
    public function getTopImpactPanoramaSideVisionVideo()
    {
        return $this->container['top_impact_panorama_side_vision_video'];
    }

    /**
     * Sets top_impact_panorama_side_vision_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideVisionVideo|null $top_impact_panorama_side_vision_video top_impact_panorama_side_vision_video
     *
     * @return self
     */
    public function setTopImpactPanoramaSideVisionVideo($top_impact_panorama_side_vision_video)
    {
        $this->container['top_impact_panorama_side_vision_video'] = $top_impact_panorama_side_vision_video;

        return $this;
    }

    /**
     * Gets top_impact_panorama_side_switch_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideSwitchVideo|null
     */
    public function getTopImpactPanoramaSideSwitchVideo()
    {
        return $this->container['top_impact_panorama_side_switch_video'];
    }

    /**
     * Sets top_impact_panorama_side_switch_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPanoramaSideSwitchVideo|null $top_impact_panorama_side_switch_video top_impact_panorama_side_switch_video
     *
     * @return self
     */
    public function setTopImpactPanoramaSideSwitchVideo($top_impact_panorama_side_switch_video)
    {
        $this->container['top_impact_panorama_side_switch_video'] = $top_impact_panorama_side_switch_video;

        return $this;
    }

    /**
     * Gets top_impact_theater_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactTheaterVideo|null
     */
    public function getTopImpactTheaterVideo()
    {
        return $this->container['top_impact_theater_video'];
    }

    /**
     * Sets top_impact_theater_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactTheaterVideo|null $top_impact_theater_video top_impact_theater_video
     *
     * @return self
     */
    public function setTopImpactTheaterVideo($top_impact_theater_video)
    {
        $this->container['top_impact_theater_video'] = $top_impact_theater_video;

        return $this;
    }

    /**
     * Gets top_impact_square_special
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecial|null
     */
    public function getTopImpactSquareSpecial()
    {
        return $this->container['top_impact_square_special'];
    }

    /**
     * Sets top_impact_square_special
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecial|null $top_impact_square_special top_impact_square_special
     *
     * @return self
     */
    public function setTopImpactSquareSpecial($top_impact_square_special)
    {
        $this->container['top_impact_square_special'] = $top_impact_square_special;

        return $this;
    }

    /**
     * Gets top_impact_square_special_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecialVideo|null
     */
    public function getTopImpactSquareSpecialVideo()
    {
        return $this->container['top_impact_square_special_video'];
    }

    /**
     * Sets top_impact_square_special_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactSquareSpecialVideo|null $top_impact_square_special_video top_impact_square_special_video
     *
     * @return self
     */
    public function setTopImpactSquareSpecialVideo($top_impact_square_special_video)
    {
        $this->container['top_impact_square_special_video'] = $top_impact_square_special_video;

        return $this;
    }

    /**
     * Gets top_impact_prime_display_double
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDouble|null
     */
    public function getTopImpactPrimeDisplayDouble()
    {
        return $this->container['top_impact_prime_display_double'];
    }

    /**
     * Sets top_impact_prime_display_double
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDouble|null $top_impact_prime_display_double top_impact_prime_display_double
     *
     * @return self
     */
    public function setTopImpactPrimeDisplayDouble($top_impact_prime_display_double)
    {
        $this->container['top_impact_prime_display_double'] = $top_impact_prime_display_double;

        return $this;
    }

    /**
     * Gets top_impact_prime_display_double_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDoubleVideo|null
     */
    public function getTopImpactPrimeDisplayDoubleVideo()
    {
        return $this->container['top_impact_prime_display_double_video'];
    }

    /**
     * Sets top_impact_prime_display_double_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDoubleVideo|null $top_impact_prime_display_double_video top_impact_prime_display_double_video
     *
     * @return self
     */
    public function setTopImpactPrimeDisplayDoubleVideo($top_impact_prime_display_double_video)
    {
        $this->container['top_impact_prime_display_double_video'] = $top_impact_prime_display_double_video;

        return $this;
    }

    /**
     * Gets instream_video
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceInstreamVideoAd|null
     */
    public function getInstreamVideo()
    {
        return $this->container['instream_video'];
    }

    /**
     * Sets instream_video
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedAdGroupAdServiceInstreamVideoAd|null $instream_video instream_video
     *
     * @return self
     */
    public function setInstreamVideo($instream_video)
    {
        $this->container['instream_video'] = $instream_video;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


