<?php
/**
 * RetargetingListServiceRuleCondition
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
 * RetargetingListServiceRuleCondition Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt; RetargetingListServiceRuleConditionオブジェクトは、ターゲットリストに設定可能な条件を表します。&lt;br&gt; このフィールドは、ADDおよびSET時に必須となります。 &lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt; RetargetingListServiceRuleCondition object displays the possible conditions to set for target list.&lt;br&gt; This field is required in ADD and SET operation. &lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetargetingListServiceRuleCondition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingListServiceRuleCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'compare_operator' => '\OpenAPI\Client\Model\RetargetingListServiceCompareOperator',
        'rule_type' => '\OpenAPI\Client\Model\RetargetingListServiceRuleType',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'compare_operator' => null,
        'rule_type' => null,
        'value' => null
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
        'compare_operator' => 'compareOperator',
        'rule_type' => 'ruleType',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compare_operator' => 'setCompareOperator',
        'rule_type' => 'setRuleType',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compare_operator' => 'getCompareOperator',
        'rule_type' => 'getRuleType',
        'value' => 'getValue'
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
        $this->container['compare_operator'] = $data['compare_operator'] ?? null;
        $this->container['rule_type'] = $data['rule_type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
     * Gets compare_operator
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceCompareOperator|null
     */
    public function getCompareOperator()
    {
        return $this->container['compare_operator'];
    }

    /**
     * Sets compare_operator
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceCompareOperator|null $compare_operator compare_operator
     *
     * @return self
     */
    public function setCompareOperator($compare_operator)
    {
        $this->container['compare_operator'] = $compare_operator;

        return $this;
    }

    /**
     * Gets rule_type
     *
     * @return \OpenAPI\Client\Model\RetargetingListServiceRuleType|null
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     *
     * @param \OpenAPI\Client\Model\RetargetingListServiceRuleType|null $rule_type rule_type
     *
     * @return self
     */
    public function setRuleType($rule_type)
    {
        $this->container['rule_type'] = $rule_type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value <div lang=\"ja\"> ルールで評価する値です。<br> このフィールドは、ADDおよびSET時に必須となり、REMOVE時に無視されます。<br> ※ruleTypeがEVENT_TYPEの場合、以下のイベント種別に記載の値のみ指定可能となります。 </div> <div lang=\"en\"> Matching Rules Value. <br> This field is required in ADD and SET operation, and will be ignored in REMOVE operation.<br> ∗If ruleType is EVENT_TYPE, only the values listed in the table below can be specified. </div> <details>   <summary>     <div lang=\"ja\">イベント種別</div>     <div lang=\"en\">Event Type</div>   </summary>   <table>     <thead>       <tr>         <th>           <div lang=\"ja\">イベント種別</div>           <div lang=\"en\">Event Type</div>         </th>         <th>           <div lang=\"ja\">イベント種別名</div>           <div lang=\"en\">Name of event type</div>         </th>       </tr>     </thead>     <tbody>       <tr>         <td>app_install</td>         <td>           <div lang=\"ja\">アプリをインストール</div>           <div lang=\"en\">App install</div>         </td>       </tr>       <tr>         <td>app_launch</td>         <td>           <div lang=\"ja\">アプリ起動</div>           <div lang=\"en\">App start</div>         </td>       </tr>       <tr>         <td>app_update</td>         <td>           <div lang=\"ja\">アプリをアップデート</div>           <div lang=\"en\">App update</div>         </td>       </tr>       <tr>         <td>view_listing</td>         <td>           <div lang=\"ja\">商品一覧画面の閲覧</div>           <div lang=\"en\">View item list</div>         </td>       </tr>       <tr>         <td>view_product</td>         <td>           <div lang=\"ja\">商品詳細画面の閲覧</div>           <div lang=\"en\">View item description</div>         </td>       </tr>       <tr>         <td>view_cart</td>         <td>           <div lang=\"ja\">商品カートを閲覧</div>           <div lang=\"en\">View cart</div>         </td>       </tr>       <tr>         <td>add_wishlist</td>         <td>           <div lang=\"ja\">お気に入りに追加</div>           <div lang=\"en\">Add to wishlist</div>         </td>       </tr>       <tr>         <td>add_cart</td>         <td>           <div lang=\"ja\">商品カートに追加</div>           <div lang=\"en\">Add to cart</div>         </td>       </tr>       <tr>         <td>check_out</td>         <td>           <div lang=\"ja\">商品購入確認</div>           <div lang=\"en\">Confirm purchasing</div>         </td>       </tr>       <tr>         <td>purchase</td>         <td>           <div lang=\"ja\">商品購入</div>           <div lang=\"en\">Purchase</div>         </td>       </tr>       <tr>         <td>payment_info</td>         <td>           <div lang=\"ja\">お支払い明細を発行</div>           <div lang=\"en\">Payment details</div>         </td>       </tr>       <tr>         <td>sign_up</td>         <td>           <div lang=\"ja\">登録完了</div>           <div lang=\"en\">Registration complete</div>         </td>       </tr>       <tr>         <td>login</td>         <td>           <div lang=\"ja\">ログイン</div>           <div lang=\"en\">Login</div>         </td>       </tr>       <tr>         <td>search</td>         <td>           <div lang=\"ja\">検索</div>           <div lang=\"en\">Search</div>         </td>       </tr>       <tr>         <td>review</td>         <td>           <div lang=\"ja\">コンテンツをレビュー</div>           <div lang=\"en\">Review contents</div>         </td>       </tr>       <tr>         <td>share</td>         <td>           <div lang=\"ja\">コンテンツをシェア</div>           <div lang=\"en\">Share contents</div>         </td>       </tr>       <tr>         <td>invite</td>         <td>           <div lang=\"ja\">アプリへ招待</div>           <div lang=\"en\">Invite to app</div>         </td>       </tr>       <tr>         <td>reservation</td>         <td>           <div lang=\"ja\">予約完了</div>           <div lang=\"en\">Reservation complete</div>         </td>       </tr>       <tr>         <td>tutorial</td>         <td>           <div lang=\"ja\">チュートリアルを完了</div>           <div lang=\"en\">Tutorial complete</div>         </td>       </tr>       <tr>         <td>deeplink</td>         <td>           <div lang=\"ja\">ディープリンクから流入</div>           <div lang=\"en\">Traffic from deep link</div>         </td>       </tr>       <tr>         <td>start_level</td>         <td>           <div lang=\"ja\">ゲームイベントを開始</div>           <div lang=\"en\">Start game event</div>         </td>       </tr>       <tr>         <td>end_level</td>         <td>           <div lang=\"ja\">ゲームイベントを完了</div>           <div lang=\"en\">End game event</div>         </td>       </tr>       <tr>         <td>level_achieved</td>         <td>           <div lang=\"ja\">ゲームのレベル到達</div>           <div lang=\"en\">Level achieved</div>         </td>       </tr>       <tr>         <td>unlock_achievement</td>         <td>           <div lang=\"ja\">ゲームの目標達成</div>           <div lang=\"en\">Unlock achievement</div>         </td>       </tr>       <tr>         <td>app_purchase</td>         <td>           <div lang=\"ja\">アプリ内購入</div>           <div lang=\"en\">App purchasing</div>         </td>       </tr>       <tr>         <td>spent_credits</td>         <td>           <div lang=\"ja\">クレジットカードの利用</div>           <div lang=\"en\">Credit card</div>         </td>       </tr>       <tr>         <td>custom1</td>         <td>           <div lang=\"ja\">カスタムイベント1</div>           <div lang=\"en\">Custom event 1</div>         </td>       </tr>       <tr>         <td>custom2</td>         <td>           <div lang=\"ja\">カスタムイベント2</div>           <div lang=\"en\">Custom event 2</div>         </td>       </tr>       <tr>         <td>custom3</td>         <td>           <div lang=\"ja\">カスタムイベント3</div>           <div lang=\"en\">Custom event 3</div>         </td>       </tr>     </tbody>   </table> </details>
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


