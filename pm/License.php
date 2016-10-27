<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Panel license keys management class
 *
 * @package Plesk_Modules
 * @since 12.5
 */
class pm_License
{

    /**
     * Gets list of additional keys data.
     *
     * @param null|string $productName
     * @return array
     */
    public static function getAdditionalKeysList($productName = null) { }

    /**
     * Checks if an additional license key for extension is present
     *
     * @param string $moduleId
     * @return bool
     */
    public static function hasAdditionalKey($moduleId = null) { }

    /**
     * Retrieves an additional key for extension
     *
     * @param string $moduleId
     * @return null|static
     */
    public static function getAdditionalKey($moduleId = null) { }

    /**
     * Main license key id will be used if keyNumber is not specified
     *
     * @param null|string $keyNumber
     */
    public function __construct($keyNumber = null) { }

    /**
     * Gets license key's properties.
     *
     * @return array
     * @throws pm_Exception
     */
    public function getProperties() { }

    /**
     * Gets license key's specified property.
     *
     * @param $propertyName
     * @return null|string|bool|int
     */
    public function getProperty($propertyName) { }

    /**
     * Gets license key's specified inner property.
     *
     * @param $propertyName
     * @return null|string|bool|int
     */
    public function getBodyProperty($propertyName) { }

}
