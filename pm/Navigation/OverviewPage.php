<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Base class for object's overview pages
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Navigation_OverviewPage extends pm_Navigation_Page
{

    /**
     * Returns array of object for this page
     *
     * ```php
     * [
     *     [
     *         'id' => string,
     *         'title' => string,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @return array
     */
    abstract public function getData();

    /**
     * Returns context object for this page
     *
     * ```php
     * [
     *     'id' => string,
     *     'title' => string,
     * ]
     * ```
     *
     * @return array|null
     */
    public function getCurrentItem() { }

    /**
     * Returns page label
     *
     * @return string
     */
    public function getLabel() { }

}
