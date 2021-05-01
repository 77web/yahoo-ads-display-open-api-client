<?php
/**
 * ConversionTrackerServicePage
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
 * ConversionTrackerServicePage Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServicePageオブジェクトは、getメソッドの実行結果（全Entityのリスト）を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServicePage object contains the results (a list of all entities) for get method.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ConversionTrackerServicePage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServicePage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period' => '\OpenAPI\Client\Model\ConversionTrackerServicePeriod',
        'total_all_conversion_value' => 'string',
        'total_all_conversions' => 'int',
        'total_conversion_value' => 'string',
        'total_conversion_value_via_ad_click' => 'string',
        'total_conversions' => 'int',
        'total_conversions_via_ad_click' => 'int',
        'total_cross_device_conversions' => 'int',
        'total_num_entries' => 'int',
        'values' => '\OpenAPI\Client\Model\ConversionTrackerServiceValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'period' => null,
        'total_all_conversion_value' => null,
        'total_all_conversions' => 'int64',
        'total_conversion_value' => null,
        'total_conversion_value_via_ad_click' => null,
        'total_conversions' => 'int64',
        'total_conversions_via_ad_click' => 'int64',
        'total_cross_device_conversions' => 'int64',
        'total_num_entries' => 'int32',
        'values' => null
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
        'period' => 'period',
        'total_all_conversion_value' => 'totalAllConversionValue',
        'total_all_conversions' => 'totalAllConversions',
        'total_conversion_value' => 'totalConversionValue',
        'total_conversion_value_via_ad_click' => 'totalConversionValueViaAdClick',
        'total_conversions' => 'totalConversions',
        'total_conversions_via_ad_click' => 'totalConversionsViaAdClick',
        'total_cross_device_conversions' => 'totalCrossDeviceConversions',
        'total_num_entries' => 'totalNumEntries',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period' => 'setPeriod',
        'total_all_conversion_value' => 'setTotalAllConversionValue',
        'total_all_conversions' => 'setTotalAllConversions',
        'total_conversion_value' => 'setTotalConversionValue',
        'total_conversion_value_via_ad_click' => 'setTotalConversionValueViaAdClick',
        'total_conversions' => 'setTotalConversions',
        'total_conversions_via_ad_click' => 'setTotalConversionsViaAdClick',
        'total_cross_device_conversions' => 'setTotalCrossDeviceConversions',
        'total_num_entries' => 'setTotalNumEntries',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period' => 'getPeriod',
        'total_all_conversion_value' => 'getTotalAllConversionValue',
        'total_all_conversions' => 'getTotalAllConversions',
        'total_conversion_value' => 'getTotalConversionValue',
        'total_conversion_value_via_ad_click' => 'getTotalConversionValueViaAdClick',
        'total_conversions' => 'getTotalConversions',
        'total_conversions_via_ad_click' => 'getTotalConversionsViaAdClick',
        'total_cross_device_conversions' => 'getTotalCrossDeviceConversions',
        'total_num_entries' => 'getTotalNumEntries',
        'values' => 'getValues'
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
        $this->container['period'] = $data['period'] ?? null;
        $this->container['total_all_conversion_value'] = $data['total_all_conversion_value'] ?? null;
        $this->container['total_all_conversions'] = $data['total_all_conversions'] ?? null;
        $this->container['total_conversion_value'] = $data['total_conversion_value'] ?? null;
        $this->container['total_conversion_value_via_ad_click'] = $data['total_conversion_value_via_ad_click'] ?? null;
        $this->container['total_conversions'] = $data['total_conversions'] ?? null;
        $this->container['total_conversions_via_ad_click'] = $data['total_conversions_via_ad_click'] ?? null;
        $this->container['total_cross_device_conversions'] = $data['total_cross_device_conversions'] ?? null;
        $this->container['total_num_entries'] = $data['total_num_entries'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
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
     * Gets period
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServicePeriod|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServicePeriod|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets total_all_conversion_value
     *
     * @return string|null
     */
    public function getTotalAllConversionValue()
    {
        return $this->container['total_all_conversion_value'];
    }

    /**
     * Sets total_all_conversion_value
     *
     * @param string|null $total_all_conversion_value <div lang=\"ja\">コンバージョンの価値（全て）の合計です。</div> <div lang=\"en\">Total of conv. value (all).</div>
     *
     * @return self
     */
    public function setTotalAllConversionValue($total_all_conversion_value)
    {
        $this->container['total_all_conversion_value'] = $total_all_conversion_value;

        return $this;
    }

    /**
     * Gets total_all_conversions
     *
     * @return int|null
     */
    public function getTotalAllConversions()
    {
        return $this->container['total_all_conversions'];
    }

    /**
     * Sets total_all_conversions
     *
     * @param int|null $total_all_conversions <div lang=\"ja\">コンバージョン数（全て）の合計です。</div> <div lang=\"en\">Total of conversions (all).</div>
     *
     * @return self
     */
    public function setTotalAllConversions($total_all_conversions)
    {
        $this->container['total_all_conversions'] = $total_all_conversions;

        return $this;
    }

    /**
     * Gets total_conversion_value
     *
     * @return string|null
     */
    public function getTotalConversionValue()
    {
        return $this->container['total_conversion_value'];
    }

    /**
     * Sets total_conversion_value
     *
     * @param string|null $total_conversion_value <div lang=\"ja\">コンバージョンの価値の合計です。</div> <div lang=\"en\">Total of conv. value.</div>
     *
     * @return self
     */
    public function setTotalConversionValue($total_conversion_value)
    {
        $this->container['total_conversion_value'] = $total_conversion_value;

        return $this;
    }

    /**
     * Gets total_conversion_value_via_ad_click
     *
     * @return string|null
     */
    public function getTotalConversionValueViaAdClick()
    {
        return $this->container['total_conversion_value_via_ad_click'];
    }

    /**
     * Sets total_conversion_value_via_ad_click
     *
     * @param string|null $total_conversion_value_via_ad_click <div lang=\"ja\">コンバージョンの価値の合計（クリック経由）です。</div> <div lang=\"en\">Total of conv. value (via click).</div>
     *
     * @return self
     */
    public function setTotalConversionValueViaAdClick($total_conversion_value_via_ad_click)
    {
        $this->container['total_conversion_value_via_ad_click'] = $total_conversion_value_via_ad_click;

        return $this;
    }

    /**
     * Gets total_conversions
     *
     * @return int|null
     */
    public function getTotalConversions()
    {
        return $this->container['total_conversions'];
    }

    /**
     * Sets total_conversions
     *
     * @param int|null $total_conversions <div lang=\"ja\">コンバージョン数の合計です。</div> <div lang=\"en\">Total of conversions.</div>
     *
     * @return self
     */
    public function setTotalConversions($total_conversions)
    {
        $this->container['total_conversions'] = $total_conversions;

        return $this;
    }

    /**
     * Gets total_conversions_via_ad_click
     *
     * @return int|null
     */
    public function getTotalConversionsViaAdClick()
    {
        return $this->container['total_conversions_via_ad_click'];
    }

    /**
     * Sets total_conversions_via_ad_click
     *
     * @param int|null $total_conversions_via_ad_click <div lang=\"ja\">コンバージョン数の合計（クリック経由）です。</div> <div lang=\"en\">Total of conversions (via click).</div>
     *
     * @return self
     */
    public function setTotalConversionsViaAdClick($total_conversions_via_ad_click)
    {
        $this->container['total_conversions_via_ad_click'] = $total_conversions_via_ad_click;

        return $this;
    }

    /**
     * Gets total_cross_device_conversions
     *
     * @return int|null
     */
    public function getTotalCrossDeviceConversions()
    {
        return $this->container['total_cross_device_conversions'];
    }

    /**
     * Sets total_cross_device_conversions
     *
     * @param int|null $total_cross_device_conversions <div lang=\"ja\">クロスデバイスコンバージョン数の合計です。</div> <div lang=\"en\">Total of cross-device conv.</div>
     *
     * @return self
     */
    public function setTotalCrossDeviceConversions($total_cross_device_conversions)
    {
        $this->container['total_cross_device_conversions'] = $total_cross_device_conversions;

        return $this;
    }

    /**
     * Gets total_num_entries
     *
     * @return int|null
     */
    public function getTotalNumEntries()
    {
        return $this->container['total_num_entries'];
    }

    /**
     * Sets total_num_entries
     *
     * @param int|null $total_num_entries <div lang=\"ja\">取得される項目の総件数です。です。</div> <div lang=\"en\">Total number of items to be retrieved.</div>
     *
     * @return self
     */
    public function setTotalNumEntries($total_num_entries)
    {
        $this->container['total_num_entries'] = $total_num_entries;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \OpenAPI\Client\Model\ConversionTrackerServiceValue[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \OpenAPI\Client\Model\ConversionTrackerServiceValue[]|null $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


