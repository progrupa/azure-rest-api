<?php
/**
 * ComputeNodeGetRemoteLoginSettingsResult
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
 * ComputeNodeGetRemoteLoginSettingsResult Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ComputeNodeGetRemoteLoginSettingsResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ComputeNodeGetRemoteLoginSettingsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remote_login_ip_address' => 'string',
        'remote_login_port' => 'int'
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
        'remote_login_ip_address' => 'remoteLoginIPAddress',
        'remote_login_port' => 'remoteLoginPort'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'remote_login_ip_address' => 'setRemoteLoginIpAddress',
        'remote_login_port' => 'setRemoteLoginPort'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'remote_login_ip_address' => 'getRemoteLoginIpAddress',
        'remote_login_port' => 'getRemoteLoginPort'
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
        $this->container['remote_login_ip_address'] = isset($data['remote_login_ip_address']) ? $data['remote_login_ip_address'] : null;
        $this->container['remote_login_port'] = isset($data['remote_login_port']) ? $data['remote_login_port'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['remote_login_ip_address'] === null) {
            $invalid_properties[] = "'remote_login_ip_address' can't be null";
        }
        if ($this->container['remote_login_port'] === null) {
            $invalid_properties[] = "'remote_login_port' can't be null";
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

        if ($this->container['remote_login_ip_address'] === null) {
            return false;
        }
        if ($this->container['remote_login_port'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets remote_login_ip_address
     * @return string
     */
    public function getRemoteLoginIpAddress()
    {
        return $this->container['remote_login_ip_address'];
    }

    /**
     * Sets remote_login_ip_address
     * @param string $remote_login_ip_address
     * @return $this
     */
    public function setRemoteLoginIpAddress($remote_login_ip_address)
    {
        $this->container['remote_login_ip_address'] = $remote_login_ip_address;

        return $this;
    }

    /**
     * Gets remote_login_port
     * @return int
     */
    public function getRemoteLoginPort()
    {
        return $this->container['remote_login_port'];
    }

    /**
     * Sets remote_login_port
     * @param int $remote_login_port
     * @return $this
     */
    public function setRemoteLoginPort($remote_login_port)
    {
        $this->container['remote_login_port'] = $remote_login_port;

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


