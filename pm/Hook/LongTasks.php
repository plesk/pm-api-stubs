<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for registering long tasks
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_LongTasks implements pm_Hook_Interface
{

    /**
     * Retrieve the list of long tasks
     *
     * @return pm_LongTask_Task[]
     */
    abstract public function getLongTasks();

}
