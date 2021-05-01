<?php
/**
 * GuaranteedSimulationServiceTarget
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
 * GuaranteedSimulationServiceTarget Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; GuaranteedSimulationServiceTargetオブジェクトは、ターゲティング設定情報を保持します。&lt;br&gt; ADD時、このフィールドは省略可能となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; GuaranteedSimulationServiceTarget object holds information of the target setting.&lt;br&gt; This field is optional in ADD operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulationServiceTarget implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulationServiceTarget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_schedule_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceAdScheduleTarget',
        'age_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceAgeTarget',
        'app_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceAppTarget',
        'audience_category_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceAudienceCategoryTarget',
        'device_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceDeviceTarget',
        'gender_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceGenderTarget',
        'geo_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceGeoTarget',
        'os_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceOsTarget',
        'placement_category_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServicePlacementCategoryTarget',
        'position_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServicePositionTarget',
        'site_retargeting_target' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceSiteRetargetingTarget',
        'target_id' => 'string',
        'target_type' => '\OpenAPI\Client\Model\GuaranteedSimulationServiceTargetType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ad_schedule_target' => null,
        'age_target' => null,
        'app_target' => null,
        'audience_category_target' => null,
        'device_target' => null,
        'gender_target' => null,
        'geo_target' => null,
        'os_target' => null,
        'placement_category_target' => null,
        'position_target' => null,
        'site_retargeting_target' => null,
        'target_id' => null,
        'target_type' => null
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
        'ad_schedule_target' => 'adScheduleTarget',
        'age_target' => 'ageTarget',
        'app_target' => 'appTarget',
        'audience_category_target' => 'audienceCategoryTarget',
        'device_target' => 'deviceTarget',
        'gender_target' => 'genderTarget',
        'geo_target' => 'geoTarget',
        'os_target' => 'osTarget',
        'placement_category_target' => 'placementCategoryTarget',
        'position_target' => 'positionTarget',
        'site_retargeting_target' => 'siteRetargetingTarget',
        'target_id' => 'targetId',
        'target_type' => 'targetType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_schedule_target' => 'setAdScheduleTarget',
        'age_target' => 'setAgeTarget',
        'app_target' => 'setAppTarget',
        'audience_category_target' => 'setAudienceCategoryTarget',
        'device_target' => 'setDeviceTarget',
        'gender_target' => 'setGenderTarget',
        'geo_target' => 'setGeoTarget',
        'os_target' => 'setOsTarget',
        'placement_category_target' => 'setPlacementCategoryTarget',
        'position_target' => 'setPositionTarget',
        'site_retargeting_target' => 'setSiteRetargetingTarget',
        'target_id' => 'setTargetId',
        'target_type' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_schedule_target' => 'getAdScheduleTarget',
        'age_target' => 'getAgeTarget',
        'app_target' => 'getAppTarget',
        'audience_category_target' => 'getAudienceCategoryTarget',
        'device_target' => 'getDeviceTarget',
        'gender_target' => 'getGenderTarget',
        'geo_target' => 'getGeoTarget',
        'os_target' => 'getOsTarget',
        'placement_category_target' => 'getPlacementCategoryTarget',
        'position_target' => 'getPositionTarget',
        'site_retargeting_target' => 'getSiteRetargetingTarget',
        'target_id' => 'getTargetId',
        'target_type' => 'getTargetType'
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
        $this->container['ad_schedule_target'] = $data['ad_schedule_target'] ?? null;
        $this->container['age_target'] = $data['age_target'] ?? null;
        $this->container['app_target'] = $data['app_target'] ?? null;
        $this->container['audience_category_target'] = $data['audience_category_target'] ?? null;
        $this->container['device_target'] = $data['device_target'] ?? null;
        $this->container['gender_target'] = $data['gender_target'] ?? null;
        $this->container['geo_target'] = $data['geo_target'] ?? null;
        $this->container['os_target'] = $data['os_target'] ?? null;
        $this->container['placement_category_target'] = $data['placement_category_target'] ?? null;
        $this->container['position_target'] = $data['position_target'] ?? null;
        $this->container['site_retargeting_target'] = $data['site_retargeting_target'] ?? null;
        $this->container['target_id'] = $data['target_id'] ?? null;
        $this->container['target_type'] = $data['target_type'] ?? null;
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
     * Gets ad_schedule_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceAdScheduleTarget|null
     */
    public function getAdScheduleTarget()
    {
        return $this->container['ad_schedule_target'];
    }

    /**
     * Sets ad_schedule_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceAdScheduleTarget|null $ad_schedule_target ad_schedule_target
     *
     * @return self
     */
    public function setAdScheduleTarget($ad_schedule_target)
    {
        $this->container['ad_schedule_target'] = $ad_schedule_target;

        return $this;
    }

    /**
     * Gets age_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceAgeTarget|null
     */
    public function getAgeTarget()
    {
        return $this->container['age_target'];
    }

    /**
     * Sets age_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceAgeTarget|null $age_target age_target
     *
     * @return self
     */
    public function setAgeTarget($age_target)
    {
        $this->container['age_target'] = $age_target;

        return $this;
    }

    /**
     * Gets app_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceAppTarget|null
     */
    public function getAppTarget()
    {
        return $this->container['app_target'];
    }

    /**
     * Sets app_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceAppTarget|null $app_target app_target
     *
     * @return self
     */
    public function setAppTarget($app_target)
    {
        $this->container['app_target'] = $app_target;

        return $this;
    }

    /**
     * Gets audience_category_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceAudienceCategoryTarget|null
     */
    public function getAudienceCategoryTarget()
    {
        return $this->container['audience_category_target'];
    }

    /**
     * Sets audience_category_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceAudienceCategoryTarget|null $audience_category_target audience_category_target
     *
     * @return self
     */
    public function setAudienceCategoryTarget($audience_category_target)
    {
        $this->container['audience_category_target'] = $audience_category_target;

        return $this;
    }

    /**
     * Gets device_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceDeviceTarget|null
     */
    public function getDeviceTarget()
    {
        return $this->container['device_target'];
    }

    /**
     * Sets device_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceDeviceTarget|null $device_target device_target
     *
     * @return self
     */
    public function setDeviceTarget($device_target)
    {
        $this->container['device_target'] = $device_target;

        return $this;
    }

    /**
     * Gets gender_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceGenderTarget|null
     */
    public function getGenderTarget()
    {
        return $this->container['gender_target'];
    }

    /**
     * Sets gender_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceGenderTarget|null $gender_target gender_target
     *
     * @return self
     */
    public function setGenderTarget($gender_target)
    {
        $this->container['gender_target'] = $gender_target;

        return $this;
    }

    /**
     * Gets geo_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceGeoTarget|null
     */
    public function getGeoTarget()
    {
        return $this->container['geo_target'];
    }

    /**
     * Sets geo_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceGeoTarget|null $geo_target geo_target
     *
     * @return self
     */
    public function setGeoTarget($geo_target)
    {
        $this->container['geo_target'] = $geo_target;

        return $this;
    }

    /**
     * Gets os_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceOsTarget|null
     */
    public function getOsTarget()
    {
        return $this->container['os_target'];
    }

    /**
     * Sets os_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceOsTarget|null $os_target os_target
     *
     * @return self
     */
    public function setOsTarget($os_target)
    {
        $this->container['os_target'] = $os_target;

        return $this;
    }

    /**
     * Gets placement_category_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServicePlacementCategoryTarget|null
     */
    public function getPlacementCategoryTarget()
    {
        return $this->container['placement_category_target'];
    }

    /**
     * Sets placement_category_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServicePlacementCategoryTarget|null $placement_category_target placement_category_target
     *
     * @return self
     */
    public function setPlacementCategoryTarget($placement_category_target)
    {
        $this->container['placement_category_target'] = $placement_category_target;

        return $this;
    }

    /**
     * Gets position_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServicePositionTarget|null
     */
    public function getPositionTarget()
    {
        return $this->container['position_target'];
    }

    /**
     * Sets position_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServicePositionTarget|null $position_target position_target
     *
     * @return self
     */
    public function setPositionTarget($position_target)
    {
        $this->container['position_target'] = $position_target;

        return $this;
    }

    /**
     * Gets site_retargeting_target
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceSiteRetargetingTarget|null
     */
    public function getSiteRetargetingTarget()
    {
        return $this->container['site_retargeting_target'];
    }

    /**
     * Sets site_retargeting_target
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceSiteRetargetingTarget|null $site_retargeting_target site_retargeting_target
     *
     * @return self
     */
    public function setSiteRetargetingTarget($site_retargeting_target)
    {
        $this->container['site_retargeting_target'] = $site_retargeting_target;

        return $this;
    }

    /**
     * Gets target_id
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['target_id'];
    }

    /**
     * Sets target_id
     *
     * @param string|null $target_id <div lang=\"ja\"> ターゲットIDです。<br> このフィールドは、ADD時は省略可能となります。 </div> <div lang=\"en\"> Target ID.<br> This field is optional in ADD operation. </div>
     *
     * @return self
     */
    public function setTargetId($target_id)
    {
        $this->container['target_id'] = $target_id;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return \OpenAPI\Client\Model\GuaranteedSimulationServiceTargetType|null
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param \OpenAPI\Client\Model\GuaranteedSimulationServiceTargetType|null $target_type target_type
     *
     * @return self
     */
    public function setTargetType($target_type)
    {
        $this->container['target_type'] = $target_type;

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

