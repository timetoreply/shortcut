<?php
/**
 * CreateStoryCommentParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shortcut API
 *
 * Shortcut API
 *
 * OpenAPI spec version: 3.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.43-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Timetoreply\Shortcut\Model;

use ArrayAccess;
use DateTime;
use ReturnTypeWillChange;
use Timetoreply\Shortcut\ObjectSerializer;

/**
 * CreateStoryCommentParams Class Doc Comment
 *
 * @category Class
 * @description Request parameters for creating a Comment on a Shortcut Story.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateStoryCommentParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateStoryCommentParams';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'text' => 'string',
        'authorId' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'externalId' => 'string',
        'parentId' => 'int',
        'blocker' => 'bool',
        'unblocksParent' => 'bool'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'text' => null,
        'authorId' => 'uuid',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'externalId' => null,
        'parentId' => 'int64',
        'blocker' => null,
        'unblocksParent' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'text',
        'authorId' => 'author_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'externalId' => 'external_id',
        'parentId' => 'parent_id',
        'blocker' => 'blocker',
        'unblocksParent' => 'unblocks_parent'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'authorId' => 'setAuthorId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'externalId' => 'setExternalId',
        'parentId' => 'setParentId',
        'blocker' => 'setBlocker',
        'unblocksParent' => 'setUnblocksParent'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'authorId' => 'getAuthorId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'externalId' => 'getExternalId',
        'parentId' => 'getParentId',
        'blocker' => 'getBlocker',
        'unblocksParent' => 'getUnblocksParent'];
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['blocker'] = isset($data['blocker']) ? $data['blocker'] : null;
        $this->container['unblocksParent'] = isset($data['unblocksParent']) ? $data['unblocksParent'] : null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

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
        return self::$swaggerModelName;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The comment text.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets authorId
     *
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param string $authorId The Member ID of the Comment's author. Defaults to the user identified by the API token.
     *
     * @return $this
     */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param DateTime $createdAt Defaults to the time/date the comment is created, but can be set to reflect another date.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param DateTime $updatedAt Defaults to the time/date the comment is last updated, but can be set to reflect another date.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string $externalId This field can be set to another unique ID. In the case that the comment has been imported from another tool, the ID in the other tool can be indicated here.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId The ID of the Comment that this comment is threaded under.
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

        return $this;
    }

    /**
     * Gets blocker
     *
     * @return bool
     */
    public function getBlocker()
    {
        return $this->container['blocker'];
    }

    /**
     * Sets blocker
     *
     * @param bool $blocker Marks the comment as a blocker that can be surfaced to permissions or teams mentioned in the comment. Can only be used on a top-level comment.
     *
     * @return $this
     */
    public function setBlocker($blocker)
    {
        $this->container['blocker'] = $blocker;

        return $this;
    }

    /**
     * Gets unblocksParent
     *
     * @return bool
     */
    public function getUnblocksParent()
    {
        return $this->container['unblocksParent'];
    }

    /**
     * Sets unblocksParent
     *
     * @param bool $unblocksParent Marks the comment as an unblocker to its  blocker parent. Can only be set on a threaded comment who has a parent with `blocker` set.
     *
     * @return $this
     */
    public function setUnblocksParent($unblocksParent)
    {
        $this->container['unblocksParent'] = $unblocksParent;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}