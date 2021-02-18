<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Base class for Zend_Navigation_Page pages
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Navigation_Page extends Zend_Navigation_Page_Mvc
{

    /**
     * Returns page label
     *
     * @return string
     */
    public function getLabel() { }

    /**
     * Returns page screen title
     *
     * @return string
     */
    public function getPageTitle() { }

    /**
     * Returns href for this page
     *
     * @return string
     */
    public function getHref() { }

    /**
     * Sets whether the page should be rendered as tabs
     *
     * @param bool $tabbed [optional] Default is true.
     * @return $this
     */
    public function setTabbed($tabbed = true) { }

    /**
     * Returns whether page should be rendering tabs
     *
     * @return bool
     */
    public function isTabbed() { }

    /**
     * Returns closest overview page
     *
     * @return pm_Navigation_OverviewPage|null
     */
    public function getOverviewPage() { }

}
