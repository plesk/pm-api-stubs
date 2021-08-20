<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for content injection into Plesk pages
 *
 * @package Plesk_Modules
 * @since 12.0
 */
abstract class pm_Hook_ContentInclude implements pm_Hook_Interface
{

    /**
     * Init routines generating content using other APIs (e.g. pm_View_Status)
     *
     */
    public function init() { }

    /**
     * Retrieve key-value array which will be encoded into JSON and added to HTML head tag as JavaScript block
     *
     * @return array
     */
    public function getJsConfig() { }

    /**
     * Retrieve JavaScript code which will be added to HTML head tag
     *
     * @return string
     */
    public function getJsContent() { }

    /**
     * Retrieve JavaScript code which will be added to HTML head tag and fired after DOMReady event
     *
     * @return string
     */
    public function getJsOnReadyContent() { }

    /**
     * Retrieve additional HTML content which will be added to HTML head tag
     *
     * @return string
     */
    public function getHeadContent() { }

    /**
     * Retrieve additional HTML content which will be added to HTML body tag
     *
     * @return string
     */
    public function getBodyContent() { }

    /**
     * Retrieve additional HTML content which will be added to sidebar area
     *
     * @return string
     * @since 17.8
     */
    public function getSidebarContent() { }

}
