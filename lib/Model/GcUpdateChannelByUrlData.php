<?php
/**
 * GcUpdateChannelByUrlData
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
 * GcUpdateChannelByUrlData Class Doc Comment
 *
 * @category Class
 * @package  Sendbird
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GcUpdateChannelByUrlData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'gcUpdateChannelByUrlData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel_url' => 'string',
        'name' => 'string',
        'cover_url' => 'string',
        'cover_file' => '\SplFileObject',
        'custom_type' => 'string',
        'data' => 'string',
        'is_distinct' => 'bool',
        'is_public' => 'bool',
        'access_code' => 'string',
        'operator_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel_url' => null,
        'name' => null,
        'cover_url' => null,
        'cover_file' => 'binary',
        'custom_type' => null,
        'data' => null,
        'is_distinct' => null,
        'is_public' => null,
        'access_code' => null,
        'operator_ids' => null
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
        'channel_url' => 'channel_url',
        'name' => 'name',
        'cover_url' => 'cover_url',
        'cover_file' => 'cover_file',
        'custom_type' => 'custom_type',
        'data' => 'data',
        'is_distinct' => 'is_distinct',
        'is_public' => 'is_public',
        'access_code' => 'access_code',
        'operator_ids' => 'operator_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_url' => 'setChannelUrl',
        'name' => 'setName',
        'cover_url' => 'setCoverUrl',
        'cover_file' => 'setCoverFile',
        'custom_type' => 'setCustomType',
        'data' => 'setData',
        'is_distinct' => 'setIsDistinct',
        'is_public' => 'setIsPublic',
        'access_code' => 'setAccessCode',
        'operator_ids' => 'setOperatorIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_url' => 'getChannelUrl',
        'name' => 'getName',
        'cover_url' => 'getCoverUrl',
        'cover_file' => 'getCoverFile',
        'custom_type' => 'getCustomType',
        'data' => 'getData',
        'is_distinct' => 'getIsDistinct',
        'is_public' => 'getIsPublic',
        'access_code' => 'getAccessCode',
        'operator_ids' => 'getOperatorIds'
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
        $this->container['channel_url'] = $data['channel_url'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['cover_url'] = $data['cover_url'] ?? null;
        $this->container['cover_file'] = $data['cover_file'] ?? null;
        $this->container['custom_type'] = $data['custom_type'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['is_distinct'] = $data['is_distinct'] ?? null;
        $this->container['is_public'] = $data['is_public'] ?? null;
        $this->container['access_code'] = $data['access_code'] ?? null;
        $this->container['operator_ids'] = $data['operator_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['channel_url'] === null) {
            $invalidProperties[] = "'channel_url' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['cover_url'] === null) {
            $invalidProperties[] = "'cover_url' can't be null";
        }
        if ($this->container['cover_file'] === null) {
            $invalidProperties[] = "'cover_file' can't be null";
        }
        if ($this->container['custom_type'] === null) {
            $invalidProperties[] = "'custom_type' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['is_distinct'] === null) {
            $invalidProperties[] = "'is_distinct' can't be null";
        }
        if ($this->container['is_public'] === null) {
            $invalidProperties[] = "'is_public' can't be null";
        }
        if ($this->container['access_code'] === null) {
            $invalidProperties[] = "'access_code' can't be null";
        }
        if ($this->container['operator_ids'] === null) {
            $invalidProperties[] = "'operator_ids' can't be null";
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
     * Gets channel_url
     *
     * @return string
     */
    public function getChannelUrl()
    {
        return $this->container['channel_url'];
    }

    /**
     * Sets channel_url
     *
     * @param string $channel_url Specifies the URL of the channel to update.
     *
     * @return self
     */
    public function setChannelUrl($channel_url)
    {
        $this->container['channel_url'] = $channel_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Specifies the name of the channel, or the channel topic. The length is limited to 191 characters.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cover_url
     *
     * @return string
     */
    public function getCoverUrl()
    {
        return $this->container['cover_url'];
    }

    /**
     * Sets cover_url
     *
     * @param string $cover_url Specifies the unique URL of the cover image. The length is limited to 2,048 characters.
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
     * @return \SplFileObject
     */
    public function getCoverFile()
    {
        return $this->container['cover_file'];
    }

    /**
     * Sets cover_file
     *
     * @param \SplFileObject $cover_file Uploads the cover image file for the channel.
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
     * @return string
     */
    public function getCustomType()
    {
        return $this->container['custom_type'];
    }

    /**
     * Sets custom_type
     *
     * @param string $custom_type Specifies the custom channel type which is used for channel grouping. The length is limited to 128 characters.<br /><br /> Custom types are also used within Sendbird's [Advanced analytics](/docs/chat/v3/platform-api/guides/advanced-analytics) to segment metrics, which enables the sub-classification of data views.
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
     * @return string
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string $data Specifies additional channel information such as a long description of the channel or `JSON` formatted string.
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
     * @return bool
     */
    public function getIsDistinct()
    {
        return $this->container['is_distinct'];
    }

    /**
     * Sets is_distinct
     *
     * @param bool $is_distinct Determines whether to reuse an existing channel or create a new channel. If set to true, returns a channel with the current channel members users or creates a new channel if no match is found. Sendbird server can also use the custom channel type in the custom_type property if specified along with the users to return the corresponding channel. If set to false, Sendbird server always creates a new channel with a combination of the users as well as the channel custom type if specified. (Default: false)<br /><br /> Under this property, Sendbird server does not distinguish channels based on other properties such as channel URL or channel name.
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
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public Determines whether to allow a user to join the channel without an invitation. (Default: false)
     *
     * @return self
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets access_code
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->container['access_code'];
    }

    /**
     * Sets access_code
     *
     * @param string $access_code This property can be used only when the channel operator wants to set an access code for a public group channel. If specified, the is_access_code_required property of the channel resource is then set to true, and the channel begins to require the specified access code to a user who attempts to join.
     *
     * @return self
     */
    public function setAccessCode($access_code)
    {
        $this->container['access_code'] = $access_code;

        return $this;
    }

    /**
     * Gets operator_ids
     *
     * @return int[]
     */
    public function getOperatorIds()
    {
        return $this->container['operator_ids'];
    }

    /**
     * Sets operator_ids
     *
     * @param int[] $operator_ids Specifies an array of one or more IDs of users to register as operators of the channel. If the operators are not members of the channel yet, they need an [invitation](#2-invite-as-members) to [join](#2-join-a-channel) a privte group channel while they don't need any to join a [public](#-3-private-vs-public) group channel. The maximum allowed number of operators per channel is 100.
     *
     * @return self
     */
    public function setOperatorIds($operator_ids)
    {
        $this->container['operator_ids'] = $operator_ids;

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

