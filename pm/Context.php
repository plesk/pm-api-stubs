<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Define module constants and setup context
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Context
{

    /**
     * Initialize module context
     *
     * @param string $moduleId
     */
    public static function init($moduleId) { }

    /**
     * Reset module context
     * @since 11.5
     */
    public static function reset() { }

    /**
     * Check if module context is initialized or not
     *
     * @return bool
     * @since 12.0
     */
    public static function isInitialized() { }

    /**
     * Retrieve module identity
     *
     * @return string
     */
    public static function getModuleId() { }

    /**
     * Retrieve path to module's plib directory
     *
     * @return string
     */
    public static function getPlibDir() { }

    /**
     * Retrieve path to module's htdocs directory
     *
     * @return string
     */
    public static function getHtdocsDir() { }

    /**
     * Retrieve path to module's var directory
     *
     * @return string
     */
    public static function getVarDir() { }

    /**
     * Retrieve module base URL
     *
     * @return string
     */
    public static function getBaseUrl() { }

    /**
     * Retrieve URL for controller action
     *
     * @param string $controller
     * @param string $action
     * @return string
     * @since 12.0
     */
    public static function getActionUrl($controller, $action = 'index') { }

    /**
     * Retrieve information about module from registry
     *
     * @return Zend_Db_Table_Row|Db_Table_Row_Module
     */
    public static function getModuleInfo() { }

    /**
     * Retrieve URL for modules list
     *
     * @return string
     */
    public static function getModulesListUrl() { }

    /**
     * Retrieve module buy URL
     *
     * @return string
     * @since 12.5
     */
    public static function getBuyUrl() { }

    /**
     * Retrieve URL for license upgrade (or buy URL as a fallback)
     *
     * @return string
     * @since 17.5
     */
    public static function getUpgradeLicenseUrl() { }

}
