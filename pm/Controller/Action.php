<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for all extensions controllers
 *
 * @see Zend_Controller_Action
 * @package Plesk_Modules
 */
abstract class pm_Controller_Action extends Zend_Controller_Action 
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
