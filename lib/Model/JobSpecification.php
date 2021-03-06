<?php
/**
 * JobSpecification
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
 * JobSpecification Class Doc Comment
 *
 * @category    Class
 * @package     Progrupa\Azure
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobSpecification implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'JobSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priority' => 'int',
        'display_name' => 'string',
        'uses_task_dependencies' => 'bool',
        'on_all_tasks_complete' => 'string',
        'on_task_failure' => 'string',
        'constraints' => '\Progrupa\Azure\Model\JobConstraints',
        'job_manager_task' => '\Progrupa\Azure\Model\JobManagerTask',
        'job_preparation_task' => '\Progrupa\Azure\Model\JobPreparationTask',
        'job_release_task' => '\Progrupa\Azure\Model\JobReleaseTask',
        'common_environment_settings' => '\Progrupa\Azure\Model\EnvironmentSetting[]',
        'pool_info' => '\Progrupa\Azure\Model\PoolInformation',
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
        'priority' => 'priority',
        'display_name' => 'displayName',
        'uses_task_dependencies' => 'usesTaskDependencies',
        'on_all_tasks_complete' => 'onAllTasksComplete',
        'on_task_failure' => 'onTaskFailure',
        'constraints' => 'constraints',
        'job_manager_task' => 'jobManagerTask',
        'job_preparation_task' => 'jobPreparationTask',
        'job_release_task' => 'jobReleaseTask',
        'common_environment_settings' => 'commonEnvironmentSettings',
        'pool_info' => 'poolInfo',
        'metadata' => 'metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'priority' => 'setPriority',
        'display_name' => 'setDisplayName',
        'uses_task_dependencies' => 'setUsesTaskDependencies',
        'on_all_tasks_complete' => 'setOnAllTasksComplete',
        'on_task_failure' => 'setOnTaskFailure',
        'constraints' => 'setConstraints',
        'job_manager_task' => 'setJobManagerTask',
        'job_preparation_task' => 'setJobPreparationTask',
        'job_release_task' => 'setJobReleaseTask',
        'common_environment_settings' => 'setCommonEnvironmentSettings',
        'pool_info' => 'setPoolInfo',
        'metadata' => 'setMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'priority' => 'getPriority',
        'display_name' => 'getDisplayName',
        'uses_task_dependencies' => 'getUsesTaskDependencies',
        'on_all_tasks_complete' => 'getOnAllTasksComplete',
        'on_task_failure' => 'getOnTaskFailure',
        'constraints' => 'getConstraints',
        'job_manager_task' => 'getJobManagerTask',
        'job_preparation_task' => 'getJobPreparationTask',
        'job_release_task' => 'getJobReleaseTask',
        'common_environment_settings' => 'getCommonEnvironmentSettings',
        'pool_info' => 'getPoolInfo',
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

    const ON_ALL_TASKS_COMPLETE_NO_ACTION = 'noAction';
    const ON_ALL_TASKS_COMPLETE_TERMINATE_JOB = 'terminateJob';
    const ON_TASK_FAILURE_NO_ACTION = 'noAction';
    const ON_TASK_FAILURE_PERFORM_EXIT_OPTIONS_JOB_ACTION = 'performExitOptionsJobAction';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOnAllTasksCompleteAllowableValues()
    {
        return [
            self::ON_ALL_TASKS_COMPLETE_NO_ACTION,
            self::ON_ALL_TASKS_COMPLETE_TERMINATE_JOB,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOnTaskFailureAllowableValues()
    {
        return [
            self::ON_TASK_FAILURE_NO_ACTION,
            self::ON_TASK_FAILURE_PERFORM_EXIT_OPTIONS_JOB_ACTION,
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['uses_task_dependencies'] = isset($data['uses_task_dependencies']) ? $data['uses_task_dependencies'] : null;
        $this->container['on_all_tasks_complete'] = isset($data['on_all_tasks_complete']) ? $data['on_all_tasks_complete'] : null;
        $this->container['on_task_failure'] = isset($data['on_task_failure']) ? $data['on_task_failure'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['job_manager_task'] = isset($data['job_manager_task']) ? $data['job_manager_task'] : null;
        $this->container['job_preparation_task'] = isset($data['job_preparation_task']) ? $data['job_preparation_task'] : null;
        $this->container['job_release_task'] = isset($data['job_release_task']) ? $data['job_release_task'] : null;
        $this->container['common_environment_settings'] = isset($data['common_environment_settings']) ? $data['common_environment_settings'] : null;
        $this->container['pool_info'] = isset($data['pool_info']) ? $data['pool_info'] : null;
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

        $allowed_values = ["noAction", "terminateJob"];
        if (!in_array($this->container['on_all_tasks_complete'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'on_all_tasks_complete', must be one of 'noAction', 'terminateJob'.";
        }

        $allowed_values = ["noAction", "performExitOptionsJobAction"];
        if (!in_array($this->container['on_task_failure'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'on_task_failure', must be one of 'noAction', 'performExitOptionsJobAction'.";
        }

        if ($this->container['pool_info'] === null) {
            $invalid_properties[] = "'pool_info' can't be null";
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

        $allowed_values = ["noAction", "terminateJob"];
        if (!in_array($this->container['on_all_tasks_complete'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["noAction", "performExitOptionsJobAction"];
        if (!in_array($this->container['on_task_failure'], $allowed_values)) {
            return false;
        }
        if ($this->container['pool_info'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority Priority values can range from -1000 to 1000, with -1000 being the lowest priority and 1000 being the highest priority. The default value is 0. This priority is used as the default for all jobs under the job schedule. You can update a job's priority after it has been created using by using the update job API.
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * @param string $display_name The name need not be unique and can contain any Unicode characters up to a maximum length of 1024.
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets uses_task_dependencies
     * @return bool
     */
    public function getUsesTaskDependencies()
    {
        return $this->container['uses_task_dependencies'];
    }

    /**
     * Sets uses_task_dependencies
     * @param bool $uses_task_dependencies
     * @return $this
     */
    public function setUsesTaskDependencies($uses_task_dependencies)
    {
        $this->container['uses_task_dependencies'] = $uses_task_dependencies;

        return $this;
    }

    /**
     * Gets on_all_tasks_complete
     * @return string
     */
    public function getOnAllTasksComplete()
    {
        return $this->container['on_all_tasks_complete'];
    }

    /**
     * Sets on_all_tasks_complete
     * @param string $on_all_tasks_complete Note that if a job contains no tasks, then all tasks are considered complete. This option is therefore most commonly used with a job manager task; if you want to use automatic job termination without a job manager, you should initially set onAllTasksComplete to noaction and update the job properties to set onAllTasksComplete to terminatejob once you have finished adding tasks. The default is noaction.
     * @return $this
     */
    public function setOnAllTasksComplete($on_all_tasks_complete)
    {
        $allowed_values = array('noAction', 'terminateJob');
        if (!is_null($on_all_tasks_complete) && (!in_array($on_all_tasks_complete, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'on_all_tasks_complete', must be one of 'noAction', 'terminateJob'");
        }
        $this->container['on_all_tasks_complete'] = $on_all_tasks_complete;

        return $this;
    }

    /**
     * Gets on_task_failure
     * @return string
     */
    public function getOnTaskFailure()
    {
        return $this->container['on_task_failure'];
    }

    /**
     * Sets on_task_failure
     * @param string $on_task_failure The default is noaction.
     * @return $this
     */
    public function setOnTaskFailure($on_task_failure)
    {
        $allowed_values = array('noAction', 'performExitOptionsJobAction');
        if (!is_null($on_task_failure) && (!in_array($on_task_failure, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'on_task_failure', must be one of 'noAction', 'performExitOptionsJobAction'");
        }
        $this->container['on_task_failure'] = $on_task_failure;

        return $this;
    }

    /**
     * Gets constraints
     * @return \Progrupa\Azure\Model\JobConstraints
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     * @param \Progrupa\Azure\Model\JobConstraints $constraints
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets job_manager_task
     * @return \Progrupa\Azure\Model\JobManagerTask
     */
    public function getJobManagerTask()
    {
        return $this->container['job_manager_task'];
    }

    /**
     * Sets job_manager_task
     * @param \Progrupa\Azure\Model\JobManagerTask $job_manager_task If the job does not specify a Job Manager task, the user must explicitly add tasks to the job using the Task API. If the job does specify a Job Manager task, the Batch service creates the Job Manager task when the job is created, and will try to schedule the Job Manager task before scheduling other tasks in the job.
     * @return $this
     */
    public function setJobManagerTask($job_manager_task)
    {
        $this->container['job_manager_task'] = $job_manager_task;

        return $this;
    }

    /**
     * Gets job_preparation_task
     * @return \Progrupa\Azure\Model\JobPreparationTask
     */
    public function getJobPreparationTask()
    {
        return $this->container['job_preparation_task'];
    }

    /**
     * Sets job_preparation_task
     * @param \Progrupa\Azure\Model\JobPreparationTask $job_preparation_task If a job has a Job Preparation task, the Batch service will run the Job Preparation task on a compute node before starting any tasks of that job on that compute node.
     * @return $this
     */
    public function setJobPreparationTask($job_preparation_task)
    {
        $this->container['job_preparation_task'] = $job_preparation_task;

        return $this;
    }

    /**
     * Gets job_release_task
     * @return \Progrupa\Azure\Model\JobReleaseTask
     */
    public function getJobReleaseTask()
    {
        return $this->container['job_release_task'];
    }

    /**
     * Sets job_release_task
     * @param \Progrupa\Azure\Model\JobReleaseTask $job_release_task The primary purpose of the Job Release task is to undo changes to compute nodes made by the Job Preparation task. Example activities include deleting local files, or shutting down services that were started as part of job preparation. A Job Release task cannot be specified without also specifying a Job Preparation task for the job. The Batch service runs the Job Release task on the compute nodes that have run the Job Preparation task.
     * @return $this
     */
    public function setJobReleaseTask($job_release_task)
    {
        $this->container['job_release_task'] = $job_release_task;

        return $this;
    }

    /**
     * Gets common_environment_settings
     * @return \Progrupa\Azure\Model\EnvironmentSetting[]
     */
    public function getCommonEnvironmentSettings()
    {
        return $this->container['common_environment_settings'];
    }

    /**
     * Sets common_environment_settings
     * @param \Progrupa\Azure\Model\EnvironmentSetting[] $common_environment_settings Individual tasks can override an environment setting specified here by specifying the same setting name with a different value.
     * @return $this
     */
    public function setCommonEnvironmentSettings($common_environment_settings)
    {
        $this->container['common_environment_settings'] = $common_environment_settings;

        return $this;
    }

    /**
     * Gets pool_info
     * @return \Progrupa\Azure\Model\PoolInformation
     */
    public function getPoolInfo()
    {
        return $this->container['pool_info'];
    }

    /**
     * Sets pool_info
     * @param \Progrupa\Azure\Model\PoolInformation $pool_info
     * @return $this
     */
    public function setPoolInfo($pool_info)
    {
        $this->container['pool_info'] = $pool_info;

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


