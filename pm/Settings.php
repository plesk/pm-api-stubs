<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of module settings
 *
 * @package Plesk_Modules
 */
class pm_Settings 
{

    /**
     * Return value of setting with given name
     * @param string $name
     * @param mixed $default
     * @return string|null
     */
    public static function get($name, $default = null) { }

    /**
     * Set value of setting with given name
     *
     * @param string $name
     * @param string $value
     *
     * @throws Zend_Db_Table_Exception
     * @throws Zend_Db_Table_Row_Exception
     * @throws pm_Exception_InvalidArgumentException
     */
    public static function set($name, $value) { }

    /**
     * Remove settings
     * @param string $prefix settings prefix
     */
    public static function clean($prefix = '') { }

}
