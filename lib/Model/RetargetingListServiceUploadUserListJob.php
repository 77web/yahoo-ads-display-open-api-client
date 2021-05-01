<?php
/**
 * RetargetingListServiceUploadUserListJob
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
 * RetargetingListServiceUploadUserListJob Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListServiceUploadUserListJobオブジェクトは、ユーザーリストのアップロードジョブの処理状況を示すオブジェクトです。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingListServiceUploadUserListJob object indicates the processing status of user list upload.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetargetingListServiceUploadUserListJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingListServiceUploadUserListJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upload_job_id' => 'string',
        'retargeting_tag_id' => 'string',
        'target_list_id' => 'int',
        'upload_type' => '\OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType',
        'upload_submit_date' => 'string',
        'received_date' => 'string',
        'job_status' => '\OpenAPI\Client\Model\RetargetingListServiceJobStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'upload_job_id' => null,
        'retargeting_tag_id' => null,
        'target_list_id' => 'int64',
        'upload_type' => null,
        'upload_submit_date' => null,
        'received_date' => null,
        'job_status' => null
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
        'upload_job_id' => 'uploadJobId',
        'retargeting_tag_id' => 'retargetingTagId',
        'target_list_id' => 'targetListId',
        'upload_type' => 'uploadType',
        'upload_submit_date' => 'uploadSubmitDate',
        'received_date' => 'receivedDate',
        'job_status' => 'jobStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upload_job_id' => 'setUploadJobId',
        'retargeting_tag_id' => 'setRetargetingTagId',
        'target_list_id' => 'setTargetListId',
        'upload_type' => 'setUploadType',
        'upload_submit_date' => 'setUploadSubmitDate',
        'received_date' => 'setReceivedDate',
        'job_status' => 'setJobStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload_job_id' => 'getUploadJobId',
        'retargeting_tag_id' => 'getRetargetingTagId',
        'target_list_id' => 'getTargetListId',
        'upload_type' => 'getUploadType',
        'upload_submit_date' => 'getUploadSubmitDate',
        'received_date' => 'getReceivedDate',
        'job_status' => 'getJobStatus'
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
        $this->container['upload_job_id'] = $data['upload_job_id'] ?? null;
        $this->container['retargeting_tag_id'] = $data['retargeting_tag_id'] ?? null;
        $this->container['target_list_id'] = $data['target_list_id'] ?? null;
        $this->container['upload_type'] = $data['upload_type'] ?? null;
        $this->container['upload_submit_date'] = $data['upload_submit_date'] ?? null;
        $this->container['received_date'] = $data['received_date'] ?? null;
        $this->container['job_status'] = $data['job_status'] ?? null;
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
     * Gets upload_job_id
     *
     * @return string|null
     */
    public function getUploadJobId()
    {
        return $this->container['upload_job_id'];
    }

    /**
     * Sets upload_job_id
     *
     * @param string|null $upload_job_id <div lang=\"ja\">アップロードジョブIDです。</div> <div lang=\"en\">Upload job ID.</div>
     *
     * @return self
     */
    public function setUploadJobId($upload_job_id)
    {
        $this->container['upload_job_id'] = $upload_job_id;

        return $this;
    }

    /**
     * Gets retargeting_tag_id
     *
     * @return string|null
     */
    public function getRetargetingTagId()
    {
        return $this->container['retargeting_tag_id'];
    }

    /**
     * Sets retargeting_tag_id
     *
     * @param string|null $retargeting_tag_id <div lang=\"ja\">サイトリターゲティングのタグIDです。</div> <div lang=\"en\">Tag ID for site retargeting.</div>
     *
     * @return self
     */
    public function setRetargetingTagId($retargeting_tag_id)
    {
        $this->container['retargeting_tag_id'] = $retargeting_tag_id;

        return $this;
    }

    /**
     * Gets target_list_id
     *
     * @return int|null
     */
    public function getTargetListId()
    {
        return $this->container['target_list_id'];
    }

    /**
     * Sets target_list_id
     *
     * @param int|null $target_list_id <div lang=\"ja\">カスタムオーディエンスのターゲットリストIDです。</div> <div lang=\"en\">Target list ID of custom audience.</div>
     *
     * @return self
     */
    public function setTargetListId($target_list_id)
    {
        $this->container['target_list_id'] = $target_list_id;

        return $this;
    }

    /**
     * Gets upload_type
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType|null
     */
    public function getUploadType()
    {
        return $this->container['upload_type'];
    }

    /**
     * Sets upload_type
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceUploadUserListUploadType|null $upload_type upload_type
     *
     * @return self
     */
    public function setUploadType($upload_type)
    {
        $this->container['upload_type'] = $upload_type;

        return $this;
    }

    /**
     * Gets upload_submit_date
     *
     * @return string|null
     */
    public function getUploadSubmitDate()
    {
        return $this->container['upload_submit_date'];
    }

    /**
     * Sets upload_submit_date
     *
     * @param string|null $upload_submit_date <div lang=\"ja\">アップロード日時</div> <div lang=\"en\">Upload date and time.</div> <br>Format: yyyyMMddHHmmss
     *
     * @return self
     */
    public function setUploadSubmitDate($upload_submit_date)
    {
        $this->container['upload_submit_date'] = $upload_submit_date;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return string|null
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param string|null $received_date <div lang=\"ja\">アップロード受付完了日時</div> <div lang=\"en\">Upload job completion date and time.</div> <br>Format: yyyyMMddHHmmss
     *
     * @return self
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets job_status
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceJobStatus|null
     */
    public function getJobStatus()
    {
        return $this->container['job_status'];
    }

    /**
     * Sets job_status
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceJobStatus|null $job_status job_status
     *
     * @return self
     */
    public function setJobStatus($job_status)
    {
        $this->container['job_status'] = $job_status;

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


