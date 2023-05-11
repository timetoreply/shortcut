<?php
/**
 * CreateEpic
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
use InvalidArgumentException;
use ReturnTypeWillChange;
use Timetoreply\Shortcut\ObjectSerializer;

/**
 * CreateEpic Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateEpic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    const STATE_IN_PROGRESS = 'in progress';
    const STATE_TO_DO = 'to do';
    const STATE_DONE = 'done';
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateEpic';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'description' => 'string',
        'labels' => '\Timetoreply\Shortcut\Model\CreateLabelParams[]',
        'completedAtOverride' => '\DateTime',
        'name' => 'string',
        'plannedStartDate' => '\DateTime',
        'state' => 'string',
        'milestoneId' => 'int',
        'requestedById' => 'string',
        'epicStateId' => 'int',
        'startedAtOverride' => '\DateTime',
        'groupId' => 'string',
        'updatedAt' => '\DateTime',
        'followerIds' => 'string[]',
        'ownerIds' => 'string[]',
        'externalId' => 'string',
        'deadline' => '\DateTime',
        'createdAt' => '\DateTime'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'description' => null,
        'labels' => null,
        'completedAtOverride' => 'date-time',
        'name' => null,
        'plannedStartDate' => 'date-time',
        'state' => null,
        'milestoneId' => 'int64',
        'requestedById' => 'uuid',
        'epicStateId' => 'int64',
        'startedAtOverride' => 'date-time',
        'groupId' => 'uuid',
        'updatedAt' => 'date-time',
        'followerIds' => 'uuid',
        'ownerIds' => 'uuid',
        'externalId' => null,
        'deadline' => 'date-time',
        'createdAt' => 'date-time'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'labels' => 'labels',
        'completedAtOverride' => 'completed_at_override',
        'name' => 'name',
        'plannedStartDate' => 'planned_start_date',
        'state' => 'state',
        'milestoneId' => 'milestone_id',
        'requestedById' => 'requested_by_id',
        'epicStateId' => 'epic_state_id',
        'startedAtOverride' => 'started_at_override',
        'groupId' => 'group_id',
        'updatedAt' => 'updated_at',
        'followerIds' => 'follower_ids',
        'ownerIds' => 'owner_ids',
        'externalId' => 'external_id',
        'deadline' => 'deadline',
        'createdAt' => 'created_at'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'labels' => 'setLabels',
        'completedAtOverride' => 'setCompletedAtOverride',
        'name' => 'setName',
        'plannedStartDate' => 'setPlannedStartDate',
        'state' => 'setState',
        'milestoneId' => 'setMilestoneId',
        'requestedById' => 'setRequestedById',
        'epicStateId' => 'setEpicStateId',
        'startedAtOverride' => 'setStartedAtOverride',
        'groupId' => 'setGroupId',
        'updatedAt' => 'setUpdatedAt',
        'followerIds' => 'setFollowerIds',
        'ownerIds' => 'setOwnerIds',
        'externalId' => 'setExternalId',
        'deadline' => 'setDeadline',
        'createdAt' => 'setCreatedAt'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'labels' => 'getLabels',
        'completedAtOverride' => 'getCompletedAtOverride',
        'name' => 'getName',
        'plannedStartDate' => 'getPlannedStartDate',
        'state' => 'getState',
        'milestoneId' => 'getMilestoneId',
        'requestedById' => 'getRequestedById',
        'epicStateId' => 'getEpicStateId',
        'startedAtOverride' => 'getStartedAtOverride',
        'groupId' => 'getGroupId',
        'updatedAt' => 'getUpdatedAt',
        'followerIds' => 'getFollowerIds',
        'ownerIds' => 'getOwnerIds',
        'externalId' => 'getExternalId',
        'deadline' => 'getDeadline',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['completedAtOverride'] = isset($data['completedAtOverride']) ? $data['completedAtOverride'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['plannedStartDate'] = isset($data['plannedStartDate']) ? $data['plannedStartDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['milestoneId'] = isset($data['milestoneId']) ? $data['milestoneId'] : null;
        $this->container['requestedById'] = isset($data['requestedById']) ? $data['requestedById'] : null;
        $this->container['epicStateId'] = isset($data['epicStateId']) ? $data['epicStateId'] : null;
        $this->container['startedAtOverride'] = isset($data['startedAtOverride']) ? $data['startedAtOverride'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['followerIds'] = isset($data['followerIds']) ? $data['followerIds'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    public function getStateAllowableValues()
    {
        return [
            self::STATE_IN_PROGRESS,
            self::STATE_TO_DO,
            self::STATE_DONE,];
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
     * @param string $description The Epic's description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return CreateLabelParams[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param CreateLabelParams[] $labels An array of Labels attached to the Epic.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets completedAtOverride
     *
     * @return DateTime
     */
    public function getCompletedAtOverride()
    {
        return $this->container['completedAtOverride'];
    }

    /**
     * Sets completedAtOverride
     *
     * @param DateTime $completedAtOverride A manual override for the time/date the Epic was completed.
     *
     * @return $this
     */
    public function setCompletedAtOverride($completedAtOverride)
    {
        $this->container['completedAtOverride'] = $completedAtOverride;

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
     * @param string $name The Epic's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets plannedStartDate
     *
     * @return DateTime
     */
    public function getPlannedStartDate()
    {
        return $this->container['plannedStartDate'];
    }

    /**
     * Sets plannedStartDate
     *
     * @param DateTime $plannedStartDate The Epic's planned start date.
     *
     * @return $this
     */
    public function setPlannedStartDate($plannedStartDate)
    {
        $this->container['plannedStartDate'] = $plannedStartDate;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state `Deprecated` The Epic's state (to do, in progress, or done); will be ignored when `epic_state_id` is set.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets milestoneId
     *
     * @return int
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
     * Sets milestoneId
     *
     * @param int $milestoneId The ID of the Milestone this Epic is related to.
     *
     * @return $this
     */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Gets requestedById
     *
     * @return string
     */
    public function getRequestedById()
    {
        return $this->container['requestedById'];
    }

    /**
     * Sets requestedById
     *
     * @param string $requestedById The ID of the member that requested the epic.
     *
     * @return $this
     */
    public function setRequestedById($requestedById)
    {
        $this->container['requestedById'] = $requestedById;

        return $this;
    }

    /**
     * Gets epicStateId
     *
     * @return int
     */
    public function getEpicStateId()
    {
        return $this->container['epicStateId'];
    }

    /**
     * Sets epicStateId
     *
     * @param int $epicStateId The ID of the Epic State.
     *
     * @return $this
     */
    public function setEpicStateId($epicStateId)
    {
        $this->container['epicStateId'] = $epicStateId;

        return $this;
    }

    /**
     * Gets startedAtOverride
     *
     * @return DateTime
     */
    public function getStartedAtOverride()
    {
        return $this->container['startedAtOverride'];
    }

    /**
     * Sets startedAtOverride
     *
     * @param DateTime $startedAtOverride A manual override for the time/date the Epic was started.
     *
     * @return $this
     */
    public function setStartedAtOverride($startedAtOverride)
    {
        $this->container['startedAtOverride'] = $startedAtOverride;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId The ID of the group to associate with the epic.
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

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
     * @param DateTime $updatedAt Defaults to the time/date it is created but can be set to reflect another date.
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
     * @param string[] $followerIds An array of UUIDs for any Members you want to add as Followers on this new Epic.
     *
     * @return $this
     */
    public function setFollowerIds($followerIds)
    {
        $this->container['followerIds'] = $followerIds;

        return $this;
    }

    /**
     * Gets ownerIds
     *
     * @return string[]
     */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
     * Sets ownerIds
     *
     * @param string[] $ownerIds An array of UUIDs for any members you want to add as Owners on this new Epic.
     *
     * @return $this
     */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;

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
     * @param string $externalId This field can be set to another unique ID. In the case that the Epic has been imported from another tool, the ID in the other tool can be indicated here.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets deadline
     *
     * @return DateTime
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param DateTime $deadline The Epic's deadline.
     *
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;

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
     * @param DateTime $createdAt Defaults to the time/date it is created but can be set to reflect another date.
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