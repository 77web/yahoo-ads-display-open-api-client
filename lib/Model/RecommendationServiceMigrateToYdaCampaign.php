<?php
/**
 * RecommendationServiceMigrateToYdaCampaign
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
 * RecommendationServiceMigrateToYdaCampaign Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RecommendationServiceMigrateToYdaCampaignオブジェクトは、ディスプレイ広告（運用型）形式への変換が必要なキャンペーンに関する最適化提案の詳細情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;RecommendationServiceMigrateToYdaCampaign object describes the detailed information of Recommendations about campaigns that are required to convert to Display Ads (Auction).&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RecommendationServiceMigrateToYdaCampaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecommendationServiceMigrateToYdaCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recommendation_id' => 'int',
        'campaign_id' => 'int',
        'campaign_name' => 'string',
        'campaign_user_status' => 'string',
        'stard_date' => 'string',
        'end_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recommendation_id' => 'int64',
        'campaign_id' => 'int64',
        'campaign_name' => null,
        'campaign_user_status' => null,
        'stard_date' => null,
        'end_date' => null
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
        'recommendation_id' => 'recommendationId',
        'campaign_id' => 'campaignId',
        'campaign_name' => 'campaignName',
        'campaign_user_status' => 'campaignUserStatus',
        'stard_date' => 'stardDate',
        'end_date' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recommendation_id' => 'setRecommendationId',
        'campaign_id' => 'setCampaignId',
        'campaign_name' => 'setCampaignName',
        'campaign_user_status' => 'setCampaignUserStatus',
        'stard_date' => 'setStardDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recommendation_id' => 'getRecommendationId',
        'campaign_id' => 'getCampaignId',
        'campaign_name' => 'getCampaignName',
        'campaign_user_status' => 'getCampaignUserStatus',
        'stard_date' => 'getStardDate',
        'end_date' => 'getEndDate'
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
        $this->container['recommendation_id'] = $data['recommendation_id'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['campaign_name'] = $data['campaign_name'] ?? null;
        $this->container['campaign_user_status'] = $data['campaign_user_status'] ?? null;
        $this->container['stard_date'] = $data['stard_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
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
     * Gets recommendation_id
     *
     * @return int|null
     */
    public function getRecommendationId()
    {
        return $this->container['recommendation_id'];
    }

    /**
     * Sets recommendation_id
     *
     * @param int|null $recommendation_id <div lang=\"ja\"> 最適化提案IDです。<br> </div> <div lang=\"en\"> Recommendation ID.<br> </div>
     *
     * @return self
     */
    public function setRecommendationId($recommendation_id)
    {
        $this->container['recommendation_id'] = $recommendation_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id <div lang=\"ja\"> キャンペーンIDです。<br> </div> <div lang=\"en\"> Campaign ID.<br> </div>
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string|null $campaign_name <div lang=\"ja\"> キャンペーン名です。<br> </div> <div lang=\"en\"> Campaign Name.<br> </div>
     *
     * @return self
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets campaign_user_status
     *
     * @return string|null
     */
    public function getCampaignUserStatus()
    {
        return $this->container['campaign_user_status'];
    }

    /**
     * Sets campaign_user_status
     *
     * @param string|null $campaign_user_status <div lang=\"ja\"> キャンペーン配信設定です。 </div> <div lang=\"en\"> Campaign delivery setting. </div>
     *
     * @return self
     */
    public function setCampaignUserStatus($campaign_user_status)
    {
        $this->container['campaign_user_status'] = $campaign_user_status;

        return $this;
    }

    /**
     * Gets stard_date
     *
     * @return string|null
     */
    public function getStardDate()
    {
        return $this->container['stard_date'];
    }

    /**
     * Sets stard_date
     *
     * @param string|null $stard_date <div lang=\"ja\"> キャンペーン配信開始日です。<br>※フォーマット：yyyyMMdd </div> <div lang=\"en\"> Start date of campaign delivery.<br>* Format: yyyyMMdd </div>
     *
     * @return self
     */
    public function setStardDate($stard_date)
    {
        $this->container['stard_date'] = $stard_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date <div lang=\"ja\"> キャンペーン配信終了日です。<br>※フォーマット：yyyyMMdd </div> <div lang=\"en\"> End date of campaign delivery.<br>* Format: yyyyMMdd </div>
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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


