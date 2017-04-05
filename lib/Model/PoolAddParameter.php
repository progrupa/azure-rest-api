<?php
/**
 * PoolAddParameter
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
 * PoolAddParameter Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PoolAddParameter implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PoolAddParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'display_name' => 'string',
        'vm_size' => 'string',
        'cloud_service_configuration' => '\Progrupa\Azure\Model\CloudServiceConfiguration',
        'virtual_machine_configuration' => '\Progrupa\Azure\Model\VirtualMachineConfiguration',
        'resize_timeout' => 'string',
        'target_dedicated' => 'int',
        'enable_auto_scale' => 'bool',
        'auto_scale_formula' => 'string',
        'auto_scale_evaluation_interval' => 'string',
        'enable_inter_node_communication' => 'bool',
        'network_configuration' => '\Progrupa\Azure\Model\NetworkConfiguration',
        'start_task' => '\Progrupa\Azure\Model\StartTask',
        'certificate_references' => '\Progrupa\Azure\Model\CertificateReference[]',
        'application_package_references' => '\Progrupa\Azure\Model\ApplicationPackageReference[]',
        'max_tasks_per_node' => 'int',
        'task_scheduling_policy' => '\Progrupa\Azure\Model\TaskSchedulingPolicy',
        'metadata' => '\Progrupa\Azure\Model\MetadataItem[]'
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
        'id' => 'id',
        'display_name' => 'displayName',
        'vm_size' => 'vmSize',
        'cloud_service_configuration' => 'cloudServiceConfiguration',
        'virtual_machine_configuration' => 'virtualMachineConfiguration',
        'resize_timeout' => 'resizeTimeout',
        'target_dedicated' => 'targetDedicated',
        'enable_auto_scale' => 'enableAutoScale',
        'auto_scale_formula' => 'autoScaleFormula',
        'auto_scale_evaluation_interval' => 'autoScaleEvaluationInterval',
        'enable_inter_node_communication' => 'enableInterNodeCommunication',
        'network_configuration' => 'networkConfiguration',
        'start_task' => 'startTask',
        'certificate_references' => 'certificateReferences',
        'application_package_references' => 'applicationPackageReferences',
        'max_tasks_per_node' => 'maxTasksPerNode',
        'task_scheduling_policy' => 'taskSchedulingPolicy',
        'metadata' => 'metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'display_name' => 'setDisplayName',
        'vm_size' => 'setVmSize',
        'cloud_service_configuration' => 'setCloudServiceConfiguration',
        'virtual_machine_configuration' => 'setVirtualMachineConfiguration',
        'resize_timeout' => 'setResizeTimeout',
        'target_dedicated' => 'setTargetDedicated',
        'enable_auto_scale' => 'setEnableAutoScale',
        'auto_scale_formula' => 'setAutoScaleFormula',
        'auto_scale_evaluation_interval' => 'setAutoScaleEvaluationInterval',
        'enable_inter_node_communication' => 'setEnableInterNodeCommunication',
        'network_configuration' => 'setNetworkConfiguration',
        'start_task' => 'setStartTask',
        'certificate_references' => 'setCertificateReferences',
        'application_package_references' => 'setApplicationPackageReferences',
        'max_tasks_per_node' => 'setMaxTasksPerNode',
        'task_scheduling_policy' => 'setTaskSchedulingPolicy',
        'metadata' => 'setMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'display_name' => 'getDisplayName',
        'vm_size' => 'getVmSize',
        'cloud_service_configuration' => 'getCloudServiceConfiguration',
        'virtual_machine_configuration' => 'getVirtualMachineConfiguration',
        'resize_timeout' => 'getResizeTimeout',
        'target_dedicated' => 'getTargetDedicated',
        'enable_auto_scale' => 'getEnableAutoScale',
        'auto_scale_formula' => 'getAutoScaleFormula',
        'auto_scale_evaluation_interval' => 'getAutoScaleEvaluationInterval',
        'enable_inter_node_communication' => 'getEnableInterNodeCommunication',
        'network_configuration' => 'getNetworkConfiguration',
        'start_task' => 'getStartTask',
        'certificate_references' => 'getCertificateReferences',
        'application_package_references' => 'getApplicationPackageReferences',
        'max_tasks_per_node' => 'getMaxTasksPerNode',
        'task_scheduling_policy' => 'getTaskSchedulingPolicy',
        'metadata' => 'getMetadata'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['vm_size'] = isset($data['vm_size']) ? $data['vm_size'] : null;
        $this->container['cloud_service_configuration'] = isset($data['cloud_service_configuration']) ? $data['cloud_service_configuration'] : null;
        $this->container['virtual_machine_configuration'] = isset($data['virtual_machine_configuration']) ? $data['virtual_machine_configuration'] : null;
        $this->container['resize_timeout'] = isset($data['resize_timeout']) ? $data['resize_timeout'] : null;
        $this->container['target_dedicated'] = isset($data['target_dedicated']) ? $data['target_dedicated'] : null;
        $this->container['enable_auto_scale'] = isset($data['enable_auto_scale']) ? $data['enable_auto_scale'] : null;
        $this->container['auto_scale_formula'] = isset($data['auto_scale_formula']) ? $data['auto_scale_formula'] : null;
        $this->container['auto_scale_evaluation_interval'] = isset($data['auto_scale_evaluation_interval']) ? $data['auto_scale_evaluation_interval'] : null;
        $this->container['enable_inter_node_communication'] = isset($data['enable_inter_node_communication']) ? $data['enable_inter_node_communication'] : null;
        $this->container['network_configuration'] = isset($data['network_configuration']) ? $data['network_configuration'] : null;
        $this->container['start_task'] = isset($data['start_task']) ? $data['start_task'] : null;
        $this->container['certificate_references'] = isset($data['certificate_references']) ? $data['certificate_references'] : null;
        $this->container['application_package_references'] = isset($data['application_package_references']) ? $data['application_package_references'] : null;
        $this->container['max_tasks_per_node'] = isset($data['max_tasks_per_node']) ? $data['max_tasks_per_node'] : null;
        $this->container['task_scheduling_policy'] = isset($data['task_scheduling_policy']) ? $data['task_scheduling_policy'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['vm_size'] === null) {
            $invalid_properties[] = "'vm_size' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['vm_size'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The ID can contain any combination of alphanumeric characters including hyphens and underscores, and cannot contain more than 64 characters. The ID is case-preserving and case-insensitive (that is, you may not have two pool IDs within an account that differ only by case).
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name The display name need not be unique and can contain any Unicode characters up to a maximum length of 1024.
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets vm_size
     * @return string
     */
    public function getVmSize()
    {
        return $this->container['vm_size'];
    }

    /**
     * Sets vm_size
     * @param string $vm_size For information about available sizes of virtual machines for Cloud Services pools (pools created with cloudServiceConfiguration), see Sizes for Cloud Services (http://azure.microsoft.com/documentation/articles/cloud-services-sizes-specs/). Batch supports all Cloud Services VM sizes except ExtraSmall. For information about available VM sizes for pools using images from the Virtual Machines Marketplace (pools created with virtualMachineConfiguration) see Sizes for Virtual Machines (Linux) (https://azure.microsoft.com/documentation/articles/virtual-machines-linux-sizes/) or Sizes for Virtual Machines (Windows) (https://azure.microsoft.com/documentation/articles/virtual-machines-windows-sizes/). Batch supports all Azure VM sizes except STANDARD_A0 and those with premium storage (STANDARD_GS, STANDARD_DS, and STANDARD_DSV2 series).
     * @return $this
     */
    public function setVmSize($vm_size)
    {
        $this->container['vm_size'] = $vm_size;

        return $this;
    }

    /**
     * Gets cloud_service_configuration
     * @return \Progrupa\Azure\Model\CloudServiceConfiguration
     */
    public function getCloudServiceConfiguration()
    {
        return $this->container['cloud_service_configuration'];
    }

    /**
     * Sets cloud_service_configuration
     * @param \Progrupa\Azure\Model\CloudServiceConfiguration $cloud_service_configuration This property and virtualMachineConfiguration are mutually exclusive and one of the properties must be specified.
     * @return $this
     */
    public function setCloudServiceConfiguration($cloud_service_configuration)
    {
        $this->container['cloud_service_configuration'] = $cloud_service_configuration;

        return $this;
    }

    /**
     * Gets virtual_machine_configuration
     * @return \Progrupa\Azure\Model\VirtualMachineConfiguration
     */
    public function getVirtualMachineConfiguration()
    {
        return $this->container['virtual_machine_configuration'];
    }

    /**
     * Sets virtual_machine_configuration
     * @param \Progrupa\Azure\Model\VirtualMachineConfiguration $virtual_machine_configuration This property and cloudServiceConfiguration are mutually exclusive and one of the properties must be specified.
     * @return $this
     */
    public function setVirtualMachineConfiguration($virtual_machine_configuration)
    {
        $this->container['virtual_machine_configuration'] = $virtual_machine_configuration;

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
     * @param string $resize_timeout This timeout applies only to manual scaling; it has no effect when enableAutoScale is set to true. The default value is 15 minutes. The minimum value is 5 minutes. If you specify a value less than 5 minutes, the Batch service returns an error; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request).
     * @return $this
     */
    public function setResizeTimeout($resize_timeout)
    {
        $this->container['resize_timeout'] = $resize_timeout;

        return $this;
    }

    /**
     * Gets target_dedicated
     * @return int
     */
    public function getTargetDedicated()
    {
        return $this->container['target_dedicated'];
    }

    /**
     * Sets target_dedicated
     * @param int $target_dedicated This property must have the default value if enableAutoScale is true. It is required if enableAutoScale is false.
     * @return $this
     */
    public function setTargetDedicated($target_dedicated)
    {
        $this->container['target_dedicated'] = $target_dedicated;

        return $this;
    }

    /**
     * Gets enable_auto_scale
     * @return bool
     */
    public function getEnableAutoScale()
    {
        return $this->container['enable_auto_scale'];
    }

    /**
     * Sets enable_auto_scale
     * @param bool $enable_auto_scale If true, the autoScaleFormula property must be set. If false, the targetDedicated property must be set. The default value is false.
     * @return $this
     */
    public function setEnableAutoScale($enable_auto_scale)
    {
        $this->container['enable_auto_scale'] = $enable_auto_scale;

        return $this;
    }

    /**
     * Gets auto_scale_formula
     * @return string
     */
    public function getAutoScaleFormula()
    {
        return $this->container['auto_scale_formula'];
    }

    /**
     * Sets auto_scale_formula
     * @param string $auto_scale_formula This property must not be specified if enableAutoScale is set to false. It is required if enableAutoScale is set to true. The formula is checked for validity before the pool is created. If the formula is not valid, the Batch service rejects the request with detailed error information. For more information about specifying this formula, see 'Automatically scale compute nodes in an Azure Batch pool' (https://azure.microsoft.com/documentation/articles/batch-automatic-scaling/).
     * @return $this
     */
    public function setAutoScaleFormula($auto_scale_formula)
    {
        $this->container['auto_scale_formula'] = $auto_scale_formula;

        return $this;
    }

    /**
     * Gets auto_scale_evaluation_interval
     * @return string
     */
    public function getAutoScaleEvaluationInterval()
    {
        return $this->container['auto_scale_evaluation_interval'];
    }

    /**
     * Sets auto_scale_evaluation_interval
     * @param string $auto_scale_evaluation_interval The default value is 15 minutes. The minimum and maximum value are 5 minutes and 168 hours respectively. If you specify a value less than 5 minutes or greater than 168 hours, the Batch service returns an error; if you are calling the REST API directly, the HTTP status code is 400 (Bad Request).
     * @return $this
     */
    public function setAutoScaleEvaluationInterval($auto_scale_evaluation_interval)
    {
        $this->container['auto_scale_evaluation_interval'] = $auto_scale_evaluation_interval;

        return $this;
    }

    /**
     * Gets enable_inter_node_communication
     * @return bool
     */
    public function getEnableInterNodeCommunication()
    {
        return $this->container['enable_inter_node_communication'];
    }

    /**
     * Sets enable_inter_node_communication
     * @param bool $enable_inter_node_communication Enabling inter-node communication limits the maximum size of the pool due to deployment restrictions on the nodes of the pool. This may result in the pool not reaching its desired size. The default value is false.
     * @return $this
     */
    public function setEnableInterNodeCommunication($enable_inter_node_communication)
    {
        $this->container['enable_inter_node_communication'] = $enable_inter_node_communication;

        return $this;
    }

    /**
     * Gets network_configuration
     * @return \Progrupa\Azure\Model\NetworkConfiguration
     */
    public function getNetworkConfiguration()
    {
        return $this->container['network_configuration'];
    }

    /**
     * Sets network_configuration
     * @param \Progrupa\Azure\Model\NetworkConfiguration $network_configuration
     * @return $this
     */
    public function setNetworkConfiguration($network_configuration)
    {
        $this->container['network_configuration'] = $network_configuration;

        return $this;
    }

    /**
     * Gets start_task
     * @return \Progrupa\Azure\Model\StartTask
     */
    public function getStartTask()
    {
        return $this->container['start_task'];
    }

    /**
     * Sets start_task
     * @param \Progrupa\Azure\Model\StartTask $start_task The task runs when the node is added to the pool or when the node is restarted.
     * @return $this
     */
    public function setStartTask($start_task)
    {
        $this->container['start_task'] = $start_task;

        return $this;
    }

    /**
     * Gets certificate_references
     * @return \Progrupa\Azure\Model\CertificateReference[]
     */
    public function getCertificateReferences()
    {
        return $this->container['certificate_references'];
    }

    /**
     * Sets certificate_references
     * @param \Progrupa\Azure\Model\CertificateReference[] $certificate_references For Windows compute nodes, the Batch service installs the certificates to the specified certificate store and location. For Linux compute nodes, the certificates are stored in a directory inside the task working directory and an environment variable AZ_BATCH_CERTIFICATES_DIR is supplied to the task to query for this location. For certificates with visibility of remoteuser, a certs directory is created in the user's home directory (e.g., /home/<user-name>/certs) where certificates are placed.
     * @return $this
     */
    public function setCertificateReferences($certificate_references)
    {
        $this->container['certificate_references'] = $certificate_references;

        return $this;
    }

    /**
     * Gets application_package_references
     * @return \Progrupa\Azure\Model\ApplicationPackageReference[]
     */
    public function getApplicationPackageReferences()
    {
        return $this->container['application_package_references'];
    }

    /**
     * Sets application_package_references
     * @param \Progrupa\Azure\Model\ApplicationPackageReference[] $application_package_references This property is currently not supported on pools created using the virtualMachineConfiguration (IaaS) property.
     * @return $this
     */
    public function setApplicationPackageReferences($application_package_references)
    {
        $this->container['application_package_references'] = $application_package_references;

        return $this;
    }

    /**
     * Gets max_tasks_per_node
     * @return int
     */
    public function getMaxTasksPerNode()
    {
        return $this->container['max_tasks_per_node'];
    }

    /**
     * Sets max_tasks_per_node
     * @param int $max_tasks_per_node The default value is 1. The maximum value of this setting depends on the size of the compute nodes in the pool (the vmSize setting).
     * @return $this
     */
    public function setMaxTasksPerNode($max_tasks_per_node)
    {
        $this->container['max_tasks_per_node'] = $max_tasks_per_node;

        return $this;
    }

    /**
     * Gets task_scheduling_policy
     * @return \Progrupa\Azure\Model\TaskSchedulingPolicy
     */
    public function getTaskSchedulingPolicy()
    {
        return $this->container['task_scheduling_policy'];
    }

    /**
     * Sets task_scheduling_policy
     * @param \Progrupa\Azure\Model\TaskSchedulingPolicy $task_scheduling_policy
     * @return $this
     */
    public function setTaskSchedulingPolicy($task_scheduling_policy)
    {
        $this->container['task_scheduling_policy'] = $task_scheduling_policy;

        return $this;
    }

    /**
     * Gets metadata
     * @return \Progrupa\Azure\Model\MetadataItem[]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \Progrupa\Azure\Model\MetadataItem[] $metadata The Batch service does not assign any meaning to metadata; it is solely for the use of user code.
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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

