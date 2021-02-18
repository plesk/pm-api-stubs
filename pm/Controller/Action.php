<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for all extensions controllers
 *
 * @see Zend_Controller_Action
 * @package Plesk_Modules
 * @since 11.0
 */
abstract class pm_Controller_Action extends Zend_Controller_Action implements Zend_Controller_Action_Interface
{

    /**
     * Action status
     *
     * @var pm_View_Status
     */
    protected $_status;

    /**
     * Access level restrictions. Possible values: 'admin', 'reseller', 'client'
     *
     * @since 12.0
     * @var string|array
     */
    protected $_accessLevel = [];

    /**
     * Initialize controller
     */
    public function init() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public static function lmsg($key, $params = []) { }

}
