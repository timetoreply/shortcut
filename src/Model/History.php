<?php
/**
 * History
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
 * History Class Doc Comment
 *
 * @category Class
 * @description A history item is a group of actions that represent a transactional change to a Story.
 * @package  Timetoreply\Shortcut
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class History implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'History';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actorName' => 'string',
        'changedAt' => 'string',
        'primaryId' => '\Timetoreply\Shortcut\Model\HistoryPrimaryId',
        'references' => '\Timetoreply\Shortcut\Model\HistoryReferencesInner[]',
        'actions' => '\Timetoreply\Shortcut\Model\HistoryActionsInner[]',
        'memberId' => 'string',
        'externalId' => 'string',
        'id' => 'string',
        'version' => 'string',
        'webhookId' => 'string',
        'automationId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actorName' => null,
        'changedAt' => null,
        'primaryId' => null,
        'references' => null,
        'actions' => null,
        'memberId' => 'uuid',
        'externalId' => null,
        'id' => 'uuid',
        'version' => null,
        'webhookId' => null,
        'automationId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'actorName' => false,
        'changedAt' => false,
        'primaryId' => false,
        'references' => false,
        'actions' => false,
        'memberId' => false,
        'externalId' => false,
        'id' => false,
        'version' => false,
        'webhookId' => true,
        'automationId' => false
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
        'actorName' => 'actor_name',
        'changedAt' => 'changed_at',
        'primaryId' => 'primary_id',
        'references' => 'references',
        'actions' => 'actions',
        'memberId' => 'member_id',
        'externalId' => 'external_id',
        'id' => 'id',
        'version' => 'version',
        'webhookId' => 'webhook_id',
        'automationId' => 'automation_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actorName' => 'setActorName',
        'changedAt' => 'setChangedAt',
        'primaryId' => 'setPrimaryId',
        'references' => 'setReferences',
        'actions' => 'setActions',
        'memberId' => 'setMemberId',
        'externalId' => 'setExternalId',
        'id' => 'setId',
        'version' => 'setVersion',
        'webhookId' => 'setWebhookId',
        'automationId' => 'setAutomationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actorName' => 'getActorName',
        'changedAt' => 'getChangedAt',
        'primaryId' => 'getPrimaryId',
        'references' => 'getReferences',
        'actions' => 'getActions',
        'memberId' => 'getMemberId',
        'externalId' => 'getExternalId',
        'id' => 'getId',
        'version' => 'getVersion',
        'webhookId' => 'getWebhookId',
        'automationId' => 'getAutomationId'
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

    public const VERSION_V1 = 'v1';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_V1,
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
        $this->setIfExists('actorName', $data ?? [], null);
        $this->setIfExists('changedAt', $data ?? [], null);
        $this->setIfExists('primaryId', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('memberId', $data ?? [], null);
        $this->setIfExists('externalId', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('webhookId', $data ?? [], null);
        $this->setIfExists('automationId', $data ?? [], null);
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

        if ($this->container['changedAt'] === null) {
            $invalidProperties[] = "'changedAt' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'version', must be one of '%s'",
                $this->container['version'],
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
     * Gets actorName
     *
     * @return string|null
     */
    public function getActorName()
    {
        return $this->container['actorName'];
    }

    /**
     * Sets actorName
     *
     * @param string|null $actorName The name of the actor that performed the action, if it can be determined.
     *
     * @return self
     */
    public function setActorName($actorName)
    {
        if (is_null($actorName)) {
            throw new \InvalidArgumentException('non-nullable actorName cannot be null');
        }
        $this->container['actorName'] = $actorName;

        return $this;
    }

    /**
     * Gets changedAt
     *
     * @return string
     */
    public function getChangedAt()
    {
        return $this->container['changedAt'];
    }

    /**
     * Sets changedAt
     *
     * @param string $changedAt The date when the change occurred.
     *
     * @return self
     */
    public function setChangedAt($changedAt)
    {
        if (is_null($changedAt)) {
            throw new \InvalidArgumentException('non-nullable changedAt cannot be null');
        }
        $this->container['changedAt'] = $changedAt;

        return $this;
    }

    /**
     * Gets primaryId
     *
     * @return \Timetoreply\Shortcut\Model\HistoryPrimaryId|null
     */
    public function getPrimaryId()
    {
        return $this->container['primaryId'];
    }

    /**
     * Sets primaryId
     *
     * @param \Timetoreply\Shortcut\Model\HistoryPrimaryId|null $primaryId primaryId
     *
     * @return self
     */
    public function setPrimaryId($primaryId)
    {
        if (is_null($primaryId)) {
            throw new \InvalidArgumentException('non-nullable primaryId cannot be null');
        }
        $this->container['primaryId'] = $primaryId;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \Timetoreply\Shortcut\Model\HistoryReferencesInner[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Timetoreply\Shortcut\Model\HistoryReferencesInner[]|null $references An array of objects affected by the change. Reference objects provide basic information for the entities reference in the history actions. Some have specific fields, but they always contain an id, entity_type, and a name.
     *
     * @return self
     */
    public function setReferences($references)
    {
        if (is_null($references)) {
            throw new \InvalidArgumentException('non-nullable references cannot be null');
        }
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \Timetoreply\Shortcut\Model\HistoryActionsInner[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \Timetoreply\Shortcut\Model\HistoryActionsInner[] $actions An array of actions that were performed for the change.
     *
     * @return self
     */
    public function setActions($actions)
    {
        if (is_null($actions)) {
            throw new \InvalidArgumentException('non-nullable actions cannot be null');
        }
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets memberId
     *
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     *
     * @param string|null $memberId The ID of the member who performed the change.
     *
     * @return self
     */
    public function setMemberId($memberId)
    {
        if (is_null($memberId)) {
            throw new \InvalidArgumentException('non-nullable memberId cannot be null');
        }
        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId The ID of the webhook that handled the change.
     *
     * @return self
     */
    public function setExternalId($externalId)
    {
        if (is_null($externalId)) {
            throw new \InvalidArgumentException('non-nullable externalId cannot be null');
        }
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID representing the change for the story.
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The version of the change format.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $allowedValues = $this->getVersionAllowableValues();
        if (!in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'version', must be one of '%s'",
                    $version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets webhookId
     *
     * @return string|null
     */
    public function getWebhookId()
    {
        return $this->container['webhookId'];
    }

    /**
     * Sets webhookId
     *
     * @param string|null $webhookId The ID of the webhook that handled the change.
     *
     * @return self
     */
    public function setWebhookId($webhookId)
    {
        if (is_null($webhookId)) {
            array_push($this->openAPINullablesSetToNull, 'webhookId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webhookId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['webhookId'] = $webhookId;

        return $this;
    }

    /**
     * Gets automationId
     *
     * @return string|null
     */
    public function getAutomationId()
    {
        return $this->container['automationId'];
    }

    /**
     * Sets automationId
     *
     * @param string|null $automationId The ID of the automation that performed the change.
     *
     * @return self
     */
    public function setAutomationId($automationId)
    {
        if (is_null($automationId)) {
            throw new \InvalidArgumentException('non-nullable automationId cannot be null');
        }
        $this->container['automationId'] = $automationId;

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


