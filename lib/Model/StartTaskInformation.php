<?php
/**
 * StartTaskInformation
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
 * StartTaskInformation Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StartTaskInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StartTaskInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'exit_code' => 'int',
        'scheduling_error' => '\Progrupa\Azure\Model\TaskSchedulingError',
        'retry_count' => 'int',
        'last_retry_time' => '\DateTime'
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
        'state' => 'state',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'exit_code' => 'exitCode',
        'scheduling_error' => 'schedulingError',
        'retry_count' => 'retryCount',
        'last_retry_time' => 'lastRetryTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'exit_code' => 'setExitCode',
        'scheduling_error' => 'setSchedulingError',
        'retry_count' => 'setRetryCount',
        'last_retry_time' => 'setLastRetryTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'exit_code' => 'getExitCode',
        'scheduling_error' => 'getSchedulingError',
        'retry_count' => 'getRetryCount',
        'last_retry_time' => 'getLastRetryTime'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['exit_code'] = isset($data['exit_code']) ? $data['exit_code'] : null;
        $this->container['scheduling_error'] = isset($data['scheduling_error']) ? $data['scheduling_error'] : null;
        $this->container['retry_count'] = isset($data['retry_count']) ? $data['retry_count'] : null;
        $this->container['last_retry_time'] = isset($data['last_retry_time']) ? $data['last_retry_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = ["running", "completed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'running', 'completed'.";
        }

        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        if ($this->container['retry_count'] === null) {
            $invalid_properties[] = "'retry_count' can't be null";
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

        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = ["running", "completed"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['retry_count'] === null) {
            return false;
        }
        return true;
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
     * @param string $state Possible values are: running – The start task is currently running. completed – The start task has exited with exit code 0, or the start task has failed and the retry limit has reached, or the start task process did not run due to scheduling errors.
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
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time This value is reset every time the task is restarted or retried (that is, this is the most recent time at which the start task started running).
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
     * @param \DateTime $end_time This is the end time of the most recent run of the start task, if that run has completed (even if that run failed and a retry is pending). This element is not present if the start task is currently running.
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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
     * @param int $exit_code This property is set only if the start task is in the completed state. In general, the exit code for a process reflects the specific convention implemented by the application developer for that process. If you use the exit code value to make decisions in your code, be sure that you know the exit code convention used by the application process. However, if the Batch service terminates the start task (due to timeout, or user termination via the API) you may see an operating system-defined exit code.
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
     * Gets retry_count
     * @return int
     */
    public function getRetryCount()
    {
        return $this->container['retry_count'];
    }

    /**
     * Sets retry_count
     * @param int $retry_count The task is retried if it exits with a nonzero exit code, up to the specified MaxTaskRetryCount.
     * @return $this
     */
    public function setRetryCount($retry_count)
    {
        $this->container['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Gets last_retry_time
     * @return \DateTime
     */
    public function getLastRetryTime()
    {
        return $this->container['last_retry_time'];
    }

    /**
     * Sets last_retry_time
     * @param \DateTime $last_retry_time This element is present only if the task was retried (i.e. retryCount is nonzero). If present, this is typically the same as startTime, but may be different if the task has been restarted for reasons other than retry; for example, if the compute node was rebooted during a retry, then the startTime is updated but the lastRetryTime is not.
     * @return $this
     */
    public function setLastRetryTime($last_retry_time)
    {
        $this->container['last_retry_time'] = $last_retry_time;

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


