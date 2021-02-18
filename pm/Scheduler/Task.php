<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Regular task representation.
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Scheduler_Task
{

    /**
     * Create instance of task for scheduler
     * @param Db_Table_Row_ScheduledTask $task null for new task
     */
    public function __construct($task = null) { }

    /**
     * Return id of task
     * @return string
     */
    public function getId() { }

    /**
     * Return command to be executed
     * @return string
     */
    public function getCmd() { }

    /**
     * Set command to be executed
     * @param string $cmd
     */
    public function setCmd($cmd) { }

    /**
     * Return arguments of command to be executed
     * @return array
     * @since 11.5
     */
    public function getArguments() { }

    /**
     * Set arguments of command to be executed
     * @param array $arguments
     * @since 11.5
     */
    public function setArguments(array $arguments) { }

    /**
     * Return schedule of task in associated array format
     * @return array Associated array with keys minute, hour, dom, month, dow
     */
    public function getSchedule() { }

    /**
     * Schedules task to be executed at specified moment
     *
     * ```php
     * [
     *     'minute' => '*',
     *     'hour' => '*',
     *     'dom' => '*',
     *     'month' => '*',
     *     'dow' => '*',
     * ]
     * ```
     *
     * @param array $schedule Associated array with keys minute, hour, dom, month, dow
     */
    public function setSchedule(array $schedule) { }

    /**
     * Return module identity of task
     * @return string
     */
    public function getModuleId() { }

}
