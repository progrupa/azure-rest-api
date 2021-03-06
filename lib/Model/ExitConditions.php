<?php
/**
 * ExitConditions
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
 * ExitConditions Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExitConditions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExitConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exit_codes' => '\Progrupa\Azure\Model\ExitCodeMapping[]',
        'exit_code_ranges' => '\Progrupa\Azure\Model\ExitCodeRangeMapping[]',
        'scheduling_error' => '\Progrupa\Azure\Model\ExitOptions',
        'default' => '\Progrupa\Azure\Model\ExitOptions'
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
        'exit_codes' => 'exitCodes',
        'exit_code_ranges' => 'exitCodeRanges',
        'scheduling_error' => 'schedulingError',
        'default' => 'default'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'exit_codes' => 'setExitCodes',
        'exit_code_ranges' => 'setExitCodeRanges',
        'scheduling_error' => 'setSchedulingError',
        'default' => 'setDefault'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'exit_codes' => 'getExitCodes',
        'exit_code_ranges' => 'getExitCodeRanges',
        'scheduling_error' => 'getSchedulingError',
        'default' => 'getDefault'
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
        $this->container['exit_codes'] = isset($data['exit_codes']) ? $data['exit_codes'] : null;
        $this->container['exit_code_ranges'] = isset($data['exit_code_ranges']) ? $data['exit_code_ranges'] : null;
        $this->container['scheduling_error'] = isset($data['scheduling_error']) ? $data['scheduling_error'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
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
     * Gets exit_codes
     * @return \Progrupa\Azure\Model\ExitCodeMapping[]
     */
    public function getExitCodes()
    {
        return $this->container['exit_codes'];
    }

    /**
     * Sets exit_codes
     * @param \Progrupa\Azure\Model\ExitCodeMapping[] $exit_codes
     * @return $this
     */
    public function setExitCodes($exit_codes)
    {
        $this->container['exit_codes'] = $exit_codes;

        return $this;
    }

    /**
     * Gets exit_code_ranges
     * @return \Progrupa\Azure\Model\ExitCodeRangeMapping[]
     */
    public function getExitCodeRanges()
    {
        return $this->container['exit_code_ranges'];
    }

    /**
     * Sets exit_code_ranges
     * @param \Progrupa\Azure\Model\ExitCodeRangeMapping[] $exit_code_ranges
     * @return $this
     */
    public function setExitCodeRanges($exit_code_ranges)
    {
        $this->container['exit_code_ranges'] = $exit_code_ranges;

        return $this;
    }

    /**
     * Gets scheduling_error
     * @return \Progrupa\Azure\Model\ExitOptions
     */
    public function getSchedulingError()
    {
        return $this->container['scheduling_error'];
    }

    /**
     * Sets scheduling_error
     * @param \Progrupa\Azure\Model\ExitOptions $scheduling_error
     * @return $this
     */
    public function setSchedulingError($scheduling_error)
    {
        $this->container['scheduling_error'] = $scheduling_error;

        return $this;
    }

    /**
     * Gets default
     * @return \Progrupa\Azure\Model\ExitOptions
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param \Progrupa\Azure\Model\ExitOptions $default Note that the default condition does not include exit code 0. If you want non-default behaviour on exit code 0, you must list it explicitly using the exitCodes or exitCodeRanges collection.
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

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


