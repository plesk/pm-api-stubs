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
     * @internal
     * @param string $taskId
     */
    public function setId($taskId) { }

    /**
     * Return commang to be executed
     * @return string
     */
    public function getCmd() { }

    /**
     * Set commang to be executed
     * @param string $cmd
     */
    public function setCmd($cmd) { }

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

    /**
     * Hide module php interpreter call and script full path for module-specific tasks and detect task owner module.
     * @internal
     * @param $cmd string Task command
     * @return string Shortened command.
     */
    protected function _prepareCmd($cmd) { }

}
