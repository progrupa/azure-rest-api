<?php
/**
 * ComputeNodeInformation
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
 * ComputeNodeInformation Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ComputeNodeInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ComputeNodeInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affinity_id' => 'string',
        'node_url' => 'string',
        'pool_id' => 'string',
        'node_id' => 'string',
        'task_root_directory' => 'string',
        'task_root_directory_url' => 'string'
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
        'affinity_id' => 'affinityId',
        'node_url' => 'nodeUrl',
        'pool_id' => 'poolId',
        'node_id' => 'nodeId',
        'task_root_directory' => 'taskRootDirectory',
        'task_root_directory_url' => 'taskRootDirectoryUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'affinity_id' => 'setAffinityId',
        'node_url' => 'setNodeUrl',
        'pool_id' => 'setPoolId',
        'node_id' => 'setNodeId',
        'task_root_directory' => 'setTaskRootDirectory',
        'task_root_directory_url' => 'setTaskRootDirectoryUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'affinity_id' => 'getAffinityId',
        'node_url' => 'getNodeUrl',
        'pool_id' => 'getPoolId',
        'node_id' => 'getNodeId',
        'task_root_directory' => 'getTaskRootDirectory',
        'task_root_directory_url' => 'getTaskRootDirectoryUrl'
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
        $this->container['affinity_id'] = isset($data['affinity_id']) ? $data['affinity_id'] : null;
        $this->container['node_url'] = isset($data['node_url']) ? $data['node_url'] : null;
        $this->container['pool_id'] = isset($data['pool_id']) ? $data['pool_id'] : null;
        $this->container['node_id'] = isset($data['node_id']) ? $data['node_id'] : null;
        $this->container['task_root_directory'] = isset($data['task_root_directory']) ? $data['task_root_directory'] : null;
        $this->container['task_root_directory_url'] = isset($data['task_root_directory_url']) ? $data['task_root_directory_url'] : null;
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
     * Gets affinity_id
     * @return string
     */
    public function getAffinityId()
    {
        return $this->container['affinity_id'];
    }

    /**
     * Sets affinity_id
     * @param string $affinity_id
     * @return $this
     */
    public function setAffinityId($affinity_id)
    {
        $this->container['affinity_id'] = $affinity_id;

        return $this;
    }

    /**
     * Gets node_url
     * @return string
     */
    public function getNodeUrl()
    {
        return $this->container['node_url'];
    }

    /**
     * Sets node_url
     * @param string $node_url
     * @return $this
     */
    public function setNodeUrl($node_url)
    {
        $this->container['node_url'] = $node_url;

        return $this;
    }

    /**
     * Gets pool_id
     * @return string
     */
    public function getPoolId()
    {
        return $this->container['pool_id'];
    }

    /**
     * Sets pool_id
     * @param string $pool_id
     * @return $this
     */
    public function setPoolId($pool_id)
    {
        $this->container['pool_id'] = $pool_id;

        return $this;
    }

    /**
     * Gets node_id
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['node_id'];
    }

    /**
     * Sets node_id
     * @param string $node_id
     * @return $this
     */
    public function setNodeId($node_id)
    {
        $this->container['node_id'] = $node_id;

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

