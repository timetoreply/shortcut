<?php
/**
 * Iteration
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
 * Iteration Class Doc Comment
 *
 * @category Class
 * @description An Iteration is a defined, time-boxed period of development for a collection of Stories. See https://help.shortcut.com/hc/en-us/articles/360028953452-Iterations-Overview for more information.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Iteration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Iteration';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appUrl' => 'string',
        'description' => 'string',
        'entityType' => 'string',
        'labels' => '\Timetoreply\Shortcut\Model\Label[]',
        'mentionIds' => 'string[]',
        'memberMentionIds' => 'string[]',
        'associatedGroups' => '\Timetoreply\Shortcut\Model\IterationAssociatedGroup[]',
        'name' => 'string',
        'globalId' => 'string',
        'labelIds' => 'int[]',
        'updatedAt' => '\DateTime',
        'groupMentionIds' => 'string[]',
        'endDate' => '\DateTime',
        'followerIds' => 'string[]',
        'groupIds' => 'string[]',
        'startDate' => '\DateTime',
        'status' => 'string',
        'id' => 'int',
        'stats' => '\Timetoreply\Shortcut\Model\IterationStats',
        'createdAt' => '\DateTime'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appUrl' => null,
        'description' => null,
        'entityType' => null,
        'labels' => null,
        'mentionIds' => 'uuid',
        'memberMentionIds' => 'uuid',
        'associatedGroups' => null,
        'name' => null,
        'globalId' => null,
        'labelIds' => 'int64',
        'updatedAt' => 'date-time',
        'groupMentionIds' => 'uuid',
        'endDate' => 'date-time',
        'followerIds' => 'uuid',
        'groupIds' => 'uuid',
        'startDate' => 'date-time',
        'status' => null,
        'id' => 'int64',
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
        'entityType' => 'entity_type',
        'labels' => 'labels',
        'mentionIds' => 'mention_ids',
        'memberMentionIds' => 'member_mention_ids',
        'associatedGroups' => 'associated_groups',
        'name' => 'name',
        'globalId' => 'global_id',
        'labelIds' => 'label_ids',
        'updatedAt' => 'updated_at',
        'groupMentionIds' => 'group_mention_ids',
        'endDate' => 'end_date',
        'followerIds' => 'follower_ids',
        'groupIds' => 'group_ids',
        'startDate' => 'start_date',
        'status' => 'status',
        'id' => 'id',
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
        'entityType' => 'setEntityType',
        'labels' => 'setLabels',
        'mentionIds' => 'setMentionIds',
        'memberMentionIds' => 'setMemberMentionIds',
        'associatedGroups' => 'setAssociatedGroups',
        'name' => 'setName',
        'globalId' => 'setGlobalId',
        'labelIds' => 'setLabelIds',
        'updatedAt' => 'setUpdatedAt',
        'groupMentionIds' => 'setGroupMentionIds',
        'endDate' => 'setEndDate',
        'followerIds' => 'setFollowerIds',
        'groupIds' => 'setGroupIds',
        'startDate' => 'setStartDate',
        'status' => 'setStatus',
        'id' => 'setId',
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
        'entityType' => 'getEntityType',
        'labels' => 'getLabels',
        'mentionIds' => 'getMentionIds',
        'memberMentionIds' => 'getMemberMentionIds',
        'associatedGroups' => 'getAssociatedGroups',
        'name' => 'getName',
        'globalId' => 'getGlobalId',
        'labelIds' => 'getLabelIds',
        'updatedAt' => 'getUpdatedAt',
        'groupMentionIds' => 'getGroupMentionIds',
        'endDate' => 'getEndDate',
        'followerIds' => 'getFollowerIds',
        'groupIds' => 'getGroupIds',
        'startDate' => 'getStartDate',
        'status' => 'getStatus',
        'id' => 'getId',
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
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['mentionIds'] = isset($data['mentionIds']) ? $data['mentionIds'] : null;
        $this->container['memberMentionIds'] = isset($data['memberMentionIds']) ? $data['memberMentionIds'] : null;
        $this->container['associatedGroups'] = isset($data['associatedGroups']) ? $data['associatedGroups'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['globalId'] = isset($data['globalId']) ? $data['globalId'] : null;
        $this->container['labelIds'] = isset($data['labelIds']) ? $data['labelIds'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['groupMentionIds'] = isset($data['groupMentionIds']) ? $data['groupMentionIds'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['followerIds'] = isset($data['followerIds']) ? $data['followerIds'] : null;
        $this->container['groupIds'] = isset($data['groupIds']) ? $data['groupIds'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['mentionIds'] === null) {
            $invalidProperties[] = "'mentionIds' can't be null";
        }
        if ($this->container['memberMentionIds'] === null) {
            $invalidProperties[] = "'memberMentionIds' can't be null";
        }
        if ($this->container['associatedGroups'] === null) {
            $invalidProperties[] = "'associatedGroups' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['globalId'] === null) {
            $invalidProperties[] = "'globalId' can't be null";
        }
        if ($this->container['labelIds'] === null) {
            $invalidProperties[] = "'labelIds' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['groupMentionIds'] === null) {
            $invalidProperties[] = "'groupMentionIds' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['followerIds'] === null) {
            $invalidProperties[] = "'followerIds' can't be null";
        }
        if ($this->container['groupIds'] === null) {
            $invalidProperties[] = "'groupIds' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * @param string $appUrl The Shortcut application url for the Iteration.
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
     * @param string $description The description of the iteration.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $entityType A string description of this resource
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return Label[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param Label[] $labels An array of labels attached to the iteration.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets mentionIds
     *
     * @return string[]
     */
    public function getMentionIds()
    {
        return $this->container['mentionIds'];
    }

    /**
     * Sets mentionIds
     *
     * @param string[] $mentionIds Deprecated: use member_mention_ids.
     *
     * @return $this
     */
    public function setMentionIds($mentionIds)
    {
        $this->container['mentionIds'] = $mentionIds;

        return $this;
    }

    /**
     * Gets memberMentionIds
     *
     * @return string[]
     */
    public function getMemberMentionIds()
    {
        return $this->container['memberMentionIds'];
    }

    /**
     * Sets memberMentionIds
     *
     * @param string[] $memberMentionIds An array of Member IDs that have been mentioned in the Story description.
     *
     * @return $this
     */
    public function setMemberMentionIds($memberMentionIds)
    {
        $this->container['memberMentionIds'] = $memberMentionIds;

        return $this;
    }

    /**
     * Gets associatedGroups
     *
     * @return IterationAssociatedGroup[]
     */
    public function getAssociatedGroups()
    {
        return $this->container['associatedGroups'];
    }

    /**
     * Sets associatedGroups
     *
     * @param IterationAssociatedGroup[] $associatedGroups An array containing Group IDs and Group-owned story counts for the Iteration's associated groups.
     *
     * @return $this
     */
    public function setAssociatedGroups($associatedGroups)
    {
        $this->container['associatedGroups'] = $associatedGroups;

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
     * @param string $name The name of the iteration.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets globalId
     *
     * @return string
     */
    public function getGlobalId()
    {
        return $this->container['globalId'];
    }

    /**
     * Sets globalId
     *
     * @param string $globalId globalId
     *
     * @return $this
     */
    public function setGlobalId($globalId)
    {
        $this->container['globalId'] = $globalId;

        return $this;
    }

    /**
     * Gets labelIds
     *
     * @return int[]
     */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
     * Sets labelIds
     *
     * @param int[] $labelIds An array of label ids attached to the iteration.
     *
     * @return $this
     */
    public function setLabelIds($labelIds)
    {
        $this->container['labelIds'] = $labelIds;

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
     * @param DateTime $updatedAt The instant when this iteration was last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets groupMentionIds
     *
     * @return string[]
     */
    public function getGroupMentionIds()
    {
        return $this->container['groupMentionIds'];
    }

    /**
     * Sets groupMentionIds
     *
     * @param string[] $groupMentionIds An array of Group IDs that have been mentioned in the Story description.
     *
     * @return $this
     */
    public function setGroupMentionIds($groupMentionIds)
    {
        $this->container['groupMentionIds'] = $groupMentionIds;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param DateTime $endDate The date this iteration begins.
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
     * Gets groupIds
     *
     * @return string[]
     */
    public function getGroupIds()
    {
        return $this->container['groupIds'];
    }

    /**
     * Sets groupIds
     *
     * @param string[] $groupIds An array of UUIDs for any Groups you want to add as Followers. Currently, only one Group association is presented in our web UI.
     *
     * @return $this
     */
    public function setGroupIds($groupIds)
    {
        $this->container['groupIds'] = $groupIds;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param DateTime $startDate The date this iteration begins.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the iteration. Values are either \"unstarted\", \"started\", or \"done\".
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param int $id The ID of the iteration.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return IterationStats
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param IterationStats $stats stats
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
     * @param DateTime $createdAt The instant when this iteration was created.
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
