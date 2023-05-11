<?php
/**
 * UpdateGroup
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
use InvalidArgumentException;
use ReturnTypeWillChange;
use Timetoreply\Shortcut\ObjectSerializer;

/**
 * UpdateGroup Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    const COLOR_KEY_BLUE = 'blue';
    const COLOR_KEY_PURPLE = 'purple';
    const COLOR_KEY_MIDNIGHT_BLUE = 'midnight-blue';
    const COLOR_KEY_ORANGE = 'orange';
    const COLOR_KEY_YELLOW_GREEN = 'yellow-green';
    const COLOR_KEY_BRASS = 'brass';
    const COLOR_KEY_GRAY = 'gray';
    const COLOR_KEY_FUCHSIA = 'fuchsia';
    const COLOR_KEY_YELLOW = 'yellow';
    const COLOR_KEY_PINK = 'pink';
    const COLOR_KEY_SKY_BLUE = 'sky-blue';
    const COLOR_KEY_GREEN = 'green';
    const COLOR_KEY_RED = 'red';
    const COLOR_KEY_BLACK = 'black';
    const COLOR_KEY_SLATE = 'slate';
    const COLOR_KEY_TURQUOISE = 'turquoise';
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UpdateGroup';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'description' => 'string',
        'archived' => 'bool',
        'color' => 'string',
        'displayIconId' => 'string',
        'mentionName' => 'string',
        'name' => 'string',
        'colorKey' => 'string',
        'memberIds' => 'string[]',
        'workflowIds' => 'int[]'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'description' => null,
        'archived' => null,
        'color' => 'css-color',
        'displayIconId' => 'uuid',
        'mentionName' => null,
        'name' => null,
        'colorKey' => null,
        'memberIds' => 'uuid',
        'workflowIds' => 'int64'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'archived' => 'archived',
        'color' => 'color',
        'displayIconId' => 'display_icon_id',
        'mentionName' => 'mention_name',
        'name' => 'name',
        'colorKey' => 'color_key',
        'memberIds' => 'member_ids',
        'workflowIds' => 'workflow_ids'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'archived' => 'setArchived',
        'color' => 'setColor',
        'displayIconId' => 'setDisplayIconId',
        'mentionName' => 'setMentionName',
        'name' => 'setName',
        'colorKey' => 'setColorKey',
        'memberIds' => 'setMemberIds',
        'workflowIds' => 'setWorkflowIds'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'archived' => 'getArchived',
        'color' => 'getColor',
        'displayIconId' => 'getDisplayIconId',
        'mentionName' => 'getMentionName',
        'name' => 'getName',
        'colorKey' => 'getColorKey',
        'memberIds' => 'getMemberIds',
        'workflowIds' => 'getWorkflowIds'];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['displayIconId'] = isset($data['displayIconId']) ? $data['displayIconId'] : null;
        $this->container['mentionName'] = isset($data['mentionName']) ? $data['mentionName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['colorKey'] = isset($data['colorKey']) ? $data['colorKey'] : null;
        $this->container['memberIds'] = isset($data['memberIds']) ? $data['memberIds'] : null;
        $this->container['workflowIds'] = isset($data['workflowIds']) ? $data['workflowIds'] : null;
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

        $allowedValues = $this->getColorKeyAllowableValues();
        if (!is_null($this->container['colorKey']) && !in_array($this->container['colorKey'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'colorKey', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorKeyAllowableValues()
    {
        return [
            self::COLOR_KEY_BLUE,
            self::COLOR_KEY_PURPLE,
            self::COLOR_KEY_MIDNIGHT_BLUE,
            self::COLOR_KEY_ORANGE,
            self::COLOR_KEY_YELLOW_GREEN,
            self::COLOR_KEY_BRASS,
            self::COLOR_KEY_GRAY,
            self::COLOR_KEY_FUCHSIA,
            self::COLOR_KEY_YELLOW,
            self::COLOR_KEY_PINK,
            self::COLOR_KEY_SKY_BLUE,
            self::COLOR_KEY_GREEN,
            self::COLOR_KEY_RED,
            self::COLOR_KEY_BLACK,
            self::COLOR_KEY_SLATE,
            self::COLOR_KEY_TURQUOISE,];
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of this Group.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived Whether or not this Group is archived.
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color The color you wish to use for the Group in the system.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets displayIconId
     *
     * @return string
     */
    public function getDisplayIconId()
    {
        return $this->container['displayIconId'];
    }

    /**
     * Sets displayIconId
     *
     * @param string $displayIconId The Icon id for the avatar of this Group.
     *
     * @return $this
     */
    public function setDisplayIconId($displayIconId)
    {
        $this->container['displayIconId'] = $displayIconId;

        return $this;
    }

    /**
     * Gets mentionName
     *
     * @return string
     */
    public function getMentionName()
    {
        return $this->container['mentionName'];
    }

    /**
     * Sets mentionName
     *
     * @param string $mentionName The mention name of this Group.
     *
     * @return $this
     */
    public function setMentionName($mentionName)
    {
        $this->container['mentionName'] = $mentionName;

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
     * @param string $name The name of this Group.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets colorKey
     *
     * @return string
     */
    public function getColorKey()
    {
        return $this->container['colorKey'];
    }

    /**
     * Sets colorKey
     *
     * @param string $colorKey The color key you wish to use for the Group in the system.
     *
     * @return $this
     */
    public function setColorKey($colorKey)
    {
        $allowedValues = $this->getColorKeyAllowableValues();
        if (!is_null($colorKey) && !in_array($colorKey, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'colorKey', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['colorKey'] = $colorKey;

        return $this;
    }

    /**
     * Gets memberIds
     *
     * @return string[]
     */
    public function getMemberIds()
    {
        return $this->container['memberIds'];
    }

    /**
     * Sets memberIds
     *
     * @param string[] $memberIds The Member ids to add to this Group.
     *
     * @return $this
     */
    public function setMemberIds($memberIds)
    {
        $this->container['memberIds'] = $memberIds;

        return $this;
    }

    /**
     * Gets workflowIds
     *
     * @return int[]
     */
    public function getWorkflowIds()
    {
        return $this->container['workflowIds'];
    }

    /**
     * Sets workflowIds
     *
     * @param int[] $workflowIds The Workflow ids to add to the Group.
     *
     * @return $this
     */
    public function setWorkflowIds($workflowIds)
    {
        $this->container['workflowIds'] = $workflowIds;

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
