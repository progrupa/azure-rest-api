<?php
/**
 * NodeReimageParameter
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
 * NodeReimageParameter Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NodeReimageParameter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NodeReimageParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'node_reimage_option' => 'string'
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
        'node_reimage_option' => 'nodeReimageOption'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'node_reimage_option' => 'setNodeReimageOption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'node_reimage_option' => 'getNodeReimageOption'
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

    const NODE_REIMAGE_OPTION_REQUEUE = 'requeue';
    const NODE_REIMAGE_OPTION_TERMINATE = 'terminate';
    const NODE_REIMAGE_OPTION_TASKCOMPLETION = 'taskcompletion';
    const NODE_REIMAGE_OPTION_RETAINEDDATA = 'retaineddata';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNodeReimageOptionAllowableValues()
    {
        return [
            self::NODE_REIMAGE_OPTION_REQUEUE,
            self::NODE_REIMAGE_OPTION_TERMINATE,
            self::NODE_REIMAGE_OPTION_TASKCOMPLETION,
            self::NODE_REIMAGE_OPTION_RETAINEDDATA,
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
        $this->container['node_reimage_option'] = isset($data['node_reimage_option']) ? $data['node_reimage_option'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["requeue", "terminate", "taskcompletion", "retaineddata"];
        if (!in_array($this->container['node_reimage_option'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'node_reimage_option', must be one of 'requeue', 'terminate', 'taskcompletion', 'retaineddata'.";
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

        $allowed_values = ["requeue", "terminate", "taskcompletion", "retaineddata"];
        if (!in_array($this->container['node_reimage_option'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets node_reimage_option
     * @return string
     */
    public function getNodeReimageOption()
    {
        return $this->container['node_reimage_option'];
    }

    /**
     * Sets node_reimage_option
     * @param string $node_reimage_option The default value is requeue.
     * @return $this
     */
    public function setNodeReimageOption($node_reimage_option)
    {
        $allowed_values = array('requeue', 'terminate', 'taskcompletion', 'retaineddata');
        if (!is_null($node_reimage_option) && (!in_array($node_reimage_option, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'node_reimage_option', must be one of 'requeue', 'terminate', 'taskcompletion', 'retaineddata'");
        }
        $this->container['node_reimage_option'] = $node_reimage_option;

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


