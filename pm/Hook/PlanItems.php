<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for additional plan items
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_PlanItems implements pm_Hook_Interface
{

    /**
     * Retrieve the list of plan items
     *
     * ```php
     * [
     *     'unique_plan_item_id' => 'Plan item name'
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getPlanItems();

    /**
     * Specify whether plan items are exclusive (dropdown is used) or non-exclusive (checkboxes are used)
     *
     * @return bool
     */
    public function isExclusive() { }

}
