<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
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
     * Initialize form
     */
    public function init() { }

    /**
     * Add control buttons
     *
     * @param array $params
     */
    public function addControlButtons($params = []) { }

    
    public function getId() { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @return string
     */
    public function lmsg($key) { }

}
