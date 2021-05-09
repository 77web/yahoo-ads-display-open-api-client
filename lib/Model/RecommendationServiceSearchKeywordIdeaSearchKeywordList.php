<?php
/**
 * RecommendationServiceSearchKeywordIdeaSearchKeywordList
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
 * RecommendationServiceSearchKeywordIdeaSearchKeywordList Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;追加を推奨するサーチキーワードに関する詳細情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;This describes the detailed information of recommended search keyword to add.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RecommendationServiceSearchKeywordIdeaSearchKeywordList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecommendationServiceSearchKeywordIdeaSearchKeywordList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recommendation_id' => 'int',
        'current_search_keyword_list_id' => 'int',
        'current_search_keyword_list_name' => 'string',
        'current_search_keyword_recency' => 'string',
        'current_search_keyword_frequency' => 'string',
        'recommended_search_keyword_id' => 'int',
        'recommended_search_keyword' => 'string',
        'desktop_search_volume' => 'int',
        'smart_phone_search_volume' => 'int',
        'tablet_search_volume' => 'int'
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
        'current_search_keyword_list_id' => 'int64',
        'current_search_keyword_list_name' => null,
        'current_search_keyword_recency' => null,
        'current_search_keyword_frequency' => null,
        'recommended_search_keyword_id' => 'int64',
        'recommended_search_keyword' => null,
        'desktop_search_volume' => 'int64',
        'smart_phone_search_volume' => 'int64',
        'tablet_search_volume' => 'int64'
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
        'current_search_keyword_list_id' => 'currentSearchKeywordListId',
        'current_search_keyword_list_name' => 'currentSearchKeywordListName',
        'current_search_keyword_recency' => 'currentSearchKeywordRecency',
        'current_search_keyword_frequency' => 'currentSearchKeywordFrequency',
        'recommended_search_keyword_id' => 'recommendedSearchKeywordId',
        'recommended_search_keyword' => 'recommendedSearchKeyword',
        'desktop_search_volume' => 'desktopSearchVolume',
        'smart_phone_search_volume' => 'smartPhoneSearchVolume',
        'tablet_search_volume' => 'tabletSearchVolume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recommendation_id' => 'setRecommendationId',
        'current_search_keyword_list_id' => 'setCurrentSearchKeywordListId',
        'current_search_keyword_list_name' => 'setCurrentSearchKeywordListName',
        'current_search_keyword_recency' => 'setCurrentSearchKeywordRecency',
        'current_search_keyword_frequency' => 'setCurrentSearchKeywordFrequency',
        'recommended_search_keyword_id' => 'setRecommendedSearchKeywordId',
        'recommended_search_keyword' => 'setRecommendedSearchKeyword',
        'desktop_search_volume' => 'setDesktopSearchVolume',
        'smart_phone_search_volume' => 'setSmartPhoneSearchVolume',
        'tablet_search_volume' => 'setTabletSearchVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recommendation_id' => 'getRecommendationId',
        'current_search_keyword_list_id' => 'getCurrentSearchKeywordListId',
        'current_search_keyword_list_name' => 'getCurrentSearchKeywordListName',
        'current_search_keyword_recency' => 'getCurrentSearchKeywordRecency',
        'current_search_keyword_frequency' => 'getCurrentSearchKeywordFrequency',
        'recommended_search_keyword_id' => 'getRecommendedSearchKeywordId',
        'recommended_search_keyword' => 'getRecommendedSearchKeyword',
        'desktop_search_volume' => 'getDesktopSearchVolume',
        'smart_phone_search_volume' => 'getSmartPhoneSearchVolume',
        'tablet_search_volume' => 'getTabletSearchVolume'
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
        $this->container['current_search_keyword_list_id'] = $data['current_search_keyword_list_id'] ?? null;
        $this->container['current_search_keyword_list_name'] = $data['current_search_keyword_list_name'] ?? null;
        $this->container['current_search_keyword_recency'] = $data['current_search_keyword_recency'] ?? null;
        $this->container['current_search_keyword_frequency'] = $data['current_search_keyword_frequency'] ?? null;
        $this->container['recommended_search_keyword_id'] = $data['recommended_search_keyword_id'] ?? null;
        $this->container['recommended_search_keyword'] = $data['recommended_search_keyword'] ?? null;
        $this->container['desktop_search_volume'] = $data['desktop_search_volume'] ?? null;
        $this->container['smart_phone_search_volume'] = $data['smart_phone_search_volume'] ?? null;
        $this->container['tablet_search_volume'] = $data['tablet_search_volume'] ?? null;
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
     * Gets current_search_keyword_list_id
     *
     * @return int|null
     */
    public function getCurrentSearchKeywordListId()
    {
        return $this->container['current_search_keyword_list_id'];
    }

    /**
     * Sets current_search_keyword_list_id
     *
     * @param int|null $current_search_keyword_list_id <div lang=\"ja\"> サーチキーワードリストIDです。 </div> <div lang=\"en\"> Search keyword list ID. </div>
     *
     * @return self
     */
    public function setCurrentSearchKeywordListId($current_search_keyword_list_id)
    {
        $this->container['current_search_keyword_list_id'] = $current_search_keyword_list_id;

        return $this;
    }

    /**
     * Gets current_search_keyword_list_name
     *
     * @return string|null
     */
    public function getCurrentSearchKeywordListName()
    {
        return $this->container['current_search_keyword_list_name'];
    }

    /**
     * Sets current_search_keyword_list_name
     *
     * @param string|null $current_search_keyword_list_name <div lang=\"ja\"> サーチキーワードリスト名です。 </div> <div lang=\"en\"> Search keyword list name. </div>
     *
     * @return self
     */
    public function setCurrentSearchKeywordListName($current_search_keyword_list_name)
    {
        $this->container['current_search_keyword_list_name'] = $current_search_keyword_list_name;

        return $this;
    }

    /**
     * Gets current_search_keyword_recency
     *
     * @return string|null
     */
    public function getCurrentSearchKeywordRecency()
    {
        return $this->container['current_search_keyword_recency'];
    }

    /**
     * Sets current_search_keyword_recency
     *
     * @param string|null $current_search_keyword_recency <div lang=\"ja\"> サーチキーワードの有効期間を表します。<br> 返却される値については、SearchKeywordListServiceのSearchKeywordListServiceKeywordRecencyオブジェクトをご参照ください。 </div> <div lang=\"en\"> Recency of search keyword list.<br> See the SearchKeywordListServiceKeywordRecency in SearchKeywordListService to learn about return value. </div>
     *
     * @return self
     */
    public function setCurrentSearchKeywordRecency($current_search_keyword_recency)
    {
        $this->container['current_search_keyword_recency'] = $current_search_keyword_recency;

        return $this;
    }

    /**
     * Gets current_search_keyword_frequency
     *
     * @return string|null
     */
    public function getCurrentSearchKeywordFrequency()
    {
        return $this->container['current_search_keyword_frequency'];
    }

    /**
     * Sets current_search_keyword_frequency
     *
     * @param string|null $current_search_keyword_frequency <div lang=\"ja\"> サーチキーワードの検索回数を表します。<br> 返却される値については、SearchKeywordListServiceのSearchKeywordListServiceKeywordFrequencyオブジェクトをご参照ください。 </div> <div lang=\"en\"> Frequency of search keyword list.<br> See the SearchKeywordListServiceKeywordFrequency in SearchKeywordListService to learn about return value. </div>
     *
     * @return self
     */
    public function setCurrentSearchKeywordFrequency($current_search_keyword_frequency)
    {
        $this->container['current_search_keyword_frequency'] = $current_search_keyword_frequency;

        return $this;
    }

    /**
     * Gets recommended_search_keyword_id
     *
     * @return int|null
     */
    public function getRecommendedSearchKeywordId()
    {
        return $this->container['recommended_search_keyword_id'];
    }

    /**
     * Sets recommended_search_keyword_id
     *
     * @param int|null $recommended_search_keyword_id <div lang=\"ja\"> 推奨するサーチキーワードIDです。 </div> <div lang=\"en\"> Recommended search keyword ID. </div>
     *
     * @return self
     */
    public function setRecommendedSearchKeywordId($recommended_search_keyword_id)
    {
        $this->container['recommended_search_keyword_id'] = $recommended_search_keyword_id;

        return $this;
    }

    /**
     * Gets recommended_search_keyword
     *
     * @return string|null
     */
    public function getRecommendedSearchKeyword()
    {
        return $this->container['recommended_search_keyword'];
    }

    /**
     * Sets recommended_search_keyword
     *
     * @param string|null $recommended_search_keyword <div lang=\"ja\"> 推奨するサーチキーワードです。 </div> <div lang=\"en\"> Recommended search keyword. </div>
     *
     * @return self
     */
    public function setRecommendedSearchKeyword($recommended_search_keyword)
    {
        $this->container['recommended_search_keyword'] = $recommended_search_keyword;

        return $this;
    }

    /**
     * Gets desktop_search_volume
     *
     * @return int|null
     */
    public function getDesktopSearchVolume()
    {
        return $this->container['desktop_search_volume'];
    }

    /**
     * Sets desktop_search_volume
     *
     * @param int|null $desktop_search_volume <div lang=\"ja\"> 推奨するサーチキーワードのPCでのリーチ数です。 </div> <div lang=\"en\"> Number of reach in PC with recommended search keyword. </div>
     *
     * @return self
     */
    public function setDesktopSearchVolume($desktop_search_volume)
    {
        $this->container['desktop_search_volume'] = $desktop_search_volume;

        return $this;
    }

    /**
     * Gets smart_phone_search_volume
     *
     * @return int|null
     */
    public function getSmartPhoneSearchVolume()
    {
        return $this->container['smart_phone_search_volume'];
    }

    /**
     * Sets smart_phone_search_volume
     *
     * @param int|null $smart_phone_search_volume <div lang=\"ja\"> 推奨するサーチキーワードのSmartPhoneでのリーチ数です。 </div> <div lang=\"en\"> Number of Reach in SmartPhone with recommended search keyword. </div>
     *
     * @return self
     */
    public function setSmartPhoneSearchVolume($smart_phone_search_volume)
    {
        $this->container['smart_phone_search_volume'] = $smart_phone_search_volume;

        return $this;
    }

    /**
     * Gets tablet_search_volume
     *
     * @return int|null
     */
    public function getTabletSearchVolume()
    {
        return $this->container['tablet_search_volume'];
    }

    /**
     * Sets tablet_search_volume
     *
     * @param int|null $tablet_search_volume <div lang=\"ja\"> 推奨するサーチキーワードのTabletでのリーチ数です。 </div> <div lang=\"en\"> Number of Reach in Tablet with recommended search keyword. </div>
     *
     * @return self
     */
    public function setTabletSearchVolume($tablet_search_volume)
    {
        $this->container['tablet_search_volume'] = $tablet_search_volume;

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


