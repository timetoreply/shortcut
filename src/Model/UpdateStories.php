<?php
/**
 * UpdateStories
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
 * UpdateStories Class Doc Comment
 *
 * @category Class
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateStories implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateStories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'archived' => 'bool',
        'storyIds' => 'int[]',
        'storyType' => 'string',
        'moveTo' => 'string',
        'followerIdsAdd' => 'string[]',
        'epicId' => 'int',
        'externalLinks' => 'string[]',
        'followerIdsRemove' => 'string[]',
        'requestedById' => 'string',
        'iterationId' => 'int',
        'customFieldsRemove' => '\Timetoreply\Shortcut\Model\CustomFieldValueParams[]',
        'labelsAdd' => '\Timetoreply\Shortcut\Model\CreateLabelParams[]',
        'groupId' => 'string',
        'workflowStateId' => 'int',
        'beforeId' => 'int',
        'estimate' => 'int',
        'afterId' => 'int',
        'ownerIdsRemove' => 'string[]',
        'customFieldsAdd' => '\Timetoreply\Shortcut\Model\CustomFieldValueParams[]',
        'projectId' => 'int',
        'labelsRemove' => '\Timetoreply\Shortcut\Model\CreateLabelParams[]',
        'deadline' => '\DateTime',
        'ownerIdsAdd' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'archived' => null,
        'storyIds' => 'int64',
        'storyType' => null,
        'moveTo' => null,
        'followerIdsAdd' => 'uuid',
        'epicId' => 'int64',
        'externalLinks' => null,
        'followerIdsRemove' => 'uuid',
        'requestedById' => 'uuid',
        'iterationId' => 'int64',
        'customFieldsRemove' => null,
        'labelsAdd' => null,
        'groupId' => 'uuid',
        'workflowStateId' => 'int64',
        'beforeId' => 'int64',
        'estimate' => 'int64',
        'afterId' => 'int64',
        'ownerIdsRemove' => 'uuid',
        'customFieldsAdd' => null,
        'projectId' => 'int64',
        'labelsRemove' => null,
        'deadline' => 'date-time',
        'ownerIdsAdd' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'archived' => false,
        'storyIds' => false,
        'storyType' => false,
        'moveTo' => false,
        'followerIdsAdd' => false,
        'epicId' => true,
        'externalLinks' => false,
        'followerIdsRemove' => false,
        'requestedById' => false,
        'iterationId' => true,
        'customFieldsRemove' => false,
        'labelsAdd' => false,
        'groupId' => true,
        'workflowStateId' => false,
        'beforeId' => false,
        'estimate' => true,
        'afterId' => false,
        'ownerIdsRemove' => false,
        'customFieldsAdd' => false,
        'projectId' => true,
        'labelsRemove' => false,
        'deadline' => true,
        'ownerIdsAdd' => false
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
        'archived' => 'archived',
        'storyIds' => 'story_ids',
        'storyType' => 'story_type',
        'moveTo' => 'move_to',
        'followerIdsAdd' => 'follower_ids_add',
        'epicId' => 'epic_id',
        'externalLinks' => 'external_links',
        'followerIdsRemove' => 'follower_ids_remove',
        'requestedById' => 'requested_by_id',
        'iterationId' => 'iteration_id',
        'customFieldsRemove' => 'custom_fields_remove',
        'labelsAdd' => 'labels_add',
        'groupId' => 'group_id',
        'workflowStateId' => 'workflow_state_id',
        'beforeId' => 'before_id',
        'estimate' => 'estimate',
        'afterId' => 'after_id',
        'ownerIdsRemove' => 'owner_ids_remove',
        'customFieldsAdd' => 'custom_fields_add',
        'projectId' => 'project_id',
        'labelsRemove' => 'labels_remove',
        'deadline' => 'deadline',
        'ownerIdsAdd' => 'owner_ids_add'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'archived' => 'setArchived',
        'storyIds' => 'setStoryIds',
        'storyType' => 'setStoryType',
        'moveTo' => 'setMoveTo',
        'followerIdsAdd' => 'setFollowerIdsAdd',
        'epicId' => 'setEpicId',
        'externalLinks' => 'setExternalLinks',
        'followerIdsRemove' => 'setFollowerIdsRemove',
        'requestedById' => 'setRequestedById',
        'iterationId' => 'setIterationId',
        'customFieldsRemove' => 'setCustomFieldsRemove',
        'labelsAdd' => 'setLabelsAdd',
        'groupId' => 'setGroupId',
        'workflowStateId' => 'setWorkflowStateId',
        'beforeId' => 'setBeforeId',
        'estimate' => 'setEstimate',
        'afterId' => 'setAfterId',
        'ownerIdsRemove' => 'setOwnerIdsRemove',
        'customFieldsAdd' => 'setCustomFieldsAdd',
        'projectId' => 'setProjectId',
        'labelsRemove' => 'setLabelsRemove',
        'deadline' => 'setDeadline',
        'ownerIdsAdd' => 'setOwnerIdsAdd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'archived' => 'getArchived',
        'storyIds' => 'getStoryIds',
        'storyType' => 'getStoryType',
        'moveTo' => 'getMoveTo',
        'followerIdsAdd' => 'getFollowerIdsAdd',
        'epicId' => 'getEpicId',
        'externalLinks' => 'getExternalLinks',
        'followerIdsRemove' => 'getFollowerIdsRemove',
        'requestedById' => 'getRequestedById',
        'iterationId' => 'getIterationId',
        'customFieldsRemove' => 'getCustomFieldsRemove',
        'labelsAdd' => 'getLabelsAdd',
        'groupId' => 'getGroupId',
        'workflowStateId' => 'getWorkflowStateId',
        'beforeId' => 'getBeforeId',
        'estimate' => 'getEstimate',
        'afterId' => 'getAfterId',
        'ownerIdsRemove' => 'getOwnerIdsRemove',
        'customFieldsAdd' => 'getCustomFieldsAdd',
        'projectId' => 'getProjectId',
        'labelsRemove' => 'getLabelsRemove',
        'deadline' => 'getDeadline',
        'ownerIdsAdd' => 'getOwnerIdsAdd'
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

    public const STORY_TYPE_FEATURE = 'feature';
    public const STORY_TYPE_CHORE = 'chore';
    public const STORY_TYPE_BUG = 'bug';
    public const MOVE_TO_LAST = 'last';
    public const MOVE_TO_FIRST = 'first';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStoryTypeAllowableValues()
    {
        return [
            self::STORY_TYPE_FEATURE,
            self::STORY_TYPE_CHORE,
            self::STORY_TYPE_BUG,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMoveToAllowableValues()
    {
        return [
            self::MOVE_TO_LAST,
            self::MOVE_TO_FIRST,
        ];
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
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('storyIds', $data ?? [], null);
        $this->setIfExists('storyType', $data ?? [], null);
        $this->setIfExists('moveTo', $data ?? [], null);
        $this->setIfExists('followerIdsAdd', $data ?? [], null);
        $this->setIfExists('epicId', $data ?? [], null);
        $this->setIfExists('externalLinks', $data ?? [], null);
        $this->setIfExists('followerIdsRemove', $data ?? [], null);
        $this->setIfExists('requestedById', $data ?? [], null);
        $this->setIfExists('iterationId', $data ?? [], null);
        $this->setIfExists('customFieldsRemove', $data ?? [], null);
        $this->setIfExists('labelsAdd', $data ?? [], null);
        $this->setIfExists('groupId', $data ?? [], null);
        $this->setIfExists('workflowStateId', $data ?? [], null);
        $this->setIfExists('beforeId', $data ?? [], null);
        $this->setIfExists('estimate', $data ?? [], null);
        $this->setIfExists('afterId', $data ?? [], null);
        $this->setIfExists('ownerIdsRemove', $data ?? [], null);
        $this->setIfExists('customFieldsAdd', $data ?? [], null);
        $this->setIfExists('projectId', $data ?? [], null);
        $this->setIfExists('labelsRemove', $data ?? [], null);
        $this->setIfExists('deadline', $data ?? [], null);
        $this->setIfExists('ownerIdsAdd', $data ?? [], null);
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

        if ($this->container['storyIds'] === null) {
            $invalidProperties[] = "'storyIds' can't be null";
        }
        $allowedValues = $this->getStoryTypeAllowableValues();
        if (!is_null($this->container['storyType']) && !in_array($this->container['storyType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'storyType', must be one of '%s'",
                $this->container['storyType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMoveToAllowableValues();
        if (!is_null($this->container['moveTo']) && !in_array($this->container['moveTo'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'moveTo', must be one of '%s'",
                $this->container['moveTo'],
                implode("', '", $allowedValues)
            );
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
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived If the Stories should be archived or not.
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
     * Gets storyIds
     *
     * @return int[]
     */
    public function getStoryIds()
    {
        return $this->container['storyIds'];
    }

    /**
     * Sets storyIds
     *
     * @param int[] $storyIds The Ids of the Stories you wish to update.
     *
     * @return self
     */
    public function setStoryIds($storyIds)
    {
        if (is_null($storyIds)) {
            throw new \InvalidArgumentException('non-nullable storyIds cannot be null');
        }


        $this->container['storyIds'] = $storyIds;

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
        $allowedValues = $this->getStoryTypeAllowableValues();
        if (!in_array($storyType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'storyType', must be one of '%s'",
                    $storyType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['storyType'] = $storyType;

        return $this;
    }

    /**
     * Gets moveTo
     *
     * @return string|null
     */
    public function getMoveTo()
    {
        return $this->container['moveTo'];
    }

    /**
     * Sets moveTo
     *
     * @param string|null $moveTo One of \"first\" or \"last\". This can be used to move the given story to the first or last position in the workflow state.
     *
     * @return self
     */
    public function setMoveTo($moveTo)
    {
        if (is_null($moveTo)) {
            throw new \InvalidArgumentException('non-nullable moveTo cannot be null');
        }
        $allowedValues = $this->getMoveToAllowableValues();
        if (!in_array($moveTo, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'moveTo', must be one of '%s'",
                    $moveTo,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['moveTo'] = $moveTo;

        return $this;
    }

    /**
     * Gets followerIdsAdd
     *
     * @return string[]|null
     */
    public function getFollowerIdsAdd()
    {
        return $this->container['followerIdsAdd'];
    }

    /**
     * Sets followerIdsAdd
     *
     * @param string[]|null $followerIdsAdd The UUIDs of the new followers to be added.
     *
     * @return self
     */
    public function setFollowerIdsAdd($followerIdsAdd)
    {
        if (is_null($followerIdsAdd)) {
            throw new \InvalidArgumentException('non-nullable followerIdsAdd cannot be null');
        }


        $this->container['followerIdsAdd'] = $followerIdsAdd;

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
            array_push($this->openAPINullablesSetToNull, 'epicId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('epicId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string[]|null $externalLinks An array of External Links associated with this story.
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
     * Gets followerIdsRemove
     *
     * @return string[]|null
     */
    public function getFollowerIdsRemove()
    {
        return $this->container['followerIdsRemove'];
    }

    /**
     * Sets followerIdsRemove
     *
     * @param string[]|null $followerIdsRemove The UUIDs of the followers to be removed.
     *
     * @return self
     */
    public function setFollowerIdsRemove($followerIdsRemove)
    {
        if (is_null($followerIdsRemove)) {
            throw new \InvalidArgumentException('non-nullable followerIdsRemove cannot be null');
        }


        $this->container['followerIdsRemove'] = $followerIdsRemove;

        return $this;
    }

    /**
     * Gets requestedById
     *
     * @return string|null
     */
    public function getRequestedById()
    {
        return $this->container['requestedById'];
    }

    /**
     * Sets requestedById
     *
     * @param string|null $requestedById The ID of the member that requested the story.
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
            array_push($this->openAPINullablesSetToNull, 'iterationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iterationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iterationId'] = $iterationId;

        return $this;
    }

    /**
     * Gets customFieldsRemove
     *
     * @return \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null
     */
    public function getCustomFieldsRemove()
    {
        return $this->container['customFieldsRemove'];
    }

    /**
     * Sets customFieldsRemove
     *
     * @param \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null $customFieldsRemove A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField.
     *
     * @return self
     */
    public function setCustomFieldsRemove($customFieldsRemove)
    {
        if (is_null($customFieldsRemove)) {
            throw new \InvalidArgumentException('non-nullable customFieldsRemove cannot be null');
        }
        $this->container['customFieldsRemove'] = $customFieldsRemove;

        return $this;
    }

    /**
     * Gets labelsAdd
     *
     * @return \Timetoreply\Shortcut\Model\CreateLabelParams[]|null
     */
    public function getLabelsAdd()
    {
        return $this->container['labelsAdd'];
    }

    /**
     * Sets labelsAdd
     *
     * @param \Timetoreply\Shortcut\Model\CreateLabelParams[]|null $labelsAdd An array of labels to be added.
     *
     * @return self
     */
    public function setLabelsAdd($labelsAdd)
    {
        if (is_null($labelsAdd)) {
            throw new \InvalidArgumentException('non-nullable labelsAdd cannot be null');
        }
        $this->container['labelsAdd'] = $labelsAdd;

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
     * @param string|null $groupId The Id of the Group the Stories should belong to.
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        if (is_null($groupId)) {
            array_push($this->openAPINullablesSetToNull, 'groupId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('groupId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param int|null $workflowStateId The ID of the workflow state to put the stories in.
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
     * Gets beforeId
     *
     * @return int|null
     */
    public function getBeforeId()
    {
        return $this->container['beforeId'];
    }

    /**
     * Sets beforeId
     *
     * @param int|null $beforeId The ID of the story that the stories are to be moved before.
     *
     * @return self
     */
    public function setBeforeId($beforeId)
    {
        if (is_null($beforeId)) {
            throw new \InvalidArgumentException('non-nullable beforeId cannot be null');
        }
        $this->container['beforeId'] = $beforeId;

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
            array_push($this->openAPINullablesSetToNull, 'estimate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['estimate'] = $estimate;

        return $this;
    }

    /**
     * Gets afterId
     *
     * @return int|null
     */
    public function getAfterId()
    {
        return $this->container['afterId'];
    }

    /**
     * Sets afterId
     *
     * @param int|null $afterId The ID of the story that the stories are to be moved below.
     *
     * @return self
     */
    public function setAfterId($afterId)
    {
        if (is_null($afterId)) {
            throw new \InvalidArgumentException('non-nullable afterId cannot be null');
        }
        $this->container['afterId'] = $afterId;

        return $this;
    }

    /**
     * Gets ownerIdsRemove
     *
     * @return string[]|null
     */
    public function getOwnerIdsRemove()
    {
        return $this->container['ownerIdsRemove'];
    }

    /**
     * Sets ownerIdsRemove
     *
     * @param string[]|null $ownerIdsRemove The UUIDs of the owners to be removed.
     *
     * @return self
     */
    public function setOwnerIdsRemove($ownerIdsRemove)
    {
        if (is_null($ownerIdsRemove)) {
            throw new \InvalidArgumentException('non-nullable ownerIdsRemove cannot be null');
        }


        $this->container['ownerIdsRemove'] = $ownerIdsRemove;

        return $this;
    }

    /**
     * Gets customFieldsAdd
     *
     * @return \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null
     */
    public function getCustomFieldsAdd()
    {
        return $this->container['customFieldsAdd'];
    }

    /**
     * Sets customFieldsAdd
     *
     * @param \Timetoreply\Shortcut\Model\CustomFieldValueParams[]|null $customFieldsAdd A map specifying a CustomField ID and CustomFieldEnumValue ID that represents an assertion of some value for a CustomField.
     *
     * @return self
     */
    public function setCustomFieldsAdd($customFieldsAdd)
    {
        if (is_null($customFieldsAdd)) {
            throw new \InvalidArgumentException('non-nullable customFieldsAdd cannot be null');
        }
        $this->container['customFieldsAdd'] = $customFieldsAdd;

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
     * @param int|null $projectId The ID of the Project the Stories should belong to.
     *
     * @return self
     */
    public function setProjectId($projectId)
    {
        if (is_null($projectId)) {
            array_push($this->openAPINullablesSetToNull, 'projectId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('projectId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets labelsRemove
     *
     * @return \Timetoreply\Shortcut\Model\CreateLabelParams[]|null
     */
    public function getLabelsRemove()
    {
        return $this->container['labelsRemove'];
    }

    /**
     * Sets labelsRemove
     *
     * @param \Timetoreply\Shortcut\Model\CreateLabelParams[]|null $labelsRemove An array of labels to be removed.
     *
     * @return self
     */
    public function setLabelsRemove($labelsRemove)
    {
        if (is_null($labelsRemove)) {
            throw new \InvalidArgumentException('non-nullable labelsRemove cannot be null');
        }
        $this->container['labelsRemove'] = $labelsRemove;

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
            array_push($this->openAPINullablesSetToNull, 'deadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deadline'] = $deadline;

        return $this;
    }

    /**
     * Gets ownerIdsAdd
     *
     * @return string[]|null
     */
    public function getOwnerIdsAdd()
    {
        return $this->container['ownerIdsAdd'];
    }

    /**
     * Sets ownerIdsAdd
     *
     * @param string[]|null $ownerIdsAdd The UUIDs of the new owners to be added.
     *
     * @return self
     */
    public function setOwnerIdsAdd($ownerIdsAdd)
    {
        if (is_null($ownerIdsAdd)) {
            throw new \InvalidArgumentException('non-nullable ownerIdsAdd cannot be null');
        }


        $this->container['ownerIdsAdd'] = $ownerIdsAdd;

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


