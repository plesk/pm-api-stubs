<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Helper for translating messages
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_View_Helper_Lmsg extends Zend_View_Helper_Abstract implements Zend_View_Helper_Interface
{

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
     * @since 17.0
     */
    public function getSection($key) { }

}
