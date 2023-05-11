<?php
/**
 * EpicWorkflow
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
 * EpicWorkflow Class Doc Comment
 *
 * @category Class
 * @description Epic Workflow is the array of defined Epic States. Epic Workflow can be queried using the API but must be updated in the Shortcut UI.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EpicWorkflow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'EpicWorkflow';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'entityType' => 'string',
        'id' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'defaultEpicStateId' => 'int',
        'epicStates' => '\Timetoreply\Shortcut\Model\EpicState[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'entityType' => null,
        'id' => 'int64',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'defaultEpicStateId' => 'int64',
        'epicStates' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'entityType' => 'entity_type',
        'id' => 'id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'defaultEpicStateId' => 'default_epic_state_id',
        'epicStates' => 'epic_states'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entityType' => 'setEntityType',
        'id' => 'setId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'defaultEpicStateId' => 'setDefaultEpicStateId',
        'epicStates' => 'setEpicStates'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entityType' => 'getEntityType',
        'id' => 'getId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'defaultEpicStateId' => 'getDefaultEpicStateId',
        'epicStates' => 'getEpicStates'];
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
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['defaultEpicStateId'] = isset($data['defaultEpicStateId']) ? $data['defaultEpicStateId'] : null;
        $this->container['epicStates'] = isset($data['epicStates']) ? $data['epicStates'] : null;
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

        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['defaultEpicStateId'] === null) {
            $invalidProperties[] = "'defaultEpicStateId' can't be null";
        }
        if ($this->container['epicStates'] === null) {
            $invalidProperties[] = "'epicStates' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string $entityType A string description of this resource.
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique ID of the Epic Workflow.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param DateTime $createdAt The date the Epic Workflow was created.
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
     * @param DateTime $updatedAt The date the Epic Workflow was updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets defaultEpicStateId
     *
     * @return int
     */
    public function getDefaultEpicStateId()
    {
        return $this->container['defaultEpicStateId'];
    }

    /**
     * Sets defaultEpicStateId
     *
     * @param int $defaultEpicStateId The unique ID of the default Epic State that new Epics are assigned by default.
     *
     * @return $this
     */
    public function setDefaultEpicStateId($defaultEpicStateId)
    {
        $this->container['defaultEpicStateId'] = $defaultEpicStateId;

        return $this;
    }

    /**
     * Gets epicStates
     *
     * @return EpicState[]
     */
    public function getEpicStates()
    {
        return $this->container['epicStates'];
    }

    /**
     * Sets epicStates
     *
     * @param EpicState[] $epicStates A map of the Epic States in this Epic Workflow.
     *
     * @return $this
     */
    public function setEpicStates($epicStates)
    {
        $this->container['epicStates'] = $epicStates;

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
