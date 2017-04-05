<?php
/**
 * JobReleaseTaskExecutionInformation
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
 * JobReleaseTaskExecutionInformation Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobReleaseTaskExecutionInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'JobReleaseTaskExecutionInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'state' => 'string',
        'task_root_directory' => 'string',
        'task_root_directory_url' => 'string',
        'exit_code' => 'int',
        'scheduling_error' => '\Progrupa\Azure\Model\TaskSchedulingError'
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
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'state' => 'state',
        'task_root_directory' => 'taskRootDirectory',
        'task_root_directory_url' => 'taskRootDirectoryUrl',
        'exit_code' => 'exitCode',
        'scheduling_error' => 'schedulingError'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'state' => 'setState',
        'task_root_directory' => 'setTaskRootDirectory',
        'task_root_directory_url' => 'setTaskRootDirectoryUrl',
        'exit_code' => 'setExitCode',
        'scheduling_error' => 'setSchedulingError'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'state' => 'getState',
        'task_root_directory' => 'getTaskRootDirectory',
        'task_root_directory_url' => 'getTaskRootDirectoryUrl',
        'exit_code' => 'getExitCode',
        'scheduling_error' => 'getSchedulingError'
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

    const STATE_RUNNING = 'running';
    const STATE_COMPLETED = 'completed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_RUNNING,
            self::STATE_COMPLETED,
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
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['task_root_directory'] = isset($data['task_root_directory']) ? $data['task_root_directory'] : null;
        $this->container['task_root_directory_url'] = isset($data['task_root_directory_url']) ? $data['task_root_directory_url'] : null;
        $this->container['exit_code'] = isset($data['exit_code']) ? $data['exit_code'] : null;
        $this->container['scheduling_error'] = isset($data['scheduling_error']) ? $data['scheduling_error'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["running", "completed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'running', 'completed'.";
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

        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["running", "completed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param \DateTime $end_time This property is set only if the task is in the Completed state.
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Possible values are: running – the task is currently running (including retrying). completed – the task has exited, or the Batch service was unable to start the task due to scheduling errors.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('running', 'completed');
        if ((!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'running', 'completed'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets task_root_directory
     * @return string
     */
    public function getTaskRootDirectory()
    {
        return $this->container['task_root_directory'];
    }

    /**
     * Sets task_root_directory
     * @param string $task_root_directory
     * @return $this
     */
    public function setTaskRootDirectory($task_root_directory)
    {
        $this->container['task_root_directory'] = $task_root_directory;

        return $this;
    }

    /**
     * Gets task_root_directory_url
     * @return string
     */
    public function getTaskRootDirectoryUrl()
    {
        return $this->container['task_root_directory_url'];
    }

    /**
     * Sets task_root_directory_url
     * @param string $task_root_directory_url
     * @return $this
     */
    public function setTaskRootDirectoryUrl($task_root_directory_url)
    {
        $this->container['task_root_directory_url'] = $task_root_directory_url;

        return $this;
    }

    /**
     * Gets exit_code
     * @return int
     */
    public function getExitCode()
    {
        return $this->container['exit_code'];
    }

    /**
     * Sets exit_code
     * @param int $exit_code This parameter is returned only if the task is in the completed state. The exit code for a process reflects the specific convention implemented by the application developer for that process. If you use the exit code value to make decisions in your code, be sure that you know the exit code convention used by the application process. Note that the exit code may also be generated by the compute node operating system, such as when a process is forcibly terminated.
     * @return $this
     */
    public function setExitCode($exit_code)
    {
        $this->container['exit_code'] = $exit_code;

        return $this;
    }

    /**
     * Gets scheduling_error
     * @return \Progrupa\Azure\Model\TaskSchedulingError
     */
    public function getSchedulingError()
    {
        return $this->container['scheduling_error'];
    }

    /**
     * Sets scheduling_error
     * @param \Progrupa\Azure\Model\TaskSchedulingError $scheduling_error
     * @return $this
     */
    public function setSchedulingError($scheduling_error)
    {
        $this->container['scheduling_error'] = $scheduling_error;

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


