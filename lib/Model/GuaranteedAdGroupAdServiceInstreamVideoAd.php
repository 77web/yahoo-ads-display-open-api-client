<?php
/**
 * GuaranteedAdGroupAdServiceInstreamVideoAd
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GuaranteedAdGroupAdServiceInstreamVideoAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedAdGroupAdServiceInstreamVideoAdオブジェクトは、動画で構成される広告の情報を表します。&lt;br&gt; このフィールドは、省略可能となります。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedAdGroupAdServiceInstreamVideoAd object describes information regarding ads composed of videos.&lt;br&gt; This field is optional.&lt;br&gt; &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedAdGroupAdServiceInstreamVideoAd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedAdGroupAdServiceInstreamVideoAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_url' => 'string',
        'url' => 'string',
        'headline' => 'string',
        'is_remove_video25_percent_beacon_urls' => '\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg',
        'is_remove_video50_percent_beacon_urls' => '\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg',
        'is_remove_video75_percent_beacon_urls' => '\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg',
        'is_remove_video_complete_beacon_urls' => '\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg',
        'is_remove_video_start_beacon_urls' => '\OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg',
        'video25_percent_beacon_urls' => 'string[]',
        'video50_percent_beacon_urls' => 'string[]',
        'video75_percent_beacon_urls' => 'string[]',
        'video_complete_beacon_urls' => 'string[]',
        'video_start_beacon_urls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_url' => null,
        'url' => null,
        'headline' => null,
        'is_remove_video25_percent_beacon_urls' => null,
        'is_remove_video50_percent_beacon_urls' => null,
        'is_remove_video75_percent_beacon_urls' => null,
        'is_remove_video_complete_beacon_urls' => null,
        'is_remove_video_start_beacon_urls' => null,
        'video25_percent_beacon_urls' => null,
        'video50_percent_beacon_urls' => null,
        'video75_percent_beacon_urls' => null,
        'video_complete_beacon_urls' => null,
        'video_start_beacon_urls' => null
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
        'display_url' => 'displayUrl',
        'url' => 'url',
        'headline' => 'headline',
        'is_remove_video25_percent_beacon_urls' => 'isRemoveVideo25PercentBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'isRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'isRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'isRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'isRemoveVideoStartBeaconUrls',
        'video25_percent_beacon_urls' => 'video25PercentBeaconUrls',
        'video50_percent_beacon_urls' => 'video50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'video75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'videoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'videoStartBeaconUrls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_url' => 'setDisplayUrl',
        'url' => 'setUrl',
        'headline' => 'setHeadline',
        'is_remove_video25_percent_beacon_urls' => 'setIsRemoveVideo25PercentBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'setIsRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'setIsRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'setIsRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'setIsRemoveVideoStartBeaconUrls',
        'video25_percent_beacon_urls' => 'setVideo25PercentBeaconUrls',
        'video50_percent_beacon_urls' => 'setVideo50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'setVideo75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'setVideoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'setVideoStartBeaconUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_url' => 'getDisplayUrl',
        'url' => 'getUrl',
        'headline' => 'getHeadline',
        'is_remove_video25_percent_beacon_urls' => 'getIsRemoveVideo25PercentBeaconUrls',
        'is_remove_video50_percent_beacon_urls' => 'getIsRemoveVideo50PercentBeaconUrls',
        'is_remove_video75_percent_beacon_urls' => 'getIsRemoveVideo75PercentBeaconUrls',
        'is_remove_video_complete_beacon_urls' => 'getIsRemoveVideoCompleteBeaconUrls',
        'is_remove_video_start_beacon_urls' => 'getIsRemoveVideoStartBeaconUrls',
        'video25_percent_beacon_urls' => 'getVideo25PercentBeaconUrls',
        'video50_percent_beacon_urls' => 'getVideo50PercentBeaconUrls',
        'video75_percent_beacon_urls' => 'getVideo75PercentBeaconUrls',
        'video_complete_beacon_urls' => 'getVideoCompleteBeaconUrls',
        'video_start_beacon_urls' => 'getVideoStartBeaconUrls'
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
        $this->container['display_url'] = $data['display_url'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['is_remove_video25_percent_beacon_urls'] = $data['is_remove_video25_percent_beacon_urls'] ?? null;
        $this->container['is_remove_video50_percent_beacon_urls'] = $data['is_remove_video50_percent_beacon_urls'] ?? null;
        $this->container['is_remove_video75_percent_beacon_urls'] = $data['is_remove_video75_percent_beacon_urls'] ?? null;
        $this->container['is_remove_video_complete_beacon_urls'] = $data['is_remove_video_complete_beacon_urls'] ?? null;
        $this->container['is_remove_video_start_beacon_urls'] = $data['is_remove_video_start_beacon_urls'] ?? null;
        $this->container['video25_percent_beacon_urls'] = $data['video25_percent_beacon_urls'] ?? null;
        $this->container['video50_percent_beacon_urls'] = $data['video50_percent_beacon_urls'] ?? null;
        $this->container['video75_percent_beacon_urls'] = $data['video75_percent_beacon_urls'] ?? null;
        $this->container['video_complete_beacon_urls'] = $data['video_complete_beacon_urls'] ?? null;
        $this->container['video_start_beacon_urls'] = $data['video_start_beacon_urls'] ?? null;
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
     * Gets display_url
     *
     * @return string|null
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string|null $display_url <div lang=\"ja\"> 表示URLです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Display URL.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url <div lang=\"ja\"> リンク先URLです。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Destination URL.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline <div lang=\"ja\"> ヘッドラインです。<br> ADDおよびSET時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Headline.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets is_remove_video25_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo25PercentBeaconUrls()
    {
        return $this->container['is_remove_video25_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video25_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null $is_remove_video25_percent_beacon_urls is_remove_video25_percent_beacon_urls
     *
     * @return self
     */
    public function setIsRemoveVideo25PercentBeaconUrls($is_remove_video25_percent_beacon_urls)
    {
        $this->container['is_remove_video25_percent_beacon_urls'] = $is_remove_video25_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video50_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo50PercentBeaconUrls()
    {
        return $this->container['is_remove_video50_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video50_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null $is_remove_video50_percent_beacon_urls is_remove_video50_percent_beacon_urls
     *
     * @return self
     */
    public function setIsRemoveVideo50PercentBeaconUrls($is_remove_video50_percent_beacon_urls)
    {
        $this->container['is_remove_video50_percent_beacon_urls'] = $is_remove_video50_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video75_percent_beacon_urls
     *
     * @return \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideo75PercentBeaconUrls()
    {
        return $this->container['is_remove_video75_percent_beacon_urls'];
    }

    /**
     * Sets is_remove_video75_percent_beacon_urls
     *
     * @param \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null $is_remove_video75_percent_beacon_urls is_remove_video75_percent_beacon_urls
     *
     * @return self
     */
    public function setIsRemoveVideo75PercentBeaconUrls($is_remove_video75_percent_beacon_urls)
    {
        $this->container['is_remove_video75_percent_beacon_urls'] = $is_remove_video75_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video_complete_beacon_urls
     *
     * @return \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideoCompleteBeaconUrls()
    {
        return $this->container['is_remove_video_complete_beacon_urls'];
    }

    /**
     * Sets is_remove_video_complete_beacon_urls
     *
     * @param \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null $is_remove_video_complete_beacon_urls is_remove_video_complete_beacon_urls
     *
     * @return self
     */
    public function setIsRemoveVideoCompleteBeaconUrls($is_remove_video_complete_beacon_urls)
    {
        $this->container['is_remove_video_complete_beacon_urls'] = $is_remove_video_complete_beacon_urls;

        return $this;
    }

    /**
     * Gets is_remove_video_start_beacon_urls
     *
     * @return \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveVideoStartBeaconUrls()
    {
        return $this->container['is_remove_video_start_beacon_urls'];
    }

    /**
     * Sets is_remove_video_start_beacon_urls
     *
     * @param \OpenAPI\Client\Model\GuaranteedAdGroupAdServiceIsRemoveFlg|null $is_remove_video_start_beacon_urls is_remove_video_start_beacon_urls
     *
     * @return self
     */
    public function setIsRemoveVideoStartBeaconUrls($is_remove_video_start_beacon_urls)
    {
        $this->container['is_remove_video_start_beacon_urls'] = $is_remove_video_start_beacon_urls;

        return $this;
    }

    /**
     * Gets video25_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo25PercentBeaconUrls()
    {
        return $this->container['video25_percent_beacon_urls'];
    }

    /**
     * Sets video25_percent_beacon_urls
     *
     * @param string[]|null $video25_percent_beacon_urls <div lang=\"ja\"> 25％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (25%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return self
     */
    public function setVideo25PercentBeaconUrls($video25_percent_beacon_urls)
    {
        $this->container['video25_percent_beacon_urls'] = $video25_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video50_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo50PercentBeaconUrls()
    {
        return $this->container['video50_percent_beacon_urls'];
    }

    /**
     * Sets video50_percent_beacon_urls
     *
     * @param string[]|null $video50_percent_beacon_urls <div lang=\"ja\"> 50％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (50%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return self
     */
    public function setVideo50PercentBeaconUrls($video50_percent_beacon_urls)
    {
        $this->container['video50_percent_beacon_urls'] = $video50_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video75_percent_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideo75PercentBeaconUrls()
    {
        return $this->container['video75_percent_beacon_urls'];
    }

    /**
     * Sets video75_percent_beacon_urls
     *
     * @param string[]|null $video75_percent_beacon_urls <div lang=\"ja\"> 75％再生視聴ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Playback viewing beacon URL (75%).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return self
     */
    public function setVideo75PercentBeaconUrls($video75_percent_beacon_urls)
    {
        $this->container['video75_percent_beacon_urls'] = $video75_percent_beacon_urls;

        return $this;
    }

    /**
     * Gets video_complete_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideoCompleteBeaconUrls()
    {
        return $this->container['video_complete_beacon_urls'];
    }

    /**
     * Sets video_complete_beacon_urls
     *
     * @param string[]|null $video_complete_beacon_urls <div lang=\"ja\"> 再生完了ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (complete).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return self
     */
    public function setVideoCompleteBeaconUrls($video_complete_beacon_urls)
    {
        $this->container['video_complete_beacon_urls'] = $video_complete_beacon_urls;

        return $this;
    }

    /**
     * Gets video_start_beacon_urls
     *
     * @return string[]|null
     */
    public function getVideoStartBeaconUrls()
    {
        return $this->container['video_start_beacon_urls'];
    }

    /**
     * Sets video_start_beacon_urls
     *
     * @param string[]|null $video_start_beacon_urls <div lang=\"ja\"> 再生開始ビーコンURLです。<br> ADDおよびSET時、このフィールドは省略可能となります。<br> ※SET時はすべて上書きされます。<br> ※httpsのURLのみ設定可能です。 </div> <div lang=\"en\"> Viewing beacon URL (start).<br> This field is optional in ADD and SET operation.<br> ∗Replace all URLs in SET operation.<br> ∗Available URL is only &#34;https&#34;. </div>
     *
     * @return self
     */
    public function setVideoStartBeaconUrls($video_start_beacon_urls)
    {
        $this->container['video_start_beacon_urls'] = $video_start_beacon_urls;

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


