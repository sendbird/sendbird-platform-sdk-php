<?php
/**
 * RemoveReactionFromAMessageResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sendbird Platform SDK
 *
 * Sendbird Platform API Javascript SDK  https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Sendbird\Model;

use \ArrayAccess;
use \Sendbird\ObjectSerializer;

/**
 * RemoveReactionFromAMessageResponse Class Doc Comment
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RemoveReactionFromAMessageResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'removeReactionFromAMessageResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reaction' => 'string',
        'user_id' => 'float',
        'success' => 'bool',
        'msg_id' => 'float',
        'updated_at' => 'float',
        'operation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reaction' => null,
        'user_id' => null,
        'success' => null,
        'msg_id' => null,
        'updated_at' => null,
        'operation' => null
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
        'reaction' => 'reaction',
        'user_id' => 'user_id',
        'success' => 'success',
        'msg_id' => 'msg_id',
        'updated_at' => 'updated_at',
        'operation' => 'operation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reaction' => 'setReaction',
        'user_id' => 'setUserId',
        'success' => 'setSuccess',
        'msg_id' => 'setMsgId',
        'updated_at' => 'setUpdatedAt',
        'operation' => 'setOperation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reaction' => 'getReaction',
        'user_id' => 'getUserId',
        'success' => 'getSuccess',
        'msg_id' => 'getMsgId',
        'updated_at' => 'getUpdatedAt',
        'operation' => 'getOperation'
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
        $this->container['reaction'] = $data['reaction'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['msg_id'] = $data['msg_id'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['operation'] = $data['operation'] ?? null;
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
     * Gets reaction
     *
     * @return string|null
     */
    public function getReaction()
    {
        return $this->container['reaction'];
    }

    /**
     * Sets reaction
     *
     * @param string|null $reaction reaction
     *
     * @return self
     */
    public function setReaction($reaction)
    {
        $this->container['reaction'] = $reaction;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets msg_id
     *
     * @return float|null
     */
    public function getMsgId()
    {
        return $this->container['msg_id'];
    }

    /**
     * Sets msg_id
     *
     * @param float|null $msg_id msg_id
     *
     * @return self
     */
    public function setMsgId($msg_id)
    {
        $this->container['msg_id'] = $msg_id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return float|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param float|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string|null
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string|null $operation operation
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

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

