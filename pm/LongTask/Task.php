<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Long task object
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_LongTask_Task
{

    const STATUS_NOT_STARTED = 'not_started';

    const STATUS_RUNNING = 'running';

    const STATUS_ERROR = 'error';

    const STATUS_DONE = 'done';

    /**
     * Number of tasks that can be executed at the same time, -1 is equal to unlimited pool size
     *
     * @var int
     * @deprecated use `getConcurrencyRules` method
     */
    public $poolSize = -1;

    /**
     * Is task progress trackable
     *
     * @var bool
     */
    public $trackProgress = false;

    /**
     * Is task progress visible in Plesk UI
     *
     * @var bool
     */
    public $hidden = false;

    /**
     * Message contains unescaped html
     *
     * @return bool
     */
    public $hasDangerousMessage = false;

    
    public function __construct() { }

    /**
     * Define task execution logic
     */
    abstract public function run();

    /**
     * Define task unique ID
     * @return string Task identifier
     */
    public function getId() { }

    /**
     * Define current status message
     *
     * @return string Message to be shown in task progress bar
     */
    public function statusMessage() { }

    /**
     * Define processing adding task to queue
     */
    public function onStart() { }

    /**
     * Define processing error
     *
     * @param Exception $e Exception that was thrown on task execution
     */
    public function onError(Exception $e) { }

    /**
     * Define on task done logic
     */
    public function onDone() { }

    /**
     * Set task parameter
     *
     * @param string $name Parameter name
     * @param mixed $value Parameter value
     * @throws pm_Exception
     */
    public function setParam($name, $value) { }

    /**
     * Set task parameters as array
     *
     * @param array $params Task parameters specified in format [$paramName => $paramValue]
     */
    public function setParams(array $params) { }

    /**
     * Get task parameter
     *
     * @param string $name Parameter name
     * @param mixed $default Default parameter value
     * @return mixed Parameter value
     */
    public function getParam($name, $default = null) { }

    /**
     * Get all task parameters as array
     *
     * @return array All task parameters specified in format [$paramName => $paramValue]
     */
    public function getParams() { }

    /**
     * Get ID of launched task
     * @return int Task instance identifier
     */
    public function getInstanceId() { }

    /**
     * Get task progress
     *
     * @return int Current task progress (from 0 to 100) or -1 if task progress is not trackable
     */
    public function getProgress() { }

    /**
     * Get task status
     *
     * @return string Current task status, one of STATUS_NOT_STARTED|STATUS_RUNNING|STATUS_ERROR|STATUS_DONE
     */
    public function getStatus() { }

    /**
     * Update task progress
     *
     * @param int $progress Task progress, from 0 to 100
     */
    public function updateProgress($progress) { }

    /**
     * Sequence of steps in ProgressDialog
     *
     * ```php
     * [
     *     'example-step' => [
     *         'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
     *         'title' => 'Example Processing',
     *         'progressStatus' => 'Processed 10 of 100 items',
     *         'progress' => 10,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    public function getSteps() { }

    /**
     * Human-readable description of the task
     *
     * @since 18.0.35
     * @return string
     */
    public function getDescription() { }

    /**
     * List of tags for concurrency limitation
     * Each tag limits the number of concurrent tasks that can be executed at the same time.
     * Limits per tag are configured in Task Manager configuration.
     * Tags without limit configuration default to a limit of 1 (no concurrent execution).
     * Empty tags list results in no additional limits.
     *
     * @since 18.0.36
     * @return string[]
     */
    public function getConcurrencyRules() { }

    /**
     * Array representation of task
     *
     * @return array
     */
    public function toArray() { }

}
