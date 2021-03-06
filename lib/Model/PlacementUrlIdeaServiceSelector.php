<?php
/**
 * PlacementUrlIdeaServiceSelector
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
 * PlacementUrlIdeaServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PlacementUrlIdeaServiceSelectorオブジェクトは、getメソッドの検索条件（実行パラメータ）を保持するオブジェクトです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;The objects to keep get method search conditions (execution parameter).&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PlacementUrlIdeaServiceSelector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlacementUrlIdeaServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'keyword' => 'string',
        'site_categories' => 'string[]',
        'ad_formats' => '\YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceAdFormatConditions[]',
        'start_index' => 'int',
        'number_results' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'keyword' => null,
        'site_categories' => null,
        'ad_formats' => null,
        'start_index' => 'int32',
        'number_results' => 'int32'
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
        'keyword' => 'keyword',
        'site_categories' => 'siteCategories',
        'ad_formats' => 'adFormats',
        'start_index' => 'startIndex',
        'number_results' => 'numberResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keyword' => 'setKeyword',
        'site_categories' => 'setSiteCategories',
        'ad_formats' => 'setAdFormats',
        'start_index' => 'setStartIndex',
        'number_results' => 'setNumberResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keyword' => 'getKeyword',
        'site_categories' => 'getSiteCategories',
        'ad_formats' => 'getAdFormats',
        'start_index' => 'getStartIndex',
        'number_results' => 'getNumberResults'
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
        $this->container['keyword'] = $data['keyword'] ?? null;
        $this->container['site_categories'] = $data['site_categories'] ?? null;
        $this->container['ad_formats'] = $data['ad_formats'] ?? null;
        $this->container['start_index'] = $data['start_index'] ?? 1;
        $this->container['number_results'] = $data['number_results'] ?? 500;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['site_categories']) && (count($this->container['site_categories']) > 50)) {
            $invalidProperties[] = "invalid value for 'site_categories', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['ad_formats']) && (count($this->container['ad_formats']) > 15)) {
            $invalidProperties[] = "invalid value for 'ad_formats', number of items must be less than or equal to 15.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 500)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
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
     * Gets keyword
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string|null $keyword <div lang=\"ja\"> 検索キーワードの配列です。<br> ・URLを検索するためのキーワードです。<br> ・部分一致です。<br> ・スペース区切りでAND検索です。<br> ・最大文字数250です。<br> ・スペース区切りでの単語数は最大10個です。 </div> <div lang=\"en\"> Array of Search keyword.<br> ・Keyword to search the URL<br> ・Broad match<br> ・Search all keywords (AND), separated by spaces<br> ・Maximum of 250 characters<br> ・Maximum of 10 spaces to separate the words </div>
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets site_categories
     *
     * @return string[]|null
     */
    public function getSiteCategories()
    {
        return $this->container['site_categories'];
    }

    /**
     * Sets site_categories
     *
     * @param string[]|null $site_categories <div lang=\"ja\"> カテゴリの配列です。<br> ・URLのカテゴリです。<br> ・完全一致です。<br> ・複数指定でOR検索です。<br> ・TC-SC-xxxxxxで現される規定値です。<br> ・DicitonaryServiceから返ってくるTC-SC-xxxxxxをそのまま指定です。<br> ・最大50件です。 </div> <div lang=\"en\"> Array of categories.<br> ・Category of URL<br> ・Exact match<br> ・Search multiple specific keywords (OR)<br> ・From value: TC-SC-xxxxxx<br> ・Choose the TC-SC-xxxxxx value from DictionaryService<br> ・Maximum of 50 cases </div>
     *
     * @return self
     */
    public function setSiteCategories($site_categories)
    {

        if (!is_null($site_categories) && (count($site_categories) > 50)) {
            throw new \InvalidArgumentException('invalid value for $site_categories when calling PlacementUrlIdeaServiceSelector., number of items must be less than or equal to 50.');
        }
        $this->container['site_categories'] = $site_categories;

        return $this;
    }

    /**
     * Gets ad_formats
     *
     * @return \YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceAdFormatConditions[]|null
     */
    public function getAdFormats()
    {
        return $this->container['ad_formats'];
    }

    /**
     * Sets ad_formats
     *
     * @param \YahooAdsDisplayApi\Client\Model\PlacementUrlIdeaServiceAdFormatConditions[]|null $ad_formats ad_formats
     *
     * @return self
     */
    public function setAdFormats($ad_formats)
    {

        if (!is_null($ad_formats) && (count($ad_formats) > 15)) {
            throw new \InvalidArgumentException('invalid value for $ad_formats when calling PlacementUrlIdeaServiceSelector., number of items must be less than or equal to 15.');
        }
        $this->container['ad_formats'] = $ad_formats;

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
            throw new \InvalidArgumentException('invalid value for $start_index when calling PlacementUrlIdeaServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

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

        if (!is_null($number_results) && ($number_results > 500)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling PlacementUrlIdeaServiceSelector., must be smaller than or equal to 500.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling PlacementUrlIdeaServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['number_results'] = $number_results;

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


