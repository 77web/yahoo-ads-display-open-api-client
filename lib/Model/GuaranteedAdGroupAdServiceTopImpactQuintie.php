<?php
/**
 * GuaranteedAdGroupAdServiceTopImpactQuintie
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
 * GuaranteedAdGroupAdServiceTopImpactQuintie Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedAdGroupAdServiceTopImpactQuintieオブジェクトは、予約型専用広告：メインの16:9の縮小機能付き画像と、センター画像、右サイド画像、左サイド画像で構成される広告の情報を表します。&lt;br&gt; このフィールドは、省略可能となります。&lt;br&gt; &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedAdGroupAdServiceTopImpactQuintie object describes information about a guaranteed ad composed of the main 16:9 image with reduction function, the center image, the right side image, and the left side image.&lt;br&gt; This field is optional.&lt;br&gt; &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedAdGroupAdServiceTopImpactQuintie implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedAdGroupAdServiceTopImpactQuintie';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_url' => 'string',
        'url' => 'string',
        'ad_left_side_media_id' => 'int',
        'ad_right_side_media_id' => 'int',
        'ad_center_media_id' => 'int'
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
        'ad_left_side_media_id' => 'int64',
        'ad_right_side_media_id' => 'int64',
        'ad_center_media_id' => 'int64'
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
        'ad_left_side_media_id' => 'adLeftSideMediaId',
        'ad_right_side_media_id' => 'adRightSideMediaId',
        'ad_center_media_id' => 'adCenterMediaId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_url' => 'setDisplayUrl',
        'url' => 'setUrl',
        'ad_left_side_media_id' => 'setAdLeftSideMediaId',
        'ad_right_side_media_id' => 'setAdRightSideMediaId',
        'ad_center_media_id' => 'setAdCenterMediaId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_url' => 'getDisplayUrl',
        'url' => 'getUrl',
        'ad_left_side_media_id' => 'getAdLeftSideMediaId',
        'ad_right_side_media_id' => 'getAdRightSideMediaId',
        'ad_center_media_id' => 'getAdCenterMediaId'
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
        $this->container['ad_left_side_media_id'] = $data['ad_left_side_media_id'] ?? null;
        $this->container['ad_right_side_media_id'] = $data['ad_right_side_media_id'] ?? null;
        $this->container['ad_center_media_id'] = $data['ad_center_media_id'] ?? null;
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
     * Gets ad_left_side_media_id
     *
     * @return int|null
     */
    public function getAdLeftSideMediaId()
    {
        return $this->container['ad_left_side_media_id'];
    }

    /**
     * Sets ad_left_side_media_id
     *
     * @param int|null $ad_left_side_media_id <div lang=\"ja\"> 左サイド画像です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Left side image.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return self
     */
    public function setAdLeftSideMediaId($ad_left_side_media_id)
    {
        $this->container['ad_left_side_media_id'] = $ad_left_side_media_id;

        return $this;
    }

    /**
     * Gets ad_right_side_media_id
     *
     * @return int|null
     */
    public function getAdRightSideMediaId()
    {
        return $this->container['ad_right_side_media_id'];
    }

    /**
     * Sets ad_right_side_media_id
     *
     * @param int|null $ad_right_side_media_id <div lang=\"ja\"> 右サイド画像です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Right side image.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return self
     */
    public function setAdRightSideMediaId($ad_right_side_media_id)
    {
        $this->container['ad_right_side_media_id'] = $ad_right_side_media_id;

        return $this;
    }

    /**
     * Gets ad_center_media_id
     *
     * @return int|null
     */
    public function getAdCenterMediaId()
    {
        return $this->container['ad_center_media_id'];
    }

    /**
     * Sets ad_center_media_id
     *
     * @param int|null $ad_center_media_id <div lang=\"ja\"> センター画像です。<br> このフィールドは、ADD時は必須となり、SET時は省略可能となります。 </div> <div lang=\"en\"> Center image.<br> This field is required in ADD operation, and will be optional in SET operation. </div>
     *
     * @return self
     */
    public function setAdCenterMediaId($ad_center_media_id)
    {
        $this->container['ad_center_media_id'] = $ad_center_media_id;

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


