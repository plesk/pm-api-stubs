<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Extension wrapper
 *
 * @package Plesk_Modules
 * @since 17.8
 */
class pm_Extension
{

    /**
     * Retrieve extension id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve extension name
     *
     * @return string
     */
    public function getName() { }

    /**
     * Retrieve extension version
     *
     * @return string
     */
    public function getVersion() { }

    /**
     * Retrieve extension release
     *
     * @return string
     */
    public function getRelease() { }

    /**
     * Retrieve extension activity state
     *
     * @return bool
     */
    public function isActive() { }

    /**
     * Retrieve all installed extensions
     *
     * @return pm_Extension[]
     */
    public static function getExtensions() { }

    /**
     * Get extension by identifier
     *
     * @param string $id
     * @return pm_Extension
     */
    public static function getById($id) { }

    /**
     * Install extension by identifier
     *
     * @param string $id
     * @return pm_Extension
     * @throws pm_Exception
     */
    public static function installById($id) { }

    /**
     * Install extension by URL
     *
     * @param string $url
     * @return pm_Extension
     * @throws pm_Exception
     */
    public static function installByUrl($url) { }

    /**
     * Install extension by file
     *
     * @param string $file
     * @return pm_Extension
     * @throws pm_Exception
     */
    public static function installByFile($file) { }

    /**
     * Uninstall the extension
     *
     * @throws pm_Exception
     */
    public function uninstall() { }

    /**
     * Enable the extension
     *
     * @throws pm_Exception
     */
    public function enable() { }

    /**
     * Disable the extension
     *
     * @throws pm_Exception
     */
    public function disable() { }

}
