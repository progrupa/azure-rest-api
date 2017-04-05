<?php
/**
 * StartTask
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
 * StartTask Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StartTask implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StartTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'command_line' => 'string',
        'resource_files' => '\Progrupa\Azure\Model\ResourceFile[]',
        'environment_settings' => '\Progrupa\Azure\Model\EnvironmentSetting[]',
        'run_elevated' => 'bool',
        'max_task_retry_count' => 'int',
        'wait_for_success' => 'bool'
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
        'command_line' => 'commandLine',
        'resource_files' => 'resourceFiles',
        'environment_settings' => 'environmentSettings',
        'run_elevated' => 'runElevated',
        'max_task_retry_count' => 'maxTaskRetryCount',
        'wait_for_success' => 'waitForSuccess'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'command_line' => 'setCommandLine',
        'resource_files' => 'setResourceFiles',
        'environment_settings' => 'setEnvironmentSettings',
        'run_elevated' => 'setRunElevated',
        'max_task_retry_count' => 'setMaxTaskRetryCount',
        'wait_for_success' => 'setWaitForSuccess'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'command_line' => 'getCommandLine',
        'resource_files' => 'getResourceFiles',
        'environment_settings' => 'getEnvironmentSettings',
        'run_elevated' => 'getRunElevated',
        'max_task_retry_count' => 'getMaxTaskRetryCount',
        'wait_for_success' => 'getWaitForSuccess'
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
        $this->container['command_line'] = isset($data['command_line']) ? $data['command_line'] : null;
        $this->container['resource_files'] = isset($data['resource_files']) ? $data['resource_files'] : null;
        $this->container['environment_settings'] = isset($data['environment_settings']) ? $data['environment_settings'] : null;
        $this->container['run_elevated'] = isset($data['run_elevated']) ? $data['run_elevated'] : null;
        $this->container['max_task_retry_count'] = isset($data['max_task_retry_count']) ? $data['max_task_retry_count'] : null;
        $this->container['wait_for_success'] = isset($data['wait_for_success']) ? $data['wait_for_success'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['command_line'] === null) {
            $invalid_properties[] = "'command_line' can't be null";
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

        if ($this->container['command_line'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets command_line
     * @return string
     */
    public function getCommandLine()
    {
        return $this->container['command_line'];
    }

    /**
     * Sets command_line
     * @param string $command_line The command line does not run under a shell, and therefore cannot take advantage of shell features such as environment variable expansion. If you want to take advantage of such features, you should invoke the shell in the command line, for example using \"cmd /c MyCommand\" in Windows or \"/bin/sh -c MyCommand\" in Linux.
     * @return $this
     */
    public function setCommandLine($command_line)
    {
        $this->container['command_line'] = $command_line;

        return $this;
    }

    /**
     * Gets resource_files
     * @return \Progrupa\Azure\Model\ResourceFile[]
     */
    public function getResourceFiles()
    {
        return $this->container['resource_files'];
    }

    /**
     * Sets resource_files
     * @param \Progrupa\Azure\Model\ResourceFile[] $resource_files
     * @return $this
     */
    public function setResourceFiles($resource_files)
    {
        $this->container['resource_files'] = $resource_files;

        return $this;
    }

    /**
     * Gets environment_settings
     * @return \Progrupa\Azure\Model\EnvironmentSetting[]
     */
    public function getEnvironmentSettings()
    {
        return $this->container['environment_settings'];
    }

    /**
     * Sets environment_settings
     * @param \Progrupa\Azure\Model\EnvironmentSetting[] $environment_settings
     * @return $this
     */
    public function setEnvironmentSettings($environment_settings)
    {
        $this->container['environment_settings'] = $environment_settings;

        return $this;
    }

    /**
     * Gets run_elevated
     * @return bool
     */
    public function getRunElevated()
    {
        return $this->container['run_elevated'];
    }

    /**
     * Sets run_elevated
     * @param bool $run_elevated
     * @return $this
     */
    public function setRunElevated($run_elevated)
    {
        $this->container['run_elevated'] = $run_elevated;

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
     * @param int $max_task_retry_count The Batch service retries a task if its exit code is nonzero. Note that this value specifically controls the number of retries. The Batch service will try the task once, and may then retry up to this limit. For example, if the maximum retry count is 3, Batch tries the task up to 4 times (one initial try and 3 retries). If the maximum retry count is 0, the Batch service does not retry the task. If the maximum retry count is -1, the Batch service retries the task without limit.
     * @return $this
     */
    public function setMaxTaskRetryCount($max_task_retry_count)
    {
        $this->container['max_task_retry_count'] = $max_task_retry_count;

        return $this;
    }

    /**
     * Gets wait_for_success
     * @return bool
     */
    public function getWaitForSuccess()
    {
        return $this->container['wait_for_success'];
    }

    /**
     * Sets wait_for_success
     * @param bool $wait_for_success If true and the start task fails on a compute node, the Batch service retries the start task up to its maximum retry count (maxTaskRetryCount). If the task has still not completed successfully after all retries, then the Batch service marks the compute node unusable, and will not schedule tasks to it. This condition can be detected via the node state and scheduling error detail. If false, the Batch service will not wait for the start task to complete. In this case, other tasks can start executing on the compute node while the start task is still running; and even if the start task fails, new tasks will continue to be scheduled on the node. The default is false.
     * @return $this
     */
    public function setWaitForSuccess($wait_for_success)
    {
        $this->container['wait_for_success'] = $wait_for_success;

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


