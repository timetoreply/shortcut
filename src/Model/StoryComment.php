<?php
/**
 * StoryComment
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
 * StoryComment Class Doc Comment
 *
 * @category Class
 * @description A Comment is any note added within the Comment field of a Story.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoryComment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'StoryComment';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appUrl' => 'string',
        'entityType' => 'string',
        'deleted' => 'bool',
        'storyId' => 'int',
        'mentionIds' => 'string[]',
        'authorId' => 'string',
        'memberMentionIds' => 'string[]',
        'blocker' => 'bool',
        'updatedAt' => '\DateTime',
        'groupMentionIds' => 'string[]',
        'externalId' => 'string',
        'parentId' => 'int',
        'id' => 'int',
        'position' => 'int',
        'unblocksParent' => 'bool',
        'reactions' => '\Timetoreply\Shortcut\Model\StoryReaction[]',
        'createdAt' => '\DateTime',
        'text' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appUrl' => null,
        'entityType' => null,
        'deleted' => null,
        'storyId' => 'int64',
        'mentionIds' => 'uuid',
        'authorId' => 'uuid',
        'memberMentionIds' => 'uuid',
        'blocker' => null,
        'updatedAt' => 'date-time',
        'groupMentionIds' => 'uuid',
        'externalId' => null,
        'parentId' => 'int64',
        'id' => 'int64',
        'position' => 'int64',
        'unblocksParent' => null,
        'reactions' => null,
        'createdAt' => 'date-time',
        'text' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'appUrl' => 'app_url',
        'entityType' => 'entity_type',
        'deleted' => 'deleted',
        'storyId' => 'story_id',
        'mentionIds' => 'mention_ids',
        'authorId' => 'author_id',
        'memberMentionIds' => 'member_mention_ids',
        'blocker' => 'blocker',
        'updatedAt' => 'updated_at',
        'groupMentionIds' => 'group_mention_ids',
        'externalId' => 'external_id',
        'parentId' => 'parent_id',
        'id' => 'id',
        'position' => 'position',
        'unblocksParent' => 'unblocks_parent',
        'reactions' => 'reactions',
        'createdAt' => 'created_at',
        'text' => 'text'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appUrl' => 'setAppUrl',
        'entityType' => 'setEntityType',
        'deleted' => 'setDeleted',
        'storyId' => 'setStoryId',
        'mentionIds' => 'setMentionIds',
        'authorId' => 'setAuthorId',
        'memberMentionIds' => 'setMemberMentionIds',
        'blocker' => 'setBlocker',
        'updatedAt' => 'setUpdatedAt',
        'groupMentionIds' => 'setGroupMentionIds',
        'externalId' => 'setExternalId',
        'parentId' => 'setParentId',
        'id' => 'setId',
        'position' => 'setPosition',
        'unblocksParent' => 'setUnblocksParent',
        'reactions' => 'setReactions',
        'createdAt' => 'setCreatedAt',
        'text' => 'setText'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appUrl' => 'getAppUrl',
        'entityType' => 'getEntityType',
        'deleted' => 'getDeleted',
        'storyId' => 'getStoryId',
        'mentionIds' => 'getMentionIds',
        'authorId' => 'getAuthorId',
        'memberMentionIds' => 'getMemberMentionIds',
        'blocker' => 'getBlocker',
        'updatedAt' => 'getUpdatedAt',
        'groupMentionIds' => 'getGroupMentionIds',
        'externalId' => 'getExternalId',
        'parentId' => 'getParentId',
        'id' => 'getId',
        'position' => 'getPosition',
        'unblocksParent' => 'getUnblocksParent',
        'reactions' => 'getReactions',
        'createdAt' => 'getCreatedAt',
        'text' => 'getText'];
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
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['storyId'] = isset($data['storyId']) ? $data['storyId'] : null;
        $this->container['mentionIds'] = isset($data['mentionIds']) ? $data['mentionIds'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['memberMentionIds'] = isset($data['memberMentionIds']) ? $data['memberMentionIds'] : null;
        $this->container['blocker'] = isset($data['blocker']) ? $data['blocker'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['groupMentionIds'] = isset($data['groupMentionIds']) ? $data['groupMentionIds'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['unblocksParent'] = isset($data['unblocksParent']) ? $data['unblocksParent'] : null;
        $this->container['reactions'] = isset($data['reactions']) ? $data['reactions'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
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
        if ($this->container['entityType'] === null) {
            $invalidProperties[] = "'entityType' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['storyId'] === null) {
            $invalidProperties[] = "'storyId' can't be null";
        }
        if ($this->container['mentionIds'] === null) {
            $invalidProperties[] = "'mentionIds' can't be null";
        }
        if ($this->container['authorId'] === null) {
            $invalidProperties[] = "'authorId' can't be null";
        }
        if ($this->container['memberMentionIds'] === null) {
            $invalidProperties[] = "'memberMentionIds' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['groupMentionIds'] === null) {
            $invalidProperties[] = "'groupMentionIds' can't be null";
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
        if ($this->container['reactions'] === null) {
            $invalidProperties[] = "'reactions' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
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
     * @param string $appUrl The Shortcut application url for the Comment.
     *
     * @return $this
     */
    public function setAppUrl($appUrl)
    {
        $this->container['appUrl'] = $appUrl;

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
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted True/false boolean indicating whether the Comment has been deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * @param int $storyId The ID of the Story on which the Comment appears.
     *
     * @return $this
     */
    public function setStoryId($storyId)
    {
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
     * Gets authorId
     *
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param string $authorId The unique ID of the Member who is the Comment's author.
     *
     * @return $this
     */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;

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
     * @param string[] $memberMentionIds The unique IDs of the Member who are mentioned in the Comment.
     *
     * @return $this
     */
    public function setMemberMentionIds($memberMentionIds)
    {
        $this->container['memberMentionIds'] = $memberMentionIds;

        return $this;
    }

    /**
     * Gets blocker
     *
     * @return bool
     */
    public function getBlocker()
    {
        return $this->container['blocker'];
    }

    /**
     * Sets blocker
     *
     * @param bool $blocker Marks the comment as a blocker that can be surfaced to permissions or teams mentioned in the comment. Can only be used on a top-level comment.
     *
     * @return $this
     */
    public function setBlocker($blocker)
    {
        $this->container['blocker'] = $blocker;

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
     * @param DateTime $updatedAt The time/date when the Comment was updated.
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
     * @param string[] $groupMentionIds The unique IDs of the Group who are mentioned in the Comment.
     *
     * @return $this
     */
    public function setGroupMentionIds($groupMentionIds)
    {
        $this->container['groupMentionIds'] = $groupMentionIds;

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
     * @param string $externalId This field can be set to another unique ID. In the case that the Comment has been imported from another tool, the ID in the other tool can be indicated here.
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId The ID of the parent Comment this Comment is threaded under.
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

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
     * @param int $id The unique ID of the Comment.
     *
     * @return $this
     */
    public function setId($id)
    {
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
     * @param int $position The Comments numerical position in the list from oldest to newest.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets unblocksParent
     *
     * @return bool
     */
    public function getUnblocksParent()
    {
        return $this->container['unblocksParent'];
    }

    /**
     * Sets unblocksParent
     *
     * @param bool $unblocksParent Marks the comment as an unblocker to its  blocker parent. Can only be set on a threaded comment who has a parent with `blocker` set.
     *
     * @return $this
     */
    public function setUnblocksParent($unblocksParent)
    {
        $this->container['unblocksParent'] = $unblocksParent;

        return $this;
    }

    /**
     * Gets reactions
     *
     * @return StoryReaction[]
     */
    public function getReactions()
    {
        return $this->container['reactions'];
    }

    /**
     * Sets reactions
     *
     * @param StoryReaction[] $reactions A set of Reactions to this Comment.
     *
     * @return $this
     */
    public function setReactions($reactions)
    {
        $this->container['reactions'] = $reactions;

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
     * @param DateTime $createdAt The time/date when the Comment was created.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The text of the Comment. In the case that the Comment has been deleted, this field can be set to nil.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
