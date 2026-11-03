<?php
// Copyright 1999-2026. WebPros International GmbH. All rights reserved.
/**
 * Regular task representation.
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Scheduler_Task
{
    /** @since 18.0.83 */
    const TYPE_EXEC = 'exec';
    /** @since 18.0.83 */
    const TYPE_HTTP = 'http';
    /** @since 18.0.83 */
    const TYPE_PHP = 'php';

    /** @since 18.0.83 */
    const NOTIFY_IGNORE = 'ignore';
    /** @since 18.0.83 */
    const NOTIFY_ERRORS = 'errors';
    /** @since 18.0.83 */
    const NOTIFY_ALWAYS = 'always';

    /**
     * Create instance of task for scheduler
     * @param Db_Table_Row_ScheduledTask|null $task null for new task
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
     * @return void
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
     * @return void
     *
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
     * @return void
     */
    public function setSchedule(array $schedule) { }

    /**
     * Return module identity of task
     * @return string
     */
    public function getModuleId() { }

    /**
     * Return task status
     * @return bool
     * @since 18.0.52
     */
    public function isActive(): bool { }

    /**
     * Return task type
     * @return string
     * @since 18.0.83
     */
    public function getType(): string { }

    /**
     * Return PHP handler id, applicable only when type is "php"
     * @return string
     * @since 18.0.83
     */
    public function getPhpHandlerId(): string { }

    /**
     * Return task description
     * @return string
     * @since 18.0.83
     */
    public function getDescription(): string { }

    /**
     * Return notification mode
     * @return string
     * @since 18.0.83
     */
    public function getNotify(): string { }

    /**
     * Return notification email address
     * @return string
     * @since 18.0.83
     */
    public function getEmail(): string { }

}
