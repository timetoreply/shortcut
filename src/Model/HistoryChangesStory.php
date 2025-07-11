<?php
/**
 * HistoryChangesStory
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
 * HistoryChangesStory Class Doc Comment
 *
 * @category Class
 * @description The changes that have occurred as a result of the action.
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HistoryChangesStory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HistoryChangesStory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr',
        'archived' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool',
        'started' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool',
        'taskIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'mentionIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid',
        'storyType' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr',
        'name' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr',
        'completed' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool',
        'blocker' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool',
        'epicId' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt',
        'branchIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'commitIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'requestedById' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid',
        'iterationId' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt',
        'labelIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'groupId' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid',
        'workflowStateId' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt',
        'objectStoryLinkIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'followerIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid',
        'ownerIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid',
        'customFieldValueIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid',
        'estimate' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt',
        'subjectStoryLinkIds' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt',
        'blocked' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool',
        'projectId' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt',
        'deadline' => '\Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr'
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
        'archived' => null,
        'started' => null,
        'taskIds' => null,
        'mentionIds' => null,
        'storyType' => null,
        'name' => null,
        'completed' => null,
        'blocker' => null,
        'epicId' => null,
        'branchIds' => null,
        'commitIds' => null,
        'requestedById' => null,
        'iterationId' => null,
        'labelIds' => null,
        'groupId' => null,
        'workflowStateId' => null,
        'objectStoryLinkIds' => null,
        'followerIds' => null,
        'ownerIds' => null,
        'customFieldValueIds' => null,
        'estimate' => null,
        'subjectStoryLinkIds' => null,
        'blocked' => null,
        'projectId' => null,
        'deadline' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'archived' => false,
        'started' => false,
        'taskIds' => false,
        'mentionIds' => false,
        'storyType' => false,
        'name' => false,
        'completed' => false,
        'blocker' => false,
        'epicId' => false,
        'branchIds' => false,
        'commitIds' => false,
        'requestedById' => false,
        'iterationId' => false,
        'labelIds' => false,
        'groupId' => false,
        'workflowStateId' => false,
        'objectStoryLinkIds' => false,
        'followerIds' => false,
        'ownerIds' => false,
        'customFieldValueIds' => false,
        'estimate' => false,
        'subjectStoryLinkIds' => false,
        'blocked' => false,
        'projectId' => false,
        'deadline' => false
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
        'archived' => 'archived',
        'started' => 'started',
        'taskIds' => 'task_ids',
        'mentionIds' => 'mention_ids',
        'storyType' => 'story_type',
        'name' => 'name',
        'completed' => 'completed',
        'blocker' => 'blocker',
        'epicId' => 'epic_id',
        'branchIds' => 'branch_ids',
        'commitIds' => 'commit_ids',
        'requestedById' => 'requested_by_id',
        'iterationId' => 'iteration_id',
        'labelIds' => 'label_ids',
        'groupId' => 'group_id',
        'workflowStateId' => 'workflow_state_id',
        'objectStoryLinkIds' => 'object_story_link_ids',
        'followerIds' => 'follower_ids',
        'ownerIds' => 'owner_ids',
        'customFieldValueIds' => 'custom_field_value_ids',
        'estimate' => 'estimate',
        'subjectStoryLinkIds' => 'subject_story_link_ids',
        'blocked' => 'blocked',
        'projectId' => 'project_id',
        'deadline' => 'deadline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'archived' => 'setArchived',
        'started' => 'setStarted',
        'taskIds' => 'setTaskIds',
        'mentionIds' => 'setMentionIds',
        'storyType' => 'setStoryType',
        'name' => 'setName',
        'completed' => 'setCompleted',
        'blocker' => 'setBlocker',
        'epicId' => 'setEpicId',
        'branchIds' => 'setBranchIds',
        'commitIds' => 'setCommitIds',
        'requestedById' => 'setRequestedById',
        'iterationId' => 'setIterationId',
        'labelIds' => 'setLabelIds',
        'groupId' => 'setGroupId',
        'workflowStateId' => 'setWorkflowStateId',
        'objectStoryLinkIds' => 'setObjectStoryLinkIds',
        'followerIds' => 'setFollowerIds',
        'ownerIds' => 'setOwnerIds',
        'customFieldValueIds' => 'setCustomFieldValueIds',
        'estimate' => 'setEstimate',
        'subjectStoryLinkIds' => 'setSubjectStoryLinkIds',
        'blocked' => 'setBlocked',
        'projectId' => 'setProjectId',
        'deadline' => 'setDeadline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'archived' => 'getArchived',
        'started' => 'getStarted',
        'taskIds' => 'getTaskIds',
        'mentionIds' => 'getMentionIds',
        'storyType' => 'getStoryType',
        'name' => 'getName',
        'completed' => 'getCompleted',
        'blocker' => 'getBlocker',
        'epicId' => 'getEpicId',
        'branchIds' => 'getBranchIds',
        'commitIds' => 'getCommitIds',
        'requestedById' => 'getRequestedById',
        'iterationId' => 'getIterationId',
        'labelIds' => 'getLabelIds',
        'groupId' => 'getGroupId',
        'workflowStateId' => 'getWorkflowStateId',
        'objectStoryLinkIds' => 'getObjectStoryLinkIds',
        'followerIds' => 'getFollowerIds',
        'ownerIds' => 'getOwnerIds',
        'customFieldValueIds' => 'getCustomFieldValueIds',
        'estimate' => 'getEstimate',
        'subjectStoryLinkIds' => 'getSubjectStoryLinkIds',
        'blocked' => 'getBlocked',
        'projectId' => 'getProjectId',
        'deadline' => 'getDeadline'
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
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('started', $data ?? [], null);
        $this->setIfExists('taskIds', $data ?? [], null);
        $this->setIfExists('mentionIds', $data ?? [], null);
        $this->setIfExists('storyType', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('completed', $data ?? [], null);
        $this->setIfExists('blocker', $data ?? [], null);
        $this->setIfExists('epicId', $data ?? [], null);
        $this->setIfExists('branchIds', $data ?? [], null);
        $this->setIfExists('commitIds', $data ?? [], null);
        $this->setIfExists('requestedById', $data ?? [], null);
        $this->setIfExists('iterationId', $data ?? [], null);
        $this->setIfExists('labelIds', $data ?? [], null);
        $this->setIfExists('groupId', $data ?? [], null);
        $this->setIfExists('workflowStateId', $data ?? [], null);
        $this->setIfExists('objectStoryLinkIds', $data ?? [], null);
        $this->setIfExists('followerIds', $data ?? [], null);
        $this->setIfExists('ownerIds', $data ?? [], null);
        $this->setIfExists('customFieldValueIds', $data ?? [], null);
        $this->setIfExists('estimate', $data ?? [], null);
        $this->setIfExists('subjectStoryLinkIds', $data ?? [], null);
        $this->setIfExists('blocked', $data ?? [], null);
        $this->setIfExists('projectId', $data ?? [], null);
        $this->setIfExists('deadline', $data ?? [], null);
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
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null $description description
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
     * Gets archived
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null $started started
     *
     * @return self
     */
    public function setStarted($started)
    {
        if (is_null($started)) {
            throw new \InvalidArgumentException('non-nullable started cannot be null');
        }
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets taskIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
     * Sets taskIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $taskIds taskIds
     *
     * @return self
     */
    public function setTaskIds($taskIds)
    {
        if (is_null($taskIds)) {
            throw new \InvalidArgumentException('non-nullable taskIds cannot be null');
        }
        $this->container['taskIds'] = $taskIds;

        return $this;
    }

    /**
     * Gets mentionIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null
     */
    public function getMentionIds()
    {
        return $this->container['mentionIds'];
    }

    /**
     * Sets mentionIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null $mentionIds mentionIds
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
     * Gets storyType
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null
     */
    public function getStoryType()
    {
        return $this->container['storyType'];
    }

    /**
     * Sets storyType
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null $storyType storyType
     *
     * @return self
     */
    public function setStoryType($storyType)
    {
        if (is_null($storyType)) {
            throw new \InvalidArgumentException('non-nullable storyType cannot be null');
        }
        $this->container['storyType'] = $storyType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null $completed completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        if (is_null($completed)) {
            throw new \InvalidArgumentException('non-nullable completed cannot be null');
        }
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets blocker
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null
     */
    public function getBlocker()
    {
        return $this->container['blocker'];
    }

    /**
     * Sets blocker
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null $blocker blocker
     *
     * @return self
     */
    public function setBlocker($blocker)
    {
        if (is_null($blocker)) {
            throw new \InvalidArgumentException('non-nullable blocker cannot be null');
        }
        $this->container['blocker'] = $blocker;

        return $this;
    }

    /**
     * Gets epicId
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null
     */
    public function getEpicId()
    {
        return $this->container['epicId'];
    }

    /**
     * Sets epicId
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null $epicId epicId
     *
     * @return self
     */
    public function setEpicId($epicId)
    {
        if (is_null($epicId)) {
            throw new \InvalidArgumentException('non-nullable epicId cannot be null');
        }
        $this->container['epicId'] = $epicId;

        return $this;
    }

    /**
     * Gets branchIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getBranchIds()
    {
        return $this->container['branchIds'];
    }

    /**
     * Sets branchIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $branchIds branchIds
     *
     * @return self
     */
    public function setBranchIds($branchIds)
    {
        if (is_null($branchIds)) {
            throw new \InvalidArgumentException('non-nullable branchIds cannot be null');
        }
        $this->container['branchIds'] = $branchIds;

        return $this;
    }

    /**
     * Gets commitIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getCommitIds()
    {
        return $this->container['commitIds'];
    }

    /**
     * Sets commitIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $commitIds commitIds
     *
     * @return self
     */
    public function setCommitIds($commitIds)
    {
        if (is_null($commitIds)) {
            throw new \InvalidArgumentException('non-nullable commitIds cannot be null');
        }
        $this->container['commitIds'] = $commitIds;

        return $this;
    }

    /**
     * Gets requestedById
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid|null
     */
    public function getRequestedById()
    {
        return $this->container['requestedById'];
    }

    /**
     * Sets requestedById
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid|null $requestedById requestedById
     *
     * @return self
     */
    public function setRequestedById($requestedById)
    {
        if (is_null($requestedById)) {
            throw new \InvalidArgumentException('non-nullable requestedById cannot be null');
        }
        $this->container['requestedById'] = $requestedById;

        return $this;
    }

    /**
     * Gets iterationId
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null
     */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
     * Sets iterationId
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null $iterationId iterationId
     *
     * @return self
     */
    public function setIterationId($iterationId)
    {
        if (is_null($iterationId)) {
            throw new \InvalidArgumentException('non-nullable iterationId cannot be null');
        }
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets labelIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
     * Sets labelIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $labelIds labelIds
     *
     * @return self
     */
    public function setLabelIds($labelIds)
    {
        if (is_null($labelIds)) {
            throw new \InvalidArgumentException('non-nullable labelIds cannot be null');
        }
        $this->container['labelIds'] = $labelIds;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewUuid|null $groupId groupId
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        if (is_null($groupId)) {
            throw new \InvalidArgumentException('non-nullable groupId cannot be null');
        }
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets workflowStateId
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null
     */
    public function getWorkflowStateId()
    {
        return $this->container['workflowStateId'];
    }

    /**
     * Sets workflowStateId
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null $workflowStateId workflowStateId
     *
     * @return self
     */
    public function setWorkflowStateId($workflowStateId)
    {
        if (is_null($workflowStateId)) {
            throw new \InvalidArgumentException('non-nullable workflowStateId cannot be null');
        }
        $this->container['workflowStateId'] = $workflowStateId;

        return $this;
    }

    /**
     * Gets objectStoryLinkIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getObjectStoryLinkIds()
    {
        return $this->container['objectStoryLinkIds'];
    }

    /**
     * Sets objectStoryLinkIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $objectStoryLinkIds objectStoryLinkIds
     *
     * @return self
     */
    public function setObjectStoryLinkIds($objectStoryLinkIds)
    {
        if (is_null($objectStoryLinkIds)) {
            throw new \InvalidArgumentException('non-nullable objectStoryLinkIds cannot be null');
        }
        $this->container['objectStoryLinkIds'] = $objectStoryLinkIds;

        return $this;
    }

    /**
     * Gets followerIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null
     */
    public function getFollowerIds()
    {
        return $this->container['followerIds'];
    }

    /**
     * Sets followerIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null $followerIds followerIds
     *
     * @return self
     */
    public function setFollowerIds($followerIds)
    {
        if (is_null($followerIds)) {
            throw new \InvalidArgumentException('non-nullable followerIds cannot be null');
        }
        $this->container['followerIds'] = $followerIds;

        return $this;
    }

    /**
     * Gets ownerIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null
     */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
     * Sets ownerIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null $ownerIds ownerIds
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
     * Gets customFieldValueIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null
     */
    public function getCustomFieldValueIds()
    {
        return $this->container['customFieldValueIds'];
    }

    /**
     * Sets customFieldValueIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesUuid|null $customFieldValueIds customFieldValueIds
     *
     * @return self
     */
    public function setCustomFieldValueIds($customFieldValueIds)
    {
        if (is_null($customFieldValueIds)) {
            throw new \InvalidArgumentException('non-nullable customFieldValueIds cannot be null');
        }
        $this->container['customFieldValueIds'] = $customFieldValueIds;

        return $this;
    }

    /**
     * Gets estimate
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null
     */
    public function getEstimate()
    {
        return $this->container['estimate'];
    }

    /**
     * Sets estimate
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null $estimate estimate
     *
     * @return self
     */
    public function setEstimate($estimate)
    {
        if (is_null($estimate)) {
            throw new \InvalidArgumentException('non-nullable estimate cannot be null');
        }
        $this->container['estimate'] = $estimate;

        return $this;
    }

    /**
     * Gets subjectStoryLinkIds
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null
     */
    public function getSubjectStoryLinkIds()
    {
        return $this->container['subjectStoryLinkIds'];
    }

    /**
     * Sets subjectStoryLinkIds
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeAddsRemovesInt|null $subjectStoryLinkIds subjectStoryLinkIds
     *
     * @return self
     */
    public function setSubjectStoryLinkIds($subjectStoryLinkIds)
    {
        if (is_null($subjectStoryLinkIds)) {
            throw new \InvalidArgumentException('non-nullable subjectStoryLinkIds cannot be null');
        }
        $this->container['subjectStoryLinkIds'] = $subjectStoryLinkIds;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewBool|null $blocked blocked
     *
     * @return self
     */
    public function setBlocked($blocked)
    {
        if (is_null($blocked)) {
            throw new \InvalidArgumentException('non-nullable blocked cannot be null');
        }
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewInt|null $projectId projectId
     *
     * @return self
     */
    public function setProjectId($projectId)
    {
        if (is_null($projectId)) {
            throw new \InvalidArgumentException('non-nullable projectId cannot be null');
        }
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets deadline
     *
     * @return \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param \Timetoreply\Shortcut\Model\StoryHistoryChangeOldNewStr|null $deadline deadline
     *
     * @return self
     */
    public function setDeadline($deadline)
    {
        if (is_null($deadline)) {
            throw new \InvalidArgumentException('non-nullable deadline cannot be null');
        }
        $this->container['deadline'] = $deadline;

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


