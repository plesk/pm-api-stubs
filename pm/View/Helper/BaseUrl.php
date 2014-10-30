<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for prepending URL with base URL
 *
 * @package Plesk_Modules
 */
class pm_View_Helper_BaseUrl extends Zend_View_Helper_Abstract 
{

    /**
     * Add base URL to URL
     *
     * @param string $url
     * @return string
     */
    public function baseUrl($url) { }

    /**
     * Prepare URL for specified controller/action in context of module
     *
     *      array (
     *          'controller' => string,
     *          'action' => string,
     *          'link' => string,
     *      )
     *
     * @param array|string $params
     * @return string
     */
    public function moduleUrl($params) { }

}
