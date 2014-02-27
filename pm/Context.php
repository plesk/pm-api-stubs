<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Define module constants and setup context
 *
 * @package Plesk_Modules
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
     */
    public static function reset() { }

    /**
     * Check if module context is initialized or not
     *
     * @return bool
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
     */
    public static function getActionUrl($controller, $action = 'index') { }

    /**
     * Retrieve information about module from registry
     *
     * @return Zend_Db_Table_Row
     */
    public static function getModuleInfo() { }

    /**
     * Retrieve URL for modules list
     *
     * @return string
     */
    public static function getModulesListUrl() { }

}
