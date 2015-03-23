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
     * @param string $name
     * @param string $value
     */
    public static function set($name, $value) { }

    
    public static function clean() { }

}
