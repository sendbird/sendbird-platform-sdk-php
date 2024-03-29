<?php
/**
 * GcCreateChannelData
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
 * GcCreateChannelData Class Doc Comment
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GcCreateChannelData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'gcCreateChannelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_ids' => 'string[]',
        'users' => '\Sendbird\Model\SendBirdUser[]',
        'name' => 'string',
        'channel_url' => 'string',
        'cover_url' => 'string',
        'cover_file' => '\SplFileObject',
        'custom_type' => 'string',
        'data' => 'string',
        'is_distinct' => 'bool',
        'is_public' => 'bool',
        'is_super' => 'bool',
        'is_ephemeral' => 'bool',
        'access_code' => 'string',
        'inviter_id' => 'string',
        'strict' => 'bool',
        'invitation_status' => 'object',
        'hidden_status' => 'object',
        'operator_ids' => 'string[]',
        'block_sdk_user_channel_join' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_ids' => null,
        'users' => null,
        'name' => null,
        'channel_url' => null,
        'cover_url' => null,
        'cover_file' => 'binary',
        'custom_type' => null,
        'data' => null,
        'is_distinct' => null,
        'is_public' => null,
        'is_super' => null,
        'is_ephemeral' => null,
        'access_code' => null,
        'inviter_id' => null,
        'strict' => null,
        'invitation_status' => null,
        'hidden_status' => null,
        'operator_ids' => null,
        'block_sdk_user_channel_join' => null
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
        'user_ids' => 'user_ids',
        'users' => 'users',
        'name' => 'name',
        'channel_url' => 'channel_url',
        'cover_url' => 'cover_url',
        'cover_file' => 'cover_file',
        'custom_type' => 'custom_type',
        'data' => 'data',
        'is_distinct' => 'is_distinct',
        'is_public' => 'is_public',
        'is_super' => 'is_super',
        'is_ephemeral' => 'is_ephemeral',
        'access_code' => 'access_code',
        'inviter_id' => 'inviter_id',
        'strict' => 'strict',
        'invitation_status' => 'invitation_status',
        'hidden_status' => 'hidden_status',
        'operator_ids' => 'operator_ids',
        'block_sdk_user_channel_join' => 'block_sdk_user_channel_join'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_ids' => 'setUserIds',
        'users' => 'setUsers',
        'name' => 'setName',
        'channel_url' => 'setChannelUrl',
        'cover_url' => 'setCoverUrl',
        'cover_file' => 'setCoverFile',
        'custom_type' => 'setCustomType',
        'data' => 'setData',
        'is_distinct' => 'setIsDistinct',
        'is_public' => 'setIsPublic',
        'is_super' => 'setIsSuper',
        'is_ephemeral' => 'setIsEphemeral',
        'access_code' => 'setAccessCode',
        'inviter_id' => 'setInviterId',
        'strict' => 'setStrict',
        'invitation_status' => 'setInvitationStatus',
        'hidden_status' => 'setHiddenStatus',
        'operator_ids' => 'setOperatorIds',
        'block_sdk_user_channel_join' => 'setBlockSdkUserChannelJoin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_ids' => 'getUserIds',
        'users' => 'getUsers',
        'name' => 'getName',
        'channel_url' => 'getChannelUrl',
        'cover_url' => 'getCoverUrl',
        'cover_file' => 'getCoverFile',
        'custom_type' => 'getCustomType',
        'data' => 'getData',
        'is_distinct' => 'getIsDistinct',
        'is_public' => 'getIsPublic',
        'is_super' => 'getIsSuper',
        'is_ephemeral' => 'getIsEphemeral',
        'access_code' => 'getAccessCode',
        'inviter_id' => 'getInviterId',
        'strict' => 'getStrict',
        'invitation_status' => 'getInvitationStatus',
        'hidden_status' => 'getHiddenStatus',
        'operator_ids' => 'getOperatorIds',
        'block_sdk_user_channel_join' => 'getBlockSdkUserChannelJoin'
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
        $this->container['user_ids'] = $data['user_ids'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['channel_url'] = $data['channel_url'] ?? null;
        $this->container['cover_url'] = $data['cover_url'] ?? null;
        $this->container['cover_file'] = $data['cover_file'] ?? null;
        $this->container['custom_type'] = $data['custom_type'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['is_distinct'] = $data['is_distinct'] ?? null;
        $this->container['is_public'] = $data['is_public'] ?? null;
        $this->container['is_super'] = $data['is_super'] ?? null;
        $this->container['is_ephemeral'] = $data['is_ephemeral'] ?? null;
        $this->container['access_code'] = $data['access_code'] ?? null;
        $this->container['inviter_id'] = $data['inviter_id'] ?? null;
        $this->container['strict'] = $data['strict'] ?? null;
        $this->container['invitation_status'] = $data['invitation_status'] ?? null;
        $this->container['hidden_status'] = $data['hidden_status'] ?? null;
        $this->container['operator_ids'] = $data['operator_ids'] ?? null;
        $this->container['block_sdk_user_channel_join'] = $data['block_sdk_user_channel_join'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_ids'] === null) {
            $invalidProperties[] = "'user_ids' can't be null";
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
     * Gets user_ids
     *
     * @return string[]
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string[] $user_ids Specifies an array of one or more IDs of users to invite to the channel. The maximum number of users to be invited at once is 100. The users below and this property can be used interchangeably.
     *
     * @return self
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Sendbird\Model\SendBirdUser[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Sendbird\Model\SendBirdUser[]|null $users Specifies an array of one or more IDs of users to invite to the channel. The maximum number of users to be invited at once is 100. The user_ids above and this property can be used interchangeably.
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Specifies the name of the channel, or the channel topic. The length is limited to 191 characters. (Default: group channel)
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets channel_url
     *
     * @return string|null
     */
    public function getChannelUrl()
    {
        return $this->container['channel_url'];
    }

    /**
     * Sets channel_url
     *
     * @param string|null $channel_url Specifies the URL of the channel. Only numbers, characters, and underscores are allowed. The length is 4 to 100 characters, inclusive. If not specified, a URL is automatically generated.
     *
     * @return self
     */
    public function setChannelUrl($channel_url)
    {
        $this->container['channel_url'] = $channel_url;

        return $this;
    }

    /**
     * Gets cover_url
     *
     * @return string|null
     */
    public function getCoverUrl()
    {
        return $this->container['cover_url'];
    }

    /**
     * Sets cover_url
     *
     * @param string|null $cover_url Specifies the URL of the cover image for the channel. The length is limited to 2,048 characters.
     *
     * @return self
     */
    public function setCoverUrl($cover_url)
    {
        $this->container['cover_url'] = $cover_url;

        return $this;
    }

    /**
     * Gets cover_file
     *
     * @return \SplFileObject|null
     */
    public function getCoverFile()
    {
        return $this->container['cover_file'];
    }

    /**
     * Sets cover_file
     *
     * @param \SplFileObject|null $cover_file Uploads the cover image file for the channel.
     *
     * @return self
     */
    public function setCoverFile($cover_file)
    {
        $this->container['cover_file'] = $cover_file;

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
     * @param string|null $custom_type Specifies the custom channel type which is used for channel grouping. The length is limited to 128 characters.<br /><br /> Custom types are also used within Sendbird's [Advanced analytics](/docs/chat/v3/platform-api/guides/advanced-analytics) to segment metrics, which enables the sub-classification of data views.
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
     * @param string|null $data Specifies additional channel information such as a long description of the channel or `JSON` formatted string.
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets is_distinct
     *
     * @return bool|null
     */
    public function getIsDistinct()
    {
        return $this->container['is_distinct'];
    }

    /**
     * Sets is_distinct
     *
     * @param bool|null $is_distinct Determines whether to reuse an existing channel or create a new channel. If set to true, returns a channel with the same users in the user_ids or users property or creates a new channel if no match is found. Sendbird server can also use the custom channel type in the custom_type property if specified along with the users to return the corresponding channel. If set to false, Sendbird server always creates a new channel with a combination of the users as well as the channel custom type if specified. (Default: false)<br /><br /> Under this property, Sendbird server does not distinguish channels based on other properties such as channel URL or channel name.
     *
     * @return self
     */
    public function setIsDistinct($is_distinct)
    {
        $this->container['is_distinct'] = $is_distinct;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool|null $is_public Determines whether to allow a user to join the channel without an invitation. (Default: false)
     *
     * @return self
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets is_super
     *
     * @return bool|null
     */
    public function getIsSuper()
    {
        return $this->container['is_super'];
    }

    /**
     * Sets is_super
     *
     * @param bool|null $is_super Determines whether to allow the channel to accommodate more than 2,000 members. (Default: false) <br/><br/> Supergroup channels are not supported with the is_distinct property and the property is false by default.
     *
     * @return self
     */
    public function setIsSuper($is_super)
    {
        $this->container['is_super'] = $is_super;

        return $this;
    }

    /**
     * Gets is_ephemeral
     *
     * @return bool|null
     */
    public function getIsEphemeral()
    {
        return $this->container['is_ephemeral'];
    }

    /**
     * Sets is_ephemeral
     *
     * @param bool|null $is_ephemeral Determines whether to preserve the messages in the channel for the purpose of retrieving chat history. (Default: false)
     *
     * @return self
     */
    public function setIsEphemeral($is_ephemeral)
    {
        $this->container['is_ephemeral'] = $is_ephemeral;

        return $this;
    }

    /**
     * Gets access_code
     *
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->container['access_code'];
    }

    /**
     * Sets access_code
     *
     * @param string|null $access_code This parameter can only be used when the channel operator creates a public group channel. They can set an access code for the corresponding type of channel. The channel then requires the specified access code to a user who attempts to join. If specified, the is_access_code_required property of the channel resource is set to true.
     *
     * @return self
     */
    public function setAccessCode($access_code)
    {
        $this->container['access_code'] = $access_code;

        return $this;
    }

    /**
     * Gets inviter_id
     *
     * @return string|null
     */
    public function getInviterId()
    {
        return $this->container['inviter_id'];
    }

    /**
     * Sets inviter_id
     *
     * @param string|null $inviter_id Specifies the ID of the user who has invited other users as members of the channel. The inviter is not automatically registered to the channel as a member, so you should specify the ID of the inviter in the user_ids property below if needed.
     *
     * @return self
     */
    public function setInviterId($inviter_id)
    {
        $this->container['inviter_id'] = $inviter_id;

        return $this;
    }

    /**
     * Gets strict
     *
     * @return bool|null
     */
    public function getStrict()
    {
        return $this->container['strict'];
    }

    /**
     * Sets strict
     *
     * @param bool|null $strict Determines whether to receive a `400111` error and cease channel creation when there is at least one non-existing user in the specified user_ids or users property above. If set to false, the channel will be created excluding the non-existing users without receiving the mentioned error. (Default: false)
     *
     * @return self
     */
    public function setStrict($strict)
    {
        $this->container['strict'] = $strict;

        return $this;
    }

    /**
     * Gets invitation_status
     *
     * @return object|null
     */
    public function getInvitationStatus()
    {
        return $this->container['invitation_status'];
    }

    /**
     * Sets invitation_status
     *
     * @param object|null $invitation_status Specifies one or more key-value pair items which set the invitation status of each user invited to the channel. The key should be a user_id and the value should be their joining status. Acceptable values are joined, invited_by_friend, and invited_by_non_friend. (Default: joined)
     *
     * @return self
     */
    public function setInvitationStatus($invitation_status)
    {
        $this->container['invitation_status'] = $invitation_status;

        return $this;
    }

    /**
     * Gets hidden_status
     *
     * @return object|null
     */
    public function getHiddenStatus()
    {
        return $this->container['hidden_status'];
    }

    /**
     * Sets hidden_status
     *
     * @param object|null $hidden_status Specifies one or more key-value pair items which set the channel's hidden status for each user. The key should be a user_id and the value should be their hidden status. Acceptable values are limited to the following:<br />- unhidden (default): the channel is included in when retrieving a list of group channels.<br />- hidden_allow_auto_unhide: the channel automatically gets unhidden when receiving a new message.<br />- hidden_prevent_auto_unhide: the channel keeps hidden though receiving a new message.
     *
     * @return self
     */
    public function setHiddenStatus($hidden_status)
    {
        $this->container['hidden_status'] = $hidden_status;

        return $this;
    }

    /**
     * Gets operator_ids
     *
     * @return string[]|null
     */
    public function getOperatorIds()
    {
        return $this->container['operator_ids'];
    }

    /**
     * Sets operator_ids
     *
     * @param string[]|null $operator_ids Specifies an array of one or more IDs of users to register as operators of the channel. You should also include these IDs in the user_ids property to invite them to the channel as members. They can delete any messages in the channel, and also view all messages without any filtering or throttling. The maximum allowed number of operators per channel is 100.
     *
     * @return self
     */
    public function setOperatorIds($operator_ids)
    {
        $this->container['operator_ids'] = $operator_ids;

        return $this;
    }

    /**
     * Gets block_sdk_user_channel_join
     *
     * @return bool|null
     */
    public function getBlockSdkUserChannelJoin()
    {
        return $this->container['block_sdk_user_channel_join'];
    }

    /**
     * Sets block_sdk_user_channel_join
     *
     * @param bool|null $block_sdk_user_channel_join Determines whether to block users from joining the channel through the Chat SDK. This parameter can be used in order to restrict the ways for users to join the channel, and only using the [join a channel](#2-join-a-channel) action can add a user to the channel. (Default: false)
     *
     * @return self
     */
    public function setBlockSdkUserChannelJoin($block_sdk_user_channel_join)
    {
        $this->container['block_sdk_user_channel_join'] = $block_sdk_user_channel_join;

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


