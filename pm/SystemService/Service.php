<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Service provided by extension
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_SystemService_Service
{

    /**
     * Define service display name
     * @return string Service display name
     */
    abstract public function getName();

    /**
     * Define task unique ID
     * @return string Service identifier
     */
    public function getId() { }

    /**
     * Define service start logic
     */
    public function onStart() { }

    /**
     * Define service stop logic
     */
    public function onStop() { }

    /**
     * Define service restart logic
     */
    public function onRestart() { }

    /**
     * Define if service is installed
     * @return bool
     */
    public function isInstalled() { }

    /**
     * Define if service is configured
     * @return bool
     */
    public function isConfigured() { }

    /**
     * Define if service is running
     * @return bool
     */
    public function isRunning() { }

}
