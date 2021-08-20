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
     * @since 18.0.38
     */
    const FORM_DOMAIN_APPLICATION_WIZARD = 'form-domain-application-wizard';

    /**
     * @since 18.0.37
     */
    const FORM_DOMAIN_CONNECTION_INFO = 'smb-form-final-web-connectioninfo';

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
