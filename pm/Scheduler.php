<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of regular tasks for module.
 *
 * @package Plesk_Modules
 */
class pm_Scheduler 
{

    /**
     * @internal
     * @var string
     */
    protected $_user = 'root';

    /**
     * Class for regular task representation
     * @var string
     */
    protected $_schedulerTask = 'pm_Scheduler_Task';

    /**
     * If true then listTasks returns all tasks
     * If false then listTasks returns only tasks of current module
     * @internal
     * @var bool
     */
    protected $_manageAllTasks = false;

    
    public static $EVERY_MIN = [];

    
    public static $EVERY_5_MIN = [];

    
    public static $EVERY_10_MIN = [];

    
    public static $EVERY_HOUR = [];

    
    public static $EVERY_DAY = [];

    
    public static $EVERY_WEEK = [];

    
    public static $EVERY_MONTH = [];

    /**
     * Create new manager of regular tasks
     */
    public function __construct() { }

    /**
     * Get instance of pm_Scheduler
     * @return pm_Scheduler
     */
    public static function getInstance() { }

    /**
     * List all tasks of current module
     * @return pm_Scheduler_Task[]
     */
    public function listTasks() { }

    /**
     * Return task by its id
     * @param string $taskId
     * @return pm_Scheduler_Task
     */
    public function getTaskById($taskId) { }

    /**
     * Update or add new task to scheduler
     * @param pm_Scheduler_Task $task
     */
    public function putTask($task) { }

    /**
     * @internal
     * @param SchedulerStamp $schedulerStamp
     * @param array $schedule
     */
    protected function _prepareSchedule($schedulerStamp, $schedule) { }

    /**
     * @internal
     * @param string $cmd
     * @param string $moduleId
     * @return array
     */
    protected function _prepareCmd($cmd, $moduleId) { }

    /**
     * Remove task from scheduler
     * @param pm_Scheduler_Task $task
     */
    public function removeTask($task) { }

    /**
     * Remove all tasks of of current module
     */
    public function removeAllTasks() { }

}
