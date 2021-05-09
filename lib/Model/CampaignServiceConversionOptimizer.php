<?php
/**
 * CampaignServiceConversionOptimizer
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
 * CampaignServiceConversionOptimizer Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; CampaignServiceConversionOptimizerは、コンバージョン最適化制御を保持するオブジェクトです。&lt;br&gt; このフィールドは、SET時に省略可能となり、ADDおよびREMOVE時に無視されます。&lt;br&gt; ※SET時、目的ありの場合は設定不可となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; CampaignServiceConversionOptimizer retains conversion optimization control.&lt;br&gt; This field is optional in SET operation, and will be ignored in ADD and REMOVE operation. &lt;br&gt; *For campaign with campaign goal, this field cannot be set in SET operation. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CampaignServiceConversionOptimizer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceConversionOptimizer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_campaign_conversion_optimizer' => '\YahooAdsDisplayApi\Client\Model\CampaignServiceAutoCampaignConversionOptimizer',
        'conversion_optimizer_type' => '\YahooAdsDisplayApi\Client\Model\CampaignServiceConversionOptimizerType',
        'manual_campaign_conversion_optimizer' => '\YahooAdsDisplayApi\Client\Model\CampaignServiceManualCampaignConversionOptimizer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_campaign_conversion_optimizer' => null,
        'conversion_optimizer_type' => null,
        'manual_campaign_conversion_optimizer' => null
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
        'auto_campaign_conversion_optimizer' => 'autoCampaignConversionOptimizer',
        'conversion_optimizer_type' => 'conversionOptimizerType',
        'manual_campaign_conversion_optimizer' => 'manualCampaignConversionOptimizer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_campaign_conversion_optimizer' => 'setAutoCampaignConversionOptimizer',
        'conversion_optimizer_type' => 'setConversionOptimizerType',
        'manual_campaign_conversion_optimizer' => 'setManualCampaignConversionOptimizer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_campaign_conversion_optimizer' => 'getAutoCampaignConversionOptimizer',
        'conversion_optimizer_type' => 'getConversionOptimizerType',
        'manual_campaign_conversion_optimizer' => 'getManualCampaignConversionOptimizer'
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
        $this->container['auto_campaign_conversion_optimizer'] = $data['auto_campaign_conversion_optimizer'] ?? null;
        $this->container['conversion_optimizer_type'] = $data['conversion_optimizer_type'] ?? null;
        $this->container['manual_campaign_conversion_optimizer'] = $data['manual_campaign_conversion_optimizer'] ?? null;
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
     * Gets auto_campaign_conversion_optimizer
     *
     * @return \YahooAdsDisplayApi\Client\Model\CampaignServiceAutoCampaignConversionOptimizer|null
     */
    public function getAutoCampaignConversionOptimizer()
    {
        return $this->container['auto_campaign_conversion_optimizer'];
    }

    /**
     * Sets auto_campaign_conversion_optimizer
     *
     * @param \YahooAdsDisplayApi\Client\Model\CampaignServiceAutoCampaignConversionOptimizer|null $auto_campaign_conversion_optimizer auto_campaign_conversion_optimizer
     *
     * @return self
     */
    public function setAutoCampaignConversionOptimizer($auto_campaign_conversion_optimizer)
    {
        $this->container['auto_campaign_conversion_optimizer'] = $auto_campaign_conversion_optimizer;

        return $this;
    }

    /**
     * Gets conversion_optimizer_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\CampaignServiceConversionOptimizerType|null
     */
    public function getConversionOptimizerType()
    {
        return $this->container['conversion_optimizer_type'];
    }

    /**
     * Sets conversion_optimizer_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\CampaignServiceConversionOptimizerType|null $conversion_optimizer_type conversion_optimizer_type
     *
     * @return self
     */
    public function setConversionOptimizerType($conversion_optimizer_type)
    {
        $this->container['conversion_optimizer_type'] = $conversion_optimizer_type;

        return $this;
    }

    /**
     * Gets manual_campaign_conversion_optimizer
     *
     * @return \YahooAdsDisplayApi\Client\Model\CampaignServiceManualCampaignConversionOptimizer|null
     */
    public function getManualCampaignConversionOptimizer()
    {
        return $this->container['manual_campaign_conversion_optimizer'];
    }

    /**
     * Sets manual_campaign_conversion_optimizer
     *
     * @param \YahooAdsDisplayApi\Client\Model\CampaignServiceManualCampaignConversionOptimizer|null $manual_campaign_conversion_optimizer manual_campaign_conversion_optimizer
     *
     * @return self
     */
    public function setManualCampaignConversionOptimizer($manual_campaign_conversion_optimizer)
    {
        $this->container['manual_campaign_conversion_optimizer'] = $manual_campaign_conversion_optimizer;

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


