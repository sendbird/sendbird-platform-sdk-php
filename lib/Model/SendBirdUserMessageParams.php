<?php
/**
 * SendBirdUserMessageParams
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
 * SendBirdUserMessageParams Class Doc Comment
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SendBirdUserMessageParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendBird.UserMessageParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apple_critical_alert_options' => '\Sendbird\Model\SendBirdAppleCriticalAlertOptions',
        'custom_type' => 'string',
        'data' => 'string',
        'is_reply_to_channel' => 'bool',
        'mention_type' => 'string',
        'mentioned_user_ids' => 'string[]',
        'mentioned_users' => '\Sendbird\Model\SendBirdUser[]',
        'message' => 'string',
        'meta_array_keys' => 'string[]',
        'meta_arrays' => '\Sendbird\Model\SendBirdMessageMetaArray[]',
        'parent_message_id' => 'float',
        'poll_id' => 'float',
        'push_notification_delivery_option' => 'string',
        'target_languages' => 'string[]',
        'translation_target_languages' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apple_critical_alert_options' => null,
        'custom_type' => null,
        'data' => null,
        'is_reply_to_channel' => null,
        'mention_type' => null,
        'mentioned_user_ids' => null,
        'mentioned_users' => null,
        'message' => null,
        'meta_array_keys' => null,
        'meta_arrays' => null,
        'parent_message_id' => null,
        'poll_id' => null,
        'push_notification_delivery_option' => null,
        'target_languages' => null,
        'translation_target_languages' => null
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
        'apple_critical_alert_options' => 'apple_critical_alert_options',
        'custom_type' => 'custom_type',
        'data' => 'data',
        'is_reply_to_channel' => 'is_reply_to_channel',
        'mention_type' => 'mention_type',
        'mentioned_user_ids' => 'mentioned_user_ids',
        'mentioned_users' => 'mentioned_users',
        'message' => 'message',
        'meta_array_keys' => 'meta_array_keys',
        'meta_arrays' => 'meta_arrays',
        'parent_message_id' => 'parent_message_id',
        'poll_id' => 'poll_id',
        'push_notification_delivery_option' => 'push_notification_delivery_option',
        'target_languages' => 'target_languages',
        'translation_target_languages' => 'translation_target_languages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apple_critical_alert_options' => 'setAppleCriticalAlertOptions',
        'custom_type' => 'setCustomType',
        'data' => 'setData',
        'is_reply_to_channel' => 'setIsReplyToChannel',
        'mention_type' => 'setMentionType',
        'mentioned_user_ids' => 'setMentionedUserIds',
        'mentioned_users' => 'setMentionedUsers',
        'message' => 'setMessage',
        'meta_array_keys' => 'setMetaArrayKeys',
        'meta_arrays' => 'setMetaArrays',
        'parent_message_id' => 'setParentMessageId',
        'poll_id' => 'setPollId',
        'push_notification_delivery_option' => 'setPushNotificationDeliveryOption',
        'target_languages' => 'setTargetLanguages',
        'translation_target_languages' => 'setTranslationTargetLanguages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apple_critical_alert_options' => 'getAppleCriticalAlertOptions',
        'custom_type' => 'getCustomType',
        'data' => 'getData',
        'is_reply_to_channel' => 'getIsReplyToChannel',
        'mention_type' => 'getMentionType',
        'mentioned_user_ids' => 'getMentionedUserIds',
        'mentioned_users' => 'getMentionedUsers',
        'message' => 'getMessage',
        'meta_array_keys' => 'getMetaArrayKeys',
        'meta_arrays' => 'getMetaArrays',
        'parent_message_id' => 'getParentMessageId',
        'poll_id' => 'getPollId',
        'push_notification_delivery_option' => 'getPushNotificationDeliveryOption',
        'target_languages' => 'getTargetLanguages',
        'translation_target_languages' => 'getTranslationTargetLanguages'
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

    public const MENTION_TYPE_CHANNEL = 'channel';
    public const MENTION_TYPE_USERS = 'users';
    public const PUSH_NOTIFICATION_DELIVERY_OPTION__DEFAULT = 'default';
    public const PUSH_NOTIFICATION_DELIVERY_OPTION_SUPPRESS = 'suppress';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMentionTypeAllowableValues()
    {
        return [
            self::MENTION_TYPE_CHANNEL,
            self::MENTION_TYPE_USERS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPushNotificationDeliveryOptionAllowableValues()
    {
        return [
            self::PUSH_NOTIFICATION_DELIVERY_OPTION__DEFAULT,
            self::PUSH_NOTIFICATION_DELIVERY_OPTION_SUPPRESS,
        ];
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
        $this->container['apple_critical_alert_options'] = $data['apple_critical_alert_options'] ?? null;
        $this->container['custom_type'] = $data['custom_type'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['is_reply_to_channel'] = $data['is_reply_to_channel'] ?? null;
        $this->container['mention_type'] = $data['mention_type'] ?? null;
        $this->container['mentioned_user_ids'] = $data['mentioned_user_ids'] ?? null;
        $this->container['mentioned_users'] = $data['mentioned_users'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['meta_array_keys'] = $data['meta_array_keys'] ?? null;
        $this->container['meta_arrays'] = $data['meta_arrays'] ?? null;
        $this->container['parent_message_id'] = $data['parent_message_id'] ?? null;
        $this->container['poll_id'] = $data['poll_id'] ?? null;
        $this->container['push_notification_delivery_option'] = $data['push_notification_delivery_option'] ?? null;
        $this->container['target_languages'] = $data['target_languages'] ?? null;
        $this->container['translation_target_languages'] = $data['translation_target_languages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMentionTypeAllowableValues();
        if (!is_null($this->container['mention_type']) && !in_array($this->container['mention_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mention_type', must be one of '%s'",
                $this->container['mention_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPushNotificationDeliveryOptionAllowableValues();
        if (!is_null($this->container['push_notification_delivery_option']) && !in_array($this->container['push_notification_delivery_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'push_notification_delivery_option', must be one of '%s'",
                $this->container['push_notification_delivery_option'],
                implode("', '", $allowedValues)
            );
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
     * Gets apple_critical_alert_options
     *
     * @return \Sendbird\Model\SendBirdAppleCriticalAlertOptions|null
     */
    public function getAppleCriticalAlertOptions()
    {
        return $this->container['apple_critical_alert_options'];
    }

    /**
     * Sets apple_critical_alert_options
     *
     * @param \Sendbird\Model\SendBirdAppleCriticalAlertOptions|null $apple_critical_alert_options apple_critical_alert_options
     *
     * @return self
     */
    public function setAppleCriticalAlertOptions($apple_critical_alert_options)
    {
        $this->container['apple_critical_alert_options'] = $apple_critical_alert_options;

        return $this;
    }

    /**
     * Gets custom_type
     *
     * @return string|null
     */
    public function getCustomType()
    {
        return $this->container['custom_type'];
    }

    /**
     * Sets custom_type
     *
     * @param string|null $custom_type custom_type
     *
     * @return self
     */
    public function setCustomType($custom_type)
    {
        $this->container['custom_type'] = $custom_type;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets is_reply_to_channel
     *
     * @return bool|null
     */
    public function getIsReplyToChannel()
    {
        return $this->container['is_reply_to_channel'];
    }

    /**
     * Sets is_reply_to_channel
     *
     * @param bool|null $is_reply_to_channel is_reply_to_channel
     *
     * @return self
     */
    public function setIsReplyToChannel($is_reply_to_channel)
    {
        $this->container['is_reply_to_channel'] = $is_reply_to_channel;

        return $this;
    }

    /**
     * Gets mention_type
     *
     * @return string|null
     */
    public function getMentionType()
    {
        return $this->container['mention_type'];
    }

    /**
     * Sets mention_type
     *
     * @param string|null $mention_type mention_type
     *
     * @return self
     */
    public function setMentionType($mention_type)
    {
        $allowedValues = $this->getMentionTypeAllowableValues();
        if (!is_null($mention_type) && !in_array($mention_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mention_type', must be one of '%s'",
                    $mention_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mention_type'] = $mention_type;

        return $this;
    }

    /**
     * Gets mentioned_user_ids
     *
     * @return string[]|null
     */
    public function getMentionedUserIds()
    {
        return $this->container['mentioned_user_ids'];
    }

    /**
     * Sets mentioned_user_ids
     *
     * @param string[]|null $mentioned_user_ids mentioned_user_ids
     *
     * @return self
     */
    public function setMentionedUserIds($mentioned_user_ids)
    {
        $this->container['mentioned_user_ids'] = $mentioned_user_ids;

        return $this;
    }

    /**
     * Gets mentioned_users
     *
     * @return \Sendbird\Model\SendBirdUser[]|null
     */
    public function getMentionedUsers()
    {
        return $this->container['mentioned_users'];
    }

    /**
     * Sets mentioned_users
     *
     * @param \Sendbird\Model\SendBirdUser[]|null $mentioned_users mentioned_users
     *
     * @return self
     */
    public function setMentionedUsers($mentioned_users)
    {
        $this->container['mentioned_users'] = $mentioned_users;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets meta_array_keys
     *
     * @return string[]|null
     */
    public function getMetaArrayKeys()
    {
        return $this->container['meta_array_keys'];
    }

    /**
     * Sets meta_array_keys
     *
     * @param string[]|null $meta_array_keys meta_array_keys
     *
     * @return self
     */
    public function setMetaArrayKeys($meta_array_keys)
    {
        $this->container['meta_array_keys'] = $meta_array_keys;

        return $this;
    }

    /**
     * Gets meta_arrays
     *
     * @return \Sendbird\Model\SendBirdMessageMetaArray[]|null
     */
    public function getMetaArrays()
    {
        return $this->container['meta_arrays'];
    }

    /**
     * Sets meta_arrays
     *
     * @param \Sendbird\Model\SendBirdMessageMetaArray[]|null $meta_arrays meta_arrays
     *
     * @return self
     */
    public function setMetaArrays($meta_arrays)
    {
        $this->container['meta_arrays'] = $meta_arrays;

        return $this;
    }

    /**
     * Gets parent_message_id
     *
     * @return float|null
     */
    public function getParentMessageId()
    {
        return $this->container['parent_message_id'];
    }

    /**
     * Sets parent_message_id
     *
     * @param float|null $parent_message_id parent_message_id
     *
     * @return self
     */
    public function setParentMessageId($parent_message_id)
    {
        $this->container['parent_message_id'] = $parent_message_id;

        return $this;
    }

    /**
     * Gets poll_id
     *
     * @return float|null
     */
    public function getPollId()
    {
        return $this->container['poll_id'];
    }

    /**
     * Sets poll_id
     *
     * @param float|null $poll_id poll_id
     *
     * @return self
     */
    public function setPollId($poll_id)
    {
        $this->container['poll_id'] = $poll_id;

        return $this;
    }

    /**
     * Gets push_notification_delivery_option
     *
     * @return string|null
     */
    public function getPushNotificationDeliveryOption()
    {
        return $this->container['push_notification_delivery_option'];
    }

    /**
     * Sets push_notification_delivery_option
     *
     * @param string|null $push_notification_delivery_option push_notification_delivery_option
     *
     * @return self
     */
    public function setPushNotificationDeliveryOption($push_notification_delivery_option)
    {
        $allowedValues = $this->getPushNotificationDeliveryOptionAllowableValues();
        if (!is_null($push_notification_delivery_option) && !in_array($push_notification_delivery_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'push_notification_delivery_option', must be one of '%s'",
                    $push_notification_delivery_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['push_notification_delivery_option'] = $push_notification_delivery_option;

        return $this;
    }

    /**
     * Gets target_languages
     *
     * @return string[]|null
     */
    public function getTargetLanguages()
    {
        return $this->container['target_languages'];
    }

    /**
     * Sets target_languages
     *
     * @param string[]|null $target_languages target_languages
     *
     * @return self
     */
    public function setTargetLanguages($target_languages)
    {
        $this->container['target_languages'] = $target_languages;

        return $this;
    }

    /**
     * Gets translation_target_languages
     *
     * @return string[]|null
     */
    public function getTranslationTargetLanguages()
    {
        return $this->container['translation_target_languages'];
    }

    /**
     * Sets translation_target_languages
     *
     * @param string[]|null $translation_target_languages translation_target_languages
     *
     * @return self
     */
    public function setTranslationTargetLanguages($translation_target_languages)
    {
        $this->container['translation_target_languages'] = $translation_target_languages;

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


