<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Manager of long tasks.
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_LongTask_Manager
{

    
    public function __construct() { }

    /**
     * Start task execution
     *
     * @param pm_LongTask_Task $task Task to start
     * @param pm_Domain|null $domain Domain context or null for no context
     * @return pm_LongTask_Task Launched task
     * @throws pm_Exception
     */
    public function start(pm_LongTask_Task $task, pm_Domain $domain = null) { }

    /**
     * Get task queue filtered by ID and context
     *
     * @param string[] $ids Task IDs
     * @param pm_Domain[]|null $domains Domain contexts or null for task without any context
     * @return pm_LongTask_Task[] Task queue
     */
    public function getTasks(array $ids, $domains = null) { }

    /**
     * Cancel task and delete it
     * @param pm_LongTask_Task $task Task to be canceled
     */
    public function cancel(pm_LongTask_Task $task) { }

    /**
     * Cancel all extension tasks and delete them
     */
    public function cancelAllTasks() { }

}
