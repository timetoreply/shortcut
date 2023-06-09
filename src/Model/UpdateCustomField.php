<?php
/**
 * UpdateCustomField
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
use ReturnTypeWillChange;
use Timetoreply\Shortcut\ObjectSerializer;

/**
 * UpdateCustomField Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateCustomField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UpdateCustomField';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'name' => 'string',
        'values' => '\Timetoreply\Shortcut\Model\UpdateCustomFieldEnumValue[]',
        'iconSetIdentifier' => 'string',
        'description' => 'string',
        'beforeId' => 'string',
        'afterId' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'enabled' => null,
        'name' => null,
        'values' => null,
        'iconSetIdentifier' => null,
        'description' => null,
        'beforeId' => 'uuid',
        'afterId' => 'uuid'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'enabled' => 'enabled',
        'name' => 'name',
        'values' => 'values',
        'iconSetIdentifier' => 'icon_set_identifier',
        'description' => 'description',
        'beforeId' => 'before_id',
        'afterId' => 'after_id'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'name' => 'setName',
        'values' => 'setValues',
        'iconSetIdentifier' => 'setIconSetIdentifier',
        'description' => 'setDescription',
        'beforeId' => 'setBeforeId',
        'afterId' => 'setAfterId'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'name' => 'getName',
        'values' => 'getValues',
        'iconSetIdentifier' => 'getIconSetIdentifier',
        'description' => 'getDescription',
        'beforeId' => 'getBeforeId',
        'afterId' => 'getAfterId'];
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['iconSetIdentifier'] = isset($data['iconSetIdentifier']) ? $data['iconSetIdentifier'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['beforeId'] = isset($data['beforeId']) ? $data['beforeId'] : null;
        $this->container['afterId'] = isset($data['afterId']) ? $data['afterId'] : null;
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

        return $invalidProperties;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Indicates whether the Field is enabled for the Workspace. Only enabled fields can be applied to Stories.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param string $name A collection of objects representing reporting periods for years.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets values
     *
     * @return UpdateCustomFieldEnumValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param UpdateCustomFieldEnumValue[] $values A collection of EnumValue objects representing the values in the domain of some Custom Field.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets iconSetIdentifier
     *
     * @return string
     */
    public function getIconSetIdentifier()
    {
        return $this->container['iconSetIdentifier'];
    }

    /**
     * Sets iconSetIdentifier
     *
     * @param string $iconSetIdentifier A frontend-controlled string that represents the icon for this custom field.
     *
     * @return $this
     */
    public function setIconSetIdentifier($iconSetIdentifier)
    {
        $this->container['iconSetIdentifier'] = $iconSetIdentifier;

        return $this;
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
     * @param string $description A description of the purpose of this field.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets beforeId
     *
     * @return string
     */
    public function getBeforeId()
    {
        return $this->container['beforeId'];
    }

    /**
     * Sets beforeId
     *
     * @param string $beforeId The ID of the CustomField we want to move this CustomField before.
     *
     * @return $this
     */
    public function setBeforeId($beforeId)
    {
        $this->container['beforeId'] = $beforeId;

        return $this;
    }

    /**
     * Gets afterId
     *
     * @return string
     */
    public function getAfterId()
    {
        return $this->container['afterId'];
    }

    /**
     * Sets afterId
     *
     * @param string $afterId The ID of the CustomField we want to move this CustomField after.
     *
     * @return $this
     */
    public function setAfterId($afterId)
    {
        $this->container['afterId'] = $afterId;

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
