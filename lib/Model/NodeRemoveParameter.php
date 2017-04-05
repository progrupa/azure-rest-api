<?php
/**
 * NodeRemoveParameter
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
 * NodeRemoveParameter Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NodeRemoveParameter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NodeRemoveParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'node_list' => 'string[]',
        'resize_timeout' => 'string',
        'node_deallocation_option' => 'string'
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
        'node_list' => 'nodeList',
        'resize_timeout' => 'resizeTimeout',
        'node_deallocation_option' => 'nodeDeallocationOption'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'node_list' => 'setNodeList',
        'resize_timeout' => 'setResizeTimeout',
        'node_deallocation_option' => 'setNodeDeallocationOption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'node_list' => 'getNodeList',
        'resize_timeout' => 'getResizeTimeout',
        'node_deallocation_option' => 'getNodeDeallocationOption'
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

    const NODE_DEALLOCATION_OPTION_REQUEUE = 'requeue';
    const NODE_DEALLOCATION_OPTION_TERMINATE = 'terminate';
    const NODE_DEALLOCATION_OPTION_TASKCOMPLETION = 'taskcompletion';
    const NODE_DEALLOCATION_OPTION_RETAINEDDATA = 'retaineddata';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNodeDeallocationOptionAllowableValues()
    {
        return [
            self::NODE_DEALLOCATION_OPTION_REQUEUE,
            self::NODE_DEALLOCATION_OPTION_TERMINATE,
            self::NODE_DEALLOCATION_OPTION_TASKCOMPLETION,
            self::NODE_DEALLOCATION_OPTION_RETAINEDDATA,
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
        $this->container['node_list'] = isset($data['node_list']) ? $data['node_list'] : null;
        $this->container['resize_timeout'] = isset($data['resize_timeout']) ? $data['resize_timeout'] : null;
        $this->container['node_deallocation_option'] = isset($data['node_deallocation_option']) ? $data['node_deallocation_option'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['node_list'] === null) {
            $invalid_properties[] = "'node_list' can't be null";
        }
        $allowed_values = ["requeue", "terminate", "taskcompletion", "retaineddata"];
        if (!in_array($this->container['node_deallocation_option'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'node_deallocation_option', must be one of 'requeue', 'terminate', 'taskcompletion', 'retaineddata'.";
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

        if ($this->container['node_list'] === null) {
            return false;
        }
        $allowed_values = ["requeue", "terminate", "taskcompletion", "retaineddata"];
        if (!in_array($this->container['node_deallocation_option'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets node_list
     * @return string[]
     */
    public function getNodeList()
    {
        return $this->container['node_list'];
    }

    /**
     * Sets node_list
     * @param string[] $node_list
     * @return $this
     */
    public function setNodeList($node_list)
    {
        $this->container['node_list'] = $node_list;

        return $this;
    }

    /**
     * Gets resize_timeout
     * @return string
     */
    public function getResizeTimeout()
    {
        return $this->container['resize_timeout'];
    }

    /**
     * Sets resize_timeout
     * @param string $resize_timeout The default value is 15 minutes. The minimum value is 5 minutes. If you specify a value less than 5 minutes, the Batch service returns an error; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request).
     * @return $this
     */
    public function setResizeTimeout($resize_timeout)
    {
        $this->container['resize_timeout'] = $resize_timeout;

        return $this;
    }

    /**
     * Gets node_deallocation_option
     * @return string
     */
    public function getNodeDeallocationOption()
    {
        return $this->container['node_deallocation_option'];
    }

    /**
     * Sets node_deallocation_option
     * @param string $node_deallocation_option The default value is requeue.
     * @return $this
     */
    public function setNodeDeallocationOption($node_deallocation_option)
    {
        $allowed_values = array('requeue', 'terminate', 'taskcompletion', 'retaineddata');
        if (!is_null($node_deallocation_option) && (!in_array($node_deallocation_option, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'node_deallocation_option', must be one of 'requeue', 'terminate', 'taskcompletion', 'retaineddata'");
        }
        $this->container['node_deallocation_option'] = $node_deallocation_option;

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


