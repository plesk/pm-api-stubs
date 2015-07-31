<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Panel license keys management class
 *
 * @package Plesk_Modules
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

}
