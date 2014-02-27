<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Base form
 *
 * @see Zend_Form
 * @package Plesk_Modules
 */
class pm_Form_Simple extends CommonPanel_Form 
{

    const DECORATOR = 'DECORATOR';

    const ELEMENT = 'ELEMENT';

    const METHOD_DELETE = 'delete';

    const METHOD_GET = 'get';

    const METHOD_POST = 'post';

    const METHOD_PUT = 'put';

    const ENCTYPE_URLENCODED = 'application/x-www-form-urlencoded';

    const ENCTYPE_MULTIPART = 'multipart/form-data';

    /**
     * Create a new form
     *
     * @see Zend_Form::__construct
     * @param mixed|array $options basic Zend_Form options
     */
    public function __construct($options = []) { }

    /**
     * Initialize form
     */
    public function init() { }

    /**
     * Add a new element
     *
     * Basic elements are:
     *  Text
     *  Password
     *  Textarea
     *  SimpleText
     *  Select
     *  Radio
     *  Checkbox
     *  Hidden
     *
     * More classes see in CommonPanel\Form\Element and Zend\Form\Element
     *
     * @see Zend_Form::addElement
     * @param string|Zend_Form_Element $element
     * @param string $name
     * @param array|Zend_Config $options
     * @return Zend_Form
     */
    public function addElement($element, $name = null, $options = null) { }

    /**
     * Add control buttons: Ok and Cancel
     *
     *      array (
     *          'sendTitle' => string,
     *          'sendHidden' => bool,
     *          'cancelTitle' => string,
     *          'cancelLink' => string,
     *          'cancelHidden' => bool,
     *          'withSeparator' => bool,
     *          'hideLegend' => bool,
     *          'presubmitHandler' => string,
     *      )
     *
     * @param array $params
     */
    public function addControlButtons($params = []) { }

    /**
     * Get element id
     *
     * @return string
     */
    public function getId() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @return string
     */
    public function lmsg($key) { }

}
