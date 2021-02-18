<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for registering events
 *
 * @package Plesk_Modules
 * @since 17.0
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
