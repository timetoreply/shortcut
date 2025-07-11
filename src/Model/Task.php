<?php
/**
 * Task
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shortcut API
 *
 * Shortcut API
 *
 * The version of the OpenAPI document: 3.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Timetoreply\Shortcut\Model;

use \ArrayAccess;
use \Timetoreply\Shortcut\ObjectSerializer;

/**
 * Task Class Doc Comment
 *
 * @category Class
 * @description A Task on a Story.
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Task implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'entityType' => 'string',
        'storyId' => 'int',
        'mentionIds' => 'string[]',
        'memberMentionIds' => 'string[]',
        'completedAt' => '\DateTime',
        'globalId' => 'string',
        'updatedAt' => '\DateTime',
        'groupMentionIds' => 'string[]',
        'ownerIds' => 'string[]',
        'externalId' => 'string',
        'id' => 'int',
        'position' => 'int',
        'complete' => 'bool',
        'createdAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'entityType' => null,
        'storyId' => 'int64',
        'mentionIds' => 'uuid',
        'memberMentionIds' => 'uuid',
        'completedAt' => 'date-time',
        'globalId' => null,
        'updatedAt' => 'date-time',
        'groupMentionIds' => 'uuid',
        'ownerIds' => 'uuid',
        'externalId' => null,
        'id' => 'int64',
        'position' => 'int64',
        'complete' => null,
        'createdAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'entityType' => false,
        'storyId' => false,
        'mentionIds' => false,
        'memberMentionIds' => false,
        'completedAt' => true,
        'globalId' => false,
        'updatedAt' => true,
        'groupMentionIds' => false,
        'ownerIds' => false,
        'externalId' => true,
        'id' => false,
        'position' => false,
        'complete' => false,
        'createdAt' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'entityType' => 'entity_type',
        'storyId' => 'story_id',
        'mentionIds' => 'mention_ids',
        'memberMentionIds' => 'member_mention_ids',
        'completedAt' => 'completed_at',
        'globalId' => 'global_id',
        'updatedAt' => 'updated_at',
        'groupMentionIds' => 'group_mention_ids',
        'ownerIds' => 'owner_ids',
        'externalId' => 'external_id',
        'id' => 'id',
        'position' => 'position',
        'complete' => 'complete',
        'createdAt' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'entityType' => 'setEntityType',
        'storyId' => 'setStoryId',
        'mentionIds' => 'setMentionIds',
        'memberMentionIds' => 'setMemberMentionIds',
        'completedAt' => 'setCompletedAt',
        'globalId' => 'setGlobalId',
        'updatedAt' => 'setUpdatedAt',
        'groupMentionIds' => 'setGroupMentionIds',
        'ownerIds' => 'setOwnerIds',
        'externalId' => 'setExternalId',
        'id' => 'setId',
        'position' => 'setPosition',
        'complete' => 'setComplete',
        'createdAt' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'entityType' => 'getEntityType',
        'storyId' => 'getStoryId',
        'mentionIds' => 'getMentionIds',
        'memberMentionIds' => 'getMemberMentionIds',
        'completedAt' => 'getCompletedAt',
        'globalId' => 'getGlobalId',
        'updatedAt' => 'getUpdatedAt',
        'groupMentionIds' => 'getGroupMentionIds',
        'ownerIds' => 'getOwnerIds',
        'externalId' => 'getExternalId',
        'id' => 'getId',
        'position' => 'getPosition',
        'complete' => 'getComplete',
        'createdAt' => 'getCreatedAt'
    ];

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
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('storyId', $data ?? [], null);
        $this->setIfExists('mentionIds', $data ?? [], null);
        $this->setIfExists('memberMentionIds', $data ?? [], null);
        $this->setIfExists('completedAt', $data ?? [], null);
        $this->setIfExists('globalId', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('groupMentionIds', $data ?? [], null);
        $this->setIfExists('ownerIds', $data ?? [], null);
        $this->setIfExists('externalId', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('complete', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['storyId'] === null) {
            $invalidProperties[] = "'storyId' can't be null";
        }
        if ($this->container['mentionIds'] === null) {
            $invalidProperties[] = "'mentionIds' can't be null";
        }
        if ($this->container['memberMentionIds'] === null) {
            $invalidProperties[] = "'memberMentionIds' can't be null";
        }
        if ($this->container['completedAt'] === null) {
            $invalidProperties[] = "'completedAt' can't be null";
        }
        if ($this->container['globalId'] === null) {
            $invalidProperties[] = "'globalId' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['groupMentionIds'] === null) {
            $invalidProperties[] = "'groupMentionIds' can't be null";
        }
        if ($this->container['ownerIds'] === null) {
            $invalidProperties[] = "'ownerIds' can't be null";
        }
        if ($this->container['externalId'] === null) {
            $invalidProperties[] = "'externalId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['complete'] === null) {
            $invalidProperties[] = "'complete' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        return $invalidProperties;
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
     * @param string $description Full text of the Task.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
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
     * @param string $entityType A string description of this resource.
     *
     * @return self
     */
    public function setEntityType($entityType)
    {
        if (is_null($entityType)) {
            throw new \InvalidArgumentException('non-nullable entityType cannot be null');
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets storyId
     *
     * @return int
     */
    public function getStoryId()
    {
        return $this->container['storyId'];
    }

    /**
     * Sets storyId
     *
     * @param int $storyId The unique identifier of the parent Story.
     *
     * @return self
     */
    public function setStoryId($storyId)
    {
        if (is_null($storyId)) {
            throw new \InvalidArgumentException('non-nullable storyId cannot be null');
        }
        $this->container['storyId'] = $storyId;

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
     * @param string[] $mentionIds `Deprecated:` use `member_mention_ids`.
     *
     * @return self
     */
    public function setMentionIds($mentionIds)
    {
        if (is_null($mentionIds)) {
            throw new \InvalidArgumentException('non-nullable mentionIds cannot be null');
        }
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
     * @param string[] $memberMentionIds An array of UUIDs of Members mentioned in this Task.
     *
     * @return self
     */
    public function setMemberMentionIds($memberMentionIds)
    {
        if (is_null($memberMentionIds)) {
            throw new \InvalidArgumentException('non-nullable memberMentionIds cannot be null');
        }
        $this->container['memberMentionIds'] = $memberMentionIds;

        return $this;
    }

    /**
     * Gets completedAt
     *
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->container['completedAt'];
    }

    /**
     * Sets completedAt
     *
     * @param \DateTime $completedAt The time/date the Task was completed.
     *
     * @return self
     */
    public function setCompletedAt($completedAt)
    {
        if (is_null($completedAt)) {
            array_push($this->openAPINullablesSetToNull, 'completedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completedAt'] = $completedAt;

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
     * @return self
     */
    public function setGlobalId($globalId)
    {
        if (is_null($globalId)) {
            throw new \InvalidArgumentException('non-nullable globalId cannot be null');
        }
        $this->container['globalId'] = $globalId;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt The time/date the Task was updated.
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'updatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param string[] $groupMentionIds An array of UUIDs of Groups mentioned in this Task.
     *
     * @return self
     */
    public function setGroupMentionIds($groupMentionIds)
    {
        if (is_null($groupMentionIds)) {
            throw new \InvalidArgumentException('non-nullable groupMentionIds cannot be null');
        }
        $this->container['groupMentionIds'] = $groupMentionIds;

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
     * @param string[] $ownerIds An array of UUIDs of the Owners of this Task.
     *
     * @return self
     */
    public function setOwnerIds($ownerIds)
    {
        if (is_null($ownerIds)) {
            throw new \InvalidArgumentException('non-nullable ownerIds cannot be null');
        }
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
     * @param string $externalId This field can be set to another unique ID. In the case that the Task has been imported from another tool, the ID in the other tool can be indicated here.
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        if (is_null($externalId)) {
            array_push($this->openAPINullablesSetToNull, 'externalId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param int $id The unique ID of the Task.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position The number corresponding to the Task's position within a list of Tasks on a Story.
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param bool $complete True/false boolean indicating whether the Task has been completed.
     *
     * @return self
     */
    public function setComplete($complete)
    {
        if (is_null($complete)) {
            throw new \InvalidArgumentException('non-nullable complete cannot be null');
        }
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt The time/date the Task was created.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


