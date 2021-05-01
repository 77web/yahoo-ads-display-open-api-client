<?php
/**
 * GuaranteedSimulationServicePricingPackage
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
 * GuaranteedSimulationServicePricingPackage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   GuaranteedSimulationServicePricingPackageは、商品の購入タイプ設定の情報を保持します。&lt;br&gt;   このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   GuaranteedSimulationServicePricingPackage holds information about purchase type setting of package.&lt;br&gt;   Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulationServicePricingPackage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulationServicePricingPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price_type' => '\OpenAPI\Client\Model\GuaranteedSimulationServicePriceType',
        'vimps_custom_pricing_package' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsCustomPricingPackage',
        'vimps_sov_pricing_package' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsSOVPricingPackage',
        'vimps_reach_pricing_package' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsReachPricingPackage',
        'slots_pricing_package' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceSlotsPricingPackage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'price_type' => null,
        'vimps_custom_pricing_package' => null,
        'vimps_sov_pricing_package' => null,
        'vimps_reach_pricing_package' => null,
        'slots_pricing_package' => null
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
        'price_type' => 'priceType',
        'vimps_custom_pricing_package' => 'vimpsCustomPricingPackage',
        'vimps_sov_pricing_package' => 'vimpsSOVPricingPackage',
        'vimps_reach_pricing_package' => 'vimpsReachPricingPackage',
        'slots_pricing_package' => 'slotsPricingPackage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_type' => 'setPriceType',
        'vimps_custom_pricing_package' => 'setVimpsCustomPricingPackage',
        'vimps_sov_pricing_package' => 'setVimpsSovPricingPackage',
        'vimps_reach_pricing_package' => 'setVimpsReachPricingPackage',
        'slots_pricing_package' => 'setSlotsPricingPackage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_type' => 'getPriceType',
        'vimps_custom_pricing_package' => 'getVimpsCustomPricingPackage',
        'vimps_sov_pricing_package' => 'getVimpsSovPricingPackage',
        'vimps_reach_pricing_package' => 'getVimpsReachPricingPackage',
        'slots_pricing_package' => 'getSlotsPricingPackage'
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
        $this->container['price_type'] = $data['price_type'] ?? null;
        $this->container['vimps_custom_pricing_package'] = $data['vimps_custom_pricing_package'] ?? null;
        $this->container['vimps_sov_pricing_package'] = $data['vimps_sov_pricing_package'] ?? null;
        $this->container['vimps_reach_pricing_package'] = $data['vimps_reach_pricing_package'] ?? null;
        $this->container['slots_pricing_package'] = $data['slots_pricing_package'] ?? null;
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
     * Gets price_type
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServicePriceType|null
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServicePriceType|null $price_type price_type
     *
     * @return self
     */
    public function setPriceType($price_type)
    {
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets vimps_custom_pricing_package
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsCustomPricingPackage|null
     */
    public function getVimpsCustomPricingPackage()
    {
        return $this->container['vimps_custom_pricing_package'];
    }

    /**
     * Sets vimps_custom_pricing_package
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsCustomPricingPackage|null $vimps_custom_pricing_package vimps_custom_pricing_package
     *
     * @return self
     */
    public function setVimpsCustomPricingPackage($vimps_custom_pricing_package)
    {
        $this->container['vimps_custom_pricing_package'] = $vimps_custom_pricing_package;

        return $this;
    }

    /**
     * Gets vimps_sov_pricing_package
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsSOVPricingPackage|null
     */
    public function getVimpsSovPricingPackage()
    {
        return $this->container['vimps_sov_pricing_package'];
    }

    /**
     * Sets vimps_sov_pricing_package
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsSOVPricingPackage|null $vimps_sov_pricing_package vimps_sov_pricing_package
     *
     * @return self
     */
    public function setVimpsSovPricingPackage($vimps_sov_pricing_package)
    {
        $this->container['vimps_sov_pricing_package'] = $vimps_sov_pricing_package;

        return $this;
    }

    /**
     * Gets vimps_reach_pricing_package
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsReachPricingPackage|null
     */
    public function getVimpsReachPricingPackage()
    {
        return $this->container['vimps_reach_pricing_package'];
    }

    /**
     * Sets vimps_reach_pricing_package
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceVimpsReachPricingPackage|null $vimps_reach_pricing_package vimps_reach_pricing_package
     *
     * @return self
     */
    public function setVimpsReachPricingPackage($vimps_reach_pricing_package)
    {
        $this->container['vimps_reach_pricing_package'] = $vimps_reach_pricing_package;

        return $this;
    }

    /**
     * Gets slots_pricing_package
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceSlotsPricingPackage|null
     */
    public function getSlotsPricingPackage()
    {
        return $this->container['slots_pricing_package'];
    }

    /**
     * Sets slots_pricing_package
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceSlotsPricingPackage|null $slots_pricing_package slots_pricing_package
     *
     * @return self
     */
    public function setSlotsPricingPackage($slots_pricing_package)
    {
        $this->container['slots_pricing_package'] = $slots_pricing_package;

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

