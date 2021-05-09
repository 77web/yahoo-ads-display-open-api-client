<?php
/**
 * FeedFtpServiceSchedule
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
 * FeedFtpServiceSchedule Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; FeedFtpServiceScheduleオブジェクトは、定期アップロードのスケジュールを表します。&lt;br&gt; このフィールドは、ADD時は必須となり、SET時は省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; FeedFtpServiceSchedule object displays Periodic Upload schedule.&lt;br&gt; This field is required in ADD operation, and will be optional in SET operation. &lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedFtpServiceSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedFtpServiceSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_daily' => '\YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleDaily',
        'schedule_hourly' => '\YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleHourly',
        'schedule_type' => '\YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleType',
        'schedule_weekly' => '\YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleWeekly'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schedule_daily' => null,
        'schedule_hourly' => null,
        'schedule_type' => null,
        'schedule_weekly' => null
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
        'schedule_daily' => 'scheduleDaily',
        'schedule_hourly' => 'scheduleHourly',
        'schedule_type' => 'scheduleType',
        'schedule_weekly' => 'scheduleWeekly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_daily' => 'setScheduleDaily',
        'schedule_hourly' => 'setScheduleHourly',
        'schedule_type' => 'setScheduleType',
        'schedule_weekly' => 'setScheduleWeekly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_daily' => 'getScheduleDaily',
        'schedule_hourly' => 'getScheduleHourly',
        'schedule_type' => 'getScheduleType',
        'schedule_weekly' => 'getScheduleWeekly'
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
        $this->container['schedule_daily'] = $data['schedule_daily'] ?? null;
        $this->container['schedule_hourly'] = $data['schedule_hourly'] ?? null;
        $this->container['schedule_type'] = $data['schedule_type'] ?? null;
        $this->container['schedule_weekly'] = $data['schedule_weekly'] ?? null;
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
     * Gets schedule_daily
     *
     * @return \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleDaily|null
     */
    public function getScheduleDaily()
    {
        return $this->container['schedule_daily'];
    }

    /**
     * Sets schedule_daily
     *
     * @param \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleDaily|null $schedule_daily schedule_daily
     *
     * @return self
     */
    public function setScheduleDaily($schedule_daily)
    {
        $this->container['schedule_daily'] = $schedule_daily;

        return $this;
    }

    /**
     * Gets schedule_hourly
     *
     * @return \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleHourly|null
     */
    public function getScheduleHourly()
    {
        return $this->container['schedule_hourly'];
    }

    /**
     * Sets schedule_hourly
     *
     * @param \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleHourly|null $schedule_hourly schedule_hourly
     *
     * @return self
     */
    public function setScheduleHourly($schedule_hourly)
    {
        $this->container['schedule_hourly'] = $schedule_hourly;

        return $this;
    }

    /**
     * Gets schedule_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleType|null
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleType|null $schedule_type schedule_type
     *
     * @return self
     */
    public function setScheduleType($schedule_type)
    {
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }

    /**
     * Gets schedule_weekly
     *
     * @return \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleWeekly|null
     */
    public function getScheduleWeekly()
    {
        return $this->container['schedule_weekly'];
    }

    /**
     * Sets schedule_weekly
     *
     * @param \YahooAdsDisplayApi\Client\Model\FeedFtpServiceScheduleWeekly|null $schedule_weekly schedule_weekly
     *
     * @return self
     */
    public function setScheduleWeekly($schedule_weekly)
    {
        $this->container['schedule_weekly'] = $schedule_weekly;

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


