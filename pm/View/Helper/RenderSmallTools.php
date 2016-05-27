<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for rendering small buttons in view
 *
 * @package Plesk_Modules
 */
class pm_View_Helper_RenderSmallTools extends Zend_View_Helper_Abstract 
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
    public function renderSmallTools($tools) { }

}
