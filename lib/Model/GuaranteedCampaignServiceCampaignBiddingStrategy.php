<?php
/**
 * GuaranteedCampaignServiceCampaignBiddingStrategy
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
 * GuaranteedCampaignServiceCampaignBiddingStrategy Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedCampaignServiceCampaignBiddingStrategyオブジェクトは、キャンペーン入札戦略です。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedCampaignServiceCampaignBiddingStrategy object describes campaign bidding strategy.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedCampaignServiceCampaignBiddingStrategy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedCampaignServiceCampaignBiddingStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_bidding_strategy_type' => '\YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceCampaignBiddingStrategyType',
        'max_vcpm_bid_value' => 'int',
        'sov_rate' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaign_bidding_strategy_type' => null,
        'max_vcpm_bid_value' => 'int64',
        'sov_rate' => 'int64'
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
        'campaign_bidding_strategy_type' => 'campaignBiddingStrategyType',
        'max_vcpm_bid_value' => 'maxVcpmBidValue',
        'sov_rate' => 'sovRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_bidding_strategy_type' => 'setCampaignBiddingStrategyType',
        'max_vcpm_bid_value' => 'setMaxVcpmBidValue',
        'sov_rate' => 'setSovRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_bidding_strategy_type' => 'getCampaignBiddingStrategyType',
        'max_vcpm_bid_value' => 'getMaxVcpmBidValue',
        'sov_rate' => 'getSovRate'
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
        $this->container['campaign_bidding_strategy_type'] = $data['campaign_bidding_strategy_type'] ?? null;
        $this->container['max_vcpm_bid_value'] = $data['max_vcpm_bid_value'] ?? null;
        $this->container['sov_rate'] = $data['sov_rate'] ?? null;
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
     * Gets campaign_bidding_strategy_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceCampaignBiddingStrategyType|null
     */
    public function getCampaignBiddingStrategyType()
    {
        return $this->container['campaign_bidding_strategy_type'];
    }

    /**
     * Sets campaign_bidding_strategy_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedCampaignServiceCampaignBiddingStrategyType|null $campaign_bidding_strategy_type campaign_bidding_strategy_type
     *
     * @return self
     */
    public function setCampaignBiddingStrategyType($campaign_bidding_strategy_type)
    {
        $this->container['campaign_bidding_strategy_type'] = $campaign_bidding_strategy_type;

        return $this;
    }

    /**
     * Gets max_vcpm_bid_value
     *
     * @return int|null
     */
    public function getMaxVcpmBidValue()
    {
        return $this->container['max_vcpm_bid_value'];
    }

    /**
     * Sets max_vcpm_bid_value
     *
     * @param int|null $max_vcpm_bid_value <div lang=\"ja\"> キャンペーン最大入札価格(vCPM)です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Max bid of campaign (vCPM).<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setMaxVcpmBidValue($max_vcpm_bid_value)
    {
        $this->container['max_vcpm_bid_value'] = $max_vcpm_bid_value;

        return $this;
    }

    /**
     * Gets sov_rate
     *
     * @return int|null
     */
    public function getSovRate()
    {
        return $this->container['sov_rate'];
    }

    /**
     * Sets sov_rate
     *
     * @param int|null $sov_rate <div lang=\"ja\"> SOV割合です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> SOV rate.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setSovRate($sov_rate)
    {
        $this->container['sov_rate'] = $sov_rate;

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


