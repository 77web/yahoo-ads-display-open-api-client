<?php
/**
 * GuaranteedSimulationServiceSlotsPricingPackage
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
 * GuaranteedSimulationServiceSlotsPricingPackage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   GuaranteedSimulationServiceSlotsPricingPackageは、枠購入型の購入タイプ設定情報を保持します。&lt;br&gt;   このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   GuaranteedSimulationServiceSlotsPricingPackage holds purchase type setting information of slots purchase type.&lt;br&gt;   Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulationServiceSlotsPricingPackage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulationServiceSlotsPricingPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fixed_lifetime_budget' => 'int',
        'fixed_budget_apply_term_type' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFixedBudgetApplyTermType',
        'selling_slots' => 'int',
        'minimum_buying_slots' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fixed_lifetime_budget' => 'int64',
        'fixed_budget_apply_term_type' => null,
        'selling_slots' => 'int64',
        'minimum_buying_slots' => 'int64'
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
        'fixed_lifetime_budget' => 'fixedLifetimeBudget',
        'fixed_budget_apply_term_type' => 'fixedBudgetApplyTermType',
        'selling_slots' => 'sellingSlots',
        'minimum_buying_slots' => 'minimumBuyingSlots'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fixed_lifetime_budget' => 'setFixedLifetimeBudget',
        'fixed_budget_apply_term_type' => 'setFixedBudgetApplyTermType',
        'selling_slots' => 'setSellingSlots',
        'minimum_buying_slots' => 'setMinimumBuyingSlots'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fixed_lifetime_budget' => 'getFixedLifetimeBudget',
        'fixed_budget_apply_term_type' => 'getFixedBudgetApplyTermType',
        'selling_slots' => 'getSellingSlots',
        'minimum_buying_slots' => 'getMinimumBuyingSlots'
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
        $this->container['fixed_lifetime_budget'] = $data['fixed_lifetime_budget'] ?? null;
        $this->container['fixed_budget_apply_term_type'] = $data['fixed_budget_apply_term_type'] ?? null;
        $this->container['selling_slots'] = $data['selling_slots'] ?? null;
        $this->container['minimum_buying_slots'] = $data['minimum_buying_slots'] ?? null;
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
     * Gets fixed_lifetime_budget
     *
     * @return int|null
     */
    public function getFixedLifetimeBudget()
    {
        return $this->container['fixed_lifetime_budget'];
    }

    /**
     * Sets fixed_lifetime_budget
     *
     * @param int|null $fixed_lifetime_budget <div lang=\"ja\">商品価格を表します。</div> <div lang=\"en\">Package price.</div>
     *
     * @return self
     */
    public function setFixedLifetimeBudget($fixed_lifetime_budget)
    {
        $this->container['fixed_lifetime_budget'] = $fixed_lifetime_budget;

        return $this;
    }

    /**
     * Gets fixed_budget_apply_term_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFixedBudgetApplyTermType|null
     */
    public function getFixedBudgetApplyTermType()
    {
        return $this->container['fixed_budget_apply_term_type'];
    }

    /**
     * Sets fixed_budget_apply_term_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFixedBudgetApplyTermType|null $fixed_budget_apply_term_type fixed_budget_apply_term_type
     *
     * @return self
     */
    public function setFixedBudgetApplyTermType($fixed_budget_apply_term_type)
    {
        $this->container['fixed_budget_apply_term_type'] = $fixed_budget_apply_term_type;

        return $this;
    }

    /**
     * Gets selling_slots
     *
     * @return int|null
     */
    public function getSellingSlots()
    {
        return $this->container['selling_slots'];
    }

    /**
     * Sets selling_slots
     *
     * @param int|null $selling_slots <div lang=\"ja\">販売枠数を表します。</div> <div lang=\"en\">Number of selling slots.</div>
     *
     * @return self
     */
    public function setSellingSlots($selling_slots)
    {
        $this->container['selling_slots'] = $selling_slots;

        return $this;
    }

    /**
     * Gets minimum_buying_slots
     *
     * @return int|null
     */
    public function getMinimumBuyingSlots()
    {
        return $this->container['minimum_buying_slots'];
    }

    /**
     * Sets minimum_buying_slots
     *
     * @param int|null $minimum_buying_slots <div lang=\"ja\">最低購入枠数を表します。</div> <div lang=\"en\">Minimum number of purchase slots.</div>
     *
     * @return self
     */
    public function setMinimumBuyingSlots($minimum_buying_slots)
    {
        $this->container['minimum_buying_slots'] = $minimum_buying_slots;

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


