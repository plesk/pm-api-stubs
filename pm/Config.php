<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Configuration settings reader (panel.ini settings)
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Config
{

    /**
     * Retrieve extension's config parameter value by name
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public static function get($name, $default = null) { }

    /**
     * Retrieve all extension's configuration settings
     *
     * @return array
     */
    public static function getAll() { }

    /**
     * Retrieve all configuration settings
     *
     * @return array
     * @since 18.0.29
     */
    public static function getCore() { }

}
