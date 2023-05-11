<?php
/**
 * IterationStats
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
 * IterationStats Class Doc Comment
 *
 * @category Class
 * @description A group of calculated values for this Iteration.
 * @package  Timetoreply\Shortcut
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IterationStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'IterationStats';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'numPointsDone' => 'int',
        'numRelatedDocuments' => 'int',
        'averageCycleTime' => 'int',
        'numStoriesUnstarted' => 'int',
        'numPointsStarted' => 'int',
        'numPointsUnstarted' => 'int',
        'numStoriesStarted' => 'int',
        'numStoriesUnestimated' => 'int',
        'numStoriesBacklog' => 'int',
        'averageLeadTime' => 'int',
        'numPointsBacklog' => 'int',
        'numPoints' => 'int',
        'numStoriesDone' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'numPointsDone' => 'int64',
        'numRelatedDocuments' => 'int64',
        'averageCycleTime' => 'int64',
        'numStoriesUnstarted' => 'int64',
        'numPointsStarted' => 'int64',
        'numPointsUnstarted' => 'int64',
        'numStoriesStarted' => 'int64',
        'numStoriesUnestimated' => 'int64',
        'numStoriesBacklog' => 'int64',
        'averageLeadTime' => 'int64',
        'numPointsBacklog' => 'int64',
        'numPoints' => 'int64',
        'numStoriesDone' => 'int64'];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'numPointsDone' => 'num_points_done',
        'numRelatedDocuments' => 'num_related_documents',
        'averageCycleTime' => 'average_cycle_time',
        'numStoriesUnstarted' => 'num_stories_unstarted',
        'numPointsStarted' => 'num_points_started',
        'numPointsUnstarted' => 'num_points_unstarted',
        'numStoriesStarted' => 'num_stories_started',
        'numStoriesUnestimated' => 'num_stories_unestimated',
        'numStoriesBacklog' => 'num_stories_backlog',
        'averageLeadTime' => 'average_lead_time',
        'numPointsBacklog' => 'num_points_backlog',
        'numPoints' => 'num_points',
        'numStoriesDone' => 'num_stories_done'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numPointsDone' => 'setNumPointsDone',
        'numRelatedDocuments' => 'setNumRelatedDocuments',
        'averageCycleTime' => 'setAverageCycleTime',
        'numStoriesUnstarted' => 'setNumStoriesUnstarted',
        'numPointsStarted' => 'setNumPointsStarted',
        'numPointsUnstarted' => 'setNumPointsUnstarted',
        'numStoriesStarted' => 'setNumStoriesStarted',
        'numStoriesUnestimated' => 'setNumStoriesUnestimated',
        'numStoriesBacklog' => 'setNumStoriesBacklog',
        'averageLeadTime' => 'setAverageLeadTime',
        'numPointsBacklog' => 'setNumPointsBacklog',
        'numPoints' => 'setNumPoints',
        'numStoriesDone' => 'setNumStoriesDone'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numPointsDone' => 'getNumPointsDone',
        'numRelatedDocuments' => 'getNumRelatedDocuments',
        'averageCycleTime' => 'getAverageCycleTime',
        'numStoriesUnstarted' => 'getNumStoriesUnstarted',
        'numPointsStarted' => 'getNumPointsStarted',
        'numPointsUnstarted' => 'getNumPointsUnstarted',
        'numStoriesStarted' => 'getNumStoriesStarted',
        'numStoriesUnestimated' => 'getNumStoriesUnestimated',
        'numStoriesBacklog' => 'getNumStoriesBacklog',
        'averageLeadTime' => 'getAverageLeadTime',
        'numPointsBacklog' => 'getNumPointsBacklog',
        'numPoints' => 'getNumPoints',
        'numStoriesDone' => 'getNumStoriesDone'];
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
        $this->container['numPointsDone'] = isset($data['numPointsDone']) ? $data['numPointsDone'] : null;
        $this->container['numRelatedDocuments'] = isset($data['numRelatedDocuments']) ? $data['numRelatedDocuments'] : null;
        $this->container['averageCycleTime'] = isset($data['averageCycleTime']) ? $data['averageCycleTime'] : null;
        $this->container['numStoriesUnstarted'] = isset($data['numStoriesUnstarted']) ? $data['numStoriesUnstarted'] : null;
        $this->container['numPointsStarted'] = isset($data['numPointsStarted']) ? $data['numPointsStarted'] : null;
        $this->container['numPointsUnstarted'] = isset($data['numPointsUnstarted']) ? $data['numPointsUnstarted'] : null;
        $this->container['numStoriesStarted'] = isset($data['numStoriesStarted']) ? $data['numStoriesStarted'] : null;
        $this->container['numStoriesUnestimated'] = isset($data['numStoriesUnestimated']) ? $data['numStoriesUnestimated'] : null;
        $this->container['numStoriesBacklog'] = isset($data['numStoriesBacklog']) ? $data['numStoriesBacklog'] : null;
        $this->container['averageLeadTime'] = isset($data['averageLeadTime']) ? $data['averageLeadTime'] : null;
        $this->container['numPointsBacklog'] = isset($data['numPointsBacklog']) ? $data['numPointsBacklog'] : null;
        $this->container['numPoints'] = isset($data['numPoints']) ? $data['numPoints'] : null;
        $this->container['numStoriesDone'] = isset($data['numStoriesDone']) ? $data['numStoriesDone'] : null;
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

        if ($this->container['numPointsDone'] === null) {
            $invalidProperties[] = "'numPointsDone' can't be null";
        }
        if ($this->container['numRelatedDocuments'] === null) {
            $invalidProperties[] = "'numRelatedDocuments' can't be null";
        }
        if ($this->container['numStoriesUnstarted'] === null) {
            $invalidProperties[] = "'numStoriesUnstarted' can't be null";
        }
        if ($this->container['numPointsStarted'] === null) {
            $invalidProperties[] = "'numPointsStarted' can't be null";
        }
        if ($this->container['numPointsUnstarted'] === null) {
            $invalidProperties[] = "'numPointsUnstarted' can't be null";
        }
        if ($this->container['numStoriesStarted'] === null) {
            $invalidProperties[] = "'numStoriesStarted' can't be null";
        }
        if ($this->container['numStoriesUnestimated'] === null) {
            $invalidProperties[] = "'numStoriesUnestimated' can't be null";
        }
        if ($this->container['numStoriesBacklog'] === null) {
            $invalidProperties[] = "'numStoriesBacklog' can't be null";
        }
        if ($this->container['numPointsBacklog'] === null) {
            $invalidProperties[] = "'numPointsBacklog' can't be null";
        }
        if ($this->container['numPoints'] === null) {
            $invalidProperties[] = "'numPoints' can't be null";
        }
        if ($this->container['numStoriesDone'] === null) {
            $invalidProperties[] = "'numStoriesDone' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets numPointsDone
     *
     * @return int
     */
    public function getNumPointsDone()
    {
        return $this->container['numPointsDone'];
    }

    /**
     * Sets numPointsDone
     *
     * @param int $numPointsDone The total number of completed points in this Iteration.
     *
     * @return $this
     */
    public function setNumPointsDone($numPointsDone)
    {
        $this->container['numPointsDone'] = $numPointsDone;

        return $this;
    }

    /**
     * Gets numRelatedDocuments
     *
     * @return int
     */
    public function getNumRelatedDocuments()
    {
        return $this->container['numRelatedDocuments'];
    }

    /**
     * Sets numRelatedDocuments
     *
     * @param int $numRelatedDocuments The total number of documents related to an Iteration
     *
     * @return $this
     */
    public function setNumRelatedDocuments($numRelatedDocuments)
    {
        $this->container['numRelatedDocuments'] = $numRelatedDocuments;

        return $this;
    }

    /**
     * Gets averageCycleTime
     *
     * @return int
     */
    public function getAverageCycleTime()
    {
        return $this->container['averageCycleTime'];
    }

    /**
     * Sets averageCycleTime
     *
     * @param int $averageCycleTime The average cycle time (in seconds) of completed stories in this Iteration.
     *
     * @return $this
     */
    public function setAverageCycleTime($averageCycleTime)
    {
        $this->container['averageCycleTime'] = $averageCycleTime;

        return $this;
    }

    /**
     * Gets numStoriesUnstarted
     *
     * @return int
     */
    public function getNumStoriesUnstarted()
    {
        return $this->container['numStoriesUnstarted'];
    }

    /**
     * Sets numStoriesUnstarted
     *
     * @param int $numStoriesUnstarted The total number of unstarted Stories in this Iteration.
     *
     * @return $this
     */
    public function setNumStoriesUnstarted($numStoriesUnstarted)
    {
        $this->container['numStoriesUnstarted'] = $numStoriesUnstarted;

        return $this;
    }

    /**
     * Gets numPointsStarted
     *
     * @return int
     */
    public function getNumPointsStarted()
    {
        return $this->container['numPointsStarted'];
    }

    /**
     * Sets numPointsStarted
     *
     * @param int $numPointsStarted The total number of started points in this Iteration.
     *
     * @return $this
     */
    public function setNumPointsStarted($numPointsStarted)
    {
        $this->container['numPointsStarted'] = $numPointsStarted;

        return $this;
    }

    /**
     * Gets numPointsUnstarted
     *
     * @return int
     */
    public function getNumPointsUnstarted()
    {
        return $this->container['numPointsUnstarted'];
    }

    /**
     * Sets numPointsUnstarted
     *
     * @param int $numPointsUnstarted The total number of unstarted points in this Iteration.
     *
     * @return $this
     */
    public function setNumPointsUnstarted($numPointsUnstarted)
    {
        $this->container['numPointsUnstarted'] = $numPointsUnstarted;

        return $this;
    }

    /**
     * Gets numStoriesStarted
     *
     * @return int
     */
    public function getNumStoriesStarted()
    {
        return $this->container['numStoriesStarted'];
    }

    /**
     * Sets numStoriesStarted
     *
     * @param int $numStoriesStarted The total number of started Stories in this Iteration.
     *
     * @return $this
     */
    public function setNumStoriesStarted($numStoriesStarted)
    {
        $this->container['numStoriesStarted'] = $numStoriesStarted;

        return $this;
    }

    /**
     * Gets numStoriesUnestimated
     *
     * @return int
     */
    public function getNumStoriesUnestimated()
    {
        return $this->container['numStoriesUnestimated'];
    }

    /**
     * Sets numStoriesUnestimated
     *
     * @param int $numStoriesUnestimated The total number of Stories with no point estimate.
     *
     * @return $this
     */
    public function setNumStoriesUnestimated($numStoriesUnestimated)
    {
        $this->container['numStoriesUnestimated'] = $numStoriesUnestimated;

        return $this;
    }

    /**
     * Gets numStoriesBacklog
     *
     * @return int
     */
    public function getNumStoriesBacklog()
    {
        return $this->container['numStoriesBacklog'];
    }

    /**
     * Sets numStoriesBacklog
     *
     * @param int $numStoriesBacklog The total number of backlog Stories in this Iteration.
     *
     * @return $this
     */
    public function setNumStoriesBacklog($numStoriesBacklog)
    {
        $this->container['numStoriesBacklog'] = $numStoriesBacklog;

        return $this;
    }

    /**
     * Gets averageLeadTime
     *
     * @return int
     */
    public function getAverageLeadTime()
    {
        return $this->container['averageLeadTime'];
    }

    /**
     * Sets averageLeadTime
     *
     * @param int $averageLeadTime The average lead time (in seconds) of completed stories in this Iteration.
     *
     * @return $this
     */
    public function setAverageLeadTime($averageLeadTime)
    {
        $this->container['averageLeadTime'] = $averageLeadTime;

        return $this;
    }

    /**
     * Gets numPointsBacklog
     *
     * @return int
     */
    public function getNumPointsBacklog()
    {
        return $this->container['numPointsBacklog'];
    }

    /**
     * Sets numPointsBacklog
     *
     * @param int $numPointsBacklog The total number of backlog points in this Iteration.
     *
     * @return $this
     */
    public function setNumPointsBacklog($numPointsBacklog)
    {
        $this->container['numPointsBacklog'] = $numPointsBacklog;

        return $this;
    }

    /**
     * Gets numPoints
     *
     * @return int
     */
    public function getNumPoints()
    {
        return $this->container['numPoints'];
    }

    /**
     * Sets numPoints
     *
     * @param int $numPoints The total number of points in this Iteration.
     *
     * @return $this
     */
    public function setNumPoints($numPoints)
    {
        $this->container['numPoints'] = $numPoints;

        return $this;
    }

    /**
     * Gets numStoriesDone
     *
     * @return int
     */
    public function getNumStoriesDone()
    {
        return $this->container['numStoriesDone'];
    }

    /**
     * Sets numStoriesDone
     *
     * @param int $numStoriesDone The total number of done Stories in this Iteration.
     *
     * @return $this
     */
    public function setNumStoriesDone($numStoriesDone)
    {
        $this->container['numStoriesDone'] = $numStoriesDone;

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
