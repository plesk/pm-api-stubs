<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for registering events
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_ActionLog implements pm_Hook_Interface
{

    /**
     * Retrieve the list of events
     *
     * ```php
     * [
     *     'unique_event_id' => 'Event title',
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getEvents();

}
