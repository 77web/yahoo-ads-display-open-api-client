<?php
/**
 * RetargetingListServiceRuleTargetList
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
 * RetargetingListServiceRuleTargetList Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; RetargetingListServiceRuleTargetListオブジェクトは、ルール設定のリストを表します。&lt;br&gt; このフィールドは、ADDおよびSET時に省略可能となります。&lt;br&gt; ※targetListTypeがDEFAULT_LISTまたはRULEの場合は、ADDおよびSET時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; RetargetingListServiceRuleTargetList object displays the list of rule settings.&lt;br&gt; This field is optional in ADD and SET operation. &lt;br&gt; *If targetListType is DEFAULT_LIST, this field is required in ADD and SET operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetargetingListServiceRuleTargetList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingListServiceRuleTargetList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_open' => '\OpenAPI\Client\Model\RetargetingListServiceIsOpen',
        'is_preset' => '\OpenAPI\Client\Model\RetargetingListServiceIsPreset',
        'reach_period' => 'int',
        'retargeting_tag_id' => 'string',
        'rules' => '\OpenAPI\Client\Model\RetargetingListServiceRule[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_open' => null,
        'is_preset' => null,
        'reach_period' => 'int32',
        'retargeting_tag_id' => null,
        'rules' => null
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
        'is_open' => 'isOpen',
        'is_preset' => 'isPreset',
        'reach_period' => 'reachPeriod',
        'retargeting_tag_id' => 'retargetingTagId',
        'rules' => 'rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_open' => 'setIsOpen',
        'is_preset' => 'setIsPreset',
        'reach_period' => 'setReachPeriod',
        'retargeting_tag_id' => 'setRetargetingTagId',
        'rules' => 'setRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_open' => 'getIsOpen',
        'is_preset' => 'getIsPreset',
        'reach_period' => 'getReachPeriod',
        'retargeting_tag_id' => 'getRetargetingTagId',
        'rules' => 'getRules'
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
        $this->container['is_open'] = $data['is_open'] ?? null;
        $this->container['is_preset'] = $data['is_preset'] ?? null;
        $this->container['reach_period'] = $data['reach_period'] ?? null;
        $this->container['retargeting_tag_id'] = $data['retargeting_tag_id'] ?? null;
        $this->container['rules'] = $data['rules'] ?? null;
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
     * Gets is_open
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceIsOpen|null
     */
    public function getIsOpen()
    {
        return $this->container['is_open'];
    }

    /**
     * Sets is_open
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceIsOpen|null $is_open is_open
     *
     * @return self
     */
    public function setIsOpen($is_open)
    {
        $this->container['is_open'] = $is_open;

        return $this;
    }

    /**
     * Gets is_preset
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceIsPreset|null
     */
    public function getIsPreset()
    {
        return $this->container['is_preset'];
    }

    /**
     * Sets is_preset
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceIsPreset|null $is_preset is_preset
     *
     * @return self
     */
    public function setIsPreset($is_preset)
    {
        $this->container['is_preset'] = $is_preset;

        return $this;
    }

    /**
     * Gets reach_period
     *
     * @return int|null
     */
    public function getReachPeriod()
    {
        return $this->container['reach_period'];
    }

    /**
     * Sets reach_period
     *
     * @param int|null $reach_period <div lang=\"ja\"> リーチの蓄積期間（1日～540日）です。<br> このフィールドは、ADD時に必須となり、SET時に省略可能となります。 </div> <div lang=\"en\"> Cookies validation period. (1 - 540 days) <br> This field is required in ADD operation, and is optional in SET operation. </div>
     *
     * @return self
     */
    public function setReachPeriod($reach_period)
    {
        $this->container['reach_period'] = $reach_period;

        return $this;
    }

    /**
     * Gets retargeting_tag_id
     *
     * @return string|null
     */
    public function getRetargetingTagId()
    {
        return $this->container['retargeting_tag_id'];
    }

    /**
     * Sets retargeting_tag_id
     *
     * @param string|null $retargeting_tag_id <div lang=\"ja\"> リターゲティングタグIDです。<br> このフィールドは、ADD時に必須となります。 </div> <div lang=\"en\"> ID of Retargeting Tag. <br> This field is required in ADD operation. </div>
     *
     * @return self
     */
    public function setRetargetingTagId($retargeting_tag_id)
    {
        $this->container['retargeting_tag_id'] = $retargeting_tag_id;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceRule[]|null
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceRule[]|null $rules rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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


