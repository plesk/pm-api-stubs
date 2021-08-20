<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Service Plan wrapper
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Plan
{

    /**
     * Create new plan wrapper
     *
     * @param int $planId
     */
    public function __construct($planId) { }

    /**
     * Retrieve plan id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve plan name
     *
     * @return string
     */
    public function getName() { }

    /**
     * Whether current plan is reseller plan
     *
     * @return bool
     * @since 18.0
     */
    public function isResellerPlan() { }

    /**
     * Retrieve permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     */
    public function hasPermission($name) { }

    /**
     * Retrieve Plesk core permission value by name
     *
     * @param string $name Permission name
     * @return mixed
     */
    public function hasCorePermission($name) { }

    /**
     * Retrieve limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     */
    public function getLimit($name) { }

    /**
     * Retrieve Plesk core limit value by name
     *
     * @param string $name Limit name
     * @return mixed
     */
    public function getCoreLimit($name) { }

    /**
     * Get included plan items
     *
     * @return array
     * @since 17.0
     */
    public function getPlanItems() { }

}
