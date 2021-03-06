<?php
/**
 * SearchKeywordList
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
 * SearchKeywordList Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;SearchKeywordListオブジェクトは、サーチキーワードリストを表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;SearchKeywordList object displays the search list.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SearchKeywordList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchKeywordList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'delivery_status' => '\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceDeliveryStatus',
        'keyword_frequency' => '\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordFrequency',
        'keyword_recency' => '\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordRecency',
        'search_keyword' => '\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSearchKeyword[]',
        'search_keyword_list_description' => 'string',
        'is_remove_search_keyword_list_description' => '\YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceIsRemoveFlg',
        'search_keyword_list_id' => 'int',
        'search_keyword_list_name' => 'string'
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
        'delivery_status' => null,
        'keyword_frequency' => null,
        'keyword_recency' => null,
        'search_keyword' => null,
        'search_keyword_list_description' => null,
        'is_remove_search_keyword_list_description' => null,
        'search_keyword_list_id' => 'int64',
        'search_keyword_list_name' => null
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
        'delivery_status' => 'deliveryStatus',
        'keyword_frequency' => 'keywordFrequency',
        'keyword_recency' => 'keywordRecency',
        'search_keyword' => 'searchKeyword',
        'search_keyword_list_description' => 'searchKeywordListDescription',
        'is_remove_search_keyword_list_description' => 'isRemoveSearchKeywordListDescription',
        'search_keyword_list_id' => 'searchKeywordListId',
        'search_keyword_list_name' => 'searchKeywordListName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'delivery_status' => 'setDeliveryStatus',
        'keyword_frequency' => 'setKeywordFrequency',
        'keyword_recency' => 'setKeywordRecency',
        'search_keyword' => 'setSearchKeyword',
        'search_keyword_list_description' => 'setSearchKeywordListDescription',
        'is_remove_search_keyword_list_description' => 'setIsRemoveSearchKeywordListDescription',
        'search_keyword_list_id' => 'setSearchKeywordListId',
        'search_keyword_list_name' => 'setSearchKeywordListName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'delivery_status' => 'getDeliveryStatus',
        'keyword_frequency' => 'getKeywordFrequency',
        'keyword_recency' => 'getKeywordRecency',
        'search_keyword' => 'getSearchKeyword',
        'search_keyword_list_description' => 'getSearchKeywordListDescription',
        'is_remove_search_keyword_list_description' => 'getIsRemoveSearchKeywordListDescription',
        'search_keyword_list_id' => 'getSearchKeywordListId',
        'search_keyword_list_name' => 'getSearchKeywordListName'
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
        $this->container['delivery_status'] = $data['delivery_status'] ?? null;
        $this->container['keyword_frequency'] = $data['keyword_frequency'] ?? null;
        $this->container['keyword_recency'] = $data['keyword_recency'] ?? null;
        $this->container['search_keyword'] = $data['search_keyword'] ?? null;
        $this->container['search_keyword_list_description'] = $data['search_keyword_list_description'] ?? null;
        $this->container['is_remove_search_keyword_list_description'] = $data['is_remove_search_keyword_list_description'] ?? null;
        $this->container['search_keyword_list_id'] = $data['search_keyword_list_id'] ?? null;
        $this->container['search_keyword_list_name'] = $data['search_keyword_list_name'] ?? null;
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
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id <div lang=\"ja\"> アカウントIDです。<br> このフィールドは、リクエストの場合は必須です。 </div> <div lang=\"en\"> Account ID.<br> This field is required in requests. </div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceDeliveryStatus|null
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceDeliveryStatus|null $delivery_status delivery_status
     *
     * @return self
     */
    public function setDeliveryStatus($delivery_status)
    {
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }

    /**
     * Gets keyword_frequency
     *
     * @return \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordFrequency|null
     */
    public function getKeywordFrequency()
    {
        return $this->container['keyword_frequency'];
    }

    /**
     * Sets keyword_frequency
     *
     * @param \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordFrequency|null $keyword_frequency keyword_frequency
     *
     * @return self
     */
    public function setKeywordFrequency($keyword_frequency)
    {
        $this->container['keyword_frequency'] = $keyword_frequency;

        return $this;
    }

    /**
     * Gets keyword_recency
     *
     * @return \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordRecency|null
     */
    public function getKeywordRecency()
    {
        return $this->container['keyword_recency'];
    }

    /**
     * Sets keyword_recency
     *
     * @param \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceKeywordRecency|null $keyword_recency keyword_recency
     *
     * @return self
     */
    public function setKeywordRecency($keyword_recency)
    {
        $this->container['keyword_recency'] = $keyword_recency;

        return $this;
    }

    /**
     * Gets search_keyword
     *
     * @return \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSearchKeyword[]|null
     */
    public function getSearchKeyword()
    {
        return $this->container['search_keyword'];
    }

    /**
     * Sets search_keyword
     *
     * @param \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceSearchKeyword[]|null $search_keyword search_keyword
     *
     * @return self
     */
    public function setSearchKeyword($search_keyword)
    {
        $this->container['search_keyword'] = $search_keyword;

        return $this;
    }

    /**
     * Gets search_keyword_list_description
     *
     * @return string|null
     */
    public function getSearchKeywordListDescription()
    {
        return $this->container['search_keyword_list_description'];
    }

    /**
     * Sets search_keyword_list_description
     *
     * @param string|null $search_keyword_list_description <div lang=\"ja\"> サーチキーワードリストの説明文です。<br> このフィールドは、ADDおよびSET時に省略可能となります。 </div> <div lang=\"en\"> Description of Search keyword list.<br> This field is optional in ADD and SET operation. </div>
     *
     * @return self
     */
    public function setSearchKeywordListDescription($search_keyword_list_description)
    {
        $this->container['search_keyword_list_description'] = $search_keyword_list_description;

        return $this;
    }

    /**
     * Gets is_remove_search_keyword_list_description
     *
     * @return \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceIsRemoveFlg|null
     */
    public function getIsRemoveSearchKeywordListDescription()
    {
        return $this->container['is_remove_search_keyword_list_description'];
    }

    /**
     * Sets is_remove_search_keyword_list_description
     *
     * @param \YahooAdsDisplayApi\Client\Model\SearchKeywordListServiceIsRemoveFlg|null $is_remove_search_keyword_list_description is_remove_search_keyword_list_description
     *
     * @return self
     */
    public function setIsRemoveSearchKeywordListDescription($is_remove_search_keyword_list_description)
    {
        $this->container['is_remove_search_keyword_list_description'] = $is_remove_search_keyword_list_description;

        return $this;
    }

    /**
     * Gets search_keyword_list_id
     *
     * @return int|null
     */
    public function getSearchKeywordListId()
    {
        return $this->container['search_keyword_list_id'];
    }

    /**
     * Sets search_keyword_list_id
     *
     * @param int|null $search_keyword_list_id <div lang=\"ja\"> サーチキーワードリストIDです。<br> このフィールドは、SETおよびREMOVE時に必須となります。 </div> <div lang=\"en\"> Search keyword list ID.<br> This field is required in SET and REMOVE operation. </div>
     *
     * @return self
     */
    public function setSearchKeywordListId($search_keyword_list_id)
    {
        $this->container['search_keyword_list_id'] = $search_keyword_list_id;

        return $this;
    }

    /**
     * Gets search_keyword_list_name
     *
     * @return string|null
     */
    public function getSearchKeywordListName()
    {
        return $this->container['search_keyword_list_name'];
    }

    /**
     * Sets search_keyword_list_name
     *
     * @param string|null $search_keyword_list_name <div lang=\"ja\"> サーチキーワードリスト名です。<br> このフィールドは、ADD時に必須となり、SET時に省略可能となります。 </div> <div lang=\"en\"> Name of Search keyword list.<br> This field is required in ADD operation, and is optional in SET operation. </div>
     *
     * @return self
     */
    public function setSearchKeywordListName($search_keyword_list_name)
    {
        $this->container['search_keyword_list_name'] = $search_keyword_list_name;

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


