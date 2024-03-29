<?php
/**
 * AddApnsPushConfigurationResponsePushConfigurationsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sendbird Platform SDK
 *
 * Sendbird Platform API SDK  https://sendbird.com/docs/chat/v3/platform-api/getting-started/prepare-to-use-api
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@sendbird.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * AddApnsPushConfigurationResponsePushConfigurationsInner Class Doc Comment
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddApnsPushConfigurationResponsePushConfigurationsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'addApnsPushConfigurationResponse_push_configurations_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'push_type' => 'string',
        'created_at' => 'float',
        'apns_cer_env_type' => 'string',
        'apns_expiration' => 'float',
        'apns_name' => 'string',
        'has_unread_count_badge' => 'float',
        'content_available' => 'bool',
        'mutable_content' => 'bool',
        'push_sound' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'push_type' => null,
        'created_at' => null,
        'apns_cer_env_type' => null,
        'apns_expiration' => null,
        'apns_name' => null,
        'has_unread_count_badge' => null,
        'content_available' => null,
        'mutable_content' => null,
        'push_sound' => null
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
        'id' => 'id',
        'push_type' => 'push_type',
        'created_at' => 'created_at',
        'apns_cer_env_type' => 'apns_cer_env_type',
        'apns_expiration' => 'apns_expiration',
        'apns_name' => 'apns_name',
        'has_unread_count_badge' => 'has_unread_count_badge',
        'content_available' => 'content_available',
        'mutable_content' => 'mutable_content',
        'push_sound' => 'push_sound'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'push_type' => 'setPushType',
        'created_at' => 'setCreatedAt',
        'apns_cer_env_type' => 'setApnsCerEnvType',
        'apns_expiration' => 'setApnsExpiration',
        'apns_name' => 'setApnsName',
        'has_unread_count_badge' => 'setHasUnreadCountBadge',
        'content_available' => 'setContentAvailable',
        'mutable_content' => 'setMutableContent',
        'push_sound' => 'setPushSound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'push_type' => 'getPushType',
        'created_at' => 'getCreatedAt',
        'apns_cer_env_type' => 'getApnsCerEnvType',
        'apns_expiration' => 'getApnsExpiration',
        'apns_name' => 'getApnsName',
        'has_unread_count_badge' => 'getHasUnreadCountBadge',
        'content_available' => 'getContentAvailable',
        'mutable_content' => 'getMutableContent',
        'push_sound' => 'getPushSound'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['push_type'] = $data['push_type'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['apns_cer_env_type'] = $data['apns_cer_env_type'] ?? null;
        $this->container['apns_expiration'] = $data['apns_expiration'] ?? null;
        $this->container['apns_name'] = $data['apns_name'] ?? null;
        $this->container['has_unread_count_badge'] = $data['has_unread_count_badge'] ?? null;
        $this->container['content_available'] = $data['content_available'] ?? null;
        $this->container['mutable_content'] = $data['mutable_content'] ?? null;
        $this->container['push_sound'] = $data['push_sound'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets push_type
     *
     * @return string|null
     */
    public function getPushType()
    {
        return $this->container['push_type'];
    }

    /**
     * Sets push_type
     *
     * @param string|null $push_type push_type
     *
     * @return self
     */
    public function setPushType($push_type)
    {
        $this->container['push_type'] = $push_type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return float|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param float|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets apns_cer_env_type
     *
     * @return string|null
     */
    public function getApnsCerEnvType()
    {
        return $this->container['apns_cer_env_type'];
    }

    /**
     * Sets apns_cer_env_type
     *
     * @param string|null $apns_cer_env_type apns_cer_env_type
     *
     * @return self
     */
    public function setApnsCerEnvType($apns_cer_env_type)
    {
        $this->container['apns_cer_env_type'] = $apns_cer_env_type;

        return $this;
    }

    /**
     * Gets apns_expiration
     *
     * @return float|null
     */
    public function getApnsExpiration()
    {
        return $this->container['apns_expiration'];
    }

    /**
     * Sets apns_expiration
     *
     * @param float|null $apns_expiration apns_expiration
     *
     * @return self
     */
    public function setApnsExpiration($apns_expiration)
    {
        $this->container['apns_expiration'] = $apns_expiration;

        return $this;
    }

    /**
     * Gets apns_name
     *
     * @return string|null
     */
    public function getApnsName()
    {
        return $this->container['apns_name'];
    }

    /**
     * Sets apns_name
     *
     * @param string|null $apns_name apns_name
     *
     * @return self
     */
    public function setApnsName($apns_name)
    {
        $this->container['apns_name'] = $apns_name;

        return $this;
    }

    /**
     * Gets has_unread_count_badge
     *
     * @return float|null
     */
    public function getHasUnreadCountBadge()
    {
        return $this->container['has_unread_count_badge'];
    }

    /**
     * Sets has_unread_count_badge
     *
     * @param float|null $has_unread_count_badge has_unread_count_badge
     *
     * @return self
     */
    public function setHasUnreadCountBadge($has_unread_count_badge)
    {
        $this->container['has_unread_count_badge'] = $has_unread_count_badge;

        return $this;
    }

    /**
     * Gets content_available
     *
     * @return bool|null
     */
    public function getContentAvailable()
    {
        return $this->container['content_available'];
    }

    /**
     * Sets content_available
     *
     * @param bool|null $content_available content_available
     *
     * @return self
     */
    public function setContentAvailable($content_available)
    {
        $this->container['content_available'] = $content_available;

        return $this;
    }

    /**
     * Gets mutable_content
     *
     * @return bool|null
     */
    public function getMutableContent()
    {
        return $this->container['mutable_content'];
    }

    /**
     * Sets mutable_content
     *
     * @param bool|null $mutable_content mutable_content
     *
     * @return self
     */
    public function setMutableContent($mutable_content)
    {
        $this->container['mutable_content'] = $mutable_content;

        return $this;
    }

    /**
     * Gets push_sound
     *
     * @return string|null
     */
    public function getPushSound()
    {
        return $this->container['push_sound'];
    }

    /**
     * Sets push_sound
     *
     * @param string|null $push_sound push_sound
     *
     * @return self
     */
    public function setPushSound($push_sound)
    {
        $this->container['push_sound'] = $push_sound;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


