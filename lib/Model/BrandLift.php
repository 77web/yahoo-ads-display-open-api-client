<?php
/**
 * BrandLift
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
 * BrandLift Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;BrandLiftオブジェクトは、ブランドリフトの情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;BrandLift object describes brand lift information.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BrandLift implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandLift';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'campaign_id' => 'int',
        'brand_lift_id' => 'int',
        'questions' => '\OpenAPI\Client\Model\BrandLiftServiceQuestion[]',
        'approval_status' => '\OpenAPI\Client\Model\BrandLiftServiceApprovalStatus',
        'disapproval_reason' => 'string',
        'review_complete_date' => 'string',
        'disapproval_reason_codes' => 'string[]',
        'submit_date' => 'string',
        'campaign_start_date' => 'string',
        'campaign_name' => 'string',
        'notification_business_ids' => 'string[]'
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
        'campaign_id' => 'int64',
        'brand_lift_id' => 'int64',
        'questions' => null,
        'approval_status' => null,
        'disapproval_reason' => null,
        'review_complete_date' => null,
        'disapproval_reason_codes' => null,
        'submit_date' => null,
        'campaign_start_date' => null,
        'campaign_name' => null,
        'notification_business_ids' => null
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
        'campaign_id' => 'campaignId',
        'brand_lift_id' => 'brandLiftId',
        'questions' => 'questions',
        'approval_status' => 'approvalStatus',
        'disapproval_reason' => 'disapprovalReason',
        'review_complete_date' => 'reviewCompleteDate',
        'disapproval_reason_codes' => 'disapprovalReasonCodes',
        'submit_date' => 'submitDate',
        'campaign_start_date' => 'campaignStartDate',
        'campaign_name' => 'campaignName',
        'notification_business_ids' => 'notificationBusinessIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'campaign_id' => 'setCampaignId',
        'brand_lift_id' => 'setBrandLiftId',
        'questions' => 'setQuestions',
        'approval_status' => 'setApprovalStatus',
        'disapproval_reason' => 'setDisapprovalReason',
        'review_complete_date' => 'setReviewCompleteDate',
        'disapproval_reason_codes' => 'setDisapprovalReasonCodes',
        'submit_date' => 'setSubmitDate',
        'campaign_start_date' => 'setCampaignStartDate',
        'campaign_name' => 'setCampaignName',
        'notification_business_ids' => 'setNotificationBusinessIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'campaign_id' => 'getCampaignId',
        'brand_lift_id' => 'getBrandLiftId',
        'questions' => 'getQuestions',
        'approval_status' => 'getApprovalStatus',
        'disapproval_reason' => 'getDisapprovalReason',
        'review_complete_date' => 'getReviewCompleteDate',
        'disapproval_reason_codes' => 'getDisapprovalReasonCodes',
        'submit_date' => 'getSubmitDate',
        'campaign_start_date' => 'getCampaignStartDate',
        'campaign_name' => 'getCampaignName',
        'notification_business_ids' => 'getNotificationBusinessIds'
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
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['brand_lift_id'] = $data['brand_lift_id'] ?? null;
        $this->container['questions'] = $data['questions'] ?? null;
        $this->container['approval_status'] = $data['approval_status'] ?? null;
        $this->container['disapproval_reason'] = $data['disapproval_reason'] ?? null;
        $this->container['review_complete_date'] = $data['review_complete_date'] ?? null;
        $this->container['disapproval_reason_codes'] = $data['disapproval_reason_codes'] ?? null;
        $this->container['submit_date'] = $data['submit_date'] ?? null;
        $this->container['campaign_start_date'] = $data['campaign_start_date'] ?? null;
        $this->container['campaign_name'] = $data['campaign_name'] ?? null;
        $this->container['notification_business_ids'] = $data['notification_business_ids'] ?? null;
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
     * @param int|null $account_id <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID. </div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param int|null $campaign_id <div lang=\"ja\">キャンペーンIDです。</div> <div lang=\"en\">Campaign ID. </div>
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets brand_lift_id
     *
     * @return int|null
     */
    public function getBrandLiftId()
    {
        return $this->container['brand_lift_id'];
    }

    /**
     * Sets brand_lift_id
     *
     * @param int|null $brand_lift_id <div lang=\"ja\">ブランドリフト調査IDです。</div> <div lang=\"en\">BrandLift ID. </div>
     *
     * @return self
     */
    public function setBrandLiftId($brand_lift_id)
    {
        $this->container['brand_lift_id'] = $brand_lift_id;

        return $this;
    }

    /**
     * Gets questions
     *
     * @return \OpenAPI\Client\Model\BrandLiftServiceQuestion[]|null
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     *
     * @param \OpenAPI\Client\Model\BrandLiftServiceQuestion[]|null $questions questions
     *
     * @return self
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

        return $this;
    }

    /**
     * Gets approval_status
     *
     * @return \OpenAPI\Client\Model\BrandLiftServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param \OpenAPI\Client\Model\BrandLiftServiceApprovalStatus|null $approval_status approval_status
     *
     * @return self
     */
    public function setApprovalStatus($approval_status)
    {
        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets disapproval_reason
     *
     * @return string|null
     */
    public function getDisapprovalReason()
    {
        return $this->container['disapproval_reason'];
    }

    /**
     * Sets disapproval_reason
     *
     * @param string|null $disapproval_reason <div lang=\"ja\">審査否認理由です。</div> <div lang=\"en\">Disapproval Reason. </div>
     *
     * @return self
     */
    public function setDisapprovalReason($disapproval_reason)
    {
        $this->container['disapproval_reason'] = $disapproval_reason;

        return $this;
    }

    /**
     * Gets review_complete_date
     *
     * @return string|null
     */
    public function getReviewCompleteDate()
    {
        return $this->container['review_complete_date'];
    }

    /**
     * Sets review_complete_date
     *
     * @param string|null $review_complete_date <div lang=\"ja\">審査完了日時です。</div> <div lang=\"en\">Review Complete Date.</div> <br>Format: yyyyMMddHHmmss
     *
     * @return self
     */
    public function setReviewCompleteDate($review_complete_date)
    {
        $this->container['review_complete_date'] = $review_complete_date;

        return $this;
    }

    /**
     * Gets disapproval_reason_codes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapproval_reason_codes'];
    }

    /**
     * Sets disapproval_reason_codes
     *
     * @param string[]|null $disapproval_reason_codes <div lang=\"ja\">審査否認理由コードです。</div> <div lang=\"en\">Disapproval Reason Codes</div>
     *
     * @return self
     */
    public function setDisapprovalReasonCodes($disapproval_reason_codes)
    {
        $this->container['disapproval_reason_codes'] = $disapproval_reason_codes;

        return $this;
    }

    /**
     * Gets submit_date
     *
     * @return string|null
     */
    public function getSubmitDate()
    {
        return $this->container['submit_date'];
    }

    /**
     * Sets submit_date
     *
     * @param string|null $submit_date <div lang=\"ja\">入稿日時です。</div> <div lang=\"en\">Submit Date.</div> <br>Format: yyyyMMddHHmmss
     *
     * @return self
     */
    public function setSubmitDate($submit_date)
    {
        $this->container['submit_date'] = $submit_date;

        return $this;
    }

    /**
     * Gets campaign_start_date
     *
     * @return string|null
     */
    public function getCampaignStartDate()
    {
        return $this->container['campaign_start_date'];
    }

    /**
     * Sets campaign_start_date
     *
     * @param string|null $campaign_start_date <div lang=\"ja\">キャンペーン配信開始日時です。</div> <div lang=\"en\">Campaign Start Date. </div> <br>Format: yyyyMMdd
     *
     * @return self
     */
    public function setCampaignStartDate($campaign_start_date)
    {
        $this->container['campaign_start_date'] = $campaign_start_date;

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
     * @param string|null $campaign_name <div lang=\"ja\">キャンペーン名です。</div> <div lang=\"en\">Campaign Name. </div>
     *
     * @return self
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets notification_business_ids
     *
     * @return string[]|null
     */
    public function getNotificationBusinessIds()
    {
        return $this->container['notification_business_ids'];
    }

    /**
     * Sets notification_business_ids
     *
     * @param string[]|null $notification_business_ids <div lang=\"ja\">連絡先Yahoo! JAPANビジネスIDです。</div> <div lang=\"en\">Yahoo! JAPAN Business ID to send notifications.</div>
     *
     * @return self
     */
    public function setNotificationBusinessIds($notification_business_ids)
    {
        $this->container['notification_business_ids'] = $notification_business_ids;

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


