<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Regular task representation.
 *
 * @package Plesk_Modules
 */
class pm_Scheduler_Task 
{

    /**
     * Create instance of task for scheduler
     * @param string $task null for new task
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
     */
    public function getArguments() { }

    /**
     * Set arguments of command to be executed
     * @param array $arguments
     */
    public function setArguments($arguments) { }

    /**
     * Return schedule of task in associated array format
     * @return array Associated array with keys minute, hour, dom, month, dow
     */
    public function getSchedule() { }

    /**
     * Schedules task to be executed at specified moment
     * @param array $schedule Associated array with keys minute, hour, dom, month, dow
     */
    public function setSchedule($schedule) { }

    /**
     * Return module identity of task
     * @return string
     */
    public function getModuleId() { }

}
