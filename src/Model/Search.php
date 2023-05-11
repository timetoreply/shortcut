<?php
/**
 * Search
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
 * Search Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Search implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    const DETAIL_FULL = 'full';
    const DETAIL_SLIM = 'slim';
    const MODEL_INCLUDE_CURSORS = 'cursors';
    const ENTITY_TYPES_STORY = 'story';
    const ENTITY_TYPES_MILESTONE = 'milestone';
    const ENTITY_TYPES_EPIC = 'epic';
    const ENTITY_TYPES_ITERATION = 'iteration';
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Search';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'query' => 'string',
        'pageSize' => 'int',
        'detail' => 'string',
        'next' => 'string',
        'include' => 'string',
        'entityTypes' => 'string[]'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'query' => null,
        'pageSize' => 'int64',
        'detail' => null,
        'next' => null,
        'include' => null,
        'entityTypes' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'query' => 'query',
        'pageSize' => 'page_size',
        'detail' => 'detail',
        'next' => 'next',
        'include' => 'include',
        'entityTypes' => 'entity_types'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'pageSize' => 'setPageSize',
        'detail' => 'setDetail',
        'next' => 'setNext',
        'include' => 'setInclude',
        'entityTypes' => 'setEntityTypes'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'pageSize' => 'getPageSize',
        'detail' => 'getDetail',
        'next' => 'getNext',
        'include' => 'getInclude',
        'entityTypes' => 'getEntityTypes'];
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['entityTypes'] = isset($data['entityTypes']) ? $data['entityTypes'] : null;
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

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        $allowedValues = $this->getDetailAllowableValues();
        if (!is_null($this->container['detail']) && !in_array($this->container['detail'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'detail', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIncludeAllowableValues();
        if (!is_null($this->container['include']) && !in_array($this->container['include'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'include', must be one of '%s'",
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
    public function getDetailAllowableValues()
    {
        return [
            self::DETAIL_FULL,
            self::DETAIL_SLIM,];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncludeAllowableValues()
    {
        return [
            self::MODEL_INCLUDE_CURSORS,];
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query See our help center article on [search operators](https://help.shortcut.com/hc/en-us/articles/360000046646-Search-Operators)
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize The number of search results to include in a page. Minimum of 1 and maximum of 25.
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail The amount of detail included in each result item.    \"full\" will include all descriptions and comments and more fields on    related items such as pull requests, branches and tasks.    \"slim\" omits larger fulltext fields such as descriptions and comments    and only references related items by id.    The default is \"full\".
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $allowedValues = $this->getDetailAllowableValues();
        if (!is_null($detail) && !in_array($detail, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'detail', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string $next The next page token.
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets include
     *
     * @return string
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param string $include include
     *
     * @return $this
     */
    public function setInclude($include)
    {
        $allowedValues = $this->getIncludeAllowableValues();
        if (!is_null($include) && !in_array($include, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'include', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets entityTypes
     *
     * @return string[]
     */
    public function getEntityTypes()
    {
        return $this->container['entityTypes'];
    }

    /**
     * Sets entityTypes
     *
     * @param string[] $entityTypes A collection of entity_types to search. Defaults to story and epic. Supports: epic, iteration, milestone, story.
     *
     * @return $this
     */
    public function setEntityTypes($entityTypes)
    {
        $allowedValues = $this->getEntityTypesAllowableValues();
        if (!is_null($entityTypes) && array_diff($entityTypes, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entityTypes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entityTypes'] = $entityTypes;

        return $this;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityTypesAllowableValues()
    {
        return [
            self::ENTITY_TYPES_STORY,
            self::ENTITY_TYPES_MILESTONE,
            self::ENTITY_TYPES_EPIC,
            self::ENTITY_TYPES_ITERATION,];
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