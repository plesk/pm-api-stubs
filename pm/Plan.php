<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
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
     * Retrieve permission value by name
     *
     * @param string $name
     * @return mixed
     */
    public function hasPermission($name) { }

    /**
     * @param string $name
     * @return mixed
     */
    public function getLimit($name) { }

}
