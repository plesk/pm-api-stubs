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

    /** @since 18.0.83 */
    const EMAIL_OWNER = 'owner';
    /** @since 18.0.83 */
    const EMAIL_CUSTOM = 'custom';

    /**
     * Create instance of task for scheduler
     * @param Db_Table_Row_ScheduledTask|null $task null for new task
     * @param bool $isRawCommand If true, command and arguments are read from (and written to) their
     *        own DB columns directly, with no module-script-path parsing/wrapping and no module id.
     *        @since 18.0.83
     */
    public function __construct(?Db_Table_Row_ScheduledTask $task = null, bool $isRawCommand = false) { }

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
     * @since 18.0.83
     */
    public function setActive(bool $isActive): void { }

    /**
     * Return task type
     * @return string
     * @since 18.0.83
     */
    public function getType(): string { }

    /**
     * Set task type, one of self::TYPE_*. Switching away from self::TYPE_PHP clears the PHP handler
     * id, the same way {@see setEmailType()} clears the email address when switching to EMAIL_OWNER.
     * For a non-module task, switching to a type that no longer supports arguments clears them too.
     * @since 18.0.83
     * @throws pm_Exception_InvalidArgumentException If $type is not one of self::TYPE_*
     */
    public function setType(string $type): void { }

    /**
     * Return PHP handler id, applicable only when type is "php"
     * @return string
     * @since 18.0.83
     */
    public function getPhpHandlerId(): string { }

    /**
     * Set PHP handler id. Call {@see setType()} with self::TYPE_PHP first: it is only accepted
     * when the task's current type is "php", and, unless blank, must be one of the server's
     * available, CLI-runnable PHP handlers (the same list the Scheduler UI's PHP handler dropdown
     * offers).
     * @since 18.0.83
     * @throws pm_Exception_InvalidArgumentException If type is not "php", or $phpHandlerId is not
     *         one of the available PHP handlers
     */
    public function setPhpHandlerId(string $phpHandlerId): void { }

    /**
     * Return task description
     * @return string
     * @since 18.0.83
     */
    public function getDescription(): string { }

    /**
     * @since 18.0.83
     */
    public function setDescription(string $description): void { }

    /**
     * Return notification mode
     * @return string
     * @since 18.0.83
     */
    public function getNotify(): string { }

    /**
     * Set notification mode, one of self::NOTIFY_*
     * @since 18.0.83
     * @throws pm_Exception_InvalidArgumentException If $notify is not one of self::NOTIFY_*
     */
    public function setNotify(string $notify): void { }

    /**
     * Return notification email address type
     * @since 18.0.83
     */
    public function getEmailType(): string { }

    /**
     * Set notification email address type, one of self::EMAIL_*.
     * @since 18.0.83
     * @throws pm_Exception_InvalidArgumentException If $emailType is not one of self::EMAIL_*
     */
    public function setEmailType(string $emailType): void { }

    /**
     * Return notification email address
     * @return string
     * @since 18.0.83
     */
    public function getEmail(): string { }

    /**
     * Set notification email address. Call {@see setEmailType()} with self::EMAIL_CUSTOM first: a
     * non-blank value is only accepted when the task's current email type is EMAIL_CUSTOM. Accepts
     * a single address or several addresses separated by a comma.
     * @since 18.0.83
     * @throws pm_Exception_InvalidArgumentException If email type is not EMAIL_CUSTOM, or $email
     *         contains an invalid address
     */
    public function setEmail(string $email): void { }

}
