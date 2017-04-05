<?php
/**
 * TaskInformation
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
 * TaskInformation Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaskInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TaskInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'task_url' => 'string',
        'job_id' => 'string',
        'task_id' => 'string',
        'subtask_id' => 'int',
        'task_state' => 'string',
        'execution_info' => '\Progrupa\Azure\Model\TaskExecutionInformation'
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
        'task_url' => 'taskUrl',
        'job_id' => 'jobId',
        'task_id' => 'taskId',
        'subtask_id' => 'subtaskId',
        'task_state' => 'taskState',
        'execution_info' => 'executionInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'task_url' => 'setTaskUrl',
        'job_id' => 'setJobId',
        'task_id' => 'setTaskId',
        'subtask_id' => 'setSubtaskId',
        'task_state' => 'setTaskState',
        'execution_info' => 'setExecutionInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'task_url' => 'getTaskUrl',
        'job_id' => 'getJobId',
        'task_id' => 'getTaskId',
        'subtask_id' => 'getSubtaskId',
        'task_state' => 'getTaskState',
        'execution_info' => 'getExecutionInfo'
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

    const TASK_STATE_ACTIVE = 'active';
    const TASK_STATE_PREPARING = 'preparing';
    const TASK_STATE_RUNNING = 'running';
    const TASK_STATE_COMPLETED = 'completed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTaskStateAllowableValues()
    {
        return [
            self::TASK_STATE_ACTIVE,
            self::TASK_STATE_PREPARING,
            self::TASK_STATE_RUNNING,
            self::TASK_STATE_COMPLETED,
        ];
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
        $this->container['task_url'] = isset($data['task_url']) ? $data['task_url'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['subtask_id'] = isset($data['subtask_id']) ? $data['subtask_id'] : null;
        $this->container['task_state'] = isset($data['task_state']) ? $data['task_state'] : null;
        $this->container['execution_info'] = isset($data['execution_info']) ? $data['execution_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['task_state'] === null) {
            $invalid_properties[] = "'task_state' can't be null";
        }
        $allowed_values = ["active", "preparing", "running", "completed"];
        if (!in_array($this->container['task_state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'task_state', must be one of 'active', 'preparing', 'running', 'completed'.";
        }

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

        if ($this->container['task_state'] === null) {
            return false;
        }
        $allowed_values = ["active", "preparing", "running", "completed"];
        if (!in_array($this->container['task_state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets task_url
     * @return string
     */
    public function getTaskUrl()
    {
        return $this->container['task_url'];
    }

    /**
     * Sets task_url
     * @param string $task_url
     * @return $this
     */
    public function setTaskUrl($task_url)
    {
        $this->container['task_url'] = $task_url;

        return $this;
    }

    /**
     * Gets job_id
     * @return string
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     * @param string $job_id
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets task_id
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     * @param string $task_id
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets subtask_id
     * @return int
     */
    public function getSubtaskId()
    {
        return $this->container['subtask_id'];
    }

    /**
     * Sets subtask_id
     * @param int $subtask_id
     * @return $this
     */
    public function setSubtaskId($subtask_id)
    {
        $this->container['subtask_id'] = $subtask_id;

        return $this;
    }

    /**
     * Gets task_state
     * @return string
     */
    public function getTaskState()
    {
        return $this->container['task_state'];
    }

    /**
     * Sets task_state
     * @param string $task_state
     * @return $this
     */
    public function setTaskState($task_state)
    {
        $allowed_values = array('active', 'preparing', 'running', 'completed');
        if ((!in_array($task_state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'task_state', must be one of 'active', 'preparing', 'running', 'completed'");
        }
        $this->container['task_state'] = $task_state;

        return $this;
    }

    /**
     * Gets execution_info
     * @return \Progrupa\Azure\Model\TaskExecutionInformation
     */
    public function getExecutionInfo()
    {
        return $this->container['execution_info'];
    }

    /**
     * Sets execution_info
     * @param \Progrupa\Azure\Model\TaskExecutionInformation $execution_info
     * @return $this
     */
    public function setExecutionInfo($execution_info)
    {
        $this->container['execution_info'] = $execution_info;

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

