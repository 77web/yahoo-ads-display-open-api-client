<?php
/**
 * GuaranteedSimulationServiceVimpsCustomPricingPackage
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
 * GuaranteedSimulationServiceVimpsCustomPricingPackage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;   GuaranteedSimulationServiceVimpsCustomPricingPackageは、vimps購入型（変動）の購入タイプ設定情報を保持します。&lt;br&gt;   このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;   GuaranteedSimulationServiceVimpsCustomPricingPackage holds the purchase type setting information about the vimps purchase type (variable).&lt;br&gt;   Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulationServiceVimpsCustomPricingPackage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulationServiceVimpsCustomPricingPackage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fixed_lifetime_budget' => 'int',
        'minimum_purchase_v_imps' => 'int',
        'maximum_purchase_v_imps' => 'int'
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
        'minimum_purchase_v_imps' => 'int64',
        'maximum_purchase_v_imps' => 'int64'
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
        'minimum_purchase_v_imps' => 'minimumPurchaseVImps',
        'maximum_purchase_v_imps' => 'maximumPurchaseVImps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fixed_lifetime_budget' => 'setFixedLifetimeBudget',
        'minimum_purchase_v_imps' => 'setMinimumPurchaseVImps',
        'maximum_purchase_v_imps' => 'setMaximumPurchaseVImps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fixed_lifetime_budget' => 'getFixedLifetimeBudget',
        'minimum_purchase_v_imps' => 'getMinimumPurchaseVImps',
        'maximum_purchase_v_imps' => 'getMaximumPurchaseVImps'
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
        $this->container['minimum_purchase_v_imps'] = $data['minimum_purchase_v_imps'] ?? null;
        $this->container['maximum_purchase_v_imps'] = $data['maximum_purchase_v_imps'] ?? null;
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
     * Gets minimum_purchase_v_imps
     *
     * @return int|null
     */
    public function getMinimumPurchaseVImps()
    {
        return $this->container['minimum_purchase_v_imps'];
    }

    /**
     * Sets minimum_purchase_v_imps
     *
     * @param int|null $minimum_purchase_v_imps <div lang=\"ja\">最低購入ビューアブルインプレッション数を表します。</div> <div lang=\"en\">Minimum purchase viewable impression.</div>
     *
     * @return self
     */
    public function setMinimumPurchaseVImps($minimum_purchase_v_imps)
    {
        $this->container['minimum_purchase_v_imps'] = $minimum_purchase_v_imps;

        return $this;
    }

    /**
     * Gets maximum_purchase_v_imps
     *
     * @return int|null
     */
    public function getMaximumPurchaseVImps()
    {
        return $this->container['maximum_purchase_v_imps'];
    }

    /**
     * Sets maximum_purchase_v_imps
     *
     * @param int|null $maximum_purchase_v_imps <div lang=\"ja\">最大購入ビューアブルインプレッション数を表します。</div> <div lang=\"en\">Maximum purchase viewable impression.</div>
     *
     * @return self
     */
    public function setMaximumPurchaseVImps($maximum_purchase_v_imps)
    {
        $this->container['maximum_purchase_v_imps'] = $maximum_purchase_v_imps;

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


