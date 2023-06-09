<?php
/**
 * UpdateProject
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
 * UpdateProject Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UpdateProject';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'description' => 'string',
        'archived' => 'bool',
        'daysToThermometer' => 'int',
        'color' => 'string',
        'name' => 'string',
        'followerIds' => 'string[]',
        'showThermometer' => 'bool',
        'teamId' => 'int',
        'abbreviation' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'description' => null,
        'archived' => null,
        'daysToThermometer' => 'int64',
        'color' => 'css-color',
        'name' => null,
        'followerIds' => 'uuid',
        'showThermometer' => null,
        'teamId' => 'int64',
        'abbreviation' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'archived' => 'archived',
        'daysToThermometer' => 'days_to_thermometer',
        'color' => 'color',
        'name' => 'name',
        'followerIds' => 'follower_ids',
        'showThermometer' => 'show_thermometer',
        'teamId' => 'team_id',
        'abbreviation' => 'abbreviation'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'archived' => 'setArchived',
        'daysToThermometer' => 'setDaysToThermometer',
        'color' => 'setColor',
        'name' => 'setName',
        'followerIds' => 'setFollowerIds',
        'showThermometer' => 'setShowThermometer',
        'teamId' => 'setTeamId',
        'abbreviation' => 'setAbbreviation'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'archived' => 'getArchived',
        'daysToThermometer' => 'getDaysToThermometer',
        'color' => 'getColor',
        'name' => 'getName',
        'followerIds' => 'getFollowerIds',
        'showThermometer' => 'getShowThermometer',
        'teamId' => 'getTeamId',
        'abbreviation' => 'getAbbreviation'];
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
        $this->container['daysToThermometer'] = isset($data['daysToThermometer']) ? $data['daysToThermometer'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['followerIds'] = isset($data['followerIds']) ? $data['followerIds'] : null;
        $this->container['showThermometer'] = isset($data['showThermometer']) ? $data['showThermometer'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
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
     * @param string $description The Project's description.
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
     * @param bool $archived A true/false boolean indicating whether the Story is in archived state.
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets daysToThermometer
     *
     * @return int
     */
    public function getDaysToThermometer()
    {
        return $this->container['daysToThermometer'];
    }

    /**
     * Sets daysToThermometer
     *
     * @param int $daysToThermometer The number of days before the thermometer appears in the Story summary.
     *
     * @return $this
     */
    public function setDaysToThermometer($daysToThermometer)
    {
        $this->container['daysToThermometer'] = $daysToThermometer;

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
     * @param string $color The color that represents the Project in the UI.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param string $name The Project's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets followerIds
     *
     * @return string[]
     */
    public function getFollowerIds()
    {
        return $this->container['followerIds'];
    }

    /**
     * Sets followerIds
     *
     * @param string[] $followerIds An array of UUIDs for any Members you want to add as Followers.
     *
     * @return $this
     */
    public function setFollowerIds($followerIds)
    {
        $this->container['followerIds'] = $followerIds;

        return $this;
    }

    /**
     * Gets showThermometer
     *
     * @return bool
     */
    public function getShowThermometer()
    {
        return $this->container['showThermometer'];
    }

    /**
     * Sets showThermometer
     *
     * @param bool $showThermometer Configuration to enable or disable thermometers in the Story summary.
     *
     * @return $this
     */
    public function setShowThermometer($showThermometer)
    {
        $this->container['showThermometer'] = $showThermometer;

        return $this;
    }

    /**
     * Gets teamId
     *
     * @return int
     */
    public function getTeamId()
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     *
     * @param int $teamId The ID of the team the project belongs to.
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     *
     * @param string $abbreviation The Project abbreviation used in Story summaries. Should be kept to 3 characters at most.
     *
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

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
