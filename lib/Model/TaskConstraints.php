<?php
/**
 * TaskConstraints
 *
 * PHP version 5
 *
 * @category Class
 * @package  Progrupa\Azure
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BatchService
 *
 * A client for issuing REST requests to the Azure Batch service.
 *
 * OpenAPI spec version: 2016-07-01.3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Progrupa\Azure\Model;

use \ArrayAccess;

/**
 * TaskConstraints Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaskConstraints implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TaskConstraints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_wall_clock_time' => 'string',
        'retention_time' => 'string',
        'max_task_retry_count' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'max_wall_clock_time' => 'maxWallClockTime',
        'retention_time' => 'retentionTime',
        'max_task_retry_count' => 'maxTaskRetryCount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'max_wall_clock_time' => 'setMaxWallClockTime',
        'retention_time' => 'setRetentionTime',
        'max_task_retry_count' => 'setMaxTaskRetryCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'max_wall_clock_time' => 'getMaxWallClockTime',
        'retention_time' => 'getRetentionTime',
        'max_task_retry_count' => 'getMaxTaskRetryCount'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['max_wall_clock_time'] = isset($data['max_wall_clock_time']) ? $data['max_wall_clock_time'] : null;
        $this->container['retention_time'] = isset($data['retention_time']) ? $data['retention_time'] : null;
        $this->container['max_task_retry_count'] = isset($data['max_task_retry_count']) ? $data['max_task_retry_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets max_wall_clock_time
     * @return string
     */
    public function getMaxWallClockTime()
    {
        return $this->container['max_wall_clock_time'];
    }

    /**
     * Sets max_wall_clock_time
     * @param string $max_wall_clock_time If this is not specified, there is no time limit on how long the task may run.
     * @return $this
     */
    public function setMaxWallClockTime($max_wall_clock_time)
    {
        $this->container['max_wall_clock_time'] = $max_wall_clock_time;

        return $this;
    }

    /**
     * Gets retention_time
     * @return string
     */
    public function getRetentionTime()
    {
        return $this->container['retention_time'];
    }

    /**
     * Sets retention_time
     * @param string $retention_time The default is infinite, i.e. the task directory will be retained until the compute node is removed or reimaged.
     * @return $this
     */
    public function setRetentionTime($retention_time)
    {
        $this->container['retention_time'] = $retention_time;

        return $this;
    }

    /**
     * Gets max_task_retry_count
     * @return int
     */
    public function getMaxTaskRetryCount()
    {
        return $this->container['max_task_retry_count'];
    }

    /**
     * Sets max_task_retry_count
     * @param int $max_task_retry_count Note that this value specifically controls the number of retries. The Batch service will try the task once, and may then retry up to this limit. For example, if the maximum retry count is 3, Batch tries the task up to 4 times (one initial try and 3 retries). If the maximum retry count is 0, the Batch service does not retry the task. If the maximum retry count is -1, the Batch service retries the task without limit.
     * @return $this
     */
    public function setMaxTaskRetryCount($max_task_retry_count)
    {
        $this->container['max_task_retry_count'] = $max_task_retry_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Progrupa\Azure\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Progrupa\Azure\ObjectSerializer::sanitizeForSerialization($this));
    }
}


