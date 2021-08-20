<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Manager of module settings
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Settings
{

    /**
     * Retrieve value of setting by given name
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     */
    public static function get($name, $default = null) { }

    /**
     * Store value of setting
     * Value length is limited to
     * - 5000 characters (since Plesk 17.8)
     * - 2000 characters (prior to Plesk 17.8)
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     *
     * @throws Zend_Db_Table_Exception
     * @throws Zend_Db_Table_Row_Exception
     * @throws pm_Exception_InvalidArgumentException
     */
    public static function set($name, $value) { }

    /**
     * Delete all settings
     *
     * @param string $prefix Settings name prefix
     * @since 12.5
     * @since 17.0 added argument $prefix
     */
    public static function clean($prefix = '') { }

    /**
     * Retrieve value of setting by given name with decryption (AES-128 CBC)
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     * @since 17.8
     */
    public static function getDecrypted($name, $default = null) { }

    /**
     * Store value of setting in encrypted form (AES-128 CBC)
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     * @since 17.8
     */
    public static function setEncrypted($name, $value) { }

}
