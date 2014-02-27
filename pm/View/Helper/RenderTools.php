<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for rendering big buttons in view
 *
 * @package Plesk_Modules
 */
class pm_View_Helper_RenderTools extends Zend_View_Helper_Abstract 
{

    /**
     * Render tools
     *
     *      array (
     *          array (
     *              'icon' => string,
     *              'title' => string,
     *              'description' => string,
     *              'controller' => string,
     *              'action' => string,
     *              'link' => string,
     *          ),
     *      )
     *
     * @param array $tools
     * @return string
     */
    public function renderTools($tools) { }

}
