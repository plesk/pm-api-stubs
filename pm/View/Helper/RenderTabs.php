<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Helper for rendering tabs in view
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_Helper_RenderTabs extends Zend_View_Helper_Abstract implements Zend_View_Helper_Interface
{

    /**
     * Render tabs
     *
     * ```php
     * [
     *     [
     *         'id' => string,
     *         'title' => string,
     *         'active' => bool,
     *         'controller' => string,
     *         'action' => string,
     *         'link' => string,
     *     ],
     *     ...
     * ]
     * ```
     *
     *
     * @param array $tabs
     * @return string
     */
    public function renderTabs(array $tabs) { }

}
