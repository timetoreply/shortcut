<?php
/**
 * UpdateStoryLink
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
 * UpdateStoryLink Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateStoryLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    const VERB_BLOCKS = 'blocks';
    const VERB_DUPLICATES = 'duplicates';
    const VERB_RELATES_TO = 'relates to';
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UpdateStoryLink';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'verb' => 'string',
        'subjectId' => 'int',
        'objectId' => 'int'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'verb' => null,
        'subjectId' => 'int64',
        'objectId' => 'int64'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'verb' => 'verb',
        'subjectId' => 'subject_id',
        'objectId' => 'object_id'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verb' => 'setVerb',
        'subjectId' => 'setSubjectId',
        'objectId' => 'setObjectId'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verb' => 'getVerb',
        'subjectId' => 'getSubjectId',
        'objectId' => 'getObjectId'];
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
        $this->container['verb'] = isset($data['verb']) ? $data['verb'] : null;
        $this->container['subjectId'] = isset($data['subjectId']) ? $data['subjectId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
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

        $allowedValues = $this->getVerbAllowableValues();
        if (!is_null($this->container['verb']) && !in_array($this->container['verb'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verb', must be one of '%s'",
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
    public function getVerbAllowableValues()
    {
        return [
            self::VERB_BLOCKS,
            self::VERB_DUPLICATES,
            self::VERB_RELATES_TO,];
    }

    /**
     * Gets verb
     *
     * @return string
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param string $verb The type of link.
     *
     * @return $this
     */
    public function setVerb($verb)
    {
        $allowedValues = $this->getVerbAllowableValues();
        if (!is_null($verb) && !in_array($verb, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'verb', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets subjectId
     *
     * @return int
     */
    public function getSubjectId()
    {
        return $this->container['subjectId'];
    }

    /**
     * Sets subjectId
     *
     * @param int $subjectId The ID of the subject Story.
     *
     * @return $this
     */
    public function setSubjectId($subjectId)
    {
        $this->container['subjectId'] = $subjectId;

        return $this;
    }

    /**
     * Gets objectId
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
     * Sets objectId
     *
     * @param int $objectId The ID of the object Story.
     *
     * @return $this
     */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;

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
