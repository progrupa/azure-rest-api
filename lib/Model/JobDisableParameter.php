<?php
/**
 * JobDisableParameter
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
 * JobDisableParameter Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobDisableParameter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'JobDisableParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'disable_tasks' => 'string'
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
        'disable_tasks' => 'disableTasks'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'disable_tasks' => 'setDisableTasks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'disable_tasks' => 'getDisableTasks'
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

    const DISABLE_TASKS_REQUEUE = 'requeue';
    const DISABLE_TASKS_TERMINATE = 'terminate';
    const DISABLE_TASKS_WAIT = 'wait';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDisableTasksAllowableValues()
    {
        return [
            self::DISABLE_TASKS_REQUEUE,
            self::DISABLE_TASKS_TERMINATE,
            self::DISABLE_TASKS_WAIT,
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
        $this->container['disable_tasks'] = isset($data['disable_tasks']) ? $data['disable_tasks'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['disable_tasks'] === null) {
            $invalid_properties[] = "'disable_tasks' can't be null";
        }
        $allowed_values = ["requeue", "terminate", "wait"];
        if (!in_array($this->container['disable_tasks'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'disable_tasks', must be one of 'requeue', 'terminate', 'wait'.";
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

        if ($this->container['disable_tasks'] === null) {
            return false;
        }
        $allowed_values = ["requeue", "terminate", "wait"];
        if (!in_array($this->container['disable_tasks'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets disable_tasks
     * @return string
     */
    public function getDisableTasks()
    {
        return $this->container['disable_tasks'];
    }

    /**
     * Sets disable_tasks
     * @param string $disable_tasks Possible values are: requeue – Terminate running tasks and requeue them. The tasks will run again when the job is enabled. terminate – Terminate running tasks. The tasks will not run again. wait – Allow currently running tasks to complete.
     * @return $this
     */
    public function setDisableTasks($disable_tasks)
    {
        $allowed_values = array('requeue', 'terminate', 'wait');
        if ((!in_array($disable_tasks, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'disable_tasks', must be one of 'requeue', 'terminate', 'wait'");
        }
        $this->container['disable_tasks'] = $disable_tasks;

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


