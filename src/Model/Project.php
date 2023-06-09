<?php
/**
 * Project
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
 * Project Class Doc Comment
 *
 * @category Class
 * @description Projects typically map to teams (such as Frontend, Backend, Mobile, Devops, etc) but can represent any open-ended product, component, or initiative.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Project';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appUrl' => 'string',
        'description' => 'string',
        'archived' => 'bool',
        'entityType' => 'string',
        'daysToThermometer' => 'int',
        'color' => 'string',
        'workflowId' => 'int',
        'name' => 'string',
        'startTime' => '\DateTime',
        'updatedAt' => '\DateTime',
        'followerIds' => 'string[]',
        'externalId' => 'string',
        'id' => 'int',
        'showThermometer' => 'bool',
        'teamId' => 'int',
        'iterationLength' => 'int',
        'abbreviation' => 'string',
        'stats' => '\Timetoreply\Shortcut\Model\ProjectStats',
        'createdAt' => '\DateTime'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appUrl' => null,
        'description' => null,
        'archived' => null,
        'entityType' => null,
        'daysToThermometer' => 'int64',
        'color' => 'css-color',
        'workflowId' => 'int64',
        'name' => null,
        'startTime' => 'date-time',
        'updatedAt' => 'date-time',
        'followerIds' => 'uuid',
        'externalId' => null,
        'id' => 'int64',
        'showThermometer' => null,
        'teamId' => 'int64',
        'iterationLength' => 'int64',
        'abbreviation' => null,
        'stats' => null,
        'createdAt' => 'date-time'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'appUrl' => 'app_url',
        'description' => 'description',
        'archived' => 'archived',
        'entityType' => 'entity_type',
        'daysToThermometer' => 'days_to_thermometer',
        'color' => 'color',
        'workflowId' => 'workflow_id',
        'name' => 'name',
        'startTime' => 'start_time',
        'updatedAt' => 'updated_at',
        'followerIds' => 'follower_ids',
        'externalId' => 'external_id',
        'id' => 'id',
        'showThermometer' => 'show_thermometer',
        'teamId' => 'team_id',
        'iterationLength' => 'iteration_length',
        'abbreviation' => 'abbreviation',
        'stats' => 'stats',
        'createdAt' => 'created_at'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appUrl' => 'setAppUrl',
        'description' => 'setDescription',
        'archived' => 'setArchived',
        'entityType' => 'setEntityType',
        'daysToThermometer' => 'setDaysToThermometer',
        'color' => 'setColor',
        'workflowId' => 'setWorkflowId',
        'name' => 'setName',
        'startTime' => 'setStartTime',
        'updatedAt' => 'setUpdatedAt',
        'followerIds' => 'setFollowerIds',
        'externalId' => 'setExternalId',
        'id' => 'setId',
        'showThermometer' => 'setShowThermometer',
        'teamId' => 'setTeamId',
        'iterationLength' => 'setIterationLength',
        'abbreviation' => 'setAbbreviation',
        'stats' => 'setStats',
        'createdAt' => 'setCreatedAt'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appUrl' => 'getAppUrl',
        'description' => 'getDescription',
        'archived' => 'getArchived',
        'entityType' => 'getEntityType',
        'daysToThermometer' => 'getDaysToThermometer',
        'color' => 'getColor',
        'workflowId' => 'getWorkflowId',
        'name' => 'getName',
        'startTime' => 'getStartTime',
        'updatedAt' => 'getUpdatedAt',
        'followerIds' => 'getFollowerIds',
        'externalId' => 'getExternalId',
        'id' => 'getId',
        'showThermometer' => 'getShowThermometer',
        'teamId' => 'getTeamId',
        'iterationLength' => 'getIterationLength',
        'abbreviation' => 'getAbbreviation',
        'stats' => 'getStats',
        'createdAt' => 'getCreatedAt'];
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
        $this->container['appUrl'] = isset($data['appUrl']) ? $data['appUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['daysToThermometer'] = isset($data['daysToThermometer']) ? $data['daysToThermometer'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['followerIds'] = isset($data['followerIds']) ? $data['followerIds'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['showThermometer'] = isset($data['showThermometer']) ? $data['showThermometer'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['iterationLength'] = isset($data['iterationLength']) ? $data['iterationLength'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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

        if ($this->container['appUrl'] === null) {
            $invalidProperties[] = "'appUrl' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['daysToThermometer'] === null) {
            $invalidProperties[] = "'daysToThermometer' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['workflowId'] === null) {
            $invalidProperties[] = "'workflowId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['followerIds'] === null) {
            $invalidProperties[] = "'followerIds' can't be null";
        }
        if ($this->container['externalId'] === null) {
            $invalidProperties[] = "'externalId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['showThermometer'] === null) {
            $invalidProperties[] = "'showThermometer' can't be null";
        }
        if ($this->container['teamId'] === null) {
            $invalidProperties[] = "'teamId' can't be null";
        }
        if ($this->container['iterationLength'] === null) {
            $invalidProperties[] = "'iterationLength' can't be null";
        }
        if ($this->container['abbreviation'] === null) {
            $invalidProperties[] = "'abbreviation' can't be null";
        }
        if ($this->container['stats'] === null) {
            $invalidProperties[] = "'stats' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets appUrl
     *
     * @return string
     */
    public function getAppUrl()
    {
        return $this->container['appUrl'];
    }

    /**
     * Sets appUrl
     *
     * @param string $appUrl The Shortcut application url for the Project.
     *
     * @return $this
     */
    public function setAppUrl($appUrl)
    {
        $this->container['appUrl'] = $appUrl;

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
     * @param string $description The description of the Project.
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
     * @param bool $archived True/false boolean indicating whether the Project is in an Archived state.
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
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
     * @param string $color The color associated with the Project in the Shortcut member interface.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets workflowId
     *
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
     * Sets workflowId
     *
     * @param int $workflowId The ID of the workflow the project belongs to.
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;

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
     * @param string $name The name of the Project
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param DateTime $startTime The date at which the Project was started.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param DateTime $updatedAt The time/date that the Project was last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @param string[] $followerIds An array of UUIDs for any Members listed as Followers.
     *
     * @return $this
     */
    public function setFollowerIds($followerIds)
    {
        $this->container['followerIds'] = $followerIds;

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
     * @param string $externalId This field can be set to another unique ID. In the case that the Project has been imported from another tool, the ID in the other tool can be indicated here.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

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
     * @param int $id The unique ID of the Project.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets iterationLength
     *
     * @return int
     */
    public function getIterationLength()
    {
        return $this->container['iterationLength'];
    }

    /**
     * Sets iterationLength
     *
     * @param int $iterationLength The number of weeks per iteration in this Project.
     *
     * @return $this
     */
    public function setIterationLength($iterationLength)
    {
        $this->container['iterationLength'] = $iterationLength;

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
     * Gets stats
     *
     * @return ProjectStats
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param ProjectStats $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

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
     * @param DateTime $createdAt The time/date that the Project was created.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

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
