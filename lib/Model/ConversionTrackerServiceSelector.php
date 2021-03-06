<?php
/**
 * ConversionTrackerServiceSelector
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
 * ConversionTrackerServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;ConversionTrackerServiceSelectorオブジェクトは、getメソッドの検索条件（実行パラメータ）を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;ConversionTrackerServiceSelector object contains a set of criteria (parameters) for get method.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ConversionTrackerServiceSelector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'app_conversion_platform' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceAppConversionPlatform',
        'app_ids' => 'string[]',
        'categories' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCategory[]',
        'conversion_tracker_ids' => 'int[]',
        'conversion_tracker_types' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceType[]',
        'counting_type' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCountingType',
        'exclude_from_bidding' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceExcludeFromBidding',
        'number_results' => 'int',
        'start_index' => 'int',
        'stats_period' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriod',
        'stats_period_custom_date' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate',
        'statuses' => '\YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'app_conversion_platform' => null,
        'app_ids' => null,
        'categories' => null,
        'conversion_tracker_ids' => 'int64',
        'conversion_tracker_types' => null,
        'counting_type' => null,
        'exclude_from_bidding' => null,
        'number_results' => 'int32',
        'start_index' => 'int32',
        'stats_period' => null,
        'stats_period_custom_date' => null,
        'statuses' => null
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
        'account_id' => 'accountId',
        'app_conversion_platform' => 'appConversionPlatform',
        'app_ids' => 'appIds',
        'categories' => 'categories',
        'conversion_tracker_ids' => 'conversionTrackerIds',
        'conversion_tracker_types' => 'conversionTrackerTypes',
        'counting_type' => 'countingType',
        'exclude_from_bidding' => 'excludeFromBidding',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'stats_period' => 'statsPeriod',
        'stats_period_custom_date' => 'statsPeriodCustomDate',
        'statuses' => 'statuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'app_conversion_platform' => 'setAppConversionPlatform',
        'app_ids' => 'setAppIds',
        'categories' => 'setCategories',
        'conversion_tracker_ids' => 'setConversionTrackerIds',
        'conversion_tracker_types' => 'setConversionTrackerTypes',
        'counting_type' => 'setCountingType',
        'exclude_from_bidding' => 'setExcludeFromBidding',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'stats_period' => 'setStatsPeriod',
        'stats_period_custom_date' => 'setStatsPeriodCustomDate',
        'statuses' => 'setStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'app_conversion_platform' => 'getAppConversionPlatform',
        'app_ids' => 'getAppIds',
        'categories' => 'getCategories',
        'conversion_tracker_ids' => 'getConversionTrackerIds',
        'conversion_tracker_types' => 'getConversionTrackerTypes',
        'counting_type' => 'getCountingType',
        'exclude_from_bidding' => 'getExcludeFromBidding',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'stats_period' => 'getStatsPeriod',
        'stats_period_custom_date' => 'getStatsPeriodCustomDate',
        'statuses' => 'getStatuses'
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['app_conversion_platform'] = $data['app_conversion_platform'] ?? null;
        $this->container['app_ids'] = $data['app_ids'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['conversion_tracker_ids'] = $data['conversion_tracker_ids'] ?? null;
        $this->container['conversion_tracker_types'] = $data['conversion_tracker_types'] ?? null;
        $this->container['counting_type'] = $data['counting_type'] ?? null;
        $this->container['exclude_from_bidding'] = $data['exclude_from_bidding'] ?? null;
        $this->container['number_results'] = $data['number_results'] ?? 500;
        $this->container['start_index'] = $data['start_index'] ?? 1;
        $this->container['stats_period'] = $data['stats_period'] ?? null;
        $this->container['stats_period_custom_date'] = $data['stats_period_custom_date'] ?? null;
        $this->container['statuses'] = $data['statuses'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['app_ids']) && (count($this->container['app_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'app_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['categories']) && (count($this->container['categories']) > 7)) {
            $invalidProperties[] = "invalid value for 'categories', number of items must be less than or equal to 7.";
        }

        if (!is_null($this->container['conversion_tracker_ids']) && (count($this->container['conversion_tracker_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'conversion_tracker_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['conversion_tracker_types']) && (count($this->container['conversion_tracker_types']) > 2)) {
            $invalidProperties[] = "invalid value for 'conversion_tracker_types', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 1000)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['statuses']) && (count($this->container['statuses']) > 2)) {
            $invalidProperties[] = "invalid value for 'statuses', number of items must be less than or equal to 2.";
        }

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
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id <div lang=\"ja\">アカウントID。</div> <div lang=\"en\">Account ID.</div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets app_conversion_platform
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceAppConversionPlatform|null
     */
    public function getAppConversionPlatform()
    {
        return $this->container['app_conversion_platform'];
    }

    /**
     * Sets app_conversion_platform
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceAppConversionPlatform|null $app_conversion_platform app_conversion_platform
     *
     * @return self
     */
    public function setAppConversionPlatform($app_conversion_platform)
    {
        $this->container['app_conversion_platform'] = $app_conversion_platform;

        return $this;
    }

    /**
     * Gets app_ids
     *
     * @return string[]|null
     */
    public function getAppIds()
    {
        return $this->container['app_ids'];
    }

    /**
     * Sets app_ids
     *
     * @param string[]|null $app_ids <div lang=\"ja\">アプリID。</div> <div lang=\"en\">App ID.</div>
     *
     * @return self
     */
    public function setAppIds($app_ids)
    {

        if (!is_null($app_ids) && (count($app_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $app_ids when calling ConversionTrackerServiceSelector., number of items must be less than or equal to 1000.');
        }
        $this->container['app_ids'] = $app_ids;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCategory[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCategory[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {

        if (!is_null($categories) && (count($categories) > 7)) {
            throw new \InvalidArgumentException('invalid value for $categories when calling ConversionTrackerServiceSelector., number of items must be less than or equal to 7.');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets conversion_tracker_ids
     *
     * @return int[]|null
     */
    public function getConversionTrackerIds()
    {
        return $this->container['conversion_tracker_ids'];
    }

    /**
     * Sets conversion_tracker_ids
     *
     * @param int[]|null $conversion_tracker_ids <div lang=\"ja\">コンバージョントラッカーのID。</div> <div lang=\"en\">Conversion Tracker ID.</div>
     *
     * @return self
     */
    public function setConversionTrackerIds($conversion_tracker_ids)
    {

        if (!is_null($conversion_tracker_ids) && (count($conversion_tracker_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $conversion_tracker_ids when calling ConversionTrackerServiceSelector., number of items must be less than or equal to 1000.');
        }
        $this->container['conversion_tracker_ids'] = $conversion_tracker_ids;

        return $this;
    }

    /**
     * Gets conversion_tracker_types
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceType[]|null
     */
    public function getConversionTrackerTypes()
    {
        return $this->container['conversion_tracker_types'];
    }

    /**
     * Sets conversion_tracker_types
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceType[]|null $conversion_tracker_types conversion_tracker_types
     *
     * @return self
     */
    public function setConversionTrackerTypes($conversion_tracker_types)
    {

        if (!is_null($conversion_tracker_types) && (count($conversion_tracker_types) > 2)) {
            throw new \InvalidArgumentException('invalid value for $conversion_tracker_types when calling ConversionTrackerServiceSelector., number of items must be less than or equal to 2.');
        }
        $this->container['conversion_tracker_types'] = $conversion_tracker_types;

        return $this;
    }

    /**
     * Gets counting_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCountingType|null
     */
    public function getCountingType()
    {
        return $this->container['counting_type'];
    }

    /**
     * Sets counting_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceCountingType|null $counting_type counting_type
     *
     * @return self
     */
    public function setCountingType($counting_type)
    {
        $this->container['counting_type'] = $counting_type;

        return $this;
    }

    /**
     * Gets exclude_from_bidding
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceExcludeFromBidding|null
     */
    public function getExcludeFromBidding()
    {
        return $this->container['exclude_from_bidding'];
    }

    /**
     * Sets exclude_from_bidding
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceExcludeFromBidding|null $exclude_from_bidding exclude_from_bidding
     *
     * @return self
     */
    public function setExcludeFromBidding($exclude_from_bidding)
    {
        $this->container['exclude_from_bidding'] = $exclude_from_bidding;

        return $this;
    }

    /**
     * Gets number_results
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['number_results'];
    }

    /**
     * Sets number_results
     *
     * @param int|null $number_results <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.</div>
     *
     * @return self
     */
    public function setNumberResults($number_results)
    {

        if (!is_null($number_results) && ($number_results > 1000)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be smaller than or equal to 1000.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['number_results'] = $number_results;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int|null $start_index <div lang=\"ja\">ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Index of the first result to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return self
     */
    public function setStartIndex($start_index)
    {

        if (!is_null($start_index) && ($start_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_index when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets stats_period
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriod|null
     */
    public function getStatsPeriod()
    {
        return $this->container['stats_period'];
    }

    /**
     * Sets stats_period
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriod|null $stats_period stats_period
     *
     * @return self
     */
    public function setStatsPeriod($stats_period)
    {
        $this->container['stats_period'] = $stats_period;

        return $this;
    }

    /**
     * Gets stats_period_custom_date
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate|null
     */
    public function getStatsPeriodCustomDate()
    {
        return $this->container['stats_period_custom_date'];
    }

    /**
     * Sets stats_period_custom_date
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatsPeriodCustomDate|null $stats_period_custom_date stats_period_custom_date
     *
     * @return self
     */
    public function setStatsPeriodCustomDate($stats_period_custom_date)
    {
        $this->container['stats_period_custom_date'] = $stats_period_custom_date;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatus[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \YahooAdsDisplayApi\Client\Model\ConversionTrackerServiceStatus[]|null $statuses statuses
     *
     * @return self
     */
    public function setStatuses($statuses)
    {

        if (!is_null($statuses) && (count($statuses) > 2)) {
            throw new \InvalidArgumentException('invalid value for $statuses when calling ConversionTrackerServiceSelector., number of items must be less than or equal to 2.');
        }
        $this->container['statuses'] = $statuses;

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


