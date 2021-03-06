<?php
/**
 * RetargetingListServiceSimilarityTargetList
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
 * RetargetingListServiceSimilarityTargetList Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; 類似ユーザーターゲットの情報を保持するオブジェクトです。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt; ※targetListTypeがSIMILARITYの場合は、ADDおよびSET時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; RetargetingListServiceSimilarityTargetList object is a container for storing the information of Targeting information of users (similar).&lt;br&gt; This field is optional in ADD and SET operation. &lt;br&gt; *If targetListType is SIMILARITY, this field is required in ADD and SET operation. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetargetingListServiceSimilarityTargetList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingListServiceSimilarityTargetList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'target_list_id' => 'int',
        'target_list_size' => '\YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSize',
        'target_list_size_reaches' => '\YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSizeReaches[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'target_list_id' => 'int64',
        'target_list_size' => null,
        'target_list_size_reaches' => null
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
        'target_list_id' => 'targetListId',
        'target_list_size' => 'targetListSize',
        'target_list_size_reaches' => 'targetListSizeReaches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_list_id' => 'setTargetListId',
        'target_list_size' => 'setTargetListSize',
        'target_list_size_reaches' => 'setTargetListSizeReaches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_list_id' => 'getTargetListId',
        'target_list_size' => 'getTargetListSize',
        'target_list_size_reaches' => 'getTargetListSizeReaches'
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
        $this->container['target_list_id'] = $data['target_list_id'] ?? null;
        $this->container['target_list_size'] = $data['target_list_size'] ?? null;
        $this->container['target_list_size_reaches'] = $data['target_list_size_reaches'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['target_list_size_reaches']) && (count($this->container['target_list_size_reaches']) > 10)) {
            $invalidProperties[] = "invalid value for 'target_list_size_reaches', number of items must be less than or equal to 10.";
        }

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
     * Gets target_list_id
     *
     * @return int|null
     */
    public function getTargetListId()
    {
        return $this->container['target_list_id'];
    }

    /**
     * Sets target_list_id
     *
     * @param int|null $target_list_id <div lang=\"ja\"> 類似ユーザーをリターゲティングするターゲットIDです。<br> このフィールドは、ADD時に必須となり、SETおよびREMOVE時に無視されます。 </div> <div lang=\"en\"> Target ID for retargeting similar users. <br> This field is required in ADD operation, and will be ignored in SET and REMOVE operation. </div>
     *
     * @return self
     */
    public function setTargetListId($target_list_id)
    {
        $this->container['target_list_id'] = $target_list_id;

        return $this;
    }

    /**
     * Gets target_list_size
     *
     * @return \YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSize|null
     */
    public function getTargetListSize()
    {
        return $this->container['target_list_size'];
    }

    /**
     * Sets target_list_size
     *
     * @param \YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSize|null $target_list_size target_list_size
     *
     * @return self
     */
    public function setTargetListSize($target_list_size)
    {
        $this->container['target_list_size'] = $target_list_size;

        return $this;
    }

    /**
     * Gets target_list_size_reaches
     *
     * @return \YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSizeReaches[]|null
     */
    public function getTargetListSizeReaches()
    {
        return $this->container['target_list_size_reaches'];
    }

    /**
     * Sets target_list_size_reaches
     *
     * @param \YahooAdsDisplayApi\Client\Model\RetargetingListServiceTargetListSizeReaches[]|null $target_list_size_reaches target_list_size_reaches
     *
     * @return self
     */
    public function setTargetListSizeReaches($target_list_size_reaches)
    {

        if (!is_null($target_list_size_reaches) && (count($target_list_size_reaches) > 10)) {
            throw new \InvalidArgumentException('invalid value for $target_list_size_reaches when calling RetargetingListServiceSimilarityTargetList., number of items must be less than or equal to 10.');
        }
        $this->container['target_list_size_reaches'] = $target_list_size_reaches;

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


