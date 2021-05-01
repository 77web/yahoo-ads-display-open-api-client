<?php
/**
 * AdGroupAdServiceStaticFrameAd
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
 * AdGroupAdServiceStaticFrameAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; AdGroupAdServiceStaticFrameAdオブジェクトは、広告枠サイズ固定広告の情報を表します。&lt;br&gt; このフィールドは、省略可能となります。&lt;br&gt; ※ADD時、adTypeがSTATIC_FRAME_ADの場合は必須です。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; AdGroupAdServiceStaticFrameAd object describes the Static Frame Ad information.&lt;br&gt; This field is optional.&lt;br&gt; *If adType is STATIC_FRAME_AD, this field is required in ADD operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AdGroupAdServiceStaticFrameAd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceStaticFrameAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'button_text' => '\OpenAPI\Client\Model\AdGroupAdServiceButtonText',
        'color_set_id' => 'int',
        'description' => 'string',
        'display_url' => 'string',
        'headline' => 'string',
        'is_remove_logo_media_id' => '\OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg',
        'layout' => 'string',
        'logo_media_id' => 'int',
        'principal' => 'string',
        'size' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'button_text' => null,
        'color_set_id' => 'int64',
        'description' => null,
        'display_url' => null,
        'headline' => null,
        'is_remove_logo_media_id' => null,
        'layout' => null,
        'logo_media_id' => 'int64',
        'principal' => null,
        'size' => null,
        'url' => null
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
        'button_text' => 'buttonText',
        'color_set_id' => 'colorSetId',
        'description' => 'description',
        'display_url' => 'displayUrl',
        'headline' => 'headline',
        'is_remove_logo_media_id' => 'isRemoveLogoMediaId',
        'layout' => 'layout',
        'logo_media_id' => 'logoMediaId',
        'principal' => 'principal',
        'size' => 'size',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'button_text' => 'setButtonText',
        'color_set_id' => 'setColorSetId',
        'description' => 'setDescription',
        'display_url' => 'setDisplayUrl',
        'headline' => 'setHeadline',
        'is_remove_logo_media_id' => 'setIsRemoveLogoMediaId',
        'layout' => 'setLayout',
        'logo_media_id' => 'setLogoMediaId',
        'principal' => 'setPrincipal',
        'size' => 'setSize',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'button_text' => 'getButtonText',
        'color_set_id' => 'getColorSetId',
        'description' => 'getDescription',
        'display_url' => 'getDisplayUrl',
        'headline' => 'getHeadline',
        'is_remove_logo_media_id' => 'getIsRemoveLogoMediaId',
        'layout' => 'getLayout',
        'logo_media_id' => 'getLogoMediaId',
        'principal' => 'getPrincipal',
        'size' => 'getSize',
        'url' => 'getUrl'
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
        $this->container['button_text'] = $data['button_text'] ?? null;
        $this->container['color_set_id'] = $data['color_set_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['display_url'] = $data['display_url'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['is_remove_logo_media_id'] = $data['is_remove_logo_media_id'] ?? null;
        $this->container['layout'] = $data['layout'] ?? null;
        $this->container['logo_media_id'] = $data['logo_media_id'] ?? null;
        $this->container['principal'] = $data['principal'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets button_text
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceButtonText|null
     */
    public function getButtonText()
    {
        return $this->container['button_text'];
    }

    /**
     * Sets button_text
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceButtonText|null $button_text button_text
     *
     * @return self
     */
    public function setButtonText($button_text)
    {
        $this->container['button_text'] = $button_text;

        return $this;
    }

    /**
     * Gets color_set_id
     *
     * @return int|null
     */
    public function getColorSetId()
    {
        return $this->container['color_set_id'];
    }

    /**
     * Sets color_set_id
     *
     * @param int|null $color_set_id <div lang=\"ja\"> カラーセットIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Color set ID.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setColorSetId($color_set_id)
    {
        $this->container['color_set_id'] = $color_set_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description <div lang=\"ja\"> 説明文です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Description.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
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
     * @param string|null $display_url <div lang=\"ja\"> 表示URLです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Display URL.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

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
     * @param string|null $headline <div lang=\"ja\"> タイトルです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Title.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets is_remove_logo_media_id
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null
     */
    public function getIsRemoveLogoMediaId()
    {
        return $this->container['is_remove_logo_media_id'];
    }

    /**
     * Sets is_remove_logo_media_id
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceIsRemoveFlg|null $is_remove_logo_media_id is_remove_logo_media_id
     *
     * @return self
     */
    public function setIsRemoveLogoMediaId($is_remove_logo_media_id)
    {
        $this->container['is_remove_logo_media_id'] = $is_remove_logo_media_id;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return string|null
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string|null $layout <div lang=\"ja\"> 広告レイアウトです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Ad Layout.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets logo_media_id
     *
     * @return int|null
     */
    public function getLogoMediaId()
    {
        return $this->container['logo_media_id'];
    }

    /**
     * Sets logo_media_id
     *
     * @param int|null $logo_media_id <div lang=\"ja\"> ロゴ画像のメディアIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Media ID of logo image.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setLogoMediaId($logo_media_id)
    {
        $this->container['logo_media_id'] = $logo_media_id;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return string|null
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string|null $principal <div lang=\"ja\"> 広告の主体者表記です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Advertiser Indication.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size <div lang=\"ja\"> 広告サイズです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Ad Size.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @param string|null $url <div lang=\"ja\"> リンク先URLです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Destination URL.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

