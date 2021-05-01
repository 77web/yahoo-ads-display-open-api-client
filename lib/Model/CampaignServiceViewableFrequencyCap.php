<?php
/**
 * CampaignServiceViewableFrequencyCap
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
 * CampaignServiceViewableFrequencyCap Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; CampaignServiceViewableFrequencyCapは、ビューアブルフリクエンシー制御を表します。&lt;br&gt; ADDおよびSET時、このフィールドは目的なしの場合は設定不可となり、目的ありの場合は省略可能となります。&lt;br&gt; REMOVE時は無視されます。&lt;br&gt; ※ADD時は全ての項目の指定が必須です。&lt;br&gt; ※SET時は更新する項目のみのリクエストが可能です。&lt;br&gt; ※ビューアブルフリークエンシーキャップの解除方法は、以下の通りです： &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; CampaignServiceViewableFrequencyCap object describes viewable frequency restriction.&lt;br&gt; In ADD and SET operation, this field cannot be set for campaigns with no campaign goal, and will be optional for campaigns with campaign goal. &lt;br&gt; In REMOVE operation, this field will be ignored.&lt;br&gt; *All items must be specified in ADD operation.&lt;br&gt; *Only update items can be requested in SET operation.&lt;br&gt; *Method to remove the viewable frequency cap: &lt;/div&gt; &lt;code&gt; {     \&quot;viewableFrequencyCap\&quot;: {         \&quot;vImps\&quot;: 0     } } &lt;/code&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CampaignServiceViewableFrequencyCap implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceViewableFrequencyCap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'frequency_level' => '\OpenAPI\Client\Model\CampaignServiceFrequencyLevel',
        'frequency_time_unit' => '\OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit',
        'v_imps' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'frequency_level' => null,
        'frequency_time_unit' => null,
        'v_imps' => 'int64'
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
        'frequency_level' => 'frequencyLevel',
        'frequency_time_unit' => 'frequencyTimeUnit',
        'v_imps' => 'vImps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency_level' => 'setFrequencyLevel',
        'frequency_time_unit' => 'setFrequencyTimeUnit',
        'v_imps' => 'setVImps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency_level' => 'getFrequencyLevel',
        'frequency_time_unit' => 'getFrequencyTimeUnit',
        'v_imps' => 'getVImps'
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
        $this->container['frequency_level'] = $data['frequency_level'] ?? null;
        $this->container['frequency_time_unit'] = $data['frequency_time_unit'] ?? null;
        $this->container['v_imps'] = $data['v_imps'] ?? null;
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
     * Gets frequency_level
     *
     * @return \OpenAPI\Client\Model\CampaignServiceFrequencyLevel|null
     */
    public function getFrequencyLevel()
    {
        return $this->container['frequency_level'];
    }

    /**
     * Sets frequency_level
     *
     * @param \OpenAPI\Client\Model\CampaignServiceFrequencyLevel|null $frequency_level frequency_level
     *
     * @return self
     */
    public function setFrequencyLevel($frequency_level)
    {
        $this->container['frequency_level'] = $frequency_level;

        return $this;
    }

    /**
     * Gets frequency_time_unit
     *
     * @return \OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit|null
     */
    public function getFrequencyTimeUnit()
    {
        return $this->container['frequency_time_unit'];
    }

    /**
     * Sets frequency_time_unit
     *
     * @param \OpenAPI\Client\Model\CampaignServiceFrequencyTimeUnit|null $frequency_time_unit frequency_time_unit
     *
     * @return self
     */
    public function setFrequencyTimeUnit($frequency_time_unit)
    {
        $this->container['frequency_time_unit'] = $frequency_time_unit;

        return $this;
    }

    /**
     * Gets v_imps
     *
     * @return int|null
     */
    public function getVImps()
    {
        return $this->container['v_imps'];
    }

    /**
     * Sets v_imps
     *
     * @param int|null $v_imps <div lang=\"ja\"> 同一ユーザに対する広告の最大ビューアブルインプレッション数です。<br> このフィールドは、ADDおよびSET時に省略可能となります。 </div> <div lang=\"en\"> Maximum number of ad viewable impressions to same user.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return self
     */
    public function setVImps($v_imps)
    {
        $this->container['v_imps'] = $v_imps;

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


