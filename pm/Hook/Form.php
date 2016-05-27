<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for injection into form
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_Form implements pm_Hook_Interface
{

    const FORM_CREATE_DOMAIN = 'smb-form-final-web-adddomain';

    const FORM_CREATE_SUBDOMAIN = 'smb-form-final-web-addsubdomain';

    const FORM_CREATE_SUBSCRIPTION = 'adminpanel-form-final-createsubscription';

    const FORM_CREATE_CUSTOMER = 'adminpanel-form-final-customer';

    /**
     * Initialize form: append elements and sub forms
     *
     * @param Zend_Form $form
     * @return void
     */
    abstract public function init($form);

    /**
     * Process form with element values after submit
     *
     * @param Zend_Form $form
     * @return void
     */
    abstract public function process($form);

    /**
     * Validate form
     *
     * @param Zend_Form $form
     * @param array $data
     * @return bool
     */
    public function isValid($form, $data) { }

    /**
     * Check if hook is enabled or not
     *
     * @param Zend_Form $form
     * @return bool
     */
    public function isEnabled($form) { }

    /**
     * Move form element before existing one
     *
     * @param Zend_Form $form
     * @param string $name
     * @param string $beforeName
     */
    public function moveBefore($form, $name, $beforeName) { }

    /**
     * Move form element after existing one
     *
     * @param Zend_Form $form
     * @param string $name
     * @param string $afterName
     */
    public function moveAfter($form, $name, $afterName) { }

}
