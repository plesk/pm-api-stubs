<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Abstract class for injection into form
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Form implements pm_Hook_Interface
{

    const FORM_CREATE_DOMAIN = 'smb-form-final-web-adddomain';

    const FORM_CREATE_SUBDOMAIN = 'smb-form-final-web-addsubdomain';

    const FORM_CREATE_SUBSCRIPTION = 'adminpanel-form-final-createsubscription';

    const FORM_CREATE_CUSTOMER = 'adminpanel-form-final-customer';

    /**
     * Append sub forms in any existing form
     *
     * @param string $controller
     * @param string $action
     * @param string $formId
     * @return pm_Form_SubForm[]
     */
    public function getSubForms($controller, $action, $formId) { }

}
