<?php
/**
 * StoryContents
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
 * StoryContents Class Doc Comment
 *
 * @category Class
 * @description A container entity for the attributes this template should populate.
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoryContents implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoryContents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'entityType' => 'string',
        'labels' => '\Timetoreply\Shortcut\Model\LabelSlim[]',
        'storyType' => 'string',
        'customFields' => '\Timetoreply\Shortcut\Model\CustomFieldValueParams[]',
        'linkedFiles' => '\Timetoreply\Shortcut\Model\LinkedFile[]',
        'name' => 'string',
        'epicId' => 'int',
        'externalLinks' => 'string[]',
        'subTasks' => '\Timetoreply\Shortcut\Model\CreateSubTaskParams[]',
        'iterationId' => 'int',
        'tasks' => '\Timetoreply\Shortcut\Model\StoryContentsTask[]',
        'labelIds' => 'int[]',
        'groupId' => 'string',
        'workflowStateId' => 'int',
        'followerIds' => 'string[]',
        'ownerIds' => 'string[]',
        'estimate' => 'int',
        'files' => '\Timetoreply\Shortcut\Model\UploadedFile[]',
        'projectId' => 'int',
        'deadline' => '\DateTime'
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
        'labels' => null,
        'storyType' => null,
        'customFields' => null,
        'linkedFiles' => null,
        'name' => null,
        'epicId' => 'int64',
        'externalLinks' => null,
        'subTasks' => null,
        'iterationId' => 'int64',
        'tasks' => null,
        'labelIds' => 'int64',
        'groupId' => 'uuid',
        'workflowStateId' => 'int64',
        'followerIds' => 'uuid',
        'ownerIds' => 'uuid',
        'estimate' => 'int64',
        'files' => null,
        'projectId' => 'int64',
        'deadline' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'entityType' => false,
        'labels' => false,
        'storyType' => false,
        'customFields' => false,
        'linkedFiles' => false,
        'name' => false,
        'epicId' => false,
        'externalLinks' => false,
        'subTasks' => false,
        'iterationId' => false,
        'tasks' => false,
        'labelIds' => false,
        'groupId' => false,
        'workflowStateId' => false,
        'followerIds' => false,
        'ownerIds' => false,
        'estimate' => false,
        'files' => false,
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
        'entityType' => 'entity_type',
        'labels' => 'labels',
        'storyType' => 'story_type',
        'customFields' => 'custom_fields',
        'linkedFiles' => 'linked_files',
        'name' => 'name',
        'epicId' => 'epic_id',
        'externalLinks' => 'external_links',
        'subTasks' => 'sub_tasks',
        'iterationId' => 'iteration_id',
        'tasks' => 'tasks',
        'labelIds' => 'label_ids',
        'groupId' => 'group_id',
        'workflowStateId' => 'workflow_state_id',
        'followerIds' => 'follower_ids',
        'ownerIds' => 'owner_ids',
        'estimate' => 'estimate',
        'files' => 'files',
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
        'entityType' => 'setEntityType',
        'labels' => 'setLabels',
        'storyType' => 'setStoryType',
        'customFields' => 'setCustomFields',
        'linkedFiles' => 'setLinkedFiles',
        'name' => 'setName',
        'epicId' => 'setEpicId',
        'externalLinks' => 'setExternalLinks',
        'subTasks' => 'setSubTasks',
        'iterationId' => 'setIterationId',
        'tasks' => 'setTasks',
        'labelIds' => 'setLabelIds',
        'groupId' => 'setGroupId',
        'workflowStateId' => 'setWorkflowStateId',
        'followerIds' => 'setFollowerIds',
        'ownerIds' => 'setOwnerIds',
        'estimate' => 'setEstimate',
        'files' => 'setFiles',
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
        'entityType' => 'getEntityType',
        'labels' => 'getLabels',
        'storyType' => 'getStoryType',
        'customFields' => 'getCustomFields',
        'linkedFiles' => 'getLinkedFiles',
        'name' => 'getName',
        'epicId' => 'getEpicId',
        'externalLinks' => 'getExternalLinks',
        'subTasks' => 'getSubTasks',
        'iterationId' => 'getIterationId',
        'tasks' => 'getTasks',
        'labelIds' => 'getLabelIds',
        'groupId' => 'getGroupId',
        'workflowStateId' => 'getWorkflowStateId',
        'followerIds' => 'getFollowerIds',
        'ownerIds' => 'getOwnerIds',
        'estimate' => 'getEstimate',
        'files' => 'getFiles',
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
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('storyType', $data ?? [], null);
        $this->setIfExists('customFields', $data ?? [], null);
        $this->setIfExists('linkedFiles', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('epicId', $data ?? [], null);
        $this->setIfExists('externalLinks', $data ?? [], null);
        $this->setIfExists('subTasks', $data ?? [], null);
        $this->setIfExists('iterationId', $data ?? [], null);
        $this->setIfExists('tasks', $data ?? [], null);
        $this->setIfExists('labelIds', $data ?? [], null);
        $this->setIfExists('groupId', $data ?? [], null);
        $this->setIfExists('workflowStateId', $data ?? [], null);
        $this->setIfExists('followerIds', $data ?? [], null);
        $this->setIfExists('ownerIds', $data ?? [], null);
        $this->setIfExists('estimate', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the story.
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
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param string|null $entityType A string description of this resource.
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
     * Gets labels
     *
     * @return \Timetoreply\Shortcut\Model\LabelSlim[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Timetoreply\Shortcut\Model\LabelSlim[]|null $labels An array of labels attached to the story.
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets storyType
     *
     * @return string|null
     */
    public function getStoryType()
    {
        return $this->container['storyType'];
    }

    /**
     * Sets storyType
     *
     * @param string|null $storyType The type of story (feature, bug, chore).
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
     * Gets customFields
     *
     * @return \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null $customFields An array of maps specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField.
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        if (is_null($customFields)) {
            throw new \InvalidArgumentException('non-nullable customFields cannot be null');
        }
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets linkedFiles
     *
     * @return \Timetoreply\Shortcut\Model\LinkedFile[]|null
     */
    public function getLinkedFiles()
    {
        return $this->container['linkedFiles'];
    }

    /**
     * Sets linkedFiles
     *
     * @param \Timetoreply\Shortcut\Model\LinkedFile[]|null $linkedFiles An array of linked files attached to the story.
     *
     * @return self
     */
    public function setLinkedFiles($linkedFiles)
    {
        if (is_null($linkedFiles)) {
            throw new \InvalidArgumentException('non-nullable linkedFiles cannot be null');
        }
        $this->container['linkedFiles'] = $linkedFiles;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the story.
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
     * Gets epicId
     *
     * @return int|null
     */
    public function getEpicId()
    {
        return $this->container['epicId'];
    }

    /**
     * Sets epicId
     *
     * @param int|null $epicId The ID of the epic the story belongs to.
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
     * Gets externalLinks
     *
     * @return string[]|null
     */
    public function getExternalLinks()
    {
        return $this->container['externalLinks'];
    }

    /**
     * Sets externalLinks
     *
     * @param string[]|null $externalLinks An array of external links connected to the story.
     *
     * @return self
     */
    public function setExternalLinks($externalLinks)
    {
        if (is_null($externalLinks)) {
            throw new \InvalidArgumentException('non-nullable externalLinks cannot be null');
        }
        $this->container['externalLinks'] = $externalLinks;

        return $this;
    }

    /**
     * Gets subTasks
     *
     * @return \Timetoreply\Shortcut\Model\CreateSubTaskParams[]|null
     */
    public function getSubTasks()
    {
        return $this->container['subTasks'];
    }

    /**
     * Sets subTasks
     *
     * @param \Timetoreply\Shortcut\Model\CreateSubTaskParams[]|null $subTasks An array of sub-tasks connected to the story
     *
     * @return self
     */
    public function setSubTasks($subTasks)
    {
        if (is_null($subTasks)) {
            throw new \InvalidArgumentException('non-nullable subTasks cannot be null');
        }
        $this->container['subTasks'] = $subTasks;

        return $this;
    }

    /**
     * Gets iterationId
     *
     * @return int|null
     */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
     * Sets iterationId
     *
     * @param int|null $iterationId The ID of the iteration the story belongs to.
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
     * Gets tasks
     *
     * @return \Timetoreply\Shortcut\Model\StoryContentsTask[]|null
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     *
     * @param \Timetoreply\Shortcut\Model\StoryContentsTask[]|null $tasks An array of tasks connected to the story.
     *
     * @return self
     */
    public function setTasks($tasks)
    {
        if (is_null($tasks)) {
            throw new \InvalidArgumentException('non-nullable tasks cannot be null');
        }
        $this->container['tasks'] = $tasks;

        return $this;
    }

    /**
     * Gets labelIds
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['labelIds'];
    }

    /**
     * Sets labelIds
     *
     * @param int[]|null $labelIds An array of label ids attached to the story.
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
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId The ID of the group to which the story is assigned.
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
     * @return int|null
     */
    public function getWorkflowStateId()
    {
        return $this->container['workflowStateId'];
    }

    /**
     * Sets workflowStateId
     *
     * @param int|null $workflowStateId The ID of the workflow state the story is currently in.
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
     * Gets followerIds
     *
     * @return string[]|null
     */
    public function getFollowerIds()
    {
        return $this->container['followerIds'];
    }

    /**
     * Sets followerIds
     *
     * @param string[]|null $followerIds An array of UUIDs for any Members listed as Followers.
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
     * @return string[]|null
     */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
     * Sets ownerIds
     *
     * @param string[]|null $ownerIds An array of UUIDs of the owners of this story.
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
     * Gets estimate
     *
     * @return int|null
     */
    public function getEstimate()
    {
        return $this->container['estimate'];
    }

    /**
     * Sets estimate
     *
     * @param int|null $estimate The numeric point estimate of the story. Can also be null, which means unestimated.
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
     * Gets files
     *
     * @return \Timetoreply\Shortcut\Model\UploadedFile[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Timetoreply\Shortcut\Model\UploadedFile[]|null $files An array of files attached to the story.
     *
     * @return self
     */
    public function setFiles($files)
    {
        if (is_null($files)) {
            throw new \InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param int|null $projectId The ID of the project the story belongs to.
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
     * @return \DateTime|null
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param \DateTime|null $deadline The due date of the story.
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


