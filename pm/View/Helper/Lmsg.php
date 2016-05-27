<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for translating messages
 *
 * @package Plesk_Modules
 */
class pm_View_Helper_Lmsg extends Zend_View_Helper_Abstract 
{

    
    public function init() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public function lmsg($key, $params = []) { }

    /**
     * Get section of messages by key according to current locale
     *
     * @param $key
     *
     * @return array
     */
    public function getSection($key) { }

}
