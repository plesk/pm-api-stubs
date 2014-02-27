<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of regular tasks for module.
 *
 * @package Plesk_Modules
 */
class pm_Scheduler 
{

    
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
     * Reset the singleton instance
     */
    public static function resetInstance() { }

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
     * Remove task from scheduler
     * @param pm_Scheduler_Task $task
     */
    public function removeTask($task) { }

    /**
     * Remove all tasks of of current module
     */
    public function removeAllTasks() { }

}
