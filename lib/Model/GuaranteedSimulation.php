<?php
/**
 * GuaranteedSimulation
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
 * GuaranteedSimulation Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;GuaranteedSimulationオブジェクトは、予約型キャンペーンの配信シミュレーション情報を保持します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;GuaranteedSimulation object holds information about the delivery simulation of the guaranteed campaign.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GuaranteedSimulation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuaranteedSimulation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'guaranteed_simulation_id' => 'int',
        'lifetime_budget' => 'int',
        'reach' => 'int',
        'v_imps' => 'int',
        'sov_rate' => 'int',
        'slots' => 'int',
        'campaign_goal' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'viewable_frequency_cap' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceViewableFrequencyCap',
        'max_v_imps' => 'int',
        'max_reach' => 'int',
        'lower_budget_limit' => 'int',
        'upper_budget_limit' => 'int',
        'reservation_status' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceReservationStatus',
        'unreservable_reason' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceUnreservableReason',
        'ad_requirements' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdRequirement[]',
        'targets' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdGroupTarget[]',
        'ad_place_type' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdPlaceType',
        'prediction' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePrediction',
        'ad_category_ids' => 'int[]',
        'package_id' => 'int',
        'package_history_id' => 'int',
        'action_after_video_ad_tap' => '\YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap'
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
        'guaranteed_simulation_id' => 'int64',
        'lifetime_budget' => 'int64',
        'reach' => 'int64',
        'v_imps' => 'int64',
        'sov_rate' => 'int64',
        'slots' => 'int64',
        'campaign_goal' => null,
        'start_date' => null,
        'end_date' => null,
        'viewable_frequency_cap' => null,
        'max_v_imps' => 'int64',
        'max_reach' => 'int64',
        'lower_budget_limit' => 'int64',
        'upper_budget_limit' => 'int64',
        'reservation_status' => null,
        'unreservable_reason' => null,
        'ad_requirements' => null,
        'targets' => null,
        'ad_place_type' => null,
        'prediction' => null,
        'ad_category_ids' => 'int64',
        'package_id' => 'int64',
        'package_history_id' => 'int64',
        'action_after_video_ad_tap' => null
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
        'guaranteed_simulation_id' => 'guaranteedSimulationId',
        'lifetime_budget' => 'lifetimeBudget',
        'reach' => 'reach',
        'v_imps' => 'vImps',
        'sov_rate' => 'sovRate',
        'slots' => 'slots',
        'campaign_goal' => 'campaignGoal',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'viewable_frequency_cap' => 'viewableFrequencyCap',
        'max_v_imps' => 'maxVImps',
        'max_reach' => 'maxReach',
        'lower_budget_limit' => 'lowerBudgetLimit',
        'upper_budget_limit' => 'upperBudgetLimit',
        'reservation_status' => 'reservationStatus',
        'unreservable_reason' => 'unreservableReason',
        'ad_requirements' => 'adRequirements',
        'targets' => 'targets',
        'ad_place_type' => 'adPlaceType',
        'prediction' => 'prediction',
        'ad_category_ids' => 'adCategoryIds',
        'package_id' => 'packageId',
        'package_history_id' => 'packageHistoryId',
        'action_after_video_ad_tap' => 'actionAfterVideoAdTap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'guaranteed_simulation_id' => 'setGuaranteedSimulationId',
        'lifetime_budget' => 'setLifetimeBudget',
        'reach' => 'setReach',
        'v_imps' => 'setVImps',
        'sov_rate' => 'setSovRate',
        'slots' => 'setSlots',
        'campaign_goal' => 'setCampaignGoal',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'viewable_frequency_cap' => 'setViewableFrequencyCap',
        'max_v_imps' => 'setMaxVImps',
        'max_reach' => 'setMaxReach',
        'lower_budget_limit' => 'setLowerBudgetLimit',
        'upper_budget_limit' => 'setUpperBudgetLimit',
        'reservation_status' => 'setReservationStatus',
        'unreservable_reason' => 'setUnreservableReason',
        'ad_requirements' => 'setAdRequirements',
        'targets' => 'setTargets',
        'ad_place_type' => 'setAdPlaceType',
        'prediction' => 'setPrediction',
        'ad_category_ids' => 'setAdCategoryIds',
        'package_id' => 'setPackageId',
        'package_history_id' => 'setPackageHistoryId',
        'action_after_video_ad_tap' => 'setActionAfterVideoAdTap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'guaranteed_simulation_id' => 'getGuaranteedSimulationId',
        'lifetime_budget' => 'getLifetimeBudget',
        'reach' => 'getReach',
        'v_imps' => 'getVImps',
        'sov_rate' => 'getSovRate',
        'slots' => 'getSlots',
        'campaign_goal' => 'getCampaignGoal',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'viewable_frequency_cap' => 'getViewableFrequencyCap',
        'max_v_imps' => 'getMaxVImps',
        'max_reach' => 'getMaxReach',
        'lower_budget_limit' => 'getLowerBudgetLimit',
        'upper_budget_limit' => 'getUpperBudgetLimit',
        'reservation_status' => 'getReservationStatus',
        'unreservable_reason' => 'getUnreservableReason',
        'ad_requirements' => 'getAdRequirements',
        'targets' => 'getTargets',
        'ad_place_type' => 'getAdPlaceType',
        'prediction' => 'getPrediction',
        'ad_category_ids' => 'getAdCategoryIds',
        'package_id' => 'getPackageId',
        'package_history_id' => 'getPackageHistoryId',
        'action_after_video_ad_tap' => 'getActionAfterVideoAdTap'
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
        $this->container['guaranteed_simulation_id'] = $data['guaranteed_simulation_id'] ?? null;
        $this->container['lifetime_budget'] = $data['lifetime_budget'] ?? null;
        $this->container['reach'] = $data['reach'] ?? null;
        $this->container['v_imps'] = $data['v_imps'] ?? null;
        $this->container['sov_rate'] = $data['sov_rate'] ?? null;
        $this->container['slots'] = $data['slots'] ?? null;
        $this->container['campaign_goal'] = $data['campaign_goal'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['viewable_frequency_cap'] = $data['viewable_frequency_cap'] ?? null;
        $this->container['max_v_imps'] = $data['max_v_imps'] ?? null;
        $this->container['max_reach'] = $data['max_reach'] ?? null;
        $this->container['lower_budget_limit'] = $data['lower_budget_limit'] ?? null;
        $this->container['upper_budget_limit'] = $data['upper_budget_limit'] ?? null;
        $this->container['reservation_status'] = $data['reservation_status'] ?? null;
        $this->container['unreservable_reason'] = $data['unreservable_reason'] ?? null;
        $this->container['ad_requirements'] = $data['ad_requirements'] ?? null;
        $this->container['targets'] = $data['targets'] ?? null;
        $this->container['ad_place_type'] = $data['ad_place_type'] ?? null;
        $this->container['prediction'] = $data['prediction'] ?? null;
        $this->container['ad_category_ids'] = $data['ad_category_ids'] ?? null;
        $this->container['package_id'] = $data['package_id'] ?? null;
        $this->container['package_history_id'] = $data['package_history_id'] ?? null;
        $this->container['action_after_video_ad_tap'] = $data['action_after_video_ad_tap'] ?? null;
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
     * Gets guaranteed_simulation_id
     *
     * @return int|null
     */
    public function getGuaranteedSimulationId()
    {
        return $this->container['guaranteed_simulation_id'];
    }

    /**
     * Sets guaranteed_simulation_id
     *
     * @param int|null $guaranteed_simulation_id <div lang=\"ja\"> シミュレーションIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Simulation ID.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setGuaranteedSimulationId($guaranteed_simulation_id)
    {
        $this->container['guaranteed_simulation_id'] = $guaranteed_simulation_id;

        return $this;
    }

    /**
     * Gets lifetime_budget
     *
     * @return int|null
     */
    public function getLifetimeBudget()
    {
        return $this->container['lifetime_budget'];
    }

    /**
     * Sets lifetime_budget
     *
     * @param int|null $lifetime_budget <div lang=\"ja\"> キャンペーンの通期予算額です。<br> ※この「通期予算」は、キャンペーンの全期間を通じて消費される予算を意味します。<br> ADD時、このフィールドは省略可能となります。<br> ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 </div> <div lang=\"en\"> An amount of campaign's lifetime budget.<br> * \"lifetime budget\" means the total budget that is spent throughout the entire duration of the campaign.<br> This field is optional in ADD operation.<br> *lifetimeBudget, reach, vImps and slots cannot be set at the same time. </div>
     *
     * @return self
     */
    public function setLifetimeBudget($lifetime_budget)
    {
        $this->container['lifetime_budget'] = $lifetime_budget;

        return $this;
    }

    /**
     * Gets reach
     *
     * @return int|null
     */
    public function getReach()
    {
        return $this->container['reach'];
    }

    /**
     * Sets reach
     *
     * @param int|null $reach <div lang=\"ja\"> リーチ数です。<br> ADD時、このフィールドは省略可能となります。<br> ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 </div> <div lang=\"en\"> Number of reaches.<br> This field is optional in ADD operation.<br> *lifetimeBudget, reach, vImps and slots cannot be set at the same time. </div>
     *
     * @return self
     */
    public function setReach($reach)
    {
        $this->container['reach'] = $reach;

        return $this;
    }

    /**
     * Gets v_imps
     *
     * @return int|null
     */
    public function getVImps()
    {
        return $this->container['v_imps'];
    }

    /**
     * Sets v_imps
     *
     * @param int|null $v_imps <div lang=\"ja\"> ビューアブルインプレッションです。<br> ADD時、このフィールドは省略可能となります。<br> ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 </div> <div lang=\"en\"> Viewable impressions.<br> This field is optional in ADD operation.<br> *lifetimeBudget, reach, vImps and slots cannot be set at the same time. </div>
     *
     * @return self
     */
    public function setVImps($v_imps)
    {
        $this->container['v_imps'] = $v_imps;

        return $this;
    }

    /**
     * Gets sov_rate
     *
     * @return int|null
     */
    public function getSovRate()
    {
        return $this->container['sov_rate'];
    }

    /**
     * Sets sov_rate
     *
     * @param int|null $sov_rate <div lang=\"ja\"> SOV（1%〜100%）です。<br> ADD時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> SOV (1% to 100%).<br> This field is optional in ADD operation. </div>
     *
     * @return self
     */
    public function setSovRate($sov_rate)
    {
        $this->container['sov_rate'] = $sov_rate;

        return $this;
    }

    /**
     * Gets slots
     *
     * @return int|null
     */
    public function getSlots()
    {
        return $this->container['slots'];
    }

    /**
     * Sets slots
     *
     * @param int|null $slots <div lang=\"ja\"> 購入枠数です。<br> ADD時、このフィールドは省略可能となります。<br> ※lifetimeBudget, reach, vImps, slotsは同時に設定することができません。 </div> <div lang=\"en\"> Number of buying slots.<br> This field is optional in ADD operation.<br> *lifetimeBudget, reach, vImps and slots cannot be set at the same time. </div>
     *
     * @return self
     */
    public function setSlots($slots)
    {
        $this->container['slots'] = $slots;

        return $this;
    }

    /**
     * Gets campaign_goal
     *
     * @return string|null
     */
    public function getCampaignGoal()
    {
        return $this->container['campaign_goal'];
    }

    /**
     * Sets campaign_goal
     *
     * @param string|null $campaign_goal <div lang=\"ja\"> キャンペーン目的です。<br> ADD時、このフィールドは必須となります。<br> ※指定可能な値は、AccountAuthorityServiceのGET操作で得られるAccountAuthorityのauthoritiesフィールドをご確認ください。<br> </div> <div lang=\"en\"> Campaign goal.<br> In ADD operation, this field will be required.<br> * Available values can be referred to authorities field of AccountAuthority object obtained by GET operation of AccountAuthorityService.<br> </div>
     *
     * @return self
     */
    public function setCampaignGoal($campaign_goal)
    {
        $this->container['campaign_goal'] = $campaign_goal;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date <div lang=\"ja\"> 開始日です。<br> ADD時、このフィールドは必須となります。 </div> <div lang=\"en\"> Start date.<br> In ADD operation, this field will be required. </div> Format: yyyyMMdd
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date <div lang=\"ja\"> 終了日です。<br> ADD時、このフィールドは必須となります。<br> </div> <div lang=\"en\"> End date.<br> In ADD operation, this field will be required.<br> </div> Format: yyyyMMdd
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets viewable_frequency_cap
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceViewableFrequencyCap|null
     */
    public function getViewableFrequencyCap()
    {
        return $this->container['viewable_frequency_cap'];
    }

    /**
     * Sets viewable_frequency_cap
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceViewableFrequencyCap|null $viewable_frequency_cap viewable_frequency_cap
     *
     * @return self
     */
    public function setViewableFrequencyCap($viewable_frequency_cap)
    {
        $this->container['viewable_frequency_cap'] = $viewable_frequency_cap;

        return $this;
    }

    /**
     * Gets max_v_imps
     *
     * @return int|null
     */
    public function getMaxVImps()
    {
        return $this->container['max_v_imps'];
    }

    /**
     * Sets max_v_imps
     *
     * @param int|null $max_v_imps <div lang=\"ja\"> 最大ビューアブルインプレッション数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Maximum number of ad viewable impressions to same user.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setMaxVImps($max_v_imps)
    {
        $this->container['max_v_imps'] = $max_v_imps;

        return $this;
    }

    /**
     * Gets max_reach
     *
     * @return int|null
     */
    public function getMaxReach()
    {
        return $this->container['max_reach'];
    }

    /**
     * Sets max_reach
     *
     * @param int|null $max_reach <div lang=\"ja\"> 最大リーチ数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Maximum number of reaches.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setMaxReach($max_reach)
    {
        $this->container['max_reach'] = $max_reach;

        return $this;
    }

    /**
     * Gets lower_budget_limit
     *
     * @return int|null
     */
    public function getLowerBudgetLimit()
    {
        return $this->container['lower_budget_limit'];
    }

    /**
     * Sets lower_budget_limit
     *
     * @param int|null $lower_budget_limit <div lang=\"ja\"> 予約可能な下限通期予算です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Minimum reservable lifetime budget.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setLowerBudgetLimit($lower_budget_limit)
    {
        $this->container['lower_budget_limit'] = $lower_budget_limit;

        return $this;
    }

    /**
     * Gets upper_budget_limit
     *
     * @return int|null
     */
    public function getUpperBudgetLimit()
    {
        return $this->container['upper_budget_limit'];
    }

    /**
     * Sets upper_budget_limit
     *
     * @param int|null $upper_budget_limit <div lang=\"ja\"> 予約可能な上限通期予算です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。 </div> <div lang=\"en\"> Maximum reservable lifetime budget.<br> Although this field will be returned in the response, it will be ignored on input. </div>
     *
     * @return self
     */
    public function setUpperBudgetLimit($upper_budget_limit)
    {
        $this->container['upper_budget_limit'] = $upper_budget_limit;

        return $this;
    }

    /**
     * Gets reservation_status
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceReservationStatus|null
     */
    public function getReservationStatus()
    {
        return $this->container['reservation_status'];
    }

    /**
     * Sets reservation_status
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceReservationStatus|null $reservation_status reservation_status
     *
     * @return self
     */
    public function setReservationStatus($reservation_status)
    {
        $this->container['reservation_status'] = $reservation_status;

        return $this;
    }

    /**
     * Gets unreservable_reason
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceUnreservableReason|null
     */
    public function getUnreservableReason()
    {
        return $this->container['unreservable_reason'];
    }

    /**
     * Sets unreservable_reason
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceUnreservableReason|null $unreservable_reason unreservable_reason
     *
     * @return self
     */
    public function setUnreservableReason($unreservable_reason)
    {
        $this->container['unreservable_reason'] = $unreservable_reason;

        return $this;
    }

    /**
     * Gets ad_requirements
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdRequirement[]|null
     */
    public function getAdRequirements()
    {
        return $this->container['ad_requirements'];
    }

    /**
     * Sets ad_requirements
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdRequirement[]|null $ad_requirements ad_requirements
     *
     * @return self
     */
    public function setAdRequirements($ad_requirements)
    {
        $this->container['ad_requirements'] = $ad_requirements;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdGroupTarget[]|null
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdGroupTarget[]|null $targets targets
     *
     * @return self
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets ad_place_type
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdPlaceType|null
     */
    public function getAdPlaceType()
    {
        return $this->container['ad_place_type'];
    }

    /**
     * Sets ad_place_type
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceAdPlaceType|null $ad_place_type ad_place_type
     *
     * @return self
     */
    public function setAdPlaceType($ad_place_type)
    {
        $this->container['ad_place_type'] = $ad_place_type;

        return $this;
    }

    /**
     * Gets prediction
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePrediction|null
     */
    public function getPrediction()
    {
        return $this->container['prediction'];
    }

    /**
     * Sets prediction
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServicePrediction|null $prediction prediction
     *
     * @return self
     */
    public function setPrediction($prediction)
    {
        $this->container['prediction'] = $prediction;

        return $this;
    }

    /**
     * Gets ad_category_ids
     *
     * @return int[]|null
     */
    public function getAdCategoryIds()
    {
        return $this->container['ad_category_ids'];
    }

    /**
     * Sets ad_category_ids
     *
     * @param int[]|null $ad_category_ids <div lang=\"ja\"> 広告カテゴリーIDです。<br> 広告カテゴリーは、配信する広告内容に該当するものを正確に指定して下さい。内容に応じて広告掲載量が変わるため、正確なシミュレーション結果の算出に必要です。<br> 詳細は<a href=\"https://ads-help.yahoo.co.jp/yahooads/guideline/articledetail?lan=ja&aid=50308\" target=\"_blank\">ヘルプ</a>を参照してください。<br> なお、ここで指定した広告カテゴリーと異なる広告が入稿された場合は、入稿した広告内容の修正が必要な旨をメールでご連絡します。<br> ※指定した広告カテゴリーと広告タイプの組み合わせによっては、予約のキャンセルが必要な場合があります。その場合はキャンセル料が発生します。<br> 指定可能な値は、GuaranteedSimulationService/getAdCategoryで取得されるGuaranteedSimulationServiceAdCategoryオブジェクトのadCategoryIdフィールドをご参照ください。<br> ADD時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Ad category ID.<br> To get an accurate simulated result, specify the restricted contents correctly. The ad volume depends on the contents.<br> <a href=\"https://ads-help.yahoo.co.jp/yahooads/guideline/articledetail?lan=en&aid=28259\" target=\"_blank\">Learn more</a><br> If you add ads that have a content different from the one you specified, you will receive an email to fix them.<br> You may need to cancel your ad depending on the combination of content and ad type you specified. Pay a cancellation fee in that case.<br> Available values can be referred to adCategoryId field of GuaranteedSimulationServiceAdCategory object obtained by getAdCategory operation of GuaranteedSimulationService.<br> This field is optional in ADD operation. </div>
     *
     * @return self
     */
    public function setAdCategoryIds($ad_category_ids)
    {
        $this->container['ad_category_ids'] = $ad_category_ids;

        return $this;
    }

    /**
     * Gets package_id
     *
     * @return int|null
     */
    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     *
     * @param int|null $package_id <div lang=\"ja\"> 商品IDです。<br> ADD時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Package ID.<br> This field is optional in ADD operation. </div>
     *
     * @return self
     */
    public function setPackageId($package_id)
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets package_history_id
     *
     * @return int|null
     */
    public function getPackageHistoryId()
    {
        return $this->container['package_history_id'];
    }

    /**
     * Sets package_history_id
     *
     * @param int|null $package_history_id <div lang=\"ja\"> 商品履歴IDです。<br> ADD時、このフィールドは省略可能となります。 </div> <div lang=\"en\"> Package history ID.<br> This field is optional in ADD operation. </div>
     *
     * @return self
     */
    public function setPackageHistoryId($package_history_id)
    {
        $this->container['package_history_id'] = $package_history_id;

        return $this;
    }

    /**
     * Gets action_after_video_ad_tap
     *
     * @return \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap|null
     */
    public function getActionAfterVideoAdTap()
    {
        return $this->container['action_after_video_ad_tap'];
    }

    /**
     * Sets action_after_video_ad_tap
     *
     * @param \YahooAdsDisplayApi\Client\Model\GuaranteedSimulationServiceActionAfterVideoAdTap|null $action_after_video_ad_tap action_after_video_ad_tap
     *
     * @return self
     */
    public function setActionAfterVideoAdTap($action_after_video_ad_tap)
    {
        $this->container['action_after_video_ad_tap'] = $action_after_video_ad_tap;

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


