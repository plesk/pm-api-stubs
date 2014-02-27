<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * @package Plesk_Modules
 */
abstract class pm_Controller_Action extends Zend_Controller_Action 
{

    /**
     * Currently logged in user
     *
     * @var UserClient
     */
    protected $_user;

    /**
     * Action status
     *
     * @var CommonPanel_Controller_Action_Status
     */
    protected $_status;

    
    public function init() { }

    
    public function postDispatch() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @return string
     */
    public static function lmsg($key) { }

}
