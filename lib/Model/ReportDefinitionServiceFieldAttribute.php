<?php
/**
 * ReportDefinitionServiceFieldAttribute
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
 * ReportDefinitionServiceFieldAttribute Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportDefinitionServiceFieldAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDefinitionServiceFieldAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_field_name_en' => 'string',
        'display_field_name_ja' => 'string',
        'field_name' => 'string',
        'field_type' => 'string',
        'filterable' => 'bool',
        'impossible_combination_fields' => 'string[]',
        'xml_attribute_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_field_name_en' => null,
        'display_field_name_ja' => null,
        'field_name' => null,
        'field_type' => null,
        'filterable' => null,
        'impossible_combination_fields' => null,
        'xml_attribute_name' => null
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
        'display_field_name_en' => 'displayFieldNameEN',
        'display_field_name_ja' => 'displayFieldNameJA',
        'field_name' => 'fieldName',
        'field_type' => 'fieldType',
        'filterable' => 'filterable',
        'impossible_combination_fields' => 'impossibleCombinationFields',
        'xml_attribute_name' => 'xmlAttributeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_field_name_en' => 'setDisplayFieldNameEn',
        'display_field_name_ja' => 'setDisplayFieldNameJa',
        'field_name' => 'setFieldName',
        'field_type' => 'setFieldType',
        'filterable' => 'setFilterable',
        'impossible_combination_fields' => 'setImpossibleCombinationFields',
        'xml_attribute_name' => 'setXmlAttributeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_field_name_en' => 'getDisplayFieldNameEn',
        'display_field_name_ja' => 'getDisplayFieldNameJa',
        'field_name' => 'getFieldName',
        'field_type' => 'getFieldType',
        'filterable' => 'getFilterable',
        'impossible_combination_fields' => 'getImpossibleCombinationFields',
        'xml_attribute_name' => 'getXmlAttributeName'
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
        $this->container['display_field_name_en'] = $data['display_field_name_en'] ?? null;
        $this->container['display_field_name_ja'] = $data['display_field_name_ja'] ?? null;
        $this->container['field_name'] = $data['field_name'] ?? null;
        $this->container['field_type'] = $data['field_type'] ?? null;
        $this->container['filterable'] = $data['filterable'] ?? null;
        $this->container['impossible_combination_fields'] = $data['impossible_combination_fields'] ?? null;
        $this->container['xml_attribute_name'] = $data['xml_attribute_name'] ?? null;
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
     * Gets display_field_name_en
     *
     * @return string|null
     */
    public function getDisplayFieldNameEn()
    {
        return $this->container['display_field_name_en'];
    }

    /**
     * Sets display_field_name_en
     *
     * @param string|null $display_field_name_en <div lang=\"ja\">ダウンロードされたレポートに表示されるフィールド名（英語）です。</div> <div lang=\"en\">Field Name for the Downloaded Report (EN).</div>
     *
     * @return self
     */
    public function setDisplayFieldNameEn($display_field_name_en)
    {
        $this->container['display_field_name_en'] = $display_field_name_en;

        return $this;
    }

    /**
     * Gets display_field_name_ja
     *
     * @return string|null
     */
    public function getDisplayFieldNameJa()
    {
        return $this->container['display_field_name_ja'];
    }

    /**
     * Sets display_field_name_ja
     *
     * @param string|null $display_field_name_ja <div lang=\"ja\">ダウンロードされたレポートに表示されるフィールド名（日本語）です。</div> <div lang=\"en\">Field Name for the Downloaded Report (JA).</div>
     *
     * @return self
     */
    public function setDisplayFieldNameJa($display_field_name_ja)
    {
        $this->container['display_field_name_ja'] = $display_field_name_ja;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string|null $field_name <div lang=\"ja\">フィールド名です。</div> <div lang=\"en\">Field Name.</div>
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string|null $field_type <div lang=\"ja\">フィールドタイプ（数字、文字列、ENUM値など）です。</div> <div lang=\"en\">Field type (number, string, ENUM, etc.)</div>
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets filterable
     *
     * @return bool|null
     */
    public function getFilterable()
    {
        return $this->container['filterable'];
    }

    /**
     * Sets filterable
     *
     * @param bool|null $filterable <div lang=\"ja\">フィールドのフィルター指定可否（true：フィルター指定可能なフィールド）です。</div> <div lang=\"en\">Whether the field filter can be specified or not (true: Filter can be specified).</div>
     *
     * @return self
     */
    public function setFilterable($filterable)
    {
        $this->container['filterable'] = $filterable;

        return $this;
    }

    /**
     * Gets impossible_combination_fields
     *
     * @return string[]|null
     */
    public function getImpossibleCombinationFields()
    {
        return $this->container['impossible_combination_fields'];
    }

    /**
     * Sets impossible_combination_fields
     *
     * @param string[]|null $impossible_combination_fields <div lang=\"ja\">組み合わせ不可フィールドです。</div> <div lang=\"en\">Invalid field combinations.</div>
     *
     * @return self
     */
    public function setImpossibleCombinationFields($impossible_combination_fields)
    {
        $this->container['impossible_combination_fields'] = $impossible_combination_fields;

        return $this;
    }

    /**
     * Gets xml_attribute_name
     *
     * @return string|null
     */
    public function getXmlAttributeName()
    {
        return $this->container['xml_attribute_name'];
    }

    /**
     * Sets xml_attribute_name
     *
     * @param string|null $xml_attribute_name <div lang=\"ja\">ダウンロードしたレポートのXML属性です。</div> <div lang=\"en\">XML attribute for the Downloaded Report.</div>
     *
     * @return self
     */
    public function setXmlAttributeName($xml_attribute_name)
    {
        $this->container['xml_attribute_name'] = $xml_attribute_name;

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

