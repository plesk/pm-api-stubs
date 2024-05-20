<?php
// Copyright 1999-2024. WebPros International GmbH. All rights reserved.
/**
 * Abstract class for injection into form
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Form implements pm_Hook_Interface
{

    public const FORM_CREATE_DOMAIN = 'smb-form-final-web-adddomain';

    public const FORM_CREATE_SUBDOMAIN = 'smb-form-final-web-addsubdomain';

    public const FORM_CREATE_SUBSCRIPTION = 'adminpanel-form-final-createsubscription';

    public const FORM_CREATE_CUSTOMER = 'adminpanel-form-final-customer';

    /**
     * @since 18.0.37
     */
    public const FORM_DOMAIN_CONNECTION_INFO = 'smb-form-final-web-connectioninfo';

    /**
     * @since 18.0.41
     */
    public const FORM_EMAIL_ADDRESS_SETTINGS = 'smb-form-final-emailaddress';

    /**
     * @since 18.0.53
     */
    public const FORM_EMAIL_ADDRESS_CONNECTION_INFO = 'smb-form-final-emailaddress-connectioninfo';

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
