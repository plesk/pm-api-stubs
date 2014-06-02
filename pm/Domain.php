<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Domain wrapper
 *
 * @package Plesk_Modules
 */
class pm_Domain 
{

    /**
     * Create new domain wrapper
     *
     * @param int $domainId
     */
    public function __construct($domainId) { }

    /**
     * Retrieve domain id
     *
     * @return int
     */
    public function getId() { }

    /**
     * Retrieve domain name
     *
     * @return string
     */
    public function getName() { }

    /**
     * Retrieve owner of domain
     *
     * @return pm_Client
     */
    public function getClient() { }

    /**
     * Retrieve property of domain
     *
     * @param string $name
     * @return string
     */
    public function getProperty($name) { }

}
