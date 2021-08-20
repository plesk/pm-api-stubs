<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Helper for rendering small buttons in view
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_Helper_RenderSmallTools extends Zend_View_Helper_Abstract implements Zend_View_Helper_Interface
{

    /**
     * Render small tools bar
     *
     * ```php
     * [
     *     [
     *         'id' => string,
     *         'title' => string,
     *         'description' => string,
     *         'class' => string,
     *         'controller' => string,
     *         'action' => string,
     *         'link' => string,
     *     ],
     *     ...
     * ]
     *
     * @param array $tools
     * @return string
     */
    public function renderSmallTools(array $tools) { }

}
