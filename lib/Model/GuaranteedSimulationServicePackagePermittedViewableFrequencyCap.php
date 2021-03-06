<?php
/**
 * GuaranteedSimulationServicePackagePermittedViewableFrequencyCap
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
 * GuaranteedSimulationServicePackagePermittedViewableFrequencyCap Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;GuaranteedSimulationServicePackagePermittedViewableFrequencyCapは、ビューアブルフリクエンシー制御を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;GuaranteedSimulationServicePackagePermittedViewableFrequencyCap object describes viewable frequency restriction.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulationServicePackagePermittedViewableFrequencyCap implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulationServicePackagePermittedViewableFrequencyCap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'viewable_frequency_cap_permission' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermissionType',
        'viewable_frequency_cap_levels' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyLevel[]',
        'permitted_viewable_frequency_cap_time_units' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyTimeUnit[]',
        'permitted_viewable_frequency_cap_impression_min' => 'int',
        'permitted_viewable_frequency_cap_impression_max' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'viewable_frequency_cap_permission' => null,
        'viewable_frequency_cap_levels' => null,
        'permitted_viewable_frequency_cap_time_units' => null,
        'permitted_viewable_frequency_cap_impression_min' => 'int64',
        'permitted_viewable_frequency_cap_impression_max' => 'int64'
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
        'viewable_frequency_cap_permission' => 'viewableFrequencyCapPermission',
        'viewable_frequency_cap_levels' => 'viewableFrequencyCapLevels',
        'permitted_viewable_frequency_cap_time_units' => 'permittedViewableFrequencyCapTimeUnits',
        'permitted_viewable_frequency_cap_impression_min' => 'permittedViewableFrequencyCapImpressionMin',
        'permitted_viewable_frequency_cap_impression_max' => 'permittedViewableFrequencyCapImpressionMax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'viewable_frequency_cap_permission' => 'setViewableFrequencyCapPermission',
        'viewable_frequency_cap_levels' => 'setViewableFrequencyCapLevels',
        'permitted_viewable_frequency_cap_time_units' => 'setPermittedViewableFrequencyCapTimeUnits',
        'permitted_viewable_frequency_cap_impression_min' => 'setPermittedViewableFrequencyCapImpressionMin',
        'permitted_viewable_frequency_cap_impression_max' => 'setPermittedViewableFrequencyCapImpressionMax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'viewable_frequency_cap_permission' => 'getViewableFrequencyCapPermission',
        'viewable_frequency_cap_levels' => 'getViewableFrequencyCapLevels',
        'permitted_viewable_frequency_cap_time_units' => 'getPermittedViewableFrequencyCapTimeUnits',
        'permitted_viewable_frequency_cap_impression_min' => 'getPermittedViewableFrequencyCapImpressionMin',
        'permitted_viewable_frequency_cap_impression_max' => 'getPermittedViewableFrequencyCapImpressionMax'
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
        $this->container['viewable_frequency_cap_permission'] = $data['viewable_frequency_cap_permission'] ?? null;
        $this->container['viewable_frequency_cap_levels'] = $data['viewable_frequency_cap_levels'] ?? null;
        $this->container['permitted_viewable_frequency_cap_time_units'] = $data['permitted_viewable_frequency_cap_time_units'] ?? null;
        $this->container['permitted_viewable_frequency_cap_impression_min'] = $data['permitted_viewable_frequency_cap_impression_min'] ?? null;
        $this->container['permitted_viewable_frequency_cap_impression_max'] = $data['permitted_viewable_frequency_cap_impression_max'] ?? null;
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
     * Gets viewable_frequency_cap_permission
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermissionType|null
     */
    public function getViewableFrequencyCapPermission()
    {
        return $this->container['viewable_frequency_cap_permission'];
    }

    /**
     * Sets viewable_frequency_cap_permission
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePackagePermissionType|null $viewable_frequency_cap_permission viewable_frequency_cap_permission
     *
     * @return self
     */
    public function setViewableFrequencyCapPermission($viewable_frequency_cap_permission)
    {
        $this->container['viewable_frequency_cap_permission'] = $viewable_frequency_cap_permission;

        return $this;
    }

    /**
     * Gets viewable_frequency_cap_levels
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyLevel[]|null
     */
    public function getViewableFrequencyCapLevels()
    {
        return $this->container['viewable_frequency_cap_levels'];
    }

    /**
     * Sets viewable_frequency_cap_levels
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyLevel[]|null $viewable_frequency_cap_levels viewable_frequency_cap_levels
     *
     * @return self
     */
    public function setViewableFrequencyCapLevels($viewable_frequency_cap_levels)
    {
        $this->container['viewable_frequency_cap_levels'] = $viewable_frequency_cap_levels;

        return $this;
    }

    /**
     * Gets permitted_viewable_frequency_cap_time_units
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyTimeUnit[]|null
     */
    public function getPermittedViewableFrequencyCapTimeUnits()
    {
        return $this->container['permitted_viewable_frequency_cap_time_units'];
    }

    /**
     * Sets permitted_viewable_frequency_cap_time_units
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceFrequencyTimeUnit[]|null $permitted_viewable_frequency_cap_time_units permitted_viewable_frequency_cap_time_units
     *
     * @return self
     */
    public function setPermittedViewableFrequencyCapTimeUnits($permitted_viewable_frequency_cap_time_units)
    {
        $this->container['permitted_viewable_frequency_cap_time_units'] = $permitted_viewable_frequency_cap_time_units;

        return $this;
    }

    /**
     * Gets permitted_viewable_frequency_cap_impression_min
     *
     * @return int|null
     */
    public function getPermittedViewableFrequencyCapImpressionMin()
    {
        return $this->container['permitted_viewable_frequency_cap_impression_min'];
    }

    /**
     * Sets permitted_viewable_frequency_cap_impression_min
     *
     * @param int|null $permitted_viewable_frequency_cap_impression_min <div lang=\"ja\">ビューアブルフリークエンシーキャップ表示回数（最小）です。</div> <div lang=\"en\">Display count of viewable frequency cap (minimum).</div>
     *
     * @return self
     */
    public function setPermittedViewableFrequencyCapImpressionMin($permitted_viewable_frequency_cap_impression_min)
    {
        $this->container['permitted_viewable_frequency_cap_impression_min'] = $permitted_viewable_frequency_cap_impression_min;

        return $this;
    }

    /**
     * Gets permitted_viewable_frequency_cap_impression_max
     *
     * @return int|null
     */
    public function getPermittedViewableFrequencyCapImpressionMax()
    {
        return $this->container['permitted_viewable_frequency_cap_impression_max'];
    }

    /**
     * Sets permitted_viewable_frequency_cap_impression_max
     *
     * @param int|null $permitted_viewable_frequency_cap_impression_max <div lang=\"ja\">ビューアブルフリークエンシーキャップ表示回数（最大）です。</div> <div lang=\"en\">Display count of viewable frequency cap (maximum).</div>
     *
     * @return self
     */
    public function setPermittedViewableFrequencyCapImpressionMax($permitted_viewable_frequency_cap_impression_max)
    {
        $this->container['permitted_viewable_frequency_cap_impression_max'] = $permitted_viewable_frequency_cap_impression_max;

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


