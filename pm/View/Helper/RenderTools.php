<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Helper for rendering big buttons in view
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_Helper_RenderTools extends Zend_View_Helper_Abstract implements Zend_View_Helper_Interface
{

    /**
     * Render tools
     *
     * ```php
     * [
     *     [
     *         'id' => string,
     *         'icon' => string,
     *         'title' => string,
     *         'description' => string,
     *         'controller' => string,
     *         'action' => string,
     *         'link' => string,
     *     ],
     *     ...
     * ]
     * ```
     *
     * @param array $tools
     * @return string
     */
    public function renderTools(array $tools) { }

}
