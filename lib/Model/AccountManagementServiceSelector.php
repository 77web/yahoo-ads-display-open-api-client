<?php
/**
 * AccountManagementServiceSelector
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
 * AccountManagementServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AccountManagementServiceSelectorオブジェクトは、選択するアカウントを表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AccountManagementServiceSelector object explains which accounts to return.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AccountManagementServiceSelector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountManagementServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_ids' => 'int[]',
        'account_statuses' => '\OpenAPI\Client\Model\AccountManagementServiceStatus[]',
        'account_types' => '\OpenAPI\Client\Model\AccountManagementServicePaymentType[]',
        'auth_type' => '\OpenAPI\Client\Model\AccountManagementServiceAuthType',
        'include_test_account' => '\OpenAPI\Client\Model\AccountManagementServiceIncludeTestAccount',
        'number_results' => 'int',
        'start_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_ids' => 'int64',
        'account_statuses' => null,
        'account_types' => null,
        'auth_type' => null,
        'include_test_account' => null,
        'number_results' => 'int32',
        'start_index' => 'int32'
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
        'account_ids' => 'accountIds',
        'account_statuses' => 'accountStatuses',
        'account_types' => 'accountTypes',
        'auth_type' => 'authType',
        'include_test_account' => 'includeTestAccount',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_ids' => 'setAccountIds',
        'account_statuses' => 'setAccountStatuses',
        'account_types' => 'setAccountTypes',
        'auth_type' => 'setAuthType',
        'include_test_account' => 'setIncludeTestAccount',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_ids' => 'getAccountIds',
        'account_statuses' => 'getAccountStatuses',
        'account_types' => 'getAccountTypes',
        'auth_type' => 'getAuthType',
        'include_test_account' => 'getIncludeTestAccount',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex'
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
        $this->container['account_ids'] = $data['account_ids'] ?? null;
        $this->container['account_statuses'] = $data['account_statuses'] ?? null;
        $this->container['account_types'] = $data['account_types'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? null;
        $this->container['include_test_account'] = $data['include_test_account'] ?? null;
        $this->container['number_results'] = $data['number_results'] ?? 200;
        $this->container['start_index'] = $data['start_index'] ?? 1;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['account_ids']) && (count($this->container['account_ids']) > 200)) {
            $invalidProperties[] = "invalid value for 'account_ids', number of items must be less than or equal to 200.";
        }

        if (!is_null($this->container['account_statuses']) && (count($this->container['account_statuses']) > 6)) {
            $invalidProperties[] = "invalid value for 'account_statuses', number of items must be less than or equal to 6.";
        }

        if (!is_null($this->container['account_types']) && (count($this->container['account_types']) > 2)) {
            $invalidProperties[] = "invalid value for 'account_types', number of items must be less than or equal to 2.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 200)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
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
     * Gets account_ids
     *
     * @return int[]|null
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param int[]|null $account_ids <div lang=\"ja\">検索条件：アカウントID</div> <div lang=\"en\">Account IDs.</div>
     *
     * @return self
     */
    public function setAccountIds($account_ids)
    {

        if (!is_null($account_ids) && (count($account_ids) > 200)) {
            throw new \InvalidArgumentException('invalid value for $account_ids when calling AccountManagementServiceSelector., number of items must be less than or equal to 200.');
        }
        $this->container['account_ids'] = $account_ids;

        return $this;
    }

    /**
     * Gets account_statuses
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceStatus[]|null
     */
    public function getAccountStatuses()
    {
        return $this->container['account_statuses'];
    }

    /**
     * Sets account_statuses
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceStatus[]|null $account_statuses <div lang=\"ja\">検索条件：アカウントステータス</div> <div lang=\"en\">Account Statuses.</div>
     *
     * @return self
     */
    public function setAccountStatuses($account_statuses)
    {

        if (!is_null($account_statuses) && (count($account_statuses) > 6)) {
            throw new \InvalidArgumentException('invalid value for $account_statuses when calling AccountManagementServiceSelector., number of items must be less than or equal to 6.');
        }
        $this->container['account_statuses'] = $account_statuses;

        return $this;
    }

    /**
     * Gets account_types
     *
     * @return \OpenAPI\Client\Model\AccountManagementServicePaymentType[]|null
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param \OpenAPI\Client\Model\AccountManagementServicePaymentType[]|null $account_types <div lang=\"ja\">検索条件：アカウントの料金支払い種別</div> <div lang=\"en\">Account Payment Types.</div>
     *
     * @return self
     */
    public function setAccountTypes($account_types)
    {

        if (!is_null($account_types) && (count($account_types) > 2)) {
            throw new \InvalidArgumentException('invalid value for $account_types when calling AccountManagementServiceSelector., number of items must be less than or equal to 2.');
        }
        $this->container['account_types'] = $account_types;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceAuthType|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceAuthType|null $auth_type auth_type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets include_test_account
     *
     * @return \OpenAPI\Client\Model\AccountManagementServiceIncludeTestAccount|null
     */
    public function getIncludeTestAccount()
    {
        return $this->container['include_test_account'];
    }

    /**
     * Sets include_test_account
     *
     * @param \OpenAPI\Client\Model\AccountManagementServiceIncludeTestAccount|null $include_test_account include_test_account
     *
     * @return self
     */
    public function setIncludeTestAccount($include_test_account)
    {
        $this->container['include_test_account'] = $include_test_account;

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
     * @param int|null $number_results <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return self
     */
    public function setNumberResults($number_results)
    {

        if (!is_null($number_results) && ($number_results > 200)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AccountManagementServiceSelector., must be smaller than or equal to 200.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AccountManagementServiceSelector., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $start_index when calling AccountManagementServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

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


