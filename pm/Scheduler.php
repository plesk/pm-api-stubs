<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Manager of regular tasks for module.
 *
 * @package Plesk_Modules
 * @since 11.0
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
     * @since 11.5
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
     *
     * @throws pm_Exception When task with the same parameters, but no ID assigned already exists in the database
     */
    public function putTask(pm_Scheduler_Task $task) { }

    /**
     * Remove task from scheduler
     * @param pm_Scheduler_Task $task
     * @throws pm_Exception
     */
    public function removeTask(pm_Scheduler_Task $task) { }

    /**
     * Remove all tasks of current module
     */
    public function removeAllTasks() { }

    /**
     * Enable task
     *
     * @param pm_Scheduler_Task $task
     * @throws pm_Exception
     * @since 17.0
     */
    public function enableTask(pm_Scheduler_Task $task) { }

    /**
     * Disable task
     *
     * @param pm_Scheduler_Task $task
     * @throws pm_Exception
     * @since 17.0
     */
    public function disableTask(pm_Scheduler_Task $task) { }

}
