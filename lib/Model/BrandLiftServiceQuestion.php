<?php
/**
 * BrandLiftServiceQuestion
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
 * BrandLiftServiceQuestion Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;BrandLiftServiceQuestionオブジェクトは、ブランドリフト調査項目を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;BrandLiftServiceQuestion objects describes the brand lift survey contents.&lt;/div&gt;
 * @package  YahooAdsDisplayApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class BrandLiftServiceQuestion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandLiftServiceQuestion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'question_id' => 'int',
        'goal' => '\YahooAdsDisplayApi\Client\Model\BrandLiftServiceGoal',
        'pre_approve_id' => 'string',
        'question' => 'string',
        'answer_option1' => 'string',
        'answer_option2' => 'string',
        'answer_option3' => 'string',
        'answer_option4' => 'string',
        'answer_option5' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'question_id' => 'int64',
        'goal' => null,
        'pre_approve_id' => null,
        'question' => null,
        'answer_option1' => null,
        'answer_option2' => null,
        'answer_option3' => null,
        'answer_option4' => null,
        'answer_option5' => null
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
        'question_id' => 'questionId',
        'goal' => 'goal',
        'pre_approve_id' => 'preApproveId',
        'question' => 'question',
        'answer_option1' => 'answerOption1',
        'answer_option2' => 'answerOption2',
        'answer_option3' => 'answerOption3',
        'answer_option4' => 'answerOption4',
        'answer_option5' => 'answerOption5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'question_id' => 'setQuestionId',
        'goal' => 'setGoal',
        'pre_approve_id' => 'setPreApproveId',
        'question' => 'setQuestion',
        'answer_option1' => 'setAnswerOption1',
        'answer_option2' => 'setAnswerOption2',
        'answer_option3' => 'setAnswerOption3',
        'answer_option4' => 'setAnswerOption4',
        'answer_option5' => 'setAnswerOption5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'question_id' => 'getQuestionId',
        'goal' => 'getGoal',
        'pre_approve_id' => 'getPreApproveId',
        'question' => 'getQuestion',
        'answer_option1' => 'getAnswerOption1',
        'answer_option2' => 'getAnswerOption2',
        'answer_option3' => 'getAnswerOption3',
        'answer_option4' => 'getAnswerOption4',
        'answer_option5' => 'getAnswerOption5'
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
        $this->container['question_id'] = $data['question_id'] ?? null;
        $this->container['goal'] = $data['goal'] ?? null;
        $this->container['pre_approve_id'] = $data['pre_approve_id'] ?? null;
        $this->container['question'] = $data['question'] ?? null;
        $this->container['answer_option1'] = $data['answer_option1'] ?? null;
        $this->container['answer_option2'] = $data['answer_option2'] ?? null;
        $this->container['answer_option3'] = $data['answer_option3'] ?? null;
        $this->container['answer_option4'] = $data['answer_option4'] ?? null;
        $this->container['answer_option5'] = $data['answer_option5'] ?? null;
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
     * Gets question_id
     *
     * @return int|null
     */
    public function getQuestionId()
    {
        return $this->container['question_id'];
    }

    /**
     * Sets question_id
     *
     * @param int|null $question_id <div lang=\"ja\">調査IDです。</div> <div lang=\"en\">Question ID. </div>
     *
     * @return self
     */
    public function setQuestionId($question_id)
    {
        $this->container['question_id'] = $question_id;

        return $this;
    }

    /**
     * Gets goal
     *
     * @return \YahooAdsDisplayApi\Client\Model\BrandLiftServiceGoal|null
     */
    public function getGoal()
    {
        return $this->container['goal'];
    }

    /**
     * Sets goal
     *
     * @param \YahooAdsDisplayApi\Client\Model\BrandLiftServiceGoal|null $goal goal
     *
     * @return self
     */
    public function setGoal($goal)
    {
        $this->container['goal'] = $goal;

        return $this;
    }

    /**
     * Gets pre_approve_id
     *
     * @return string|null
     */
    public function getPreApproveId()
    {
        return $this->container['pre_approve_id'];
    }

    /**
     * Sets pre_approve_id
     *
     * @param string|null $pre_approve_id <div lang=\"ja\">事前承認IDです。</div> <div lang=\"en\">Preapprove ID. </div>
     *
     * @return self
     */
    public function setPreApproveId($pre_approve_id)
    {
        $this->container['pre_approve_id'] = $pre_approve_id;

        return $this;
    }

    /**
     * Gets question
     *
     * @return string|null
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     *
     * @param string|null $question <div lang=\"ja\">設問です。</div> <div lang=\"en\">Question. </div>
     *
     * @return self
     */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets answer_option1
     *
     * @return string|null
     */
    public function getAnswerOption1()
    {
        return $this->container['answer_option1'];
    }

    /**
     * Sets answer_option1
     *
     * @param string|null $answer_option1 <div lang=\"ja\">回答選択肢1です。</div> <div lang=\"en\">Answer Option1. </div>
     *
     * @return self
     */
    public function setAnswerOption1($answer_option1)
    {
        $this->container['answer_option1'] = $answer_option1;

        return $this;
    }

    /**
     * Gets answer_option2
     *
     * @return string|null
     */
    public function getAnswerOption2()
    {
        return $this->container['answer_option2'];
    }

    /**
     * Sets answer_option2
     *
     * @param string|null $answer_option2 <div lang=\"ja\">回答選択肢2です。</div> <div lang=\"en\">Answer Option2. </div>
     *
     * @return self
     */
    public function setAnswerOption2($answer_option2)
    {
        $this->container['answer_option2'] = $answer_option2;

        return $this;
    }

    /**
     * Gets answer_option3
     *
     * @return string|null
     */
    public function getAnswerOption3()
    {
        return $this->container['answer_option3'];
    }

    /**
     * Sets answer_option3
     *
     * @param string|null $answer_option3 <div lang=\"ja\">回答選択肢3です。</div> <div lang=\"en\">Answer Option3. </div>
     *
     * @return self
     */
    public function setAnswerOption3($answer_option3)
    {
        $this->container['answer_option3'] = $answer_option3;

        return $this;
    }

    /**
     * Gets answer_option4
     *
     * @return string|null
     */
    public function getAnswerOption4()
    {
        return $this->container['answer_option4'];
    }

    /**
     * Sets answer_option4
     *
     * @param string|null $answer_option4 <div lang=\"ja\">回答選択肢4です。</div> <div lang=\"en\">Answer Option4. </div>
     *
     * @return self
     */
    public function setAnswerOption4($answer_option4)
    {
        $this->container['answer_option4'] = $answer_option4;

        return $this;
    }

    /**
     * Gets answer_option5
     *
     * @return string|null
     */
    public function getAnswerOption5()
    {
        return $this->container['answer_option5'];
    }

    /**
     * Sets answer_option5
     *
     * @param string|null $answer_option5 <div lang=\"ja\">回答選択肢5です。</div> <div lang=\"en\">Answer Option5. </div>
     *
     * @return self
     */
    public function setAnswerOption5($answer_option5)
    {
        $this->container['answer_option5'] = $answer_option5;

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


